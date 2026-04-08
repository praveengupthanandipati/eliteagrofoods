<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Elite Agro Foods presents Elite Mart - Your trusted source for farm-fresh groceries, pure buffalo milk, and daily essentials delivered straight to your doorstep.">
    <title>Elite Agro Foods | From Our Farm to Your Family</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="top">

    <!-- Header / Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="https://eliteagrofoods.com/">
                <img src="img/logo.svg" alt="Elite Agro Foods Logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="https://eliteagrofoods.com/">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'elitemart.php') ? 'active' : ''; ?>" href="elitemart.php">Elite Mart</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'farmmilk.php') ? 'active' : ''; ?>" href="farmmilk.php">Farm Milk</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                </ul>
                <div class="nav-cta ms-lg-4">
                    <a href="elitemart.php" class="btn btn-primary-elite">Shop Now</a>
                </div>
            </div>
        </div>
    </nav>