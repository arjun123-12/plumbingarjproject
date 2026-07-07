<?php 
$path_prefix = '../';
$page_title = "Reliable Drain Cleaning & Unblocking in Brooklyn | Go Brooklyn Plumber";
$page_desc = "Quick and dependable drain cleaning and emergency unblocking services in Brooklyn. Sinks, bathrooms, toilets, and main sewer lines cleared properly without the hassle.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => "Reliable Drain Cleaning and Unblocking in Brooklyn",
  "serviceType" => "Drain Cleaning",
  "provider" => [
    "@type" => "PlumbingService",
    "name" => "Go Brooklyn Plumber",
    "telephone" => "212-687-1726",
    "url" => $base_url
  ],
  "areaServed" => [
    ["@type" => "AdministrativeArea", "name" => "Brooklyn"]
  ],
  "description" => "Quick and dependable drain cleaning and emergency unblocking services in Brooklyn. Sinks, bathrooms, toilets, and main sewer lines cleared properly without the hassle."
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
            <span class="active" style="color: var(--text-dark); font-weight: 500;">Drain Cleaning</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid" style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 40px; align-items: center;">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge" style="display: inline-flex; align-items: center; gap: 8px; background-color: rgba(6, 18, 44, 0.05); border: 1px solid rgba(6, 18, 44, 0.15); padding: 6px 14px; border-radius: 4px; color: var(--rr-blue); font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 20px;">
                    <i class="fa-solid fa-circle-check" style="color: var(--rr-red);"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title" style="font-size: 3.2rem; font-weight: 900; line-height: 1.1; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px; letter-spacing: -0.5px;">Reliable Drain Cleaning<br>& Unblocking in Brooklyn</h1>
                
                <p class="service-desc" style="font-size: 1.15rem; line-height: 1.8; color: var(--text-dark); font-weight: 500; margin-bottom: 16px;">When a sink won’t drain, or the toilet keeps backing up, it pretty much ruins your day. You’re standing there watching the water rise and thinking, “This is not good.” That’s exactly when you need someone who can just show up, figure it out, and get things flowing again without the drama.</p>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">We handle day‑to‑day blockages and those “oh no, it’s overflowing” moments. Our job is simple: clear the pipe properly, clean up our mess, and leave you with drains that actually work—not just for today, but for the long run. We’re used to all kinds of setups—small apartments, busy family homes, older buildings with cranky pipes. Whatever you’ve got, we’ve probably seen worse.</p>
                
                <div class="service-ctas-row" style="display: flex; align-items: center; gap: 20px;">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule" style="padding: 16px 32px; font-size: 1.05rem; box-shadow: 0 4px 12px rgba(218, 41, 28, 0.2);"><i class="fa-regular fa-calendar-days"></i> Schedule Online</a>
                    
                    <div class="coupon-tag-link" style="display: flex; align-items: center; gap: 8px; font-size: 0.95rem; font-weight: 700; color: var(--rr-blue);">
                        <i class="fa-solid fa-clock" style="color: var(--rr-red);"></i>
                        <span>Fast 24/7 Dispatch Across Brooklyn</span>
                    </div>
                </div>
            </div>

            <!-- Right Media Column -->
            <div class="hero-media-col" style="display: flex; justify-content: center;">
                <div class="service-hero-media" style="width: 100%; max-width: 420px; box-shadow: 0 10px 30px rgba(6, 18, 44, 0.05); background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 12px; padding: 40px; text-align: center;">
                    <i class="fa-solid fa-droplet" style="font-size: 3.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                    <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 12px;">Need Help Right Now?</h3>
                    <p style="color: var(--text-muted); font-size: 0.98rem; line-height: 1.6; margin-bottom: 24px;">Don't wait for your drains to overflow. Call us for reliable 24/7 service anywhere in Brooklyn.</p>
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
            <!-- Column 1: When You Call -->
            <div class="reveal-fade-left">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">When You Call About a Drain Problem</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">When you reach out for drain cleaning service, we know you’re not calling to chat—you just want it sorted. Here’s how we usually handle it:</p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 14px;">
                    <li style="font-size: 1.02rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-red); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">1</span>
                        <span>We ask what’s happening: slow drain, bad smell, gurgling, or full backup</span>
                    </li>
                    <li style="font-size: 1.02rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-red); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">2</span>
                        <span>We give you a clear idea of when we can be there</span>
                    </li>
                    <li style="font-size: 1.02rem; color: var(--text-muted); display: flex; gap: 12px; align-items: flex-start;">
                        <span style="background-color: var(--rr-red); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; margin-top: 2px;">3</span>
                        <span>We show up with what we need to clear it, not just “take a look”</span>
                    </li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted);">If it’s turning into a mess—like water coming up out of the shower or toilet—we treat it as emergency drain service and move faster. The goal is to stop things from getting worse and get your home back to normal as quickly as we can.</p>
            </div>
            
            <!-- Column 2: How We Clear -->
            <div class="reveal-fade-right">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">How We Clear Your Drains</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">Good drain work isn’t just poking a wire down the pipe and hoping for the best. We clear the blockage, then check how well things are moving so you don’t end up calling again next week for the same problem. During plumbing drain cleaning, we might:</p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 12px;">
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Break up tough clogs made of grease, hair, or food</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Flush the line so we can see if it’s draining smoothly</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Pay attention to sounds and slow spots that hint at a bigger issue</span></li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 12px;">If water is already backing up into your sink, tub, or toilet, that’s when we go into emergency drain unblocking mode. First, we stop the immediate problem so things calm down. Then we talk through what caused it and what you can do to avoid the same headache again.</p>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); font-style: italic; font-weight: 500;">We keep it straight: no scary language, no upsell speech—just “here’s what’s going on, here’s what we did, here’s what to watch for.”</p>
            </div>
        </div>
    </div>
</section>

<!-- Common Issues Section -->
<section class="section-padding" style="background-color: var(--bg-cream-dark); border-bottom: 1px solid var(--border-cream); padding: 80px 0;">
    <div class="container">
        <div class="section-header reveal-fade-up" style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase;">Common Drain Issues We See All the Time</h2>
            <p style="color: var(--text-muted); font-size: 1.05rem; margin-top: 8px;">You’re not the only one dealing with this stuff. We get called out for:</p>
        </div>
        
        <div class="grid-4" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; margin-bottom: 40px;">
            <div class="why-choose-card" style="padding: 24px; background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px;">
                <div style="font-size: 2rem; color: var(--rr-red); margin-bottom: 12px;"><i class="fa-solid fa-kitchen-set"></i></div>
                <h4 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 8px;">Kitchen Sinks</h4>
                <p style="font-size: 0.92rem; line-height: 1.5; color: var(--text-muted);">Clogged with grease, oil, and food scraps.</p>
            </div>
            
            <div class="why-choose-card" style="padding: 24px; background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px;">
                <div style="font-size: 2rem; color: var(--rr-red); margin-bottom: 12px;"><i class="fa-solid fa-bath"></i></div>
                <h4 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 8px;">Bathroom & Showers</h4>
                <p style="font-size: 0.92rem; line-height: 1.5; color: var(--text-muted);">Packed with hair and soap buildup.</p>
            </div>
            
            <div class="why-choose-card" style="padding: 24px; background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px;">
                <div style="font-size: 2rem; color: var(--rr-red); margin-bottom: 12px;"><i class="fa-solid fa-toilet"></i></div>
                <h4 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 8px;">Toilets</h4>
                <p style="font-size: 0.92rem; line-height: 1.5; color: var(--text-muted);">That clog often or don’t flush right.</p>
            </div>
            
            <div class="why-choose-card" style="padding: 24px; background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px;">
                <div style="font-size: 2rem; color: var(--rr-red); margin-bottom: 12px;"><i class="fa-solid fa-circle-down"></i></div>
                <h4 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--rr-blue); margin-bottom: 8px;">Floor Drains</h4>
                <p style="font-size: 0.92rem; line-height: 1.5; color: var(--text-muted);">That bubble up when you run other fixtures.</p>
            </div>
        </div>
        
        <div class="reveal-fade-up" style="text-align: center; max-width: 800px; margin: 0 auto; background-color: #ffffff; border: 1px solid var(--border-cream); padding: 24px; border-radius: 6px; box-shadow: 0 4px 12px rgba(6,18,44,0.02);">
            <p style="color: var(--text-dark); font-size: 1.1rem; line-height: 1.6; font-weight: 500; margin-bottom: 0;">A proper drain cleaning service visit usually makes an immediate difference. Drains run quicker, smells ease up, and that constant “glug glug” noise from the pipes disappears.</p>
        </div>
    </div>
</section>

<!-- Hassle Free & CTA Section -->
<section class="section-padding" style="text-align: center; background-color: #ffffff; padding: 90px 0;">
    <div class="container reveal-scale-in" style="max-width: 850px;">
        <span class="section-subtitle" style="display: block; font-size: 0.85rem; font-weight: 800; text-transform: uppercase; color: var(--rr-red); letter-spacing: 1.5px; margin-bottom: 12px;">Hassle-Free Service</span>
        <h2 style="font-size: 2.6rem; margin-bottom: 20px; color: var(--rr-blue); font-family: var(--font-heading); font-weight: 900; text-transform: uppercase;">Easy to Deal With, Not a Hassle</h2>
        <p style="color: var(--text-muted); font-size: 1.1rem; margin-bottom: 30px;">Nobody is excited to call someone for plumbing drain cleaning. It usually means something’s already gone wrong. So we try to keep everything else as easy as possible:</p>
        
        <div class="grid-2" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 20px; text-align: left; margin-bottom: 40px;">
            <div style="background-color: var(--rr-light-red-bg); padding: 20px; border-radius: 8px; border-left: 4px solid var(--rr-red); display: flex; gap: 12px; align-items: center;">
                <i class="fa-solid fa-check" style="color: var(--rr-red); font-size: 1.2rem;"></i>
                <span style="font-size: 1rem; color: var(--text-dark); font-weight: 500;">We turn up when we say we will</span>
            </div>
            <div style="background-color: var(--rr-light-red-bg); padding: 20px; border-radius: 8px; border-left: 4px solid var(--rr-red); display: flex; gap: 12px; align-items: center;">
                <i class="fa-solid fa-check" style="color: var(--rr-red); font-size: 1.2rem;"></i>
                <span style="font-size: 1rem; color: var(--text-dark); font-weight: 500;">We explain what we’re doing in normal words</span>
            </div>
            <div style="background-color: var(--rr-light-red-bg); padding: 20px; border-radius: 8px; border-left: 4px solid var(--rr-red); display: flex; gap: 12px; align-items: center;">
                <i class="fa-solid fa-check" style="color: var(--rr-red); font-size: 1.2rem;"></i>
                <span style="font-size: 1rem; color: var(--text-dark); font-weight: 500;">We protect your floors and clean up before we leave</span>
            </div>
            <div style="background-color: var(--rr-light-red-bg); padding: 20px; border-radius: 8px; border-left: 4px solid var(--rr-red); display: flex; gap: 12px; align-items: center;">
                <i class="fa-solid fa-check" style="color: var(--rr-red); font-size: 1.2rem;"></i>
                <span style="font-size: 1rem; color: var(--text-dark); font-weight: 500;">We give real advice, not pressure to buy extra work</span>
            </div>
        </div>

        <div style="background-color: var(--rr-blue); color: #ffffff; border-radius: 12px; padding: 40px; margin-bottom: 40px; text-align: left; box-shadow: 0 10px 30px rgba(6, 18, 44, 0.15);">
            <p style="font-size: 1.25rem; line-height: 1.7; font-weight: 600; margin-bottom: 0;">Whether it’s a slow drain that’s been bugging you for weeks or a full‑on backup that needs emergency drain unblocking service, we’re here to get things moving again the right way—no fuss, no nonsense.</p>
        </div>
        
        <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule" style="padding: 18px 40px; font-size: 1.1rem; box-shadow: 0 8px 24px rgba(218, 41, 28, 0.25); border-radius: 6px;"><i class="fa-regular fa-calendar-days"></i> Request Drain Cleaning Online</a>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
