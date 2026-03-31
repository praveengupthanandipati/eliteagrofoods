<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container overflow-hidden">
        <div class="newsletter-card" data-aos="zoom-in">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-2">Subscribe to Our Newsletter</h2>
                    <p class="mb-0 text-white-50">Get the latest farm updates and exclusive Elite Mart offers.</p>
                </div>
                <div class="col-lg-6">
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email address" required>
                            <button class="btn btn-secondary-elite" type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container footer-top">
        <div class="row pt-5 pb-4">
            <!-- 1. Introduction -->
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="footer-about">
                    <h3 class="footer-logo mb-4">ELITE<span>AGRO</span></h3>
                    <p class="mb-4">Connecting the purity of the farm with the convenience of your table since 2024.
                        Your trusted partner for organic and fresh essentials.</p>
                    <div class="social-links">
                        <a href="#" class="facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="whatsapp" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- 2. Quick Links -->
            <div class="col-lg-3 col-md-6 mb-5 ps-lg-5">
                <h4 class="footer-title">Quick Links</h4>
                <ul class="list-unstyled footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="elitemart.php">Elite Mart</a></li>
                    <li><a href="farmmilk.php">Farm Milk</a></li>
                    <li><a href="businessb2b.php">B2B Services</a></li>
                </ul>
            </div>

            <!-- 3. Store Sections -->
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="footer-title">Our Store</h4>
                <ul class="list-unstyled footer-links">
                    <li><a href="farmmilk.php">Buffalo Milk</a></li>
                    <li><a href="elitemart.php">Fresh Vegetables</a></li>
                    <li><a href="elitemart.php">Grocery Staples</a></li>
                    <li><a href="businessb2b.php">Bulk Inquiries</a></li>
                    <li><a href="contact.php">Contact Support</a></li>
                </ul>
            </div>

            <!-- 4. Contact Details -->
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="footer-title">Get In Touch</h4>
                <div class="contact-card">
                    <div class="contact-item mb-3">
                        <div class="contact-icon"><i class="fas fa-location-dot"></i></div>
                        <div class="contact-text">123 Farm Drive, Green Valley, Hyderabad, India</div>
                    </div>
                    <div class="contact-item mb-3">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div class="contact-text">+91 98765 43210</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-clock"></i></div>
                        <div class="contact-text">Mon - Sun: 06 AM - 10 PM</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center py-4 border-top border-secondary border-opacity-10">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0 small opacity-50">&copy; 2024 <strong>Elite Agro Foods</strong>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0 small opacity-50">
                        <li class="list-inline-item me-3"><a href="privacy.php" class="text-white">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item me-3"><a href="terms.php" class="text-white">Terms of Service</a>
                        </li>
                        <li class="list-inline-item"><a href="cookies.php" class="text-white">Cookies</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Fixed Back to Top Button -->
<a href="#top" class="fixed-back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
</a>

<!-- Bootstrap & JS Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize Swiper
    const swiper = new Swiper('.heroSwiper', {
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 1000,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // Scroll Effects (Navbar & Back to Top)
    const mainNav = document.getElementById('mainNav');
    const backToTop = document.getElementById('backToTop');

    window.addEventListener('scroll', function () {
        // Navbar scroll effect
        if (window.scrollY > 50) {
            mainNav.classList.add('navbar-scrolled');
        } else {
            mainNav.classList.remove('navbar-scrolled');
        }

        // Back to top visibility
        if (window.scrollY > 400) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });
</script>
</body>

</html>