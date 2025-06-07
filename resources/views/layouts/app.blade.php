<!-- =========================
  app.blade.php (UPDATED)
========================= -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - IUEA DTS</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
        };
    </script>
    <script>
        (function () {
            const root = document.documentElement;
            const THEME_KEY = 'dts-theme';
            function setTheme(theme) {
                if (theme === 'dark') {
                    root.classList.add('dark');
                } else {
                    root.classList.remove('dark');
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
            applyTheme();
        })();
    </script>
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    @include('layouts.sidebar')

    <div class="ml-64 p-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">@yield('header')</h1>
            <div class="flex items-center space-x-4">
                <button class="text-iuea-maroon dark:text-yellow-400">
                    <i class="fas fa-bell"></i>
                </button>
                <div class="relative">
                    <button class="flex items-center space-x-2">
                        <img src="https://ui-avatars.com/api/?name=User" class="h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-700">
                        <span class="text-gray-800 dark:text-gray-100">John Doe</span>
                    </button>
                </div>
            </div>
        </div>

        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>
