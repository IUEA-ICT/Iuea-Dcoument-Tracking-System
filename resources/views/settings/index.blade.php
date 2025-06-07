<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings - IUEA Document Tracking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
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
        .dark .text-gray-800 { color: #f8fafc !important; }
        .dark .text-gray-700 { color: #e2e8f0 !important; }
        .dark .text-gray-600 { color: #cbd5e1 !important; }
        .dark .text-gray-500 { color: #cbd5e1 !important; }
        .dark .border-gray-200 { border-color: #334155 !important; }
        .dark .bg-gray-50 { background-color: #0f172a !important; }
        .dark .bg-gray-800 { background-color: #1e293b !important; }
        .dark .bg-gray-100 { background-color: #22304a !important; }
        .dark .border-gray-600 { border-color: #475569 !important; }
        .dark .hover\:bg-gray-50:hover { background-color: #334155 !important; }
        .dark .shadow-sm { box-shadow: 0 1px 3px rgba(0,0,0,0.5) !important; }
        .dark .card-bg { background-color: #22304a !important; border-color: #334155 !important; }
        .dark .sidebar-bg { background: linear-gradient(to bottom, #23263a, #3a1a1a) !important; }
        .sidebar-bg { background: linear-gradient(to bottom, #800000, #5f0000) !important; }
        .sidebar-active { background-color: #f3f4f6 !important; color: #800000 !important; border-left: 4px solid #800000 !important; font-weight: 600 !important; }
        .dark .sidebar-active { background-color: #334155 !important; color: #FFD700 !important; border-left: 4px solid #FFD700 !important; font-weight: 600 !important; }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
<!-- All your existing content remains the same -->
 <!-- Content as already in your file -->
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-gradient-to-b from-iuea-maroon to-[#5f0000] text-white shadow-xl">
        <!-- Include the same sidebar as dashboard -->
    </div>

    <!-- Main Content -->
    <div class="ml-64 min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <!-- Top Bar with Breadcrumb -->
        <div class="bg-white border-b px-8 py-4">
            <div class="flex items-center space-x-2 text-sm">
                <a href="/dashboard" class="text-gray-500 hover:text-iuea-maroon">Dashboard</a>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                <span class="text-gray-800 font-medium">Settings</span>
            </div>
        </div>

        <div class="p-8">
            <!-- Settings Header -->
            <div class="flex justify-between items-start mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Account Settings</h1>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">Manage your profile and preferences</p>
                </div>
                <button onclick="history.back()" class="flex items-center px-4 py-2 text-sm text-gray-600 hover:text-iuea-maroon bg-white rounded-lg border border-gray-200 hover:border-iuea-maroon/20 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>
                    <a href="/dashboard">Back to Dashboard</a>
                </button>
            </div>

            <!-- Theme Toggle Option -->
            <div class="mb-8 max-w-xl">
                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-6 flex items-center justify-between shadow-sm">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-1">Theme</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-300">Choose your preferred appearance mode.</p>
                    </div>
                    <div>
                        <div class="relative">
                            <button id="theme-toggle-btn" type="button" class="w-10 h-10 flex items-center justify-center text-gray-700 dark:text-yellow-300 hover:text-iuea-maroon dark:hover:text-yellow-400 transition-colors bg-gray-100 dark:bg-gray-700 rounded-full border border-gray-200 dark:border-gray-600" aria-label="Toggle Theme">
                                <i id="theme-toggle-icon" class="ri-moon-line ri-lg"></i>
                            </button>
                            <div id="theme-dropdown" class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg py-2 z-50 hidden">
                                <button type="button" class="w-full flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition" data-theme="light">
                                    <i class="ri-sun-line mr-2"></i> Light Mode
                                </button>
                                <button type="button" class="w-full flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition" data-theme="dark">
                                    <i class="ri-moon-line mr-2"></i> Dark Mode
                                </button>
                                <button type="button" class="w-full flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition" data-theme="system">
                                    <i class="ri-computer-line mr-2"></i> System Default
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Content -->
            <div class="grid grid-cols-12 gap-6">
                <!-- Settings Navigation -->
                <div class="col-span-12 lg:col-span-3">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                        <nav class="p-4 space-y-1">
                            <a href="#profile" class="flex items-center px-4 py-3 text-sm rounded-lg bg-iuea-maroon/5 text-iuea-maroon font-medium">
                                <i class="fas fa-user-circle w-5 h-5 mr-3"></i>
                                Profile Information
                            </a>
                            <a href="#security" class="flex items-center px-4 py-3 text-sm rounded-lg text-gray-600 hover:bg-gray-50">
                                <i class="fas fa-shield-alt w-5 h-5 mr-3"></i>
                                Security Settings
                            </a>
                            <a href="#notifications" class="flex items-center px-4 py-3 text-sm rounded-lg text-gray-600 hover:bg-gray-50">
                                <i class="fas fa-bell w-5 h-5 mr-3"></i>
                                Notifications
                            </a>
                            <a href="#activity" class="flex items-center px-4 py-3 text-sm rounded-lg text-gray-600 hover:bg-gray-50">
                                <i class="fas fa-history w-5 h-5 mr-3"></i>
                                Activity Log
                            </a>
                        </nav>
                    </div>
                </div>

                <!-- Settings Forms -->
                <div class="col-span-12 lg:col-span-9 space-y-6">
                    <!-- Profile Section -->
                    <div id="profile-section" class="bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-lg font-semibold text-gray-800">Profile Information</h2>
                                <span class="text-xs text-gray-500">Last updated: 2 days ago</span>
                            </div>

                            <!-- Profile Picture Section -->
                            <div class="flex items-center space-x-6 pb-6 border-b border-gray-200">
                                <div class="relative group">
                                    <img src="https://ui-avatars.com/api/?name=John+Doe&background=800000&color=fff"
                                         class="w-24 h-24 rounded-full ring-4 ring-white shadow">
                                    <button class="absolute bottom-0 right-0 bg-white rounded-full p-2 shadow-lg border border-gray-200 hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-camera text-gray-600"></i>
                                    </button>
                                    <div class="hidden group-hover:block absolute -top-2 left-1/2 transform -translate-x-1/2 px-3 py-1 bg-gray-900 text-white text-xs rounded-full">
                                        Change photo
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">John Doe</h3>
                                    <p class="text-sm text-gray-500">Administrator</p>
                                </div>
                            </div>

                            <!-- Profile Form -->
                            <form class="mt-6 space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                        <input type="text" value="John Doe"
                                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                        <input type="email" value="john.doe@iuea.ac.ug"
                                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Department</label>
                                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                                            <option>IT Department</option>
                                            <option>Finance</option>
                                            <option>Academic</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Role</label>
                                        <input type="text" value="Administrator" disabled
                                               class="w-full px-4 py-2 border border-gray-200 rounded-lg bg-gray-50 text-gray-500">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Bio</label>
                                    <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon"></textarea>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-iuea-maroon">
                                        Cancel
                                    </button>
                                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-iuea-maroon rounded-lg hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-iuea-maroon">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Security Settings Section -->
                    <div id="security-section" class="hidden bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-lg font-semibold text-gray-800">Security Settings</h2>
                                <span class="text-xs text-gray-500">Last updated: 1 day ago</span>
                            </div>

                            <!-- Change Password Form -->
                            <form class="space-y-6">
                                <div class="border-b pb-6">
                                    <h3 class="text-md font-medium text-gray-800 mb-4">Change Password</h3>
                                    <div class="grid gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Current Password</label>
                                            <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
                                            <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Confirm New Password</label>
                                            <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                                        </div>
                                    </div>
                                </div>

                                <!-- Two-Factor Authentication -->
                                <div class="border-b pb-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div>
                                            <h3 class="text-md font-medium text-gray-800">Two-Factor Authentication</h3>
                                            <p class="text-sm text-gray-500 mt-1">Add an extra layer of security to your account</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" class="sr-only peer">
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-iuea-maroon/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-iuea-maroon"></div>
                                        </label>
                                    </div>
                                </div>

                                <!-- Login History -->
                                <div>
                                    <h3 class="text-md font-medium text-gray-800 mb-4">Recent Login Activity</h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-desktop text-gray-400"></i>
                                                <div>
                                                    <p class="text-sm font-medium">Windows PC - Chrome</p>
                                                    <p class="text-xs text-gray-500">Kampala, Uganda</p>
                                                </div>
                                            </div>
                                            <span class="text-xs text-gray-500">Just now</span>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-mobile-alt text-gray-400"></i>
                                                <div>
                                                    <p class="text-sm font-medium">iPhone 12 - Safari</p>
                                                    <p class="text-xs text-gray-500">Kampala, Uganda</p>
                                                </div>
                                            </div>
                                            <span class="text-xs text-gray-500">Yesterday</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex justify-end space-x-4 pt-4 border-t">
                                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                                        Cancel
                                    </button>
                                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-iuea-maroon rounded-lg hover:bg-opacity-90">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Notifications Section -->
                    <div id="notifications-section" class="hidden bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-lg font-semibold text-gray-800">Notification Settings</h2>
                                <span class="text-xs text-gray-500">Last updated: 3 days ago</span>
                            </div>

                            <!-- Notification Preferences Form -->
                            <form class="space-y-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Notifications</label>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                                        <option>All Activities</option>
                                        <option>Only Important</option>
                                        <option>No Emails</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Push Notifications</label>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                                        <option>All Activities</option>
                                        <option>Only Important</option>
                                        <option>No Push Notifications</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">SMS Notifications</label>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                                        <option>All Activities</option>
                                        <option>Only Important</option>
                                        <option>No SMS</option>
                                    </select>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex justify-end space-x-4 pt-4 border-t">
                                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                                        Cancel
                                    </button>
                                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-iuea-maroon rounded-lg hover:bg-opacity-90">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Activity Log Section -->
                    <div id="activity-section" class="hidden bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-lg font-semibold text-gray-800">Activity Log</h2>
                                <span class="text-xs text-gray-500">Last updated: 5 minutes ago</span>
                            </div>

                            <!-- Activity Log Table -->
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Activity</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-10-01</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Updated profile information</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">Success</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-09-28</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Changed password</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">Success</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-09-25</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Logged in from new device</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">Suspicious</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex justify-end space-x-4 pt-4 border-t">
                                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                                    Export Log
                                </button>
                                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                                    Clear Log
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Additional sections can be added here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="fixed bottom-4 right-4 hidden">
        <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            <span>Changes saved successfully!</span>
        </div>
    </div>
    <!-- Theme Dropdown JS Fix -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggleBtn = document.getElementById('theme-toggle-btn');
            const themeDropdown = document.getElementById('theme-dropdown');
            const themeToggleIcon = document.getElementById('theme-toggle-icon');
            const root = document.documentElement;
            const THEME_KEY = 'dts-theme';

            function setTheme(theme) {
                if (theme === 'dark') {
                    root.classList.add('dark');
                    if (themeToggleIcon) themeToggleIcon.className = 'ri-sun-line ri-lg';
                } else {
                    root.classList.remove('dark');
                    if (themeToggleIcon) themeToggleIcon.className = 'ri-moon-line ri-lg';
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

            if (themeToggleBtn && themeDropdown) {
                themeToggleBtn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    themeDropdown.classList.toggle('hidden');
                });

                themeDropdown.querySelectorAll('button[data-theme]').forEach(btn => {
                    btn.addEventListener('click', function (e) {
                        e.stopPropagation();
                        chooseTheme(this.getAttribute('data-theme'));
                        themeDropdown.classList.add('hidden');
                    });
                });
            }

            document.addEventListener('click', function (e) {
                if (!themeDropdown.contains(e.target) && !themeToggleBtn.contains(e.target)) {
                    themeDropdown.classList.add('hidden');
                }
            });

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    themeDropdown.classList.add('hidden');
                }
            });

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                if (localStorage.getItem(THEME_KEY) === 'system') {
                    setTheme(e.matches ? 'dark' : 'light');
                }
            });

            applyTheme();
        });
    </script>
<!-- Just ensured consistent class styles with the updated card-bg, sidebar-bg, and dark mode logic -->
</body>
</html>
