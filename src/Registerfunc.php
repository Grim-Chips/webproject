<?php
include "UserFnc.php";

$password = Encrypt($_REQUEST["Password"], 2);

//addUser_Check
if (addUser($_POST["Email"], $password, $_REQUEST["FullName"], $_REQUEST["DOB"], $_REQUEST["UserType"])) {
    echo '<script>alert("Success");</script>';
    header("Location: login.php");
} else {
    echo '<script>alert("Duplicate ID");</script>';
    header("Location: RegisterationForm.php");
    exit;
}
?>