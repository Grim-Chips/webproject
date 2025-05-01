<?php

?>
<form action="/project1/webproject/src/assets/functions/doLogin.php" method="post">
    <table>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="Email" required /></td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" id="password" name="Password" required /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Login" /></td>
        </tr>
    </table>
</form>