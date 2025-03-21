<?php
require_once ;

if (getRequestMethod() == "POST") {
    $name = getGetParam('name');
    $email = getGetParam('email');
    $phone = getGetParam('phone');
    $message = getGetParam('message');
    
    if ($name && $email && $phone && $message) {
        echo "<p>Thank you, $name! Your application has been received.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form - Egyptian Red Crescent</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Volunteer Application Form</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="volunteer.php">Volunteer</a></li>
            </ul>
        </nav>
    </header>
    
    <section>
        <h2>Join Us as a Volunteer</h2>
        <form action="volunteer_form.php" method="get">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="message">Why do you want to volunteer?</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </section>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Egyptian Red Crescent. All rights reserved.</p>
    </footer>
</body>
</html>
