<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Assistance Details - Egyptian Red Crescent</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    include_once __DIR__ . "/assets/templates/header.php";
    Navigation();
    ?>

    <main>
        <h1>Medical Assistance</h1>
        <p>
            Our medical teams are dedicated to providing first aid, health services, and support to vulnerable populations. 
            Whether it's during emergencies or in everyday situations, we ensure that medical care is accessible to those in need.
        </p>
        <h2>Our Services Include:</h2>
        <ul>
            <li>First aid and emergency medical care</li>
            <li>Mobile clinics for remote areas</li>
            <li>Health education and awareness programs</li>
            <li>Support for chronic disease management</li>
        </ul>
        <a href="service.php">Back to Services</a>
    </main>

    <?php
    include_once __DIR__ . "/assets/templates/footer.php";
    Footer();
    ?>
</body>

</html>