<?php 
$path_prefix = '../';
$page_title = "24/7 Emergency Plumbing Service in Brooklyn | Go Brooklyn Plumber";
$page_desc = "Fast 24/7 emergency plumbers in Brooklyn. We fix burst pipes, overflowing toilets, ceiling leaks, and emergency backups. Real local experts ready to respond.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => "24/7 Emergency Plumbing Service in Brooklyn",
  "serviceType" => "Emergency Plumbing",
  "provider" => [
    "@type" => "PlumbingService",
    "name" => "Go Brooklyn Plumber",
    "telephone" => "212-687-1726",
    "url" => $base_url
  ],
  "areaServed" => [
    ["@type" => "AdministrativeArea", "name" => "Brooklyn"]
  ],
  "description" => "Fast 24/7 emergency plumbers in Brooklyn. We fix burst pipes, overflowing toilets, ceiling leaks, and emergency backups. Real local experts ready to respond."
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
            <span class="active">Emergency Plumbing</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>24/7 Rapid Response</span>
                </div>
                
                <h1 class="service-title">24/7 Emergency Plumbing<br>Service in Brooklyn</h1>
                
                <p class="service-desc">Plumbing problems never wait for a “good time.” They show up in the middle of the night, just before work, or right when guests are over. That’s exactly why our emergency plumbing service is available around the clock for Brooklyn homes and small businesses. When something goes wrong, you don’t have to sit there wondering what to do next—you call, we show up, and we get to work.</p>
                
                <p class="service-subdesc">Whether it’s a burst pipe, an overflowing toilet, a sudden leak from the ceiling, or drains backing up out of nowhere, our job is simple: get there fast, stop the damage, and put a proper fix in place. You’re not getting a call centre and endless waiting—you’re getting a real emergency plumber who knows Brooklyn-style plumbing and the kind of buildings we have here.</p>
                
                <div class="service-ctas-row">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule"><i class="fa-regular fa-calendar-days"></i> Request Emergency Plumber</a>
                    
                    <div class="coupon-tag-link">
                        <i class="fa-solid fa-phone"></i>
                        <span>Immediate Call: 212-687-1726</span>
                    </div>
                </div>
            </div>

            <!-- Right Media Column -->
            <div class="hero-media-col">
                <div class="service-hero-image-wrap">
                    <img src="<?php echo $path_prefix; ?>assets/images/emergency_plumbing_hero.png" alt="Emergency Plumbing Service in Brooklyn" class="service-hero-image">
                    <div class="service-image-badge">
                        <i class="fa-solid fa-phone"></i>
                        <span>Call 24/7: 212-687-1726</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call & Process Sections -->
<section class="section-padding">
    <div class="container">
        <div class="grid-2">
            <!-- Column 1: When You Need Us -->
            <div class="reveal-fade-left">
                <h2 class="service-details-title">When You Need an Emergency Plumber</h2>
                <p class="service-details-p">You don’t have to know exactly what’s wrong to call us. If it looks bad, smells bad, or sounds bad, that’s enough. Our emergency plumbing service is for those moments where you look at the situation and think, “Yeah, this can’t wait until tomorrow.”</p>
                
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 15px;">Common emergencies we handle include:</h3>
                <ul class="service-check-list red-check">
                    <li><i class="fa-solid fa-circle-exclamation"></i><span>Burst or badly leaking pipes</span></li>
                    <li><i class="fa-solid fa-circle-exclamation"></i><span>Toilets overflowing or not flushing and backing up</span></li>
                    <li><i class="fa-solid fa-circle-exclamation"></i><span>Sudden loss of water or no hot water at all</span></li>
                    <li><i class="fa-solid fa-circle-exclamation"></i><span>Water coming through ceilings or walls</span></li>
                    <li><i class="fa-solid fa-circle-exclamation"></i><span>Drains backing up in more than one fixture</span></li>
                </ul>
                
                <p class="service-details-p">As a 24-hour plumber, we’re used to late-night calls and early-morning emergencies. You don’t have to apologize for the time or the mess—we’ve seen it all, and we’re there to help, not judge.</p>
            </div>
            
            <!-- Column 2: How It Works -->
            <div class="reveal-fade-right">
                <h2 class="service-details-title">How Our 24/7 Emergency Plumbing Works</h2>
                <p class="service-details-p">When you reach out for 24 7 emergency plumbing, we keep things simple and calm. You’re already stressed; you don’t need complicated questions or slow responses. Here’s what usually happens:</p>
                
                <ul class="service-number-list blue-num">
                    <li>
                        <span class="list-num">1</span>
                        <span>You call and tell us what you’re seeing—water, smell, noise, backup, whatever it is.</span>
                    </li>
                    <li>
                        <span class="list-num">2</span>
                        <span>We give you a straightforward idea of how urgent it is and when we can be there.</span>
                    </li>
                    <li>
                        <span class="list-num">3</span>
                        <span>We walk you through any quick steps you can safely take while you wait, like shutting off a valve if needed.</span>
                    </li>
                    <li>
                        <span class="list-num">4</span>
                        <span>We arrive ready to fix, not just “take a look and come back another day.”</span>
                    </li>
                </ul>
                
                <p class="service-details-p">Once on site, your emergency plumber will find the source of the issue, stop the immediate problem, and then talk you through what needs to happen next. The focus is always: stop the damage first, then fix it properly.</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Drain Cleaning Section -->
<section class="section-padding" style="background-color: var(--bg-cream-dark); border-bottom: 1px solid var(--border-cream);">
    <div class="container">
        <div class="grid-2">
            <div class="reveal-fade-left">
                <h2 class="service-details-title">Emergency Drain Cleaning When Things Back Up</h2>
                <p class="service-details-p">Not every emergency is a burst pipe—sometimes it’s your drains suddenly deciding they’re done working. That’s where our emergency drain cleaning comes in. If your toilet is backing up, your shower drain is pushing water back up, or your kitchen sink is full and going nowhere, you don’t want to wait “until business hours.”</p>
                
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 15px;">In an emergency drain situation, we:</h3>
                <ul class="service-check-list red-check">
                    <li><i class="fa-solid fa-check"></i><span>Clear the blockage fast so water stops backing up</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Check if it’s a single drain issue or something deeper in the line</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Make sure everything is flowing properly before we leave</span></li>
                </ul>
            </div>
            
            <div class="reveal-fade-right">
                <div class="service-highlight-box">
                    <p style="color: var(--text-dark); text-align: left;">We handle both quick emergency drain cleaning jobs and bigger blockages that affect multiple fixtures. Either way, the goal is the same: get your drains moving again so your home feels usable and safe.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Rely on Go Brooklyn Plumber & CTA Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-header-center reveal-fade-up">
            <h2>Why Brooklyn Locals Rely on Our Emergency Plumbing Service</h2>
            <p>When you’re looking for a 24-hour plumber, you’re not shopping around for hours—you just want someone who’ll actually show up, do the work properly, and not take advantage of the situation. That’s how we run our emergency plumbing service.</p>
        </div>
        
        <div class="why-choose-grid" style="margin-bottom: 50px;">
            <div class="why-choose-card">
                <h4><i class="fa-solid fa-clock" style="color: var(--rr-red); margin-right: 8px;"></i> Around the Clock</h4>
                <p>We’re available for 24 7 emergency plumbing, not just “most of the time”</p>
            </div>
            
            <div class="why-choose-card">
                <h4><i class="fa-solid fa-comments" style="color: var(--rr-red); margin-right: 8px;"></i> Plain Language</h4>
                <p>We explain what’s going on in normal language, not confusing jargon</p>
            </div>
            
            <div class="why-choose-card">
                <h4><i class="fa-solid fa-shield-halved" style="color: var(--rr-red); margin-right: 8px;"></i> Long-Term Fixes</h4>
                <p>We focus on real fixes, not quick band-aid repairs that fail later</p>
            </div>
            
            <div class="why-choose-card">
                <h4><i class="fa-solid fa-sparkles" style="color: var(--rr-red); margin-right: 8px;"></i> Respectful & Clean</h4>
                <p>We respect your home and clean up before we go</p>
            </div>
            
            <div class="why-choose-card" style="grid-column: span 2;">
                <h4><i class="fa-solid fa-city" style="color: var(--rr-red); margin-right: 8px;"></i> Brooklyn Experts</h4>
                <p>We understand Brooklyn buildings and the kinds of plumbing issues they throw up. You get clear communication from the first call to the last wipe-down of the work area. No disappearing act, no surprise add-ons at the end.</p>
            </div>
        </div>

        <div class="service-cta-dashed-box reveal-scale-in">
            <h3>Need Emergency Help Right Now?</h3>
            <p>If you’re standing in water, listening to constant dripping, or staring at a toilet that’s about to overflow, don’t wait and hope it fixes itself. Get in touch with our emergency plumbing service and let a local emergency plumber take over.</p>
            <a href="tel:212-687-1726" class="btn btn-schedule"><i class="fa-solid fa-phone"></i> Call 212-687-1726 For Fast Dispatch</a>
        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
