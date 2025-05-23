<?php
// admin.php - Admin dashboard with user management
session_start();
require_once('config.php');

// Check if user is logged in and is admin
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true || $_SESSION["role"] !== "admin") {
    header("Location: login.php");
    exit();
}

// Handle user deletion
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['email'])) {
    $email_to_delete = $_GET['email'];
    $users = file($USER_FILE, FILE_IGNORE_NEW_LINES);
    $new_users = array();

    foreach ($users as $user) {
        $user_data = explode("|", $user);
        if ($user_data[1] !== $email_to_delete) {
            $new_users[] = $user;
        }
    }

    file_put_contents($USER_FILE, implode("\n", $new_users) . (empty($new_users) ? "" : "\n"));
    header("Location: admin.php?deleted=true");
    exit();
}

// Handle user addition
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);

    if (empty($fullname) || empty($email) || empty($password) || empty($role)) {
        $add_error = "All fields are required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $add_error = "Invalid email format";
    } else {
        // Check if email already exists
        $users = file_exists($USER_FILE) ? file($USER_FILE, FILE_IGNORE_NEW_LINES) : array();
        $email_exists = false;

        foreach ($users as $user) {
            $user_data = explode("|", $user);
            if ($user_data[1] === $email) {
                $email_exists = true;
                break;
            }
        }

        if ($email_exists) {
            $add_error = "Email already exists";
        } else {
            // Add the new user
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $new_user = $fullname . "|" . $email . "|" . $hashed_password . "|" . $role . "\n";
            file_put_contents($USER_FILE, $new_user, FILE_APPEND);
            header("Location: admin.php?added=true");
            exit();
        }
    }
}

// Handle user update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update') {
    $original_email = trim($_POST['original_email']);
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $role = trim($_POST['role']);
    $password = trim($_POST['password']);

    $users = file($USER_FILE, FILE_IGNORE_NEW_LINES);
    $new_users = array();

    foreach ($users as $user) {
        $user_data = explode("|", $user);
        if ($user_data[1] === $original_email) {
            // Update this user
            $hashed_password = empty($password) ? $user_data[2] : password_hash($password, PASSWORD_DEFAULT);
            $updated_user = $fullname . "|" . $email . "|" . $hashed_password . "|" . $role;
            $new_users[] = $updated_user;
        } else {
            $new_users[] = $user;
        }
    }

    file_put_contents($USER_FILE, implode("\n", $new_users) . (empty($new_users) ? "" : "\n"));
    header("Location: admin.php?updated=true");
    exit();
}

// Load list of users
$users = array();
if (file_exists($USER_FILE)) {
    $file_users = file($USER_FILE, FILE_IGNORE_NEW_LINES);
    foreach ($file_users as $user) {
        $user_data = explode("|", $user);
        if (count($user_data) >= 4) {
            $users[] = array(
                'fullname' => $user_data[0],
                'email' => $user_data[1],
                'hashed_password' => $user_data[2],
                'role' => $user_data[3]
            );
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="dashboard">
        <div class="header">
            <h2>Admin Dashboard</h2>
            <a href="logout.php" class="button logout-button">Logout</a>
        </div>

        <?php if (isset($_GET['deleted']) && $_GET['deleted'] === 'true'): ?>
            <div class="message">User deleted successfully.</div>
        <?php endif; ?>

        <?php if (isset($_GET['added']) && $_GET['added'] === 'true'): ?>
            <div class="message">User added successfully.</div>
        <?php endif; ?>

        <?php if (isset($_GET['updated']) && $_GET['updated'] === 'true'): ?>
            <div class="message">User updated successfully.</div>
        <?php endif; ?>

        <h3>Add New User</h3>
        <div class="form-container">
            <?php if (isset($add_error)): ?>
                <div class="message error"><?php echo $add_error; ?></div>
            <?php endif; ?>

            <form method="post" action="admin.php">
                <input type="hidden" name="action" value="add">
                <div class="form-field">
                    <label for="fullname">Full Name:</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-field">
                    <label for="role">Role:</label>
                    <select id="role" name="role">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-field">
                    <input type="submit" class="button" value="Add User">
                </div>
            </form>
        </div>

        <h3>Manage Users</h3>
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($users)): ?>
                    <tr>
                        <td colspan="4">No users found.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['fullname']); ?></td>
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                            <td><?php echo htmlspecialchars($user['role']); ?></td>
                            <td>
                                <a href="admin.php?action=edit&email=<?php echo urlencode($user['email']); ?>"
                                    class="button edit-button">Edit</a>
                                <a href="admin.php?action=delete&email=<?php echo urlencode($user['email']); ?>"
                                    class="button delete-button"
                                    onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

        <?php if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['email'])): ?>
            <?php
            $edit_email = $_GET['email'];
            $edit_user = null;

            foreach ($users as $user) {
                if ($user['email'] === $edit_email) {
                    $edit_user = $user;
                    break;
                }
            }

            if ($edit_user):
                ?>
                <h3>Edit User</h3>
                <div class="form-container">
                    <form method="post" action="admin.php">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="original_email" value="<?php echo htmlspecialchars($edit_user['email']); ?>">
                        <div class="form-field">
                            <label for="edit_fullname">Full Name:</label>
                            <input type="text" id="edit_fullname" name="fullname"
                                value="<?php echo htmlspecialchars($edit_user['fullname']); ?>" required>
                        </div>
                        <div class="form-field">
                            <label for="edit_email">Email:</label>
                            <input type="email" id="edit_email" name="email"
                                value="<?php echo htmlspecialchars($edit_user['email']); ?>" required>
                        </div>
                        <div class="form-field">
                            <label for="edit_password">Password (leave blank to keep current):</label>
                            <input type="password" id="edit_password" name="password">
                        </div>
                        <div class="form-field">
                            <label for="edit_role">Role:</label>
                            <select id="edit_role" name="role">
                                <option value="user" <?php echo $edit_user['role'] === 'user' ? 'selected' : ''; ?>>User</option>
                                <option value="admin" <?php echo $edit_user['role'] === 'admin' ? 'selected' : ''; ?>>Admin
                                </option>
                            </select>
                        </div>
                        <div class="form-field">
                            <input type="submit" class="button" value="Update User">
                            <a href="admin.php" class="button"
                                style="background-color: #ccc; color: #000; text-decoration: none;">Cancel</a>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>

</html>