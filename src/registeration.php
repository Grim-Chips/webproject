<?php

?>
<form action="src\assets\functions\registerationfunc.php" method="post">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="Email" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="Password" /></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="FullName" /></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><input type="text" name="DOB" /></td>
        </tr>
        <tr>
            <td><label for="userType">Choose User Type:</label></td>

            <td><select name="userType" id="userType">
                    <option value="1">Admin</option>
                    <option value="2">Teacher</option>
                    <option value="3">Student</option>
                </select></td>
        </tr>
        <tr>
            <td><input type="submit" /></td>
            <td><input type="reset" /></td>
        </tr>
    </table>
</form>