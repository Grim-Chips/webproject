<?php
function Footer()
{
    echo '
    
    <link rel="stylesheet" href="../src/assets/css/footer.css">
    <footer role="contentinfo">
    <div class="container">
    <p>&copy; ' . date('Y') . ' Your Company. All rights reserved.</p>
    <ul class="footer-links">
    <li><a href="about.php">About Us</a></li>
    <li><a href="contactus.php">Contact</a></li>
    <li><a href="privacy.php">Privacy Policy</a></li>
    <li><a href="terms.php">Terms of Service</a></li>
    <li><a href="sitemap.php">Sitemap</a></li>
    </ul>
    <ul class="social-links">
    <li><a href="https://facebook.com" aria-label="Facebook">Facebook</a></li>
    <li><a href="https://twitter.com" aria-label="Twitter">Twitter</a></li>
    <li><a href="https://linkedin.com" aria-label="LinkedIn">LinkedIn</a></li>
    </ul>
    </div>
    </footer>';
}
?>