<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - Egyptian Red Crescent</title>

</head>

<body>
    <!-- <link rel="stylesheet" href="/webproject/src/assets/css/ourteam.css"> -->
    <?php
    include_once __DIR__ . "/assets/templates/header.php";
    Navigation();
    0
        ?>
    <h1 style="text-align: center;">Our Team</h1>
    <table id="ourteam">
        <tr>
            <th colspan="2" style="text-align: center;">Leadership</th>
        </tr>
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

        <tr style="text-align: center;">
            <td>Our Volunteers</td>
            <td colspan="2" style="text-align: center">Thousands of volunteers across Egypt contribute to our mission,
                providing medical aid, disaster
                relief,<br>
                and community support.</td>
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
<style>
    #ourteam {
        margin-left: auto;
        margin-right: auto;
    }

    #ourteam th,
    #ourteam td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }

    #ourteam th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    #ourteam tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    #ourteam tr:hover {
        background-color: #f1f1f1;
    }

    #ourteam {
        border-collapse: collapse;
        width: 80%;
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #333;
    }
</style>

</html>