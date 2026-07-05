<?php 
// Include blog data
require_once __DIR__ . '/includes/blog-data.php';

// Get and validate post ID
$post_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!isset($blog_posts[$post_id])) {
    // Redirect to main blog page if post not found
    header("Location: blog.php");
    exit;
}

$post = $blog_posts[$post_id];

$path_prefix = '';
$page_title = $post['title'];
$page_desc = $post['summary'];

// Construct Dynamic JSON-LD Schema
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = $protocol . $host . '/';

$page_schema = json_encode([
  "@context" => "https://schema.org",
  "@type" => "BlogPosting",
  "mainEntityOfPage" => [
    "@type" => "WebPage",
    "@id" => $base_url . "blog-details.php?id=" . $post['id']
  ],
  "headline" => $post['title'],
  "description" => $post['summary'],
  "image" => $base_url . $post['image'],
  "datePublished" => date('Y-m-d', strtotime($post['date'])),
  "author" => [
    "@type" => "Person",
    "name" => $post['author']
  ],
  "publisher" => [
    "@type" => "Organization",
    "name" => "Roto-Rooter Plumbing (New York)",
    "logo" => [
      "@type" => "ImageObject",
      "url" => $base_url . "assets/images/roto_plumber.png"
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

require_once __DIR__ . '/includes/header.php'; 
?>

<!-- Article Wrapper Section -->
<section class="section-padding" style="background-color: #ffffff; padding: 60px 0;">
    <div class="container">
        
        <!-- Breadcrumbs -->
        <div class="breadcrumbs" style="margin-bottom: 40px; font-size: 0.9rem; font-weight: 700; text-transform: uppercase; color: var(--text-muted); display: flex; gap: 8px; flex-wrap: wrap;">
            <a href="index.php" style="color: var(--text-muted);">Home</a>
            <span>/</span>
            <a href="blog.php" style="color: var(--text-muted);">Blog</a>
            <span>/</span>
            <span class="active" style="color: var(--rr-red);"><?php echo htmlspecialchars($post['title']); ?></span>
        </div>

        <div class="contact-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 48px; align-items: start;">
            
            <!-- Main Content Area -->
            <article class="reveal-fade-left">
                <!-- Cover Image -->
                <div style="width:100%; height:400px; border-radius:8px; overflow:hidden; margin-bottom:32px; background-color:#eee; border: 1px solid var(--border-light);">
                    <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" style="width:100%; height:100%; object-fit:cover;">
                </div>

                <header style="margin-bottom:32px;">
                    <div style="font-size:0.9rem; color:var(--rr-red); font-weight:800; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:12px;">
                        Published <?php echo $post['date']; ?> &bull; Written by <?php echo $post['author']; ?>
                    </div>
                    <h1 style="font-family:var(--font-heading); font-size:2.8rem; line-height:1.2; font-weight:900; color:var(--rr-blue); text-transform:uppercase; margin:0 0 16px 0;"><?php echo $post['title']; ?></h1>
                    <div style="width:60px; height:4px; background-color:var(--rr-red); border-radius:2px;"></div>
                </header>

                <!-- Article Body -->
                <div class="article-body-text" style="color:var(--text-muted); font-size:1.05rem; line-height:1.8; font-family:var(--font-body);">
                    <?php foreach ($post['paragraphs'] as $p): ?>
                        <p style="margin-bottom:24px; text-align:justify;"><?php echo $p; ?></p>
                    <?php endforeach; ?>
                </div>

                <div style="margin-top:48px; padding-top:32px; border-top:1px solid var(--border-light);">
                    <a href="blog.php" class="btn btn-schedule" style="padding: 12px 24px;"><i class="fa-solid fa-arrow-left"></i> Back to Blog List</a>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="reveal-fade-right" style="display:flex; flex-direction:column; gap:32px;">
                
                <!-- Callout Box -->
                <div class="trust-metrics-card" style="flex-direction:column; padding:32px 24px; align-items:stretch; border:1px solid var(--border-light); background-color:var(--bg-card-hover); border-radius:8px; gap:20px;">
                    <h3 style="font-family:var(--font-heading); font-size:1.3rem; font-weight:900; color:var(--rr-blue); text-transform:uppercase; margin:0; line-height:1.3;">Have a Plumbing Emergency?</h3>
                    <p style="font-size:0.9rem; line-height:1.6; color:var(--text-muted); margin:0;">Don't let small leaks turn into structural disasters. Our NYC crews are ready 24/7 to help resolve your pipe blockages or flooding issues.</p>
                    <div style="border-top:1px solid var(--border-light); margin:5px 0;"></div>
                    <a href="contact.php" class="btn btn-schedule" style="width:100%; text-align:center; padding:12px; font-size:0.85rem;"><i class="fa-regular fa-calendar-days"></i> Book Repair Online</a>
                    <a href="tel:212-687-1726" class="btn btn-call" style="width:100%; text-align:center; padding:12px; font-size:0.85rem; background-color:var(--rr-blue);"><i class="fa-solid fa-phone"></i> Call 212-687-1726</a>
                </div>

                <!-- Recent Posts -->
                <div style="border:1px solid var(--border-light); padding:32px 24px; border-radius:8px; background-color:#ffffff;">
                    <h3 style="font-family:var(--font-heading); font-size:1.2rem; font-weight:900; color:var(--rr-blue); text-transform:uppercase; margin:0 0 20px 0; border-bottom:2px solid var(--rr-red); padding-bottom:8px; display:inline-block;">Other Helpful Guides</h3>
                    <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:20px;">
                        <?php 
                        foreach ($blog_posts as $other_post): 
                            if ($other_post['id'] !== $post['id']):
                        ?>
                        <li>
                            <h4 style="font-family:var(--font-heading); font-size:0.95rem; font-weight:800; margin:0 0 4px 0; line-height:1.4;">
                                <a href="blog-details.php?id=<?php echo $other_post['id']; ?>" style="color:var(--rr-blue); hover:color:var(--rr-red);"><?php echo htmlspecialchars($other_post['title']); ?></a>
                            </h4>
                            <span style="font-size:0.75rem; color:var(--text-muted);"><?php echo $other_post['date']; ?></span>
                        </li>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </ul>
                </div>

            </aside>

        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
