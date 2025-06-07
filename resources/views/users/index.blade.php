<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users - IUEA Document Tracking</title>

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
                            'gold': '#FFD700'
                        }
                    }
                }
            }
        }
    </script>
    <script>
        (function() {
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
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                if (localStorage.getItem(THEME_KEY) === 'system') {
                    setTheme(e.matches ? 'dark' : 'light');
                }
            });
        })();
    </script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .dark .bg-white { background-color: #1e293b !important; }
        .dark .text-gray-900 { color: #f8fafc !important; }
        .dark .text-gray-600 { color: #e2e8f0 !important; }
        .dark .bg-gray-100 { background-color: #1e293b !important; }
        .dark .border-gray-200 { border-color: #334155 !important; }
        .dark .bg-gray-50 { background-color: #0f172a !important; }
        .dark .bg-yellow-100 { background-color: #854d0e !important; color: #fde68a !important; }
        .dark .bg-green-100 { background-color: #166534 !important; color: #bbf7d0 !important; }
        .dark .bg-blue-100 { background-color: #1e40af !important; color: #93c5fd !important; }
        .dark .text-gray-800 { color: #f8fafc !important; }
        .dark .bg-opacity-10 { background-color: rgba(30,41,59,0.1) !important; }
        .dark .bg-opacity-20 { background-color: rgba(30,41,59,0.2) !important; }
        .dark .bg-opacity-30 { background-color: rgba(30,41,59,0.3) !important; }
        .dark .shadow { box-shadow: 0 1px 3px rgba(0,0,0,0.5) !important; }
        .dark .card-bg { background-color: #22304a !important; border-color: #334155 !important; }
        .dark .sidebar-bg { background: linear-gradient(to bottom, #23263a, #3a1a1a) !important; }
        .sidebar-bg { background: linear-gradient(to bottom, #800000, #5f0000) !important; }
        .sidebar-active { background-color: #f3f4f6 !important; color: #800000 !important; border-left: 4px solid #800000 !important; font-weight: 600 !important; }
        .dark .sidebar-active { background-color: #334155 !important; color: #FFD700 !important; border-left: 4px solid #FFD700 !important; font-weight: 600 !important; }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <div class="fixed inset-y-0 left-0 w-64 sidebar-bg text-white shadow-xl">
        <div class="flex items-center justify-center h-20 border-b border-white/10 bg-black/10">
            <div class="bg-white p-2 rounded-full">
                <img src="//172.16.17.10/port/img/Logosq.png" class="h-10 w-10" alt="IUEA Logo">
            </div>
            <div class="ml-3">
                <span class="font-bold text-lg">IUEA</span>
                <span class="text-xs block opacity-70 dark:text-gray-300">Document Tracking</span>
            </div>
        </div>
        <nav class="mt-8 px-4">
            <div class="space-y-4">
                <a href="/dashboard" class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors hover:bg-white/5 dark:hover:bg-[#23263a]">
                    <i class="fas fa-home w-5 h-5"></i>
                    <span class="ml-3">Dashboard</span>
                </a>
                <div class="px-4 py-2">
                    <h3 class="text-xs uppercase tracking-wider text-white/50 dark:text-gray-400">Documents</h3>
                </div>
                <a href="/documents" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 dark:hover:bg-[#23263a]">
                    <i class="fas fa-file w-5 h-5"></i>
                    <span class="ml-3">All Documents</span>
                </a>
                <a href="/documents/pending" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 dark:hover:bg-[#23263a]">
                    <i class="fas fa-clock w-5 h-5"></i>
                    <span class="ml-3">Pending</span>
                    <span class="ml-auto bg-white/20 dark:bg-white/10 px-2 py-0.5 rounded-full text-xs dark:text-yellow-100">28</span>
                </a>
                <div class="px-4 py-2 mt-6">
                    <h3 class="text-xs uppercase tracking-wider text-white/50 dark:text-gray-400">Management</h3>
                </div>
                <a href="/users" class="flex items-center px-4 py-3 text-sm rounded-lg sidebar-active">
                    <i class="fas fa-users w-5 h-5"></i>
                    <span class="ml-3">Users</span>
                </a>
                <a href="/reports" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 dark:hover:bg-[#23263a]">
                    <i class="fas fa-chart-bar w-5 h-5"></i>
                    <span class="ml-3">Reports</span>
                </a>
            </div>
            <div class="absolute bottom-0 left-0 right-0 p-4">
                <hr class="border-white/10 mb-4">
                <a href="{{ route('logout') }}" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 text-red-300 hover:text-red-200">
                    <i class="fas fa-sign-out-alt w-5 h-5"></i>
                    <span class="ml-3">Logout</span>
                </a>
            </div>
        </nav>
    </div>
    <div class="ml-64 p-8 min-h-screen">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-8">User Management</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="card-bg p-6 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <div class="flex items-center">
                    <i class="fas fa-users text-2xl text-blue-500 dark:text-blue-300"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500 dark:text-gray-300">Total Users</h3>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">245</p>
                    </div>
                </div>
            </div>
            <div class="card-bg p-6 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <div class="flex items-center">
                    <i class="fas fa-user-check text-2xl text-green-500 dark:text-green-300"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500 dark:text-gray-300">Active Users</h3>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">198</p>
                    </div>
                </div>
            </div>
            <div class="card-bg p-6 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <div class="flex items-center">
                    <i class="fas fa-user-clock text-2xl text-yellow-500 dark:text-yellow-300"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500 dark:text-gray-300">Pending Users</h3>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">32</p>
                    </div>
                </div>
            </div>
            <div class="card-bg p-6 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <div class="flex items-center">
                    <i class="fas fa-user-times text-2xl text-red-500 dark:text-red-300"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500 dark:text-gray-300">Inactive Users</h3>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">15</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add search, filters, and table content here if needed -->
        <div class="overflow-x-auto card-bg rounded-lg shadow border dark:border-[#334155]">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Role</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Department</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">john@iuea.ac.ug</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">IT</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-100">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                            <i class="fas fa-edit text-blue-500 dark:text-blue-300 cursor-pointer"></i>
                            <i class="fas fa-trash text-red-500 dark:text-red-300 cursor-pointer ml-2"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
