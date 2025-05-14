<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IUEA Document Tracking System</title>

    <!-- Favicon -->
    <link rel="icon" href="https://www.iuea.ac.ug/wp-content/uploads/2022/05/Favicon.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Orbitron:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        orbitron: ['Orbitron', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a',
                        },
                        dark: {
                            100: '#1a1a2e',
                            200: '#16213e',
                            300: '#0f3460',
                            400: '#0a1931',
                            500: '#080f1a',
                            600: '#050912',
                            700: '#030609',
                            800: '#020305',
                            900: '#010203',
                        }
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        glow: {
                            '0%': { 'box-shadow': '0 0 5px rgba(20, 184, 166, 0.5), 0 0 10px rgba(20, 184, 166, 0.2)' },
                            '100%': { 'box-shadow': '0 0 10px rgba(20, 184, 166, 0.8), 0 0 20px rgba(20, 184, 166, 0.4)' }
                        }
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'cyber-grid': "url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%230f766e' fill-opacity='0.1'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\")",
                    }
                }
            }
        }
    </script>

    <style type="text/css">
        [x-cloak] {
            display: none !important;
        }

        .text-glow {
            text-shadow: 0 0 10px rgba(20, 184, 166, 0.5), 0 0 20px rgba(20, 184, 166, 0.3);
        }

        .text-glow-sm {
            text-shadow: 0 0 5px rgba(20, 184, 166, 0.5), 0 0 10px rgba(20, 184, 166, 0.2);
        }

        .bg-dark-grad {
            background: linear-gradient(to bottom, #0a1931, #0f3460);
        }

        .border-glow {
            box-shadow: 0 0 5px rgba(20, 184, 166, 0.5), 0 0 10px rgba(20, 184, 166, 0.2);
        }
    </style>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased bg-dark-400 bg-cyber-grid text-gray-200">

    <!-- Navigation -->
    <nav class="bg-dark-400/90 backdrop-blur-sm shadow-md border-b border-primary-700/30 fixed w-full z-20"
        x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ url('/') }}" class="flex items-center">
                            <img class="h-8 w-auto"
                                src="https://www.iuea.ac.ug/wp-content/uploads/2022/05/IUEA-Logo.png" alt="IUEA Logo">
                            <span
                                class="ml-3 text-lg font-orbitron font-semibold text-primary-400 text-glow-sm">DTS</span>
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#home"
                            class="border-primary-500 text-primary-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Home
                        </a>
                        <a href="#features"
                            class="border-transparent text-gray-400 hover:border-primary-400 hover:text-primary-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Features
                        </a>
                        <a href="#about"
                            class="border-transparent text-gray-400 hover:border-primary-400 hover:text-primary-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            About
                        </a>
                        <a href="#contact"
                            class="border-transparent text-gray-400 hover:border-primary-400 hover:text-primary-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Contact
                        </a>
                    </div>
                </div>

                <div class="-mr-2 flex items-center sm:hidden">
                    <!-- Mobile menu button -->
                    <button @click="open = !open" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-primary-400 hover:bg-dark-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="open" class="sm:hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#home"
                    class="bg-dark-300 border-primary-500 text-primary-300 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Home
                </a>
                <a href="#features"
                    class="border-transparent text-gray-400 hover:bg-dark-300 hover:border-primary-400 hover:text-primary-300 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Features
                </a>
                <a href="#about"
                    class="border-transparent text-gray-400 hover:bg-dark-300 hover:border-primary-400 hover:text-primary-300 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    About
                </a>
                <a href="#contact"
                    class="border-transparent text-gray-400 hover:bg-dark-300 hover:border-primary-400 hover:text-primary-300 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-20 sm:pt-24 lg:pt-32 relative overflow-hidden">
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-dark-500/70 to-dark-400/40"></div>

        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0">
            <div
                class="absolute top-1/4 left-1/4 w-72 h-72 bg-primary-500/5 rounded-full filter blur-3xl animate-pulse-slow">
            </div>
            <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-primary-600/5 rounded-full filter blur-3xl animate-pulse-slow"
                style="animation-delay: 1s"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <h1>
                        <span
                            class="block text-sm font-orbitron uppercase tracking-wide text-primary-400">Introducing</span>
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                            <span class="block text-white font-orbitron">IUEA Document</span>
                            <span class="block text-primary-400 text-glow font-orbitron">Tracking System</span>
                        </span>
                    </h1>
                    <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        A streamlined solution for efficiently managing, tracking, and securing all your important
                        academic and administrative documents.
                    </p>
                    <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
                        <p class="text-base font-medium text-white">
                            Get started with our document tracking system today.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md">
                                <a href=""
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-dark-500 bg-primary-400 hover:bg-primary-500 md:py-4 md:text-lg md:px-10 shadow-lg shadow-primary-500/20 transition-all duration-300 ease-in-out transform hover:scale-105">
                                    Get started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#features"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-primary-600 text-base font-medium rounded-md text-primary-300 bg-transparent hover:bg-primary-900/30 md:py-4 md:text-lg md:px-10 animate-glow transition-all duration-300 ease-in-out">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <div
                        class="relative mx-auto w-full rounded-lg shadow-2xl border border-primary-700/30 overflow-hidden animate-glow">
                        <div class="relative block w-full bg-dark-400 rounded-lg overflow-hidden">
                            <img class="w-full opacity-90 mix-blend-luminosity"
                                src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80"
                                alt="Document management">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-dark-500/70 via-transparent to-primary-900/20">
                            </div>
                            <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                                <div
                                    class="rounded-full bg-primary-500/20 p-3 border border-primary-500/30 animate-pulse">
                                    <svg class="h-16 w-16 text-primary-400" fill="currentColor" viewBox="0 0 84 84">
                                        <circle opacity="0.2" cx="42" cy="42" r="42" fill="currentColor" />
                                        <path
                                            d="M55.5039 40.3359L37.1094 28.0729C35.7803 27.1869 34 28.1396 34 29.737V54.263C34 55.8604 35.7803 56.8131 37.1094 55.9271L55.5038 43.6641C56.6913 42.8725 56.6913 41.1275 55.5039 40.3359Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 sm:py-24 bg-dark-500 relative overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cyber-grid opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-400 font-orbitron font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    A better way to manage documents
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-400 lg:mx-auto">
                    Our document tracking system provides a comprehensive solution for all your document management
                    needs.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div
                        class="relative p-6 rounded-lg border border-primary-900/30 bg-dark-400/50 backdrop-blur-sm transition-all duration-300 hover:border-primary-700/50 hover:shadow-lg hover:shadow-primary-900/20">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-900 text-primary-400 border border-primary-600">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-white">Real-time Tracking</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-400">
                            Track the status of your documents in real-time. Know exactly where your document is in the
                            approval process.
                        </dd>
                    </div>

                    <div
                        class="relative p-6 rounded-lg border border-primary-900/30 bg-dark-400/50 backdrop-blur-sm transition-all duration-300 hover:border-primary-700/50 hover:shadow-lg hover:shadow-primary-900/20">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-900 text-primary-400 border border-primary-600">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-white">Secure Storage</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-400">
                            All documents are securely stored with industry-standard encryption, ensuring your sensitive
                            information remains protected.
                        </dd>
                    </div>

                    <div
                        class="relative p-6 rounded-lg border border-primary-900/30 bg-dark-400/50 backdrop-blur-sm transition-all duration-300 hover:border-primary-700/50 hover:shadow-lg hover:shadow-primary-900/20">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-900 text-primary-400 border border-primary-600">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-white">Automated Notifications</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-400">
                            Receive timely notifications about document status changes, approvals, rejections, and
                            pending reviews.
                        </dd>
                    </div>

                    <div
                        class="relative p-6 rounded-lg border border-primary-900/30 bg-dark-400/50 backdrop-blur-sm transition-all duration-300 hover:border-primary-700/50 hover:shadow-lg hover:shadow-primary-900/20">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-900 text-primary-400 border border-primary-600">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-white">Digital Workflow</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-400">
                            Streamline your document approval process with customizable workflows to match your
                            institutional requirements.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 sm:py-24 bg-dark-grad">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div>
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl font-orbitron">
                        About IUEA Document Tracking System
                    </h2>
                    <p class="mt-3 max-w-3xl text-lg text-gray-400">
                        The IUEA Document Tracking System was developed to address the challenges of managing academic
                        and administrative documents within the International University of East Africa.
                    </p>
                    <div class="mt-8 space-y-4">
                        <div
                            class="flex p-4 rounded-lg bg-dark-300/50 border border-primary-900/30 transition-all duration-300 hover:border-primary-700/50">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-primary-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-white">Efficiency</h3>
                                <p class="mt-2 text-base text-gray-400">
                                    Reduces the time spent tracking and managing documents by up to 70%.
                                </p>
                            </div>
                        </div>

                        <div
                            class="flex p-4 rounded-lg bg-dark-300/50 border border-primary-900/30 transition-all duration-300 hover:border-primary-700/50">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-primary-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-white">Transparency</h3>
                                <p class="mt-2 text-base text-gray-400">
                                    Provides clear visibility into document processing stages for all stakeholders.
                                </p>
                            </div>
                        </div>

                        <div
                            class="flex p-4 rounded-lg bg-dark-300/50 border border-primary-900/30 transition-all duration-300 hover:border-primary-700/50">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-primary-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-white">Accessibility</h3>
                                <p class="mt-2 text-base text-gray-400">
                                    Access your documents and their status from anywhere, at any time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0">
                    <div
                        class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden border border-primary-700/30 shadow-xl shadow-primary-900/10 animate-glow">
                        <div class="relative">
                            <img class="object-cover w-full mix-blend-luminosity"
                                src="https://images.unsplash.com/photo-1574887427561-d3d5d58c9273?ixlib=rb-1.2.1&auto=format&fit=crop&w=2700&q=80"
                                alt="Team working on documents">
                            <div class="absolute inset-0 bg-gradient-to-tr from-dark-400/60 to-primary-900/20"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-dark-400 relative overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cyber-grid opacity-10"></div>
        <div class="absolute inset-0 z-0 bg-gradient-radial from-primary-900/10 to-transparent"></div>

        <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl font-orbitron text-glow-sm">
                    Trusted by thousands of users
                </h2>
                <p class="mt-3 text-xl text-primary-200 sm:mt-4">
                    Our document tracking system is making a difference in document management efficiency.
                </p>
            </div>
            <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
                <div
                    class="flex flex-col p-6 rounded-lg bg-dark-300/30 border border-primary-700/20 shadow-lg animate-glow">
                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-primary-300">
                        Documents Processed
                    </dt>
                    <dd class="order-1 text-5xl font-extrabold text-white font-orbitron text-glow">
                        100k+
                    </dd>
                </div>
                <div
                    class="flex flex-col mt-10 sm:mt-0 p-6 rounded-lg bg-dark-300/30 border border-primary-700/20 shadow-lg animate-glow">
                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-primary-300">
                        Active Users
                    </dt>
                    <dd class="order-1 text-5xl font-extrabold text-white font-orbitron text-glow">
                        5k+
                    </dd>
                </div>
                <div
                    class="flex flex-col mt-10 sm:mt-0 p-6 rounded-lg bg-dark-300/30 border border-primary-700/20 shadow-lg animate-glow">
                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-primary-300">
                        Time Saved
                    </dt>
                    <dd class="order-1 text-5xl font-extrabold text-white font-orbitron text-glow">
                        50%
                    </dd>
                </div>
            </dl>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-dark-500">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="divide-y divide-primary-900/30">
                <div class="pb-8 lg:grid lg:grid-cols-2 lg:gap-8">
                    <h2
                        class="text-2xl font-extrabold tracking-tight sm:text-3xl text-white font-orbitron text-glow-sm">
                        Get in Touch
                    </h2>
                    <div
                        class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-1">
                        <div
                            class="p-4 rounded-lg bg-dark-400/50 border border-primary-900/30 transition-all duration-300 hover:border-primary-700/50">
                            <h3 class="text-lg leading-6 font-medium text-white">
                                Support
                            </h3>
                            <dl class="mt-2 text-base text-gray-400">
                                <div>
                                    <dt class="sr-only">Email</dt>
                                    <dd class="flex items-center">
                                        <svg class="h-4 w-4 text-primary-400 mr-2" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        support@iuea.ac.ug
                                    </dd>
                                </div>
                                <div class="mt-1">
                                    <dt class="sr-only">Phone number</dt>
                                    <dd class="flex items-center">
                                        <svg class="h-4 w-4 text-primary-400 mr-2" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        +256 700 000 000
                                    </dd>
                                </div>
                            </dl>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-dark-400/50 border border-primary-900/30 transition-all duration-300 hover:border-primary-700/50">
                            <h3 class="text-lg leading-6 font-medium text-white">
                                Administration
                            </h3>
                            <dl class="mt-2 text-base text-gray-400">
                                <div>
                                    <dt class="sr-only">Email</dt>
                                    <dd class="flex items-center">
                                        <svg class="h-4 w-4 text-primary-400 mr-2" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        admin@iuea.ac.ug
                                    </dd>
                                </div>
                                <div class="mt-1">
                                    <dt class="sr-only">Phone number</dt>
                                    <dd class="flex items-center">
                                        <svg class="h-4 w-4 text-primary-400 mr-2" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        +256 701 000 000
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="pt-8">
                    <div class="max-w-7xl mx-auto md:grid md:grid-cols-2 md:gap-8">
                        <div class="mt-12 md:mt-0 p-4 rounded-lg bg-dark-400/50 border border-primary-900/30">
                            <h3 class="text-lg font-medium text-white">Location</h3>
                            <div class="mt-3">
                                <p class="text-base text-gray-400">
                                    International University of East Africa<br>
                                    8-10 Mobutu Road, Kabalagala<br>
                                    P.O.BOX 35502<br>
                                    Kampala, Uganda
                                </p>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8 mt-8 md:mt-0">
                            <div class="p-4 rounded-lg bg-dark-400/50 border border-primary-900/30">
                                <h3 class="text-lg font-medium text-white">Follow Us</h3>
                                <div class="flex space-x-6 md:order-2 mt-3">
                                    <a href="#"
                                        class="text-gray-400 hover:text-primary-400 transition-colors duration-300">
                                        <span class="sr-only">Facebook</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="text-gray-400 hover:text-primary-400 transition-colors duration-300">
                                        <span class="sr-only">Twitter</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path
                                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="text-gray-400 hover:text-primary-400 transition-colors duration-300">
                                        <span class="sr-only">Instagram</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark-600 border-t border-primary-900/30">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
            <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                <div class="px-5 py-2">
                    <a href="#home"
                        class="text-base text-gray-400 hover:text-primary-400 transition-colors duration-300">
                        Home
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#features"
                        class="text-base text-gray-400 hover:text-primary-400 transition-colors duration-300">
                        Features
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#about"
                        class="text-base text-gray-400 hover:text-primary-400 transition-colors duration-300">
                        About
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#contact"
                        class="text-base text-gray-400 hover:text-primary-400 transition-colors duration-300">
                        Contact
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-400 hover:text-primary-400 transition-colors duration-300">
                        Privacy
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-400 hover:text-primary-400 transition-colors duration-300">
                        Terms
                    </a>
                </div>
            </nav>
            <div class="mt-8 flex justify-center space-x-6">
                <span class="inline-flex items-center text-primary-400">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="font-orbitron text-glow-sm">DTS</span>
                </span>
            </div>
            <p class="mt-8 text-center text-base text-gray-500">
                &copy; {{ date('Y') }} International University of East Africa. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 64, // Account for fixed header
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>