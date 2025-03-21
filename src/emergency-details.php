<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Response Details - Egyptian Red Crescent</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    include_once __DIR__ . "/assets/templates/header.php";
    Navigation();
    ?>

    <main>
        <h1>Emergency Response</h1>
        <p>
            The Egyptian Red Crescent provides immediate disaster relief and emergency assistance to communities affected by crises. 
            Our teams are trained to respond quickly to natural disasters, conflicts, and other emergencies, ensuring that affected 
            populations receive the support they need.
        </p>
        <h2>Our Services Include:</h2>
        <ul>
            <li>Disaster relief operations</li>
            <li>Emergency shelter and food distribution</li>
            <li>Search and rescue operations</li>
            <li>Psychological support for affected individuals</li>
        </ul>
        <a href="service.php">Back to Services</a>
    </main>

    <?php
    include_once __DIR__ . "/assets/templates/footer.php";
    Footer();
    ?>
</body>

</html>