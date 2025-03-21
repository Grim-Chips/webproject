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
    <h1 style="text-align: center;">Our Team</h1>
    <table id="ourteam">
        <tr>
            <th colspan="2" style="text-align: center;">Leadership</th>
        </tr>
        <tr>
            <td><a href="president.php" style="text-decoration: none; color: inherit;">Dr. Ahmed Hassan</a></td>
            <td><a href="president.php" style="text-decoration: none; color: inherit;">President</a></td>
        </tr>
        <tr>
            <td><a href="operations.php" style="text-decoration: none; color: inherit;">Sarah Mahmoud</a></td>
            <td><a href="operations.php" style="text-decoration: none; color: inherit;">Director of Operations</a></td>
        </tr>
        <tr>
            <td><a href="volunteer_services.php" style="text-decoration: none; color: inherit;">Omar Khaled</a></td>
            <td><a href="volunteer_services.php" style="text-decoration: none; color: inherit;">Head of Volunteer
                    Services</a></td>
        </tr>
        <tr style="text-align: center;">
            <td><a href="volunteers.php" style="text-decoration: none; color: inherit;">Our Volunteers</a></td>
            <td colspan="2" style="text-align: center">
                <a href="volunteers.php" style="text-decoration: none; color: inherit;">
                    Thousands of volunteers across Egypt contribute to our mission, providing medical aid, disaster
                    relief,<br>
                    and community support.
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <img src="assets/images/1202518215814679.jpg" alt="Volunteers">
            </td>
        </tr>
    </table>

    <?php
    include_once __DIR__ . "/assets/templates/footer.php";
    Footer();
    ?>
</body>

</html>