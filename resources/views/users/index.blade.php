@extends('layouts.app')

@section('title', 'Users')
@section('header', 'User Management')

@section('content')
    <div class="space-y-6">
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

        <!-- Users table -->
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
@endsection
