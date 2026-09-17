<?php require_once 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <link rel="shortcut icon" href="images/Favicon.png">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/swiper-bundle.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/contact-alerts.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Modern Header -->
    <header class="modern-header">
        <nav class="navbar-modern">
            <div class="nav-container">
                <div class="nav-brand">
                    <a href="index.php">
                        <img src="images/logo.png" alt="Tiger Force" class="logo-modern">
                    </a>
                </div>

                <ul class="nav-menu-modern">
                    <li class="nav-item-modern">
                        <a href="index.php" class="nav-link-modern <?php echo $currentPage === 'home' ? 'active' : ''; ?>">Home</a>
                    </li>
                    <li class="nav-item-modern">
                        <a href="about.php" class="nav-link-modern <?php echo $currentPage === 'about' ? 'active' : ''; ?>">About</a>
                    </li>
                    <li class="nav-item-modern">
                        <a href="products.php" class="nav-link-modern <?php echo $currentPage === 'products' ? 'active' : ''; ?>">Products</a>
                    </li>
                    <li class="nav-item-modern">
                        <a href="contact.php" class="nav-link-modern <?php echo $currentPage === 'contact' ? 'active' : ''; ?>">Contact</a>
                    </li>
                </ul>

                <div class="nav-cta">
                    <a href="contact.php" class="btn-modern btn-primary-modern">Get Quote</a>
                </div>

                <div class="hamburger-modern">
                    <span class="bar-modern"></span>
                    <span class="bar-modern"></span>
                    <span class="bar-modern"></span>
                </div>
            </div>
        </nav>
    </header>