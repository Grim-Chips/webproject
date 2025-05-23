<?php
include "UserFnc.php";

$pass = Encrypt($_REQUEST["Password"], 2);

if (Login($_POST["Email"], $pass)) {
	echo "Success ";
	session_start();

	$_SESSION["Email"] = $_POST["Email"];
	echo $_SESSION["Email"];
	echo "want to add user <br>";
	echo "<a href='ListAllUsers.php'>Add User</a>";

} else {
	echo "False Login";
}
?>