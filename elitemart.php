<?php include 'includes/header.php'; ?>

<style>
    /* Delivery Section Modern Styles */
    #delivery {
        position: relative;
        background: linear-gradient(135deg, #02431f 0%, #03652e 100%) !important;
    }

    /* .delivery-mesh-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 10% 10%, rgba(3, 101, 46, 0.15) 0%, transparent 40%),
            radial-gradient(circle at 90% 90%, rgba(221, 238, 53, 0.05) 0%, transparent 40%);
        z-index: 1;
    } */

    .glass-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .status-dot {
        width: 12px;
        height: 12px;
        background-color: var(--secondary-elite);
        border-radius: 50%;
        display: inline-block;
    }

    .pulse-secondary {
        animation: pulse-green 2s infinite;
        box-shadow: 0 0 0 rgba(221, 238, 53, 0.4);
    }

    @keyframes pulse-green {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(221, 238, 53, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(221, 238, 53, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(221, 238, 53, 0);
        }
    }

    .delivery-feature-card {
        padding: 30px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 24px;
        transition: all 0.4s ease;
    }

    .delivery-feature-card:hover {
        background: rgba(255, 255, 255, 0.04);
        border-color: rgba(221, 238, 53, 0.2);
        transform: translateY(-10px);
    }

    .dfc-icon {
        width: 65px;
        height: 65px;
        border-radius: 18px;
        @include flex-center;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
        color: #fff;
    }

    /* Gradients & Shadows for Icons */
    .bg-gradient-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }

    .bg-gradient-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }

    .bg-gradient-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
    }

    .bg-gradient-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    }

    .shadow-glow-success {
        box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
    }

    .shadow-glow-warning {
        box-shadow: 0 10px 20px rgba(245, 158, 11, 0.3);
    }

    .shadow-glow-info {
        box-shadow: 0 10px 20px rgba(14, 165, 233, 0.3);
    }

    .shadow-glow-danger {
        box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3);
    }
</style>

<!-- Elite Mart Hero -->
<section class="mart-hero">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="zoom-in">
                <span class="hero-tag mb-3">Welcome to the Future of Grocery</span>
                <h1 class="display-3 fw-bold mb-4">Your One-Stop Online Grocery Destination</h1>
                <p class="lead mb-5 opacity-90 mx-auto max-width-700">Sourced from Elite Agro Foods and trusted
                    producers. Premium groceries, hygienically packed, delivered fast to your doorstep.</p>
                <div class="mart-hero-btns">
                    <a href="#categories" class="btn btn-secondary-elite btn-lg me-sm-3 mb-3">Browse Categories</a>
                    <a href="#delivery" class="btn btn-outline-light-elite btn-lg mb-3">Delivery Info</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Categories -->
<section class="section-padding" id="categories">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-uppercase text-primary fw-bold letter-spacing-2">Fresh Collections</h6>
            <h2 class="section-title">Explore Our Range</h2>
            <div class="title-underline"></div>
        </div>
        <div class="row g-4">
            <!-- Row 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="category-card">
                    <div class="category-img"
                        style="background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=800')">
                        <div class="category-overlay">
                            <h3>Farm-Fresh Vegetables</h3>
                            <p class="small text-white">Crisp, farm-fresh vegetables, bursting with flavor, harvested
                                daily for your healthy table.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="category-card">
                    <div class="category-img"
                        style="background-image: url('https://images.unsplash.com/photo-1528498033373-3c6c08e93d79?auto=format&fit=crop&q=80&w=800')">
                        <div class="category-overlay">
                            <h3>Dairy & Eggs</h3>
                            <p class="small text-white">Fresh, creamy dairy and farm-laid eggs, rich in protein and
                                flavor, delivered daily.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="category-card">
                    <div class="category-img"
                        style="background-image: url('https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&q=80&w=800')">
                        <div class="category-overlay">
                            <h3>Staples</h3>
                            <p class="small text-white">Rice, Flour, Pulses, and other essential grains for your
                                daily meals.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="category-card">
                    <div class="category-img"
                        style="background-image: url('https://images.unsplash.com/photo-1559181567-c3190ca9959b?auto=format&fit=crop&q=80&w=800')">
                        <div class="category-overlay">
                            <h3>Snacks & Beverages</h3>
                            <p class="small text-white">Tasty snacks and refreshing beverages to satisfy your
                                cravings anytime.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="category-card">
                    <div class="category-img"
                        style="background-image: url('https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&q=80&w=800')">
                        <div class="category-overlay">
                            <h3>Personal Care</h3>
                            <p class="small text-white">Gentle soaps, oral care, and natural essentials for your
                                daily health and wellness routine.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="category-card">
                    <div class="category-img"
                        style="background-image: url('https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&q=80&w=800')">
                        <div class="category-overlay">
                            <h3>Bakery & Biscuits</h3>
                            <p class="small text-white">Freshly baked bread, pastries, and a variety of biscuits to
                                delight your taste buds.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="category-card">
                    <div class="category-img"
                        style="background-image: url('https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&q=80&w=800')">
                        <div class="category-overlay">
                            <h3>Frozen Foods</h3>
                            <p class="small text-white">Convenient frozen veggies, snacks, and meals—preserved fresh,
                                ready when you need them.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                <div class="category-card">
                    <div class="category-img"
                        style="background-image: url('https://images.unsplash.com/photo-1583947581924-860bda6a26df?auto=format&fit=crop&q=80&w=800')">
                        <div class="category-overlay">
                            <h3>Home Essentials</h3>
                            <p class="small text-white">Everyday household items to keep your home running smoothly
                                and efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
                <div class="category-card">
                    <div class="category-img" style="background-image: url('img/baby-pet-care.png')">
                        <div class="category-overlay">
                            <h3>Baby & Pet Care</h3>
                            <p class="small text-white">Essential products for the care and well-being of your little
                                ones and furry friends.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Shop at Elite Mart? -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Why Shop at Elite Mart?</h2>
            <div class="title-underline"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="mart-feature-box">
                    <div class="feature-icon-circle"><i class="fas fa-leaf"></i></div>
                    <h4>Farm-Fresh Sourcing</h4>
                    <p>Directly from Elite Agro Foods and top producers ensuring peak nutritional value.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="mart-feature-box">
                    <div class="feature-icon-circle"><i class="fas fa-hand-holding-heart"></i></div>
                    <h4>Hygienic Packaging</h4>
                    <p>Preserved freshness and safety through advanced sealing and strict hygiene protocols.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="mart-feature-box">
                    <div class="feature-icon-circle"><i class="fas fa-truck-ramp-box"></i></div>
                    <h4>Convenient Distribution</h4>
                    <p>Fast and reliable delivery network covering your neighborhood with precision.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features & Services -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h6 class="text-uppercase text-primary fw-bold letter-spacing-2 mb-3">Premium Services</h6>
                <h2 class="section-title mb-4">Beyond Just Groceries</h2>
                <div class="service-item-detailed mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-sq me-3"><i class="fas fa-boxes-packing"></i></div>
                        <h4 class="mb-0">Custom Packaging</h4>
                    </div>
                    <p class="text-muted ps-5">Tailored packaging solutions for businesses, event needs, and specific
                        household storage requirements.</p>
                </div>
                <div class="service-item-detailed">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-sq me-3"><i class="fas fa-people-roof"></i></div>
                        <h4 class="mb-0">Family Packs</h4>
                    </div>
                    <p class="text-muted ps-5">Generous-sized packages of premium groceries to keep your pantry fully
                        stocked while offering better value for money.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="service-vignette p-5 rounded-4 bg-primary text-white">
                    <h3 class="mb-4">Special Offer!</h3>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-truck-fast me-3 text-secondary-elite fs-4"></i>
                            <span class="fs-5">Free Delivery on min Purchase of ₹500</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-percent me-3 text-secondary-elite fs-4"></i>
                            <span class="fs-5">5% Discount for every ₹1000 of billing</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-box-open me-3 text-secondary-elite fs-4"></i>
                            <span class="fs-5">Premium Packing Guaranteed</span>
                        </li>
                    </ul>
                    <a href="https://elitemart.co.in/" target="_blank" class="btn btn-secondary-elite btn-lg">Order
                        Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Delivery Information -->
<section class="section-padding bg-dark text-white relative-z overflow-hidden" id="delivery">
    <div class="delivery-mesh-bg"></div>
    <div class="container relative-z">
        <div class="row align-items-center mb-5 pb-4">
            <div class="col-lg-7 text-center text-lg-start" data-aos="fade-right">
                <h6 class="text-uppercase text-secondary-elite fw-bold letter-spacing-2 mb-3">Elite Logistics</h6>
                <h2 class="display-5 fw-bold mb-3">Fast & Reliable <span class="text-secondary-elite">Delivery</span>
                </h2>
                <p class="lead mb-0 opacity-75">Our efficient logistics network ensures your groceries arrive promptly,
                    fresh, and in perfect condition across your neighborhood.</p>
            </div>
            <div class="col-lg-5 text-center text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                <div class="delivery-status-box glass-card p-4 rounded-5">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end mb-2">
                        <span class="status-dot pulse-secondary me-3"></span>
                        <h4 class="mb-0 fw-bold">Active in Your Area</h4>
                    </div>
                    <p class="small mb-0 opacity-75">Average delivery time: <strong class="text-secondary-elite">45
                            Mins</strong></p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Delivery Feature 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="delivery-feature-card text-center text-lg-start h-100">
                    <div class="dfc-icon bg-gradient-success mb-4 mx-auto mx-lg-0 shadow-glow-success">
                        <i class="fas fa-truck-fast"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Same Day Delivery</h4>
                    <p class="small opacity-75 mb-0">Order by 4 PM and receive your groceries by evening.</p>
                </div>
            </div>
            <!-- Delivery Feature 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="delivery-feature-card text-center text-lg-start h-100">
                    <div class="dfc-icon bg-gradient-warning mb-4 mx-auto mx-lg-0 shadow-glow-warning">
                        <i class="fas fa-bolt-lightning"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Express Slots</h4>
                    <p class="small opacity-75 mb-0">Priority delivery for your urgent kitchen needs.</p>
                </div>
            </div>
            <!-- Delivery Feature 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="delivery-feature-card text-center text-lg-start h-100">
                    <div class="dfc-icon bg-gradient-info mb-4 mx-auto mx-lg-0 shadow-glow-info">
                        <i class="fas fa-location-crosshairs"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Live Tracking</h4>
                    <p class="small opacity-75 mb-0">Track your delivery partner right to your doorstep.</p>
                </div>
            </div>
            <!-- Delivery Feature 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="delivery-feature-card text-center text-lg-start h-100">
                    <div class="dfc-icon bg-gradient-danger mb-4 mx-auto mx-lg-0 shadow-glow-danger">
                        <i class="fas fa-shield-heart"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Safe Handling</h4>
                    <p class="small opacity-75 mb-0">Untouched by hand, 100% sanitized packaging protocols.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-uppercase text-primary fw-bold letter-spacing-2">Got Questions?</h6>
            <h2 class="section-title">Mart specific FAQs</h2>
            <div class="title-underline"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="accordion accordion-flush" id="martFaq">
                    <!-- FAQ 1 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq1">
                                How do you ensure product freshness for both stores?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                We source directly from Elite Agro farms. Our "Farm-to-Store" model ensures that
                                vegetables and milk reach our offline store and online delivery center within hours of
                                harvest.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq2">
                                Where is Elite Mart offline store located?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Our flagship startup store is located at 14-179, BC Colony, Kazipally Road, Bollaram,
                                Hyderabad 502320. We welcome you to visit for a premium walk-in shopping experience.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq3">
                                What is the Elite Mart Customer Care Number?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                For any order assistance or enquiries, you can call or WhatsApp our official Customer
                                Care at <strong>7799771189</strong>. We are available from 7 AM to 10 PM.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq4">
                                How can I reach you via email?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                You can email our support team at <strong>eliteagrofoods2024@gmail.com</strong> for
                                detailed feedback, business proposals, or service complaints.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 5 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq5">
                                What are the delivery charges for online orders?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                We offer **FREE Delivery** on orders above ₹499. For orders below this value, a nominal
                                delivery fee applies depending on your proximity to our Bollaram store.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 6 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq6">
                                Can I track my grocery delivery live?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Yes! Once your order is dispatched, you will receive a tracking link via SMS/WhatsApp to
                                monitor your delivery partner's real-time location.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 7 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq7">
                                What are the offline store timings?
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Our physical store is open 7 days a week, from **07:00 AM to 10:00 PM**, ensuring you
                                can pick up fresh essentials at your convenience.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 8 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq8">
                                What is your return policy for fresh produce?
                            </button>
                        </h2>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Due to hygiene and food safety standards for perishable goods, we **do not accept
                                returns**
                                on **Milk, Curd, and Fresh Vegetables** once they have been delivered and accepted. We
                                recommend checking the quality at the time of delivery before accepting the order.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 9 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq9">
                                Do you offer bulk discounts for startups or events?
                            </button>
                        </h2>
                        <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Yes, we specialize in bulk supplies. Whether it's for an event or a business, contact
                                our Customer care at 7799771189 for customized wholesale pricing.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 10 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq10">
                                What payment methods do you accept online?
                            </button>
                        </h2>
                        <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                We accept UPI (PhonePe, GPay), Credit/Debit Cards, and Cash on Delivery (COD) for all
                                online orders processed through our website.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 11 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq11">
                                Are product prices same for online and offline?
                            </button>
                        </h2>
                        <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Yes, we maintain uniform, transparent pricing across our Bollaram store and online
                                portal to ensure you get the best value regardless of how you shop.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 12 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq12">
                                Do you provide organic-only grocery baskets?
                            </button>
                        </h2>
                        <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Our "Elite Organic" range features strictly chemical-free produce sourced from certified
                                sustainable farms for health-conscious families.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 13 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq13">
                                How do I register for daily Buffalo Milk delivery?
                            </button>
                        </h2>
                        <div id="faq13" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                You can subscribe for daily delivery via the "Farm Milk" section of our website or by
                                visiting our offline store for a trial pack.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 14 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq14">
                                What is the hygiene protocol for grocery packing?
                            </button>
                        </h2>
                        <div id="faq14" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                We follow a strict "Min-Touch" policy. Staff members use sanitized gloves and masks, and
                                all products are packed in a temperature-controlled environment.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 15 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq15">
                                Can I modify an order after it is placed?
                            </button>
                        </h2>
                        <div id="faq15" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Orders can be modified within 15 minutes of placement by calling our Customer Care at
                                7799771189 before the packing process begins.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 16 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq16">
                                Do you deliver to areas outside Bollaram?
                            </button>
                        </h2>
                        <div id="faq16" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Currently, we serve Bollaram, Kazipally, and surrounding Hyderabad neighborhoods. Enter
                                your pin-code at checkout to check eligibility.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 17 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq17">
                                How long does it take to process a refund?
                            </button>
                        </h2>
                        <div id="faq17" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                For online payment cancellations, refunds are initiated immediately and usually reflect
                                in your bank account within 3-5 business days.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 18 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq18">
                                Can I donate my loyalty points to a cause?
                            </button>
                        </h2>
                        <div id="faq18" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                We are working on a feature that allows users to convert their reward points into
                                donations for local community welfare programs.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 19 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq19">
                                Do you provide eco-friendly carry bags?
                            </button>
                        </h2>
                        <div id="faq19" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                Yes! We discourage plastic use. All offline and online orders are packed in durable,
                                eco-friendly paper or cloth bags.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 20 -->
                    <div class="accordion-item shadow-sm rounded-4 mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold rounded-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq20">
                                How can a local supplier list products at Elite Mart?
                            </button>
                        </h2>
                        <div id="faq20" class="accordion-collapse collapse" data-bs-parent="#martFaq">
                            <div class="accordion-body text-muted">
                                We love supporting local producers! Please email your product catalog and certifications
                                to **eliteagrofoods2024@gmail.com** for a partnership review.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA with Dark BG -->
<section class="section-padding mart-final-cta text-white text-center">
    <div class="container" data-aos="fade-up">
        <h2 class="display-4 fw-bold mb-4">Start Filling Your Cart</h2>
        <p class="lead mb-5 max-width-700 mx-auto opacity-75">Experience the best quality groceries delivered with care.
            Your kitchen deserves nothing but Elite goodness.</p>
        <a href="#" class="btn btn-secondary-elite btn-xl">Shop Now at Elite Mart</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>