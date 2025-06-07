@extends('layouts.app')

@section('title', 'Pending Documents')
@section('header', 'Pending Documents')

@section('content')
    <!-- Global theme loader for all pages -->
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
        .dark .text-gray-800 { color: #fff !important; }
        .dark .text-gray-600 { color: #cbd5e1 !important; }
        .dark .text-gray-500 { color: #cbd5e1 !important; }
        .dark .border-gray-200 { border-color: #334155 !important; }
        .dark .bg-gray-50 { background-color: #0f172a !important; }
        .dark .bg-gray-800 { background-color: #1e293b !important; }
        .dark .bg-gray-100 { background-color: #334155 !important; }
        .dark .border-gray-600 { border-color: #475569 !important; }
        .dark .hover\:bg-gray-50:hover { background-color: #334155 !important; }
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }
    </style>

<div class="space-y-6">
    <!-- Statistics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 rounded-lg shadow-sm border border-yellow-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-yellow-800 text-sm font-medium">Awaiting Review</p>
                    <h3 class="text-2xl font-bold text-yellow-900 mt-1">12</h3>
                </div>
                <div class="bg-yellow-200 rounded-full p-3">
                    <i class="fas fa-clock text-yellow-700"></i>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg shadow-sm border border-blue-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-800 text-sm font-medium">High Priority</p>
                    <h3 class="text-2xl font-bold text-blue-900 mt-1">5</h3>
                </div>
                <div class="bg-blue-200 rounded-full p-3">
                    <i class="fas fa-exclamation text-blue-700"></i>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg shadow-sm border border-purple-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-purple-800 text-sm font-medium">Average Wait Time</p>
                    <h3 class="text-2xl font-bold text-purple-900 mt-1">2.5 days</h3>
                </div>
                <div class="bg-purple-200 rounded-full p-3">
                    <i class="fas fa-hourglass-half text-purple-700"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters Bar -->
    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
        <div class="flex flex-wrap gap-4 items-center">
            <div class="flex-1 min-w-[200px]">
                <input type="search" placeholder="Search pending documents..."
                    class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-iuea-maroon focus:ring-iuea-maroon">
            </div>
            <select class="px-4 py-2 rounded-lg border-gray-300 focus:border-iuea-maroon focus:ring-iuea-maroon">
                <option>All Departments</option>
                <option>Finance</option>
                <option>Academic</option>
                <option>HR</option>
            </select>
            <select class="px-4 py-2 rounded-lg border-gray-300 focus:border-iuea-maroon focus:ring-iuea-maroon">
                <option>Priority Level</option>
                <option>High</option>
                <option>Medium</option>
                <option>Low</option>
            </select>
            <button onclick="openPendingFilters()" class="bg-iuea-maroon text-white px-4 py-2 rounded-lg hover:bg-opacity-90">
                <i class="fas fa-filter mr-2"></i> Apply Filters
            </button>
        </div>
    </div>

    <!-- Pending Documents List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Document Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="font-semibold text-gray-900">Annual Report 2023</h3>
                        <p class="text-sm text-gray-500">Finance Department</p>
                    </div>
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-full border border-yellow-200">
                        Pending Review
                    </span>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center text-sm">
                        <i class="fas fa-user-circle w-5 text-gray-400"></i>
                        <span class="text-gray-600">Submitted by:</span>
                        <span class="ml-auto font-medium text-gray-900">John Doe</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-calendar w-5 text-gray-400"></i>
                        <span class="text-gray-600">Submitted on:</span>
                        <span class="ml-auto font-medium text-gray-900">Sep 15, 2023</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-flag w-5 text-red-400"></i>
                        <span class="text-gray-600">Priority:</span>
                        <span class="ml-auto font-medium text-red-600">High</span>
                    </div>
                </div>

                <!-- Progress Bar -->
                <div class="mt-4">
                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                        <span>Review Progress</span>
                        <span>75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-iuea-maroon h-2 rounded-full" style="width: 75%"></div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-6 flex items-center justify-end space-x-3">
                    <button class="text-blue-600 hover:text-blue-700">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-green-600 hover:text-green-700">
                        <i class="fas fa-check"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-700">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Add more document cards here -->
    </div>

    <!-- Pending Filters Modal -->
    <div id="pendingFiltersModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Filter Pending Documents</h3>
                    <p class="text-sm text-gray-500">Customize your pending documents view</p>
                </div>
                <button onclick="closePendingFilters()" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form class="space-y-6">
                <!-- Priority Level -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Priority Level</label>
                    <div class="grid grid-cols-3 gap-3">
                        <label class="relative flex">
                            <input type="checkbox" class="peer sr-only" name="priority[]" value="high">
                            <div class="w-full p-3 text-sm text-gray-600 bg-white border rounded-lg cursor-pointer peer-checked:border-red-500 peer-checked:bg-red-50 peer-checked:text-red-600 hover:bg-gray-50">
                                <i class="fas fa-exclamation-circle mr-2"></i>High
                            </div>
                        </label>
                        <label class="relative flex">
                            <input type="checkbox" class="peer sr-only" name="priority[]" value="medium">
                            <div class="w-full p-3 text-sm text-gray-600 bg-white border rounded-lg cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-yellow-50 peer-checked:text-yellow-600 hover:bg-gray-50">
                                <i class="fas fa-arrow-circle-up mr-2"></i>Medium
                            </div>
                        </label>
                        <label class="relative flex">
                            <input type="checkbox" class="peer sr-only" name="priority[]" value="low">
                            <div class="w-full p-3 text-sm text-gray-600 bg-white border rounded-lg cursor-pointer peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:text-blue-600 hover:bg-gray-50">
                                <i class="fas fa-arrow-circle-down mr-2"></i>Low
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Waiting Time -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Waiting Time</label>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="relative flex">
                            <input type="radio" class="peer sr-only" name="waiting_time" value="longest">
                            <div class="w-full p-3 text-sm text-gray-600 bg-white border rounded-lg cursor-pointer peer-checked:border-iuea-maroon peer-checked:bg-iuea-maroon/5 peer-checked:text-iuea-maroon hover:bg-gray-50">
                                Longest Wait
                            </div>
                        </label>
                        <label class="relative flex">
                            <input type="radio" class="peer sr-only" name="waiting_time" value="recent">
                            <div class="w-full p-3 text-sm text-gray-600 bg-white border rounded-lg cursor-pointer peer-checked:border-iuea-maroon peer-checked:bg-iuea-maroon/5 peer-checked:text-iuea-maroon hover:bg-gray-50">
                                Recently Added
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Review Stage -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Review Stage</label>
                    <div class="space-y-2">
                        <label class="relative flex items-start">
                            <input type="checkbox" class="mt-0.5 text-iuea-maroon rounded border-gray-300 focus:ring-iuea-maroon">
                            <span class="ml-2 text-sm text-gray-600">Initial Review <span class="text-xs text-gray-400">(waiting for first review)</span></span>
                        </label>
                        <label class="relative flex items-start">
                            <input type="checkbox" class="mt-0.5 text-iuea-maroon rounded border-gray-300 focus:ring-iuea-maroon">
                            <span class="ml-2 text-sm text-gray-600">In Progress <span class="text-xs text-gray-400">(partially reviewed)</span></span>
                        </label>
                        <label class="relative flex items-start">
                            <input type="checkbox" class="mt-0.5 text-iuea-maroon rounded border-gray-300 focus:ring-iuea-maroon">
                            <span class="ml-2 text-sm text-gray-600">Final Stage <span class="text-xs text-gray-400">(awaiting final approval)</span></span>
                        </label>
                    </div>
                </div>

                <div class="pt-4 border-t flex justify-between items-center">
                    <button type="button" onclick="clearPendingFilters()" class="text-sm text-gray-500 hover:text-gray-700">
                        <i class="fas fa-undo mr-1"></i> Reset Filters
                    </button>
                    <div class="space-x-3">
                        <button type="button" onclick="closePendingFilters()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            Cancel
                        </button>
                        <button type="button" onclick="applyPendingFilters()" class="px-4 py-2 text-sm font-medium text-white bg-iuea-maroon rounded-lg hover:bg-opacity-90">
                            Apply Filters
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openPendingFilters() {
            document.getElementById('pendingFiltersModal').classList.remove('hidden');
            document.getElementById('pendingFiltersModal').classList.add('flex');
        }

        function closePendingFilters() {
            document.getElementById('pendingFiltersModal').classList.add('hidden');
            document.getElementById('pendingFiltersModal').classList.remove('flex');
        }

        function clearPendingFilters() {
            const form = document.querySelector('#pendingFiltersModal form');
            form.reset();
        }

        function applyPendingFilters() {
            // Get all selected filters
            const filters = {
                priority: Array.from(document.querySelectorAll('input[name="priority[]"]:checked')).map(cb => cb.value),
                waitingTime: document.querySelector('input[name="waiting_time"]:checked')?.value,
                reviewStage: Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(cb => cb.nextElementSibling.textContent.split('(')[0].trim())
            };

            // Here you would implement the actual filtering logic
            console.log('Applied filters:', filters);

            // Close modal
            closePendingFilters();

            // Show success notification
            showFilterNotification('Filters applied successfully');
        }

        function showFilterNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center animate-fade-in';
            notification.innerHTML = `
                <i class="fas fa-check-circle mr-2"></i>
                <span>${message}</span>
            `;
            document.body.appendChild(notification);
            setTimeout(() => notification.remove(), 3000);
        }
    </script>
</div>
@endsection
