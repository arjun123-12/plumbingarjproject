<?php
header("Content-Type: application/xml; charset=utf-8");

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = $protocol . $host . '/';

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo $base_url; ?></loc>
        <lastmod>2026-07-05</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>about.php</loc>
        <lastmod>2026-07-05</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>service.php</loc>
        <lastmod>2026-07-05</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>service/water-damage.php</loc>
        <lastmod>2026-07-05</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>service/drain-cleaning.php</loc>
        <lastmod>2026-07-05</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>service/emergency-plumbing.php</loc>
        <lastmod>2026-07-05</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>blog/</loc>
        <lastmod>2026-07-10</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc><?php echo $base_url; ?>blog/emergency-drain-cleaning-prevents-water-damage.php</loc>
        <lastmod>2026-07-10</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>blog/water-removal-services.php</loc>
        <lastmod>2026-07-10</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>blog/emergency-drain-service.php</loc>
        <lastmod>2026-07-10</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>reviews.php</loc>
        <lastmod>2026-07-05</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?php echo $base_url; ?>contact.php</loc>
        <lastmod>2026-07-05</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>
