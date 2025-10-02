<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจัดการสมาชิก</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
    <div class="min-h-screen bg-gradient-to-br from-stone-900 via-stone-800 to-stone-900">
        <!-- Navigation -->
        <nav class="border-b border-stone-700 bg-stone-900/50 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-amber-500">ระบบจัดการสมาชิก</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ route('dashboard') }}" class="text-stone-300 hover:text-amber-400 transition">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-stone-300 hover:text-amber-400 transition">
                                เข้าสู่ระบบ
                            </a>
                            <a href="{{ route('register') }}" class="px-4 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition">
                                สมัครสมาชิก
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h2 class="text-5xl font-bold text-white mb-6">
                    ยินดีต้อนรับสู่<br>
                    <span class="text-amber-500">ระบบจัดการสมาชิก</span>
                </h2>
                <p class="text-xl text-stone-300 mb-12 max-w-2xl mx-auto">
                    ระบบจัดการสมาชิก 4 ระดับ พร้อมระบบอนุมัติและควบคุมสิทธิ์การเข้าถึง
                </p>
                
                @guest
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('register') }}" class="px-8 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition text-lg font-semibold shadow-lg">
                            สมัครสมาชิกเลย
                        </a>
                        <a href="{{ route('login') }}" class="px-8 py-3 bg-stone-700 text-white rounded-lg hover:bg-stone-600 transition text-lg font-semibold shadow-lg">
                            เข้าสู่ระบบ
                        </a>
                    </div>
                @else
                    <a href="{{ route('dashboard') }}" class="inline-block px-8 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition text-lg font-semibold shadow-lg">
                        ไปที่ Dashboard
                    </a>
                @endguest
            </div>

            <!-- Features -->
            <div class="mt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Admin -->
                <div class="bg-stone-800/50 backdrop-blur-sm p-6 rounded-lg border border-stone-700 hover:border-amber-600 transition">
                    <div class="w-12 h-12 bg-red-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Admin</h3>
                    <p class="text-stone-400">จัดการสิทธิ์ได้ทุกอย่าง ยกเว้นการดูรหัสผ่านผู้อื่น</p>
                </div>

                <!-- Manager -->
                <div class="bg-stone-800/50 backdrop-blur-sm p-6 rounded-lg border border-stone-700 hover:border-amber-600 transition">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Manager</h3>
                    <p class="text-stone-400">จัดการ Staff และดูรายการทุกอย่าง</p>
                </div>

                <!-- Staff -->
                <div class="bg-stone-800/50 backdrop-blur-sm p-6 rounded-lg border border-stone-700 hover:border-amber-600 transition">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Staff</h3>
                    <p class="text-stone-400">อนุมัติการเป็นสมาชิกและจัดการข้อมูลสมาชิก</p>
                </div>

                <!-- Member -->
                <div class="bg-stone-800/50 backdrop-blur-sm p-6 rounded-lg border border-stone-700 hover:border-amber-600 transition">
                    <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Member</h3>
                    <p class="text-stone-400">จัดการส่วนของตัวเองได้</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="border-t border-stone-700 mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <p class="text-center text-stone-400">
                    © {{ date('Y') }} ระบบจัดการสมาชิก. สร้างด้วย Laravel & Breeze
                </p>
            </div>
        </div>
    </div>
</body>
</html>