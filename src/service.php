<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Egyptian Red Crescent</title>
    <link rel="stylesheet" href="assets/css/service.css">

    


</head>

<body>
    <?php
    include_once __DIR__ . "/assets/templates/header.php";
    Navigation();
    ?>

    <section id="emergency">
        <h2> <a href="emergency-details.php">Learn More about Emergency Response</a></h2>
        <p>We provide immediate disaster relief and emergency assistance to communities affected by crises.</p>
    </section>

    <section id="medical">
        <h2><a href="medical-details.php">Learn More about Medical Assistance</a></h2>
        <p>Our medical teams offer first aid, health services, and support to vulnerable populations.</p>
    </section>

    <section id="training">
        <h2><a href="trainingcourses.php">Learn More about Training Programs</a></h2>
        <p>We conduct first aid and disaster response training programs to equip individuals with life-saving skills.
        </p>
    </section>

    <?php
    include_once __DIR__ . "/assets/templates/footer.php";
    Footer();
    ?>
</body>

</html>