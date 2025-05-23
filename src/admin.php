<?php
include "Functions.php";
include "UserFnc.php";
session_start();
if (!isset($_SESSION["Email"])) {
    header("Location: login.php");
    exit;
}

?>