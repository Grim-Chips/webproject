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

<!-- <style>
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    footer .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    footer p {
        margin: 0;
        padding: 0;
    }

    footer .footer-links,
    footer .social-links {
        list-style: none;
        padding: 0;
        margin: 10px 0 0;
    }

    footer .footer-links li,
    footer .social-links li {
        display: inline;
        margin: 0 10px;
    }

    footer .footer-links a,
    footer .social-links a {
        color: #fff;

        text-decoration: none;
    }

    footer .footer-links a:hover,
    footer .social-links a:hover {
        text-decoration: underline;
    }
</style> -->