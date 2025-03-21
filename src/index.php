<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egyptian Red Crescent</title>
</head>

<body>
    <?php
    include_once __DIR__ . "/assets/templates/header.php";
    // if (function_exists('Navigation')) {
    //     Navigation();
    // } else {
    //     echo "<p>Error: Navigation function not found.</p>";
    // }
    
    // if (function_exists('Footer')) {
    //     Footer();
    // } else {
    //     echo "<p>Error: Footer function not found.</p>";
    // }
    Navigation();
    ?>

    <h1>Welcome to the Home Page</h1>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="ourteam.php">Our Team</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php"><button>Login/Sign Up</button></a></li>
            <li><a href="logout.php"><button>Logout</button></a></li>
            <li><a href="volunteer.php">Volunteer</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="news.php">News</a></li>
        </ul>
    </nav>

    <?php
    include_once __DIR__ . "/assets/templates/footer.php";
    Footer();
    ?>
</body>

</html>