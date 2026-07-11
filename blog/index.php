<?php 
$path_prefix = '../';
$page_title = "Plumbing Tips & Homeowner Advice Blog | NYC";
$page_desc = "Read practical plumbing advice, maintenance tips, and emergency guidelines written by Roto-Rooter's NYC plumbing technicians.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type" => "Blog",
      "@id" => $base_url . "blog/#blog",
      "url" => $base_url . "blog/",
      "name" => "Roto-Rooter NYC Plumbing Blog",
      "description" => "Practical home plumbing advice and repair guides."
    ],
    [
      "@type" => "BlogPosting",
      "headline" => "How Emergency Drain Cleaning Can Save Your Home from Water Damage",
      "datePublished" => "2026-07-10",
      "author" => [
          "@type" => "Person",
          "name" => "Dave Miller (Senior Plumber)"
      ],
      "url" => $base_url . "blog/emergency-drain-cleaning-prevents-water-damage.php",
      "description" => "Emergency Drain Cleaning is the fastest way to stop severe clogs and prevent expensive water damage. Learn why quick action can save your home."
    ],
    [
      "@type" => "BlogPosting",
      "headline" => "How Water Removal Services Protect Your Home from Long-Term Water Damage",
      "datePublished" => "2026-07-10",
      "author" => [
          "@type" => "Person",
          "name" => "Walter Jenkins (Lead Technician)"
      ],
      "url" => $base_url . "blog/water-removal-services.php",
      "description" => "Protect your property with expert water removal services. Discover how water damage restoration and repair help Brooklyn homeowners avoid costly repairs."
    ],
    [
      "@type" => "BlogPosting",
      "headline" => "Why You Should Never Ignore a Blocked Drain",
      "datePublished" => "2026-07-10",
      "author" => [
          "@type" => "Person",
          "name" => "Dave Miller (Senior Plumber)"
      ],
      "url" => $base_url . "blog/emergency-drain-service.php",
      "description" => "Need a reliable emergency drain service? Learn the warning signs, benefits of professional drain cleaning, and how Go Brooklyn Plumber can help."
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

require_once dirname(__DIR__) . '/includes/header.php'; 
?>

<!-- Blog Hero Section -->
<section class="hero-section" style="padding: 100px 0 60px; background-color: var(--bg-navy); color: #ffffff;">
    <div class="container" style="text-align: center; max-width: 800px;">
        <span class="hero-tag" style="background-color: rgba(218, 41, 28, 0.1); color: var(--rr-red); border: 1px solid rgba(218, 41, 28, 0.2); padding: 6px 16px; border-radius: 50px; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 24px;">
            <i class="fa-solid fa-book-open"></i> The Plumbing Journal
        </span>
        <h1 class="hero-title" style="font-size: 3rem; line-height: 1.2; font-family: var(--font-heading); font-weight: 900; text-transform: uppercase; margin-bottom: 20px;">NYC Plumbing Advice & <span>Guides</span></h1>
        <p class="hero-desc" style="color: rgba(255, 255, 255, 0.8); font-size: 1.15rem; line-height: 1.7; margin-bottom: 0;">Practical maintenance guides, troubleshooting checklists, and professional advice straight from our field plumbers to keep your home's pipes flowing.</p>
    </div>
</section>

<!-- Blog Listing Grid -->
<section class="section-padding" style="background-color: #ffffff; padding: 80px 0;">
    <div class="container">
        <div class="grid-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
            
            <!-- Blog Card 1 -->
            <div class="service-card reveal-fade-up" style="background-color: #ffffff; border: 1px solid var(--border-light); border-radius: 8px; box-shadow: 0 4px 20px rgba(6,18,44,0.03); overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; transition: all 0.3s ease;">
                <div>
                    <!-- Image container -->
                    <div style="width: 100%; height: 200px; overflow: hidden; background-color: #eee;">
                        <img src="<?php echo $path_prefix; ?>assets/images/emergency_plumbing_hero.png" alt="How Emergency Drain Cleaning Can Save Your Home from Water Damage" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    
                    <div style="padding: 24px 24px 0 24px;">
                        <div style="font-size: 0.8rem; color: var(--rr-red); font-weight: 700; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.05em;">
                            July 10, 2026 &bull; By Dave
                        </div>
                        <h2 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 900; color: var(--rr-blue); margin-bottom: 12px; line-height: 1.4; text-transform: uppercase;">
                            <a href="<?php echo $path_prefix; ?>blog/emergency-drain-cleaning-prevents-water-damage.php" style="color: var(--rr-blue);">How Emergency Drain Cleaning Can Save Your Home from Water Damage</a>
                        </h2>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin-bottom: 24px;">
                            Emergency Drain Cleaning is the fastest way to stop severe clogs and prevent expensive water damage. Learn why quick action can save your home.
                        </p>
                    </div>
                </div>
                
                <div style="padding: 0 24px 24px 24px;">
                    <a href="<?php echo $path_prefix; ?>blog/emergency-drain-cleaning-prevents-water-damage.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-flex; align-items: center; gap: 4px;">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="service-card reveal-fade-up" style="background-color: #ffffff; border: 1px solid var(--border-light); border-radius: 8px; box-shadow: 0 4px 20px rgba(6,18,44,0.03); overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; transition: all 0.3s ease;">
                <div>
                    <!-- Image container -->
                    <div style="width: 100%; height: 200px; overflow: hidden; background-color: #eee;">
                        <img src="<?php echo $path_prefix; ?>assets/images/water_damage_hero.png" alt="How Water Removal Services Protect Your Home from Long-Term Water Damage" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    
                    <div style="padding: 24px 24px 0 24px;">
                        <div style="font-size: 0.8rem; color: var(--rr-red); font-weight: 700; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.05em;">
                            July 10, 2026 &bull; By Walter
                        </div>
                        <h2 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 900; color: var(--rr-blue); margin-bottom: 12px; line-height: 1.4; text-transform: uppercase;">
                            <a href="<?php echo $path_prefix; ?>blog/water-removal-services.php" style="color: var(--rr-blue);">How Water Removal Services Protect Your Home from Long-Term Water Damage</a>
                        </h2>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin-bottom: 24px;">
                            Protect your property with expert water removal services. Discover how water damage restoration and repair help Brooklyn homeowners avoid costly repairs.
                        </p>
                    </div>
                </div>
                
                <div style="padding: 0 24px 24px 24px;">
                    <a href="<?php echo $path_prefix; ?>blog/water-removal-services.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-flex; align-items: center; gap: 4px;">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="service-card reveal-fade-up" style="background-color: #ffffff; border: 1px solid var(--border-light); border-radius: 8px; box-shadow: 0 4px 20px rgba(6,18,44,0.03); overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; transition: all 0.3s ease;">
                <div>
                    <!-- Image container -->
                    <div style="width: 100%; height: 200px; overflow: hidden; background-color: #eee;">
                        <img src="<?php echo $path_prefix; ?>assets/images/drain_cleaning_hero.png" alt="Why You Should Never Ignore a Blocked Drain" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    
                    <div style="padding: 24px 24px 0 24px;">
                        <div style="font-size: 0.8rem; color: var(--rr-red); font-weight: 700; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.05em;">
                            July 10, 2026 &bull; By Dave
                        </div>
                        <h2 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 900; color: var(--rr-blue); margin-bottom: 12px; line-height: 1.4; text-transform: uppercase;">
                            <a href="<?php echo $path_prefix; ?>blog/emergency-drain-service.php" style="color: var(--rr-blue);">Why You Should Never Ignore a Blocked Drain</a>
                        </h2>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin-bottom: 24px;">
                            Need a reliable emergency drain service? Learn the warning signs, benefits of professional drain cleaning, and how Go Brooklyn Plumber can help.
                        </p>
                    </div>
                </div>
                
                <div style="padding: 0 24px 24px 24px;">
                    <a href="<?php echo $path_prefix; ?>blog/emergency-drain-service.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-flex; align-items: center; gap: 4px;">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
