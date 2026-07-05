<?php 
$path_prefix = '../';
$page_title = "Commercial Sewer Services in NYC";
$page_desc = "Roto-Rooter provides commercial sewer line diagnostics, excavations, and trenchless repairs. Available 24/7 with no extra charges. Call 212-687-1726 today.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => "Commercial Sewer Line Services",
  "serviceType" => "Sewer Services",
  "provider" => [
    "@type" => "PlumbingService",
    "name" => "Roto-Rooter Plumbing & Drain Service (New York)",
    "telephone" => "212-687-1726",
    "url" => $base_url
  ],
  "areaServed" => [
    ["@type" => "AdministrativeArea", "name" => "New York City"]
  ],
  "description" => "Commercial sewer line diagnostics, video inspection, line excavations, and trenchless sewer pipe repairs across NYC."
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

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
            <span class="active">Commercial Sewer</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title">Commercial Sewer Line &<br>Excavation Services</h1>
                
                <p class="service-desc">Roto-Rooter's commercial plumbers manage heavy-duty sewer line repairs, trenchless pipe replacements, permit acquisitions, and municipal line cleanups to protect your commercial operations.</p>
                
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
                    <img src="<?php echo $path_prefix; ?>assets/images/roto_plumber.png" alt="Roto-Rooter commercial excavation service" class="service-hero-img">
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
                        <img src="<?php echo $path_prefix; ?>assets/images/tech-consultant.png" alt="Roto-Rooter trenchless repair video thumbnail" class="video-thumbnail-img">
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
                <span class="video-caption">WATCH: Roto-Rooter trenchless pipe-lining in action</span>
            </div>

            <!-- Right Column: Descriptive Content -->
            <div class="difference-content">
                <h2>The Roto-Rooter Difference</h2>
                <p>Sewer backups disrupt commercial properties instantly. Roto-Rooter pioneered electromechanical sewer cleaning, and today we continue that innovation with non-disruptive trenchless pipe-lining systems.</p>
                <p>We obtain all city road excavation permits and manage inspections, minimizing downtime for your enterprise.</p>
            </div>

        </div>
    </div>
</section>

<!-- Commercial Excavation Versus Amateur Digs Section -->
<section class="versus-section">
    <div class="container">
        <div class="versus-card">
            
            <h2 class="versus-title">Commercial Excavation Versus Amateur Digs</h2>
            <p class="versus-subtitle-p">Ensure your business works with certified commercial experts.</p>
            
            <div class="versus-grid">
                
                <!-- Item 1: TRENCHLESS REPAIR -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-road"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Trenchless Repair</h3>
                        <p>We use structural pipe-lining to repair main sewers under roads and lawns without tearing up concrete, saving thousands in restoration costs.</p>
                    </div>
                </div>

                <!-- Item 2: THE ROTO-ROOTER WAY -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-truck-pickup"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>The Roto-Rooter Way</h3>
                        <p>Our fleets include municipal diggers, camera trucks, and shoring shields. We handle street permits and city codes from end to end.</p>
                    </div>
                </div>

                <!-- Item 3: AMATEUR DIGGING -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Amateur Digs</h3>
                        <p>Beware of contractors digging without safety shoring or utility mapping. Unpermitted excavations risk utility strikes, code penalties, and massive delays.</p>
                    </div>
                </div>

                <!-- Item 4: FULL LIABILITY COVER -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Full Liability Cover</h3>
                        <p>Our heavy-duty commercial projects are backed by extensive liability insurance and structural warranties, giving business owners total protection.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
