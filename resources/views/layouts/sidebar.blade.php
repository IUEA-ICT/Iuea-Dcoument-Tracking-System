<div class="fixed inset-y-0 left-0 w-64 shadow-xl text-white transition-colors duration-300">
    <div class="absolute inset-0 z-0 bg-gradient-to-b from-iuea-maroon to-[#5f0000] dark:from-[#23263a] dark:to-[#3a1a1a]"></div>
    <div class="relative z-10 h-full">
        <!-- Logo Section -->
        <div class="flex items-center justify-center h-20 border-b border-white/10 bg-black/10">
            <div class="bg-white p-2 rounded-full">
                <img src="//172.16.17.10/port/img/Logosq.png" class="h-10 w-10" alt="IUEA Logo">
            </div>
            <div class="ml-3">
                <span class="font-bold text-lg">IUEA</span>
                <span class="text-xs block opacity-70 dark:text-gray-300">Document Tracking</span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="mt-8 px-4">
            <div class="space-y-4">
                <a href="/dashboard" class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors hover:bg-white/5 dark:hover:bg-[#2e3a4e] {{ request()->is('dashboard') ? 'sidebar-active' : '' }}">
                    <i class="fas fa-home w-5 h-5"></i>
                    <span class="ml-3">Dashboard</span>
                </a>

                <div class="px-4 py-2">
                    <h3 class="text-xs uppercase tracking-wider text-white/50 dark:text-gray-400">Documents</h3>
                </div>

                <a href="/documents" class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors hover:bg-white/5 dark:hover:bg-[#2e3a4e] {{ request()->is('documents') ? 'sidebar-active' : '' }}">
                    <i class="fas fa-file w-5 h-5"></i>
                    <span class="ml-3">All Documents</span>
                </a>

                <a href="/documents/pending" class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors hover:bg-white/5 dark:hover:bg-[#2e3a4e] {{ request()->is('documents/pending') ? 'sidebar-active' : '' }}">
                    <i class="fas fa-clock w-5 h-5"></i>
                    <span class="ml-3">Pending</span>
                </a>

                <div class="px-4 py-2">
                    <h3 class="text-xs uppercase tracking-wider text-white/50 dark:text-gray-400">Management</h3>
                </div>

                <a href="/users" class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors hover:bg-white/5 dark:hover:bg-[#2e3a4e] {{ request()->is('users') ? 'sidebar-active' : '' }}">
                    <i class="fas fa-users w-5 h-5"></i>
                    <span class="ml-3">Users</span>
                </a>

                <a href="/reports" class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors hover:bg-white/5 dark:hover:bg-[#2e3a4e] {{ request()->is('reports') ? 'sidebar-active' : '' }}">
                    <i class="fas fa-chart-bar w-5 h-5"></i>
                    <span class="ml-3">Reports</span>
                </a>
            </div>

            <!-- Bottom Section -->
            <div class="absolute bottom-0 left-0 right-0 p-4">
                <hr class="border-white/10 mb-4">
                <a href="{{ route('settings') }}" class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors hover:bg-white/5 dark:hover:bg-[#2e3a4e] {{ request()->is('settings') ? 'sidebar-active' : '' }}">
                    <i class="fas fa-cog w-5 h-5"></i>
                    <span class="ml-3">Settings</span>
                </a>
                <a href="/login" class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors text-red-300 hover:text-red-200 hover:bg-white/5 dark:hover:bg-[#2e3a4e]">
                    <i class="fas fa-sign-out-alt w-5 h-5"></i>
                    <span class="ml-3">Logout</span>
                </a>
            </div>
        </nav>
    </div>
</div>

<style>
.dark .sidebar-active {
    background-color: rgba(255, 255, 255, 0.05);
    border-left: 4px solid #FFD700;
    font-weight: 600;
    color: #FFD700;
}
</style>
