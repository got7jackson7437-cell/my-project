<x-app-layout>
    <x-slot name="header">
        จัดการสมาชิก (Staff)
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Tab Navigation -->
        <div class="mb-4">
            <div class="border-b border-stone-300">
                <nav class="-mb-px flex space-x-8">
                    <button onclick="showTab('pending')" id="tab-pending" 
                        class="tab-button border-b-2 border-amber-600 py-4 px-1 text-sm font-medium text-amber-600">
                        รออนุมัติ
                        @if($pendingMembers->total() > 0)
                            <span class="ml-2 px-2 py-1 text-xs bg-red-500 text-white rounded-full">{{ $pendingMembers->total() }}</span>
                        @endif
                    </button>
                    <button onclick="showTab('all')" id="tab-all" 
                        class="tab-button border-b-2 border-transparent py-4 px-1 text-sm font-medium text-stone-500 hover:text-stone-700 hover:border-stone-300">
                        สมาชิกทั้งหมด
                    </button>
                </nav>
            </div>
        </div>

        <!-- Pending Members Tab -->
        <div id="content-pending" class="tab-content">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-stone-700 px-6 py-4">
                    <h3 class="text-lg font-semibold text-white">สมาชิกรออนุมัติ</h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-stone-200">
                        <thead class="bg-stone-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-stone-500 uppercase">ชื่อ</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-stone-500 uppercase">อีเมล</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-stone-500 uppercase">วันที่สมัคร</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-stone-500 uppercase">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-stone-200">
                            @forelse($pendingMembers as $member)
                                <tr class="hover:bg-stone-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-stone-900">{{ $member->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-stone-600">{{ $member->email }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-stone-600">
                                        {{ $member->created_at->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end gap-2">
                                            <form action="{{ route('staff.members.approve', $member) }}" method="POST" onsubmit="return confirm('อนุมัติสมาชิกนี้?');">
                                                @csrf
                                                <button type="submit" class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 transition flex items-center gap-1">
                                                    <svg class="w-4