> Amit Shah:
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FreshFold Laundry')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: { primary: '#0ea5e9', secondary: '#38bdf8', dark: '#0f172a', light: '#f8fafc' }
                }
            }
        }
    </script>
    <style>
        body { background-color: #f1f5f9; }
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .sidebar-item { transition: all 0.2s ease; }
        .sidebar-item:hover, .sidebar-item.active {
            background-color: rgba(14, 165, 233, 0.1); color: #0ea5e9; border-right: 3px solid #0ea5e9;
        }
        .sidebar-item.active i { color: #0ea5e9; }
        @yield('styles')
    </style>
</head>
<body class="text-slate-800 antialiased font-sans flex h-screen overflow-hidden selection:bg-primary/20 selection:text-primary relative">

    <!-- Mobile sidebar overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-slate-900/50 z-20 hidden lg:hidden backdrop-blur-sm" onclick="toggleSidebar()"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="bg-white w-72 h-full flex flex-col border-r border-slate-200 fixed lg:static z-30 transition-transform duration-300 transform -translate-x-full lg:translate-x-0 shadow-xl lg:shadow-none">

        <div class="h-20 flex items-center px-8 border-b border-slate-100 flex-shrink-0">
            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center mr-3 border border-primary/20">
                <i class="fa-solid fa-shirt text-primary text-xl"></i>
            </div>
            <h1 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary to-blue-600">FreshFold</h1>

            <button onclick="toggleSidebar()" class="lg:hidden ml-auto text-slate-400 hover:text-slate-600">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

> Amit Shah:
<!-- Navigation -->
        <div class="flex-1 overflow-y-auto py-6 flex flex-col gap-1 px-4">
            <div class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2 px-4 mt-2">Main</div>

            <a href="{{ route('dashboard') ?? '#' }}" class="sidebar-item active flex items-center px-4 py-3 text-sm font-medium text-slate-600 rounded-lg">
                <i class="fa-solid fa-house w-6 text-slate-400 text-lg mr-2 transition-colors"></i>
                Dashboard
            </a>

            <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-600 rounded-lg">
                <i class="fa-solid fa-clipboard-list w-6 text-slate-400 text-lg mr-2 transition-colors"></i>
                Orders
                <span class="ml-auto bg-primary text-white text-xs font-bold px-2 py-0.5 rounded-full">12</span>
            </a>

            <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-600 rounded-lg">
                <i class="fa-solid fa-users w-6 text-slate-400 text-lg mr-2 transition-colors"></i>
                Customers
            </a>

            <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-600 rounded-lg">
                <i class="fa-solid fa-tags w-6 text-slate-400 text-lg mr-2 transition-colors"></i>
                Services & Pricing
            </a>

            <div class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2 px-4 mt-8">Business</div>

            <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-600 rounded-lg">
                <i class="fa-solid fa-chart-pie w-6 text-slate-400 text-lg mr-2 transition-colors"></i>
                Analytics
            </a>
            <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-600 rounded-lg">
                <i class="fa-solid fa-file-invoice-dollar w-6 text-slate-400 text-lg mr-2 transition-colors"></i>
                Finances
            </a>
            <a href="#" class="sidebar-item flex items-center px-4 py-3 text-sm font-medium text-slate-600 rounded-lg">
                <i class="fa-solid fa-gear w-6 text-slate-400 text-lg mr-2 transition-colors"></i>
                Settings
            </a>
        </div>

        <!-- User Profile (Bottom) -->
        <div class="p-4 border-t border-slate-100">
            <form method="POST" action="{{ route('logout') ?? '#' }}" id="logout-form">
                @csrf
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center p-3 rounded-xl hover:bg-slate-50 transition-colors group">
                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=0ea5e9&color=fff" alt="{{ Auth::user()->name ?? 'Admin User' }}" class="w-10 h-10 rounded-full shadow-sm">
                    <div class="ml-3 flex-1">
                        <p class="text-sm font-semibold text-slate-800">{{ Auth::user()->name ?? 'Admin User' }}</p>
                        <p class="text-xs text-slate-500">Store Manager</p>
                    </div>
                    <i class="fa-solid fa-arrow-right-from-bracket text-slate-400 group-hover:text-red-500 transition-colors"></i>
                </a>
            </form>
        </div>
    </aside>

> Amit Shah:
<!-- Main Content -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden bg-slate-50 relative">

        <!-- Header -->
        <header class="h-20 bg-white/80 backdrop-blur-md border-b border-slate-200 flex items-center justify-between px-6 lg:px-10 z-10 sticky top-0">
            <div class="flex items-center gap-4">
                <button onclick="toggleSidebar()" class="lg:hidden p-2 text-slate-500 hover:text-slate-800 hover:bg-slate-100 rounded-lg transition-colors">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
                <h2 class="text-2xl font-bold text-slate-800 hidden sm:block">@yield('header_title', 'Overview')</h2>
            </div>

            <div class="flex items-center gap-4 sm:gap-6">
                <!-- Search -->
                <div class="relative hidden md:block">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                    <input type="text" placeholder="Search orders, customers..." class="pl-10 pr-4 py-2 bg-slate-100 border-transparent rounded-full text-sm focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all w-64 outline-none">
                </div>

                <!-- Notification -->
                <button class="relative p-2 text-slate-500 hover:text-slate-800 hover:bg-slate-100 rounded-full transition-colors">
                    <i class="fa-regular fa-bell text-xl"></i>
                    <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                </button>

                <!-- New Order CTA -->
                <button class="bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-full text-sm font-medium shadow-sm shadow-primary/30 flex items-center gap-2 transition-all active:scale-95">
                    <i class="fa-solid fa-plus hidden sm:inline-block"></i> <span>New Order</span>
                </button>
            </div>
        </header>

        <!-- Dynamic Content -->
        <div class="flex-1 overflow-y-auto p-6 lg:p-10 hide-scrollbar pb-24">
            @yield('content')
        </div>
    </main>

    <script>
        // Sidebar Toggle Logic for Mobile
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        function toggleSidebar() {
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            }
        }
    </script>

    @stack('scripts')
</body>
</html>
