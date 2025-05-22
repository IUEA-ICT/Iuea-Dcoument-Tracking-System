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
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
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
        // Enhanced tab switching with smooth transitions
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = ['profile-tab', 'security-tab', 'notifications-tab'];
            tabs.forEach(tabId => {
                document.getElementById(tabId).addEventListener('click', function() {
                    tabs.forEach(id => {
                        const tab = document.getElementById(id);
                        if (id === tabId) {
                            tab.classList.add('text-iuea-maroon', 'border-b-2', 'border-iuea-maroon');
                            tab.classList.remove('text-gray-500');
                        } else {
                            tab.classList.remove('text-iuea-maroon', 'border-b-2', 'border-iuea-maroon');
                            tab.classList.add('text-gray-500');
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
