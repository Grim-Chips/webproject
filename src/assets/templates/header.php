<?php
function Navigation()
{
    echo '
        <link rel="stylesheet" href="../src/assets/css/header.css?ver=1.0">
        
        <nav style="display: flex; align-items: center;">
            <img src="../src/assets/images/logo.jpeg" alt="logo" style="width: 300px; height: auto; margin-right: 20px;">
            <div>
                <a href="index.php">Home</a>
                <a href="volunteer.php">Volunteer</a>
                <a href="about.php">About</a>
                <a href="history.php">History</a>
                <a href="trainingcourses.php">training courses</a>
                <a href="projects_programs.php">projects/programs</a>
                <a href="login.php">login</a>
            </div>
        </nav>';
}
?>