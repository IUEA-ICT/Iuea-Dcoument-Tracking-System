<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IUEA - Document Tracking System</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Remixicon for theme icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <!-- Google Fonts -->
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
            <!-- IUEA Logo with background -->
            <div class="bg-white p-3 sm:p-4 rounded-full shadow-lg w-24 h-24 sm:w-32 sm:h-32 mx-auto mb-4 sm:mb-6">
                <a href="/" class="block hover:opacity-80 transition-opacity">
                    <img class="w-full h-full object-contain"
                         src="//172.16.17.10/port/img/Logosq.png"
                         alt="IUEA Logo">
                </a>
            </div>

            <h2 class="text-center text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white tracking-tight">
                Document Tracking System
            </h2>
            <p class="mt-2 text-center text-xs sm:text-sm text-gray-600 dark:text-gray-300">
                Secure Access Portal
            </p>
        </div>

        <div class="mt-6 sm:mt-8 w-full max-w-[90%] sm:max-w-md mx-auto">
            <div class="bg-white dark:bg-gray-900 py-6 sm:py-8 px-4 sm:px-10 shadow-2xl rounded-lg border-t-4 border-iuea-maroon dark:border-yellow-400 transition-colors">
                <form class="space-y-4 sm:space-y-6" onsubmit="loginWithFirebase(event)">
                    <!-- Error Message Area -->
                    <div id="error-message" class="hidden rounded-md bg-red-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-circle text-red-400"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700" id="error-text"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                            Email
                        </label>
                        <div class="mt-1 relative">
                            <input id="email" name="email" type="email" required
                                placeholder="username@iuea.ac.ug"
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400
                                focus:outline-none focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                            Password
                        </label>
                        <div class="mt-1 relative">
                            <input id="password" name="password" type="password" required
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400
                                focus:outline-none focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-iuea-maroon focus:ring-iuea-maroon">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700 dark:text-gray-200">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="{{ route('password.request') }}" class="font-medium text-iuea-maroon hover:text-opacity-80">
                                Forgot password?
                            </a>
                        </div>
                    </div>

                    <!-- Sign In Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-iuea-maroon hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-iuea-maroon transition-all duration-200">
                            Sign in to your account
                        </button>
                    </div>
                </form>

                <!-- Footer -->
                <div class="mt-4 sm:mt-6 text-center text-xs sm:text-sm">
                    <p class="text-gray-600 dark:text-gray-300">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-medium text-iuea-maroon hover:text-opacity-80 underline">
                            Create Account
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Firebase Auth Script -->
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";
        import { getAuth, signInWithEmailAndPassword, setPersistence, browserSessionPersistence, browserLocalPersistence } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js";

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

        window.loginWithFirebase = async function (event) {
            event.preventDefault();

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const rememberMe = document.getElementById("remember-me").checked;
            const errorDiv = document.getElementById("error-message");
            const errorText = document.getElementById("error-text");
            const submitButton = event.target.querySelector('button[type="submit"]');

            // Reset error message
            errorDiv.classList.add('hidden');

            // Add loading state
            submitButton.disabled = true;
            submitButton.innerHTML = `
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Signing in...
            `;

            try {
                // Set persistence based on remember me checkbox
                await setPersistence(auth, rememberMe ? browserLocalPersistence : browserSessionPersistence);

                // Sign in
                const userCredential = await signInWithEmailAndPassword(auth, email, password);

                // Save user data if remember me is checked
                if (rememberMe) {
                    localStorage.setItem('user_email', email);
                } else {
                    localStorage.removeItem('user_email');
                }

                window.location.href = "/dashboard";
            } catch (error) {
                errorDiv.classList.remove('hidden');

                switch (error.code) {
                    case 'auth/invalid-credential':
                        errorText.textContent = 'Invalid email or password';
                        break;
                    case 'auth/user-not-found':
                        errorText.textContent = 'No account found with this email';
                        break;
                    case 'auth/too-many-requests':
                        errorText.textContent = 'Too many attempts. Please try again later';
                        break;
                    default:
                        errorText.textContent = 'An error occurred. Please try again';
                }

                submitButton.disabled = false;
                submitButton.innerHTML = 'Sign in to your account';
            }
        };

        // Check for remembered email on page load
        document.addEventListener('DOMContentLoaded', () => {
            const rememberedEmail = localStorage.getItem('user_email');
            if (rememberedEmail) {
                document.getElementById('email').value = rememberedEmail;
                document.getElementById('remember-me').checked = true;
            }
        });
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
