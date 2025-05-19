<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Improved viewport for better mobile scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Documentation Tracking System</title>
    <!-- Google Fonts: Montserrat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #800000;
            --secondary: #fdb913;
            --background: #f5f6fa;
            --text: #222;
            --footer-bg: #222;
            --footer-text: #fff;
        }
        html, body {
            height: 100%;
            width: 100%;
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: var(--background);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-image: url('https://iuea.ac.ug/Blog/wp-content/uploads/2024/07/Untitled-design-2024-07-11T144252.799-1.png');
            background-repeat: no-repeat; /* Prevent background from repeating */
            background-size: cover;       /* Make background cover the whole area */
            background-position: center;  /* Center the background image */
            position: relative;
            overflow-x: hidden;
        }
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: inherit;
            background-image: inherit;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            filter: blur(5px);
            z-index: 0;
            pointer-events: none;
        }
        body > * {
            position: relative;
            z-index: 1;
        }
        nav {
            background: var(--primary);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.3rem 0.7rem; /* Reduced padding */
            width: 100%;
            box-sizing: border-box;
            min-height: 48px; /* Adjusted nav bar height */
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
        }
        .nav-container {
            width: 100%;
            max-width: 1100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }
        .nav-logo {
            font-size: 1.1rem; /* Slightly smaller */
            font-weight: 700;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            margin-right: auto;
        }
        .nav-logo img {
            height: 28px; /* Smaller logo */
            width: auto;
            margin-right: 6px;
        }
        .nav-links {
            display: flex;
            gap: 1.1rem; /* Slightly reduced gap */
            transition: max-height 0.3s;
            margin-left: auto;
        }
        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: color 0.2s;
            padding: 0.3rem 0.7rem;
            border-radius: 4px;
        }
        .nav-links a:hover, .nav-links a:focus {
            color: var(--secondary);
            background: rgba(255,255,255,0.07);
            outline: none;
        }
        .nav-toggle {
            display: none;
            flex-direction: column;
            justify-content: center;
            width: 36px;
            height: 36px;
            cursor: pointer;
            margin-left: 1rem;
        }
        .nav-toggle span {
            height: 4px;
            width: 100%;
            background: #fff;
            margin: 5px 0;
            border-radius: 2px;
            transition: 0.3s;
            display: block;
        }
        .nav-close-btn {
            display: none;
            background: transparent;
            border: none;
            color: #800000;
            font-size: 2rem;
            position: absolute;
            top: 10px;
            right: 18px;
            z-index: 10001;
            cursor: pointer;
        }
        header {
            background:#800000;color:#fff;padding:3.5rem 1rem 2.5rem 1rem;text-align:center;box-shadow:0 2px 16px #0001;
            margin-top:48px;
        }
        @media (max-width: 1100px) {
            .nav-container {
                max-width: 100%;
                padding: 0 10px;
            }
            .features {
                max-width: 100%;
            }
            section[id] {
                max-width: 100%;
            }
        }
        @media (max-width: 900px) {
            .features {
                max-width: 100%;
                gap: 1.5rem;
            }
            .feature-card {
                max-width: 45%;
                min-width: 180px;
            }
            section[id] {
                padding: 1.5rem 1rem 1.5rem 1rem;
            }
        }
        @media (max-width: 700px) {
            header {margin-top:56px;}
            header h1 {
                font-size: 1.6rem;
            }
            .features {
                flex-direction: column;
                gap: 1.2rem;
                align-items: center;
            }
            .feature-card {
                max-width: 100%;
            }
            .nav-container {
                flex-direction: row;
                align-items: center;
                gap: 0.7rem;
                position: relative;
            }
            .nav-logo {
                margin-right: auto;
            }
            .nav-toggle {
                display: flex;
                z-index: 1002; /* Ensure toggle is above nav-links */
            }
            .nav-links {
                flex-direction: column;
                gap: 0.5rem;
                width: 100vw;
                background: #fff;
                position: fixed; /* Change from absolute to fixed */
                top: 0;
                left: 0;
                height: auto;
                display: none;    /* Hide by default */
                border-radius: 0 0 8px 8px;
                box-shadow: 0 4px 16px rgba(0,0,0,0.12);
                padding: 1.2rem 1rem 1rem 1rem;
                transition: transform 0.3s, box-shadow 0.3s;
                z-index: 3000;
            }
            .nav-links.open {
                display: flex;    /* Show when open */
                transform: translateY(0);
                box-shadow: 0 4px 16px rgba(0,0,0,0.18);
            }
            .nav-links:not(.open) {
                transform: translateY(-100%);
            }
            /* When nav is open, push header down using a class on body */
            body.nav-open header {
                margin-top: 180px; /* Adjust this value if you change nav-links height */
                transition: margin-top 0.3s;
            }
            body:not(.nav-open) header {
                margin-top: 0;
                transition: margin-top 0.3s;
            }
            .nav-links {
                flex-direction: column;
                gap: 0.5rem;
                width: 100vw;
                background: #fff;
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                display: none;
                border-radius: 0 0 8px 8px;
                box-shadow: 0 4px 16px rgba(0,0,0,0.12);
                padding: 3.5rem 1rem 1rem 1rem;
                transition: transform 0.3s, box-shadow 0.3s;
                z-index: 10000;
                align-items: flex-start;
            }
            .nav-links.open {
                display: flex;
                transform: translateY(0);
                box-shadow: 0 4px 16px rgba(0,0,0,0.18);
            }
            .nav-toggle {
                display: flex;
                z-index: 10002;
            }
            .nav-close-btn {
                display: block;
            }
        }
        @media (max-width: 500px) {
            .feature-card {
                padding: 1rem 0.5rem;
                font-size: 0.95rem;
            }
            header p {
                font-size: 1rem;
            }
            .nav-logo img {
                height: 24px;
            }
            .feature-card img {
                width: 40px;
                height: 40px;
            }
            .nav-links {
                width: 100vw;
                padding-top: 3.5rem;
            }
            section[id] {
                padding: 1rem 0.5rem;
            }
        }
        @media (max-width: 400px) {
            header h1 {
                font-size: 1.1rem;
            }
            .feature-card {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <nav style="background:#fff;box-shadow:0 2px 8px rgba(0,0,0,0.07);padding:0;">
        <div class="nav-container" style="max-width:1200px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;">
            <div class="nav-logo" style="margin:0;">
                <a href="index.html" style="display:flex;align-items:center;text-decoration:none;">
                    <img src="https://i1.wp.com/www.eafinder.com/ug/wp-content/uploads/sites/7/2018/12/38839992_2052582178105456_8145279574192685056_n-2.jpg?fit=957%2C959&ssl=1" alt="IUEA Logo" style="height:38px;width:auto;margin-right:10px;">
                    <span style="color:#800000;font-size:1.3rem;font-weight:700;letter-spacing:1px;">DocTrack</span>
                </a>
            </div>
            <div style="display:flex;align-items:center;">
                <div class="nav-toggle" id="navToggle" aria-label="Toggle navigation" tabindex="0">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <button class="nav-close-btn" id="navCloseBtn" title="Close Menu">&times;</button>
                <div class="nav-links" id="navLinks" style="background:#fff;">
                    <a href="#home" style="color:#800000;">Home</a>
                    <a href="#about" style="color:#800000;">About</a>
                    <a href="#features" style="color:#800000;">Features</a>
                    <a href="#contact" style="color:#800000;">Contact</a>
                    <a href="/login" style="color:#800000;">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <header style="background:#800000;color:#fff;padding:3.5rem 1rem 2.5rem 1rem;text-align:center;box-shadow:0 2px 16px #0001;">
        <div style="max-width:900px;margin:0 auto;">
            <h1 style="margin:0;font-size:2.8rem;font-weight:700;letter-spacing:1px;">Documentation Tracking System</h1>
            <p style="margin:1.2rem 0 0 0;font-size:1.3rem;font-weight:400;">Efficiently manage, track, and access your documents anytime, anywhere.</p>
        </div>
    </header>
    <main style="background:rgba(255,255,255,0.92);min-height:70vh;flex:1 0 auto;">
        <section id="home" style="width:100vw;max-width:none;margin:0;padding:0;border-radius:0;box-shadow:none;background:none;position:relative;overflow:hidden;">
            <div style="position:relative;min-height:420px;width:100vw;display:flex;align-items:center;justify-content:center;">
                <!-- Blurred and darkened background image -->
                <div id="welcome-bg-img" style="position:absolute;top:0;left:0;width:100vw;height:100%;z-index:0;overflow:hidden;">
                    <img id="welcome-bg-img-el"
                         src="https://media.licdn.com/dms/image/C5612AQEWmEHd4EmVUw/article-cover_image-shrink_720_1280/0/1583838339576?e=2147483647&v=beta&t=SxPN47m2wOzDKVYkIJndW4nVchlftMRj2dNeK2RYHjM"
                         alt="DTS Illustration Background"
                         style="width:100vw;height:100%;object-fit:cover;filter:blur(3px) brightness(0.65);transition:opacity 0.7s, transform 0.7s;">
                </div>
                <!-- Overlay for better text readability -->
                <div style="position:absolute;top:0;left:0;width:100vw;height:100%;background:rgba(0,0,0,0.25);z-index:1;"></div>
                <!-- Welcome content, text only -->
                <div style="position:relative;z-index:2;max-width:1200px;width:100%;display:flex;align-items:center;justify-content:center;padding:4.5rem 2rem;gap:3rem;">
                    <div style="flex:1;min-width:320px;text-align:left;">
                        <h2 style="color:var(--primary);margin-bottom:1.2rem;font-size:2.7rem;">Welcome</h2>
                        <p style="font-size:1.35rem;line-height:1.7;margin-bottom:1.5rem;color:#fff;text-shadow:0 2px 8px #0008;">
                            Welcome to the Documentation Tracking System (DTS). This platform is designed to help organizations efficiently manage, track, and access documents. With DTS, you can upload, assign, and monitor documents, ensuring transparency and accountability across departments. The system is secure, user-friendly, and accessible from any device, making document management seamless and reliable for all users.
                        </p>
                        <a href="#about" style="color:#fff;background:var(--primary);padding:0.9rem 2.5rem;border-radius:6px;font-weight:bold;text-decoration:none;display:inline-block;font-size:1.2rem;">Learn more about DTS &rarr;</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" style="width:100vw;max-width:none;margin:0;padding:0;border-radius:0;box-shadow:none;background:none;position:relative;overflow:hidden;">
            <div style="position:relative;min-height:420px;width:100vw;display:flex;align-items:center;gap:2.5rem;justify-content:center;">
                <!-- Blurred and darkened background image for about section -->
                <div id="about-bg-img" style="position:absolute;top:0;left:0;width:100vw;height:100%;z-index:0;overflow:hidden;">
                    <img src="https://bcbs.asia.canon/media/ndzjdcvs/document-and-information-security-og-image.png"
                         alt="About DTS Background"
                         style="width:100vw;height:100%;object-fit:cover;filter:blur(3px) brightness(0.65);">
                </div>
                <!-- Overlay for better text readability -->
                <div style="position:absolute;top:0;left:0;width:100vw;height:100%;background:rgba(0,0,0,0.25);z-index:1;"></div>
                <!-- About content -->
                <div style="position:relative;z-index:2;display:flex;flex:1;align-items:center;gap:2.5rem;padding:2.5rem 2rem 2rem 2rem;max-width:1200px;margin:0 auto;">
                    <div style="flex:2 1 400px;min-width:260px;">
                        <h2 style="color:var(--primary);margin-bottom:1rem;font-size:2.1rem;">About</h2>
                        <p style="font-size:1.15rem;line-height:1.7;color:#fff;text-shadow:0 2px 8px #0008;">
                            The Documentation Tracking System is built to address the challenges of document management in modern organizations. It supports role-based access for administrators, clerks, and reviewers, and maintains a complete audit trail for every document. DTS is scalable, secure, and integrates with email/SMS gateways for notifications. Whether you are a project manager, system administrator, or end user, DTS streamlines your workflow and enhances productivity.
                        </p>
                        <p>
                            <a href="#features" style="color:var(--primary);font-weight:bold;text-decoration:underline;">Explore Features &rarr;</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="features" style="position:relative;overflow:hidden;width:100vw;max-width:none;margin:2.5rem 0 2rem 0;border-radius:1.2rem;box-shadow:0 2px 16px #0001;background:#6a6a6a;padding:1.5rem 0 1.5rem 0;">
            <div style="font-size:2.1rem;color:var(--primary);font-weight:700;margin-bottom:1rem;text-align:center;">Features</div>
            <div style="display:flex;flex-wrap:wrap;gap:1.2rem;justify-content:center;">
                <div class="feature-card" id="feature-card-centralized-storage" style="max-width:260px;min-width:180px;padding:1.2rem 0.7rem;">
                    <img src="https://servermall.com/upload/medialibrary/8a1/pf7lz19wfcssds6egc09015oaklc06xl/server-virtualization-4.jpg" alt="Centralized Storage" style="margin-bottom:0.7rem;width:38px;height:38px;">
                    <h3 style="font-size:1.05rem;margin-bottom:0.5rem;">Centralized Storage</h3>
                    <p style="font-size:0.97rem;">
                        All your documents are stored in one secure, organized platform. This ensures easy management, prevents loss, and allows authorized users to access documents from anywhere at any time. Centralized storage also supports backup and audit trails for compliance and security.
                    </p>
                </div>
                <div class="feature-card" id="feature-card-real-time-tracking" style="max-width:260px;min-width:180px;padding:1.2rem 0.7rem;">
                    <img src="https://spng.pngfind.com/pngs/s/437-4378486_flowcontrol-real-time-monitoring-icon-in-circle-hd.png" alt="Real-time Tracking" style="margin-bottom:0.7rem;width:38px;height:38px;">
                    <h3 style="font-size:1.05rem;margin-bottom:0.5rem;">Real-time Tracking</h3>
                    <p style="font-size:0.97rem;">
                        Instantly monitor the status and movement of every document. Real-time tracking provides up-to-date information on who accessed or modified a document, its current location or owner, and its status (pending, under review, approved, etc.), ensuring transparency and accountability.
                    </p>
                </div>
                <div class="feature-card" id="feature-card-easy-access" style="max-width:260px;min-width:180px;padding:1.2rem 0.7rem;">
                    <img src="https://www.pngkey.com/png/detail/272-2721681_the-new-soluscope-sprint-is-faster-than-ever.png" alt="Easy Access" style="margin-bottom:0.7rem;width:38px;height:38px;">
                    <h3 style="font-size:1.05rem;margin-bottom:0.5rem;">Easy Access</h3>
                    <p style="font-size:0.97rem;">
                        Retrieve and share documents with just a few clicks. The system is designed for intuitive navigation and powerful search, allowing users to quickly find, download, or share documents based on title, date, status, or department, improving productivity and collaboration.
                    </p>
                </div>
            </div>
        </section>
        <section id="contact" style="width:100vw;max-width:none;margin:0;padding:0;border-radius:0;box-shadow:none;background:none;position:relative;overflow:hidden;">
            <div style="position:relative;min-height:420px;width:100vw;display:flex;align-items:center;gap:2.5rem;justify-content:center;">
                <!-- Blurred and darkened background image for contact section -->
                <div id="contact-bg-img" style="position:absolute;top:0;left:0;width:100vw;height:100%;z-index:0;overflow:hidden;">
                    <img src="https://toptecviews.com/wp-content/uploads/2023/04/The-positive-impact-of-technology.jpg"
                         alt="Contact Background"
                         style="width:100vw;height:100%;object-fit:cover;filter:blur(3px) brightness(0.65);">
                </div>
                <!-- Overlay for better text readability -->
                <div style="position:absolute;top:0;left:0;width:100vw;height:100%;background:rgba(0,0,0,0.25);z-index:1;"></div>
                <!-- Contact content -->
                <div style="position:relative;z-index:2;display:flex;flex:1;align-items:center;gap:2.5rem;padding:2.5rem 2rem 2rem 2rem;max-width:1100px;margin:0 auto;">
                    <div style="flex:1 1 320px;min-width:220px;text-align:center;">
                        <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Contact" style="max-width:120px;width:100%;border-radius:1rem;box-shadow:0 2px 12px #0002;">
                    </div>
                    <div style="flex:2 1 400px;min-width:260px;">
                        <h2 style="color:var(--primary);margin-bottom:1rem;font-size:2.1rem;">Contact</h2>
                        <p style="font-size:1.15rem;line-height:1.7;color:#fff;text-shadow:0 2px 8px #0008;">
                            Need help or have questions? Reach out to our support team for assistance with your account, document management, or technical issues. You can contact us via email, phone, or the contact form below. We are committed to providing prompt and helpful support to all users.
                        </p>
                        <form style="margin-top:1.5rem;">
                            <input type="text" placeholder="Your Name" required style="width:100%;padding:0.7rem;margin-bottom:1rem;border-radius:6px;border:1px solid #ccc;">
                            <input type="email" placeholder="Your Email" required style="width:100%;padding:0.7rem;margin-bottom:1rem;border-radius:6px;border:1px solid #ccc;">
                            <textarea placeholder="Your Message" required style="width:100%;padding:0.7rem;margin-bottom:1rem;border-radius:6px;border:1px solid #ccc;min-height:100px;"></textarea>
                            <button type="submit" style="background:var(--primary);color:#fff;padding:0.7rem 2rem;border:none;border-radius:6px;font-size:1rem;cursor:pointer;">Send Message</button>
                        </form>
                        <p style="margin-top:1.5rem;">
                            <a href="#login" style="color:var(--primary);font-weight:bold;text-decoration:underline;">Go to Login &rarr;</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="login" style="width:100vw;max-width:none;margin:2.5rem 0 2rem 0;padding:2.5rem 2rem 2rem 2rem;border-radius:1.2rem;box-shadow:0 2px 16px #0001;background:#fff;text-align:center;transition:background 1.2s;">
            <img src="https://static.vecteezy.com/system/resources/previews/022/123/337/original/user-icon-profile-icon-account-icon-login-sign-line-vector.jpg" alt="Login Icon" style="width:90px;height:90px;margin-bottom:0.7rem;border-radius:50%;box-shadow:0 2px 12px #0003;">
            <div style="font-size:2.1rem;color:var(--primary);font-weight:700;margin-bottom:1rem;">Login</div>
            <p style="font-size:1.15rem;line-height:1.7;color:#444;">
                Access your personalized dashboard by logging in. The login page is secure and supports different user roles (Admin, Clerk, Reviewer). Once logged in, you can upload documents, track their status, assign them to departments, and generate reports. If you don't have an account, please contact your administrator.
            </p>
            <a href="/login" style="color:#fff;background:var(--primary);padding:0.7rem 2.2rem;border-radius:6px;font-weight:bold;text-decoration:none;display:inline-block;margin-top:1.2rem;font-size:1.1rem;">Proceed to Login &rarr;</a>
        </section>
    </main>
    <footer style="background:#3f3f3f;color:#fff;text-align:center;padding:2rem 0 1rem 0;font-size:1rem;letter-spacing:0.5px; width:100%; flex-shrink:0;">
        <div style="max-width:1200px;margin:0 auto;">
            <div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <img src="https://i1.wp.com/www.eafinder.com/ug/wp-content/uploads/sites/7/2018/12/38839992_2052582178105456_8145279574192685056_n-2.jpg?fit=957%2C959&ssl=1" alt="IUEA Logo" style="height:32px;width:auto;">
                    <span style="font-weight:700;font-size:1.1rem;">IUEA Documentation Tracking System</span>
                </div>
                <div id="footer-social" style="margin-top:0;display:flex;gap:16px;">
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                        <img src="https://photos5.appleinsider.com/gallery/52265-104018-Facebook-xl.jpg" alt="Facebook" class="footer-icon" style="height:24px;width:24px;">
                    </a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                        <img src="https://seekvectors.com/storage/images/new-twitter-logo.svg" alt="Twitter" class="footer-icon" style="height:24px;width:24px;">
                    </a>
                    <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                        <img src="https://freepngimg.com/download/logo/69768-logo-computer-layout-instagram-icons-png-file-hd.png" alt="Instagram" class="footer-icon" style="height:24px;width:24px;">
                    </a>
                    <a href="https://youtube.com" target="_blank" aria-label="YouTube">
                        <img src="https://static.vecteezy.com/system/resources/previews/045/872/270/large_2x/youtube-transparent-logo-youtube-logo-transparent-background-free-png.png" alt="YouTube" class="footer-icon" style="height:24px;width:24px;">
                    </a>
                    <a href="https://wa.me/256705722300" target="_blank" aria-label="WhatsApp">
                        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" class="footer-icon" style="height:24px;width:24px;">
                    </a>
                    <a href="mailto:info@iuea.ac.ug" aria-label="Email">
                        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" class="footer-icon" style="height:24px;width:24px;">
                    </a>
                </div>
            </div>
            <div style="margin-top:1.2rem;display:flex;flex-wrap:wrap;gap:2.5rem;justify-content:space-between;text-align:left;">
                <!-- Address -->
                <div style="flex:1 1 260px;min-width:220px;max-width:420px;display:flex;align-items:flex-start;gap:10px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Location" style="height:22px;width:22px;margin-top:2px;">
                    <span>
                        <strong>Address:</strong><br>
                        Plot No. 1112/1121, Kansanga Ggaba Rd,<br>
                        P.O.Box 35502, Kampala, Uganda
                    </span>
                </div>
                <!-- Contact Info -->
                <div style="flex:1 1 260px;min-width:220px;max-width:420px;display:flex;flex-direction:column;gap:0.3rem;">
                    <span>
                        <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Phone" style="height:18px;width:18px;vertical-align:middle;margin-right:4px;">
                        <strong>Toll-Free:</strong> 800 335 335
                    </span>
                    <span>
                        <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Mobile" style="height:18px;width:18px;vertical-align:middle;margin-right:4px;">
                        <strong>Mobile & WhatsApp:</strong> (+256) 705 722 300
                    </span>
                    <span>
                        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" style="height:18px;width:18px;vertical-align:middle;margin-right:4px;">
                        <strong>Email:</strong> <a href="mailto:info@iuea.ac.ug" style="color:#fff;text-decoration:underline;">info@iuea.ac.ug</a>
                    </span>
                    <span>
                        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" style="height:18px;width:18px;vertical-align:middle;margin-right:4px;">
                        <strong>Apply:</strong> <a href="mailto:apply@iuea.ac.ug" style="color:#fff;text-decoration:underline;">apply@iuea.ac.ug</a>
                    </span>
                </div>
                <!-- Working Hours -->
                <div style="flex:1 1 180px;min-width:180px;max-width:220px;display:flex;align-items:center;gap:8px;">
                    <img src="https://icon-library.com/images/time-icon-png/time-icon-png-15.jpg" alt="Clock" style="height:18px;width:18px;">
                    <span><strong>Hours:</strong> 8.00 AM – 5.00 PM</span>
                </div>
            </div>
            <div style="margin-top:1.2rem;font-size:0.95rem;text-align:center;">
                &copy; 2024 IUEA Documentation Tracking System. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- AI Chat Widget -->
    <div id="ai-chat-widget" style="position:fixed;bottom:24px;right:24px;z-index:9999;">
        <div id="ai-chat-toggle" style="background:#800000;color:#fff;padding:0.7rem 1.2rem;border-radius:24px 24px 0 0;cursor:pointer;box-shadow:0 2px 8px #0003;font-weight:bold;letter-spacing:1px;">
            AI Chat
        </div>
        <div id="ai-chat-box" style="display:none;width:320px;max-width:90vw;background:#fff;border-radius:12px 12px 8px 8px;box-shadow:0 4px 24px #0004;overflow:hidden;position:relative;">
            <div style="background:#800000;color:#fff;padding:0.7rem 1rem;font-weight:bold;display:flex;align-items:center;justify-content:space-between;">
                <span>AI Chat Assistant</span>
                <button id="ai-chat-close" title="Close" style="background:none;border:none;color:#fff;font-size:1.3rem;cursor:pointer;padding:0 0.4rem 0 0.7rem;line-height:1;">&times;</button>
            </div>
            <div id="ai-chat-messages" style="height:220px;overflow-y:auto;padding:1rem;background:#faf9f7;font-size:0.97rem;"></div>
            <form id="ai-chat-form" style="display:flex;gap:0.5rem;padding:0.7rem 1rem 1rem 1rem;background:#faf9f7;">
                <input id="ai-chat-input" type="text" placeholder="Type your message..." autocomplete="off" style="flex:1;padding:0.5rem 0.8rem;border-radius:6px;border:1px solid #ccc;font-size:1rem;">
                <button type="submit" style="background:#800000;color:#fff;border:none;border-radius:6px;padding:0 1rem;font-size:1.1rem;cursor:pointer;">Send</button>
            </form>
        </div>
    </div>
    <script>
    // Hamburger menu toggle
    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');
    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('open');
        if (window.innerWidth <= 700) {
            document.body.classList.toggle('nav-open', navLinks.class.contains('open'));
            // Dynamically set margin-top on header based on nav height
            if (navLinks.classList.contains('open')) {
                document.querySelector('header').style.marginTop = navLinks.offsetHeight + 'px';
            } else {
                document.querySelector('header').style.marginTop = '';
            }
        }
    });
    navToggle.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
            navLinks.classList.toggle('open');
            if (window.innerWidth <= 700) {
                document.body.classList.toggle('nav-open', navLinks.classList.contains('open'));
                if (navLinks.classList.contains('open')) {
                    document.querySelector('header').style.marginTop = navLinks.offsetHeight + 'px';
                } else {
                    document.querySelector('header').style.marginTop = '';
                }
            }
        }
    });

    // Close nav menu on link click (mobile UX)
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 700) {
                navLinks.classList.remove('open');
                document.body.classList.remove('nav-open');
                document.querySelector('header').style.marginTop = '';
            }
        });
    });

    // Feature card hover effect
    document.querySelectorAll('.feature-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.boxShadow = '0 6px 24px rgba(78,10,33,0.18)';
            card.style.transform = 'translateY(-6px) scale(1.03)';
            card.style.transition = 'box-shadow 0.25s, transform 0.25s';
        });
        card.addEventListener('mouseleave', () => {
            card.style.boxShadow = '0 2px 12px rgba(0,0,0,0.06)';
            card.style.transform = 'none';
        });
    });

    // Footer social icon hover effect
    document.querySelectorAll('.footer-icon').forEach(icon => {
        icon.addEventListener('mouseenter', () => {
            icon.style.transform = 'scale(1.25) rotate(-8deg)';
            icon.style.transition = 'transform 0.2s';
            icon.style.filter = 'brightness(1.2) drop-shadow(0 2px 8px #0002)';
        });
        icon.addEventListener('mouseleave', () => {
            icon.style.transform = 'none';
            icon.style.filter = 'none';
        });
    });

    // Feature slider logic
    const features = [
        "feature-card-centralized-storage",
        "feature-card-real-time-tracking",
        "feature-card-easy-access"
    ];
    let currentFeature = 0;
    function showFeature(idx) {
        features.forEach((id, i) => {
            document.getElementById(id).style.display = (i === idx) ? "block" : "none";
        });
    }
    document.getElementById('feature-prev').onclick = function() {
        currentFeature = (currentFeature - 1 + features.length) % features.length;
        showFeature(currentFeature);
    };
    document.getElementById('feature-next').onclick = function() {
        currentFeature = (currentFeature + 1) % features.length;
        showFeature(currentFeature);
    };
    // Auto-slide every 5 seconds
    setInterval(() => {
        currentFeature = (currentFeature + 1) % features.length;
        showFeature(currentFeature);
    }, 5000);
    // Initialize
    showFeature(currentFeature);
    </script>
    <script>
        // Feature slider logic (polished, with indicators and pause on hover)
        const features = [
            "feature-card-centralized-storage",
            "feature-card-real-time-tracking",
            "feature-card-easy-access"
        ];
        let currentFeature = 0;
        let sliderInterval = null;
        const dots = document.querySelectorAll('.feature-dot');
        function showFeature(idx) {
    // Feature slider logic
    const features = [
        "feature-card-centralized-storage",
        "feature-card-real-time-tracking",
        "feature-card-easy-access"
    ];
    let currentFeature = 0;
    function showFeature(idx) {
        features.forEach((id, i) => {
            document.getElementById(id).style.display = (i === idx) ? "block" : "none";
        });
    }
    document.getElementById('feature-prev').onclick = function() {
        currentFeature = (currentFeature - 1 + features.length) % features.length;
        showFeature(currentFeature);
    };
    document.getElementById('feature-next').onclick = function() {
        currentFeature = (currentFeature + 1) % features.length;
        showFeature(currentFeature);
    };
    // Auto-slide every 5 seconds
    setInterval(() => {
        currentFeature = (currentFeature + 1) % features.length;
        showFeature(currentFeature);
    }, 5000);
    // Initialize
    showFeature(currentFeature);
    </script>
    <script>
        // Feature slider logic (polished, with indicators and pause on hover)
        const features = [
            "feature-card-centralized-storage",
            "feature-card-real-time-tracking",
            "feature-card-easy-access"
        ];
        let currentFeature = 0;
        let sliderInterval = null;
        const dots = document.querySelectorAll('.feature-dot');
        function showFeature(idx) {
            features.forEach((id, i) => {
                document.getElementById(id).style.display = (i === idx) ? "block" : "none";
                if (dots[i]) dots[i].style.background = (i === idx) ? "var(--primary)" : "#ccc";
            });
        }
        function nextFeature() {
            currentFeature = (currentFeature + 1) % features.length;
            showFeature(currentFeature);
        }
        function prevFeature() {
            currentFeature = (currentFeature - 1 + features.length) % features.length;
            showFeature(currentFeature);
        }
        document.getElementById('feature-prev').onclick = prevFeature;
        document.getElementById('feature-next').onclick = nextFeature;
        dots.forEach((dot, idx) => {
            dot.onclick = () => {
                currentFeature = idx;
                showFeature(currentFeature);
            };
        });
        function startSlider() {
            if (sliderInterval) clearInterval(sliderInterval);
            sliderInterval = setInterval(nextFeature, 5000);
        }
        // Pause on hover
        document.getElementById('feature-slider').addEventListener('mouseenter', () => {
            if (sliderInterval) clearInterval(sliderInterval);
        });
        document.getElementById('feature-slider').addEventListener('mouseleave', startSlider);
        // Initialize
        showFeature(currentFeature);
        startSlider();
    </script>
    <script>
        // Enhanced feature-card hover effect for the slider
        document.querySelectorAll('#feature-slider .feature-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.boxShadow = '0 12px 32px 0 rgba(128,0,0,0.18)';
                card.style.transform = 'translateY(-10px) scale(1.04)';
                card.style.transition = 'box-shadow 0.35s cubic-bezier(.4,2,.6,1), transform 0.35s cubic-bezier(.4,2,.6,1)';
                card.style.background = 'linear-gradient(105deg, #fff 80%, #fdb91322 100%)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.boxShadow = '0 2px 12px rgba(0,0,0,0.06)';
                card.style.transform = 'none';
                card.style.background = '#fff';
            });
        });
    </script>
    <script>
// Welcome page background image slider with left-to-right slide effect
(function() {
    const images = [
        "https://media.licdn.com/dms/image/C5612AQEWmEHd4EmVUw/article-cover_image-shrink_720_1280/0/1583838339576?e=2147483647&v=beta&t=SxPN47m2wOzDKVYkIJndW4nVchlftMRj2dNeK2RYHjM",
        "https://miro.medium.com/v2/resize:fit:6912/1*Xsn-A1fuPmEv_2xiY6xVmA.jpeg",
        "https://www.makemoney.ng/wp-content/uploads/2023/05/lecture.jpeg",
        "https://www.psv.com.ng/wp-content/uploads/2023/10/IMG_0001.jpg"
    ];
    let idx = 0;
    const imgEl = document.getElementById('welcome-bg-img-el');
    let isSliding = false;

    setInterval(() => {
        if (isSliding) return;
        isSliding = true;
        // Animate slide out to right
        imgEl.style.transform = "translateX(100%)";
        imgEl.style.opacity = 0.2;
        setTimeout(() => {
            idx = (idx + 1) % images.length;
            imgEl.src = images[idx];
            // Position new image to left, invisible
            imgEl.style.transition = "none";
            imgEl.style.transform = "translateX(-100%)";
            imgEl.style.opacity = 0.2;
            // Force reflow to apply the transform immediately
            void imgEl.offsetWidth;
            // Animate slide in from left
            imgEl.style.transition = "opacity 0.7s, transform 0.7s";
            imgEl.style.transform = "translateX(0)";
            imgEl.style.opacity = 1;
            setTimeout(() => { isSliding = false; }, 700);
        }, 350);
    }, 2500);
})();
</script>
    <script>
    // Login section background color slider (smooth transition, wide section)
    (function() {
        const loginSection = document.getElementById('login');
        const colors = ["#a9a9a9", "#949494", "#7f7f7f", "#545454"];
        let idx = 0;
        if (loginSection) {
            loginSection.style.transition = "background 1.2s";
        }
        setInterval(() => {
            if (loginSection) {
                loginSection.style.background = colors[idx];
                idx = (idx + 1) % colors.length;
            }
        }, 2200);
    })();

    // AI Chat Widget Logic
    (function() {
        const chatToggle = document.getElementById('ai-chat-toggle');
        const chatBox = document.getElementById('ai-chat-box');
        const chatForm = document.getElementById('ai-chat-form');
        const chatInput = document.getElementById('ai-chat-input');
        const chatMessages = document.getElementById('ai-chat-messages');
        const chatClose = document.getElementById('ai-chat-close');

        // Ensure chatBox is hidden initially
        chatBox.style.display = "none";

        chatToggle.onclick = function() {
            chatBox.style.display = (chatBox.style.display === "none" || chatBox.style.display === "") ? "block" : "none";
        };
        chatClose.onclick = function() {
            chatBox.style.display = "none";
        };

        function appendMessage(text, sender) {
            const msg = document.createElement('div');
            msg.style.margin = "0.3rem 0";
            msg.style.padding = "0.5rem 0.7rem";
            msg.style.borderRadius = "8px";
            msg.style.maxWidth = "85%";
            msg.style.wordBreak = "break-word";
            msg.style.display = "block";
            msg.style.whiteSpace = "pre-line";
            if (sender === "user") {
                msg.style.background = "#e6e6e6";
                msg.style.alignSelf = "flex-end";
                msg.style.marginLeft = "auto";
                msg.style.color = "#222";
            } else {
                msg.style.background = "#f9eaea";
                msg.style.color = "#800000";
                msg.style.alignSelf = "flex-start";
                msg.style.marginRight = "auto";
            }
            msg.textContent = text;
            chatMessages.appendChild(msg);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function aiReply(userMsg) {
            const msg = userMsg.trim().toLowerCase();

            // French
            if (/bonjour|salut|bonsoir/.test(msg)) return "Bonjour ! Comment puis-je vous aider ?";
            if (/document/.test(msg) && (/fr/.test(navigator.language) || /français/.test(msg))) return "Vous pouvez télécharger, suivre et gérer des documents avec le système.";
            if (/connexion|login/.test(msg)) return "Pour vous connecter, cliquez sur le bouton 'Proceed to Login' ou utilisez vos identifiants.";
            if (/fonctionnalité|feature/.test(msg)) return "Fonctionnalités : stockage centralisé, suivi en temps réel, accès facile.";
            if (/contact/.test(msg)) return "Contactez le support via le formulaire ou par email/téléphone.";
            if (/merci|thanks/.test(msg)) return "Avec plaisir ! Si vous avez d'autres questions, demandez-moi.";

            // Swahili
            if (/habari|shikamoo|mambo/.test(msg)) return "Habari! Naweza kukusaidiaje?";
            if (/hati|document/.test(msg) && (/sw/.test(navigator.language) || /swahili/.test(msg))) return "Unaweza kupakia, kufuatilia, na kudhibiti hati zako kwenye mfumo.";
            if (/ingia|login/.test(msg)) return "Ili kuingia, bonyeza 'Proceed to Login' au tumia taarifa zako.";
            if (/kipengele|feature/.test(msg)) return "Vipengele: hifadhi ya kati, ufuatiliaji wa papo hapo, upatikanaji rahisi.";
            if (/wasiliana|contact/.test(msg)) return "Wasiliana na msaada kupitia fomu au barua pepe/simu.";
            if (/asante|thanks/.test(msg)) return "Karibu! Ukiwa na maswali zaidi, niambie.";

            // Arabic
            if (/مرحبا|أهلا|السلام/.test(msg)) return "مرحبًا! كيف يمكنني مساعدتك؟";
            if (/وثيقة|مستند|document/.test(msg) && (/ar/.test(navigator.language) || /عربي/.test(msg))) return "يمكنك رفع وتتبع وإدارة المستندات باستخدام النظام.";
            if (/تسجيل الدخول|دخول|login/.test(msg)) return "لتسجيل الدخول، اضغط على زر 'Proceed to Login' أو استخدم بياناتك.";
            if (/ميزة|ميزات|feature/.test(msg)) return "الميزات: تخزين مركزي، تتبع فوري، وصول سهل.";
            if (/اتصل|تواصل|contact/.test(msg)) return "يمكنك التواصل مع الدعم عبر النموذج أو البريد الإلكتروني/الهاتف.";
            if (/شكرا|thanks/.test(msg)) return "على الرحب والسعة! إذا كان لديك أسئلة أخرى فقط اسأل.";

            // English (default/fallback)
            if (!msg) return "How can I help you today?";
            if (msg.includes("hello") || msg.includes("hi")) return "Hello! How can I assist you?";
            if (msg.includes("document")) return "You can upload, track, and manage documents using the system. What would you like to do?";
            if (msg.includes("login")) return "To login, click the 'Proceed to Login' button or use your credentials on the login page.";
            if (msg.includes("feature")) return "Some features include centralized storage, real-time tracking, and easy access to documents.";
            if (msg.includes("contact")) return "You can contact support using the contact form or via email/phone provided on the page.";
            if (msg.includes("thanks") || msg.includes("thank you")) return "You're welcome! If you have more questions, just ask.";
            return "Sorry, I can answer in English, French, Swahili, or Arabic. Please ask about documents, features, login, or contact.";
        }

        chatForm.onsubmit = function(e) {
            e.preventDefault();
            const userMsg = chatInput.value.trim();
            if (!userMsg) return;
            appendMessage(userMsg, "user");
            chatInput.value = "";
            setTimeout(() => {
                appendMessage(aiReply(userMsg), "ai");
            }, 400);
        };

        // Optional: focus input when chat opens
        chatToggle.addEventListener('click', function() {
            if (chatBox.style.display === "block") {
                setTimeout(() => { chatInput.focus(); }, 200);
            }
        });
    })();
    </script>
</body>
</html>