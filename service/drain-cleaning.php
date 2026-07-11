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
<section class="service-hero-section">
    <div class="container">
        
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a href="<?php echo $path_prefix; ?>index.php">Home</a>
            <span>/</span>
            <a href="<?php echo $path_prefix; ?>service.php">Services</a>
            <span>/</span>
            <span class="active">Drain Cleaning</span>
        </div>

        <!-- Hero Grid -->
        <div class="service-hero-grid">
            
            <!-- Left Info Column -->
            <div class="hero-info-col">
                <div class="service-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Fast. Clean. Reliable.</span>
                </div>
                
                <h1 class="service-title">Reliable Drain Cleaning<br>& Unblocking in Brooklyn</h1>
                
                <p class="service-desc">When a sink won’t drain, or the toilet keeps backing up, it pretty much ruins your day. You’re standing there watching the water rise and thinking, “This is not good.” That’s exactly when you need someone who can just show up, figure it out, and get things flowing again without the drama.</p>
                
                <p class="service-subdesc">We handle day‑to‑day blockages and those “oh no, it’s overflowing” moments. Our job is simple: clear the pipe properly, clean up our mess, and leave you with drains that actually work—not just for today, but for the long run. We’re used to all kinds of setups—small apartments, busy family homes, older buildings with cranky pipes. Whatever you’ve got, we’ve probably seen worse.</p>
                
                <div class="service-ctas-row">
                    <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule"><i class="fa-regular fa-calendar-days"></i> Schedule Online</a>
                    
                    <div class="coupon-tag-link">
                        <i class="fa-solid fa-clock"></i>
                        <span>Fast 24/7 Dispatch Across Brooklyn</span>
                    </div>
                </div>
            </div>

            <!-- Right Media Column -->
            <div class="hero-media-col">
                <div class="service-hero-image-wrap">
                    <img src="<?php echo $path_prefix; ?>assets/images/drain_cleaning_hero.png" alt="Drain Cleaning Service in Brooklyn" class="service-hero-image">
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
            <!-- Column 1: When You Call -->
            <div class="reveal-fade-left">
                <h2 class="service-details-title">When You Call About a Drain Problem</h2>
                <p class="service-details-p">When you reach out for drain cleaning service, we know you’re not calling to chat—you just want it sorted. Here’s how we usually handle it:</p>
                
                <ul class="service-number-list">
                    <li>
                        <span class="list-num">1</span>
                        <span>We ask what’s happening: slow drain, bad smell, gurgling, or full backup</span>
                    </li>
                    <li>
                        <span class="list-num">2</span>
                        <span>We give you a clear idea of when we can be there</span>
                    </li>
                    <li>
                        <span class="list-num">3</span>
                        <span>We show up with what we need to clear it, not just “take a look”</span>
                    </li>
                </ul>
                
                <p class="service-details-p">If it’s turning into a mess—like water coming up out of the shower or toilet—we treat it as emergency drain service and move faster. The goal is to stop things from getting worse and get your home back to normal as quickly as we can.</p>
            </div>
            
            <!-- Column 2: How We Clear -->
            <div class="reveal-fade-right">
                <h2 class="service-details-title">How We Clear Your Drains</h2>
                <p class="service-details-p">Good drain work isn’t just poking a wire down the pipe and hoping for the best. We clear the blockage, then check how well things are moving so you don’t end up calling again next week for the same problem. During plumbing drain cleaning, we might:</p>
                
                <ul class="service-check-list">
                    <li><i class="fa-solid fa-circle-check"></i><span>Break up tough clogs made of grease, hair, or food</span></li>
                    <li><i class="fa-solid fa-circle-check"></i><span>Flush the line so we can see if it’s draining smoothly</span></li>
                    <li><i class="fa-solid fa-circle-check"></i><span>Pay attention to sounds and slow spots that hint at a bigger issue</span></li>
                </ul>
                
                <p class="service-details-p">If water is already backing up into your sink, tub, or toilet, that’s when we go into emergency drain unblocking mode. First, we stop the immediate problem so things calm down. Then we talk through what caused it and what you can do to avoid the same headache again.</p>
                
                <p class="service-details-italic">We keep it straight: no scary language, no upsell speech—just “here’s what’s going on, here’s what we did, here’s what to watch for.”</p>
            </div>
        </div>
    </div>
</section>

<!-- Common Issues Section -->
<section class="section-padding" style="background-color: var(--bg-cream-dark); border-bottom: 1px solid var(--border-cream);">
    <div class="container">
        <div class="section-header-center reveal-fade-up">
            <h2>Common Drain Issues We See All the Time</h2>
            <p>You’re not the only one dealing with this stuff. We get called out for:</p>
        </div>
        
        <div class="grid-4">
            <div class="why-choose-card">
                <div class="card-icon"><i class="fa-solid fa-kitchen-set"></i></div>
                <h4>Kitchen Sinks</h4>
                <p>Clogged with grease, oil, and food scraps.</p>
            </div>
            
            <div class="why-choose-card">
                <div class="card-icon"><i class="fa-solid fa-bath"></i></div>
                <h4>Bathroom & Showers</h4>
                <p>Packed with hair and soap buildup.</p>
            </div>
            
            <div class="why-choose-card">
                <div class="card-icon"><i class="fa-solid fa-toilet"></i></div>
                <h4>Toilets</h4>
                <p>That clog often or don’t flush right.</p>
            </div>
            
            <div class="why-choose-card">
                <div class="card-icon"><i class="fa-solid fa-circle-down"></i></div>
                <h4>Floor Drains</h4>
                <p>That bubble up when you run other fixtures.</p>
            </div>
        </div>
        
        <div class="service-highlight-box reveal-fade-up" style="margin-top: 40px;">
            <p>A proper drain cleaning service visit usually makes an immediate difference. Drains run quicker, smells ease up, and that constant “glug glug” noise from the pipes disappears.</p>
        </div>
    </div>
</section>

<!-- Hassle Free & CTA Section -->
<section class="section-padding">
    <div class="container service-cta-container reveal-scale-in">
        <span class="section-subtitle">Hassle-Free Service</span>
        <h2>Easy to Deal With, Not a Hassle</h2>
        <p>Nobody is excited to call someone for plumbing drain cleaning. It usually means something’s already gone wrong. So we try to keep everything else as easy as possible:</p>
        
        <div class="service-features-list">
            <div class="service-feature-item">
                <i class="fa-solid fa-check"></i>
                <span>We turn up when we say we will</span>
            </div>
            <div class="service-feature-item">
                <i class="fa-solid fa-check"></i>
                <span>We explain what we’re doing in normal words</span>
            </div>
            <div class="service-feature-item">
                <i class="fa-solid fa-check"></i>
                <span>We protect your floors and clean up before we leave</span>
            </div>
            <div class="service-feature-item">
                <i class="fa-solid fa-check"></i>
                <span>We give real advice, not pressure to buy extra work</span>
            </div>
        </div>

        <div class="service-cta-banner-box">
            <p>Whether it’s a slow drain that’s been bugging you for weeks or a full‑on backup that needs emergency drain unblocking service, we’re here to get things moving again the right way—no fuss, no nonsense.</p>
        </div>
        
        <a href="<?php echo $path_prefix; ?>contact.php" class="btn btn-schedule"><i class="fa-regular fa-calendar-days"></i> Request Drain Cleaning Online</a>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
