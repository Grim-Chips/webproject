<?php
include "UserFnc.php";

$pass = Encrypt($_REQUEST["Password"], 2);

//addUser_Check
if (addUser($_POST["Email"], $pass, $_REQUEST["FullName"], $_REQUEST["DOB"])) {
	echo "Success";
} else {
	echo "Duplicate ID";
}
?>