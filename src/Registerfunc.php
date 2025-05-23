<?php
include "UserFnc.php";

$pass = Encrypt($_REQUEST["Password"], 2);

//addUser_Check
if (addUser($_POST["Email"], $pass, $_REQUEST["FullName"], $_REQUEST["DOB"])) {
    echo '<script>alert("Success");</script>';
    header("Location: login.php");
} else {
    echo '<script>alert("Duplicate ID");</script>';
    header("Location: RegisterationForm.php");
    exit;
}
?>