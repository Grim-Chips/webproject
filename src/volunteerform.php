<?php
include_once __DIR__ . "/assets/templates/header.php";
Navigation();
?>
<?php
function getRequestMethod()
{
    return $_SERVER['REQUEST_METHOD'];
}
function getGetParam($name)
{
    return $_GET[$name] ?? null;
}
if (getRequestMethod() == "POST") {
    $name = getGetParam('name');
    $email = getGetParam('email');
    $phone = getGetParam('phone');
    $message = getGetParam('message');

    if ($name && $email && $phone && $message) {
        echo "<p>Thank you, $name! Your application has been received.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form - Egyptian Red Crescent</title>
    <link rel="stylesheet" href="assets/css/volunteerform.css">
</head>

<body>
    <h1>Volunteer Application Form</h1>

    <section>
        <h2>Join Us as a Volunteer</h2>
        <form action="volunteer_form.php" method="get">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="message">Why do you want to volunteer?</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

    <?php
    include_once __DIR__ . "/assets/templates/footer.php";
    Footer();
    ?>
</body>

</html>