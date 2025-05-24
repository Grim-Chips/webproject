<?php
session_start();

$users = json_decode(file_get_contents("data/users.json"), true);

$username = $_POST['username'];
$password = $_POST['password'];

$logged_in = false;

for ($i = 0; $i < count($users); $i++) {
  if ($users[$i]['username'] == $username && $users[$i]['password'] == $password) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $users[$i]['role'];
    $logged_in = true;
    break;
  }
}

if ($logged_in) {
  echo json_encode(array("success" => true));
} else {
  echo json_encode(array("success" => false, "message" => "Wrong username or password"));
}
?>
