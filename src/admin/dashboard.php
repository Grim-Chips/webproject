<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.html");
    exit();
}

// Admin dashboard content goes here

?>