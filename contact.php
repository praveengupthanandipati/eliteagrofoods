<?php include 'includes/header.php'; ?>

<!-- Contact Hero - Modern & Minimalist -->
<section class="contact-hero-premium">
    <div class="mesh-gradient-bg"></div>
    <div class="container text-center relative-z">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-down">
                <span
                    class="badge rounded-pill bg-secondary-elite text-primary-dark px-3 py-2 mb-4 letter-spacing-2">LET'S
                    CONNECT</span>
                <h1 class="display-2 fw-extrabold mb-4">How Can We <span class="text-gradient">Help You?</span></h1>
                <p class="lead opacity-75 mx-auto max-width-700">Whether you have a question about our farm-fresh
                    products, need assistance with your subscription, or just want to say hello, we're here for you.</p>
            </div>
        </div>
    </div>
</section>

<!-- Info Cards - Premium Glassmorphism -->
<section class="info-tiles-section">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <!-- 1. Elite Mart Support -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card info-tile h-100">
                    <div class="tile-icon">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <h4>Elite Mart Support</h4>
                    <p>Issues with your grocery order or product inquiries?</p>
                    <div class="divider"></div>
                    <a href="mailto:support@eliteagrofoods.com" class="contact-link">support@eliteagrofoods.com</a>
                    <a href="tel:+917799771189" class="contact-link">+91 77997 71189</a>
                </div>
            </div>
            <!-- 2. Farm Milk Delivery -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card info-tile h-100 featured">
                    <div class="tile-icon">
                        <i class="fas fa-bottle-water"></i>
                    </div>
                    <h4>Farm Milk Desk</h4>
                    <p>Manage your daily buffalo milk subscription or pause deliveries.</p>
                    <div class="divider"></div>
                    <a href="mailto:milk@eliteagrofoods.com" class="contact-link">milk@eliteagrofoods.com</a>
                    <a href="tel:+7799771189" class="contact-link">+91 77997 71189</a>
                </div>
            </div>
            <!-- 3. General Inquiries -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card info-tile h-100">
                    <div class="tile-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h4>General Help</h4>
                    <p>For all other questions, feedback, or general support.</p>
                    <div class="divider"></div>
                    <a href="mailto:info@eliteagrofoods.com" class="contact-link">info@eliteagrofoods.com</a>
                    <a href="https://wa.me/917799771189" target="_blank" class="contact-link whatsapp-link"><i
                            class="fab fa-whatsapp me-2"></i>Live WhatsApp Chat</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Contact Section -->
<section class="section-padding main-contact-area">
    <div class="container">
        <div class="row g-0 rounded-5 shadow-2xl overflow-hidden bg-white">
            <!-- Left: Contact Form -->
            <div class="col-lg-7 p-4 p-md-5">
                <div class="form-header mb-5" id="contact-form">
                    <h2 class="fw-bold h1">Send a Message</h2>
                    <?php if (isset($_GET['success'])): ?>
                        <div class="alert alert-success border-0 rounded-4 p-3 mb-4" role="alert">
                            <i class="fas fa-check-circle me-2"></i> Message sent successfully! Our team will get back to
                            you shortly.
                        </div>
                    <?php elseif (isset($_GET['error'])): ?>
                        <div class="alert alert-danger border-0 rounded-4 p-3 mb-4" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i> Something went wrong. Please try again or call us
                            directly.
                        </div>
                    <?php endif; ?>
                    <p class="text-muted">Fill out the form below and our team will get back to you shortly.</p>
                </div>
                <!-- Validation: using standard Bootstrap needs-validation -->
                <form action="includes/process-contact.php" method="POST" class="needs-validation" novalidate>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-group-clean">
                                <label class="form-label-small">Full Name</label>
                                <input type="text" name="name" class="form-control-minimal"
                                    placeholder="Write Your Name" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group-clean">
                                <label class="form-label-small">Email Address</label>
                                <input type="email" name="email" class="form-control-minimal"
                                    placeholder="name@example.com" required>
                                <div class="invalid-feedback">Please provide a valid email address.</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-clean">
                                <label class="form-label-small">Subject of Interest</label>
                                <select name="subject" class="form-select form-control-minimal" required>
                                    <option selected disabled value="">Select a Category</option>
                                    <option value="mart">Elite Mart / Grocery Support</option>
                                    <option value="milk">Farm Milk Subscription</option>
                                    <option value="feedback">General Feedback</option>
                                </select>
                                <div class="invalid-feedback">Please select a subject.</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-clean">
                                <label class="form-label-small">Your Message</label>
                                <textarea name="message" class="form-control-minimal" placeholder="How can we help you?"
                                    style="height: 140px" required></textarea>
                                <div class="invalid-feedback">Message cannot be empty.</div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-main-elite w-100">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Right: Visual Info -->
            <div
                class="col-lg-5 bg-primary p-4 p-md-5 text-white d-flex flex-column justify-content-between relative-z">
                <div class="abstract-circles"></div>

                <div>
                    <h3 class="fw-bold mb-4">Visit Our Store</h3>
                    <div class="hq-contact-item d-flex mb-4">
                        <div class="hq-icon me-3"><i class="fas fa-location-arrow"></i></div>
                        <div>
                            <p class="mb-0 opacity-75 small uppercase fw-bold pb-1 text-secondary-elite">ADDRESS</p>
                            <p class="mb-0">14-179, Kazipally Road, Bollaram, Hyderabad 502320</p>
                        </div>
                    </div>

                    <h3 class="fw-bold mb-4 mt-5">Operational Hours</h3>
                    <div class="hours-list">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Store Hours</span>
                            <span class="fw-bold">07:00 AM - 10:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Delivery Window</span>
                            <span class="fw-bold">07:00 AM - 10:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between small opacity-75">
                            <span>* Delivery active 7 days a week</span>
                        </div>
                    </div>
                </div>

                <div class="service-locations mt-5">
                    <p class="small uppercase fw-bold mb-3 text-secondary-elite">SERVICE AREAS</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="loc-tag">Mallampet</span>
                        <span class="loc-tag">Bachupally</span>
                        <span class="loc-tag">IDA Bollaram</span>
                        <span class="loc-tag">Kazipally</span>
                        <span class="loc-tag">Nizampet</span>
                        <span class="loc-tag">Pragathi Nagar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Force Header Background on Contact Page */


    /* Page Specific Styles */
    .contact-hero-premium {
        padding: 180px 0 120px;
        position: relative;
        overflow: hidden;
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('img/contact-hero-dark.png');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #ffffff;
    }

    .mesh-gradient-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:
            radial-gradient(circle at 20% 30%, rgba(3, 101, 46, 0.3) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(221, 238, 53, 0.15) 0%, transparent 50%);
        z-index: 1;
        opacity: 0.6;
    }

    .contact-hero-premium .lead {
        color: rgba(255, 255, 255, 0.8) !important;
    }

    .text-gradient {
        background: linear-gradient(135deg, #dbee35 0%, #05a049 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .info-tiles-section {
        margin-top: -60px;
        position: relative;
        z-index: 20;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 24px;
        padding: 40px 30px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        text-align: center;
    }

    .glass-card:hover {
        transform: translateY(-12px);
        background: #fff;
        box-shadow: 0 20px 60px rgba(3, 101, 46, 0.1);
    }

    .glass-card.featured {
        background: #03652e;
        color: #fff;
        border-color: #03652e;
    }

    .tile-icon {
        width: 70px;
        height: 70px;
        background: rgba(3, 101, 46, 0.1);
        color: #03652e;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 25px;
    }

    .featured .tile-icon {
        background: rgba(255, 255, 255, 0.2);
        color: #dbee35;
    }

    .featured p {
        color: rgba(255, 255, 255, 0.8);
    }

    .divider {
        height: 1px;
        background: rgba(0, 0, 0, 0.05);
        margin: 20px 0;
    }

    .featured .divider {
        background: rgba(255, 255, 255, 0.1);
    }

    .contact-link {
        display: block;
        color: #121212;
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 8px;
        transition: color 0.3s;
    }

    .featured .contact-link {
        color: #fff;
    }

    .contact-link:hover {
        color: #03652e;
    }

    .featured .contact-link:hover {
        color: #dbee35;
    }

    .whatsapp-link {
        color: #25d366 !important;
    }

    /* Minimalist Form Styles */
    .form-group-clean {
        margin-bottom: 5px;
    }

    .form-label-small {
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        color: var(--primary-elite);
        margin-bottom: 8px;
        display: block;
        letter-spacing: 1px;
    }

    .form-control-minimal {
        width: 100%;
        padding: 15px 20px;
        background: #fdfdfd;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    .form-control-minimal:focus {
        background: #fff;
        border-color: var(--primary-elite);
        box-shadow: 0 0 0 4px rgba(3, 101, 46, 0.05);
        outline: none;
    }

    .btn-main-elite {
        background: #03a049;
        /* Vibrant Green */
        color: #fff;
        padding: 16px;
        border-radius: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        border: none;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .btn-main-elite:hover {
        background: #028a3f;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(3, 160, 73, 0.3);
    }

    /* Validation Styles */
    .needs-validation .form-control-minimal:invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 4px rgba(220, 53, 69, 0.1);
    }

    .needs-validation .form-control-minimal:valid:focus {
        border-color: #198754;
        box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1);
    }

    .invalid-feedback {
        font-size: 0.8rem;
        margin-top: 5px;
        font-weight: 500;
    }

    .hq-icon {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #dbee35;
    }

    .loc-tag {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .relative-z {
        position: relative;
        z-index: 10;
    }

    .abstract-circles {
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(219, 238, 53, 0.1) 0%, transparent 70%);
        z-index: 1;
    }

    .fw-extrabold {
        font-weight: 800;
    }

    .letter-spacing-2 {
        letter-spacing: 2px;
    }

    .shadow-2xl {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 767px) {
        .contact-hero-premium {
            padding: 140px 0 80px;
        }

        .display-2 {
            font-size: 2.2rem;
        }

        .info-tiles-section {
            margin-top: -30px;
        }

        .glass-card {
            padding: 30px 20px;
        }
    }

    @media (max-width: 575px) {
        .display-2 {
            font-size: 1.8rem;
        }
    }
</style>

<script>
    // Bootstrap Validation Logic
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<?php include 'includes/footer.php'; ?>