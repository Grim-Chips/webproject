<?php
$projects = [
    ["title" => "Community Health Program", "description" => "Providing free medical checkups and vaccinations."],
    ["title" => "Youth Volunteer Initiative", "description" => "Engaging young people in humanitarian work."],
    ["title" => "Disaster Preparedness Project", "description" => "Training communities to respond to emergencies."]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects & Programs</title>
</head>

<body>
    <?php
    include_once __DIR__ . "/assets/templates/header.php";
    Navigation();
    ?>
    <h2>Ongoing Projects & Programs</h2>
    <ul>
        <?php foreach ($projects as $project): ?>
            <li>
                <h3><?php echo $project['title']; ?></h3>
                <p><?php echo $project['description']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php
    include_once __DIR__ . "/assets/templates/footer.php";
    Footer();
    ?>
</body>

</html>