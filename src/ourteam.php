<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - Egyptian Red Crescent</title>
    <link rel="stylesheet" href="assets/css/ourteam.css">
</head>

<body>

    <?php
    include_once __DIR__ . "/assets/templates/header.php";
    Navigation();
    ?>
    <h1>Our Team</h1>
    <table id="ourteam">
        <tr>leadership</tr>
        <tr>
            <td>Dr. Ahmed Hassan</td>
            <td>President</td>
        </tr>
        <tr>
            <td>Sarah Mahmoud</td>
            <td>Director of Operations</td>
        </tr>
        <tr>
            <td>Omar Khaled</td>
            <td>Head of Volunteer Services</td>
        </tr>
        <tr>Our Volunteers</tr>
        <tr>
            <td>Thousands of volunteers across Egypt contribute to our mission, providing medical aid, disaster
                relief,<br>
                and community support.</td>
        </tr>
    </table>

    <?php
    include_once __DIR__ . "/assets/templates/footer.php";
    Footer();
    ?>
</body>

</html>