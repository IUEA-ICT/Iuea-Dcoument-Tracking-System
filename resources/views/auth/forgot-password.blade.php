<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password - IUEA Document Tracking</title>
    
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
    <div class="min-h-screen flex flex-col justify-center py-6 pb-16 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <!-- IUEA Logo -->
            <div class="bg-white p-4 rounded-full shadow-lg w-32 h-32 mx-auto mb-6">
                <img class="w-full h-full object-contain" 
                     src="//172.16.17.10/port/img/Logosq.png" 
                     alt="IUEA Logo">
            </div>
            
            <h2 class="text-center text-3xl font-extrabold text-gray-900">Reset Password</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Enter your email address and we'll send you a link to reset your password
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-2xl rounded-lg sm:px-10 border-t-4 border-iuea-maroon">
                <form class="space-y-6" action="#" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" required
                                placeholder="username@iuea.ac.ug"
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400
                                focus:outline-none focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-iuea-maroon hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-iuea-maroon transition-all duration-200">
                            Send Reset Link
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center text-sm">
                    <a href="/login" class="font-medium text-iuea-maroon hover:text-opacity-80">
                        Back to login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-iuea-maroon text-white py-3 text-center text-sm fixed bottom-0 left-0 right-0 w-full z-50 shadow-lg">
        © 2025 International University of East Africa. All rights reserved
    </div>
</body>
</html>
