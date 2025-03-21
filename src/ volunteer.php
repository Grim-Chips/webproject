<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer - Egyptian Red Crescent</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?
    include_once __DIR__ . "/assets/templates/header.php";
    Navigation();
    ?>

    <section id="volunteer">
        <h2>Become a Volunteer</h2>
        <p>Join the Egyptian Red Crescent as a volunteer and make a difference in people's lives.</p>
        <h3>Why Volunteer?</h3>
        <ul>
            <li>Provide humanitarian aid to those in need</li>
            <li>Gain valuable skills and experience</li>
            <li>Be part of a dedicated and passionate team</li>
        </ul>
        <h3>How to Apply</h3>
        <p>Fill out our <a href="volunteerform.php">volunteer application form</a> and we will get in touch with you
            soon.</p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Egyptian Red Crescent. All rights reserved.</p>
    </footer>
</body>

</html>