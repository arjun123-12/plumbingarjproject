<?php 
$path_prefix = '../';
$page_title = "Plumbing Repair & Leak Services in NYC";
$page_desc = "Roto-Rooter provides professional leak detection, toilet repairs, and faucet fixes. Available 24/7 with no extra charges for nights and weekends. Call 212-687-1726 today.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => "Plumbing Repair & Emergency Leak Services",
  "serviceType" => "Plumbing Repair",
  "provider" => [
    "@type" => "PlumbingService",
    "name" => "Roto-Rooter Plumbing & Drain Service (New York)",
    "telephone" => "212-687-1726",
    "url" => $base_url
  ],
  "areaServed" => [
    ["@type" => "AdministrativeArea", "name" => "New York City"]
  ],
  "description" => "Professional leak detection, pipe repair, toilet rebuilds, and faucet fixes in NYC available 24/7 with zero extra charges for nights/weekends."
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

require_once dirname(__DIR__) . '/includes/header.php'; 
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
            <span class="active">Plumbing Repairs</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title">Plumbing Repair &<br>Emergency Leak Services</h1>
                
                <p class="service-desc">Roto-Rooter's repair technicians quickly diagnose and repair any leak, drip, or plumbing issue in your household. We specialize in hot water diagnostics, toilet rebuilds, faucet installations, and pipe re-linings to get your plumbing running like new.</p>
                
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
                    <img src="<?php echo $path_prefix; ?>assets/images/roto_plumber.png" alt="Roto-Rooter plumber fixing copper pipes" class="service-hero-img">
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
                        <img src="<?php echo $path_prefix; ?>assets/images/tech-consultant.png" alt="Roto-Rooter sonar leak detector video thumbnail" class="video-thumbnail-img">
                        <button class="video-play-btn" aria-label="Play video"><i class="fa-solid fa-play"></i></button>
                    </div>
                    <div class="video-controls-bar">
                        <div class="video-controls-left">
                            <i class="fa-solid fa-pause"></i>
                            <i class="fa-solid fa-volume-high"></i>
                        </div>
                        <div class="video-timeline">
                            <div class="video-progress font-width"></div>
                        </div>
                        <div class="video-controls-right">
                            <i class="fa-solid fa-gear"></i>
                            <i class="fa-solid fa-expand"></i>
                        </div>
                    </div>
                </div>
                <span class="video-caption">WATCH: Roto-Rooter leak detection technology in action</span>
            </div>

            <!-- Right Column: Descriptive Content -->
            <div class="difference-content">
                <h2>The Roto-Rooter Difference</h2>
                <p>Since 1935, Roto-Rooter has provided top-tier training to its plumbers, equipping them with advanced sonar leak locators, thermal diagnostic cameras, and high-quality materials to guarantee that minor repairs don't become structural disasters.</p>
                <p>We still focus on doing repairs right the first time, ensuring that your pipe fittings, valves, and connections are durable and secure.</p>
            </div>

        </div>
    </div>
</section>

<!-- Plumbing Repair Versus Plumbing Patches Section -->
<section class="versus-section">
    <div class="container">
        <div class="versus-card">
            
            <h2 class="versus-title">Plumbing Repair Versus Plumbing Patches</h2>
            <p class="versus-subtitle-p">Understanding professional service vs temporary handiwork.</p>
            
            <div class="versus-grid">
                
                <!-- Item 1: PROFESSIONAL REPAIR -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-wrench"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Professional Repair</h3>
                        <p>We locate the source of leaks using sonar diagnostics and structural imaging, replacing damaged pipes with industrial-grade copper or PEX lines.</p>
                    </div>
                </div>

                <!-- Item 2: THE ROTO-ROOTER WAY -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-regular fa-circle-check"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>The Roto-Rooter Way</h3>
                        <p>We do not believe in quick fixes. Every connection is sealed using premium sealants, tested under pressure, and guaranteed for long-term durability.</p>
                    </div>
                </div>

                <!-- Item 3: AMATEUR PATCHES -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Amateur Patches</h3>
                        <p>Be cautious of cheap handymen using tape, sleeves, or epoxy glue patches. These quick fixes frequently lead to sudden bursts and expensive drywall damage.</p>
                    </div>
                </div>

                <!-- Item 4: FULL GUARANTEE -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Full Guarantee</h3>
                        <p>Our repairs are covered by comprehensive warranties, ensuring that in the rare event of a repeat issue, we return to fix it at zero cost to you.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
