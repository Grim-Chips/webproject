<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
</head>

<body>
    <h2>User Registration</h2>
    <form action="registerationfunc.php" method="post">
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="Email" required /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password" required /></td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="FullName" required /></td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="date" name="DOB" required /></td>
            </tr>
            <tr>
                <td><label for="userType">Choose User Type:</label></td>
                <td>
                    <select name="userType" id="userType">
                        <option value="1">Admin</option>
                        <option value="2">Teacher</option>
                        <option value="3">Student</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Register" /></td>
                <td><input type="reset" value="Clear" /></td>
            </tr>
        </table>
    </form>
</body>