<?php
session_start();

if (!isset($_SESSION['userType'])) {
    header("Location: ../login.php");
    exit();
}

if ($_SESSION['userType'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

?>