<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Tracking System</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#8B0000',
                        secondary: '#4B5563'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-bg {
            background-image: url('https://readdy.ai/api/search-image?query=elegant%20corporate%20office%20environment%20with%20floating%20digital%20documents%20and%20red%20glowing%20connection%20lines%2C%20modern%20minimalist%20design%2C%20clean%20white%20workspace%20with%20subtle%20technology%20elements%2C%20professional%20atmosphere%20with%20depth%20of%20field%2C%20soft%20lighting%2C%20no%20people%20or%20text&width=1600&height=800&seq=67890&orientation=landscape');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        input:focus {
            outline: none;
        }
        .dark .hero-bg {
            background-image: url('https://readdy.ai/api/search-image?query=elegant%20corporate%20office%20environment%20with%20floating%20digital%20documents%20and%20red%20glowing%20connection%20lines%2C%20modern%20minimalist%20design%2C%20clean%20white%20workspace%20with%20subtle%20technology%20elements%2C%20professional%20atmosphere%20with%20depth%20of%20field%2C%20soft%20lighting%2C%20no%20people%20or%20text&width=1600&height=800&seq=67890&orientation=landscape');
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-[#0f172a] transition-colors duration-300">

    {{-- Include your full content here like header, hero, features, footer, etc. --}}
    {{-- Since your content is very long, you can paste the rest below this line --}}

    <script>
        (function() {
            const root = document.documentElement;
            const themeToggleBtn = document.getElementById('theme-toggle-btn');
            const themeDropdown = document.getElementById('theme-dropdown');
            const themeToggleIcon = document.getElementById('theme-toggle-icon');
            const themeToggleBtnMobile = document.getElementById('theme-toggle-btn-mobile');
            const themeDropdownMobile = document.getElementById('theme-dropdown-mobile');
            const themeToggleIconMobile = document.getElementById('theme-toggle-icon-mobile');
            const THEME_KEY = 'dts-theme';

            function setTheme(theme) {
                if (theme === 'dark') {
                    root.classList.add('dark');
                    if (themeToggleIcon) themeToggleIcon.className = 'ri-sun-line ri-lg';
                    if (themeToggleIconMobile) themeToggleIconMobile.className = 'ri-sun-line ri-lg';
                } else {
                    root.classList.remove('dark');
                    if (themeToggleIcon) themeToggleIcon.className = 'ri-moon-line ri-lg';
                    if (themeToggleIconMobile) themeToggleIconMobile.className = 'ri-moon-line ri-lg';
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

            if (themeToggleBtn && themeDropdown) {
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
            }

            if (themeToggleBtnMobile && themeDropdownMobile) {
                themeToggleBtnMobile.addEventListener('click', function(e) {
                    e.stopPropagation();
                    themeDropdownMobile.classList.toggle('hidden');
                });
                themeDropdownMobile.querySelectorAll('button[data-theme]').forEach(btn => {
                    btn.addEventListener('click', function() {
                        chooseTheme(this.getAttribute('data-theme'));
                        themeDropdownMobile.classList.add('hidden');
                    });
                });
            }

            document.addEventListener('click', function(e) {
                if (themeDropdown && !themeDropdown.classList.contains('hidden')) {
                    themeDropdown.classList.add('hidden');
                }
                if (themeDropdownMobile && !themeDropdownMobile.classList.contains('hidden')) {
                    themeDropdownMobile.classList.add('hidden');
                }
            });

            applyTheme();
        })();
    </script>
</body>
</html>
