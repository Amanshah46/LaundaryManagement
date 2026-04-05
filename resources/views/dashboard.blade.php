> Amit Shah:
@extends('layouts.app')

@section('title', 'Dashboard - FreshFold Laundry')
@section('header_title', 'Overview')

@section('content')
    <div class="max-w-7xl mx-auto space-y-8">

        <!-- Date/Greeting -->
        <div class="flex justify-between items-end">
            <div>
                <p class="text-slate-500 mb-1 text-sm font-medium">Today's Date</p>
                <!-- Using Blade to inject current date or fallback to JS -->
                <h3 class="text-slate-800 font-bold text-lg"><span id="currentDate">{{ now()->format('D, M d, Y') }}</span></h3>
            </div>
            <div class="text-right hidden sm:block">
                <p class="text-slate-500 text-sm">Store Status</p>
                <span class="inline-flex items-center text-emerald-600 text-sm font-semibold mt-1">
                    <span class="w-2 h-2 bg-emerald-500 rounded-full mr-2 animate-pulse"></span> Open
                </span>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Stat 1 -->
            <div class="bg-white rounded-2xl p-6 border border-slate-100 stat-card relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-blue-50 rounded-full opacity-50 z-0 text-primary"></div>
                <div class="flex justify-between items-start relative z-10 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-primary text-xl border border-blue-100">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </div>
                    <span class="flex items-center text-sm font-semibold text-emerald-500 bg-emerald-50 px-2.5 py-1 rounded-full">
                        <i class="fa-solid fa-arrow-trend-up mr-1 text-xs"></i> 12%
                    </span>
                </div>
                <div class="relative z-10">
                    <h4 class="text-slate-500 text-sm font-medium mb-1">Active Orders</h4>
                    <p class="text-3xl font-bold text-slate-800">124</p>
                </div>
            </div>

            <!-- Stat 2 -->
            <div class="bg-white rounded-2xl p-6 border border-slate-100 stat-card relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-amber-50 rounded-full opacity-50 z-0"></div>
                <div class="flex justify-between items-start relative z-10 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center text-amber-500 text-xl border border-amber-100">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <span class="flex items-center text-sm font-semibold text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full">
                        <i class="fa-solid fa-minus mr-1 text-xs"></i> 0%
                    </span>
                </div>
                <div class="relative z-10">
                    <h4 class="text-slate-500 text-sm font-medium mb-1">Pending Delivery</h4>
                    <p class="text-3xl font-bold text-slate-800">32</p>
                </div>
            </div>

> Amit Shah:
<!-- Stat 3 -->
            <div class="bg-white rounded-2xl p-6 border border-slate-100 stat-card relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-emerald-50 rounded-full opacity-50 z-0"></div>
                <div class="flex justify-between items-start relative z-10 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-500 text-xl border border-emerald-100">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    <span class="flex items-center text-sm font-semibold text-emerald-500 bg-emerald-50 px-2.5 py-1 rounded-full">
                        <i class="fa-solid fa-arrow-trend-up mr-1 text-xs"></i> 8.5%
                    </span>
                </div>
                <div class="relative z-10">
                    <h4 class="text-slate-500 text-sm font-medium mb-1">Revenue Today</h4>
                    <p class="text-3xl font-bold text-slate-800">$845.00</p>
                </div>
            </div>

            <!-- Stat 4 -->
            <div class="bg-white rounded-2xl p-6 border border-slate-100 stat-card relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-purple-50 rounded-full opacity-50 z-0"></div>
                <div class="flex justify-between items-start relative z-10 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center text-purple-500 text-xl border border-purple-100">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <span class="flex items-center text-sm font-semibold text-red-500 bg-red-50 px-2.5 py-1 rounded-full">
                        <i class="fa-solid fa-arrow-trend-down mr-1 text-xs"></i> 2.1%
                    </span>
                </div>
                <div class="relative z-10">
                    <h4 class="text-slate-500 text-sm font-medium mb-1">New Customers</h4>
                    <p class="text-3xl font-bold text-slate-800">18</p>
                </div>
            </div>

        </div>

        <!-- Recent Orders Table -->
        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">

            <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h3 class="text-lg font-bold text-slate-800">Recent Orders</h3>

                <div class="flex items-center gap-2">
                    <div class="flex bg-slate-100 p-1 rounded-lg">
                        <button class="px-3 py-1.5 text-xs font-medium bg-white text-slate-800 rounded shadow-sm">All</button>
                        <button class="px-3 py-1.5 text-xs font-medium text-slate-500 hover:text-slate-800 rounded transition-colors">Pending</button>
                        <button class="px-3 py-1.5 text-xs font-medium text-slate-500 hover:text-slate-800 rounded transition-colors">Completed</button>
                    </div>
                    <button class="p-1.5 border border-slate-200 text-slate-500 rounded-lg hover:bg-slate-50 transition-colors">
                        <i class="fa-solid fa-filter text-sm"></i>
                    </button>
                </div>
            </div>

> Amit Shah:
<div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/50 text-xs uppercase tracking-wider text-slate-500 border-b border-slate-200">
                            <th class="px-6 py-4 font-medium">Order ID</th>
                            <th class="px-6 py-4 font-medium">Customer Info</th>
                            <th class="px-6 py-4 font-medium">Service Type</th>
                            <th class="px-6 py-4 font-medium">Amount</th>
                            <th class="px-6 py-4 font-medium">Status</th>
                            <th class="px-6 py-4 font-medium text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-slate-100">
                        <!-- Row 1 -->
                        <tr class="hover:bg-blue-50/30 transition-colors group cursor-pointer">
                            <td class="px-6 py-4 font-semibold text-slate-700">#ORD-9021</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-semibold text-xs mr-3">SJ</div>
                                    <div>
                                        <p class="font-medium text-slate-800">Sarah Jenkins</p>
                                        <p class="text-xs text-slate-500">+1 (555) 123-4567</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col gap-1">
                                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-2 py-1 rounded border border-slate-200 w-max">Wash & Fold</span>
                                    <span class="text-xs text-slate-400">12 lbs</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-700">$24.00</td>
                            <td class="px-6 py-4">
                                <span class="status-badge status-washing text-blue-600 bg-blue-50 px-2.5 py-1 rounded-full text-xs font-semibold border border-blue-100 inline-block w-max">Washing</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-primary transition-colors p-2"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-blue-50/30 transition-colors group cursor-pointer">
                            <td class="px-6 py-4 font-semibold text-slate-700">#ORD-9020</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-semibold text-xs mr-3">MR</div>
                                    <div>
                                        <p class="font-medium text-slate-800">Michael Ross</p>
                                        <p class="text-xs text-slate-500">+1 (555) 987-6543</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col gap-1">
                                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-2 py-1 rounded border border-slate-200 w-max">Dry Cleaning</span>
                                    <span class="text-xs text-slate-400">3 Suits</span>

> Amit Shah:
</div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-700">$45.50</td>
                            <td class="px-6 py-4">
                                <span class="status-badge status-ready text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-full text-xs font-semibold border border-emerald-100 inline-block w-max">Ready for Pickup</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-primary transition-colors p-2"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-blue-50/30 transition-colors group cursor-pointer">
                            <td class="px-6 py-4 font-semibold text-slate-700">#ORD-9019</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-semibold text-xs mr-3">ED</div>
                                    <div>
                                        <p class="font-medium text-slate-800">Emily Davis</p>
                                        <p class="text-xs text-slate-500">+1 (555) 321-7890</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col gap-1">
                                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-2 py-1 rounded border border-slate-200 w-max">Ironing</span>
                                    <span class="text-xs text-slate-400">10 Shirts</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-700">$30.00</td>
                            <td class="px-6 py-4">
                                <span class="status-badge status-pending text-amber-600 bg-amber-50 px-2.5 py-1 rounded-full text-xs font-semibold border border-amber-100 inline-block w-max">Pending Input</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-primary transition-colors p-2"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>

> Amit Shah:
<!-- Row 4 -->
                        <tr class="hover:bg-blue-50/30 transition-colors group cursor-pointer">
                            <td class="px-6 py-4 font-semibold text-slate-700">#ORD-9018</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-semibold text-xs mr-3">JW</div>
                                    <div>
                                        <p class="font-medium text-slate-800">James Wilson</p>
                                        <p class="text-xs text-slate-500">+1 (555) 888-2222</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col gap-1">
                                    <span class="inline-block bg-slate-100 text-slate-600 text-xs px-2 py-1 rounded border border-slate-200 w-max">Wash & Fold</span>
                                    <span class="text-xs text-slate-400">25 lbs, Express</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-700">$65.00</td>
                            <td class="px-6 py-4">
                                <span class="status-badge status-delivered text-slate-600 bg-slate-100 px-2.5 py-1 rounded-full text-xs font-semibold border border-slate-200 inline-block w-max">Delivered</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-primary transition-colors p-2"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="p-4 border-t border-slate-100 bg-slate-50 text-center">
                <a href="#" class="text-sm font-semibold text-primary hover:text-blue-700 transition-colors inline-block w-full">View All Orders <i class="fa-solid fa-arrow-right ml-1 text-xs"></i></a>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
<script>
    // Just in case the server date is not available or you still want dynamic client time update
    // If you only want the PHP date you can remove this push block
    document.addEventListener('DOMContentLoaded', () => {
        const dateElement = document.getElementById('currentDate');
        // This will overwrite the Blade {{ now()->format() }} with client's local time if desired
        // const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };
        // dateElement.textContent = new Date().toLocaleDateString('en-US', options);
    });
</script>
@endpush
