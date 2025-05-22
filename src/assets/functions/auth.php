<?php
session_start();

function readUsers($filename)
{
    $users = [];
    if (file_exists($filename)) {
        foreach (file($filename, FILE_IGNORE_NEW_LINES) as $line) {
            $parts = explode(',', $line, 2);
            if (count($parts) == 2) {
                $users[trim($parts[0])] = trim($parts[1]);
            }
        }
    }
    return $users;
}

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login.php");
    exit();
}

$users = readUsers('users.txt');
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    header("Location: login.php?error=Invalid+login");
}
exit();
?>