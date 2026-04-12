<?php include_once 'includes/data.php'; ?>
<div class="row g-4">
    <?php foreach ($blog_posts as $i => $blog): ?>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= 100 * ($i + 1) ?>">
            <div class="modern-blog-card">
                <div class="mbc-media" style="background-image: url('<?= $blog['image'] ?>')">
                    <div class="mbc-date"><?= $blog['date'] ?></div>
                </div>
                <div class="mbc-content">
                    <h4><a href="<?= $blog['link'] ?>"><?= $blog['title'] ?></a></h4>
                    <p><?= $blog['desc'] ?></p>
                    <a href="<?= $blog['link'] ?>" class="mbc-more">Read Entry <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>
