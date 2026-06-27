<?php 
$path_prefix = '../';
$page_title = "Water Quality & Filtration in NYC";
$page_desc = "Roto-Rooter provides professional water testing, filter system installations, and water softeners. Available 24/7. Call 212-687-1726 today.";
require_once '../includes/header.php'; 
?>

<!-- Service Hero Section -->
<section class="service-hero-section">
    <div class="container">
        
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a href="<?php echo $path_prefix; ?>index.php">Home</a>
            <span>/</span>
            <a href="<?php echo $path_prefix; ?>service/plumbing-repair.php">Plumbing</a>
            <span>/</span>
            <span class="active">Water Quality</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title">Water Quality &<br>Filtration Systems</h1>
                
                <p class="service-desc">Roto-Rooter's filtration technicians quickly test and configure water purification systems, water softeners, and lead filtering solutions for NYC homes to ensure pure water.</p>
                
                <div class="service-ctas-row">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule" style="padding: 14px 28px;"><i class="fa-regular fa-calendar-days"></i> Schedule Online</a>
                    
                    <div class="coupon-tag-link">
                        <i class="fa-solid fa-tag"></i>
                        <span>Save Money! Check out available <a href="<?php echo $path_prefix; ?>service/coupons.php">coupons</a></span>
                    </div>
                </div>
            </div>

            <!-- Right Media Column -->
            <div class="hero-media-col">
                <div class="service-hero-media">
                    <img src="<?php echo $path_prefix; ?>assets/images/roto_plumber.png" alt="Roto-Rooter water quality system installation" class="service-hero-img">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="service-hero-banner">
                        <div class="banner-left">
                            <i class="fa-regular fa-calendar-check"></i>
                            <span>Free Estimates & No Extra<br>Charge for Nights & Weekends</span>
                        </div>
                        <div class="banner-right">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- The Roto-Rooter Difference Section -->
<section class="difference-section">
    <div class="container">
        <div class="difference-grid">
            
            <!-- Left Column: Video Mock -->
            <div class="video-column">
                <div class="video-card">
                    <div class="video-thumbnail-container">
                        <img src="<?php echo $path_prefix; ?>assets/images/tech-consultant.png" alt="Roto-Rooter filter setup video thumbnail" class="video-thumbnail-img">
                        <button class="video-play-btn" aria-label="Play video"><i class="fa-solid fa-play"></i></button>
                    </div>
                    <div class="video-controls-bar">
                        <div class="video-controls-left">
                            <i class="fa-solid fa-pause"></i>
                            <i class="fa-solid fa-volume-high"></i>
                        </div>
                        <div class="video-timeline">
                            <div class="video-progress"></div>
                        </div>
                        <div class="video-controls-right">
                            <i class="fa-solid fa-gear"></i>
                            <i class="fa-solid fa-expand"></i>
                        </div>
                    </div>
                </div>
                <span class="video-caption">WATCH: Roto-Rooter lead filtration testing process</span>
            </div>

            <!-- Right Column: Descriptive Content -->
            <div class="difference-content">
                <h2>The Roto-Rooter Difference</h2>
                <p>We do not compromise on the health of your family. Our technicians perform certified chemical water diagnostics to locate hard minerals, chlorine, and heavy metals.</p>
                <p>We customize whole-house filter designs to meet specific local water profiles, ensuring clean, fresh water from every tap.</p>
            </div>

        </div>
    </div>
</section>

<!-- Whole-House Filtration Versus Basic Filter Pitchers Section -->
<section class="versus-section">
    <div class="container">
        <div class="versus-card">
            
            <h2 class="versus-title">Whole-House Filtration Versus Basic Filter Pitchers</h2>
            <p class="versus-subtitle-p">Compare dynamic home setups with slow countertop jugs.</p>
            
            <div class="versus-grid">
                
                <!-- Item 1: WHOLE HOUSE FILTERS -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-filter"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Whole-House System</h3>
                        <p>Provides multi-stage chemical extraction at the entry point of your home. It filters water for showers, laundry, dishwashing, and drinking simultaneously.</p>
                    </div>
                </div>

                <!-- Item 2: THE ROTO-ROOTER WAY -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-vial-virus"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>The Roto-Rooter Way</h3>
                        <p>We install dual-stage carbon blocks and reverse osmosis systems that extract lead, mercury, chlorine, and scale minerals with zero drop in water pressure.</p>
                    </div>
                </div>

                <!-- Item 3: STANDARD PITCHERS -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-glass-water-droplet"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Countertop Jugs</h3>
                        <p>Slow and low-capacity pitchers only filter basic odor and chlorine. They do not extract lead, do not protect pipes from scale buildup, and require constant filter changes.</p>
                    </div>
                </div>

                <!-- Item 4: APPLIANCE PROTECTION -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Appliance Protection</h3>
                        <p>Our water softeners extract calcium and magnesium scale, preventing mineral buildup inside water heaters, dishwashers, and washing machines, extending their life.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
