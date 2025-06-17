@extends('layouts.app')

@section('title', 'Activity Log')
@section('header', 'System Activity Log')

@section('content')
<div class="space-y-6">
    <!-- Filters Bar -->
    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow flex flex-wrap gap-4 items-center">
        <div class="flex-1 min-w-[200px]">
            <input type="search" 
                   placeholder="Search activities..." 
                   class="w-full px-4 py-2 rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300">
        </div>
        <select class="px-4 py-2 rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300">
            <option>All Actions</option>
            <option>Document Upload</option>
            <option>Document Review</option>
            <option>User Login</option>
            <option>Settings Change</option>
        </select>
        <select class="px-4 py-2 rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300">
            <option>All Users</option>
            <option>Administrators</option>
            <option>Staff</option>
            <option>Students</option>
        </select>
        <div class="flex gap-2">
            <button class="px-4 py-2 bg-iuea-maroon text-white rounded-lg hover:bg-opacity-90">
                <i class="fas fa-filter mr-2"></i> Filter
            </button>
            <button class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600">
                <i class="fas fa-download mr-2"></i> Export
            </button>
        </div>
    </div>

    <!-- Activity Timeline -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow">
        <div class="p-6">
            <div class="relative">
                <!-- Date Label -->
                <div class="sticky top-0 bg-white dark:bg-gray-800 py-2 mb-4 z-10">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Today</h3>
                </div>

                <!-- Activity Items -->
                <div class="space-y-8">
                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute left-[19px] top-8 bottom-0 w-[2px] bg-gray-200 dark:bg-gray-700"></div>
                        
                        <!-- Activity Item -->
                        <div class="flex gap-4">
                            <div class="relative z-10">
                                <div class="h-10 w-10 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center">
                                    <i class="fas fa-file-upload text-blue-500 dark:text-blue-300"></i>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-50 dark:bg-gray-700/50 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-1">
                                    <div class="font-medium text-gray-900 dark:text-gray-100">Document Upload</div>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">2 minutes ago</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">John Doe uploaded "Annual Report 2023.pdf"</p>
                                <div class="mt-2 text-sm">
                                    <span class="text-gray-500 dark:text-gray-400">IP Address:</span>
                                    <span class="text-gray-700 dark:text-gray-300">192.168.1.100</span>
                                    <span class="mx-2">•</span>
                                    <span class="text-gray-500 dark:text-gray-400">Browser:</span>
                                    <span class="text-gray-700 dark:text-gray-300">Chrome on Windows</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- More Activity Items -->
                    <div class="relative">
                        <div class="absolute left-[19px] top-8 bottom-0 w-[2px] bg-gray-200 dark:bg-gray-700"></div>
                        <div class="flex gap-4">
                            <div class="relative z-10">
                                <div class="h-10 w-10 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center">
                                    <i class="fas fa-user-check text-green-500 dark:text-green-300"></i>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-50 dark:bg-gray-700/50 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-1">
                                    <div class="font-medium text-gray-900 dark:text-gray-100">User Login</div>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">1 hour ago</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Admin user logged in successfully</p>
                                <div class="mt-2 text-sm">
                                    <span class="text-gray-500 dark:text-gray-400">IP Address:</span>
                                    <span class="text-gray-700 dark:text-gray-300">192.168.1.101</span>
                                    <span class="mx-2">•</span>
                                    <span class="text-gray-500 dark:text-gray-400">Location:</span>
                                    <span class="text-gray-700 dark:text-gray-300">Kampala, Uganda</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Yesterday's Activities -->
                <div class="sticky top-0 bg-white dark:bg-gray-800 py-2 my-4 z-10">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Yesterday</h3>
                </div>

                <!-- More Activity Items for Yesterday -->
                <div class="space-y-8">
                    <!-- Similar structure as above -->
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="p-4 border-t border-gray-200 dark:border-gray-700">
            <button class="w-full py-2 px-4 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                Load More Activities
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Activity loading logic
    document.querySelector('button').addEventListener('click', async () => {
        // Implement loading more activities
        console.log('Loading more activities...');
    });
</script>
@endpush
@endsection
