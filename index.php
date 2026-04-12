<?php include 'includes/header.php'; ?>
<?php include 'includes/data.php'; ?>

<!-- Hero Section: Immersive & Dynamic -->
<header class="hero-premium">
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
            <?php foreach ($hero_banners as $i => $banner): ?>
                <div class="swiper-slide">
                    <div class="hero-bg-overlay" style="background-image: url('<?php echo $banner['image']; ?>')"></div>
                    <div class="container hero-container">
                        <div class="hero-text-content" <?php if ($i === 0) echo 'data-aos="fade-up"'; ?>>
                            <span class="badge rounded-pill bg-secondary-elite text-primary-dark px-3 py-2 mb-3"><?php echo $banner['badge']; ?></span>
                            <?php if ($i === 0): ?>
                                <h1 class="display-2 fw-extrabold mb-4"><?php echo $banner['title']; ?></h1>
                            <?php else: ?>
                                <h2 class="display-2 fw-extrabold mb-4"><?php echo $banner['title']; ?></h2>
                            <?php endif; ?>
                            <p class="lead mb-5 opacity-85"><?php echo $banner['subtitle']; ?></p>
                            <div class="d-flex gap-3">
                                <a href="<?php echo $banner['button_link']; ?>"<?php if (!empty($banner['button_target'])) echo ' target="' . $banner['button_target'] . '"'; ?> class="btn btn-primary-elite btn-xl"><?php echo $banner['button_text']; ?></a>
                            </div>
                            <!-- Optional: Show date for reference (hidden visually) -->
                            <span style="display:none;">Banner Date: <?php echo $banner['date']; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination premium-pagination"></div>
        <div class="hero-scroll-indicator">
            <div class="mouse"></div>           
        </div>
    </div>
</header>

<!-- Our Promise: Bento Style Feature Section -->
<section class="section-padding bento-standard-section bg-light-gradient" id="promise">
    <div class="bento-mesh-overlay"></div>
    <div class="container relative-z">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-uppercase text-primary fw-bold letter-spacing-2 mb-2">THE ELITE STANDARD</h6>
            <h2 class="display-4 fw-bold text-dark">Quality You Can <span class="text-primary">Trust</span></h2>
            <p class="text-muted max-width-600 mx-auto">We combine traditional farming values with modern logistics to
                bring you the best of nature.</p>
        </div>

        <div class="row g-4 align-items-stretch">
            <!-- Feature 1: 100% Farm Fresh -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="elite-feature-card text-center p-4 h-100 rounded-5 transition-up">
                    <div class="efc-icon-wrap mb-4 mx-auto bg-primary-light text-primary rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-leaf fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-dark">100% Farm Fresh</h4>
                    <p class="text-muted small mb-0">Sourced directly from our fields to ensure peak nutrition and
                        natural taste.</p>
                </div>
            </div>

            <!-- Feature 2: Hygienic Packaging -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="elite-feature-card text-center p-4 h-100 rounded-5 transition-up">
                    <div class="efc-icon-wrap mb-4 mx-auto bg-warning-light text-warning rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-shield-halved fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-dark">Hygienic Packaging</h4>
                    <p class="text-muted small mb-0">Medical-grade sanitation and world-class safety protocols for every
                        pack.</p>
                </div>
            </div>

            <!-- Feature 3: Fast Delivery -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="elite-feature-card text-center p-4 h-100 rounded-5 transition-up">
                    <div class="efc-icon-wrap mb-4 mx-auto bg-primary-light text-primary rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-truck-fast fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-dark">Fast Delivery</h4>
                    <p class="text-muted small mb-0">Same-day delivery slots designed to fit your busy schedule
                        perfectly.</p>
                </div>
            </div>

            <!-- Feature 4: Pure Milk -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="elite-feature-card text-center p-4 h-100 rounded-5 transition-up">
                    <div class="efc-icon-wrap mb-4 mx-auto bg-danger-light text-danger rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-droplet fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-dark">Pure Milk</h4>
                    <p class="text-muted small mb-0">Daily fresh buffalo milk sourced directly from our healthy
                        livestock.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Core Services: Modern Card Redesign -->
<section class="section-padding bg-dark-service" id="services">
    <div class="service-mesh-overlay"></div>
    <div class="container relative-z">
        <div class="row align-items-end mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <h6 class="text-uppercase text-secondary-elite fw-bold letter-spacing-2 mb-2 text-white">OUR OFFERINGS
                </h6>
                <h2 class="display-4 fw-bold text-white">What We <span class="text-secondary-elite">Offer</span></h2>
            </div>
            <div class="col-lg-6 text-lg-end mt-3 mt-lg-0">
                <p class="text-white-50 mb-0">Experience the perfect blend of traditional farm quality and modern
                    convenience.</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Service 1: Offline Physical Store -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="premium-service-card shadow-lg">
                    <div class="psc-image" style="background-image: url('img/offline-store.png')">
                        <div class="psc-badge">PHYSICAL STORE</div>
                    </div>
                    <div class="psc-body">
                        <h3>Elite Mart: Offline Store</h3>
                        <p>Walk into our premium physical outlets to hand-pick the freshest produce and explore a world
                            of quality staples.</p>
                        <a href="https://elitemart.co.in" target="_blank" class="psc-link">Visit Our Store <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service 2: Online Grocery -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="premium-service-card shadow-lg active-card">
                    <div class="psc-image" style="background-image: url('img/online-grocery.png')">
                        <div class="psc-badge">ONLINE GROCERY</div>
                    </div>
                    <div class="psc-body">
                        <h3>Elite Mart: Online Shop</h3>
                        <p>Enjoy the speed and ease of shopping from home. Freshness delivered within hours to your
                            doorstep.</p>
                        <a href="https://elitemart.co.in" target="_blank" class="psc-link">Shop Online <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service 3: Elite Farm Fresh Milk -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="premium-service-card shadow-lg">
                    <div class="psc-image" style="background-image: url('img/farm-milk.jpg')">
                        <div class="psc-badge">PREMIUM MILK</div>
                    </div>
                    <div class="psc-body">
                        <h3>Elite Farm Fresh Milk</h3>
                        <p>Pure buffalo milk, cold-chain delivered daily. The healthiest start for you and your growing
                            children.</p>
                        <a href="farmmilk.php" class="psc-link">Order Service <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Blog Section: Improved Aesthetics -->
<section class="section-padding bg-light" id="blogs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-5" data-aos="fade-up">
            <div>
                <h6 class="text-uppercase text-primary fw-bold letter-spacing-2 mb-2">EXPERT INSIGHTS</h6>
                <h2 class="display-4 fw-bold">Latest from <span class="text-primary">Blog</span></h2>
            </div>
            <a href="#" class="btn btn-outline-primary rounded-pill px-4 d-none d-md-inline-block">View All Posts</a>
        </div>

        <div class="row g-4">
            <!-- Blog 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="modern-blog-card">
                    <div class="mbc-media"
                        style="background-image: url('https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&q=80&w=600')">
                        <div class="mbc-date">28 MAR</div>
                    </div>
                    <div class="mbc-content">
                        <h4><a href="benefitsof-fresh-buffalomilk.php">The Benefits of Fresh Buffalo Milk</a></h4>
                        <p>Discover why pure buffalo milk is the ultimate choice for health...</p>
                        <a href="benefitsof-fresh-buffalomilk.php" class="mbc-more">Read Entry <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Blog 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="modern-blog-card">
                    <div class="mbc-media"
                        style="background-image: url('https://images.unsplash.com/photo-1464226184884-fa280b87c399?auto=format&fit=crop&q=80&w=600')">
                        <div class="mbc-date">25 MAR</div>
                    </div>
                    <div class="mbc-content">
                        <h4><a href="fromfarmtotable.php">Farm to Table: Our Quality Journey</a></h4>
                        <p>Take a behind-the-scenes look at how we source the freshest...</p>
                        <a href="fromfarmtotable.php" class="mbc-more">Read Entry <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Blog 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="modern-blog-card">
                    <div class="mbc-media"
                        style="background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=600')">
                        <div class="mbc-date">22 MAR</div>
                    </div>
                    <div class="mbc-content">
                        <h4><a href="essential-grocerystaples.php">Essential Grocery Staples</a></h4>
                        <p>Stock your pantry like a pro with these essential items...</p>
                        <a href="essential-grocerystaples.php" class="mbc-more">Read Entry <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Blog 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="modern-blog-card">
                    <div class="mbc-media"
                        style="background-image: url('https://images.unsplash.com/photo-1516594798947-e65505dbb29d?auto=format&fit=crop&q=80&w=600')">
                        <div class="mbc-date">20 MAR</div>
                    </div>
                    <div class="mbc-content">
                        <h4><a href="whyorganicproduce.php">Why Organic Produce is Worth It</a></h4>
                        <p>Explore the long-term benefits of switching to organic...</p>
                        <a href="whyorganicproduce.php" class="mbc-more">Read Entry <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA with Premium Design -->
<section class="section-padding premium-cta text-center text-white">
    <div class="container relative-z" data-aos="zoom-in">
        <h2 class="display-3 fw-bold mb-4">Elevate Your Daily <br>Essentials Today</h2>
        <p class="lead mb-5 opacity-75 mx-auto max-width-700">Join thousands of families who trust Elite Mart for their
            health and happiness every day.</p>
        <div class="d-flex flex-wrap justify-content-center gap-4">
            <a href="https://elitemart.co.in" target="_blank" class="btn btn-secondary-elite btn-xl shadow-lg">Visit
                Online Mart</a>
            <a href="farmmilk.php" class="btn btn-outline-light-premium btn-xl">Order Farm Milk</a>
        </div>
    </div>
</section>

<style>
    /* Modern Design Tokens & Redesign Styles */
    :root {
        --primary-elite: #03652e;
        --primary-dark: #02431f;
        --secondary-elite: #dbee35;
        --accent-gold: #f4be37;
        --bg-light: #f8f9fa;
        --glass-white: rgba(255, 255, 255, 0.85);
    }

    .fw-extrabold {
        font-weight: 800;
    }



    /* Hero Premium */
    .hero-premium {
        height: 100vh;
        background: #000;
    }

    .hero-bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
    }

    .hero-bg-overlay::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.3) 100%);
    }

    .hero-container {
        height: 100%;
        display: flex;
        align-items: center;
        position: relative;
        z-index: 10;
    }

    .hero-text-content {
        max-width: 860px;
        color: #fff;
    }

    .btn-xl {
        padding: 18px 40px;
        font-size: 1.1rem;
        font-weight: 700;
        border-radius: 50px;
    }

    .btn-outline-light-premium {
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: #fff;
        backdrop-filter: blur(10px);
        transition: all 0.3s;
    }

    .btn-outline-light-premium:hover {
        background: #fff;
        color: var(--primary-elite);
        border-color: #fff;
    }

    /* Bento Grid Elevated Styles */
    .bento-standard-section {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #f8fafc 0%, #f0f7f4 100%);
        color: #121212;
    }

    .bento-mesh-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 100% 0%, rgba(3, 101, 46, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 0% 100%, rgba(221, 238, 53, 0.08) 0%, transparent 50%);
        pointer-events: none;
    }

    /* Simplified Feature Cards */
    .elite-feature-card {
        background: #fff;
        border: 1px solid rgba(3, 101, 46, 0.08);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
    }

    .elite-feature-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 60px rgba(3, 101, 46, 0.1);
        border-color: var(--primary-elite);
    }

    .efc-icon-wrap {
        transition: all 0.4s ease;
    }

    .elite-feature-card:hover .efc-icon-wrap {
        transform: scale(1.1) rotate(5deg);
    }

    .bg-primary-light {
        background-color: #f0f7f4;
    }

    .bg-warning-light {
        background-color: #fffaf0;
    }

    .bg-danger-light {
        background-color: #fff5f5;
    }

    /* Section Aesthetics */
    .bento-standard-section {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #f8fafc 0%, #f0f7f4 100%);
        color: #121212;
    }

    .bento-mesh-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 100% 0%, rgba(3, 101, 46, 0.04) 0%, transparent 50%),
            radial-gradient(circle at 0% 100%, rgba(221, 238, 53, 0.06) 0%, transparent 50%);
        pointer-events: none;
    }

    .text-gradient-green {
        /* background: linear-gradient(45deg, var(--primary-elite), #2a8a52); */
        /* -webkit-background-clip: text; */
        /* -webkit-text-fill-color: transparent; */
        color: #dbee35;
    }

  

    /* Service Section Dark Styles */
    .bg-dark-service {
        background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url('https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=1600');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: relative;
        overflow: hidden;
    }

    .service-mesh-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 10% 90%, rgba(3, 101, 46, 0.25) 0%, transparent 40%);
        pointer-events: none;
    }

    /* Service Cards Refined */
    .premium-service-card {
        background: #fff;
        border-radius: 30px;
        overflow: hidden;
        height: 100%;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.4s ease;
    }

    .premium-service-card:hover {
        transform: translateY(-15px);
    }

    .psc-image {
        height: 280px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .psc-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--secondary-elite);
        color: var(--primary-dark);
        padding: 6px 15px;
        font-size: 0.75rem;
        font-weight: 800;
        border-radius: 50px;
    }

    .psc-body {
        padding: 40px 30px;
    }

    .psc-body h3 {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: var(--primary-elite);
    }

    .psc-link {
        text-decoration: none;
        color: var(--primary-elite);
        font-weight: 800;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: gap 0.3s;
    }

    .psc-link:hover {
        gap: 15px;
    }

    .active-card {
        border: 2px solid var(--primary-elite);
    }



    /* Modern Blog Cards */
    .modern-blog-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        height: 100%;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
    }

    .mbc-media {
        height: 200px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .mbc-date {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #fff;
        padding: 5px 12px;
        border-radius: 10px;
        font-weight: 800;
        font-size: 0.8rem;
    }

    .mbc-content {
        padding: 25px;
    }

    .mbc-content h4 a {
        color: #121212;
        text-decoration: none;
        font-weight: 700;
        transition: color 0.3s;
    }

    .mbc-content h4 a:hover {
        color: var(--primary-elite);
    }

    .mbc-more {
        text-decoration: none;
        color: var(--primary-elite);
        font-weight: 700;
        font-size: 0.9rem;
    }

    /* Final CTA Premium */
    .premium-cta {
        background: linear-gradient(135deg, #02431f 0%, #03652e 40%, #c4d72d 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    /* .premium-cta::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 10% 90%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 90% 10%, rgba(0, 0, 0, 0.2) 0%, transparent 50%);
    } */

    @media (max-width: 991px) {
        .bento-grid {
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .bento-card {
            min-height: 350px !important;
            padding: 25px;
        }

        .hero-text-content {
            padding: 0 15px;
        }

        .display-2 {
            font-size: 3rem;
        }
    }

    @media (max-width: 767px) {
        .bento-grid {
            grid-template-columns: 1fr;
        }

        .bento-card {
            min-height: 300px !important;
        }

        .display-4 {
            font-size: 2.2rem;
        }

        .display-2 {
            font-size: 2.5rem;
        }

        .hero-premium {
            height: auto;
            /* min-height: 100vh; */
            padding: 100px 0 0 0;
        }

        .hero-container {
            height: auto;
            padding: 40px 0;
        }

        .btn-xl {
            padding: 14px 30px;
            font-size: 1rem;
        }

        .premium-cta {
            padding: 60px 0;
        }

        .display-3 {
            font-size: 2rem;
        }
    }

    @media (max-width: 575px) {
        .display-2 {
            font-size: 2.2rem;
        }

        .display-4 {
            font-size: 1.8rem;
        }

        .hero-text-content {
            text-align: center;
        }

        .hero-text-content .badge {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-text-content .d-flex {
            justify-content: center;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>