<?php
session_start();

// Database connection (modify with your credentials)
$host = "localhost";
$user = "root";
$password = "";
$dbname = "your_database";
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle signup
if (isset($_POST['signup'])) {
    $username = $_POST['signup_username'];
    $password = password_hash($_POST['signup_password'], PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    if ($stmt->execute()) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Handle login
if (isset($_POST['login'])) {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];
    
    $sql = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);
    
    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            echo "Login successful!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <input type="text" name="login_username" placeholder="Username" required><br>
        <input type="password" name="login_password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
    
    <h2>Signup</h2>
    <form method="post">
        <input type="text" name="signup_username" placeholder="Username" required><br>
        <input type="password" name="signup_password" placeholder="Password" required><br>
        <button type="submit" name="signup">Signup</button>
    </form>
</body>
</html>
