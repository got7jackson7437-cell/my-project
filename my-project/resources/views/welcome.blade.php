<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจัดการสมาชิก</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .gradient-animate {
            background-size: 200% 200%;
            animation: gradient 15s ease infinite;
        }
    </style>
</head>
<body class="antialiased font-sans">
    <div class="min-h-screen bg-gradient-to-br from-indigo-950 via-purple-900 to-pink-900 gradient-animate relative overflow-hidden">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 float-animation"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 float-animation" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 float-animation" style="animation-delay: 4s;"></div>
        </div>

        <!-- Navigation -->
        <nav class="relative border-b border-white/10 bg-white/5 backdrop-blur-xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-pink-300 via-purple-300 to-indigo-300 bg-clip-text text-transparent">
                            ระบบจัดการสมาชิก
                        </h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('dashboard') }}" class="text-purple-200 hover:text-white transition-colors duration-200 font-medium">
                            Dashboard
                        </a>
                        <a href="{{ route('login') }}" class="text-purple-200 hover:text-white transition-colors duration-200 font-medium">
                            เข้าสู่ระบบ
                        </a>
                        <a href="{{ route('register') }}" class="px-6 py-2.5 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-full hover:shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 font-semibold transform hover:scale-105">
                            สมัครสมาชิก
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <div class="inline-block mb-6">
                    <span class="px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-purple-200 text-sm font-semibold">
                        🎉 ยินดีต้อนรับสู่ระบบจัดการสมาชิก
                    </span>
                </div>
                
                <h2 class="text-6xl md:text-7xl font-bold text-white mb-6 leading-tight">
                    จัดการสมาชิก
                    <br>
                    <span class="bg-gradient-to-r from-pink-300 via-purple-300 to-indigo-300 bg-clip-text text-transparent">
                        อย่างมืออาชีพ
                    </span>
                </h2>
                
                <p class="text-xl text-purple-200 mb-12 max-w-2xl mx-auto leading-relaxed">
                    ระบบที่ออกแบบมาเพื่อการจัดการสมาชิกที่มีประสิทธิภาพ 
                    พร้อมระบบสิทธิ์แบบหลายระดับ
                </p>
                
                <div class="flex justify-center gap-4 flex-wrap">
                    <a href="{{ route('register') }}" class="group px-8 py-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-full hover:shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 text-lg font-semibold flex items-center gap-2 transform hover:scale-105">
                        สมัครสมาชิกเลย
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('login') }}" class="px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/20 text-white rounded-full hover:bg-white/20 transition-all duration-300 text-lg font-semibold transform hover:scale-105">
                        เข้าสู่ระบบ
                    </a>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="mt-32 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Admin Card -->
                <div class="group relative bg-white/5 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-pink-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-pink-500/20 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/10 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Admin</h3>
                        <p class="text-purple-200 leading-relaxed">จัดการสิทธิ์ได้ทุกอย่าง ยกเว้นการดูรหัสผ่านผู้อื่น</p>
                        <div class="mt-4 flex items-center text-pink-400 text-sm font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>เรียนรู้เพิ่มเติม</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Manager Card -->
                <div class="group relative bg-white/5 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-purple-500/20 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Manager</h3>
                        <p class="text-purple-200 leading-relaxed">จัดการ Staff และดูรายการทุกอย่างในระบบ</p>
                        <div class="mt-4 flex items-center text-purple-400 text-sm font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>เรียนรู้เพิ่มเติม</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Staff Card -->
                <div class="group relative bg-white/5 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-indigo-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-500/20 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Staff</h3>
                        <p class="text-purple-200 leading-relaxed">อนุมัติการเป็นสมาชิกและจัดการข้อมูลสมาชิก</p>
                        <div class="mt-4 flex items-center text-indigo-400 text-sm font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>เรียนรู้เพิ่มเติม</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Member Card -->
                <div class="group relative bg-white/5 backdrop-blur-xl p-8 rounded-2xl border border-white/10 hover:border-cyan-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-cyan-500/20 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Member</h3>
                        <p class="text-purple-200 leading-relaxed">จัดการส่วนของตัวเองได้อย่างเต็มที่</p>
                        <div class="mt-4 flex items-center text-cyan-400 text-sm font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>เรียนรู้เพิ่มเติม</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="mt-24 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10">
                    <div class="text-5xl font-bold bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text text-transparent mb-2">1,000+</div>
                    <div class="text-purple-200 font-medium">สมาชิกที่ใช้งาน</div>
                </div>
                <div class="text-center p-8 bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10">
                    <div class="text-5xl font-bold bg-gradient-to-r from-purple-300 to-indigo-300 bg-clip-text text-transparent mb-2">99.9%</div>
                    <div class="text-purple-200 font-medium">ความพึงพอใจ</div>
                </div>
                <div class="text-center p-8 bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10">
                    <div class="text-5xl font-bold bg-gradient-to-r from-indigo-300 to-cyan-300 bg-clip-text text-transparent mb-2">24/7</div>
                    <div class="text-purple-200 font-medium">บริการตลอดเวลา</div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="relative border-t border-white/10 mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-purple-200 text-center md:text-left">
                        © 2025 ระบบจัดการสมาชิก. สร้างด้วย Laravel & Breeze
                    </p>
                    <div class="flex gap-6">
                        <a href="#" class="text-purple-200 hover:text-white transition-colors">เกี่ยวกับเรา</a>
                        <a href="#" class="text-purple-200 hover:text-white transition-colors">นโยบายความเป็นส่วนตัว</a>
                        <a href="#" class="text-purple-200 hover:text-white transition-colors">ติดต่อเรา</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>