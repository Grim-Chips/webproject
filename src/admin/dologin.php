<?php
// dologin.php - Process login
session_start();
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Check for admin login
    if ($email === $ADMIN_EMAIL && $password === $ADMIN_PASSWORD) {
        $_SESSION["logged_in"] = true;
        $_SESSION["email"] = $email;
        $_SESSION["fullname"] = "Administrator";
        $_SESSION["role"] = "admin";

        header("Location: admin.php");
        exit();
    }

    // Check for regular user login
    if (file_exists($USER_FILE)) {
        $users = file($USER_FILE, FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            $user_data = explode("|", $user);
            if ($user_data[1] === $email) {
                // Verify password
                if (password_verify($password, $user_data[2])) {
                    $_SESSION["logged_in"] = true;
                    $_SESSION["email"] = $email;
                    $_SESSION["fullname"] = $user_data[0];
                    $_SESSION["role"] = $user_data[3];

                    header("Location: dashboard.php");
                    exit();
                }
            }
        }
    }

    // Invalid login
    header("Location: login.php?error=invalid");
    exit();
}
?>