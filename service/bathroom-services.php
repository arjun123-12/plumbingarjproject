<?php 
$path_prefix = '../';
$page_title = "Bathroom Plumbing & Fixture Services in NYC";
$page_desc = "Professional NYC bathroom plumbing services: toilet repairs, shower valves, faucet fixes, and drain cleaning. 24/7 emergency dispatch. Call 212-687-1726.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => "Bathroom Plumbing & Fixture Services",
  "serviceType" => "Bathroom Plumbing",
  "provider" => [
    "@type" => "PlumbingService",
    "name" => "Roto-Rooter Plumbing & Drain Service (New York)",
    "telephone" => "212-687-1726",
    "url" => $base_url
  ],
  "areaServed" => [
    ["@type" => "AdministrativeArea", "name" => "New York City"]
  ],
  "description" => "Expert toilet repair, shower valve replacement, tub plumbing, and faucet repair services across NYC's five boroughs."
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
            <span class="active">Bathroom Services</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title">Bathroom Plumbing &<br>Fixture Services</h1>
                
                <p class="service-desc">Roto-Rooter's plumbers fix leaking showers, install toilets, seal tubs, replace dripping sink faucets, and clear bathroom blockages with no mess left behind.</p>
                
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
                    <img src="<?php echo $path_prefix; ?>assets/images/roto_plumber.png" alt="Roto-Rooter bathroom plumber" class="service-hero-img">
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
                        <img src="<?php echo $path_prefix; ?>assets/images/tech-consultant.png" alt="Roto-Rooter bathroom service video thumbnail" class="video-thumbnail-img">
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
                <span class="video-caption">WATCH: Roto-Rooter pressure balance valve installation</span>
            </div>

            <!-- Right Column: Descriptive Content -->
            <div class="difference-content">
                <h2>The Roto-Rooter Difference</h2>
                <p>Bathroom plumbing must balance form and function. Roto-Rooter plumbers combine precision plumbing with high-end fixture care, ensuring no damage to delicate tiles or custom vanities.</p>
                <p>We carry major brand parts, so we can solve toilet valve leaks or shower cartridge drips on the very first visit.</p>
            </div>

        </div>
    </div>
</section>

<!-- Professional Plumbing Versus DIY Handyman Section -->
<section class="versus-section">
    <div class="container">
        <div class="versus-card">
            
            <h2 class="versus-title">Professional Plumbing Versus DIY Handyman</h2>
            <p class="versus-subtitle-p">Know the risks of amateur bathroom plumbing fixes.</p>
            
            <div class="versus-grid">
                
                <!-- Item 1: SCALD PROTECTION -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-shower"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Pressure Balance Valves</h3>
                        <p>We install anti-scald pressure balanced shower valves that keep water temperature steady even when toilets flush, preventing thermal shocks.</p>
                    </div>
                </div>

                <!-- Item 2: THE ROTO-ROOTER WAY -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>The Roto-Rooter Way</h3>
                        <p>We install custom fixtures using lead-free brass fittings and verify all wax seals under load, preventing leaks from dripping into structural ceilings.</p>
                    </div>
                </div>

                <!-- Item 3: AMATEUR SEALING -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Improper Seals</h3>
                        <p>DIY toilet resets often lead to misaligned wax rings, leaking sewer gases into bathrooms and rotting subfloors out over months before leaks are noticed.</p>
                    </div>
                </div>

                <!-- Item 4: FULL GUARANTEE -->
                <div class="versus-item">
                    <div class="versus-icon-wrap">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="versus-item-content">
                        <h3>Full Guarantee</h3>
                        <p>All bathroom installations and repair works are backed by Roto-Rooter's comprehensive service guarantees, giving you total peace of mind.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
