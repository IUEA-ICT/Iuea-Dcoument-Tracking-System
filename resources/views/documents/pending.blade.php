@extends('layouts.app')

@section('title', 'Pending Documents')
@section('header', 'Pending Documents')

@section('content')
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
            <button class="bg-iuea-maroon text-white px-4 py-2 rounded-lg hover:bg-opacity-90">
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
</div>
@endsection
