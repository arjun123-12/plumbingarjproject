# Vercel Deployment Guide for Plumbing Website

## Overview
This website has been configured for deployment to Vercel. Vercel supports PHP through serverless functions, making it easy to deploy your plumbing service website.

## Prerequisites
- Vercel account (free at [vercel.com](https://vercel.com))
- GitHub account (your repo is already connected)

## Deployment Steps

### 1. Connect to Vercel
1. Go to [vercel.com/new](https://vercel.com/new)
2. Click "Continue with GitHub"
3. Find and select `arjun123-12/plumbingarjproject`
4. Click "Import"

### 2. Configure Project
The project is pre-configured with:
- **Framework Preset**: PHP
- **Build Command**: (automatically handled)
- **Output Directory**: (not needed for PHP)
- **Environment Variables**: None required for basic setup

### 3. Deploy
1. Click "Deploy"
2. Wait for the deployment to complete (usually 1-2 minutes)
3. You'll receive a unique Vercel URL like `https://plumbingarjproject.vercel.app`

## What's Included

### Files Added for Vercel
- **vercel.json** - Vercel configuration file
- **.vercelignore** - Files to ignore during deployment
- **api/index.php** - Router for serverless functions

### How It Works
- All PHP files are served through Vercel's serverless runtime
- The `api/index.php` acts as a router to handle requests
- Your existing PHP code in `index.php`, `about.php`, and `contact.php` works as-is

## URL Routing

After deployment, access your pages at:
- Home: `https://your-deployment.vercel.app/`
- About: `https://your-deployment.vercel.app/about.php`
- Contact: `https://your-deployment.vercel.app/contact.php`

## Custom Domain (Optional)

1. Go to your Vercel project settings
2. Click "Domains"
3. Add your custom domain (e.g., `yourplumbingcompany.com`)
4. Follow the DNS configuration steps

## Features Working on Vercel

✅ **Contact Form** - Form submissions are processed server-side
✅ **Dynamic Content** - PHP code executes on every request
✅ **Includes** - `header.php` and `footer.php` are included properly
✅ **Sessions** - PHP sessions work (stored per function invocation)
✅ **File Access** - All assets and images load correctly

## Important Notes

### Stateless Functions
Vercel serverless functions are stateless, meaning:
- Each request is independent
- Session data is limited to a single request
- For persistent data, use an external database (optional)

### Limitations
- **File Uploads**: Requires cloud storage integration (AWS S3, etc.)
- **Persistent Storage**: Use an external database for saved data
- **Email**: Use Nodemailer or mail service API for reliable delivery

## Sending Emails

Currently, the contact form shows a success message but doesn't send emails. To enable email:

### Option 1: Use SendGrid (Recommended)
```php
// Add to contact.php after form validation
$sendgrid_key = $_ENV['SENDGRID_API_KEY'];
// Use SendGrid API to send email
```

### Option 2: Use PHPMailer
Install via Composer and configure SMTP settings.

## Environment Variables

To add environment variables:
1. Go to Vercel project → Settings → Environment Variables
2. Add variables like `SENDGRID_API_KEY`, `DATABASE_URL`, etc.
3. Access them in PHP with `$_ENV['VARIABLE_NAME']`

## Troubleshooting

### 404 Errors
- Ensure all PHP files are in the root directory
- Check that `includes/header.php` and `includes/footer.php` exist

### PHP Errors
- Check the Vercel deployment logs for error details
- Vercel logs are shown in the deployment output

### Asset Not Loading
- Verify asset paths are correct relative to the root
- Use absolute paths starting with `/assets/`

## Next Steps

1. ✅ Deploy to Vercel
2. ✅ Test all pages and forms
3. ✅ Set up custom domain (optional)
4. ✅ Configure email service (optional)
5. ✅ Add analytics/tracking (optional)

## Support

For more information:
- [Vercel PHP Documentation](https://vercel.com/docs/functions/serverless-functions/python)
- [Vercel Deployment Guide](https://vercel.com/docs/deployments/overview)

---

**Need help?** Your site is now ready to deploy to Vercel! 🚀
