<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>

<body>
    <?php
    include_once __DIR__ . "/assets/templates/header.php";
    // if (function_exists('Navigation')) {
    //     Navigation();
    // } else {
    //     echo "<p>Error: Navigation function not found.</p>";
    // }
    
    // if (function_exists('Footer')) {
    //     Footer();
    // } else {
    //     echo "<p>Error: Footer function not found.</p>";
    // }
    Navigation();
    ?>
    <h1>Welcome to the Home Page</h1>
    <?php
    include_once __DIR__ . "/assets/templates/footer.php";
    Footer();
    ?>
</body>



</html>