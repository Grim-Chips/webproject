<?php
include "Userfnc.php";

$id = isset($_REQUEST["id"]) ? intval($_REQUEST["id"]) : 0;

if ($id <= 0) {
	die("Invalid user ID.");
}

$Result = getUserById($id);

if (!$Result) {
	die("User not found.");
}

$Email = htmlspecialchars($Result['Email'], ENT_QUOTES, 'UTF-8');
$pass = htmlspecialchars(Decrypt($Result['Password'], 2), ENT_QUOTES, 'UTF-8');
?>
<form action="UpdateUser2.php" method="post">
	<table>
		<tr>
			<td>Email</td>
			<td><input disabled type="text" value="<?php echo $Email ?>" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="Password" value="<?php echo $pass ?>" /></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="FullName" value="<?php echo htmlspecialchars($Result['FullName'], ENT_QUOTES, 'UTF-8') ?>" /></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type="date" name="DOB" value="<?php echo htmlspecialchars($Result['DOB'], ENT_QUOTES, 'UTF-8') ?>" /></td>
		</tr>
		<tr>
			<td><input type="submit" /></td>
			<td><input type="reset" /></td>
		</tr>
	</table>
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<input type="hidden" name="Email" value="<?php echo $Email ?>" />
</form>
