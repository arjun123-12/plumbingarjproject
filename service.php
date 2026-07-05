<?php 
$path_prefix = '';
$page_title = "24/7 Professional Plumbing & Drain Services in NYC";
$page_desc = "Get fast, reliable plumbing solutions in New York City. From emergency leak repairs and drain cleaning to rapid water damage cleanup. Licensed plumbers on call 24/7.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type" => "WebPage",
      "@id" => $base_url . "service.php#webpage",
      "url" => $base_url . "service.php",
      "name" => "Professional Plumbing & Drain Services in New York City",
      "description" => "Core plumbing offerings including emergency repairs, drain cleaning, and water damage restoration."
    ],
    [
      "@type" => "PlumbingService",
      "@id" => $base_url . "#plumbing-service",
      "name" => "Roto-Rooter Plumbing & Drain Service (New York)",
      "url" => $base_url,
      "telephone" => "212-687-1726",
      "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "120 Broadway, Suite 400",
        "addressLocality" => "New York",
        "addressRegion" => "NY",
        "postalCode" => "10271",
        "addressCountry" => "US"
      ]
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

require_once __DIR__ . '/includes/header.php'; 
?>

<!-- Services Hero Section -->
<section class="hero-section" style="padding: 100px 0 60px; background-color: var(--bg-navy); color: #ffffff;">
    <div class="container" style="text-align: center; max-width: 800px;">
        <span class="hero-tag" style="background-color: rgba(218, 41, 28, 0.1); color: var(--rr-red); border: 1px solid rgba(218, 41, 28, 0.2); padding: 6px 16px; border-radius: 50px; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 24px;">
            <i class="fa-solid fa-screwdriver-wrench"></i> What We Do
        </span>
        <h1 class="hero-title" style="font-size: 3rem; line-height: 1.2; font-family: var(--font-heading); font-weight: 900; text-transform: uppercase; margin-bottom: 20px;">Professional NYC Plumbing &<br><span>Drain Services</span></h1>
        <p class="hero-desc" style="color: rgba(255, 255, 255, 0.8); font-size: 1.15rem; line-height: 1.7; margin-bottom: 0;">We resolve your plumbing emergencies, blocked drains, and flood disasters quickly. Select from our core service lines below for rapid 24/7 service.</p>
    </div>
</section>

<!-- Services Grid Section -->
<section class="section-padding" style="background-color: #ffffff; padding: 80px 0;">
    <div class="container">
        <div class="grid-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
            
            <!-- Service 1: Emergency Plumbing -->
            <div class="service-card reveal-fade-up" style="background-color: #ffffff; border: 1px solid var(--border-light); padding: 40px 30px; border-radius: 8px; box-shadow: 0 4px 20px rgba(6,18,44,0.03); display: flex; flex-direction: column; justify-content: space-between; transition: all 0.3s ease;">
                <div>
                    <div style="color: var(--rr-red); font-size: 2.5rem; margin-bottom: 24px;"><i class="fa-solid fa-wrench"></i></div>
                    <h2 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 16px;">Emergency Plumbing</h2>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; margin-bottom: 24px;">From burst pipes and active water leaks to broken water heaters, we dispatch licensed plumbers immediately to secure your property. Available 24 hours a day with zero extra fees on weekends or nights.</p>
                </div>
                <a href="<?php echo $path_prefix; ?>service/emergency-plumbing.php" class="btn btn-schedule" style="padding: 12px 20px; font-size: 0.8rem; border-radius: 6px; text-align: center; width: 100%;">View Emergency Service &rarr;</a>
            </div>

            <!-- Service 2: Drain Cleaning -->
            <div class="service-card reveal-fade-up" style="background-color: #ffffff; border: 1px solid var(--border-light); padding: 40px 30px; border-radius: 8px; box-shadow: 0 4px 20px rgba(6,18,44,0.03); display: flex; flex-direction: column; justify-content: space-between; transition: all 0.3s ease;">
                <div>
                    <div style="color: var(--rr-red); font-size: 2.5rem; margin-bottom: 24px;"><i class="fa-solid fa-water"></i></div>
                    <h2 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 16px;">Drain Cleaning</h2>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; margin-bottom: 24px;">Clogged sinks, blocked toilets, grease traps, and slow sewer mains. We use high-velocity water jetters and specialized camera lines to completely clean out your system and clear blocks.</p>
                </div>
                <a href="<?php echo $path_prefix; ?>service/drain-cleaning.php" class="btn btn-schedule" style="padding: 12px 20px; font-size: 0.8rem; border-radius: 6px; text-align: center; width: 100%;">View Drain Service &rarr;</a>
            </div>

            <!-- Service 3: Water Damage -->
            <div class="service-card reveal-fade-up" style="background-color: #ffffff; border: 1px solid var(--border-light); padding: 40px 30px; border-radius: 8px; box-shadow: 0 4px 20px rgba(6,18,44,0.03); display: flex; flex-direction: column; justify-content: space-between; transition: all 0.3s ease;">
                <div>
                    <div style="color: var(--rr-red); font-size: 2.5rem; margin-bottom: 24px;"><i class="fa-solid fa-house-chimney-crack"></i></div>
                    <h2 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 16px;">Water Damage Cleanup</h2>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; margin-bottom: 24px;">Flooded basement cleanup, rapid water extraction, industrial dehumidification, structural drying, and sanitizing. We clean up after pipe breaks and storms, working directly with your insurance.</p>
                </div>
                <a href="<?php echo $path_prefix; ?>service/water-damage.php" class="btn btn-schedule" style="padding: 12px 20px; font-size: 0.8rem; border-radius: 6px; text-align: center; width: 100%;">View Cleanup Service &rarr;</a>
            </div>

        </div>
    </div>
</section>

<!-- Dispatch Contact CTA -->
<section class="section-padding" style="background-color: var(--bg-card-hover); padding: 80px 0; border-top: 1px solid var(--border-light); text-align: center;">
    <div class="container reveal-scale-in" style="max-width: 800px;">
        <h2 style="font-size: 2.2rem; margin-bottom: 16px; color: var(--rr-blue); font-family: var(--font-heading); font-weight: 900; text-transform: uppercase;">Need Urgent Professional Help?</h2>
        <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 36px; line-height: 1.6;">Our New York dispatchers are available right now. We route licensed plumbing technicians directly to your address across Manhattan, Brooklyn, Queens, the Bronx, and Staten Island.</p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule" style="padding: 16px 32px; font-size: 1rem;"><i class="fa-regular fa-calendar-days"></i> Book Online Now</a>
            <a href="tel:212-687-1726" class="btn btn-call" style="padding: 16px 32px; font-size: 1rem;"><i class="fa-solid fa-phone"></i> Call 212-687-1726</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
