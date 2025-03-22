<?php
session_start();
// Redirect if already logged in
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    if ($_SESSION["role"] === "admin") {
        header("Location: admin.php");
    } else {
        header("Location: dashboard.php");
    }
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <form action="admin/dologin.php" method="post">
        <h2>Login</h2>

        <?php
        if (isset($_GET['registered']) && $_GET['registered'] == 'true') {
            echo '<div class="message message-success">Registration successful! Please login.</div>';
        }
        if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
            echo '<div class="message message-error">Invalid email or password!</div>';
        }
        if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
            echo '<div class="message message-info">You have been logged out successfully.</div>';
        }
        ?>

        <div>
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <div>
            <button type="submit" class="button">Login</button>
        </div>
        <p>Don't have an account? <a href="signup.php">Register here</a></p>
    </form>
</body>

</html>