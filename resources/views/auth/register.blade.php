<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - IUEA Document Tracking System</title>

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
                <img class="w-full h-full object-contain" src="//172.16.17.10/port/img/Logosq.png" alt="IUEA Logo">
            </div>

            <h2 class="text-center text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white tracking-tight">
                Create New Account
            </h2>
            <p class="mt-2 text-center text-xs sm:text-sm text-gray-600 dark:text-gray-300">
                IUEA Document Tracking System
            </p>
        </div>

        <div class="mt-6 sm:mt-8 w-full max-w-[90%] sm:max-w-md mx-auto">
            <div class="bg-white dark:bg-gray-900 py-6 sm:py-8 px-4 sm:px-10 shadow-2xl rounded-lg border-t-4 border-iuea-maroon dark:border-yellow-400 transition-colors">
                <form class="space-y-4 sm:space-y-6" onsubmit="registerWithFirebase(event)">
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

                    <!-- Success Message Area -->
                    <div id="success-message" class="hidden rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle text-green-400"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700">Account created successfully! You can now sign in.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Full Name Input -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Full Name</label>
                        <input id="name" name="name" type="text" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                        <input id="email" name="email" type="email" required
                            placeholder="username@iuea.ac.ug"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
                        <input id="password" name="password" type="password" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Confirm Password Input -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Register Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-iuea-maroon hover:bg-opacity-90 focus:ring-2 focus:ring-offset-2 focus:ring-iuea-maroon transition-all duration-200">
                            Create Account
                        </button>
                    </div>
                </form>

                <!-- Footer -->
                <div class="mt-4 sm:mt-6 text-center text-xs sm:text-sm">
                    <p class="text-gray-600 dark:text-gray-300">
                        Already have an account?
                        <a href="/login" class="font-medium text-iuea-maroon hover:text-opacity-80 underline" id="signInLink">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Firebase Auth Script -->
    <script type="module">
    import { initializeApp, setLogLevel } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";
    import { getAuth, createUserWithEmailAndPassword, updateProfile, signOut} from "https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js";
    import { getFirestore,doc,setDoc, serverTimestamp } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-firestore.js";

    // Activer les logs de debug Firebase
    setLogLevel("debug");

    // Configuration Firebase
    const firebaseConfig = {
        apiKey: "AIzaSyBydrQlgL1-AI9pBFiR8w6Waz1D0tdvq8g",
        authDomain: "iuea-dcoument-tracker.firebaseapp.com",
        projectId: "iuea-dcoument-tracker",
        storageBucket: "iuea-dcoument-tracker.firebasestorage.app",
        messagingSenderId: "343956353748",
        appId: "1:343956353748:web:12bf8d958f316fa86ec141",
        measurementId: "G-JK5R5BQZ8G"
    };

    // Initialiser Firebase
    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);
    const db = getFirestore(app);

    // Fonction d'inscription
    window.registerWithFirebase = async function(event) {
        event.preventDefault();

        const form = event.target;
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const confirm = document.getElementById('password_confirmation').value;
        const errorDiv = document.getElementById('error-message');
        const errorText = document.getElementById('error-text');
        const successDiv = document.getElementById('success-message');
        const submitButton = form.querySelector('button[type="submit"]');

        errorDiv.classList.add('hidden');
        successDiv.classList.add('hidden');
        submitButton.disabled = true;
        submitButton.innerHTML = 'Creating Account...';

        if (password !== confirm) {
            showError('Passwords do not match');
            return;
        }

        if (password.length < 6) {
            showError('Password must be at least 6 characters');
            return;
        }

        try {
            // Création de l'utilisateur
            const userCredential = await createUserWithEmailAndPassword(auth, email, password);
            const user = userCredential.user;

            // Mise à jour du nom
            await updateProfile(user, { displayName: name });

            // Enregistrement dans Firestore
            try {
                await setDoc(doc(db, "users", user.uid), {
                    uid: user.uid,
                    name: name,
                    email: email,
                    role: "user",
                    createdAt: serverTimestamp()
                });
                console.log("🔥 Firestore write successful");
            } catch (e) {
                console.error("❌ Firestore write failed: ", e);
                showError('Erreur lors de l’enregistrement Firestore');
                return;
            }

            // Succès
            successDiv.classList.remove('hidden');
            submitButton.innerHTML = 'Account Created Successfully!';
            form.reset();
            await signOut(auth);

            setTimeout(() => {
                successDiv.classList.add('hidden');
                submitButton.innerHTML = 'Create Account';
                submitButton.disabled = false;
            }, 3000);
        } catch (error) {
            console.error("❌ Firebase Auth error:", error);
            switch (error.code) {
                case 'auth/email-already-in-use':
                    showError('This email is already registered');
                    break;
                case 'auth/invalid-email':
                    showError('Please enter a valid email address');
                    break;
                case 'auth/operation-not-allowed':
                    showError('Email/password registration is not enabled');
                    break;
                case 'auth/weak-password':
                    showError('Password is too weak');
                    break;
                default:
                    showError('Registration failed. Please try again');
            }
        }

        function showError(message) {
            errorDiv.classList.remove('hidden');
            errorText.textContent = message;
            submitButton.disabled = false;
            submitButton.innerHTML = 'Create Account';
        }
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
