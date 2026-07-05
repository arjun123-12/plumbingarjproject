<?php 
$path_prefix = '../';
$page_title = "Water Damage Restoration & Cleanup in NYC";
$page_desc = "Roto-Rooter offers emergency water extraction, drying, and structural sanitization. Available 24/7. Direct insurance billing. Call 212-687-1726 today.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => "Water Damage Restoration & Cleanup Services",
  "serviceType" => "Water Damage Restoration",
  "provider" => [
    "@type" => "PlumbingService",
    "name" => "Roto-Rooter Plumbing & Drain Service (New York)",
    "telephone" => "212-687-1726",
    "url" => $base_url
  ],
  "areaServed" => [
    ["@type" => "AdministrativeArea", "name" => "New York City"]
  ],
  "description" => "Emergency water extraction, structural drying, basement pumping, sewage sanitation, and cleanup services in NYC."
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
            <a href="<?php echo $path_prefix; ?>service.php">Services</a>
            <span>/</span>
            <span class="active">Water Damage</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title">Water Damage Cleanup &<br>Extractor Services</h1>
                
                <p class="service-desc">Roto-Rooter's water cleanup crews are dispatched 24/7 to pump out flooded basements, extract standing water, dry structures, and sanitize properties to rescue your property.</p>
                
                <div class="service-ctas-row">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule" style="padding: 14px 28px;"><i class="fa-regular fa-calendar-days"></i> Schedule Online</a>
                    
                    <div class="coupon-tag-link">
                        <i class="fa-solid fa-clock"></i>
                        <span>Fast Emergency Response Times in NYC</span>
                    </div>
                </div>
            </div>

            <!-- Right Media Column -->
            <div class="hero-media-col">
                <div class="service-hero-media">
                    <img src="<?php echo $path_prefix; ?>assets/images/roto_plumber.png" alt="Roto-Rooter water damage restoration" class="service-hero-img">
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
                        <img src="<?php echo $path_prefix; ?>assets/images/tech-consultant.png" alt="Roto-Rooter industrial dryer video thumbnail" class="video-thumbnail-img">
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
                <span class="video-caption">WATCH: Roto-Rooter industrial dehumidifiers extraction power</span>
            </div>

            <!-- Right Column: Descriptive Content -->
            <div class="difference-content">
                <h2>The Roto-Rooter Difference</h2>
                <p>Water damage worsens every hour it's left untreated. Roto-Rooter combines rapid response plumbing repairs with commercial water extraction and sanitization to rescue your structure.</p>
                <p>We use thermal imaging to locate hidden pockets of water inside drywall, ensuring 100% dry walls before rebuilding.</p>
            </div>

        </div>
    </div>
</section>

<!-- Rapid Water Extraction Versus Slow Mopping Section -->
<section class="versus-section">
    <div class="container">
        <div class="versus-card">
            
            <h2 class="versus-title">Rapid Water Extraction Versus Slow Mopping</h2>
            <p class="versus-subtitle-p">Understand the difference between emergency extraction and surface cleanup.</p>
            
            <div class="versus-grid">
                
                <!-- Item 1: INDUSTRIAL EXTRACTION -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-wind"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Submersible Extraction</h3>
                        <p>We pump thousands of gallons of water from flooded areas using heavy-duty truck-mounted vacuums and industrial extraction machines, fast-tracking recovery.</p>
                    </div>
                </div>

                <!-- Item 2: THE ROTO-ROOTER WAY -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-temperature-arrow-up"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>The Roto-Rooter Way</h3>
                        <p>We dry the structure completely using LGR dehumidifiers and high-velocity air movers to pull moisture out of hardwood floors, subfloors, and structural framing.</p>
                    </div>
                </div>

                <!-- Item 3: AMATEUR CLEANUP -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Surface Mopping</h3>
                        <p>Beware of simple fan-drying and hand-mopping. Residual moisture deep in drywall or under floorboards leads to mold growth and wood rot within 48 hours.</p>
                    </div>
                </div>

                <!-- Item 4: DIRECT BILL INSURANCE -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Direct Insurance Billing</h3>
                        <p>We coordinate directly with all major insurance companies, providing documentation, thermal scan records, and direct billing to minimize your out-of-pocket costs.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
