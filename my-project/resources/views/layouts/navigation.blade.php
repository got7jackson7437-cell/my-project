<nav x-data="{ open: false }" class="bg-stone-800 border-b border-stone-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-stone-100 text-xl font-bold">
                        ระบบสมาชิก
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    @auth
                        @if(auth()->user()->isAdmin())
                            <x-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.*')" class="text-stone-300">
                                จัดการผู้ใช้ทั้งหมด
                            </x-nav-link>
                        @endif

                        @if(auth()->user()->canManageStaff())
                            <x-nav-link :href="route('manager.staff.index')" :active="request()->routeIs('manager.*')" class="text-stone-300