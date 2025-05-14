<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - IUEA Document Tracking</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8 space-y-6">
            <!-- Logo and Title -->
            <div class="text-center space-y-2">
                <img src="https://www.iuea.ac.ug/wp-content/uploads/2021/06/cropped-IUEA-Logo-min.png" 
                     alt="IUEA Logo" 
                     class="h-20 mx-auto">
                <h1 class="text-2xl font-bold text-gray-900">Welcome Back</h1>
                <p class="text-gray-500 text-sm">Document Tracking System</p>
            </div>

            <!-- Login Form -->
            <form class="space-y-4">
                <!-- Email Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" 
                           required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <!-- Password Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" 
                           required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800">Forgot password?</a>
                </div>

                <!-- Login Button -->
                <button type="submit" 
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                    Sign in
                </button>
            </form>

            <!-- Register Link -->
            <div class="text-center text-sm text-gray-600">
                Don't have an account? 
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Register now</a>
            </div>
        </div>
    </div>
</body>
</html>
