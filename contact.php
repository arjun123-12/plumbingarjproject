<?php 
$path_prefix = '';
$page_title = "Schedule Service";
$page_desc = "Request plumbing service or ask for a free estimate from Roto-Rooter New York. Available 24/7.";
require_once 'includes/header.php'; 

// Basic Form Handler
$status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? sanitize($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? sanitize($_POST['subject']) : '';
    $message = isset($_POST['message']) ? sanitize($_POST['message']) : '';

    if (empty($name) || empty($email) || empty($message)) {
        $status = 'error_empty';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = 'error_email';
    } else {
        // Mock successful delivery
        $status = 'success';
    }
}
?>

<section class="section-padding" style="margin-top: 20px; background-color: #ffffff;">
    <div class="container">
        <div class="section-header reveal-fade-up" style="margin-bottom: 80px;">
            <span class="section-subtitle">Request Service</span>
            <h1 class="section-title" style="font-family: var(--font-heading); font-size: 3rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase;">Schedule Service or Request an Estimate</h1>
            <p class="section-desc" style="font-size: 1.1rem; color: var(--text-muted); margin-top: 12px; max-width: 700px; margin-left: auto; margin-right: auto;">Have a plumbing emergency, need a drain cleaned, or want to schedule routine repairs? Connect with our New York dispatch center below or call us directly. We operate 24/7.</p>
        </div>

        <div class="contact-grid">
            <!-- Contact Details Card -->
            <div class="contact-info-card reveal-fade-left" style="box-shadow: 0 4px 20px rgba(6, 18, 44, 0.04);">
                <h3 style="margin-bottom: 24px; font-size: 1.4rem; font-family: var(--font-heading); font-weight: 900; color: var(--rr-blue); text-transform: uppercase;">Dispatch Information</h3>
                
                <div class="info-item">
                    <div class="info-icon" style="background-color: var(--rr-light-blue); color: var(--rr-blue);">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="info-content">
                        <h4 style="font-family: var(--font-heading); font-weight: 800; color: var(--rr-blue);">Manhattan Headquarters</h4>
                        <p>120 Broadway, Suite 400<br>New York, NY 10271</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon" style="background-color: var(--rr-light-blue); color: var(--rr-blue);">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h4 style="font-family: var(--font-heading); font-weight: 800; color: var(--rr-blue);">Email Us</h4>
                        <p><a href="mailto:service@rotorooter-nyc.com" style="color: var(--text-muted);">service@rotorooter-nyc.com</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon" style="background-color: var(--rr-light-blue); color: var(--rr-blue);">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h4 style="font-family: var(--font-heading); font-weight: 800; color: var(--rr-blue);">Call Us (24/7 Dispatch)</h4>
                        <p><strong>212-687-1726</strong> (Local Phone)<br><strong>(800) 768-6911</strong> (Toll-Free)</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form Component -->
            <div class="contact-form-container reveal-fade-right">
                <form action="contact.php" method="POST" class="contact-form" style="box-shadow: 0 4px 20px rgba(6, 18, 44, 0.04);">
                    
                    <?php if ($status === 'success'): ?>
                        <div class="alert-success">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <strong>Request Received!</strong><br>
                                Thank you, <?php echo htmlspecialchars($name); ?>. A Roto-Rooter representative or technician will contact you shortly.
                            </div>
                        </div>
                    <?php elseif ($status === 'error_empty'): ?>
                        <div class="alert-success" style="background-color:rgba(239, 68, 68, 0.1); border-color:rgba(239, 68, 68, 0.3); color:#dc2626;">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div>
                                <strong>Required Fields Missing!</strong><br>
                                Please fill in all required fields (Name, Email, Message).
                            </div>
                        </div>
                    <?php elseif ($status === 'error_email'): ?>
                        <div class="alert-success" style="background-color:rgba(239, 68, 68, 0.1); border-color:rgba(239, 68, 68, 0.3); color:#dc2626;">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div>
                                <strong>Invalid Email Address!</strong><br>
                                Please enter a valid email format so we can reply to you.
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="name">Your Name <span style="color:var(--rr-red);">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" value="<?php echo isset($_POST['name']) && $status !== 'success' ? htmlspecialchars($_POST['name']) : ''; ?>" required style="background-color: #ffffff; border-color: var(--border-light); color: var(--text-dark);">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address <span style="color:var(--rr-red);">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="john@example.com" value="<?php echo isset($_POST['email']) && $status !== 'success' ? htmlspecialchars($_POST['email']) : ''; ?>" required style="background-color: #ffffff; border-color: var(--border-light); color: var(--text-dark);">
                    </div>

                    <div class="form-group">
                        <label for="subject">Service Needed <span style="color:var(--rr-red);">*</span></label>
                        <select name="subject" id="subject" class="form-control" required style="background-color: #ffffff; border-color: var(--border-light); color: var(--text-dark); height: 50px;">
                            <option value="">-- Select Service Needed --</option>
                            <option value="Drain Cleaning" <?php echo isset($_POST['subject']) && $_POST['subject'] === 'Drain Cleaning' ? 'selected' : ''; ?>>Drain Cleaning</option>
                            <option value="Plumbing Repair" <?php echo isset($_POST['subject']) && $_POST['subject'] === 'Plumbing Repair' ? 'selected' : ''; ?>>Plumbing Repair</option>
                            <option value="Water Heater Service" <?php echo isset($_POST['subject']) && $_POST['subject'] === 'Water Heater Service' ? 'selected' : ''; ?>>Water Heater Service</option>
                            <option value="Water Damage Restoration" <?php echo isset($_POST['subject']) && $_POST['subject'] === 'Water Damage Restoration' ? 'selected' : ''; ?>>Water Damage Cleanup</option>
                            <option value="Sewer Line Services" <?php echo isset($_POST['subject']) && $_POST['subject'] === 'Sewer Line Services' ? 'selected' : ''; ?>>Sewer Line Services</option>
                            <option value="Other" <?php echo isset($_POST['subject']) && $_POST['subject'] === 'Other' ? 'selected' : ''; ?>>Other Plumbing Issue</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin-bottom: 32px;">
                        <label for="message">Your Message / Request Details <span style="color:var(--rr-red);">*</span></label>
                        <textarea name="message" id="message" rows="5" class="form-control" placeholder="Describe your plumbing issue, preferred date/time, and address..." required style="background-color: #ffffff; border-color: var(--border-light); color: var(--text-dark);"><?php echo isset($_POST['message']) && $status !== 'success' ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-schedule" style="width: 100%; padding: 14px; font-size: 0.95rem;"><i class="fa-regular fa-calendar-check" style="margin-right: 6px;"></i> Submit Service Request</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
