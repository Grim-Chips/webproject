<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Initialize error and success messages
    $error_message = "";
    $success_message = "";

    if (empty($name) || empty($email) || empty($message)) {
        $error_message = "All fields are required!";
    } else {
        // Process the form (e.g., send an email or save to a database)
        $success_message = "Your message has been sent successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/css/contactus.css">
</head>

<body>
    <div class="contact-container">
        <h2>Contact Us</h2>

        <?php if (!empty($error_message)): ?>
            <p class="error-message"><?= $error_message ?></p>
        <?php endif; ?>
        <?php if (!empty($success_message)): ?>
            <p class="success-message"><?= $success_message ?></p>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" value="<?= isset($name) ? htmlspecialchars($name) : '' ?>"
                    required placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" value="<?= isset($email) ? htmlspecialchars($email) : '' ?>"
                    required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required
                    placeholder="Your message"><?= isset($message) ? htmlspecialchars($message) : '' ?></textarea>
            </div>

            <button type="submit" class="submit-button">Send Message</button>
        </form>
    </div>
</body>

</html>