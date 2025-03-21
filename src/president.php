<?php
// president.php

// Page title
$title = "President Information";

// Read the president's details from a text file
$presidentFile = __DIR__ . '/president.txt';
$president = [];

if (file_exists($presidentFile)) {
    $lines = file($presidentFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        list($key, $value) = explode('=', $line, 2);
        $president[trim($key)] = trim($value);
    }
} else {
    die("Error: President information file not found.");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($president['name']); ?></h1>
        <p><strong>Term:</strong> <?php echo htmlspecialchars($president['term']); ?></p>
        <p><strong>Country:</strong> <?php echo htmlspecialchars($president['country']); ?></p>
        <p><?php echo htmlspecialchars($president['bio']); ?></p>
    </div>
</body>

</html>