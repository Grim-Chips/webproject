<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.html");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>

<body>
    <h2>Admin Login</h2>

    <?php

    ?>
    <form action="adminauth.php" method="post">

        Email<input type="text" name="Email" />
        Password<input type="password" name="Password" />
        <input type="submit" />
        <input type="reset" /><br>
        <div> not an admin</div> <a href="index.php">leave</a>
        <br />
    </form>

</body>

</html>