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
            darkMode: 'class',
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
        /* --- Improved Dark Mode Styles (sidebar light mode unchanged) --- */
        .dark .bg-white { background-color: #1e293b !important; }
        .dark .bg-gray-50 { background-color: #0f172a !important; }
        .dark .bg-gray-100 { background-color: #22304a !important; }
        .dark .bg-gray-200 { background-color: #334155 !important; }
        .dark .bg-gray-800 { background-color: #1e293b !important; }
        .dark .bg-gray-900 { background-color: #0f172a !important; }
        .dark .bg-blue-100 { background-color: #1e40af !important; }
        .dark .bg-green-100 { background-color: #166534 !important; }
        .dark .bg-yellow-100 { background-color: #854d0e !important; }
        .dark .bg-red-100 { background-color: #7f1d1d !important; }
        .dark .bg-purple-100 { background-color: #6d28d9 !important; }
        .dark .bg-white\/10 { background-color: rgba(30,41,59,0.1) !important; }
        .dark .bg-white\/20 { background-color: rgba(30,41,59,0.2) !important; }
        .dark .bg-white\/5 { background-color: rgba(30,41,59,0.05) !important; }
        .dark .shadow, .dark .shadow-xl, .dark .shadow-lg, .dark .shadow-sm {
            box-shadow: 0 2px 8px 0 rgba(0,0,0,0.7) !important;
        }
        .dark .border-gray-200 { border-color: #334155 !important; }
        .dark .border-gray-300 { border-color: #475569 !important; }
        .dark .border-gray-600 { border-color: #64748b !important; }
        .dark .border-white\/10 { border-color: rgba(255,255,255,0.1) !important; }
        .dark .text-gray-900,
        .dark .text-gray-800 { color: #f3f4f6 !important; }
        .dark .text-gray-700 { color: #e5e7eb !important; }
        .dark .text-gray-600 { color: #cbd5e1 !important; }
        .dark .text-gray-500 { color: #a0aec0 !important; }
        .dark .text-gray-400 { color: #94a3b8 !important; }
        .dark .text-gray-300 { color: #cbd5e1 !important; }
        .dark .text-blue-500 { color: #60a5fa !important; }
        .dark .text-green-500 { color: #34d399 !important; }
        .dark .text-yellow-500 { color: #fde68a !important; }
        .dark .text-yellow-800 { color: #fde68a !important; }
        .dark .text-red-500 { color: #f87171 !important; }
        .dark .text-red-600 { color: #f87171 !important; }
        .dark .text-purple-900 { color: #c4b5fd !important; }
        .dark .text-blue-900 { color: #93c5fd !important; }
        .dark .text-green-800 { color: #bbf7d0 !important; }
        .dark .text-blue-100 { color: #dbeafe !important; }
        .dark .text-green-100 { color: #dcfce7 !important; }
        .dark .text-yellow-100 { color: #fef9c3 !important; }
        .dark .text-red-100 { color: #fee2e2 !important; }
        .dark .text-purple-100 { color: #ede9fe !important; }
        .dark .text-iuea-maroon { color: #FFD700 !important; }
        .dark .hover\:bg-gray-50:hover { background-color: #334155 !important; }
        .dark .hover\:bg-white\/5:hover { background-color: rgba(30,41,59,0.15) !important; }
        .dark .hover\:text-iuea-maroon:hover { color: #FFD700 !important; }
        .dark .bg-iuea-maroon { background-color: #FFD700 !important; color: #800000 !important; }
        .dark .text-iuea-maroon { color: #FFD700 !important; }
        .dark .ring-white { box-shadow: 0 0 0 4px #334155 !important; }
        .dark input, .dark select, .dark textarea {
            background-color: #22304a !important;
            color: #f3f4f6 !important;
            border-color: #334155 !important;
        }
        .dark input:focus, .dark select:focus, .dark textarea:focus {
            border-color: #FFD700 !important;
            outline: none;
        }
        .dark .bg-opacity-90 { background-color: rgba(30,41,59,0.9) !important; }
        .dark .bg-opacity-50 { background-color: rgba(30,41,59,0.5) !important; }
        .dark .bg-opacity-30 { background-color: rgba(30,41,59,0.3) !important; }
        .dark .bg-opacity-20 { background-color: rgba(30,41,59,0.2) !important; }
        .dark .bg-opacity-10 { background-color: rgba(30,41,59,0.1) !important; }
        .dark .rounded-lg, .dark .rounded-xl { border-radius: 0.75rem !important; }
        /* Sidebar gradient: dark red for light mode, softer for dark mode */
        .bg-gradient-to-b { background: linear-gradient(to bottom, #800000, #5f0000) !important; }
        .dark .bg-gradient-to-b { background: linear-gradient(to bottom, #23263a, #3a1a1a) !important; }
        .dark .border-white\/10 { border-color: rgba(255,255,255,0.08) !important; }
        /* Sidebar active menu item highlight (dark mode only) */
        .dark .sidebar-active {
            background-color: #334155 !important;
            color: #FFD700 !important;
            border-left: 4px solid #FFD700 !important;
            font-weight: 600 !important;
        }
        .sidebar-active {
            background-color: #f3f4f6 !important;
            color: #800000 !important;
            border-left: 4px solid #800000 !important;
            font-weight: 600 !important;
        }
        /* Card backgrounds and borders */
        .dark .card-bg { background-color: #22304a !important; border-color: #334155 !important; }
        .card-bg { background-color: #fff !important; border-color: #e5e7eb !important; }
        /* Table */
        .dark table, .dark th, .dark td { border-color: #334155 !important; }
        .dark thead { background-color: #1e293b !important; }
        .dark tbody { background-color: #0f172a !important; }
        /* Misc */
        .dark .shadow { box-shadow: 0 2px 8px 0 rgba(0,0,0,0.7) !important; }
        .dark .shadow-lg { box-shadow: 0 4px 16px 0 rgba(0,0,0,0.8) !important; }
        .dark .shadow-xl { box-shadow: 0 8px 24px 0 rgba(0,0,0,0.9) !important; }
        .dark .shadow-sm { box-shadow: 0 1px 4px 0 rgba(0,0,0,0.6) !important; }
        /* Chart.js legend text */
        .dark .chartjs-render-monitor { color-scheme: dark; }
    </style>
</head>
<body>
    @include('layouts.sidebar')  <!-- Replace the entire sidebar div with this include -->

    <!-- Main Content -->
    <div class="ml-64 p-8 min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Dashboard Overview</h1>
            <div class="flex items-center space-x-4">
                <button class="text-iuea-maroon dark:text-yellow-400">
                    <i class="fas fa-bell"></i>
                </button>
                <div class="relative">
                    <button class="flex items-center space-x-2">
                        <img src="https://ui-avatars.com/api/?name=User" class="h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-700">
                        <span id="user-name" class="font-medium text-gray-800 dark:text-white"> </span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="card-bg p-6 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <div class="flex items-center">
                    <i class="fas fa-file-alt text-2xl text-iuea-maroon dark:text-yellow-400"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500 dark:text-gray-300">Total Documents</h3>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">125</p>
                    </div>
                </div>
            </div>
            <div class="card-bg p-6 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <div class="flex items-center">
                    <i class="fas fa-clock text-2xl text-yellow-500 dark:text-yellow-300"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500 dark:text-gray-300">Pending</h3>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">28</p>
                    </div>
                </div>
            </div>
            <div class="card-bg p-6 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-2xl text-green-500 dark:text-green-300"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500 dark:text-gray-300">Approved</h3>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">84</p>
                    </div>
                </div>
            </div>
            <div class="card-bg p-6 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <div class="flex items-center">
                    <i class="fas fa-users text-2xl text-blue-500 dark:text-blue-300"></i>
                    <div class="ml-4">
                        <h3 class="text-gray-500 dark:text-gray-300">Active Users</h3>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">32</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
            <!-- Document Status Chart -->
            <div class="card-bg p-4 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <h2 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-100">Document Status Distribution</h2>
                <div class="h-[180px]">
                    <canvas id="documentStatusChart"></canvas>
                </div>
            </div>

            <!-- Department Activity Chart -->
            <div class="card-bg p-4 rounded-lg shadow border dark:bg-[#22304a] dark:border-[#334155]">
                <h2 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-100">Department Activity</h2>
                <div class="h-[180px]">
                    <canvas id="departmentChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Activity Timeline -->
        <div class="card-bg rounded-lg shadow p-6 mb-8 border dark:bg-[#22304a] dark:border-[#334155]">
            <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Recent Activity</h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fas fa-file-upload text-blue-500 dark:text-blue-200"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-800 dark:text-gray-100">New document uploaded</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">2 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fas fa-check text-green-500 dark:text-green-200"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-800 dark:text-gray-100">Document approved</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">1 hour ago</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Documents -->
        <div class="card-bg rounded-lg shadow p-6 border dark:bg-[#22304a] dark:border-[#334155]">
            <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Recent Documents</h2>
            <table class="w-full">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr class="text-left border-b border-gray-200 dark:border-gray-600">
                        <th class="pb-3 text-gray-500 dark:text-gray-300">Document</th>
                        <th class="pb-3 text-gray-500 dark:text-gray-300">Status</th>
                        <th class="pb-3 text-gray-500 dark:text-gray-300">Department</th>
                        <th class="pb-3 text-gray-500 dark:text-gray-300">Date</th>
                        <th class="pb-3 text-gray-500 dark:text-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 dark:text-gray-200">
                    <tr class="border-b border-gray-200 dark:border-gray-600">
                        <td class="py-3">Annual Report 2023</td>
                        <td><span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-800 text-yellow-800 dark:text-yellow-100 rounded-full text-sm">Pending</span></td>
                        <td>Finance</td>
                        <td>2023-09-15</td>
                        <td>
                            <button class="text-blue-500 hover:text-blue-700 dark:text-blue-300 dark:hover:text-blue-400"><i class="fas fa-eye"></i></button>
                            <button class="text-green-500 hover:text-green-700 ml-2 dark:text-green-300 dark:hover:text-green-400"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";
    import { getAuth, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js";
    import { getFirestore, doc, getDoc } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-firestore.js";

    // Ton config Firebase
    const firebaseConfig = {
        apiKey: "AIzaSyBydrQlgL1-AI9pBFiR8w6Waz1D0tdvq8g",
        authDomain: "iuea-dcoument-tracker.firebaseapp.com",
        projectId: "iuea-dcoument-tracker",
        appId: "1:343956353748:web:12bf8d958f316fa86ec141"
    };

    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);
    const db = getFirestore(app);

    const userNameEl = document.getElementById("user-name");

    onAuthStateChanged(auth, async (user) => {
        if (user) {
            // OPTION 1: Utiliser displayName s’il est défini
            if (user.displayName) {
                userNameEl.textContent = user.displayName;
            } else {
                // OPTION 2: Chercher dans Firestore
                const userDoc = await getDoc(doc(db, "users", user.uid));
                if (userDoc.exists()) {
                    const data = userDoc.data();
                    userNameEl.textContent = data.name || "Unnamed";
                } else {
                    userNameEl.textContent = "Unknown User";
                }
            }
        } else {
            // L'utilisateur n'est pas connecté
            window.location.href = "/login";
        }
    });
    </script>


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
