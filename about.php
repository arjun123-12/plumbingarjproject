<?php 
$path_prefix = '';
$page_title = "About Us";
$page_desc = "Learn about Roto-Rooter, New York City's leading plumbing and drain cleaning company since 1935.";
require_once 'includes/header.php'; 
?>

<!-- About Hero Section -->
<section class="hero-section" style="padding: 100px 0 60px;">
    <div class="container hero-grid" style="grid-template-columns: 1fr 1.05fr; gap: 48px;">
        <div class="reveal-fade-left">
            <span class="hero-tag">Our History</span>
            <h1 class="hero-title" style="font-size: 3rem;">Nearly a Century of <span>Trust & Reliability</span></h1>
            <p class="hero-desc">Founded in 1935, Roto-Rooter is the premier provider of plumbing and drain cleaning services in North America. Roto-Rooter of New York operates 24 hours a day, 7 days a week, delivering emergency response, licensed technicians, and quality service to residential and commercial customers across the five boroughs.</p>
        </div>
        <div style="display:flex; align-items:center;" class="reveal-fade-right">
            <div class="glow-card" style="width: 100%; box-shadow: 0 4px 20px rgba(6, 18, 44, 0.04);">
                <h3 style="color: var(--rr-red); margin-bottom: 20px;"><i class="fa-solid fa-quote-left"></i> Our Commitment</h3>
                <p style="font-size: 1.1rem; line-height: 1.7; font-style: italic;">"To deliver prompt, professional plumbing and drain cleaning services that exceed customer expectations. We stand behind our work with our satisfaction guarantee, ensuring every plumbing system runs smoothly."</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section-padding" style="background-color: var(--bg-card-hover); border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <div class="section-header reveal-fade-up">
            <span class="section-subtitle">Core Pillars</span>
            <h2 class="section-title">Why New Yorkers Choose Roto-Rooter</h2>
            <p class="section-desc">We do not believe in compromises. Every service we perform checks three vital boxes.</p>
        </div>

        <div class="grid-3">
            <!-- Pillar 1 -->
            <div class="service-card" style="padding: 32px 24px;">
                <div class="service-icon" style="color: var(--rr-blue); background-color: var(--rr-light-blue);"><i class="fa-solid fa-clock-rotate-left"></i></div>
                <h3>24/7 Availability</h3>
                <p>Plumbing problems don't keep business hours. We are here for you 24 hours a day, 7 days a week, including holidays, with no extra charges for nights or weekends.</p>
            </div>

            <!-- Pillar 2 -->
            <div class="service-card" style="padding: 32px 24px;">
                <div class="service-icon" style="color: var(--rr-blue); background-color: var(--rr-light-blue);"><i class="fa-solid fa-shield-halved"></i></div>
                <h3>Licensed & Insured</h3>
                <p>Our plumbing technicians are highly trained, fully licensed, and background-checked, so you can have complete peace of mind when we enter your home or business.</p>
            </div>

            <!-- Pillar 3 -->
            <div class="service-card" style="padding: 32px 24px;">
                <div class="service-icon" style="color: var(--rr-blue); background-color: var(--rr-light-blue);"><i class="fa-solid fa-award"></i></div>
                <h3>90+ Years of Trust</h3>
                <p>We have spent nearly a century building the tools, techniques, and customer relationships that make Roto-Rooter America's favorite plumbing company.</p>
            </div>
        </div>
    </div>
</section>

<!-- Join CTA Section -->
<section class="section-padding" style="text-align: center; background-color: #ffffff;">
    <div class="container reveal-scale-in" style="max-width: 800px;">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--rr-blue); font-family: var(--font-heading); font-weight: 900; text-transform: uppercase;">Ready to Schedule a Plumbing Expert?</h2>
        <p style="color: var(--text-muted); font-size: 1.1rem; margin-bottom: 40px;">Work with the most trusted name in the industry. Connect with us online or call our New York dispatch center directly to request immediate service.</p>
        <a href="contact.php" class="btn btn-schedule" style="padding: 16px 36px; font-size: 1.05rem; box-shadow: 0 4px 12px rgba(218, 41, 28, 0.2);"><i class="fa-regular fa-calendar-days"></i> Schedule Service Online</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
