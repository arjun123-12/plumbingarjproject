# ProServices - Premium PHP Template & Folder Structure

This repository contains a clean, modular, and responsive PHP multi-page folder structure designed for XAMPP/WAMP or production servers.

## Directory Structure

```
p-services/
├── assets/
│   ├── css/
│   │   └── style.css      # Premium stylesheet (dark mode theme, custom variables)
│   ├── js/
│   │   └── script.js     # Responsive navbar menu & intersection animation logic
│   └── images/            # Directory for local image assets
├── includes/
│   ├── config.php         # Application constants and global helper functions
│   ├── header.php         # Responsive global navbar header and SEO metadata
│   └── footer.php         # Modular footer, script loads, and branding links
├── index.php              # Main landing page featuring interactive KPI metrics
├── about.php              # About page displaying company vision & core values
├── contact.php            # Active server-side handled secure contact form
└── README.md              # Project documentation
```

## Features

- **Responsive Mobile Navigation**: Fully animated toggle burger menu with slide-in overlay.
- **Glassmorphic Hero Card**: Real-time mock performance metrics using inline CSS custom properties.
- **Animate-on-Scroll KPIs**: Interactive statistics counters that count up to targets as they enter the screen.
- **Server-Side Validation**: A secure contact form built in pure PHP which filters, validates emails, and reports validation errors directly without database dependencies.
- **State-of-the-Art Styling**: Pure custom CSS utilizing a dark space-inspired color scheme with blue and cyan HSL variables.

## Running Locally

1. Ensure you have Apache running via XAMPP, WAMP, or similar local web servers.
2. Put this project directory under your server's root (`htdocs` or `www`).
3. Open your browser and navigate to:
   ```
   http://localhost/img/p-services/
   ```
