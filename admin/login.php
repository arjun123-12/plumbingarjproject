<?php
$path_prefix = '../';
$page_title = "Admin Login | Go Brooklyn Plumber";
$page_desc = "Login to Go Brooklyn Plumber Admin Panel.";

require_once dirname(__DIR__) . '/includes/config.php';

// Hardcoded Admin Credentials
$admin_email = 'admin@gobrooklynplumber.com';
$admin_password = 'admin';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? sanitize($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid email or password. Please try again.';
    }
}

require_once dirname(__DIR__) . '/includes/header.php';
?>

<section style="min-height: 80vh; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, var(--bg-cream-light) 0%, var(--rr-light-blue) 100%); padding: 60px 20px;">
    <div class="reveal-scale-in" style="width: 100%; max-width: 420px; background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 12px; box-shadow: 0 10px 30px rgba(6, 18, 44, 0.08); padding: 40px; text-align: center;">
        
        <div style="width: 60px; height: 60px; background-color: var(--rr-light-blue); color: var(--rr-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 1.8rem;">
            <i class="fa-solid fa-lock"></i>
        </div>
        
        <h1 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 8px;">Admin Login</h1>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 24px;">Please sign in to access the dashboard panel.</p>
        
        <?php if (!empty($error)): ?>
            <div style="background-color: rgba(239, 68, 68, 0.1); border: 1px solid rgba(239, 68, 68, 0.3); color: #dc2626; border-radius: 6px; padding: 12px; font-size: 0.88rem; margin-bottom: 20px; text-align: left; display: flex; gap: 10px; align-items: center;">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span><?php echo htmlspecialchars($error); ?></span>
            </div>
        <?php endif; ?>
        
        <form action="login.php" method="POST" style="text-align: left;">
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="email" style="font-weight: 700; color: var(--text-dark); margin-bottom: 6px; display: block; font-size: 0.9rem;">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="admin@gobrooklynplumber.com" value="<?php echo htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : ''); ?>" style="background-color: #ffffff; border-color: var(--border-light); color: var(--text-dark);">
            </div>
            
            <div class="form-group" style="margin-bottom: 28px;">
                <label for="password" style="font-weight: 700; color: var(--text-dark); margin-bottom: 6px; display: block; font-size: 0.9rem;">Password</label>
                <input type="password" name="password" id="password" class="form-control" required placeholder="••••••••" style="background-color: #ffffff; border-color: var(--border-light); color: var(--text-dark);">
            </div>
            
            <button type="submit" class="btn btn-schedule" style="width: 100%; padding: 14px; font-size: 0.95rem; font-weight: 700;"><i class="fa-solid fa-right-to-bracket" style="margin-right: 6px;"></i> Sign In</button>
        </form>
        
        <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--border-light); font-size: 0.82rem; color: var(--text-muted); line-height: 1.5;">
            <strong>Default Credentials:</strong><br>
            Email: <span style="font-family: monospace; color: var(--text-dark);">admin@gobrooklynplumber.com</span><br>
            Password: <span style="font-family: monospace; color: var(--text-dark);">admin</span>
        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
