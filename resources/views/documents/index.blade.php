@extends('layouts.app')

@section('title', 'Documents')
@section('header', 'Document Management')

@section('content')
<div class="space-y-6">
    <!-- Actions Bar -->
    <div class="flex justify-between items-center">
        <div class="flex gap-4">
            <button class="bg-iuea-maroon text-white px-4 py-2 rounded-lg hover:bg-opacity-90">
                <i class="fas fa-plus mr-2"></i> Upload Document
            </button>
            <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200">
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
@endsection
