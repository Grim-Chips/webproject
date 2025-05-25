<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $method = $_POST['method'];
    
    if (!empty($name) && !empty($email) && !empty($amount) && !empty($method)) {
        echo "<p>Thank you, $name, for your donation of $$amount via $method.</p>";
    } else {
        echo "<p style='color:red;'>All fields are required!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
</head>
<body>
    <h2>Donate to Egyptian Red Crescent</h2>
    <form action="donate.php" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="amount">Donation Amount ($):</label>
        <input type="number" id="amount" name="amount" required>
        <br>
        <label for="method">Choose Donation Method:</label>
        <select id="method" name="method" required>
            <option value="home_collection">Home Collection</option>
            <option value="bank_transfer">Bank Transfer</option>
            <option value="credit_card">Credit Card</option>
        </select>
        <br>
        <button type="submit">Donate Now</button>
    </form>
</body>
</html>
