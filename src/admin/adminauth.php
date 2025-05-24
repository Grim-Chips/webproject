<?php
function isAdmin()
{
    session_start();
    return isset($_SESSION['username']) && $_SESSION['role'] === 'admin';
}
function redirectToLogin()
{
    header("Location: ../adminlogin.html");
    exit();
}
?>