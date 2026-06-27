<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | ' . APP_NAME : APP_NAME . ' - Professional Plumbing & Drain Services'; ?></title>
    <meta name="description" content="<?php echo isset($page_desc) ? $page_desc : 'Trusted professional 24/7 plumbing solutions when you need them most.'; ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Main Style Sheet -->
    <link rel="stylesheet" href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>assets/css/style.css">
</head>
<body>

    <!-- 1. Top Utility Header Bar -->
    <div class="top-header-bar">
        <div class="container top-bar-inner">
            <div class="top-bar-left">
                <i class="fa-solid fa-location-dot"></i>
                <span>NEW YORK, NY</span>
                <span style="color: rgba(255,255,255,0.4); margin: 0 4px;">|</span>
                <span>Serving NYC & Surrounding Areas</span>
            </div>
            <div class="top-bar-right">
                <div class="top-bar-links">
                    <a href="#">Careers</a>
                    <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>contact.php">Contact Us</a>
                    <a href="#">Resources</a>
                </div>
                <div class="top-bar-search">
                    <form action="#" method="GET" style="display: flex; align-items: center;">
                        <input type="text" placeholder="How can we help you today?" aria-label="Search">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Main Sticky Header & Navigation -->
    <header class="main-header">
        <div class="container navbar-container">
            <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>index.php" class="brand-logo">
                <span class="logo-icon-wrap">
                    <span class="logo-text-roto">Roto</span>
                    <span class="logo-text-divider">-</span>
                    <span class="logo-text-rooter">Rooter</span>
                </span>
            </a>
            
            <nav class="navbar" id="navbar">
                <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>index.php" class="nav-link">Locations</a>
                <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>service/plumbing-repair.php" class="nav-link">Plumbing</a>
                <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>service/drain-cleaning.php" class="nav-link">Drains</a>
                <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>service/sewer-line-services.php" class="nav-link">Commercial</a>
                <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>service/water-quality.php" class="nav-link">Water Quality</a>
                <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>service/water-cleanup.php" class="nav-link">Water Damage</a>
                <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>service/coupons.php" class="nav-link" style="color: var(--rr-red);">Coupons</a>
            </nav>

            <div class="header-ctas">
                <a href="<?php echo isset($path_prefix) ? $path_prefix : ''; ?>contact.php" class="btn btn-schedule"><i class="fa-regular fa-calendar-days"></i> Schedule</a>
                <a href="tel:212-687-1726" class="btn btn-call"><i class="fa-solid fa-phone"></i> Call 212-687-1726</a>
                
                <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>
    </header>

    <main class="main-content">
