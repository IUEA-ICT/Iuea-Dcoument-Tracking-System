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
            <!-- IUEA Logo with background -->
            <div class="bg-white p-3 sm:p-4 rounded-full shadow-lg w-24 h-24 sm:w-32 sm:h-32 mx-auto mb-4 sm:mb-6">
                <img class="w-full h-full object-contain" 
                     src="//172.16.17.10/port/img/Logosq.png" 
                     alt="IUEA Logo">
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
                            Create Account
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>
