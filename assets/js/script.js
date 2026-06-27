/**
 * ProServices Frontend Interaction Scripts
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const mobileToggle = document.getElementById('mobileToggle');
    const navbar = document.getElementById('navbar');

    if (mobileToggle && navbar) {
        mobileToggle.addEventListener('click', () => {
            mobileToggle.classList.toggle('active');
            navbar.classList.toggle('active');
        });

        // Close menu when links are clicked
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileToggle.classList.remove('active');
                navbar.classList.remove('active');
            });
        });
    }

    // 2. Dynamic Scroll Effect on Header
    const header = document.querySelector('.main-header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // 3. Stats Counter Animation (Intersection Observer)
    const stats = document.querySelectorAll('.stat-number');
    
    if (stats.length > 0) {
        const runCounter = (el) => {
            const target = +el.getAttribute('data-target');
            const count = +el.innerText.replace(/[^\d]/g, '');
            const speed = 200; // lower is faster
            const increment = target / speed;

            if (count < target) {
                const nextCount = Math.ceil(count + increment);
                // Check if target has a '+' or '%' in original text to preserve it
                const suffix = el.getAttribute('data-suffix') || '';
                el.innerText = nextCount + suffix;
                setTimeout(() => runCounter(el), 15);
            } else {
                const suffix = el.getAttribute('data-suffix') || '';
                el.innerText = target + suffix;
            }
        };

        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    runCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        stats.forEach(stat => observer.observe(stat));
    }

    // 4. Scroll Reveal Animations (Intersection Observer)
    const revealObserverOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -45px 0px'
    };
    
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-visible');
                observer.unobserve(entry.target);
            }
        });
    }, revealObserverOptions);
    
    const revealElements = document.querySelectorAll(
        '.reveal-fade-up, .reveal-fade-left, .reveal-fade-right, .reveal-scale-in'
    );
    revealElements.forEach(el => revealObserver.observe(el));
    
    // 5. Dynamic Staggered Animations for Grid Elements
    const staggerContainers = document.querySelectorAll('.grid-3, .grid-4, .versus-grid, .reviews-grid, .highlights-grid, .stats-grid');
    staggerContainers.forEach(container => {
        const children = container.children;
        Array.from(children).forEach((child, index) => {
            if (child.classList.contains('reveal-fade-up') || 
                child.classList.contains('reveal-scale-in') ||
                child.classList.contains('service-card') ||
                child.classList.contains('review-card') ||
                child.classList.contains('versus-item') ||
                child.classList.contains('stat-card') ||
                child.classList.contains('highlight-item') ||
                child.classList.contains('mid-highlight-col')) {
                
                if (!child.classList.contains('reveal-fade-up') && 
                    !child.classList.contains('reveal-scale-in') && 
                    !child.classList.contains('reveal-fade-left') && 
                    !child.classList.contains('reveal-fade-right')) {
                    child.classList.add('reveal-fade-up');
                }
                
                child.style.transitionDelay = `${(index + 1) * 0.12}s`;
                if (revealObserver) {
                    revealObserver.observe(child);
                }
            }
        });
    });

    // 6. Dynamic Animation Classes for Service Pages
    const heroInfoCol = document.querySelector('.hero-info-col');
    if (heroInfoCol) {
        heroInfoCol.classList.add('reveal-fade-left');
        if (revealObserver) { revealObserver.observe(heroInfoCol); }
    }
    const heroMediaCol = document.querySelector('.hero-media-col');
    if (heroMediaCol) {
        heroMediaCol.classList.add('reveal-fade-right');
        if (revealObserver) { revealObserver.observe(heroMediaCol); }
    }
    const videoColumn = document.querySelector('.video-column');
    if (videoColumn) {
        videoColumn.classList.add('reveal-fade-left');
        if (revealObserver) { revealObserver.observe(videoColumn); }
    }
    const diffContent = document.querySelector('.difference-content');
    if (diffContent) {
        diffContent.classList.add('reveal-fade-right');
        if (revealObserver) { revealObserver.observe(diffContent); }
    }
    const versusCard = document.querySelector('.versus-card');
    if (versusCard) {
        versusCard.classList.add('reveal-scale-in');
        if (revealObserver) { revealObserver.observe(versusCard); }
    }
});
