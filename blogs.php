<?php include 'includes/header.php'; ?>
<?php include_once 'includes/data.php'; ?>

<!-- Blog Hero -->
<section class="about-hero"
    style="background: linear-gradient(to right, rgba(0,0,0,0.8), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=1600'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-up">
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
       <?php include 'includes/blogs-section.php'; ?>
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
    @media (max-width: 767px) {
        .about-hero {
            padding: 120px 0 60px;
        }
        .display-3 {
            font-size: 2.2rem;
        }
    }
    @media (max-width: 575px) {
        .display-3 {
            font-size: 1.8rem;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>