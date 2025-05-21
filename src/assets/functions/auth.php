<?php
session_start();

// Function to read users from the file users.txt
function readUsers($filename)
{
    $users = [];
    if (file_exists($filename)) {
        $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);



        foreach ($lines as $line) {
            list($user, $pass) = explode(',', trim($line));
            $users[$user] = $pass;
        }
    }
    return $users;
}

$users = readUsers('users.txt');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        header("Location: login.php?error=Invalid username or password");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>