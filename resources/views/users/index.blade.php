@extends('layouts.app')

@section('title', 'Users')
@section('header', 'User Management')

@section('content')
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-50">
                    <i class="fas fa-users text-blue-500 text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500">Total Users</h3>
                    <p class="text-2xl font-semibold text-gray-900">245</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-50">
                    <i class="fas fa-user-check text-green-500 text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500">Active Users</h3>
                    <p class="text-2xl font-semibold text-gray-900">198</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-50">
                    <i class="fas fa-user-clock text-yellow-500 text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500">Pending Users</h3>
                    <p class="text-2xl font-semibold text-gray-900">32</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-red-50">
                    <i class="fas fa-user-times text-red-500 text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500">Inactive Users</h3>
                    <p class="text-2xl font-semibold text-gray-900">15</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Search Bar -->
    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="flex flex-wrap gap-4">
            <div class="flex-1 min-w-[200px]">
                <div class="relative">
                    <input type="search" placeholder="Search users by name, email or role..." 
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
            <div class="flex gap-4 items-center">
                <select class="pl-4 pr-8 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    <option>All Departments</option>
                    <option value="it">IT Department</option>
                    <option value="finance">Finance</option>
                    <option value="academic">Academic Affairs</option>
                    <option value="hr">Human Resources</option>
                </select>
                <select class="pl-4 pr-8 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    <option>All Roles</option>
                    <option value="admin">Administrator</option>
                    <option value="staff">Staff Member</option>
                    <option value="reviewer">Reviewer</option>
                </select>
                <button onclick="openNewUserModal()" 
                        class="px-4 py-2 bg-iuea-maroon text-white rounded-lg hover:bg-opacity-90 flex items-center gap-2">
                    <i class="fas fa-user-plus"></i>
                    <span>Add User</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Users Table with Enhanced Design -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="overflow-x-auto">
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
        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-700">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">245</span> users
                </p>
                <div class="flex gap-2">
                    <button class="px-3 py-1 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300">Previous</button>
                    <button class="px-3 py-1 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300">Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced New User Modal -->
    <div id="newUserModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50 animate-fade-in">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Add New User</h3>
                    <p class="text-sm text-gray-500">Create a new user account</p>
                </div>
                <button onclick="closeNewUserModal()" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form class="space-y-6">
                <!-- Basic Information -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-iuea-maroon focus:ring-iuea-maroon">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-iuea-maroon focus:ring-iuea-maroon">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-iuea-maroon focus:ring-iuea-maroon" 
                           placeholder="user@iuea.ac.ug">
                    <p class="mt-1 text-xs text-gray-500">Must be a valid IUEA email address</p>
                </div>

                <!-- Role and Department -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Role</label>
                        <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-iuea-maroon focus:ring-iuea-maroon">
                            <option value="">Select Role</option>
                            <option value="admin">Administrator</option>
                            <option value="staff">Staff Member</option>
                            <option value="reviewer">Reviewer</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Department</label>
                        <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-iuea-maroon focus:ring-iuea-maroon">
                            <option value="">Select Department</option>
                            <option value="it">IT Department</option>
                            <option value="finance">Finance</option>
                            <option value="academic">Academic Affairs</option>
                            <option value="hr">Human Resources</option>
                        </select>
                    </div>
                </div>

                <!-- Permissions -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Permissions</label>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-iuea-maroon focus:ring-iuea-maroon">
                            <span class="ml-2 text-sm text-gray-600">Can upload documents</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-iuea-maroon focus:ring-iuea-maroon">
                            <span class="ml-2 text-sm text-gray-600">Can approve documents</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-iuea-maroon focus:ring-iuea-maroon">
                            <span class="ml-2 text-sm text-gray-600">Can manage users</span>
                        </label>
                    </div>
                </div>

                <!-- Initial Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Initial Password</label>
                    <div class="mt-1 relative">
                        <input type="password" id="password" 
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-iuea-maroon focus:ring-iuea-maroon">
                        <button type="button" onclick="togglePassword()" 
                                class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <i class="fas fa-eye text-gray-400"></i>
                        </button>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">User will be prompted to change password on first login</p>
                </div>

                <div class="pt-4 border-t flex justify-end space-x-3">
                    <button type="button" onclick="closeNewUserModal()" 
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 text-sm font-medium text-white bg-iuea-maroon rounded-lg hover:bg-opacity-90">
                        Create User
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openNewUserModal() {
            document.getElementById('newUserModal').classList.remove('hidden');
            document.getElementById('newUserModal').classList.add('flex');
        }

        function closeNewUserModal() {
            document.getElementById('newUserModal').classList.add('hidden');
            document.getElementById('newUserModal').classList.remove('flex');
        }

        function togglePassword() {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            const icon = event.currentTarget.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        }
    </script>

    <style>
        .animate-fade-in {
            animation: fadeIn 0.3s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endsection
