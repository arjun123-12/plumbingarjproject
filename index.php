<?php 
$path_prefix = '';
$page_title = "Professional 24/7 Plumbing Service in New York City";
$page_desc = "Roto-Rooter is New York City's premier 24/7 plumbing & drain cleaning company. Fast emergency services, upfront pricing, licensed plumbers. Call 212-687-1726.";

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "PlumbingService",
  "name" => "Roto-Rooter Plumbing & Drain Service (New York)",
  "image" => $base_url . "assets/images/roto_plumber.png",
  "@id" => $base_url . "#plumbing-service",
  "url" => $base_url,
  "telephone" => "212-687-1726",
  "priceRange" => "$$",
  "address" => [
    "@type" => "PostalAddress",
    "streetAddress" => "120 Broadway, Suite 400",
    "addressLocality" => "New York",
    "addressRegion" => "NY",
    "postalCode" => "10271",
    "addressCountry" => "US"
  ],
  "geo" => [
    "@type" => "GeoCoordinates",
    "latitude" => 40.7081,
    "longitude" => -74.0111
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
  "sameAs" => [
    "https://www.facebook.com/RotoRooter",
    "https://www.twitter.com/RotoRooter",
    "https://www.youtube.com/user/RotoRooterCorp"
  ],
  "areaServed" => [
    [
      "@type" => "AdministrativeArea",
      "name" => "Manhattan"
    ],
    [
      "@type" => "AdministrativeArea",
      "name" => "Brooklyn"
    ],
    [
      "@type" => "AdministrativeArea",
      "name" => "Queens"
    ],
    [
      "@type" => "AdministrativeArea",
      "name" => "Bronx"
    ],
    [
      "@type" => "AdministrativeArea",
      "name" => "Staten Island"
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

require_once 'includes/header.php'; 
?>

<!-- 1. Hero Section -->
<section class="hero-section">
    <div class="container hero-grid">
        <!-- Left Side Column -->
        <div class="hero-content reveal-fade-left">
            <div class="hero-badge">
                <i class="fa-solid fa-shield-halved"></i>
                <span>NYC's Most Trusted Plumbing Company</span>
            </div>
            
            <h1 class="hero-title">Professional 24/7<br>Plumbing Service</h1>
            
            <p class="hero-desc">Fast, reliable, and professional plumbing solutions when you need them most.</p>
            
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
                    <span>NYC's Most Trusted Plumbing Company</span>
                </div>
                
                <h2 class="about-nyc-title">Trusted New York City Plumber for <span>Drains, Water Heaters & Water Cleanup</span></h2>
                
                <p class="about-nyc-desc">Need a New York City plumber who understands the unique plumbing challenges of the Big Apple? Choose Roto-Rooter, America's leading plumbing company since 1935. Our expert plumbing technicians tackle everything from aging infrastructure in historic buildings to low water pressure in high-rise buildings, ensuring your plumbing system runs smoothly.</p>
                
                <h3 class="about-nyc-subtitle">When you call Roto-Rooter of New York, you get:</h3>
                
                <!-- 2-Column List with circular icons -->
                <div class="icon-list-grid">
                    <!-- Item 1 -->
                    <div class="icon-list-item">
                        <div class="icon-list-circle">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="icon-list-info">
                            <h4>Same-Day Service</h4>
                            <p>Quick and efficient solutions.</p>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="icon-list-item">
                        <div class="icon-list-circle">
                            <i class="fa-regular fa-id-badge"></i>
                        </div>
                        <div class="icon-list-info">
                            <h4>Experienced Technicians</h4>
                            <p>Professional and highly trained plumbing experts.</p>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="icon-list-item">
                        <div class="icon-list-circle alert-color">
                            <span style="font-size: 0.8rem; font-weight: 800;">24/7</span>
                        </div>
                        <div class="icon-list-info">
                            <h4>24/7 Availability</h4>
                            <p>We're here for you every day, including holidays.</p>
                        </div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="icon-list-item">
                        <div class="icon-list-circle">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <div class="icon-list-info">
                            <h4>Advanced Equipment</h4>
                            <p>State-of-the-art diagnostics and tools.</p>
                        </div>
                    </div>
                    
                    <!-- Item 5 -->
                    <div class="icon-list-item">
                        <div class="icon-list-circle">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                        <div class="icon-list-info">
                            <h4>No Extra Charges</h4>
                            <p>No additional fees for services on holidays, nights, or weekends.</p>
                        </div>
                    </div>
                    
                    <!-- Item 6 -->
                    <div class="icon-list-item">
                        <div class="icon-list-circle">
                            <i class="fa-solid fa-tags"></i>
                        </div>
                        <div class="icon-list-info">
                            <h4>Special Discounts</h4>
                            <p>Savings for seniors and military personnel.</p>
                        </div>
                    </div>
                    
                    <!-- Item 7 -->
                    <div class="icon-list-item">
                        <div class="icon-list-circle">
                            <i class="fa-regular fa-file-lines"></i>
                        </div>
                        <div class="icon-list-info">
                            <h4>Free Onsite Estimates</h4>
                            <p>Know the cost upfront with no surprises.</p>
                        </div>
                    </div>
                    
                    <!-- Item 8 -->
                    <div class="icon-list-item">
                        <div class="icon-list-circle">
                            <i class="fa-regular fa-map"></i>
                        </div>
                        <div class="icon-list-info">
                            <h4>Coupons and Financing</h4>
                            <p>Budget-friendly options available.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side Sidebar Cards -->
            <div class="about-nyc-sidebar reveal-fade-right">
                <!-- Trust Metrics Card -->
                <div class="trust-metrics-card">
                    <div class="metric-col">
                        <div class="metric-icon-circle">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="metric-num">90+</div>
                        <div class="metric-label">Years of Trust</div>
                        <div class="metric-sub">Since 1935</div>
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
                    <h3>We've got you covered when you need us most.</h3>
                    <p>We deliver reliable service, fair pricing, and a team that genuinely cares about your needs. Call us at <strong>212-687-1726</strong> or use our online scheduling form. Experience the difference local expertise makes!</p>
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

<!-- 4. Roto-Rooter Services Overview -->
<section style="padding: 80px 0; background-color: #f7f8fb; border-top: 1px solid var(--border-light);">
    <div class="container">
        <div class="section-header reveal-fade-up" style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase;">Our Core Plumbing Solutions</h2>
            <p style="color: var(--text-muted); font-size: 1rem; margin-top: 8px;">From routine checks to large-scale commercial cleaning, we do it all.</p>
        </div>
        
        <div class="grid-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
            <!-- Card 1 -->
            <div class="service-card" style="background-color: #ffffff; border: 1px solid var(--border-light); padding: 36px 30px; border-radius: 6px; box-shadow: 0 4px 12px rgba(6,18,44,0.03);">
                <div style="color: var(--rr-red); font-size: 2.2rem; margin-bottom: 20px;"><i class="fa-solid fa-sink"></i></div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 12px;">Residential Plumbing</h3>
                <p style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin-bottom: 20px;">Sewer repairs, water line installs, faucet replacements, water heaters, and general household solutions.</p>
                <a href="contact.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Book Service &rarr;</a>
            </div>

            <!-- Card 2 -->
            <div class="service-card" style="background-color: #ffffff; border: 1px solid var(--border-light); padding: 36px 30px; border-radius: 6px; box-shadow: 0 4px 12px rgba(6,18,44,0.03);">
                <div style="color: var(--rr-red); font-size: 2.2rem; margin-bottom: 20px;"><i class="fa-solid fa-water"></i></div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 12px;">Drain Cleaning</h3>
                <p style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin-bottom: 20px;">Clogged sinks, main sewer line cleaning, sewer camera inspections, and high-pressure water jetting.</p>
                <a href="contact.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Book Service &rarr;</a>
            </div>

            <!-- Card 3 -->
            <div class="service-card" style="background-color: #ffffff; border: 1px solid var(--border-light); padding: 36px 30px; border-radius: 6px; box-shadow: 0 4px 12px rgba(6,18,44,0.03);">
                <div style="color: var(--rr-red); font-size: 2.2rem; margin-bottom: 20px;"><i class="fa-solid fa-house-chimney-crack"></i></div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 12px;">Water Damage Cleanup</h3>
                <p style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin-bottom: 20px;">Emergency water removal, structural drying, basement pumping, sewage sanitation, and cleanup.</p>
                <a href="contact.php" style="color: var(--rr-red); font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Book Service &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- 5. Customer Reviews Section -->
<section class="reviews-section">
    <div class="container">
        <div class="reviews-header">
            <h2 class="reviews-title">Customer Reviews in New York</h2>
            <div class="reviews-summary-bar">
                <!-- SVG Google Icon -->
                <svg viewBox="0 0 24 24" width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/>
                </svg>
                
                <span class="reviews-summary-score">4.9</span>
                
                <div class="reviews-summary-stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                
                <span class="reviews-summary-count">out of 3,431 reviews</span>
            </div>
        </div>
        
        <div class="reviews-divider-line"></div>
        
        <div class="reviews-grid">
            <!-- Review 1 -->
            <div class="review-card">
                <div>
                    <div class="card-review-top">
                        <!-- SVG Google Icon -->
                        <svg viewBox="0 0 24 24" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/>
                        </svg>
                        
                        <div class="card-review-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    
                    <p class="card-review-text">
                        MR. WALTER DID A FANTASTIC JOB, HE TOOK HIS TIME AND HE WAS VERY DELIGENT ON HOW THE PIPE FITTINGS LOOKED, MEANING IT WAS BENT BUT HE HAD TO GET ...
                        <br>
                        <button class="read-more-btn">Read more <i class="fa-solid fa-arrow-right"></i></button>
                    </p>
                </div>
                
                <div>
                    <div class="review-card-divider"></div>
                    <div class="card-review-author">
                        <div class="author-avatar" style="background-color: #6366f1;">J</div>
                        <div class="author-info">
                            <h4>Jeremiah A.</h4>
                            <p>New York, NY</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Review 2 -->
            <div class="review-card">
                <div>
                    <div class="card-review-top">
                        <!-- SVG Google Icon -->
                        <svg viewBox="0 0 24 24" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/>
                        </svg>
                        
                        <div class="card-review-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    
                    <p class="card-review-text">
                        Steve Morris was assigned to my request for a estimate/assessment for a leak I was experiencing on various levels of my house. Steve completed the estimate/assessment on Monday, August ...
                        <br>
                        <button class="read-more-btn">Read more <i class="fa-solid fa-arrow-right"></i></button>
                    </p>
                </div>
                
                <div>
                    <div class="review-card-divider"></div>
                    <div class="card-review-author">
                        <div class="author-avatar" style="background-color: #3b82f6;">S</div>
                        <div class="author-info">
                            <h4>Simone C.</h4>
                            <p>New York, NY</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Review 3 -->
            <div class="review-card">
                <div>
                    <div class="card-review-top">
                        <!-- SVG Google Icon -->
                        <svg viewBox="0 0 24 24" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/>
                        </svg>
                        
                        <div class="card-review-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    
                    <p class="card-review-text">
                        Great service and super fast even on a holiday. Thank you Roto Rooter!
                    </p>
                </div>
                
                <div>
                    <div class="review-card-divider"></div>
                    <div class="card-review-author">
                        <div class="author-avatar" style="background-color: #8b5cf6;">V</div>
                        <div class="author-info">
                            <h4>Viva D.</h4>
                            <p>New York, NY</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Controller chevrons -->
        <div class="reviews-slider-controls">
            <button class="slider-btn" aria-label="Previous reviews"><i class="fa-solid fa-chevron-left"></i></button>
            <span class="slider-indicator">4 of 1144</span>
            <button class="slider-btn" aria-label="Next reviews"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
