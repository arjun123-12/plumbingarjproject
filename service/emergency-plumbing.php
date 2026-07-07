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
<section class="service-hero-section" style="padding: 100px 0 80px; background: linear-gradient(135deg, #ffffff 40%, var(--rr-light-blue) 100%);">
    <div class="container">
        
        <!-- Breadcrumbs -->
        <div class="breadcrumbs" style="font-size: 0.85rem; margin-bottom: 24px; color: var(--text-muted);">
            <a href="<?php echo $path_prefix; ?>index.php" style="color: var(--rr-red); font-weight: 700;">Home</a>
            <span style="margin: 0 8px; opacity: 0.5;">/</span>
            <a href="<?php echo $path_prefix; ?>service.php" style="color: var(--rr-red); font-weight: 700;">Services</a>
            <span style="margin: 0 8px; opacity: 0.5;">/</span>
            <span class="active" style="color: var(--text-dark); font-weight: 500;">Emergency Plumbing</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid" style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 40px; align-items: center;">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge" style="display: inline-flex; align-items: center; gap: 8px; background-color: rgba(6, 18, 44, 0.05); border: 1px solid rgba(6, 18, 44, 0.15); padding: 6px 14px; border-radius: 4px; color: var(--rr-blue); font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 20px;">
                    <i class="fa-solid fa-circle-check" style="color: var(--rr-red);"></i>
                    <span>24/7 Rapid Response</span>
                </div>
                
                <h1 class="service-title" style="font-size: 3.2rem; font-weight: 900; line-height: 1.1; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px; letter-spacing: -0.5px;">24/7 Emergency Plumbing<br>Service in Brooklyn</h1>
                
                <p class="service-desc" style="font-size: 1.15rem; line-height: 1.8; color: var(--text-dark); font-weight: 500; margin-bottom: 16px;">Plumbing problems never wait for a “good time.” They show up in the middle of the night, just before work, or right when guests are over. That’s exactly why our emergency plumbing service is available around the clock for Brooklyn homes and small businesses. When something goes wrong, you don’t have to sit there wondering what to do next—you call, we show up, and we get to work.</p>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">Whether it’s a burst pipe, an overflowing toilet, a sudden leak from the ceiling, or drains backing up out of nowhere, our job is simple: get there fast, stop the damage, and put a proper fix in place. You’re not getting a call centre and endless waiting—you’re getting a real emergency plumber who knows Brooklyn-style plumbing and the kind of buildings we have here.</p>
                
                <div class="service-ctas-row" style="display: flex; align-items: center; gap: 20px;">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule" style="padding: 16px 32px; font-size: 1.05rem; box-shadow: 0 4px 12px rgba(218, 41, 28, 0.2);"><i class="fa-regular fa-calendar-days"></i> Request Emergency Plumber</a>
                    
                    <div class="coupon-tag-link" style="display: flex; align-items: center; gap: 8px; font-size: 0.95rem; font-weight: 700; color: var(--rr-blue);">
                        <i class="fa-solid fa-phone" style="color: var(--rr-red);"></i>
                        <span>Immediate Call: 212-687-1726</span>
                    </div>
                </div>
            </div>

            <!-- Right Media Column -->
            <div class="hero-media-col" style="display: flex; justify-content: center;">
                <div class="service-hero-media" style="width: 100%; max-width: 420px; box-shadow: 0 10px 30px rgba(6, 18, 44, 0.05); background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 12px; padding: 40px; text-align: center;">
                    <div style="width: 70px; height: 70px; background-color: var(--rr-light-red-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; border: 1px dashed rgba(218, 41, 28, 0.3);">
                        <i class="fa-solid fa-triangle-exclamation" style="font-size: 2.2rem; color: var(--rr-red);"></i>
                    </div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 12px;">Active Emergency?</h3>
                    <p style="color: var(--text-muted); font-size: 0.98rem; line-height: 1.6; margin-bottom: 24px;">Got a burst pipe, major leak, or backup? A local plumber is ready to head your way immediately.</p>
                    <a href="tel:212-687-1726" class="btn btn-call" style="width: 100%; padding: 14px; font-size: 1rem;"><i class="fa-solid fa-phone"></i> Call 212-687-1726</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call & Process Sections -->
<section class="section-padding" style="background-color: #ffffff; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); padding: 80px 0;">
    <div class="container">
        <div class="grid-2" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 50px;">
            <!-- Column 1: When You Need Us -->
            <div class="reveal-fade-left">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">When You Need an Emergency Plumber</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">You don’t have to know exactly what’s wrong to call us. If it looks bad, smells bad, or sounds bad, that’s enough. Our emergency plumbing service is for those moments where you look at the situation and think, “Yeah, this can’t wait until tomorrow.”</p>
                
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 15px;">Common emergencies we handle include:</h3>
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 12px;">
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-exclamation" style="color: var(--rr-red); margin-top: 4px;"></i><span>Burst or badly leaking pipes</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-exclamation" style="color: var(--rr-red); margin-top: 4px;"></i><span>Toilets overflowing or not flushing and backing up</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-exclamation" style="color: var(--rr-red); margin-top: 4px;"></i><span>Sudden loss of water or no hot water at all</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-exclamation" style="color: var(--rr-red); margin-top: 4px;"></i><span>Water coming through ceilings or walls</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-exclamation" style="color: var(--rr-red); margin-top: 4px;"></i><span>Drains backing up in more than one fixture</span></li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted);">As a 24-hour plumber, we’re used to late-night calls and early-morning emergencies. You don’t have to apologize for the time or the mess—we’ve seen it all, and we’re there to help, not judge.</p>
            </div>
            
            <!-- Column 2: How It Works -->
            <div class="reveal-fade-right">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">How Our 24/7 Emergency Plumbing Works</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">When you reach out for 24 7 emergency plumbing, we keep things simple and calm. You’re already stressed; you don’t need complicated questions or slow responses. Here’s what usually happens:</p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 14px;">
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-blue); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">1</span>
                        <span>You call and tell us what you’re seeing—water, smell, noise, backup, whatever it is.</span>
                    </li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-blue); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">2</span>
                        <span>We give you a straightforward idea of how urgent it is and when we can be there.</span>
                    </li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-blue); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">3</span>
                        <span>We walk you through any quick steps you can safely take while you wait, like shutting off a valve if needed.</span>
                    </li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-blue); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">4</span>
                        <span>We arrive ready to fix, not just “take a look and come back another day.”</span>
                    </li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted);">Once on site, your emergency plumber will find the source of the issue, stop the immediate problem, and then talk you through what needs to happen next. The focus is always: stop the damage first, then fix it properly.</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Drain Cleaning Section -->
<section class="section-padding" style="background-color: var(--bg-cream-dark); border-bottom: 1px solid var(--border-cream); padding: 80px 0;">
    <div class="container">
        <div class="grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
            <div class="reveal-fade-left">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">Emergency Drain Cleaning When Things Back Up</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">Not every emergency is a burst pipe—sometimes it’s your drains suddenly deciding they’re done working. That’s where our emergency drain cleaning comes in. If your toilet is backing up, your shower drain is pushing water back up, or your kitchen sink is full and going nowhere, you don’t want to wait “until business hours.”</p>
                
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 15px;">In an emergency drain situation, we:</h3>
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 12px;">
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 4px;"></i><span>Clear the blockage fast so water stops backing up</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 4px;"></i><span>Check if it’s a single drain issue or something deeper in the line</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 4px;"></i><span>Make sure everything is flowing properly before we leave</span></li>
                </ul>
            </div>
            
            <div class="reveal-fade-right" style="background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px; padding: 40px; box-shadow: 0 4px 12px rgba(6,18,44,0.02);">
                <p style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark); font-weight: 500; margin-bottom: 0;">We handle both quick emergency drain cleaning jobs and bigger blockages that affect multiple fixtures. Either way, the goal is the same: get your drains moving again so your home feels usable and safe.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Rely on Go Brooklyn Plumber & CTA Section -->
<section class="section-padding" style="background-color: #ffffff; padding: 80px 0;">
    <div class="container">
        <div class="section-header reveal-fade-up" style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase;">Why Brooklyn Locals Rely on Our Emergency Plumbing Service</h2>
            <p style="color: var(--text-muted); font-size: 1.05rem; margin-top: 8px;">When you’re looking for a 24-hour plumber, you’re not shopping around for hours—you just want someone who’ll actually show up, do the work properly, and not take advantage of the situation. That’s how we run our emergency plumbing service.</p>
        </div>
        
        <div class="why-choose-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-bottom: 50px;">
            <div class="why-choose-card" style="background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px; padding: 30px; box-shadow: 0 4px 12px rgba(6, 18, 44, 0.02);">
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 12px;"><i class="fa-solid fa-clock" style="color: var(--rr-red); margin-right: 8px;"></i> Around the Clock</h3>
                <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted);">We’re available for 24 7 emergency plumbing, not just “most of the time”</p>
            </div>
            
            <div class="why-choose-card" style="background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px; padding: 30px; box-shadow: 0 4px 12px rgba(6, 18, 44, 0.02);">
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 12px;"><i class="fa-solid fa-comments" style="color: var(--rr-red); margin-right: 8px;"></i> Plain Language</h3>
                <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted);">We explain what’s going on in normal language, not confusing jargon</p>
            </div>
            
            <div class="why-choose-card" style="background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px; padding: 30px; box-shadow: 0 4px 12px rgba(6, 18, 44, 0.02);">
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 12px;"><i class="fa-solid fa-shield-halved" style="color: var(--rr-red); margin-right: 8px;"></i> Long-Term Fixes</h3>
                <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted);">We focus on real fixes, not quick band-aid repairs that fail later</p>
            </div>
            
            <div class="why-choose-card" style="background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px; padding: 30px; box-shadow: 0 4px 12px rgba(6, 18, 44, 0.02);">
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 12px;"><i class="fa-solid fa-sparkles" style="color: var(--rr-red); margin-right: 8px;"></i> Respectful & Clean</h3>
                <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted);">We respect your home and clean up before we go</p>
            </div>
            
            <div class="why-choose-card" style="background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px; padding: 30px; box-shadow: 0 4px 12px rgba(6, 18, 44, 0.02); grid-column: span 2;">
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 12px;"><i class="fa-solid fa-city" style="color: var(--rr-red); margin-right: 8px;"></i> Brooklyn Experts</h3>
                <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted);">We understand Brooklyn buildings and the kinds of plumbing issues they throw up. You get clear communication from the first call to the last wipe-down of the work area. No disappearing act, no surprise add-ons at the end.</p>
            </div>
        </div>

        <div style="background-color: var(--rr-light-red-bg); border: 2px dashed rgba(218, 41, 28, 0.25); border-radius: 12px; padding: 40px; text-align: center; max-width: 850px; margin: 0 auto;" class="reveal-scale-in">
            <h3 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 16px;">Need Emergency Help Right Now?</h3>
            <p style="font-size: 1.1rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 30px;">If you’re standing in water, listening to constant dripping, or staring at a toilet that’s about to overflow, don’t wait and hope it fixes itself. Get in touch with our emergency plumbing service and let a local emergency plumber take over.</p>
            <a href="tel:212-687-1726" class="btn btn-schedule" style="padding: 16px 36px; font-size: 1.05rem; box-shadow: 0 4px 12px rgba(218, 41, 28, 0.2);"><i class="fa-solid fa-phone"></i> Call 212-687-1726 For Fast Dispatch</a>
        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
