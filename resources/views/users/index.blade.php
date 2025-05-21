@extends('layouts.app')

@section('title', 'Users')
@section('header', 'User Management')

@section('content')
<div class="space-y-6">
    <!-- Actions Bar -->
    <div class="flex justify-between items-center">
        <button class="bg-iuea-maroon text-white px-4 py-2 rounded-lg hover:bg-opacity-90">
            <i class="fas fa-user-plus mr-2"></i> Add New User
        </button>
        <div class="flex gap-4">
            <select class="border rounded-lg px-4 py-2">
                <option>All Roles</option>
                <option>Admin</option>
                <option>Staff</option>
                <option>Reviewer</option>
            </select>
            <input type="search" placeholder="Search users..." 
                   class="border rounded-lg px-4 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-iuea-maroon">
        </div>
    </div>

    <!-- Users Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Department</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 flex items-center gap-3">
                        <img src="https://ui-avatars.com/api/?name=John+Doe" class="h-8 w-8 rounded-full">
                        John Doe
                    </td>
                    <td class="px-6 py-4">john@iuea.ac.ug</td>
                    <td class="px-6 py-4">Admin</td>
                    <td class="px-6 py-4">IT</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">Active</span>
                    </td>
                    <td class="px-6 py-4">
                        <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-edit"></i></button>
                        <button class="text-red-500 hover:text-red-700 ml-3"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
