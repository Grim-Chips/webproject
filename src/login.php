<?php
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        form {
            background: #fff;
            max-width: 350px;
            margin: 60px auto 0 auto;
            padding: 30px 25px 20px 25px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        }
        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        form input[type="submit"],
        form input[type="reset"] {
            background: #b30000;
            color: #fff;
            border: none;
            padding: 10px 0;
            width: 48%;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            margin-right: 2%;
            transition: background 0.2s;
        }
        form input[type="reset"] {
            background: #888;
            margin-right: 0;
        }
        form input[type="submit"]:hover {
            background: #900;
        }
        form input[type="reset"]:hover {
            background: #555;
        }
        a {
            color: #b30000;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .register-link {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<form action="dologin.php" method="post">
    <label for="email">Email</label>
    <input type="text" id="email" name="Email" required />
    <label for="password">Password</label>
    <input type="password" id="password" name="Password" required />
    <input type="submit" value="Login" />
    <input type="reset" value="Reset" /><br>
    <span class="register-link">
        Don't have an account? <a href="RegisterationForm.php">Register</a>
    </span>
</form>
</body>
</html>