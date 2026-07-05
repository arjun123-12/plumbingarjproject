<?php 
$path_prefix = '';
$page_title = "Customer Reviews & Local Testimonials in NYC";
$page_desc = "Read verified customer reviews and local plumbing service testimonials for Roto-Rooter NYC. Our Manhattan, Brooklyn, Queens, Bronx, and Staten Island clients share their feedback.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type" => "WebPage",
      "@id" => $base_url . "reviews.php#webpage",
      "url" => $base_url . "reviews.php",
      "name" => "Customer Reviews & Plumbing Testimonials in New York City"
    ],
    [
      "@type" => "PlumbingService",
      "@id" => $base_url . "#plumbing-service",
      "name" => "Roto-Rooter Plumbing & Drain Service (New York)",
      "url" => $base_url,
      "telephone" => "212-687-1726",
      "aggregateRating" => [
        "@type" => "AggregateRating",
        "ratingValue" => "4.9",
        "reviewCount" => "1240"
      ]
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

require_once __DIR__ . '/includes/header.php'; 
?>

<!-- Reviews Hero Section -->
<section class="hero-section" style="padding: 100px 0 60px; background-color: var(--bg-navy); color: #ffffff;">
    <div class="container" style="text-align: center; max-width: 800px;">
        <span class="hero-tag" style="background-color: rgba(218, 41, 28, 0.1); color: var(--rr-red); border: 1px solid rgba(218, 41, 28, 0.2); padding: 6px 16px; border-radius: 50px; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 24px;">
            <i class="fa-solid fa-star"></i> Real Feedback
        </span>
        <h1 class="hero-title" style="font-size: 3rem; line-height: 1.2; font-family: var(--font-heading); font-weight: 900; text-transform: uppercase; margin-bottom: 20px;">NYC Plumbing Customer <span>Reviews</span></h1>
        <p class="hero-desc" style="color: rgba(255, 255, 255, 0.8); font-size: 1.15rem; line-height: 1.7; margin-bottom: 0;">We have worked hard to earn the trust of New Yorkers since 1935. Read through our local reviews from homes and offices across the five boroughs.</p>
    </div>
</section>

<!-- Review Board Section -->
<section class="section-padding" style="background-color: #ffffff; padding: 80px 0;">
    <div class="container" style="max-width: 1000px;">
        
        <!-- Score Bar Summary -->
        <div style="display: flex; align-items: center; justify-content: center; gap: 24px; border: 1px solid var(--border-light); border-radius: 8px; padding: 24px; margin-bottom: 48px; background-color: var(--bg-card-hover); flex-wrap: wrap;">
            <div style="text-align: center;">
                <div style="font-size: 3.5rem; font-weight: 900; color: var(--rr-blue); line-height: 1;">4.9</div>
                <div style="font-size: 0.8rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-top: 4px;">Google Rating</div>
            </div>
            <div style="border-left: 1px solid var(--border-light); height: 60px; display: none; display: block;"></div>
            <div style="text-align: center;">
                <div style="color: var(--rr-yellow); font-size: 1.8rem; display: flex; gap: 4px; justify-content: center;">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div style="font-size: 0.95rem; color: var(--text-dark); font-weight: 700; margin-top: 6px;">Based on 1,240+ Verified Reviews</div>
            </div>
        </div>

        <!-- Reviews Stack -->
        <div style="display: flex; flex-direction: column; gap: 24px;">
            
            <!-- Review 1 -->
            <div style="border: 1px solid var(--border-light); padding: 32px; border-radius: 8px; background-color: #ffffff;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; flex-wrap: wrap; gap: 12px;">
                    <div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; color: var(--rr-blue); margin: 0 0 4px 0;">Burst Copper Pipe in Basement</h3>
                        <span style="font-size: 0.85rem; color: var(--text-muted);">Verified Client &bull; Brooklyn, NY</span>
                    </div>
                    <div style="color: var(--rr-yellow); font-size: 1rem; display: flex; gap: 2px;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p style="color: var(--text-muted); font-size: 0.98rem; line-height: 1.7; margin: 0;">"Our basement water pipe split open at 3 AM on a Tuesday. Water was flooding the storage area fast. Roto-Rooter's dispatcher answered within two rings and had a repair technician at our door in 40 minutes. Walter located the main shut-off, cut away the damaged copper line, and replaced it in under an hour. Outstanding response and very fair pricing for a midnight emergency."</p>
            </div>

            <!-- Review 2 -->
            <div style="border: 1px solid var(--border-light); padding: 32px; border-radius: 8px; background-color: #ffffff;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; flex-wrap: wrap; gap: 12px;">
                    <div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; color: var(--rr-blue); margin: 0 0 4px 0;">Main Sewer Line Clog Cleared</h3>
                        <span style="font-size: 0.85rem; color: var(--text-muted);">Verified Client &bull; Queens, NY</span>
                    </div>
                    <div style="color: var(--rr-yellow); font-size: 1rem; display: flex; gap: 2px;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p style="color: var(--text-muted); font-size: 0.98rem; line-height: 1.7; margin: 0;">"Every toilet in our building started backing up at the same time. The local plumber we usually call couldn't make it out, so we tried Roto-Rooter. Dave arrived with a commercial sewer machine, did a quick camera inspection to find the root blockage, and ran the cleanout blades. The line cleared instantly. Highly recommend their drain technicians."</p>
            </div>

            <!-- Review 3 -->
            <div style="border: 1px solid var(--border-light); padding: 32px; border-radius: 8px; background-color: #ffffff;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; flex-wrap: wrap; gap: 12px;">
                    <div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; color: var(--rr-blue); margin: 0 0 4px 0;">Flooded Basement Restoration</h3>
                        <span style="font-size: 0.85rem; color: var(--text-muted);">Verified Client &bull; Staten Island, NY</span>
                    </div>
                    <div style="color: var(--rr-yellow); font-size: 1rem; display: flex; gap: 2px;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p style="color: var(--text-muted); font-size: 0.98rem; line-height: 1.7; margin: 0;">"After the heavy rain last month, our basement was sitting under three inches of stormwater. Roto-Rooter brought out heavy extraction pumps, sucked out the standing water, and set up six high-velocity fans and dynamic dehumidifiers. They checked the walls with moisture meters over three days to prevent mold. They did a clean job and handled the insurance paperwork too."</p>
            </div>

        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
