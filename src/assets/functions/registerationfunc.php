<?php
include_once "filefunctions.php";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Encrypt password
    $pass = Encrypt($_POST["Password"], 2);

    // Call addUser function with proper parameters
    if (addUser($_POST["Email"], $pass, $_POST["FullName"], $_POST["DOB"], $_POST["userType"])) {
        echo "Success";
    } else {
        echo "Duplicate Email";
    }
} else {
    echo "Invalid request method";
}