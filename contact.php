<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - FastLine</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header class="site-header">
        <h1>Contact FastLine</h1>
    </header>

    <main>
        <section class="container contact">
            <h2>Get in Touch</h2>
            <form id="contactForm" action="contact_handler.php" method="POST">
                <label>
                    Name
                    <input type="text" name="name" required />
                </label>
                <label>
                    Email
                    <input type="email" name="email" required />
                </label>
                <label>
                    Message
                    <textarea name="message" rows="4" required></textarea>
                </label>
                <div class="form-actions">
                    <button type="submit" class="btn">Send</button>
                    <span id="formMsg" class="form-msg" aria-live="polite"></span>
                </div>
            </form>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <small>© <span id="year"></span> FastLine</small>
        </div>
    </footer>
</body>
</html>