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
<section class="service-hero-section" style="padding: 100px 0 80px; background: linear-gradient(135deg, #ffffff 40%, var(--rr-light-blue) 100%);">
    <div class="container">
        
        <!-- Breadcrumbs -->
        <div class="breadcrumbs" style="font-size: 0.85rem; margin-bottom: 24px; color: var(--text-muted);">
            <a href="<?php echo $path_prefix; ?>index.php" style="color: var(--rr-red); font-weight: 700;">Home</a>
            <span style="margin: 0 8px; opacity: 0.5;">/</span>
            <a href="<?php echo $path_prefix; ?>service.php" style="color: var(--rr-red); font-weight: 700;">Services</a>
            <span style="margin: 0 8px; opacity: 0.5;">/</span>
            <span class="active" style="color: var(--text-dark); font-weight: 500;">Water Damage</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid" style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 40px; align-items: center;">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge" style="display: inline-flex; align-items: center; gap: 8px; background-color: rgba(6, 18, 44, 0.05); border: 1px solid rgba(6, 18, 44, 0.15); padding: 6px 14px; border-radius: 4px; color: var(--rr-blue); font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 20px;">
                    <i class="fa-solid fa-circle-check" style="color: var(--rr-red);"></i>
                    <span>Rapid Drying & Restoration</span>
                </div>
                
                <h1 class="service-title" style="font-size: 3.2rem; font-weight: 900; line-height: 1.1; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px; letter-spacing: -0.5px;">Fast, Local Water Damage<br>Help for Brooklyn Homes</h1>
                
                <p class="service-desc" style="font-size: 1.15rem; line-height: 1.8; color: var(--text-dark); font-weight: 500; margin-bottom: 16px;">When water starts creeping across your floors or dripping through the ceiling, you don’t have time to sit around and think about it. A burst pipe, an overflowing washer, a leaky roof, or a flooded basement can go from “ugh, this is annoying” to “okay, this is bad” really fast if it’s not handled properly. Our water damage Brooklyn team is all about getting there quickly, cutting the stress, and getting your place dried out and fixed up so you can get back to living, not mopping.</p>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">We don’t just show up, suck up some water, and disappear. We figure out where the water came from, how far it’s spread, and what needs to happen so you’re not dealing with warped floors, soft walls, or mould a month later. From the emergency call to the final repair, we handle the whole thing, so you’re not chasing three different companies to finish one job.</p>
                
                <div class="service-ctas-row" style="display: flex; align-items: center; gap: 20px;">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule" style="padding: 16px 32px; font-size: 1.05rem; box-shadow: 0 4px 12px rgba(218, 41, 28, 0.2);"><i class="fa-regular fa-calendar-days"></i> Request Water Extraction</a>
                    
                    <div class="coupon-tag-link" style="display: flex; align-items: center; gap: 8px; font-size: 0.95rem; font-weight: 700; color: var(--rr-blue);">
                        <i class="fa-solid fa-clock" style="color: var(--rr-red);"></i>
                        <span>Immediate 24/7 Dispatch Across Brooklyn</span>
                    </div>
                </div>
            </div>

            <!-- Right Media Column -->
            <div class="hero-media-col" style="display: flex; justify-content: center;">
                <div class="service-hero-media" style="width: 100%; max-width: 420px; box-shadow: 0 10px 30px rgba(6, 18, 44, 0.05); background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 12px; padding: 40px; text-align: center;">
                    <i class="fa-solid fa-house-fire" style="font-size: 3.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                    <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 12px;">Puddles & Flooding?</h3>
                    <p style="color: var(--text-muted); font-size: 0.98rem; line-height: 1.6; margin-bottom: 24px;">Don't let wood rot or structural mold take hold. Start the drying process now.</p>
                    <a href="tel:212-687-1726" class="btn btn-call" style="width: 100%; padding: 14px; font-size: 1rem;"><i class="fa-solid fa-phone"></i> Call 212-687-1726</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call & Drying Process Sections -->
<section class="section-padding" style="background-color: #ffffff; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); padding: 80px 0;">
    <div class="container">
        <div class="grid-2" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 50px;">
            <!-- Column 1: What Happens When You Call Us -->
            <div class="reveal-fade-left">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">What Happens When You Call Us</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">Once you get in touch, we don’t just say “we’ll be there soon” and leave you hanging. We talk you through a few simple steps you can take right away to stay safe and keep the damage from getting worse while we’re on our way over. When we arrive, we:</p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 14px;">
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-red); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">1</span>
                        <span>Find and shut down the source of the water</span>
                    </li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-red); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">2</span>
                        <span>Check how far the water has travelled, including behind walls and under floors</span>
                    </li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-red); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">3</span>
                        <span>Start pulling out standing water with proper equipment</span>
                    </li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-red); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">4</span>
                        <span>Set up dryers and dehumidifiers to get moisture out of the air, walls, and flooring</span>
                    </li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 12px;">This is where experience really kicks in. We know the spots that like to hide water, the corners that always get missed, and what needs urgent attention versus what can wait a bit.</p>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); font-style: italic;">You might hear us mention things like water removal services, but we keep the language simple. No tech talk just to sound smart—just straight answers so you know what’s going on and what we’re doing about it.</p>
            </div>
            
            <!-- Column 2: Drying, Cleaning, and Fixing -->
            <div class="reveal-fade-right">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">Drying, Cleaning, and Fixing What’s Damaged</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">Getting rid of the puddles is just step one. Once the visible water is gone, that’s when the real work starts. We don’t just crack a window and hope for the best. We properly dry out walls, floors, and other affected areas so you don’t get the usual Brooklyn water damage side effects—musty smells, soft spots, or surprise mold patches popping up later. Depending on how bad things are, we can:</p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 12px;">
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Take out and replace soaked drywall, trim, or insulation</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Check and repair flooring and subfloors that have taken on water</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Clean and disinfect affected surfaces so they’re safe again</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Get the area ready for painting or any finishing touches you want done</span></li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted);">Our approach to repairs is very simple: if it can be saved, we’ll save it. If it really does need to be replaced, we’ll tell you why, what your options are, and we’ll keep it as hassle‑free as possible. No drama, no scare tactics.</p>
            </div>
        </div>
    </div>
</section>

<!-- Shaded Easy to Deal With Section -->
<section class="section-padding" style="background-color: var(--bg-cream-dark); border-bottom: 1px solid var(--border-cream); padding: 80px 0;">
    <div class="container">
        <div class="section-header reveal-fade-up" style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase;">Easy to Deal With, Start to Finish</h2>
            <p style="color: var(--text-muted); font-size: 1.05rem; margin-top: 8px;">Water damage is already stressful—you don’t need confusing updates, people showing up late, or surprise costs on top of everything else. So we keep things straight and simple:</p>
        </div>
        
        <div class="grid-2" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 40px; text-align: left;">
            <div style="background-color: #ffffff; padding: 24px; border-radius: 8px; border: 1px solid var(--border-cream); box-shadow: 0 4px 12px rgba(6,18,44,0.02);">
                <h4 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 8px;"><i class="fa-solid fa-comments" style="color: var(--rr-red); margin-right: 8px;"></i> Simple Wording</h4>
                <p style="font-size: 0.95rem; line-height: 1.5; color: var(--text-muted);">We explain what’s damaged and how we’re going to fix it in normal language</p>
            </div>
            
            <div style="background-color: #ffffff; padding: 24px; border-radius: 8px; border: 1px solid var(--border-cream); box-shadow: 0 4px 12px rgba(6,18,44,0.02);">
                <h4 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 8px;"><i class="fa-solid fa-calendar-days" style="color: var(--rr-red); margin-right: 8px;"></i> Realistic Timelines</h4>
                <p style="font-size: 0.95rem; line-height: 1.5; color: var(--text-muted);">We give you realistic timelines, not empty “we’ll be done tomorrow” promises</p>
            </div>
            
            <div style="background-color: #ffffff; padding: 24px; border-radius: 8px; border: 1px solid var(--border-cream); box-shadow: 0 4px 12px rgba(6,18,44,0.02);">
                <h4 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 8px;"><i class="fa-solid fa-sparkles" style="color: var(--rr-red); margin-right: 8px;"></i> Working Clean</h4>
                <p style="font-size: 0.95rem; line-height: 1.5; color: var(--text-muted);">We respect your home, work clean, and don’t leave a mess behind</p>
            </div>
            
            <div style="background-color: #ffffff; padding: 24px; border-radius: 8px; border: 1px solid var(--border-cream); box-shadow: 0 4px 12px rgba(6,18,44,0.02);">
                <h4 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 8px;"><i class="fa-solid fa-circle-info" style="color: var(--rr-red); margin-right: 8px;"></i> Customer Updates</h4>
                <p style="font-size: 0.95rem; line-height: 1.5; color: var(--text-muted);">We keep you in the loop, so you’re never wondering what’s happening next</p>
            </div>
        </div>
        
        <div class="reveal-fade-up" style="text-align: center; max-width: 800px; margin: 0 auto; background-color: #ffffff; border: 1px solid var(--border-cream); padding: 24px; border-radius: 6px;">
            <p style="color: var(--text-dark); font-size: 1.1rem; line-height: 1.6; font-weight: 500; margin-bottom: 0;">We’ve helped plenty of locals through flooded basements, sudden leaks, and appliance disasters, so we know how much it can throw off your whole week. Whether it’s urgent water removal or full water damage restoration, our job is to make the entire process as smooth and low‑stress as possible from the first call to the last wipe‑down.</p>
        </div>
    </div>
</section>

<!-- Action CTA Section -->
<section class="section-padding" style="text-align: center; background-color: #ffffff; padding: 90px 0;">
    <div class="container reveal-scale-in" style="max-width: 850px;">
        <div style="background-color: var(--rr-light-red-bg); border: 2px dashed rgba(218, 41, 28, 0.25); border-radius: 12px; padding: 45px; text-align: center; margin-bottom: 0;">
            <h3 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 16px;">Ready to stop the water and get your home back to normal?</h3>
            <p style="font-size: 1.1rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 30px;">Hit that “Quote” button or give Go Brooklyn Plumber a call and talk to a local water damage repair specialist who’ll walk you through what to do next—step by step, no pressure, no confusion.</p>
            <div style="display: flex; gap: 16px; justify-content: center; align-items: center; flex-wrap: wrap;">
                <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule" style="padding: 16px 36px; font-size: 1.05rem; box-shadow: 0 4px 12px rgba(218, 41, 28, 0.2);"><i class="fa-regular fa-calendar-check"></i> Request Free Quote</a>
                <a href="tel:212-687-1726" class="btn btn-call" style="padding: 16px 36px; font-size: 1.05rem;"><i class="fa-solid fa-phone"></i> Call 212-687-1726</a>
            </div>
        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
