<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - IUEA Document Tracking System</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'iuea': {
                            'maroon': '#800000',
                            'gold': '#FFD700',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            --primary: #800000;
            --secondary: #fdb913;
            --background: #f5f6fa;
            --text: #222;
            --footer-bg: #222;
            --footer-text: #fff;
            --card-bg: #fff;
            --nav-bg: #fff;
            --nav-link: #800000;
            --header-bg: #800000;
            --header-text: #fff;
            --input-bg: #fff;
            --input-border: #ccc;
            --transition: background 0.4s, color 0.4s;
        }
        html, body {
            height: 100%;
            width: 100%;
            box-sizing: border-box;
            background: var(--background);
            color: var(--text);
            transition: var(--transition);
        }
        /* Dark mode variables */
        @media (prefers-color-scheme: dark) {
            :root {
                --background: #18191a;
                --text: #f5f6fa;
                --footer-bg: #23272f;
                --footer-text: #fff;
                --card-bg: #23272f;
                --nav-bg: #23272f;
                --nav-link: #fdb913;
                --header-bg: #23272f;
                --header-text: #fff;
                --input-bg: #23272f;
                --input-border: #444;
            }
        }
        body.dark-mode {
            --background: #18191a;
            --text: #f5f6fa;
            --footer-bg: #23272f;
            --footer-text: #fff;
            --card-bg: #23272f;
            --nav-bg: #23272f;
            --nav-link: #fdb913;
            --header-bg: #23272f;
            --header-text: #fff;
            --input-bg: #23272f;
            --input-border: #444;
            transition: var(--transition);
        }
        body.light-mode {
            --background: #f5f6fa;
            --text: #222;
            --footer-bg: #222;
            --footer-text: #fff;
            --card-bg: #fff;
            --nav-bg: #fff;
            --nav-link: #800000;
            --header-bg: #800000;
            --header-text: #fff;
            --input-bg: #fff;
            --input-border: #ccc;
            transition: var(--transition);
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: var(--background) !important;
            color: var(--text) !important;
            transition: var(--transition);
        }
        .card {
            background: var(--card-bg) !important;
            color: var(--text) !important;
            transition: var(--transition);
        }
        /* Toggle Switch Styles */
        .theme-toggle-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.7rem;
            margin-right: 1rem;
            display: flex;
            align-items: center;
            outline: none;
            transition: background 0.2s;
            border-radius: 50%;
            padding: 0.2rem;
        }
        .theme-toggle-btn:focus {
            box-shadow: 0 0 0 2px var(--primary);
        }
        .theme-toggle-icon {
            display: flex;
            align-items: center;
            transition: color 0.3s;
        }
        .theme-toggle-icon svg {
            width: 28px;
            height: 28px;
            display: block;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200">
    <!-- Theme toggle button -->
    <div style="position:fixed;top:18px;right:18px;z-index:1000;">
        <button id="theme-toggle" class="theme-toggle-btn" title="Toggle light/dark mode" aria-label="Toggle theme">
            <span id="theme-toggle-icon" class="theme-toggle-icon">
                <!-- Sun Icon -->
                <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" style="display:none;" fill="orange" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="5"/>
                    <g stroke="orange" stroke-width="2">
                        <line x1="12" y1="1" x2="12" y2="3"/>
                        <line x1="12" y1="21" x2="12" y2="23"/>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                        <line x1="1" y1="12" x2="3" y2="12"/>
                        <line x1="21" y1="12" x2="23" y2="12"/>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                    </g>
                </svg>
                <!-- Moon Icon -->
                <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" style="display:none;" fill="#222" viewBox="0 0 24 24">
                    <path d="M21 12.79A9 9 0 0111.21 3a7 7 0 100 14 9 9 0 009.79-4.21z"/>
                </svg>
            </span>
        </button>
    </div>
    <div class="min-h-screen flex flex-col justify-center py-4 sm:py-6 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-[90%] sm:max-w-md mx-auto">
            <!-- IUEA Logo with background -->
            <div class="bg-white p-3 sm:p-4 rounded-full shadow-lg w-24 h-24 sm:w-32 sm:h-32 mx-auto mb-4 sm:mb-6">
                <img class="w-full h-full object-contain" 
                     src="//172.16.17.10/port/img/Logosq.png" 
                     alt="IUEA Logo">
            </div>
            
            <h2 class="text-center text-2xl sm:text-3xl font-extrabold tracking-tight" style="color:#800000;">
                Create a new account
            </h2>
            <p class="mt-2 text-center text-xs sm:text-sm text-gray-600">
                IUEA Document Tracking System
            </p>
        </div>

        <div class="mt-6 sm:mt-8 w-full max-w-[90%] sm:max-w-md mx-auto">
            <div class="bg-white py-6 sm:py-8 px-4 sm:px-10 shadow-2xl rounded-lg border-t-4 border-iuea-maroon">
                <form class="space-y-6" action="#" method="POST">
                    <!-- Name Input -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" id="name" required 
                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400
                            focus:outline-none focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">University Email</label>
                        <input type="email" name="email" id="email" required 
                            placeholder="username@iuea.ac.ug"
                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400
                            focus:outline-none focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" required 
                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400
                            focus:outline-none focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                            Confirm Password
                        </label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required 
                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400
                            focus:outline-none focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Register Button -->
                    <div>
                        <button type="submit" 
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-iuea-maroon hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-iuea-maroon transition-all duration-200">
                            Register
                        </button>
                    </div>
                </form>

                <!-- Login Link -->
                <div class="mt-6 text-center text-sm">
                    <p class="text-gray-600">
                        Already have an account? 
                        <a href="/login" class="font-medium text-iuea-maroon hover:text-opacity-80 underline">
                            Sign in
                        </a>
                    </p>
                    <p class="mt-4 text-center text-sm">
                        <a href="/register" class="font-medium" style="color:#800000;">Create new account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Theme mode logic with modern SVG toggle and smooth transition
    (function() {
        const body = document.body;
        const themeToggle = document.getElementById('theme-toggle');
        const iconSun = document.getElementById('icon-sun');
        const iconMoon = document.getElementById('icon-moon');
        // Get system theme
        function getSystemTheme() {
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }
        // Apply theme and icon
        function applyTheme(theme) {
            body.classList.remove('light-mode', 'dark-mode');
            if (theme === 'dark') {
                body.classList.add('dark-mode');
                iconSun.style.display = "inline";
                iconMoon.style.display = "none";
            } else {
                body.classList.add('light-mode');
                iconSun.style.display = "none";
                iconMoon.style.display = "inline";
            }
        }
        // Load theme from localStorage or system
        function loadTheme() {
            const saved = localStorage.getItem('theme');
            if (saved === 'dark' || saved === 'light') {
                applyTheme(saved);
            } else {
                applyTheme(getSystemTheme());
            }
        }
        // Listen for system changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('theme')) {
                applyTheme(e.matches ? 'dark' : 'light');
            }
        });
        // Toggle theme manually
        themeToggle.onclick = function() {
            const current = body.classList.contains('dark-mode') ? 'dark' : 'light';
            const next = current === 'dark' ? 'light' : 'dark';
            localStorage.setItem('theme', next);
            applyTheme(next);
        };
        // Allow keyboard toggle
        themeToggle.onkeypress = function(e) {
            if (e.key === 'Enter' || e.key === ' ') themeToggle.onclick();
        };
        // On load
        loadTheme();
    })();
    </script>
</body>
</html>
