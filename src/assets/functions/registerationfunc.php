<?php
include "genfunctions.php";

$pass = Encrypt($_REQUEST["Password"], 2);

if (addUser($_POST["Email"], $pass, $_REQUEST["FullName"], $_REQUEST["DOB"], $_REQUEST["userType"])) {
    echo "Success";
} else {
    echo "Duplicate ID";
}
?>