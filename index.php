<?php 
$path_prefix = '';
$page_title = "Reliable Plumbing Brooklyn Solutions by Your Local Plumber Brooklyn";
$page_desc = "Welcome to Go Brooklyn Plumber, the team locals rely on when they need a dependable plumber Brooklyn without the hassle. Emergency services and fast response across Brooklyn.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "PlumbingService",
  "name" => "Go Brooklyn Plumber",
  "image" => $base_url . "assets/images/hero_plumbing_bg.png",
  "@id" => $base_url . "#plumbing-service",
  "url" => $base_url,
  "telephone" => "212-687-1726",
  "priceRange" => "$$",
  "address" => [
    "@type" => "PostalAddress",
    "streetAddress" => "Brooklyn, NY",
    "addressLocality" => "Brooklyn",
    "addressRegion" => "NY",
    "postalCode" => "11201",
    "addressCountry" => "US"
  ],
  "geo" => [
    "@type" => "GeoCoordinates",
    "latitude" => 40.6782,
    "longitude" => -73.9442
  ],
  "openingHoursSpecification" => [
    "@type" => "OpeningHoursSpecification",
    "dayOfWeek" => [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens" => "00:00",
    "closes" => "23:59"
  ],
  "areaServed" => [
    [
      "@type" => "AdministrativeArea",
      "name" => "Brooklyn"
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

require_once __DIR__ . '/includes/header.php'; 
?>

<!-- 1. Hero Section -->
<section class="hero-section hero-home-bg">
    <div class="container hero-grid">
        <!-- Left Side Column -->
        <div class="hero-content reveal-fade-left">
            <div class="hero-badge">
                <i class="fa-solid fa-shield-halved"></i>
                <span>Go Brooklyn Plumber</span>
            </div>
            
            <h1 class="hero-title">Reliable Plumbing<br>Brooklyn Solutions</h1>
            
            <p class="hero-desc">Welcome to Go Brooklyn Plumber, the team locals rely on when they need a dependable plumber Brooklyn without the hassle. Whether it’s a small repair or something urgent, we handle it quickly and properly.</p>
            
            <div class="hero-callout-line">
                <div class="hero-callout-label">Call for Plumbing Service:</div>
                <div class="hero-callout-phone">212-687-1726</div>
            </div>
            
            <div class="hero-actions-row">
                <a href="contact.php" class="btn btn-hero-schedule">
                    <span>SCHEDULE ONLINE</span>
                    <span>It's fast & easy</span>
                </a>
                
                <div class="hero-ratings-block">
                    <div class="ratings-title">Rated 4.9 on Google</div>
                    <div class="ratings-row">
                        <span class="ratings-num">4.9</span>
                        <div class="ratings-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="ratings-count">(1,240+ Reviews)</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Side Column (Plumber Image) -->
        <div class="hero-visual reveal-fade-right">
            <img src="assets/images/roto_plumber.png" alt="Roto-Rooter Plumber in New York" class="hero-visual-img">
        </div>
    </div>
</section>

<!-- 2. Highlights Bar Section -->
<section class="highlights-section">
    <div class="container highlights-grid">
        <!-- Item 1: 24/7 Emergency Service -->
        <div class="highlight-item">
            <div class="highlight-icon-circle">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <div class="highlight-info">
                <h2>24/7 Emergency Service</h2>
                <p>We're always here when you need us</p>
            </div>
        </div>
        
        <!-- Item 2: Upfront Pricing -->
        <div class="highlight-item">
            <div class="highlight-icon-circle">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div class="highlight-info">
                <h2>Upfront Pricing</h2>
                <p>No hidden fees ever - guaranteed</p>
            </div>
        </div>
        
        <!-- Item 3: Licensed & Insured -->
        <div class="highlight-item">
            <div class="highlight-icon-circle">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="highlight-info">
                <h2>Licensed & Insured</h2>
                <p>Trusted professionals you can count on</p>
            </div>
        </div>
        
        <!-- Item 4: Satisfaction Guaranteed -->
        <div class="highlight-item">
            <div class="highlight-icon-circle">
                <i class="fa-solid fa-thumbs-up"></i>
            </div>
            <div class="highlight-info">
                <h2>Satisfaction Guaranteed</h2>
                <p>We stand behind our work 100%</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. Red Tag Promo Banner Section -->
<section class="promo-banner-section">
    <div class="container">
        <div class="promo-banner-inner" onclick="alert('Special Coupon Applied: Free Estimates on Nights & Weekends!');">
            <i class="fa-solid fa-tag"></i>
            <span>Free Estimates & No Extra Charge for Nights & Weekends <i class="fa-solid fa-chevron-right" style="font-size: 0.95rem; margin-left: 6px;"></i></span>
        </div>
    </div>
</section>

<!-- 3.5. NYC About & Trust Section -->
<section class="about-nyc-section">
    <div class="container">
        <div class="about-nyc-grid">
            
            <!-- Left Side Details -->
            <div class="about-content reveal-fade-left">
                <div class="about-nyc-eyebrow">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Go Brooklyn Plumber</span>
                </div>
                
                <h2 class="about-nyc-title">Reliable Plumbing Brooklyn Solutions by <span>Your Local Plumber Brooklyn</span></h2>
                
                <p class="about-nyc-desc" style="font-size: 1.15rem; line-height: 1.8; margin-bottom: 20px; color: var(--text-dark); font-weight: 500;">Welcome to Go Brooklyn Plumber, the team locals rely on when they need a dependable plumber Brooklyn without the hassle. Whether it’s a small repair or something urgent, we handle it quickly and properly, with solutions that actually fit how Brooklyn homes and businesses operate.</p>
                
                <p class="about-nyc-desc" style="line-height: 1.7; color: var(--text-muted); margin-bottom: 0;">From older brownstones to newer apartments, we know the kind of plumbing issues that come with living here. That local experience helps us respond faster, fix things the right way, and make sure the problem doesn’t keep coming back. And when things can’t wait, you can count on an emergency plumber Brooklyn who shows up ready to fix the problem—no delays, no runaround.</p>
            </div>
            
            <!-- Right Side Sidebar Cards -->
            <div class="about-nyc-sidebar reveal-fade-right">
                <!-- Trust Metrics Card -->
                <div class="trust-metrics-card">
                    <div class="metric-col">
                        <div class="metric-icon-circle">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="metric-num">15+</div>
                        <div class="metric-label">Years Local</div>
                        <div class="metric-sub">Brooklyn Built</div>
                    </div>
                    <div class="metric-col">
                        <div class="metric-icon-circle" style="color: var(--rr-yellow); background-color: rgba(237, 185, 0, 0.05); border-color: rgba(237, 185, 0, 0.15);">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="metric-num">4.9</div>
                        <div class="metric-label">Rated on Google</div>
                        <div class="metric-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="metric-sub" style="margin-top: 2px;">(1,240+ Reviews)</div>
                    </div>
                    <div class="metric-col">
                        <div class="metric-icon-circle" style="color: var(--rr-red); background-color: rgba(218, 41, 28, 0.05); border-color: rgba(218, 41, 28, 0.15);">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="metric-num">24/7</div>
                        <div class="metric-label">Emergency</div>
                        <div class="metric-label" style="margin-top: -4px;">Service</div>
                    </div>
                </div>
                
                <!-- Navy CTA Card -->
                <div class="cta-navy-card">
                    <h3>Dealing with a leak, a stubborn clog, or something that just can’t wait?</h3>
                    <p>Don’t let it turn into a bigger problem. With Go Brooklyn Plumber, you’ve got a reliable plumber ready to step in, fix it properly, and take the stress off your plate.</p>
                    <a href="contact.php" class="btn btn-sidebar-schedule"><i class="fa-regular fa-calendar-days"></i> Schedule Online <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i></a>
                </div>
            </div>
            
        </div>
        
        <!-- Bottom Call Bar Strip -->
        <div class="bottom-callbar">
            <div class="callbar-left">
                <!-- Item 1 -->
                <div class="callbar-item">
                    <div class="callbar-icon"><i class="fa-regular fa-calendar-check"></i></div>
                    <div class="callbar-info">
                        <h4>Free Estimates</h4>
                        <p>Upfront, honest pricing</p>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="callbar-item">
                    <div class="callbar-icon"><i class="fa-regular fa-moon"></i></div>
                    <div class="callbar-info">
                        <h4>No Extra Charge</h4>
                        <p>For nights & weekends</p>
                    </div>
                </div>
                
                <!-- Item 3 -->
                <div class="callbar-item">
                    <div class="callbar-icon"><i class="fa-regular fa-circle-check"></i></div>
                    <div class="callbar-info">
                        <h4>100% Satisfaction</h4>
                        <p>We stand behind our work</p>
                    </div>
                </div>
            </div>
            
            <a href="tel:212-687-1726" class="callbar-right-cta">
                <i class="fa-solid fa-phone-volume"></i>
                <div class="callbar-right-info">
                    <span class="callbar-right-label">Call Now</span>
                    <span class="callbar-right-phone">212-687-1726</span>
                </div>
            </a>
        </div>
        
    </div>
</section>

<!-- 4. Plumbing Brooklyn Services Section -->
<section style="padding: 80px 0; background-color: #f7f8fb; border-top: 1px solid var(--border-light);">
    <div class="container">
        <div class="section-header reveal-fade-up" style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase;">Plumbing Brooklyn Services That Keep Your Home Running Smoothly</h2>
            <p style="color: var(--text-muted); font-size: 1rem; margin-top: 8px;">Professional, dependable, and efficient solutions tailored to your space.</p>
        </div>
        
        <div class="grid-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
            <!-- Card 1 -->
            <div class="service-card" style="background-color: #ffffff; border: 1px solid var(--border-light); padding: 36px 30px; border-radius: 6px; box-shadow: 0 4px 12px rgba(6,18,44,0.03);">
                <div style="color: var(--rr-red); font-size: 2.2rem; margin-bottom: 20px;"><i class="fa-solid fa-sink"></i></div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 15px;">Drain Cleaning Service by Expert Plumber Brooklyn</h3>
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; text-align: left; display: flex; flex-direction: column; gap: 10px;">
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>Slow drains, bad smells, or full blockages—we clear it properly, not temporarily</span></li>
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>We don’t just push the clog deeper, we remove it, so it doesn’t come back</span></li>
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>Kitchen sinks, bathroom drains, and main sewer lines handled with care</span></li>
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>Practical advice to help you avoid repeat issues</span></li>
                </ul>
                <a href="contact.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Book Service &rarr;</a>
            </div>

            <!-- Card 2 -->
            <div class="service-card" style="background-color: #ffffff; border: 1px solid var(--border-light); padding: 36px 30px; border-radius: 6px; box-shadow: 0 4px 12px rgba(6,18,44,0.03);">
                <div style="color: var(--rr-red); font-size: 2.2rem; margin-bottom: 20px;"><i class="fa-solid fa-water"></i></div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 15px;">Water Damage Plumbing Brooklyn – Fast & Reliable Solutions</h3>
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; text-align: left; display: flex; flex-direction: column; gap: 10px;">
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>Leaks, burst pipes, or unexpected water spread—we act quickly to control the situation</span></li>
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>We help reduce damage to walls, flooring, and your belongings</span></li>
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>Proper inspection to catch the root cause, not just the surface issue</span></li>
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>Long-lasting repair solutions you can rely on</span></li>
                </ul>
                <a href="contact.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Book Service &rarr;</a>
            </div>

            <!-- Card 3 -->
            <div class="service-card" style="background-color: #ffffff; border: 1px solid var(--border-light); padding: 36px 30px; border-radius: 6px; box-shadow: 0 4px 12px rgba(6,18,44,0.03);">
                <div style="color: var(--rr-red); font-size: 2.2rem; margin-bottom: 20px;"><i class="fa-solid fa-clock"></i></div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 15px;">24/7 Emergency Plumber Brooklyn – Ready When You Need Us</h3>
                <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; text-align: left; display: flex; flex-direction: column; gap: 10px;">
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>Immediate support from a trusted emergency plumber Brooklyn, day or night</span></li>
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>Fast response across Brooklyn—because delays make things worse</span></li>
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>We come prepared to fix the issue on the spot</span></li>
                    <li style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.5; display: flex; gap: 8px; align-items: flex-start;"><i class="fa-solid fa-check" style="color: var(--rr-red); margin-top: 3px;"></i><span>Real peace of mind during stressful plumbing situations</span></li>
                </ul>
                <a href="contact.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Book Service &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- 4.5. Why Choose Go Brooklyn Plumber Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header reveal-fade-up" style="text-align: center; margin-bottom: 30px;">
            <span class="section-subtitle" style="display: block; font-size: 0.85rem; font-weight: 800; text-transform: uppercase; color: var(--rr-red); letter-spacing: 1.5px; margin-bottom: 8px;">Our Core Strengths</span>
            <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase;">Why Choose Go Brooklyn Plumber</h2>
        </div>
        
        <div class="why-choose-grid">
            <!-- Card 1 -->
            <div class="why-choose-card reveal-fade-up">
                <h3><i class="fa-solid fa-user-gear"></i> Local Plumbing Brooklyn Experts Who Get It</h3>
                <ul class="why-choose-list">
                    <li><i class="fa-solid fa-circle-check"></i> Experience with Brooklyn’s older pipes, tight layouts, and modern buildings</li>
                    <li><i class="fa-solid fa-circle-check"></i> Solutions tailored to your property—not one-size-fits-all fixes</li>
                </ul>
            </div>
            
            <!-- Card 2 -->
            <div class="why-choose-card reveal-fade-up">
                <h3><i class="fa-solid fa-clock"></i> Reliable Plumber Brooklyn – No Delays, No Guesswork</h3>
                <ul class="why-choose-list">
                    <li><i class="fa-solid fa-circle-check"></i> On-time service and quick turnaround</li>
                    <li><i class="fa-solid fa-circle-check"></i> Clear communication without technical confusion</li>
                </ul>
            </div>
            
            <!-- Card 3 -->
            <div class="why-choose-card reveal-fade-up">
                <h3><i class="fa-solid fa-tag"></i> Honest Pricing for Plumbing Brooklyn Services</h3>
                <ul class="why-choose-list">
                    <li><i class="fa-solid fa-circle-check"></i> Upfront quotes before any work begins</li>
                    <li><i class="fa-solid fa-circle-check"></i> No hidden costs or last-minute surprises</li>
                </ul>
            </div>
            
            <!-- Card 4 -->
            <div class="why-choose-card reveal-fade-up">
                <h3><i class="fa-solid fa-award"></i> Quality Work That Lasts</h3>
                <ul class="why-choose-list">
                    <li><i class="fa-solid fa-circle-check"></i> Skilled professionals focused on long-term results</li>
                    <li><i class="fa-solid fa-circle-check"></i> No shortcuts or temporary patchwork fixes</li>
                </ul>
            </div>
            
            <!-- Card 5 -->
            <div class="why-choose-card reveal-fade-up">
                <h3><i class="fa-solid fa-handshake-angle"></i> Respectful Service, Every Time</h3>
                <ul class="why-choose-list">
                    <li><i class="fa-solid fa-circle-check"></i> Clean, organized work with minimal disruption</li>
                    <li><i class="fa-solid fa-circle-check"></i> We treat your home or space with care</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php require_once __DIR__ . '/includes/footer.php'; ?>
