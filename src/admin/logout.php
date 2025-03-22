<?php
// logout.php - Enhanced logout handling
session_start();

// Store user info before clearing for message
$was_logged_in = isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true;
$username = isset($_SESSION["fullname"]) ? $_SESSION["fullname"] : "User";

// Clear all session variables
$_SESSION = array();

// If a session cookie is used, clear that too
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect to login page with appropriate message
if ($was_logged_in) {
    header("Location: login.php?logout=true&msg=" . urlencode("Goodbye, $username! You have been logged out successfully."));
} else {
    header("Location: login.php");
}
exit();
?>