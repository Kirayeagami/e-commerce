<footer class="modern-footer">
    <div class="footer-container">
        <div class="footer-brand">
            <h3 class="footer-logo">K I R A</h3>
            <p class="footer-tagline">Your Fashion Destination</p>
        </div>

        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="../pages/index.php">Home</a></li>
                <li><a href="../pages/collections.php">Collections</a></li>
                <li><a href="../pages/contact.php">Contact</a></li>
                <li><a href="../admin/login.php">Login</a></li>
            </ul>
        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="footer-social">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="#" class="social-icon" title="Facebook">F
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon" title="Twitter">X
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon" title="Instagram">I
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon" title="LinkedIn">L
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-newsletter">
            <h4>Newsletter</h4>
            <form class="newsletter-form" action="/includes/newsletter.php" method="POST">
                <input type="email" name="email" placeholder="Your email address" required>
                <button type="submit">
                    <i class="fas fa-paper-plane"></i>Subscribe
                </button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> K I R A Fashion. All rights reserved.</p>
    </div>
</footer>
