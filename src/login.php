<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <?php if (isset($_GET['error'])): ?>
        <p style="color: red;">Invalid login</p>
    <?php endif; ?>
    <form action="auth.php" method="post">
        Email<input type="text" name="username" required />
        Password<input type="password" name="password" required />
        <input type="submit" value="Login" />
    </form>
    <p><a href="registeration.php">Don't have an account? Register here</a></p>
</body>

</html>