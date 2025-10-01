        </main>
    </div> <!-- End site-container -->
    
    <!-- Footer Section -->
        <footer class="site-footer">
            <div class="footer-content">
                <!-- Company Info -->
                <div class="footer-section">
                    <h3>Parade of Color</h3>
                    <p>Professional painting and construction services with quality workmanship and customer satisfaction guaranteed.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="painting.php">Painting Services</a></li>
                        <li><a href="speciality.php">Specialty Finishes</a></li>
                        <li><a href="repairs.php">Repairs & Replacement</a></li>
                        <li><a href="carpentry-outdoors.php">Carpentry & Outdoor</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="footer-section">
                    <h4>Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="painting.php#interior-painting">Interior Painting</a></li>
                        <li><a href="painting.php#exterior-painting">Exterior Painting</a></li>
                        <li><a href="painting.php#commercial-painting">Commercial Painting</a></li>
                        <li><a href="speciality.php#epoxy-floors">Epoxy Floors</a></li>
                        <li><a href="speciality.php#stain-restoration">Stain Restoration</a></li>
                        <li><a href="carpentry-outdoors.php#wood-fence-construction">Fence Construction</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="footer-section">
                    <h4>Contact Information</h4>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>(208) 922-8618</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>info@paradeofcolor.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Kuna, Idaho 83634</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <span>Mon-Fri: 8AM-6PM<br>Sat: 9AM-4PM</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; <?php echo date('Y'); ?> Parade of Color Painting, LLC. All rights reserved.</p>
                    <div class="footer-bottom-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Sitemap</a>
                    </div>
                </div>
            </div>
        </footer>
    </div> <!-- End site-container -->
    
    <!-- JavaScript for enhanced functionality -->
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add loading states for better UX
        document.addEventListener('DOMContentLoaded', function() {
            // Add loaded class to body for CSS transitions
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
