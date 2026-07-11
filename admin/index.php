<?php
$path_prefix = '../';
$page_title = "Admin Dashboard | Go Brooklyn Plumber";
$page_desc = "Review quote requests and query submissions.";

require_once dirname(__DIR__) . '/admin/auth.php';
require_once dirname(__DIR__) . '/includes/db.php';
require_once dirname(__DIR__) . '/includes/header.php';

// Fetch quote requests
$requests = get_quote_requests();
?>

<section class="section-padding" style="margin-top: 20px; background-color: #ffffff; min-height: 600px; padding: 80px 0;">
    <div class="container">
        
        <!-- Dashboard Top Header Bar -->
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px; margin-bottom: 40px; border-bottom: 1px solid var(--border-light); padding-bottom: 24px;">
            <div>
                <span style="font-size: 0.85rem; font-weight: 800; text-transform: uppercase; color: var(--rr-red); letter-spacing: 1.5px;">Admin Control Panel</span>
                <h1 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--rr-blue); text-transform: uppercase; margin: 4px 0 0 0;">Customer Queries & Details</h1>
            </div>
            <div style="display: flex; gap: 12px; align-items: center;">
                <span style="font-size: 0.9rem; color: var(--text-muted);">Logged in as: <strong style="color: var(--text-dark);">admin</strong></span>
                <a href="logout.php" class="btn btn-call" style="background-color: var(--rr-red); padding: 10px 20px; font-size: 0.9rem; font-weight: 700; border-radius: 4px;"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a>
            </div>
        </div>

        <?php if ($db === null): ?>
            <!-- Connection warning -->
            <div style="background-color: rgba(239, 68, 68, 0.05); border: 2px dashed rgba(239, 68, 68, 0.25); border-radius: 8px; padding: 30px; text-align: center; margin-bottom: 40px;">
                <div style="font-size: 2.5rem; color: var(--rr-red); margin-bottom: 14px;"><i class="fa-solid fa-database"></i></div>
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 800; color: var(--rr-blue); text-transform: uppercase; margin-bottom: 8px;">MySQL Connection Required</h3>
                <p style="color: var(--text-muted); font-size: 0.98rem; max-width: 600px; margin: 0 auto 16px auto; line-height: 1.6;">The dashboard is configured to use MySQL, but we couldn't establish a connection. Please ensure MySQL is running and configure your credentials inside <strong style="color: var(--text-dark);">includes/db.php</strong>.</p>
                <div style="background-color: #f7f8fb; padding: 16px; border-radius: 6px; text-align: left; max-width: 500px; margin: 0 auto; border: 1px solid var(--border-light);">
                    <pre style="margin: 0; font-family: monospace; font-size: 0.85rem; color: var(--text-muted);">
CREATE DATABASE IF NOT EXISTS plumberservice_db;
USE plumberservice_db;

CREATE TABLE IF NOT EXISTS quote_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);</pre>
                </div>
            </div>
        <?php endif; ?>

        <!-- Queries Table -->
        <div class="reveal-fade-up" style="background-color: #ffffff; border: 1px solid var(--border-cream); border-radius: 8px; box-shadow: 0 4px 20px rgba(6, 18, 44, 0.03); overflow: hidden;">
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; min-width: 900px;">
                    <thead>
                        <tr style="background-color: var(--rr-blue); color: #ffffff; font-family: var(--font-heading); font-weight: 800; text-transform: uppercase; font-size: 0.82rem; letter-spacing: 0.05em; border-bottom: 2px solid rgba(0,0,0,0.15);">
                            <th style="padding: 18px 24px; width: 60px;">ID</th>
                            <th style="padding: 18px 24px; width: 180px;">User Details</th>
                            <th style="padding: 18px 24px; width: 220px;">Email</th>
                            <th style="padding: 18px 24px; width: 180px;">Requested Service</th>
                            <th style="padding: 18px 24px;">Query Details</th>
                            <th style="padding: 18px 24px; width: 150px;">Received At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($requests)): ?>
                            <tr>
                                <td colspan="6" style="padding: 60px 40px; text-align: center; color: var(--text-muted); font-style: italic;">
                                    <div style="font-size: 2.5rem; color: rgba(6,18,44,0.1); margin-bottom: 16px;"><i class="fa-solid fa-folder-open"></i></div>
                                    No submissions stored in the MySQL database yet.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($requests as $req): ?>
                                <tr style="border-bottom: 1px solid var(--border-light); transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#f7f8fb'" onmouseout="this.style.backgroundColor='transparent'">
                                    <td style="padding: 18px 24px; font-weight: 700; color: var(--rr-blue);"><?php echo htmlspecialchars($req['id']); ?></td>
                                    <td style="padding: 18px 24px;">
                                        <div style="font-weight: 700; color: var(--text-dark);"><?php echo htmlspecialchars($req['name']); ?></div>
                                        <span style="font-size: 0.75rem; color: var(--text-muted);">Customer</span>
                                    </td>
                                    <td style="padding: 18px 24px;"><a href="mailto:<?php echo htmlspecialchars($req['email']); ?>" style="color: var(--rr-red); font-weight: 700; text-decoration: none; border-bottom: 1px dashed var(--rr-red);"><?php echo htmlspecialchars($req['email']); ?></a></td>
                                    <td style="padding: 18px 24px;">
                                        <span style="background-color: var(--rr-light-blue); color: var(--rr-blue); padding: 5px 10px; border-radius: 4px; font-size: 0.78rem; font-weight: 800; text-transform: uppercase; border: 1px solid rgba(6, 18, 44, 0.08); display: inline-block;">
                                            <?php echo htmlspecialchars($req['subject'] ? $req['subject'] : 'Other'); ?>
                                        </span>
                                    </td>
                                    <td style="padding: 18px 24px; color: var(--text-muted); line-height: 1.5; word-wrap: break-word; white-space: pre-wrap;"><?php echo htmlspecialchars($req['message']); ?></td>
                                    <td style="padding: 18px 24px; color: var(--text-muted); font-size: 0.85rem;"><?php echo htmlspecialchars($req['created_at']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
