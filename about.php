<?php 
$path_prefix = '';
$page_title = "About Go Brooklyn Plumber | Your Trusted Brooklyn Plumbers";
$page_desc = "Learn about Go Brooklyn Plumber. We are a local, honest, and professional team of plumbers in Brooklyn providing drain cleaning, emergency repairs, and water damage help.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type" => "AboutPage",
      "@id" => $base_url . "about.php#webpage",
      "url" => $base_url . "about.php",
      "name" => "About Go Brooklyn Plumber",
      "description" => "Learn about the local plumbing team at Go Brooklyn Plumber and our dedication to quality service in Brooklyn.",
      "isPartOf" => [
        "@type" => "WebSite",
        "@id" => $base_url . "#website",
        "url" => $base_url,
        "name" => "Go Brooklyn Plumber"
      ]
    ],
    [
      "@type" => "PlumbingService",
      "@id" => $base_url . "#plumbing-service",
      "name" => "Go Brooklyn Plumber",
      "url" => $base_url,
      "telephone" => "212-687-1726",
      "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "Brooklyn, NY",
        "addressLocality" => "Brooklyn",
        "addressRegion" => "NY",
        "postalCode" => "11201",
        "addressCountry" => "US"
      ]
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

require_once __DIR__ . '/includes/header.php'; 
?>

<!-- About Hero Section -->
<section class="hero-section hero-home-bg" style="padding: 100px 0 80px;">
    <div class="container hero-grid" style="grid-template-columns: 1.1fr 0.9fr; gap: 48px; align-items: center;">
        <div class="reveal-fade-left">
            <span class="hero-tag" style="display: inline-block; font-size: 0.82rem; font-weight: 800; text-transform: uppercase; color: var(--rr-red); letter-spacing: 1px; margin-bottom: 12px;">Local & Dependable</span>
            <h1 class="hero-title" style="font-size: 3.2rem; font-weight: 900; line-height: 1.1; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">About Go Brooklyn Plumber</h1>
            <p class="hero-desc" style="font-size: 1.15rem; line-height: 1.8; color: var(--text-dark); font-weight: 500; margin-bottom: 16px;">Go Brooklyn Plumber isn’t a big faceless company. We’re a local team of plumbers who spend our days in the same streets, buildings, and neighborhoods you do. From brownstones and walk‑ups to newer apartments and small shops, we’ve pretty much seen every type of plumbing problem Brooklyn can throw at us.</p>
            <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 0;">We started this with a simple idea: when something goes wrong with your plumbing, you shouldn’t have to chase people for updates, wait around all day, or feel like you’re being talked down to. You should be able to call, get a straight answer, and have someone show up who knows what they’re doing.</p>
        </div>
        <div style="display:flex; align-items:center;" class="reveal-fade-right">
            <div class="glow-card" style="width: 100%; box-shadow: 0 10px 30px rgba(6, 18, 44, 0.05); background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 12px; padding: 40px;">
                <h2 style="color: var(--rr-red); margin-bottom: 20px; font-size: 1.6rem; font-family: var(--font-heading); font-weight: 800; text-transform: uppercase;"><i class="fa-solid fa-quote-left"></i> Our Core Philosophy</h2>
                <p style="font-size: 1.15rem; line-height: 1.7; font-style: italic; color: var(--rr-blue);">"We run our service on transparency, speed, and real local expertise. When you call us, you deal directly with professional plumbers who care."</p>
            </div>
        </div>
    </div>
</section>

<!-- Who We Are & What We Do Section -->
<section class="section-padding" style="background-color: #ffffff; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); padding: 80px 0;">
    <div class="container">
        <div class="grid-2" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 50px;">
            <!-- Column 1: Who We Are -->
            <div class="reveal-fade-left">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">Who We Are</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">We’re a team of practical, hands‑on plumbers who actually enjoy solving problems. Leaks, clogs, broken fixtures, flooded basements, no hot water—this is what we deal with every day, and we take pride in doing it properly.</p>
                
                <h3 style="font-size: 1.1rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 15px;">What matters to us:</h3>
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 12px;">
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Showing up when we say we will</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Being honest about what’s really going on</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Fixing things the right way, not the quickest way</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>Treating your home with respect</span></li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted);">We know most people don’t call a plumber because they want to—they call because they have to. So we do everything we can to make the whole experience easier and less stressful.</p>
            </div>
            
            <!-- Column 2: What We Do -->
            <div class="reveal-fade-right">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">What We Do</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">At Go Brooklyn Plumber, we handle everything from everyday plumbing jobs to full‑on emergencies:</p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 16px;">
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <div style="background-color: var(--rr-light-blue); color: var(--rr-blue); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><i class="fa-solid fa-sink"></i></div>
                        <div>
                            <h4 style="font-size: 1.05rem; font-weight: 700; color: var(--rr-blue); margin-bottom: 4px;">Drain cleaning and plumbing drain cleaning for slow or blocked drains</h4>
                        </div>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <div style="background-color: var(--rr-light-blue); color: var(--rr-blue); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><i class="fa-solid fa-water"></i></div>
                        <div>
                            <h4 style="font-size: 1.05rem; font-weight: 700; color: var(--rr-blue); margin-bottom: 4px;">Water damage repair and help after leaks or bursts</h4>
                        </div>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <div style="background-color: var(--rr-light-blue); color: var(--rr-blue); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><i class="fa-solid fa-clock"></i></div>
                        <div>
                            <h4 style="font-size: 1.05rem; font-weight: 700; color: var(--rr-blue); margin-bottom: 4px;">Emergency plumbing service and 24 7 emergency plumbing when things can’t wait</h4>
                        </div>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <div style="background-color: var(--rr-light-blue); color: var(--rr-blue); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div>
                            <h4 style="font-size: 1.05rem; font-weight: 700; color: var(--rr-blue); margin-bottom: 4px;">General repairs, maintenance, and troubleshooting</h4>
                        </div>
                    </li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted);">Whether you need an emergency plumber in the middle of the night, emergency drain cleaning, or just someone to finally fix that annoying drip, we’re set up to respond quickly and get the job done right.</p>
            </div>
        </div>
    </div>
</section>

<!-- How We Work & Why People Choose Us Section -->
<section class="section-padding" style="background-color: var(--bg-cream-dark); border-bottom: 1px solid var(--border-cream); padding: 80px 0;">
    <div class="container">
        <div class="grid-2" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 50px;">
            <!-- Column 1: How We Work -->
            <div class="reveal-fade-left">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">How We Work</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">We keep things simple and transparent. When you contact us, we:</p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 12px;">
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 4px;"></i><span>Listen to what’s happening and ask a few clear questions</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 4px;"></i><span>Give you an honest idea of how urgent it is</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 4px;"></i><span>Explain your options in normal language</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 4px;"></i><span>Keep you updated from the time we’re on the way until the job is done</span></li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted);">No hidden extras at the last minute, no pressure to approve work you don’t understand, and no disappearing after the first visit. If we say we’ll take care of it, we mean it.</p>
            </div>
            
            <!-- Column 2: Why People in Brooklyn Choose Us -->
            <div class="reveal-fade-right">
                <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 20px;">Why People in Brooklyn Choose Us</h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 24px;">There are plenty of plumbers out there—but our customers keep calling us back for a few reasons:</p>
                
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 12px;">
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>We’re local and know Brooklyn buildings inside out</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>We offer true 24 hour plumber support for real emergencies</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>We take the time to explain what we’re doing and why</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>We focus on long‑term fixes instead of quick patches</span></li>
                    <li style="font-size: 1rem; color: var(--text-muted); display: flex; gap: 10px; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #10b981; margin-top: 4px;"></i><span>We leave your place as clean as we can when we’re done</span></li>
                </ul>
                
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-muted);">A lot of our work comes from word of mouth—neighbors telling neighbors, friends telling friends, landlords recommending us to tenants. That’s exactly how we like it.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Promise CTA Section -->
<section class="section-padding" style="text-align: center; background-color: #ffffff; padding: 90px 0;">
    <div class="container reveal-scale-in" style="max-width: 850px;">
        <span class="section-subtitle" style="display: block; font-size: 0.85rem; font-weight: 800; text-transform: uppercase; color: var(--rr-red); letter-spacing: 1.5px; margin-bottom: 12px;">Our Promise</span>
        <h2 style="font-size: 2.6rem; margin-bottom: 24px; color: var(--rr-blue); font-family: var(--font-heading); font-weight: 900; text-transform: uppercase;">Our Commitment to You</h2>
        
        <div style="background-color: var(--rr-light-red-bg); border: 2px dashed rgba(218, 41, 28, 0.25); border-radius: 12px; padding: 40px; margin-bottom: 40px; text-align: left;">
            <p style="font-size: 1.2rem; line-height: 1.8; color: var(--text-dark); margin-bottom: 16px; font-weight: 600;">When you call Go Brooklyn Plumber, you’re getting a team that treats your home like their own—respectful, honest, and focused on fixing the problem properly.</p>
            <p style="font-size: 1.1rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 0;">We turn up when we say we will, explain things in plain language, and leave you feeling like your plumbing is finally under control.</p>
        </div>
        
        <a href="contact.php" class="btn btn-schedule" style="padding: 18px 40px; font-size: 1.1rem; box-shadow: 0 8px 24px rgba(218, 41, 28, 0.25); border-radius: 6px;"><i class="fa-regular fa-calendar-days"></i> Book Go Brooklyn Plumber Online</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
