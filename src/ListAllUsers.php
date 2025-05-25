<?php
session_start();
include_once (__DIR__.'/assets/templates/header.php');
Navigation();
?>
<form action="ListAllUsers.php" method="post">
	Search <input type="text" name="KeyWord" /> <input type="image" src="download.png" align="middle" />
</form>
<table border="1">
	<tr>
		<td colspan="4">
			<font color=red><?php echo @$_GET["Msg"]; ?></font>
		</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>Full Name</td>
		<td>DOB</td>
		<td>Delete</td>
	</tr>


	<?php

	echo date("l jS \of F Y h:i:s A");
	include "Userfnc.php";

	if (!isset($_SESSION["Email"])) {
	}

	if (isset($_REQUEST["KeyWord"])) {

		$f = getAllUsersByKeyWord($_REQUEST["KeyWord"]);
	} else {
		$f = getAllUsers();
	}
	for ($i = 0; $i < count($f); $i++) {
		$Row = explode("~", $f[$i]);
		if (count($Row) > 2) {


			echo "<tr>";
			for ($j = 1; $j < count($Row); $j++) {
				if ($j == 1) {
					echo "<td><a href=updateUser.php?id=$Row[0]>" . $Row[$j] . "</a></td>";
				} else {
					if ($j != 2)
						echo "<td>" . $Row[$j] . "</td>";
				}


			}
			echo "<td><a href=deleteUser.php?id=$Row[0]>X</a></td>";
			echo "</tr>";

		}
	}

	?>
	<tr>
		<td colspan="4" align="center"><a href="RegisterationForm.php">Add new User</a></td>
	</tr>
</table>

<?php
include_once (__DIR__.'/assets/templates/footer.php');
Footer();
?>