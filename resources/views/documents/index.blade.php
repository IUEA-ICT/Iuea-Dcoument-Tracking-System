@extends('layouts.app')

@section('title', 'Documents')
@section('header', 'Document Management')

@section('content')
<div class="space-y-6">
    <!-- Actions Bar -->
    <div class="flex justify-between items-center">
        <div class="flex gap-4">
            <button onclick="openUploadModal()" class="bg-iuea-maroon text-white px-4 py-2 rounded-lg hover:bg-opacity-90">
                <i class="fas fa-plus mr-2"></i> Upload Document
            </button>
            <button onclick="openFilterModal()" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200">
                <i class="fas fa-filter mr-2"></i> Filters
            </button>
        </div>
        <div class="flex gap-4">
            <input type="search" placeholder="Search documents..." 
                   class="border rounded-lg px-4 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-iuea-maroon">
        </div>
    </div>

    <!-- Documents Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Document</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Department</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4">Annual Report 2023</td>
                    <td class="px-6 py-4">PDF</td>
                    <td class="px-6 py-4">Finance</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Pending</span>
                    </td>
                    <td class="px-6 py-4">2023-09-15</td>
                    <td class="px-6 py-4">
                        <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-eye"></i></button>
                        <button class="text-green-500 hover:text-green-700 ml-2"><i class="fas fa-edit"></i></button>
                        <button class="text-red-500 hover:text-red-700 ml-2"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Enhanced Upload Modal -->
<div id="uploadModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl p-0 transform transition-all">
        <!-- Modal Header -->
        <div class="border-b border-gray-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">Upload Document</h3>
                    <p class="text-sm text-gray-500 mt-1">Select your preferred upload method</p>
                </div>
                <button onclick="closeUploadModal()" class="text-gray-400 hover:text-gray-500 focus:outline-none">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Modal Body -->
        <div class="p-6 space-y-6">
            <!-- Upload Methods -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Local Drive Upload -->
                <div class="group relative">
                    <div class="border-2 border-dashed rounded-xl p-6 hover:border-iuea-maroon transition-colors cursor-pointer bg-gray-50 hover:bg-gray-50/80">
                        <label for="localFile" class="flex flex-col items-center cursor-pointer">
                            <div class="w-16 h-16 mb-4 rounded-full bg-white shadow-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-laptop text-2xl text-iuea-maroon"></i>
                            </div>
                            <span class="text-base font-medium text-gray-900 mb-1">Local Drive</span>
                            <span class="text-sm text-gray-500">Upload from your computer</span>
                            <input type="file" id="localFile" class="hidden" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx">
                        </label>
                    </div>
                </div>

                <!-- Google Drive Upload -->
                <div class="group relative">
                    <div onclick="initGoogleDriveUpload()" class="border-2 rounded-xl p-6 hover:border-blue-500 transition-colors cursor-pointer bg-gray-50 hover:bg-blue-50/30">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 mb-4 rounded-full bg-white shadow-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fab fa-google-drive text-2xl text-blue-500"></i>
                            </div>
                            <span class="text-base font-medium text-gray-900 mb-1">Google Drive</span>
                            <span class="text-sm text-gray-500">Import from your Drive</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upload Details Form -->
            <div id="uploadDetails" class="hidden border-t border-gray-200 pt-6 mt-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Document Title</label>
                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                            <option value="">Select Department</option>
                            <option>Finance</option>
                            <option>Academic</option>
                            <option>Administration</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Upload Progress -->
            <div id="uploadProgress" class="hidden space-y-3">
                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center">
                        <i class="fas fa-file-alt text-iuea-maroon mr-2"></i>
                        <span id="fileName">document.pdf</span>
                    </div>
                    <span id="uploadPercentage" class="font-medium">0%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                    <div id="progressBar" class="bg-iuea-maroon h-full transition-all duration-300" style="width: 0%"></div>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="border-t border-gray-200 p-6 bg-gray-50 rounded-b-xl">
            <div class="flex justify-end space-x-3">
                <button onclick="closeUploadModal()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    Cancel
                </button>
                <button id="uploadBtn" class="px-4 py-2 text-sm font-medium text-white bg-iuea-maroon rounded-lg hover:bg-opacity-90 hidden">
                    Start Upload
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Filter Modal -->
<div id="filterModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-lg p-6 transform transition-all">
        <!-- Modal Header -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl font-semibold text-gray-900">Filter Documents</h3>
                <p class="text-sm text-gray-500 mt-1">Refine your document search</p>
            </div>
            <button onclick="closeFilterModal()" class="text-gray-400 hover:text-gray-500">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Filter Form -->
        <form class="space-y-6">
            <!-- Document Type -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Document Type</label>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="checkbox" class="text-iuea-maroon rounded border-gray-300 focus:ring-iuea-maroon">
                        <span class="ml-2 text-sm">PDF</span>
                    </label>
                    <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="checkbox" class="text-iuea-maroon rounded border-gray-300 focus:ring-iuea-maroon">
                        <span class="ml-2 text-sm">Word</span>
                    </label>
                    <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="checkbox" class="text-iuea-maroon rounded border-gray-300 focus:ring-iuea-maroon">
                        <span class="ml-2 text-sm">Excel</span>
                    </label>
                </div>
            </div>

            <!-- Department -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Department</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    <option value="">All Departments</option>
                    <option>Finance</option>
                    <option>Academic</option>
                    <option>Administration</option>
                    <option>IT</option>
                    <option>Human Resources</option>
                </select>
            </div>

            <!-- Status -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="status" class="text-iuea-maroon focus:ring-iuea-maroon">
                        <span class="ml-2 text-sm">All</span>
                    </label>
                    <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="status" class="text-iuea-maroon focus:ring-iuea-maroon">
                        <span class="ml-2 text-sm">Pending</span>
                    </label>
                    <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="status" class="text-iuea-maroon focus:ring-iuea-maroon">
                        <span class="ml-2 text-sm">Approved</span>
                    </label>
                    <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="status" class="text-iuea-maroon focus:ring-iuea-maroon">
                        <span class="ml-2 text-sm">Rejected</span>
                    </label>
                </div>
            </div>

            <!-- Date Range -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-xs text-gray-500">From</label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>
                    <div>
                        <label class="text-xs text-gray-500">To</label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-iuea-maroon focus:border-iuea-maroon">
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex justify-end space-x-3 pt-4 border-t">
                <button type="button" onclick="clearFilters()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    Clear All
                </button>
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-iuea-maroon rounded-lg hover:bg-opacity-90">
                    Apply Filters
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openUploadModal() {
        document.getElementById('uploadModal').classList.remove('hidden');
        document.getElementById('uploadModal').classList.add('flex');
    }

    function closeUploadModal() {
        document.getElementById('uploadModal').classList.add('hidden');
        document.getElementById('uploadModal').classList.remove('flex');
    }

    // Local file upload handling
    document.getElementById('localFile').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            document.getElementById('fileName').textContent = file.name;
            document.getElementById('uploadDetails').classList.remove('hidden');
            document.getElementById('uploadBtn').classList.remove('hidden');
        }
    });

    async function initGoogleDriveUpload() {
        try {
            // Google Drive API implementation would go here
            const response = await window.gapi.client.drive.files.list({
                'pageSize': 10,
                'fields': "nextPageToken, files(id, name)"
            });
            // Handle file selection
        } catch (err) {
            console.error('Error loading Google Drive:', err);
        }
    }

    // Simulate upload progress (replace with actual upload logic)
    function simulateUpload() {
        const progressBar = document.getElementById('progressBar');
        const percentageText = document.getElementById('uploadPercentage');
        const uploadProgress = document.getElementById('uploadProgress');
        
        uploadProgress.classList.remove('hidden');
        let progress = 0;
        
        const interval = setInterval(() => {
            progress += 5;
            progressBar.style.width = progress + '%';
            percentageText.textContent = progress + '%';
            
            if (progress >= 100) {
                clearInterval(interval);
                setTimeout(() => {
                    closeUploadModal();
                    uploadProgress.classList.add('hidden');
                    progressBar.style.width = '0%';
                    alert('Upload completed successfully!');
                }, 500);
            }
        }, 100);
    }

    function openFilterModal() {
        document.getElementById('filterModal').classList.remove('hidden');
        document.getElementById('filterModal').classList.add('flex');
    }

    function closeFilterModal() {
        document.getElementById('filterModal').classList.add('hidden');
        document.getElementById('filterModal').classList.remove('flex');
    }

    function clearFilters() {
        const form = document.querySelector('#filterModal form');
        const inputs = form.querySelectorAll('input[type="checkbox"], input[type="radio"], input[type="date"]');
        inputs.forEach(input => {
            if (input.type === 'checkbox' || input.type === 'radio') {
                input.checked = false;
            } else {
                input.value = '';
            }
        });
        const selects = form.querySelectorAll('select');
        selects.forEach(select => select.selectedIndex = 0);
    }
</script>
@endsection
