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
        <div class="space-y-4">
            <a href="/dashboard" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors">
                <i class="fas fa-home w-5 h-5"></i>
                <span class="ml-3">Dashboard</span>
            </a>

            <div class="px-4 py-2">
                <h3 class="text-xs uppercase tracking-wider text-white/50">Documents</h3>
            </div>

            <a href="/documents" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors">
                <i class="fas fa-file w-5 h-5"></i>
                <span class="ml-3">All Documents</span>
            </a>

            <a href="/documents/pending" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors">
                <i class="fas fa-clock w-5 h-5"></i>
                <span class="ml-3">Pending</span>
            </a>

            <div class="px-4 py-2">
                <h3 class="text-xs uppercase tracking-wider text-white/50">Management</h3>
            </div>

            <a href="/users" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors">
                <i class="fas fa-users w-5 h-5"></i>
                <span class="ml-3">Users</span>
            </a>

            <a href="/reports" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors">
                <i class="fas fa-chart-bar w-5 h-5"></i>
                <span class="ml-3">Reports</span>
            </a>
        </div>

        <!-- Bottom Section -->
        <div class="absolute bottom-0 left-0 right-0 p-4">
            <hr class="border-white/10 mb-4">
            <a href="/login" class="flex items-center px-4 py-3 text-sm rounded-lg hover:bg-white/5 transition-colors text-red-300 hover:text-red-200">
                <i class="fas fa-sign-out-alt w-5 h-5"></i>
                <span class="ml-3">Logout</span>
            </a>
        </div>
    </nav>
</div>
