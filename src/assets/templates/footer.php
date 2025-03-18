<?php
function Footer()
{
    echo '
    
    <link rel="stylesheet" href="../src/assets/css/footer.css">
    <footer role="contentinfo">
    <div class="container">
    <p>&copy; ' . date('Y') . ' Your Company. All rights reserved.</p>
    <ul class="footer-links">
    <li><a href="/about">About Us</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="/privacy">Privacy Policy</a></li>
    <li><a href="/terms">Terms of Service</a></li>
    <li><a href="/sitemap">Sitemap</a></li>
    </ul>
    <ul class="social-links">
    <li><a href="https://facebook.com/yourcompany" aria-label="Facebook">Facebook</a></li>
    <li><a href="https://twitter.com/yourcompany" aria-label="Twitter">Twitter</a></li>
    <li><a href="https://linkedin.com/company/yourcompany" aria-label="LinkedIn">LinkedIn</a></li>
    </ul>
    </div>
    </footer>';
}
?>