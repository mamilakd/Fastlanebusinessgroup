<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fastlane — Business Solutions</title>
    <meta name="description" content="Accounting, tax, VAT and IT integration services for companies." />
    <meta name="theme-color" content="#0f172a" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="#">
            <img src="images/fast.jpg" alt="FastLane logo" class="brand-logo" loading="lazy" />
        </a>

        <button id="menuToggle" class="menu-toggle" aria-expanded="false" aria-controls="siteNav" aria-label="Toggle menu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav id="siteNav" class="nav" aria-label="Primary">
            <a href="#home" class="nav-link">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#service" class="nav-link">Services</a>
            <a href="#features" class="nav-link">Features</a>
            <a href="#contact" class="nav-link cta">Contact</a>
        </nav>
    </div>
</header>

<main>
    <section id="home" class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <h1>Fastlane Trading PLC</h1>
                <p class="lede">FastLane helps businesses of every size stay compliant and scale faster with automated accounting, Plastic Raw Materials Supply support, and Engineering.</p>
                <div class="hero-cta">
                    <a href="#service" class="btn">Our Services</a>
                    <a href="#contact" class="btn btn-outline">Get a Quote</a>
                </div>
                <ul class="trust">
                    <li><i class="fa-solid fa-check"></i> Trusted advisors</li>
                    <li><i class="fa-solid fa-shield-halved"></i> Compliance-first</li>
                    <li><i class="fa-solid fa-gear"></i> Seamless integrations</li>
                </ul>
            </div>
            <div class="hero-media" aria-hidden="true">
                <img src="images/office.jpg" alt="" loading="lazy" />
            </div>
        </div>
    </section>

    <section id="about" class="container about">
        <div class="card">
            <h2>About Fastlane</h2>
            <p>FastLane is a rapidly growing company with deep experience in distribution, engineering, raw materials, consulting, and manufacturing. We build strong, long‑term relationships with our clients to accelerate growth and deliver practical, scalable solutions that improve operations and expand market reach.</p>
            <div class="features-row">
                <div class="feature"><strong>Mission</strong>
                    <p>To deliver high‑quality products and services that meet our customers' expectations by using modern technology and skilled human resources. We provide the right products in the right quantity and quality at reasonable prices, expand availability globally, invest in existing and new markets to strengthen our market leadership, and commit to excellence at every stage of our work.</p>
                </div>
                <div class="feature"><strong>Vision</strong><p>Our vision is to become the preferred choice for customers and one of Ethiopia’s leading brands in the sectors we operate. We aim to satisfy customer needs with high-quality products and services, make our offerings available globally, deliver products and services in the best possible way, and provide all employees opportunities to develop their skills and continuously improve business processes.</p></div>
                <div class="feature"><strong>Values</strong><p>Integrity, partnership, and measurable impact.</p></div>
            </div>
        </div>
    </section>

    <section id="service" class="container services">
        <h2>Our Services</h2>
        <div class="service-grid">
            <article class="service-card">
                <i class="fa-solid fa-file-invoice-dollar icon"></i>
                <h3>Accounting</h3>
                <p>Bookkeeping, payroll, and management reporting to keep finances clear.</p>
            </article>
            <article class="service-card">
                <i class="fa-solid fa-boxes-stacked icon"></i>
                <h3>Plastic Raw Materials Supply</h3>
                <p>Reliable sourcing and supply of plastic resins and raw materials for manufacturing and distribution partners. Demo data and sample catalogue available on request.</p>
            </article>
            <article class="service-card">
                <i class="fa-solid fa-screwdriver-wrench icon"></i>
                <h3>Engineering</h3>
                <p>Engineering services including product design, process optimization, and technical support to enhance manufacturing efficiency and product quality.</p>
            </article>
        </div>
    </section>

    <section id="features" class="container features">
        <h2>Why clients choose Fastlane</h2>
        <div class="cards">
            <div class="card small">
                <h3>Responsive</h3>
                <p>Works seamlessly on mobile and desktop.</p>
            </div>
            <div class="card small">
                <h3>Lightweight</h3>
                <p>Minimal overhead, fast delivery.</p>
            </div>
            <div class="card small">
                <h3>Extensible</h3>
                <p>Easily add components and routes as needed.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="container contact">
        <div class="card contact-grid">
            <div>
                <h2>Contact Us</h2>
                <p>Send us a message and we'll get back within 1 business day.</p>
                <ul class="contact-info">
                    <li><i class="fa-solid fa-phone"></i> +251 91 234 5678</li>
                    <li><i class="fa-solid fa-envelope"></i> Fastlanebusinessgroup.com</li>
                </ul>
            </div>

            <form id="contactForm" method="post" action="src/contact_handler.php" novalidate>
                <label>
                    <span class="label-text">Name</span>
                    <input type="text" name="name" required />
                </label>
                <label>
                    <span class="label-text">Email</span>
                    <input type="email" name="email" required />
                </label>
                <label>
                    <span class="label-text">Message</span>
                    <textarea name="message" rows="5" required></textarea>
                </label>

                <div class="form-actions">
                    <button type="submit" class="btn">Send</button>
                    <div id="formMsg" class="form-msg" aria-live="polite">
                        <?php
                        if (isset($_GET['success'])) {
                            echo 'Message sent. Thank you.';
                        } elseif (isset($_GET['error'])) {
                            echo 'There was an error sending your message.';
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <small>© <span id="year"></span> FastLane — All rights reserved.</small>
        <nav class="foot-nav" aria-label="Footer">
            <a href="#about">About</a>
            <a href="#service">Services</a>
            <a href="#contact">Contact</a>
        </nav>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // year
    document.getElementById('year').textContent = new Date().getFullYear();

    // menu toggle
    const btn = document.getElementById('menuToggle');
    const nav = document.getElementById('siteNav');
    btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!expanded));
        nav.classList.toggle('open');
    });

    // progressive contact submit (AJAX fallback to normal submit)
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        const data = new FormData(form);
        const msg = document.getElementById('formMsg');
        msg.textContent = 'Sending…';
        try {
            const res = await fetch(form.action, { method: 'POST', body: data });
            if (res.ok) {
                msg.textContent = 'Message sent. Thank you.';
                form.reset();
            } else {
                msg.textContent = 'There was an error sending your message.';
            }
        } catch (err) {
            msg.textContent = 'Network error. Try again later.';
        }
    }, { passive: false });
});
</script>
</body>
</html>