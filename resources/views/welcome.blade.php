<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documentation Tracking System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { montserrat: ['Montserrat', 'Arial', 'sans-serif'] },
                    colors: {
                        primary: '#800000',
                        secondary: '#fdb913',
                        background: '#f5f6fa',
                        footerbg: '#222',
                        footertext: '#fff'
                    }
                }
            },
            darkMode: 'class'
        }
    </script>
    <style>
        /* Responsive fixes for footer columns and social icons */
        @media (max-width: 1024px) {
            .footer-cols {
                flex-direction: column !important;
                gap: 2rem !important;
            }
            .footer-social-col {
                justify-content: flex-start !important;
                margin-top: 1.5rem !important;
                padding-right: 0 !important;
            }
        }
        @media (max-width: 768px) {
            .footer-cols {
                flex-direction: column !important;
                gap: 1.5rem !important;
            }
            .footer-social-col {
                justify-content: flex-start !important;
                margin-top: 1.5rem !important;
                padding-right: 0 !important;
            }
            .footer-cols > div {
                min-width: 0 !important;
                max-width: 100% !important;
            }
        }
        @media (max-width: 640px) {
            .footer-cols {
                flex-direction: column !important;
                gap: 1rem !important;
            }
            .footer-social-col {
                justify-content: flex-start !important;
                margin-top: 1rem !important;
                padding-right: 0 !important;
            }
            .footer-cols > div {
                min-width: 0 !important;
                max-width: 100% !important;
            }
        }
    </style>
</head>
<body class="font-montserrat min-h-screen flex flex-col bg-background text-[#222] dark:bg-[#232323] dark:text-[#f5f6fa]">
    <nav class="bg-white text-primary flex justify-between items-center px-4 md:px-8 py-4 w-full min-h-[60px] md:min-h-[80px] fixed top-0 left-0 z-50 shadow">
        <div class="flex items-center">
            <a href="index.html" class="flex items-center">
                <img src="https://iuea.ac.ug/sitepad-data/uploads/2020/11/Website-Logo.png" alt="IUEA Logo" class="h-10 md:h-16 w-auto mr-2">
            </a>
        </div>
        <div class="flex items-center">
            <button id="navToggle" class="md:hidden flex flex-col justify-center w-9 h-9 mr-2" aria-label="Toggle navigation" tabindex="0">
                <span class="block h-1 w-full bg-primary rounded my-1"></span>
                <span class="block h-1 w-full bg-primary rounded my-1"></span>
                <span class="block h-1 w-full bg-primary rounded my-1"></span>
            </button>
            <div id="navLinks" class="hidden md:flex gap-4 items-center bg-white md:bg-transparent absolute md:static top-full left-0 w-full md:w-auto shadow md:shadow-none md:rounded-none rounded-b-xl md:rounded-none z-40">
                <a href="#home" class="block md:inline text-primary hover:bg-primary hover:text-white px-3 py-2 md:py-1 rounded transition">Home</a>
                <a href="#about" class="block md:inline text-primary hover:bg-primary hover:text-white px-3 py-2 md:py-1 rounded transition">About</a>
                <a href="#features" class="block md:inline text-primary hover:bg-primary hover:text-white px-3 py-2 md:py-1 rounded transition">Features</a>
                <a href="#contact" class="block md:inline text-primary hover:bg-primary hover:text-white px-3 py-2 md:py-1 rounded transition">Contact</a>
                <a href="{{ route('login') }}" id="loginBtn" class="block md:inline text-primary hover:bg-primary hover:text-white px-3 py-2 md:py-1 rounded transition">Login</a>
            </div>
        </div>
    </nav>
    <div id="theme-toggle" class="fixed top-4 right-4 md:right-6 z-50 cursor-pointer">
        <img id="theme-icon" src="https://cdn4.iconfinder.com/data/icons/music-ui-solid-24px/24/moon_dark_mode_night-2-512.png" alt="Toggle theme" class="w-8 md:w-9 h-8 md:h-9 transition">
    </div>
    <main class="bg-white/90 flex-1 w-full pt-[70px] md:pt-[90px]">
        <section id="home" class="relative w-full min-h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <div id="welcome-bg-img-wrapper" class="w-full h-full relative">
                    <img id="welcome-bg-img-el"
                        src="https://iuea.ac.ug/Blog/wp-content/uploads/2025/05/Untitled-design-2025-05-16T170112.635-1536x864.png"
                        alt="DTS Illustration Background"
                        class="w-full h-full object-cover object-center absolute left-0 top-0 transition-all duration-500 opacity-100"
                        style="transition: opacity 0.5s, filter 0.5s, transform 0.7s; filter: blur(2px); object-position: center;">
                </div>
            </div>
            <div class="absolute inset-0 bg-black/25 z-10 transition-all duration-500" id="welcome-bg-overlay"></div>
            <div class="relative z-20 max-w-4xl w-full flex items-center justify-center px-4 py-16 min-h-screen">
                <div class="flex-1 min-w-[320px] text-left flex flex-col items-start justify-center">
                    <h2 id="welcome-title" class="mb-4 text-3xl md:text-4xl font-bold transition-opacity duration-500" style="color:#800000; opacity:1;">
                        the Document Tracking System (DTS)
                    </h2>
                    <p id="welcome-desc" class="text-lg md:text-xl mb-6 text-white drop-shadow text-left transition-opacity duration-500" style="opacity:1;">
                        DTS is your reliable platform for managing, tracking, and accessing organizational documents.
                         With just a few clicks, you can upload files, assign them to the right department or team
                          member, and monitor their progress from submission to approval. Stay informed with real-time
                           notifications, maintain accountability, and generate insightful reports—all in one secure,
                            web-based system.
                    </p>
                    <a href="#about" class="bg-primary text-white px-8 py-3 rounded font-bold text-lg inline-block">Learn more about DTS &rarr;</a>
                </div>
            </div>
        </section>
        <section id="about" class="relative w-full min-h-screen flex items-center justify-center overflow-hidden bg-[#3f3f3f]">
            <div class="relative z-20 max-w-4xl w-full flex items-center px-4 py-16 min-h-screen">
                <div class="flex-1 min-w-[260px]">
                    <h2 class="mb-4 text-2xl md:text-3xl font-bold" style="color:#800000;">About</h2>
                    <p class="text-base md:text-lg mb-4 text-white drop-shadow">
                        The DTS is built to address the challenges of document 
                        management in modern organizations.
                         It supports role-based access for administrators, clerks, and reviewers, 
                         and maintains a complete audit trail for every document. DTS is scalable,
                          secure, and integrates with email/SMS gateways for notifications.
                           Whether you are a project manager, system administrator, or end user,
                            DTS streamlines your workflow and enhances productivity.
                    </p>
                    <a href="#features" class="bg-primary text-white px-8 py-3 rounded font-bold text-lg inline-block">Explore Features &rarr;</a>
                </div>
            </div>
        </section>
        <section id="features" class="relative w-full my-10 rounded-xl shadow bg-gray-600 py-12 min-h-screen">
            <div class="text-3xl md:text-4xl text-primary font-bold mb-8 text-center">Features</div>
            <div class="flex flex-wrap gap-8 justify-center">
                <div class="feature-card bg-white max-w-xs min-w-[180px] p-5 rounded-xl shadow transition flex flex-col items-center cursor-pointer">
                    <img src="https://servermall.com/upload/medialibrary/8a1/pf7lz19wfcssds6egc09015oaklc06xl/server-virtualization-4.jpg" alt="Centralized Storage" class="mb-3 w-10 h-10 mx-auto">
                    <h3 class="text-base font-semibold mb-2 text-center">Centralized Storage</h3>
                    <p class="text-sm text-center">
                        All your documents are stored in one secure, organized platform. This ensures easy management, prevents loss, and allows authorized users to access documents from anywhere at any time. Centralized storage also supports backup and audit trails for compliance and security.
                    </p>
                </div>
                <div class="feature-card bg-white max-w-xs min-w-[180px] p-5 rounded-xl shadow transition flex flex-col items-center cursor-pointer">
                    <img src="https://spng.pngfind.com/pngs/s/437-4378486_flowcontrol-real-time-monitoring-icon-in-circle-hd.png" alt="Real-time Tracking" class="mb-3 w-10 h-10 mx-auto">
                    <h3 class="text-base font-semibold mb-2 text-center">Real-time Tracking</h3>
                    <p class="text-sm text-center">
                        Instantly monitor the status and movement of every document. Real-time tracking provides up-to-date information on who accessed or modified a document, its current location or owner, and its status (pending, under review, approved, etc.), ensuring transparency and accountability.
                    </p>
                </div>
                <div class="feature-card bg-white max-w-xs min-w-[180px] p-5 rounded-xl shadow transition flex flex-col items-center cursor-pointer">
                    <img src="https://www.pngkey.com/png/detail/272-2721681_the-new-soluscope-sprint-is-faster-than-ever.png" alt="Easy Access" class="mb-3 w-10 h-10 mx-auto">
                    <h3 class="text-base font-semibold mb-2 text-center">Easy Access</h3>
                    <p class="text-sm text-center">
                        Retrieve and share documents with just a few clicks. The system is designed for intuitive navigation and powerful search, allowing users to quickly find, download, or share documents based on title, date, status, or department, improving productivity and collaboration.
                    </p>
                </div>
            </div>
        </section>
        <section id="contact" 
            class="relative w-full min-h-screen flex items-center justify-center overflow-hidden"
            style="background: linear-gradient(rgba(30,30,30,0.45),rgba(30,30,30,0.45)), url('https://www.publicdomainpictures.net/pictures/130000/velka/white-background.jpg') center center / cover no-repeat;">
            <div class="relative z-20 max-w-2xl w-full flex flex-col items-center px-4 py-16 min-h-screen">
                <h2 class="text-primary mb-6 text-3xl font-bold text-center">Get in touch</h2>
                <form class="w-full max-w-lg bg-white/80 rounded-xl shadow p-8 space-y-5">
                    <div>
                        <label class="block text-primary font-semibold mb-1" for="contact-name">Name</label>
                        <input id="contact-name" type="text" placeholder="Your Name" required class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label class="block text-primary font-semibold mb-1" for="contact-email">Email</label>
                        <input id="contact-email" type="email" placeholder="Your Email" required class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label class="block text-primary font-semibold mb-1" for="contact-phone">Phone Number</label>
                        <input id="contact-phone" type="tel" placeholder="Your Phone Number" required class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label class="block text-primary font-semibold mb-1" for="contact-message">Message</label>
                        <textarea id="contact-message" placeholder="Your Message" required class="w-full px-3 py-2 rounded border border-gray-300 min-h-[90px] focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                    </div>
                    <button type="submit" class="bg-primary text-white px-8 py-2 rounded font-bold w-full">Send Message</button>
                </form>
            </div>
        </section>
        <section id="login" 
            class="w-full my-10 px-4 py-12 rounded-xl shadow bg-white text-center transition-all duration-1000 min-h-screen flex items-center justify-center"
            style="background: linear-gradient(135deg, #848484 0%, #9e9e9e 100%);">
            <div class="w-full">
                <img src="https://static.vecteezy.com/system/resources/previews/022/123/337/original/user-icon-profile-icon-account-icon-login-sign-line-vector.jpg" alt="Login Icon" class="w-[90px] h-[90px] mb-3 rounded-full shadow mx-auto">
                <div class="text-2xl text-primary font-bold mb-4">Login</div>
                <p class="text-base mb-4 text-gray-700">
                    Access your personalized dashboard by logging in. The login page is secure and supports different user roles (Admin, Clerk, Reviewer). <br>
                    Once logged in, you can upload documents, track their status, assign them to departments, and generate reports.<br> If you don't have an account, please contact your administrator.
                </p>
                <a href="/login" class="bg-primary text-white px-8 py-2 rounded font-bold inline-block mt-4 text-lg">Get Started &rarr;</a>
            </div>
        </section>

        <!-- AI Assistant Button (fixed bottom right) -->
        <button id="ai-assistant-btn" class="fixed bottom-6 right-6 z-50 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-primary bg-white p-0 w-16 h-16 flex items-center justify-center transition hover:scale-105" aria-label="Open AI Assistant">
            <img src="https://cdn.dribbble.com/users/1373613/screenshots/5465294/ai-loading.gif" alt="AI Assistant" class="w-14 h-14 rounded-full">
        </button>
        <!-- AI Assistant Modal -->
        <div id="ai-assistant-modal" class="fixed inset-0 bg-transparent z-50 pointer-events-none">
            <div class="fixed bottom-24 right-6 md:bottom-24 md:right-6 w-[95vw] max-w-md mx-auto p-0 pointer-events-auto"
                 style="z-index:9999;">
                <div class="bg-white rounded-2xl shadow-xl w-full flex flex-col gap-4 relative animate-fadeInUp">
                    <button id="ai-assistant-close" class="absolute top-3 right-3 text-gray-500 hover:text-primary text-2xl font-bold" aria-label="Close">&times;</button>
                    <div class="flex items-center gap-3 mb-2 mt-4 ml-4">
                        <img src="https://cdn.dribbble.com/users/1373613/screenshots/5465294/ai-loading.gif" alt="AI Assistant" class="w-10 h-10 rounded-full">
                        <span class="font-bold text-lg text-primary">AI Assistant</span>
                    </div>
                    <div id="ai-assistant-messages" class="flex flex-col gap-2 max-h-60 overflow-y-auto text-left text-sm px-4"></div>
                    <form id="ai-assistant-form" class="flex gap-2 mt-2 px-4 pb-4">
                        <input id="ai-assistant-input" type="text" placeholder="Ask me anything..." class="flex-1 px-3 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" autocomplete="off" required>
                        <button type="submit" class="bg-primary text-white px-4 py-2 rounded font-bold">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <style>
            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(40px);}
                to { opacity: 1; transform: translateY(0);}
            }
            .animate-fadeInUp { animation: fadeInUp 0.3s; }
            #ai-assistant-modal { display: none; }
            #ai-assistant-modal.active { display: block; }
            @media (max-width: 640px) {
                #ai-assistant-modal .fixed { right: 2vw !important; left: 2vw !important; }
            }
            html {
                scroll-behavior: auto !important;
            }
        </style>
    </main>
    <footer class="bg-[#3f3f3f] text-white text-center py-8 text-base w-full flex-shrink-0">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-wrap justify-between items-center gap-4">
                <div></div>
            </div>
            <div class="mt-6 flex flex-wrap gap-10 justify-between text-left footer-cols">
                <div class="flex-1 min-w-[220px] max-w-md flex flex-col gap-2">
                    <div class="flex items-start gap-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Location" class="h-5 w-5 mt-1">
                        <span>
                            <strong>Address:</strong><br>
                            Plot No. 1112/1121, Kansanga Ggaba Rd,<br>
                            P.O.Box 35502, Kampala, Uganda
                        </span>
                    </div>
                    <div class="flex items-start gap-2 mt-2">
                        <img src="https://icon-library.com/images/time-icon-png/time-icon-png-15.jpg" alt="Clock" class="h-4 w-4 mt-1">
                        <span><strong>Hours:</strong> 8.00 AM – 5.00 PM</span>
                    </div>
                </div>
                <div class="flex-1 min-w-[220px] max-w-md flex flex-col gap-1">
                    <div class="flex items-center gap-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Phone" class="h-4 w-4 inline mr-1">
                        <strong>Toll-Free:</strong> 800 335 335
                    </div>
                    <span>
                        <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Mobile" class="h-4 w-4 inline mr-1">
                        <strong>Mobile & WhatsApp:</strong> (+256) 705 722 300
                    </span>
                    <span>
                        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" class="h-4 w-4 inline mr-1">
                        <strong>Email:</strong> <a href="mailto:info@iuea.ac.ug" class="text-white underline">info@iuea.ac.ug</a>
                    </span>
                    <span>
                        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" class="h-4 w-4 inline mr-1">
                        <strong>Apply:</strong> <a href="mailto:apply@iuea.ac.ug" class="text-white underline">apply@iuea.ac.ug</a>
                    </span>
                </div>
                <div class="flex-1 min-w-[180px] max-w-xs flex flex-col justify-end footer-social-col">
                    <div class="flex justify-end mt-auto pr-2">
                        <div id="footer-social" class="flex gap-4">
                            <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                                <img src="https://photos5.appleinsider.com/gallery/52265-104018-Facebook-xl.jpg" alt="Facebook" class="h-6 w-6 footer-icon">
                            </a>
                            <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                                <img src="https://seekvectors.com/storage/images/new-twitter-logo.svg" alt="Twitter" class="h-6 w-6 footer-icon">
                            </a>
                            <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                                <img src="https://freepngimg.com/download/logo/69768-logo-computer-layout-instagram-icons-png-file-hd.png" alt="Instagram" class="h-6 w-6 footer-icon">
                            </a>
                            <a href="https://youtube.com" target="_blank" aria-label="YouTube">
                                <img src="https://static.vecteezy.com/system/resources/previews/045/872/270/large_2x/youtube-transparent-logo-youtube-logo-transparent-background-free-png.png" alt="YouTube" class="h-6 w-6 footer-icon">
                            </a>
                            <a href="https://wa.me/256705722300" target="_blank" aria-label="WhatsApp">
                                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" class="h-6 w-6 footer-icon">
                            </a>
                            <a href="mailto:info@iuea.ac.ug" aria-label="Email">
                                <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" class="h-6 w-6 footer-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 text-sm text-center">
                &copy; 2024 IUEA Documentation Tracking System. All rights reserved.
            </div>
        </div>
    </footer>
    <script>
    // Hamburger menu toggle
    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');
    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('hidden');
    });
    navToggle.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
            navLinks.classList.toggle('hidden');
        }
    });

    // Feature card hover effect (Tailwind: handled by classes, but add pointer + color for JS)
    document.querySelectorAll('.feature-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('bg-primary', 'text-white');
            card.classList.remove('bg-white', 'text-[#222]');
        });
        card.addEventListener('mouseleave', () => {
            card.classList.remove('bg-primary', 'text-white');
            card.classList.add('bg-white', 'text-[#222]');
        });
    });

    // Welcome page background image and text slider with smooth right-to-left slide, fast and with a bit of blur
    (function() {
        const images = [
            "https://iuea.ac.ug/Blog/wp-content/uploads/2025/05/Untitled-design-2025-05-16T170112.635-1536x864.png",
            "https://iuea.ac.ug/Blog/wp-content/uploads/2025/01/Untitled-design-40-1-1536x864.png"
        ];
        const titles = [
            "Welcome to the Document Tracking System (DTS)",
            "Your Central Hub for Document Management"
        ];
        const descs = [
            "DTS is your reliable platform for managing, tracking, and accessing organizational documents. With just a few clicks, you can upload files, assign them to the right department or team member, and monitor their progress from submission to approval. Stay informed with real-time notifications, maintain accountability, and generate insightful reports—all in one secure, web-based system.",
            "DTS simplifies how documents are handled across departments. Upload, assign, track, and review documents all in one secure place. Our system helps your team stay organized, meet deadlines, and ensure every document is where it should be — when it matters most. Whether you're a staff member, manager, or admin, DTS brings transparency and control to your workflow."
        ];
        let idx = 0;
        const imgEl = document.getElementById('welcome-bg-img-el');
        const wrapper = document.getElementById('welcome-bg-img-wrapper');
        const titleEl = document.getElementById('welcome-title');
        const descEl = document.getElementById('welcome-desc');
        const overlay = document.getElementById('welcome-bg-overlay');
        let isSliding = false;
        if (!imgEl || !titleEl || !descEl || !overlay || !wrapper) return;

        setInterval(() => {
            if (isSliding) return;
            isSliding = true;
            // Fade out text
            titleEl.style.opacity = 0;
            descEl.style.opacity = 0;
            overlay.style.background = "rgba(0,0,0,0.45)";
            // Slide image to left and fade, add blur
            imgEl.style.transition = "opacity 0.3s, filter 0.3s, transform 0.5s";
            imgEl.style.opacity = 0.2;
            imgEl.style.filter = "blur(4px)";
            imgEl.style.transform = "translateX(-100vw)";
            setTimeout(() => {
                idx = (idx + 1) % images.length;
                imgEl.src = images[idx];
                // Instantly move image to right off-screen, keep faded and blurred
                imgEl.style.transition = "none";
                imgEl.style.transform = "translateX(100vw)";
                imgEl.style.opacity = 0.2;
                imgEl.style.filter = "blur(4px)";
                void imgEl.offsetWidth;
                // Animate image sliding in from right and fading in, reduce blur
                imgEl.style.transition = "opacity 0.5s, filter 0.5s, transform 0.7s";
                imgEl.style.transform = "translateX(0)";
                imgEl.style.opacity = 1;
                imgEl.style.filter = "blur(2px)";
                // Change text
                titleEl.textContent = titles[idx];
                descEl.textContent = descs[idx];
                // Fade in overlay and text
                setTimeout(() => {
                    overlay.style.background = "rgba(0,0,0,0.25)";
                    titleEl.style.opacity = 1;
                    descEl.style.opacity = 1;
                    setTimeout(() => { isSliding = false; }, 500);
                }, 200);
            }, 400);
        }, 4000);
    })();

    // Theme toggle logic
    (function() {
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        const sunIcon = "https://cdn1.iconfinder.com/data/icons/multimedia-flat-24px/24/sun_light_mode_day-1024.png";
        const moonIcon = "https://cdn4.iconfinder.com/data/icons/music-ui-solid-24px/24/moon_dark_mode_night-2-512.png";
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
            themeIcon.src = sunIcon;
        }
        themeToggle.onclick = function() {
            document.documentElement.classList.toggle('dark');
            const isDark = document.documentElement.classList.contains('dark');
            themeIcon.src = isDark ? sunIcon : moonIcon;
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        };
    })();

    // AI Assistant logic
    (function() {
        const btn = document.getElementById('ai-assistant-btn');
        const modal = document.getElementById('ai-assistant-modal');
        const close = document.getElementById('ai-assistant-close');
        const form = document.getElementById('ai-assistant-form');
        const input = document.getElementById('ai-assistant-input');
        const messages = document.getElementById('ai-assistant-messages');

        if (!btn || !modal || !close || !form || !input || !messages) return;

        btn.onclick = () => { modal.classList.add('active'); modal.style.display = 'block'; input.focus(); };
        close.onclick = () => { modal.classList.remove('active'); modal.style.display = 'none'; };
        // Only close if click outside the modal box
        window.addEventListener('mousedown', function(e) {
            if (modal.classList.contains('active')) {
                const modalBox = modal.querySelector('.bg-white');
                if (modalBox && !modalBox.contains(e.target) && e.target !== btn) {
                    modal.classList.remove('active');
                    modal.style.display = 'none';
                }
            }
        });

        form.onsubmit = function(e) {
            e.preventDefault();
            const userMsg = input.value.trim();
            if (!userMsg) return;
            // Show user message
            const userDiv = document.createElement('div');
            userDiv.className = "self-end bg-primary text-white px-3 py-2 rounded-lg max-w-[80%]";
            userDiv.textContent = userMsg;
            messages.appendChild(userDiv);
            input.value = '';
            messages.scrollTop = messages.scrollHeight;

            // Show loading AI response
            const aiDiv = document.createElement('div');
            aiDiv.className = "self-start bg-gray-100 text-gray-800 px-3 py-2 rounded-lg max-w-[80%] flex items-center gap-2";
            aiDiv.innerHTML = '<img src="https://cdn.dribbble.com/users/1373613/screenshots/5465294/ai-loading.gif" alt="AI" class="w-6 h-6 rounded-full"> <span>Thinking...</span>';
            messages.appendChild(aiDiv);
            messages.scrollTop = messages.scrollHeight;

            // Simulate AI response (replace with real API if needed)
            setTimeout(() => {
                aiDiv.innerHTML = '<img src="https://cdn.dribbble.com/users/1373613/screenshots/5465294/ai-loading.gif" alt="AI" class="w-6 h-6 rounded-full"> <span>' +
                    'Sorry, I am a demo AI assistant. Please contact support for advanced help.' +
                    '</span>';
                messages.scrollTop = messages.scrollHeight;
            }, 1200);
        };
    })();

    // Smooth scroll to anchor with 120fps and prevent default jump
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').slice(1);
            const target = document.getElementById(targetId);
            if (target) {
                e.preventDefault();
                smoothScrollTo(target);
            }
        });
    });

    function smoothScrollTo(target) {
        const startY = window.scrollY;
        const endY = target.getBoundingClientRect().top + window.scrollY;
        const duration = 500; // ms
        const startTime = performance.now();

        function scrollStep(now) {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const ease = progress < 0.5
                ? 2 * progress * progress
                : -1 + (4 - 2 * progress) * progress;
            window.scrollTo(0, startY + (endY - startY) * ease);
            if (progress < 1) {
                window.requestAnimationFrame(scrollStep);
            }
        }
        window.requestAnimationFrame(scrollStep);
    }
    </script>
</body>
</html>