<?php
// dashboard.php - User dashboard
session_start();

// Check if user is logged in
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}

// Only allow regular users
if ($_SESSION["role"] === "admin") {
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body>
    <div class="dashboard">
        <div class="header">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION["fullname"]); ?>!</h2>
            <a href="logout.php" class="button">Logout</a>
        </div>
        <div class="content">
            <p>Email: <?php echo htmlspecialchars($_SESSION["email"]); ?></p>
            <p>Role: <?php echo htmlspecialchars($_SESSION["role"]); ?></p>
            <p>This is your user dashboard. You can access your account information and services here.</p>
        </div>
    </div>
</body>

</html>