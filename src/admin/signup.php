<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <form action="register.php" method="post">
        <h2>User Registration</h2>
        <div>
            <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
        </div>
        <div>
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <div>
            <button type="submit" class="button">Register</button>
        </div>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </form>
</body>

</html>