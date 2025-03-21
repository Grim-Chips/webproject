<?php
$news = [
    ["title" => "Emergency Relief Efforts", "date" => "2025-03-20", "content" => "The Egyptian Red Crescent is actively providing aid to affected regions.", "link" => "#"],
    ["title" => "Blood Donation Drive", "date" => "2025-03-15", "content" => "Join our latest blood donation campaign to save lives.", "link" => "#"],
    ["title" => "Volunteer Training Program", "date" => "2025-03-10", "content" => "Sign up for our upcoming volunteer training sessions.", "link" => "#"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
</head>
<body>
    <h2>Latest News</h2>
    <ul>
        <?php foreach ($news as $article) : ?>
            <li>
                <h3><?php echo $article['title']; ?></h3>
                <p><strong>Date:</strong> <?php echo $article['date']; ?></p>
                <p><?php echo $article['content']; ?></p>
                <a href="<?php echo $article['link']; ?>">Read more</a>
            </li>
            <hr>
        <?php endforeach; ?>
    </ul>
</body>
</html>
