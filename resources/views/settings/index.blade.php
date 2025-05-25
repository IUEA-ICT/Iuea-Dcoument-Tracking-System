<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings - IUEA Document Tracking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-gradient-to-b from-iuea-maroon to-[#5f0000] text-white shadow-xl">
        <!-- Include the same sidebar as dashboard -->
    </div>

    <!-- Main Content -->
    <div class="ml-64 min-h-screen bg-gray-50">
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
                    <h1 class="text-2xl font-bold text-gray-800">Account Settings</h1>
                    <p class="text-sm text-gray-600 mt-1">Manage your profile and preferences</p>
                </div>
                <button onclick="history.back()" class="flex items-center px-4 py-2 text-sm text-gray-600 hover:text-iuea-maroon bg-white rounded-lg border border-gray-200 hover:border-iuea-maroon/20 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>
                    <a href="/dashboard">Back to Dashboard</a>
                </button>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize sections and navigation
            const sections = {
                'profile': {
                    element: document.getElementById('profile-section'),
                    icon: 'fa-user-circle'
                },
                'security': {
                    element: document.getElementById('security-section'),
                    icon: 'fa-shield-alt'
                },
                'notifications': {
                    element: document.getElementById('notifications-section'),
                    icon: 'fa-bell'
                },
                'activity': {
                    element: document.getElementById('activity-section'),
                    icon: 'fa-history'
                }
            };

            // Enhanced navigation with transitions
            document.querySelectorAll('nav a').forEach(link => {
                link.addEventListener('click', async (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('href').replace('#', '');
                    
                    // Show loading state
                    link.classList.add('animate-pulse');
                    
                    // Fade out current section
                    const currentSection = document.querySelector('[id$="-section"]:not(.hidden)');
                    if (currentSection) {
                        currentSection.classList.add('animate-fade-out');
                        await new Promise(r => setTimeout(r, 200));
                    }

                    // Hide all sections
                    Object.values(sections).forEach(section => {
                        section.element?.classList.add('hidden');
                        section.element?.classList.remove('animate-fade-in', 'animate-fade-out');
                    });

                    // Show and animate target section
                    if (sections[targetId]?.element) {
                        sections[targetId].element.classList.remove('hidden');
                        sections[targetId].element.classList.add('animate-fade-in');
                    }

                    // Update navigation state
                    document.querySelectorAll('nav a').forEach(navLink => {
                        navLink.classList.remove('bg-iuea-maroon/5', 'text-iuea-maroon', 'animate-pulse');
                        navLink.classList.add('text-gray-600');
                    });
                    link.classList.add('bg-iuea-maroon/5', 'text-iuea-maroon');
                    link.classList.remove('text-gray-600');

                    // Update page title
                    document.querySelector('h1').textContent = link.textContent.trim();
                });
            });

            // Form validation and submission
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    const submitButton = form.querySelector('button[type="submit"]');
                    
                    try {
                        // Show loading state
                        submitButton.disabled = true;
                        submitButton.innerHTML = `
                            <svg class="animate-spin h-5 w-5 mr-2" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"/>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
                            </svg>
                            Saving...
                        `;

                        // Simulate API call
                        await new Promise(r => setTimeout(r, 1000));

                        // Show success message
                        showToast('Changes saved successfully!', 'success');
                    } catch (error) {
                        showToast('Error saving changes', 'error');
                    } finally {
                        submitButton.disabled = false;
                        submitButton.innerHTML = 'Save Changes';
                    }
                });
            });

            // Enhanced toast notification
            function showToast(message, type = 'success') {
                const toast = document.getElementById('toast');
                const toastContent = toast.querySelector('div');
                
                toastContent.className = `${type === 'success' ? 'bg-green-500' : 'bg-red-500'} text-white px-6 py-3 rounded-lg shadow-lg flex items-center`;
                toastContent.innerHTML = `
                    <i class="fas fa-${type === 'success' ? 'check' : 'times'}-circle mr-2"></i>
                    <span>${message}</span>
                `;
                
                toast.classList.remove('hidden');
                toast.classList.add('animate-fade-in-up');
                
                setTimeout(() => {
                    toast.classList.add('animate-fade-out-down');
                    setTimeout(() => {
                        toast.classList.add('hidden');
                        toast.classList.remove('animate-fade-in-up', 'animate-fade-out-down');
                    }, 300);
                }, 3000);
            }
        });
    </script>

    <style>
        .animate-fade-in {
            animation: fadeIn 0.3s ease-out;
        }
        .animate-fade-out {
            animation: fadeOut 0.2s ease-in;
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.3s ease-out;
        }
        .animate-fade-out-down {
            animation: fadeOutDown 0.3s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeOut {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(-10px); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeOutDown {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(20px); }
        }
    </style>
</body>
</html>
