<?php 
$path_prefix = '../';
$page_title = "Fast, Local Water Damage Help in Brooklyn | Go Brooklyn Plumber";
$page_desc = "Quick response water extraction, structural drying, and cleanup services for Brooklyn homes. We dry, sanitize, and repair leaks, burst pipes, and flooded basements.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => "Fast, Local Water Damage Help for Brooklyn Homes",
  "serviceType" => "Water Damage Restoration",
  "provider" => [
    "@type" => "PlumbingService",
    "name" => "Go Brooklyn Plumber",
    "telephone" => "212-687-1726",
    "url" => $base_url
  ],
  "areaServed" => [
    ["@type" => "AdministrativeArea", "name" => "Brooklyn"]
  ],
  "description" => "Quick response water extraction, structural drying, and cleanup services for Brooklyn homes. We dry, sanitize, and repair leaks, burst pipes, and flooded basements."
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
                    <span>Rapid Drying & Restoration</span>
                </div>
                
                <h1 class="service-title">Fast, Local Water Damage<br>Help for Brooklyn Homes</h1>
                
                <p class="service-desc">When water starts creeping across your floors or dripping through the ceiling, you don’t have time to sit around and think about it. A burst pipe, an overflowing washer, a leaky roof, or a flooded basement can go from “ugh, this is annoying” to “okay, this is bad” really fast if it’s not handled properly. Our water damage Brooklyn team is all about getting there quickly, cutting the stress, and getting your place dried out and fixed up so you can get back to living, not mopping.</p>
                
                <p class="service-subdesc">We don’t just show up, suck up some water, and disappear. We figure out where the water came from, how far it’s spread, and what needs to happen so you’re not dealing with warped floors, soft walls, or mould a month later. From the emergency call to the final repair, we handle the whole thing, so you’re not chasing three different companies to finish one job.</p>
                
                <div class="service-ctas-row">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule"><i class="fa-regular fa-calendar-days"></i> Request Water Extraction</a>
                    
                    <div class="coupon-tag-link">
                        <i class="fa-solid fa-clock"></i>
                        <span>Immediate 24/7 Dispatch Across Brooklyn</span>
                    </div>
                </div>
            </div>

            <!-- Right Media Column -->
            <div class="hero-media-col">
                <div class="service-hero-image-wrap">
                    <img src="<?php echo $path_prefix; ?>assets/images/water_damage_hero.png" alt="Water Damage Service in Brooklyn" class="service-hero-image">
                    <div class="service-image-badge">
                        <i class="fa-solid fa-phone"></i>
                        <span>Call 24/7: 212-687-1726</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call & Drying Process Sections -->
<section class="section-padding">
    <div class="container">
        <div class="grid-2">
            <!-- Column 1: What Happens When You Call Us -->
            <div class="reveal-fade-left">
                <h2 class="service-details-title">What Happens When You Call Us</h2>
                <p class="service-details-p">Once you get in touch, we don’t just say “we’ll be there soon” and leave you hanging. We talk you through a few simple steps you can take right away to stay safe and keep the damage from getting worse while we’re on our way over. When we arrive, we:</p>
                
                <ul class="service-number-list">
                    <li>
                        <span class="list-num">1</span>
                        <span>Find and shut down the source of the water</span>
                    </li>
                    <li>
                        <span class="list-num">2</span>
                        <span>Check how far the water has travelled, including behind walls and under floors</span>
                    </li>
                    <li>
                        <span class="list-num">3</span>
                        <span>Start pulling out standing water with proper equipment</span>
                    </li>
                    <li>
                        <span class="list-num">4</span>
                        <span>Set up dryers and dehumidifiers to get moisture out of the air, walls, and flooring</span>
                    </li>
                </ul>
                
                <p class="service-details-p">This is where experience really kicks in. We know the spots that like to hide water, the corners that always get missed, and what needs urgent attention versus what can wait a bit.</p>
                <p class="service-details-italic">You might hear us mention things like water removal services, but we keep the language simple. No tech talk just to sound smart—just straight answers so you know what’s going on and what we’re doing about it.</p>
            </div>
            
            <!-- Column 2: Drying, Cleaning, and Fixing -->
            <div class="reveal-fade-right">
                <h2 class="service-details-title">Drying, Cleaning, and Fixing What’s Damaged</h2>
                <p class="service-details-p">Getting rid of the puddles is just step one. Once the visible water is gone, that’s when the real work starts. We don’t just crack a window and hope for the best. We properly dry out walls, floors, and other affected areas so you don’t get the usual Brooklyn water damage side effects—musty smells, soft spots, or surprise mold patches popping up later. Depending on how bad things are, we can:</p>
                
                <ul class="service-check-list">
                    <li><i class="fa-solid fa-circle-check"></i><span>Take out and replace soaked drywall, trim, or insulation</span></li>
                    <li><i class="fa-solid fa-circle-check"></i><span>Check and repair flooring and subfloors that have taken on water</span></li>
                    <li><i class="fa-solid fa-circle-check"></i><span>Clean and disinfect affected surfaces so they’re safe again</span></li>
                    <li><i class="fa-solid fa-circle-check"></i><span>Get the area ready for painting or any finishing touches you want done</span></li>
                </ul>
                
                <p class="service-details-p">Our approach to repairs is very simple: if it can be saved, we’ll save it. If it really does need to be replaced, we’ll tell you why, what your options are, and we’ll keep it as hassle‑free as possible. No drama, no scare tactics.</p>
            </div>
        </div>
    </div>
</section>

<!-- Shaded Easy to Deal With Section -->
<section class="section-padding" style="background-color: var(--bg-cream-dark); border-bottom: 1px solid var(--border-cream);">
    <div class="container">
        <div class="section-header-center reveal-fade-up">
            <h2>Easy to Deal With, Start to Finish</h2>
            <p>Water damage is already stressful—you don’t need confusing updates, people showing up late, or surprise costs on top of everything else. So we keep things straight and simple:</p>
        </div>
        
        <div class="grid-2" style="margin-bottom: 40px;">
            <div class="why-choose-card">
                <h4><i class="fa-solid fa-comments" style="color: var(--rr-red); margin-right: 8px;"></i> Simple Wording</h4>
                <p>We explain what’s damaged and how we’re going to fix it in normal language</p>
            </div>
            
            <div class="why-choose-card">
                <h4><i class="fa-solid fa-calendar-days" style="color: var(--rr-red); margin-right: 8px;"></i> Realistic Timelines</h4>
                <p>We give you realistic timelines, not empty “we’ll be done tomorrow” promises</p>
            </div>
            
            <div class="why-choose-card">
                <h4><i class="fa-solid fa-sparkles" style="color: var(--rr-red); margin-right: 8px;"></i> Working Clean</h4>
                <p>We respect your home, work clean, and don’t leave a mess behind</p>
            </div>
            
            <div class="why-choose-card">
                <h4><i class="fa-solid fa-circle-info" style="color: var(--rr-red); margin-right: 8px;"></i> Customer Updates</h4>
                <p>We keep you in the loop, so you’re never wondering what’s happening next</p>
            </div>
        </div>
        
        <div class="service-highlight-box reveal-fade-up">
            <p>We’ve helped plenty of locals through flooded basements, sudden leaks, and appliance disasters, so we know how much it can throw off your whole week. Whether it’s urgent water removal or full water damage restoration, our job is to make the entire process as smooth and low‑stress as possible from the first call to the last wipe‑down.</p>
        </div>
    </div>
</section>

<!-- Action CTA Section -->
<section class="section-padding">
    <div class="container service-cta-container reveal-scale-in">
        <div class="service-cta-dashed-box">
            <h3>Ready to stop the water and get your home back to normal?</h3>
            <p>Hit that “Quote” button or give Go Brooklyn Plumber a call and talk to a local water damage repair specialist who'll walk you through what to do next—step by step, no pressure, no confusion.</p>
            <div class="cta-buttons">
                <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule"><i class="fa-regular fa-calendar-check"></i> Request Free Quote</a>
                <a href="tel:212-687-1726" class="btn btn-call"><i class="fa-solid fa-phone"></i> Call 212-687-1726</a>
            </div>
        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
