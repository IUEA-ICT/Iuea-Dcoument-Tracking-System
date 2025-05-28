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
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200">
    <div class="min-h-screen flex flex-col justify-center py-4 sm:py-6 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-[90%] sm:max-w-md mx-auto">
            <!-- Logo -->
            <div class="bg-white p-3 sm:p-4 rounded-full shadow-lg w-24 h-24 sm:w-32 sm:h-32 mx-auto mb-4 sm:mb-6">
                <img class="w-full h-full object-contain" src="//172.16.17.10/port/img/Logosq.png" alt="IUEA Logo">
            </div>

            <h2 class="text-center text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                Create New Account
            </h2>
            <p class="mt-2 text-center text-xs sm:text-sm text-gray-600">
                IUEA Document Tracking System
            </p>
        </div>

        <div class="mt-6 sm:mt-8 w-full max-w-[90%] sm:max-w-md mx-auto">
            <div class="bg-white py-6 sm:py-8 px-4 sm:px-10 shadow-2xl rounded-lg border-t-4 border-iuea-maroon">
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
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input id="name" name="name" type="text" required 
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" name="email" type="email" required 
                            placeholder="username@iuea.ac.ug"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>

                    <!-- Confirm Password Input -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
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
                    <p class="text-gray-600">
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
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";
        import { getAuth, createUserWithEmailAndPassword, updateProfile } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js";

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

        window.registerWithFirebase = function(event) {
            event.preventDefault();
            const form = event.target;
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const passwordConfirmation = document.getElementById('password_confirmation').value;
            const errorDiv = document.getElementById('error-message');
            const errorText = document.getElementById('error-text');
            const successDiv = document.getElementById('success-message');
            const submitButton = event.target.querySelector('button[type="submit"]');

            // Reset messages and button
            errorDiv.classList.add('hidden');
            successDiv.classList.add('hidden');
            submitButton.disabled = true;
            submitButton.innerHTML = 'Creating Account...';

            // Basic validation
            if (password !== passwordConfirmation) {
                errorDiv.classList.remove('hidden');
                errorText.textContent = 'Passwords do not match';
                submitButton.disabled = false;
                submitButton.innerHTML = 'Create Account';
                return;
            }

            if (password.length < 6) {
                errorDiv.classList.remove('hidden');
                errorText.textContent = 'Password must be at least 6 characters';
                submitButton.disabled = false;
                submitButton.innerHTML = 'Create Account';
                return;
            }

            // Create user
            createUserWithEmailAndPassword(auth, email, password)
                .then((userCredential) => {
                    // Update profile
                    return updateProfile(userCredential.user, {
                        displayName: name
                    });
                })
                .then(() => {
                    // Show success message
                    successDiv.classList.remove('hidden');
                    submitButton.innerHTML = 'Account Created Successfully!';
                    submitButton.disabled = true;
                    
                    // Clear all form inputs
                    form.reset();
                    
                    // Sign out the user
                    auth.signOut();

                    // Hide success message and reset button after 3 seconds
                    setTimeout(() => {
                        successDiv.classList.add('hidden');
                        submitButton.innerHTML = 'Create Account';
                        submitButton.disabled = false;
                    }, 3000);
                })
                .catch((error) => {
                    errorDiv.classList.remove('hidden');
                    
                    // Handle specific errors
                    switch (error.code) {
                        case 'auth/email-already-in-use':
                            errorText.textContent = 'This email is already registered';
                            break;
                        case 'auth/invalid-email':
                            errorText.textContent = 'Please enter a valid email address';
                            break;
                        case 'auth/operation-not-allowed':
                            errorText.textContent = 'Email/password registration is not enabled';
                            break;
                        case 'auth/weak-password':
                            errorText.textContent = 'Password is too weak';
                            break;
                        default:
                            errorText.textContent = 'Registration failed. Please try again';
                    }
                    
                    // Reset button
                    submitButton.disabled = false;
                    submitButton.innerHTML = 'Create Account';
                });
        };
    </script>
</body>
</html>
