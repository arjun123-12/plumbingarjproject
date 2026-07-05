<?php 
$path_prefix = '../';
$page_title = "Plumbing Coupons & Special Offers in New York City";
$page_desc = "Discount plumbing coupons, special promotional offers, and senior citizen discounts in NYC. Roto-Rooter offers 24/7 service. Call 212-687-1726 today.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type" => "WebPage",
      "@id" => $base_url . "service/coupons.php#webpage",
      "url" => $base_url . "service/coupons.php",
      "name" => "Plumbing Coupons & Special Offers in New York City",
      "description" => "Save on your next plumbing service with Roto-Rooter New York coupons. Discounts on drain cleaning, leak detection, water heaters, and more."
    ],
    [
      "@type" => "PlumbingService",
      "@id" => $base_url . "#plumbing-service",
      "name" => "Roto-Rooter Plumbing & Drain Service (New York)",
      "url" => $base_url,
      "telephone" => "212-687-1726",
      "offers" => [
        [
          "@type" => "Offer",
          "name" => "Senior Citizen & Military Discount",
          "description" => "10% off any plumbing service for senior citizens and active/retired military personnel.",
          "priceCurrency" => "USD",
          "price" => "0.00",
          "valueAddedServiceSpecification" => [
            "@type" => "PropertyValue",
            "name" => "Discount",
            "value" => "10%"
          ]
        ],
        [
          "@type" => "Offer",
          "name" => "$50 Off Water Heater Installation",
          "description" => "$50 off new water heater replacement or installation.",
          "priceCurrency" => "USD",
          "price" => "50.00"
        ]
      ]
    ]
  ]
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
            <span class="active">Coupons</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title">Plumbing Coupons<br>& Special Offers</h1>
                
                <p class="service-desc">Save money on your next service call! Roto-Rooter of New York provides local discount vouchers, senior citizen promotions, and special pricing for military personnel to make repairs affordable.</p>
                
                <div class="service-ctas-row">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule" style="padding: 14px 28px;"><i class="fa-regular fa-calendar-days"></i> Schedule Online</a>
                    
                    <div class="coupon-tag-link">
                        <i class="fa-solid fa-phone"></i>
                        <span>Call & Mention Voucher: <strong style="color:var(--rr-blue);">212-687-1726</strong></span>
                    </div>
                </div>
            </div>

            <!-- Right Media Column -->
            <div class="hero-media-col">
                <div class="service-hero-media">
                    <img src="<?php echo $path_prefix; ?>assets/images/roto_plumber.png" alt="Roto-Rooter special value plumbing" class="service-hero-img">
                    <div class="service-hero-banner" style="cursor: default;">
                        <div class="banner-left">
                            <i class="fa-solid fa-tags"></i>
                            <span>Show Your Plumbing Technician<br>Vouchers on Arrival</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Coupons Cards Section -->
<section class="about-nyc-section" style="background-color: #f8fafc; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); padding: 80px 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase;">Available Discount Vouchers</h2>
            <p style="color: var(--text-muted); font-size: 1rem; margin-top: 8px;">Simply show these coupons to your plumbing technician upon arrival.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; margin-bottom: 40px;">
            <!-- Coupon 1 -->
            <div style="background-color: #ffffff; border: 2px dashed var(--rr-red); padding: 36px 30px; border-radius: 8px; position: relative; box-shadow: 0 4px 15px rgba(6,18,44,0.02);">
                <span style="position: absolute; top: 12px; right: 12px; background-color: var(--rr-red); color: #ffffff; font-size: 0.65rem; font-weight: 900; padding: 4px 8px; border-radius: 4px; text-transform: uppercase;">CODE: RR50</span>
                <h3 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: var(--rr-red); margin-bottom: 4px;">$50 OFF</h3>
                <h4 style="font-family: var(--font-heading); font-size: 1rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 12px;">Any Plumbing Service</h4>
                <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.5; margin-bottom: 20px;">Save $50 on any plumbing repair, faucet installation, toilet rebuild, or leak detection service call.</p>
                <a href="<?php echo $path_prefix; ?>contact.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase; text-decoration: none;">Apply Coupon &rarr;</a>
            </div>

            <!-- Coupon 2 -->
            <div style="background-color: #ffffff; border: 2px dashed var(--rr-red); padding: 36px 30px; border-radius: 8px; position: relative; box-shadow: 0 4px 15px rgba(6,18,44,0.02);">
                <span style="position: absolute; top: 12px; right: 12px; background-color: var(--rr-red); color: #ffffff; font-size: 0.65rem; font-weight: 900; padding: 4px 8px; border-radius: 4px; text-transform: uppercase;">CODE: RR75</span>
                <h3 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: var(--rr-red); margin-bottom: 4px;">$75 OFF</h3>
                <h4 style="font-family: var(--font-heading); font-size: 1rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 12px;">Main Drain Cleaning</h4>
                <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.5; margin-bottom: 20px;">Save $75 on sewer line cleaning, main drain snaking, or camera inspections in New York City.</p>
                <a href="<?php echo $path_prefix; ?>contact.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase; text-decoration: none;">Apply Coupon &rarr;</a>
            </div>

            <!-- Coupon 3 -->
            <div style="background-color: #ffffff; border: 2px dashed var(--rr-red); padding: 36px 30px; border-radius: 8px; position: relative; box-shadow: 0 4px 15px rgba(6,18,44,0.02);">
                <span style="position: absolute; top: 12px; right: 12px; background-color: var(--rr-red); color: #ffffff; font-size: 0.65rem; font-weight: 900; padding: 4px 8px; border-radius: 4px; text-transform: uppercase;">CODE: RR10</span>
                <h3 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: var(--rr-red); margin-bottom: 4px;">10% OFF</h3>
                <h4 style="font-family: var(--font-heading); font-size: 1rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 12px;">Seniors & Military</h4>
                <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.5; margin-bottom: 20px;">We proudly support our community! Get 10% off any repair call for active military and senior citizens.</p>
                <a href="<?php echo $path_prefix; ?>contact.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase; text-decoration: none;">Apply Coupon &rarr;</a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
