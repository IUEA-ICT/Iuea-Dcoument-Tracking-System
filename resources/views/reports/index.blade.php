@extends('layouts.app')

@section('title', 'Reports')
@section('header', 'Reports & Analytics')

@section('content')
<div class="space-y-6">
    <!-- Filters -->
    <div class="bg-white p-4 rounded-lg shadow">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <select class="border rounded-lg px-3 py-2">
                <option>This Month</option>
                <option>Last Month</option>
                <option>Last 3 Months</option>
                <option>Custom Range</option>
            </select>
            <select class="border rounded-lg px-3 py-2">
                <option>All Departments</option>
                <option>Finance</option>
                <option>Academic</option>
                <option>HR</option>
            </select>
            <select class="border rounded-lg px-3 py-2">
                <option>All Document Types</option>
                <option>Reports</option>
                <option>Forms</option>
                <option>Letters</option>
            </select>
            <div class="relative">
                <button id="exportButton" class="bg-iuea-maroon text-white px-4 py-2 rounded-lg hover:bg-opacity-90 w-full flex items-center justify-center transition-all duration-300 hover:shadow-lg">
                    <i class="fas fa-download mr-2"></i> Export Report
                </button>
                <div id="exportMenu" class="hidden absolute right-0 mt-3 w-72 rounded-xl shadow-2xl bg-white ring-1 ring-black ring-opacity-5 transform transition-all duration-300 z-50">
                    <div class="p-3 space-y-2">
                        <div class="px-3 py-2 text-sm font-semibold text-gray-600 border-b">
                            Choose Export Format
                        </div>
                        <a href="{{ route('reports.export', 'pdf') }}"
                           onclick="showExportLoader(event, 'PDF')"
                           class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg group transition-colors">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-red-50 flex items-center justify-center transition-transform group-hover:scale-110 duration-300">
                                <i class="far fa-file-pdf text-2xl text-red-500"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-sm font-medium text-gray-900">PDF Document</h4>
                                <p class="text-xs text-gray-500">Best for printing and sharing</p>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                        </a>

                        <a href="{{ route('reports.export', 'excel') }}"
                           onclick="showExportLoader(event, 'Excel')"
                           class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg group transition-colors">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-green-50 flex items-center justify-center transition-transform group-hover:scale-110 duration-300">
                                <i class="far fa-file-excel text-2xl text-green-500"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-sm font-medium text-gray-900">Excel Spreadsheet</h4>
                                <p class="text-xs text-gray-500">Editable data format</p>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                        </a>

                        <a href="{{ route('reports.export', 'csv') }}"
                           onclick="showExportLoader(event, 'CSV')"
                           class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg group transition-colors">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center transition-transform group-hover:scale-110 duration-300">
                                <i class="far fa-file-csv text-2xl text-blue-500"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-sm font-medium text-gray-900">CSV File</h4>
                                <p class="text-xs text-gray-500">Universal compatibility</p>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-4">Document Processing Time</h3>
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Average Time</span>
                        <span class="font-semibold">2.5 days</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-iuea-maroon h-2 rounded-full" style="width: 70%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-4">Document Status</h3>
            <canvas id="statusChart"></canvas>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-4">Department Activity</h3>
            <canvas id="departmentChart"></canvas>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold mb-4">Recent Activity</h3>
        <div class="space-y-4">
            <div class="flex items-start gap-4">
                <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-file-upload text-blue-500"></i>
                </div>
                <div>
                    <p class="font-medium">New document uploaded</p>
                    <p class="text-sm text-gray-500">2 minutes ago</p>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Initialize charts here
    new Chart(document.getElementById('statusChart'), {
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
        }
    });

    new Chart(document.getElementById('departmentChart'), {
        type: 'bar',
        data: {
            labels: ['Finance', 'HR', 'IT', 'Academic'],
            datasets: [{
                label: 'Documents Processed',
                data: [65, 45, 38, 54],
                backgroundColor: '#800000',
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
        }
    });

    // Enhanced dropdown animation
    const exportButton = document.getElementById('exportButton');
    const exportMenu = document.getElementById('exportMenu');

    exportButton.addEventListener('click', () => {
        exportMenu.classList.toggle('hidden');
        // Add slide animation
        if (!exportMenu.classList.contains('hidden')) {
            exportMenu.classList.add('animate-fade-in-down');
        }
    });

    // Close menu when clicking outside with fade out
    document.addEventListener('click', (e) => {
        if (!exportButton.contains(e.target) && !exportMenu.contains(e.target)) {
            exportMenu.classList.add('hidden');
            exportMenu.classList.remove('animate-fade-in-down');
        }
    });

    function showExportLoader(event, type) {
        event.preventDefault();
        const url = event.currentTarget.href;

        // Create loading overlay
        const overlay = document.createElement('div');
        overlay.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
        overlay.innerHTML = `
            <div class="bg-white p-6 rounded-lg shadow-xl flex items-center space-x-4">
                <div class="animate-spin rounded-full h-8 w-8 border-4 border-iuea-maroon border-t-transparent"></div>
                <p class="text-lg">Preparing ${type} export...</p>
            </div>
        `;
        document.body.appendChild(overlay);

        // Perform the export
        setTimeout(() => {
            window.location.href = url;
            setTimeout(() => {
                overlay.remove();
            }, 1000);
        }, 1000);
    }
</script>

<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.3s ease-out;
    }

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
</style>
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
@endsection
@endsection
