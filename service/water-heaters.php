<?php 
$path_prefix = '../';
$page_title = "Water Heater Repairs & Installs in NYC";
$page_desc = "Roto-Rooter offers professional gas/electric water heater repairs, tankless system installations, and tank flushes. 24/7 service. Call 212-687-1726 today.";
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
            <span class="active">Water Heaters</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title">Water Heater Repair &<br>Installation Services</h1>
                
                <p class="service-desc">Roto-Rooter's technicians diagnose hot water problems, replace gas or electric tanks, install tankless systems, and flush sediment scales to keep hot water flowing.</p>
                
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
                    <img src="<?php echo $path_prefix; ?>assets/images/roto_plumber.png" alt="Roto-Rooter water heater technician" class="service-hero-img">
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
                        <img src="<?php echo $path_prefix; ?>assets/images/tech-consultant.png" alt="Roto-Rooter water heater testing video thumbnail" class="video-thumbnail-img">
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
                <span class="video-caption">WATCH: Roto-Rooter tankless water heater diagnostics</span>
            </div>

            <!-- Right Column: Descriptive Content -->
            <div class="difference-content">
                <h2>The Roto-Rooter Difference</h2>
                <p>Having no hot water is a major disruption. Roto-Rooter carries diagnostic tools to replace thermocouples, burner assemblies, heating elements, and expansion tanks on spot.</p>
                <p>If your system is beyond repair, we install major brands with high energy-efficiency ratings to lower your energy bills.</p>
            </div>

        </div>
    </div>
</section>

<!-- Energy-Efficient Heater Versus Old Wasteful Tanks Section -->
<section class="versus-section">
    <div class="container">
        <div class="versus-card">
            
            <h2 class="versus-title">Energy-Efficient Heater Versus Old Wasteful Tanks</h2>
            <p class="versus-subtitle-p">Know when to repair your hot water tank or upgrade to tankless.</p>
            
            <div class="versus-grid">
                
                <!-- Item 1: TANKLESS ADVANTAGE -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Tankless Systems</h3>
                        <p>Provides endless hot water on demand. Since they only heat water when requested, they save up to 40% in gas and electric energy bills compared to conventional tanks.</p>
                    </div>
                </div>

                <!-- Item 2: THE ROTO-ROOTER WAY -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>The Roto-Rooter Way</h3>
                        <p>We analyze your household hot water usage, calculate peak demands, and supply certified sizing configurations to fit your budget and usage limits.</p>
                    </div>
                </div>

                <!-- Item 3: OLD RUSTED TANKS -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Leaking Tanks</h3>
                        <p>Conventional tanks older than 10 years develop internal corrosion scale, leading to slow recovery times, rusted water, and eventual bottom leaks that flood floors.</p>
                    </div>
                </div>

                <!-- Item 4: SYSTEM MAINTENANCE -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>System Flushes</h3>
                        <p>We flush water heater tanks annually to clear scale sediment, preserving the heating elements, restoring water heating efficiency, and extending system life.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
