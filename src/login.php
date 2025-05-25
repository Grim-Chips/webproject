<?php
include_once (__DIR__.'/assets/templates/header.php');
Navigation();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="dologin.php" method="post" style="text-align: center;">

  Email<input type="text" name="Email" />
  Password<input type="password" name="Password" />
  <input type="submit" />
  <input type="reset" /><br>
  donot have an account? <a href="RegisterationForm.php" style="color: blue;">Register</a>
  <br />
</form>
</body>
</html>
<?php
include_once (__DIR__.'/assets/templates/footer.php');
Footer();
?>