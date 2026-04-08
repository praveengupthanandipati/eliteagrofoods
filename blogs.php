<?php include 'includes/header.php'; ?>

<!-- Blog Hero -->
<section class="about-hero"
    style="background: linear-gradient(to right, rgba(0,0,0,0.8), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=1600'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="hero-tag mb-3">Expert Insights</span>
                <h1 class="display-3 fw-bold mb-4 text-white">Our Latest Blogs</h1>
                <p class="lead mb-0 text-white-50">Discover tips, stories, and health insights from the world of Elite
                    Agro Foods.</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section: Improved Aesthetics -->
<section class="section-padding bg-light" id="blogs">
    <div class="container">
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

<style>
    :root {
        --primary-elite: #03652e;
        --primary-dark: #02431f;
        --secondary-elite: #dbee35;
        --accent-gold: #f4be37;
        --bg-light: #f8f9fa;
    }

    /* About Hero Reuse */
    .about-hero {
        padding: 160px 0 100px;
        position: relative;
        overflow: hidden;
    }

    .hero-tag {
        display: inline-block;
        padding: 8px 20px;
        background: rgba(221, 238, 53, 0.2);
        color: #dbee35;
        border-radius: 50px;
        font-weight: 800;
        font-size: 0.85rem;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    /* Modern Blog Cards */
    .modern-blog-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        height: 100%;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .modern-blog-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
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

    .section-padding {
        padding: 80px 0;
    }
</style>

<?php include 'includes/footer.php'; ?>