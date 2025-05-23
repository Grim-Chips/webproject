<?php
// register.php - Process user registration
session_start();
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Basic validation
    if (empty($fullname) || empty($email) || empty($password)) {
        die("Please fill all fields");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    if (file_exists($USER_FILE)) {
        $users = file($USER_FILE, FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            $user_data = explode("|", $user);
            if ($user_data[1] == $email) {
                die("Email already registered. <a href='login.php'>Login here</a>");
            }
        }
    }

    // Save the user
    $new_user = $fullname . "|" . $email . "|" . $hashed_password . "|user\n";
    file_put_contents($USER_FILE, $new_user, FILE_APPEND);

    // Redirect to login page
    header("Location: login.php?registered=true");
    exit();
}
?>