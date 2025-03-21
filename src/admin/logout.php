<?php
// logout.php - Handle logout
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: login.php?logout=true");
exit();
?>