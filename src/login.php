<?php

session_start();
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit();
}
?>
<form action="loginfunctions.php" method="post">
    Email<input type="text" name="username" />Password<input type="password" name="password" /><input type="submit"
        value="login" />
</form>