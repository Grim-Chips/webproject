<?php
<?php
session_start();
// Example admin check (customize as needed)
if (!isset($_SESSION['Email']) || $_SESSION['Email'] !== 'admin@example.com') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .admin-container {
            max-width: 600px;
            margin: 60px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            padding: 30px 40px 25px 40px;
        }
        h2 {
            color: #b30000;
            text-align: center;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 18px 0;
        }
        a {
            color: #b30000;
            text-decoration: none;
            font-size: 1.1em;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="ListAllUsers.php">Manage Users</a></li>
            <li><a href="donations_report.php">View Donations</a></li>
            <li><a href="edit_content.php">Edit Site Content</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>