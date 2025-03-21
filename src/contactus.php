<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($name)  empty($email)  empty($message)) {
        $error_message = "All fields are required!";
   
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>

    <h2>Contact Us</h2>

    
    <?php if ($error_message): ?>
        <p style="color: red;"><?= $error_message ?></p>
    <?php endif; ?>
    <?php if ($success_message): ?>
        <p style="color: green;"><?= $success_message ?></p>
    <?php endif; ?>

    <form method="POST">
        <div style="margin-bottom: 10px;">
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" value="<?= isset($name) ? $name : '' ?>" required placeholder="Enter your name" style="width: 100%; padding: 8px; border: 1px solid #000;">
        </div>

        <div style="margin-bottom: 10px;">
            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" value="<?= isset($email) ? $email : '' ?>" required placeholder="Enter your email" style="width: 100%; padding: 8px; border: 1px solid #000;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="message">Message:</label><br>
             id="message" name="message" rows="4" required placeholder="Your message" style="width: 100%; padding: 8px; border: 1px solid #000;">
        </div>

        <button type="submit" style="padding: 10px 20px; border: 1px solid #000; cursor: pointer;">Send Message</button>
    </form>

</body>
</html>
