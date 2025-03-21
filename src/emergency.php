<?php
$responses = [
    ["title" => "Flood Relief Efforts", "date" => "2025-03-25", "description" => "Providing shelter and food to those affected by recent floods.", "link" => "#"],
    ["title" => "Earthquake Assistance Program", "date" => "2025-03-18", "description" => "Dispatching medical teams to earthquake-stricken areas.", "link" => "#"],
    ["title" => "Medical Aid for Conflict Zones", "date" => "2025-03-12", "description" => "Delivering emergency medical supplies to affected regions.", "link" => "#"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Response</title>
</head>
<body>
    <h2>Emergency Response Initiatives</h2>
    <ul>
        <?php foreach ($responses as $response) : ?>
            <li>
                <h3><?php echo $response['title']; ?></h3>
                <p><strong>Date:</strong> <?php echo $response['date']; ?></p>
                <p><?php echo $response['description']; ?></p>
                <a href="<?php echo $response['link']; ?>">Read More</a>
            </li>
            <hr>
        <?php endforeach; ?>
    </ul>
</body>
</html>
