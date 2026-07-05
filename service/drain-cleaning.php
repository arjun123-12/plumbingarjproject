<?php 
$path_prefix = '../';
$page_title = "Drain Cleaning & Clogged Drain Services in NYC";
$page_desc = "Roto-Rooter quickly clears clogged bathtubs, sinks, toilets, and sewer lines. Available 24/7 with no extra charges for nights and weekends. Call 212-687-1726 today.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => "Drain Cleaning & Clogged Drain Services",
  "serviceType" => "Drain Cleaning",
  "provider" => [
    "@type" => "PlumbingService",
    "name" => "Roto-Rooter Plumbing & Drain Service (New York)",
    "telephone" => "212-687-1726",
    "url" => $base_url
  ],
  "areaServed" => [
    ["@type" => "AdministrativeArea", "name" => "New York City"]
  ],
  "description" => "Fast and professional drain cleaning services for clogged bathtubs, sinks, toilets, and main sewer lines across New York City."
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
            <span class="active">Drain Cleaning</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title">Drain Cleaning &<br>Clogged Drain Services</h1>
                
                <p class="service-desc">Roto-Rooter's drain cleaning services quickly clear any drain, including clogged bathtubs, sinks, toilets, and sewer lines, cleaning the drain for long-lasting results. Our expert technicians offer routine and emergency drain cleaning services, ensuring your drains flow freely.</p>
                
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
                    <img src="<?php echo $path_prefix; ?>assets/images/roto_plumber.png" alt="Roto-Rooter plumber clearing a drain line" class="service-hero-img">
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
                        <img src="<?php echo $path_prefix; ?>assets/images/tech-consultant.png" alt="Roto-Rooter cleaning blade inside sink video thumbnail" class="video-thumbnail-img">
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
                <span class="video-caption">WATCH: Roto-Rooter drain cleaning blade in action</span>
            </div>

            <!-- Right Column: Descriptive Content -->
            <div class="difference-content">
                <h2>The Roto-Rooter Difference</h2>
                <p>Our founder, Samuel Blanc, revolutionized drain cleaning equipment in 1933 with the invention of the Roto-Rooter sewer cleaning machine, the world's first electromechanical sewer and drain cleaning machine. Roto-Rooter machine could cut through and remove tree roots and other blockages from sewer lines without extensive and costly excavations.</p>
                <p>We still use an updated variation of Samuel's original machine design to clean sewer and drain lines from end to end for long-lasting results.</p>
            </div>

        </div>
    </div>
</section>

<!-- Drain Cleaning Versus Drain Clearing Section -->
<section class="versus-section">
    <div class="container">
        <div class="versus-card">
            
            <h2 class="versus-title">Drain Cleaning Versus Drain Clearing</h2>
            <p class="versus-subtitle-p">Know the difference before you choose a plumber.</p>
            
            <div class="versus-grid">
                
                <!-- Item 1: DRAIN CLEANING -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-faucet-drip"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Drain Cleaning</h3>
                        <p>If a sewer & drain service company advertising "drain cleaning" service, that usually means they'll puncture a hole in the clog to "clear" the drain, or get it flowing again.</p>
                    </div>
                </div>

                <!-- Item 2: THE ROTO-ROOTER WAY -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-regular fa-calendar-check"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>The Roto-Rooter Way</h3>
                        <p>We don't just clear (open) drains, we clean the entire pipeline from end to end so it stays clean and clear for a longer time period. And we guarantee our drain cleanings for six months.</p>
                    </div>
                </div>

                <!-- Item 3: DRAIN CLEARING -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Drain Clearing</h3>
                        <p>Don't be fooled by cheap "drain clearing" or "drain opening" claims. Those deals might seem irresistible at just $69 or $99, but in most cases they are too good to be true.</p>
                    </div>
                </div>

                <!-- Item 4: OUR GUARANTEE -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Our Guarantee</h3>
                        <p>Many drain clearing services only offer a 30-day guarantee. That's by design, because when your drain backs up again, they'll have the opportunity to come back and upsell you a full drain cleaning or convince you that your sewer needs to be replaced.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
