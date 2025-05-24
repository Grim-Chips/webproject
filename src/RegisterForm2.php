<?php
include "Userfnc.php";

$pass = Encrypt($_REQUEST["Password"], 2);

if (addUser($_POST["Email"], $pass, $_REQUEST["FullName"], $_REQUEST["DOB"])) {
	header("Location: ListAllUsers.php?Msg=Record Added Sucessfully");
} else {
	echo "Duplicate email";
}
?>