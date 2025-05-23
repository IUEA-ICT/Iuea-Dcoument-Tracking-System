<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - IUEA Document Tracking</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
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
        <!-- Logo Section -->
        <div class="flex items-center justify-center h-20 border-b border-white/10 bg-black/10">
            <div class="bg-white p-2 rounded-full">
                <img src="//172.16.17.10/port/img/Logosq.png" class="h-10 w-10" alt="IUEA Logo">
            </div>
            <div class="ml-3">
                <span class="font-bold text-lg">IUEA</span>
                <span class="text-xs block opacity-70">Document Tracking</span>
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="mt-8 px-4">
            <!-- Main Navigation -->
            <div class="space-y-4">
<<<<<<< HEAD
                <!-- Active link has bg-white/10 class -->
                <a href="#" class="flex items-center px-4 py-3 text-sm rounded-lg bg-white/10 transition-colors">
=======
                <a href="/dashboard" class="flex items-center px-4 py-3 text-sm rounded-lg bg-white/10 transition-colors">
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
                    <i class="fas fa-home w-5 h-5"></i>
                    <span class="ml-3 font-medium">Dashboard</span>
                </a>

                <div class="px-4 py-2">
                    <h3 class="text-xs uppercase tracking-wider text-white/50">Documents</h3>
                </div>

<<<<<<< HEAD
                <a href="#" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
=======
                <a href="/documents" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
                    <i class="fas fa-file w-5 h-5 opacity-75 group-hover:opacity-100"></i>
                    <span class="ml-3">All Documents</span>
                </a>

<<<<<<< HEAD
                <a href="#" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
=======
                <a href="/documents/pending" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
                    <i class="fas fa-clock w-5 h-5 opacity-75 group-hover:opacity-100"></i>
                    <span class="ml-3">Pending</span>
                    <span class="ml-auto bg-white/20 px-2 py-0.5 rounded-full text-xs">28</span>
                </a>

                <div class="px-4 py-2 mt-6">
                    <h3 class="text-xs uppercase tracking-wider text-white/50">Management</h3>
                </div>

<<<<<<< HEAD
                <a href="#" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
=======
                <a href="/users" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
                    <i class="fas fa-users w-5 h-5 opacity-75 group-hover:opacity-100"></i>
                    <span class="ml-3">Users</span>
                </a>

<<<<<<< HEAD
                <a href="#" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
=======
                <a href="/reports" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
                    <i class="fas fa-chart-bar w-5 h-5 opacity-75 group-hover:opacity-100"></i>
                    <span class="ml-3">Reports</span>
                </a>
            </div>

            <!-- Bottom Section -->
            <div class="absolute bottom-0 left-0 right-0 p-4">
                <hr class="border-white/10 mb-4">
<<<<<<< HEAD
                <a href="/login" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group text-red-300 hover:text-red-200">
                    <i class="fas fa-sign-out-alt w-5 h-5 opacity-75 group-hover:opacity-100"></i>
                    <span class="ml-3">Logout</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
=======
                <a href="{{ route('logout') }}" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group text-red-300 hover:text-red-200">
                    <i class="fas fa-sign-out-alt w-5 h-5 opacity-75 group-hover:opacity-100"></i>
                    <span class="ml-3">Logout</span>
                </a>
                <a href="{{ route('settings') }}" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors group">
>>>>>>> 3bb7f1c28387ed92257d37211ee6515a239a34d1
                    <i class="fas fa-cog w-5 h-5 opacity-75 group-hover:opacity-100"></i>
                    <span class="ml-3">Settings</span>
                </a>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-semibold">Dashboard Overview</h1>
            <div class="flex items-center space-x-4">
                <button class="text-iuea-maroon">
                    <i class="fas fa-bell"></i>
                </button>
                <div class="relative">
                    <button class="flex items-center space-x-2">
                        <img src="https://ui-avatars.com/api/?name=User" class="h-8 w-8 rounded-full">
                        <span>John Doe</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <i class="fas fa-file-alt text-2xl text-iuea-maroon"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500">Total Documents</h3>
                        <p class="text-2xl font-semibold">125</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <i class="fas fa-clock text-2xl text-yellow-500"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500">Pending</h3>
                        <p class="text-2xl font-semibold">28</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-2xl text-green-500"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500">Approved</h3>
                        <p class="text-2xl font-semibold">84</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <i class="fas fa-users text-2xl text-blue-500"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500">Active Users</h3>
                        <p class="text-2xl font-semibold">32</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
            <!-- Document Status Chart -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold mb-2">Document Status Distribution</h2>
                <div class="h-[180px]">
                    <canvas id="documentStatusChart"></canvas>
                </div>
            </div>

            <!-- Department Activity Chart -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold mb-2">Department Activity</h2>
                <div class="h-[180px]">
                    <canvas id="departmentChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Activity Timeline -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Recent Activity</h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fas fa-file-upload text-blue-500"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium">New document uploaded</p>
                        <p class="text-xs text-gray-500">2 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fas fa-check text-green-500"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium">Document approved</p>
                        <p class="text-xs text-gray-500">1 hour ago</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Documents -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Recent Documents</h2>
            <table class="w-full">
                <thead>
                    <tr class="text-left border-b">
                        <th class="pb-3">Document</th>
                        <th class="pb-3">Status</th>
                        <th class="pb-3">Department</th>
                        <th class="pb-3">Date</th>
                        <th class="pb-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    <tr class="border-b">
                        <td class="py-3">Annual Report 2023</td>
                        <td><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Pending</span></td>
                        <td>Finance</td>
                        <td>2023-09-15</td>
                        <td>
                            <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-eye"></i></button>
                            <button class="text-green-500 hover:text-green-700 ml-2"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Initialize Charts -->
    <script>
        // Document Status Chart
        new Chart(document.getElementById('documentStatusChart'), {
            type: 'doughnut',
            data: {
                labels: ['Pending', 'In Review', 'Approved', 'Rejected'],
                datasets: [{
                    data: [28, 45, 84, 12],
                    backgroundColor: ['#FCD34D', '#60A5FA', '#34D399', '#EF4444'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12,
                            padding: 10,
                            font: { size: 11 }
                        }
                    }
                }
            }
        });

        // Department Activity Chart
        new Chart(document.getElementById('departmentChart'), {
            type: 'bar',
            data: {
                labels: ['Finance', 'HR', 'IT', 'Academic', 'Admin'],
                datasets: [{
                    label: 'Documents Processed',
                    data: [65, 45, 38, 54, 48],
                    backgroundColor: '#800000',
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { font: { size: 10 } }
                    },
                    x: {
                        ticks: { font: { size: 10 } }
                    }
                }
            }
        });
    </script>
</body>
</html>
