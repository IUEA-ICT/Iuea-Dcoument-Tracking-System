<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password - IUEA Document Tracking</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Remixicon for theme icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
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
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 transition-colors duration-300">
    <!-- Theme Switcher UI -->
    <div class="absolute top-4 right-4 z-50">
        <div class="relative">
            <button id="theme-toggle-btn" class="w-10 h-10 flex items-center justify-center text-gray-700 dark:text-yellow-300 hover:text-iuea-maroon dark:hover:text-yellow-400 transition-colors" aria-label="Toggle Theme">
                <i id="theme-toggle-icon" class="ri-moon-line ri-lg"></i>
            </button>
            <div id="theme-dropdown" class="absolute right-0 mt-2 w-36 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg py-2 z-50 hidden">
                <button class="w-full flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition" data-theme="light">
                    <i class="ri-sun-line mr-2"></i> Light Mode
                </button>
                <button class="w-full flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition" data-theme="dark">
                    <i class="ri-moon-line mr-2"></i> Dark Mode
                </button>
                <button class="w-full flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition" data-theme="system">
                    <i class="ri-computer-line mr-2"></i> System Default
                </button>
            </div>
        </div>
    </div>

    <div class="min-h-screen flex flex-col justify-center py-4 sm:py-6 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-[90%] sm:max-w-md mx-auto">
            <!-- Logo -->
            <div class="bg-white p-3 sm:p-4 rounded-full shadow-lg w-24 h-24 sm:w-32 sm:h-32 mx-auto mb-4 sm:mb-6">
                <img class="w-full h-full object-contain"
                     src="//172.16.17.10/port/img/Logosq.png"
                     alt="IUEA Logo">
            </div>
        </div>

        <div class="mt-6 sm:mt-8 w-full max-w-[90%] sm:max-w-md mx-auto">
            <div class="bg-white dark:bg-gray-900 py-6 sm:py-8 px-4 sm:px-10 shadow-2xl rounded-lg border-t-4 border-iuea-maroon dark:border-yellow-400 transition-colors">
                <div class="text-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Reset Password</h2>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Enter your email address and we'll send you a link to reset your password
                    </p>
                </div>

                <form class="space-y-6" onsubmit="resetPassword(event)">
                    <!-- Success Message Area -->
                    <div id="success-message" class="hidden rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle text-green-400"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700">Reset link sent! Check your email.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Error Message Area -->
                    <div id="error-message" class="hidden rounded-md bg-red-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-circle text-red-400"></i>
                            </div>
                            <div class="ml-3">
                                <p id="error-text" class="text-sm text-red-700"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email address</label>
                        <input id="email" name="email" type="email" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-iuea-maroon hover:bg-opacity-90 focus:ring-2 focus:ring-offset-2 focus:ring-iuea-maroon transition-all duration-200">
                            Send Reset Link
                        </button>
                    </div>
                </form>

                <!-- Back to Login -->
                <div class="mt-6 text-center text-sm">
                    <a href="{{ route('login') }}" class="font-medium text-iuea-maroon hover:text-opacity-80">
                        <i class="fas fa-arrow-left mr-2"></i>Back to login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Firebase Auth Script -->
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";
        import { getAuth, sendPasswordResetEmail } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js";

        // Initialize Firebase
        const firebaseConfig = {
            apiKey: "AIzaSyBydrQlgL1-AI9pBFiR8w6Waz1D0tdvq8g",
            authDomain: "iuea-dcoument-tracker.firebaseapp.com",
            projectId: "iuea-dcoument-tracker",
            storageBucket: "iuea-dcoument-tracker.firebasestorage.app",
            messagingSenderId: "343956353748",
            appId: "1:343956353748:web:12bf8d958f316fa86ec141",
            measurementId: "G-JK5R5BQZ8G"
        };


        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);

        window.resetPassword = function(event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const errorDiv = document.getElementById('error-message');
            const errorText = document.getElementById('error-text');
            const successDiv = document.getElementById('success-message');
            const submitButton = event.target.querySelector('button[type="submit"]');

            // Reset messages
            errorDiv.classList.add('hidden');
            successDiv.classList.add('hidden');

            // Add loading state
            submitButton.disabled = true;
            submitButton.innerHTML = `
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Sending...
            `;

            sendPasswordResetEmail(auth, email)
                .then(() => {
                    successDiv.classList.remove('hidden');
                    submitButton.innerHTML = 'Reset Link Sent';
                })
                .catch((error) => {
                    errorDiv.classList.remove('hidden');
                    switch (error.code) {
                        case 'auth/user-not-found':
                            errorText.textContent = 'No account found with this email';
                            break;
                        case 'auth/invalid-email':
                            errorText.textContent = 'Please enter a valid email address';
                            break;
                        default:
                            errorText.textContent = 'An error occurred. Please try again';
                    }
                    submitButton.disabled = false;
                    submitButton.innerHTML = 'Send Reset Link';
                });
        };
    </script>

    <script id="theme-switcher-script">
    (function() {
        const root = document.documentElement;
        const themeToggleBtn = document.getElementById('theme-toggle-btn');
        const themeDropdown = document.getElementById('theme-dropdown');
        const themeToggleIcon = document.getElementById('theme-toggle-icon');
        const THEME_KEY = 'dts-theme';
        function setTheme(theme) {
            if (theme === 'dark') {
                root.classList.add('dark');
                themeToggleIcon.className = 'ri-sun-line ri-lg';
            } else {
                root.classList.remove('dark');
                themeToggleIcon.className = 'ri-moon-line ri-lg';
            }
        }
        function getSystemTheme() {
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }
        function applyTheme() {
            let theme = localStorage.getItem(THEME_KEY);
            if (!theme || theme === 'system') {
                theme = getSystemTheme();
            }
            setTheme(theme);
        }
        function chooseTheme(theme) {
            if (theme === 'system') {
                localStorage.setItem(THEME_KEY, 'system');
                setTheme(getSystemTheme());
            } else {
                localStorage.setItem(THEME_KEY, theme);
                setTheme(theme);
            }
        }
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (localStorage.getItem(THEME_KEY) === 'system') {
                setTheme(e.matches ? 'dark' : 'light');
            }
        });
        themeToggleBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            themeDropdown.classList.toggle('hidden');
        });
        themeDropdown.querySelectorAll('button[data-theme]').forEach(btn => {
            btn.addEventListener('click', function() {
                chooseTheme(this.getAttribute('data-theme'));
                themeDropdown.classList.add('hidden');
            });
        });
        document.addEventListener('click', function(e) {
            if (!themeDropdown.classList.contains('hidden')) {
                themeDropdown.classList.add('hidden');
            }
        });
        applyTheme();
    })();
    </script>
</body>
</html>
