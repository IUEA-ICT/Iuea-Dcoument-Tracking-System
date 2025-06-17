@extends('layouts.app')

@section('title', 'Role Management')
@section('header', 'Role Management')

@section('content')
<div class="space-y-6">
    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/50 dark:to-blue-800/50 p-6 rounded-lg shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-800 dark:text-blue-200 text-sm font-medium">Total Users</p>
                    <h3 class="text-2xl font-bold text-blue-900 dark:text-blue-100 mt-1" id="totalUsers">0</h3>
                </div>
                <div class="bg-blue-200 dark:bg-blue-700 rounded-full p-3">
                    <i class="fas fa-users text-blue-700 dark:text-blue-200"></i>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/50 dark:to-purple-800/50 p-6 rounded-lg shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-purple-800 dark:text-purple-200 text-sm font-medium">Administrators</p>
                    <h3 class="text-2xl font-bold text-purple-900 dark:text-purple-100 mt-1" id="adminCount">0</h3>
                </div>
                <div class="bg-purple-200 dark:bg-purple-700 rounded-full p-3">
                    <i class="fas fa-user-shield text-purple-700 dark:text-purple-200"></i>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-amber-50 to-amber-100 dark:from-amber-900/50 dark:to-amber-800/50 p-6 rounded-lg shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-amber-800 dark:text-amber-200 text-sm font-medium">Recent Changes</p>
                    <h3 class="text-2xl font-bold text-amber-900 dark:text-amber-100 mt-1" id="recentChanges">0</h3>
                </div>
                <div class="bg-amber-200 dark:bg-amber-700 rounded-full p-3">
                    <i class="fas fa-history text-amber-700 dark:text-amber-200"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Role Assignment Card -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border dark:border-gray-700">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Role Assignment</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Manage user roles and permissions</p>
                </div>
                <button onclick="refreshUserList()" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                    <i class="fas fa-sync-alt"></i>
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Select User</label>
                    <select id="userId" class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                        <option value="">Choose user...</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Assign Role</label>
                    <select id="roleType" class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                        <option value="user">Regular User</option>
                        <option value="admin">Administrator</option>
                        <option value="superadmin">Super Admin</option>
                    </select>
                </div>

                <div class="flex items-end">
                    <button onclick="updateUserRole()" class="w-full bg-iuea-maroon text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition-colors flex items-center justify-center">
                        <i class="fas fa-user-shield mr-2"></i>
                        Update Role
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Users Table -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border dark:border-gray-700 overflow-hidden">
        <div class="p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">User Roles Overview</h2>
                <div class="flex gap-2">
                    <input type="text" placeholder="Search users..." id="searchInput" 
                           class="rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-sm">
                </div>
            </div>
            
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" id="usersTable">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Current Role</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Last Updated</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <!-- Will be populated by JavaScript -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";
    import { getFirestore, collection, query, onSnapshot, doc, updateDoc, serverTimestamp } 
    from "https://www.gstatic.com/firebasejs/10.11.0/firebase-firestore.js";

    const firebaseConfig = {
        apiKey: "AIzaSyBydrQlgL1-AI9pBFiR8w6Waz1D0tdvq8g",
        authDomain: "iuea-dcoument-tracker.firebaseapp.com",
        projectId: "iuea-dcoument-tracker"
    };

    const app = initializeApp(firebaseConfig);
    const db = getFirestore(app);

    // Load users into select and table
    const usersRef = collection(db, "users");
    const q = query(usersRef);
    
    onSnapshot(q, (snapshot) => {
        const userSelect = document.getElementById('userId');
        const tableBody = document.getElementById('usersTable').getElementsByTagName('tbody')[0];
        
        userSelect.innerHTML = '<option value="">Select User...</option>';
        tableBody.innerHTML = '';
        
        snapshot.forEach((doc) => {
            const user = doc.data();
            
            // Add to select dropdown
            userSelect.innerHTML += `
                <option value="${doc.id}">${user.name} (${user.email})</option>
            `;
            
            // Add to table
            tableBody.innerHTML += `
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">${user.name}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">${user.email}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">${user.role || 'user'}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">${user.roleUpdatedAt ? new Date(user.roleUpdatedAt.toDate()).toLocaleString() : 'Never'}</td>
                </tr>
            `;
        });

        // Update stats
        updateStats(snapshot.docs.map(doc => doc.data()));
    });

    // Update user role
    window.updateUserRole = async function() {
        const userId = document.getElementById('userId').value;
        const newRole = document.getElementById('roleType').value;
        
        if (!userId) {
            alert('Please select a user');
            return;
        }

        try {
            await updateDoc(doc(db, "users", userId), {
                role: newRole,
                roleUpdatedAt: serverTimestamp()
            });
            
            showNotification('Role updated successfully!');
        } catch (error) {
            console.error("Error updating role:", error);
            showNotification('Error updating role', 'error');
        }
    }

    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `fixed bottom-4 right-4 px-6 py-3 rounded-lg shadow-lg ${
            type === 'success' ? 'bg-green-500' : 'bg-red-500'
        } text-white`;
        notification.textContent = message;
        document.body.appendChild(notification);
        setTimeout(() => notification.remove(), 3000);
    }
</script>

<script>
    // Add search functionality
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('#usersTable tbody tr');
        
        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchTerm) ? '' : 'none';
        });
    });

    // Stats counter animation
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 30;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.round(current);
        }, 30);
    }

    // Update stats
    function updateStats(users) {
        const adminCount = users.filter(u => u.role === 'admin' || u.role === 'superadmin').length;
        const recentChanges = users.filter(u => {
            const updated = u.roleUpdatedAt?.toDate();
            return updated && (new Date() - updated) < 7 * 24 * 60 * 60 * 1000;
        }).length;

        animateCounter(document.getElementById('totalUsers'), users.length);
        animateCounter(document.getElementById('adminCount'), adminCount);
        animateCounter(document.getElementById('recentChanges'), recentChanges);
    }
</script>
@endpush
@endsection
