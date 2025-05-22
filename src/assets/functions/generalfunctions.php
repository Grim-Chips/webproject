<?php
// Function to check if user is logged in
function isLoggedIn()
{
    return isset($_SESSION['username']);
}

// Function to redirect if not logged in
function requireLogin($redirectTo = 'login.php')
{
    if (!isLoggedIn()) {
        header("Location: $redirectTo");
        exit();
    }
}

// Function to logout user
function logout($redirectTo = 'login.php')
{
    session_start();
    session_destroy();
    header("Location: $redirectTo");
    exit();
}

// Function to get current username
function getCurrentUser()
{
    return $_SESSION['username'] ?? null;
}

// Function to write users to file
function writeUser($filename, $username, $password, $fullname = '', $dob = '', $usertype = '3')
{
    $userData = "$username,$password,$fullname,$dob,$usertype\n";
    file_put_contents($filename, $userData, FILE_APPEND | LOCK_EX);
}

// Function to validate user input
function sanitizeInput($input)
{
    return htmlspecialchars(trim($input));
}
?>