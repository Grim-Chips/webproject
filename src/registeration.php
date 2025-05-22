<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
</head>

<body>
    <h2>User Registration</h2>
    <form action="src/assets/functions/registerationfunc.php" method="post">
        Username/Email<input type="text" name="username" required />
        Password<input type="password" name="Password" required />
        Full Name<input type="text" name="FullName" required />
        DOB<input type="date" name="DOB" required />
        User Type<select name="userType">
            <option value="1">Admin</option>
            <option value="2">Caregiver</option>
            <option value="3">User</option>
        </select>
        <input type="submit" value="Register" />
        <input type="reset" value="Clear" />
    </form>
    <p><a href="login.php">Already have an account? Login here</a></p>
</body>

</html>