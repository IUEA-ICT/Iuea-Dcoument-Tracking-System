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
            <button class="bg-iuea-maroon text-white px-4 py-2 rounded-lg hover:bg-opacity-90">
                <i class="fas fa-download mr-2"></i> Export Report
            </button>
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
</script>
@endsection
@endsection
