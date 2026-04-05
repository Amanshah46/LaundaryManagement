
@extends('layouts.auth')

@section('title', 'Register - FreshFold Laundry')

@section('styles')
    body {
        background-image: radial-gradient(at 100% 0%, hsla(200,98%,48%,0.15) 0px, transparent 50%),
                          radial-gradient(at 0% 100%, hsla(199,89%,48%,0.15) 0px, transparent 50%);
    }
    .animate-float {
        animation: float 7s ease-in-out infinite;
    }
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px) translateX(10px); }
        100% { transform: translateY(0px); }
    }
@endsection

@section('content')
    <!-- Decorative background elements -->
    <div class="fixed top-10 right-20 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-float" style="animation-delay: 1s;"></div>
    <div class="fixed bottom-10 left-20 w-80 h-80 bg-cyan-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="animation-delay: 3s;"></div>

    <div class="w-full max-w-4xl flex glass-panel rounded-3xl shadow-2xl overflow-hidden relative z-10 transition-all duration-300 hover:shadow-primary/20 flex-row-reverse">

        <!-- Branding Side (Hidden on mobile) -->
        <div class="hidden md:flex flex-col justify-center items-center w-5/12 bg-gradient-to-br from-primary to-cyan-600 text-white p-10 relative overflow-hidden">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1545173168-9f1947eebb7f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80')] opacity-20 bg-cover bg-center mix-blend-overlay transform -scale-x-100"></div>
            <div class="relative z-10 flex flex-col items-center text-center">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mb-6 backdrop-blur-sm border border-white/30">
                    <i class="fa-solid fa-sparkles text-3xl"></i>
                </div>
                <h1 class="text-3xl font-bold mb-4 tracking-tight">Join FreshFold</h1>
                <p class="text-blue-100 text-sm leading-relaxed">Start managing your business more effectively today. Clean UI for clean clothes.</p>
            </div>

            <div class="absolute bottom-10 flex gap-2">
                <span class="w-2 h-2 rounded-full bg-white opacity-50"></span>
                <span class="w-2 h-2 rounded-full bg-white opacity-100"></span>
                <span class="w-2 h-2 rounded-full bg-white opacity-50"></span>
            </div>
        </div>

        <!-- Register Form Side -->
        <div class="w-full md:w-7/12 p-8 md:p-10 lg:p-14 flex flex-col justify-center bg-white/60">
            <div class="mb-8 pl-1">
                <a href="{{ route('login') ?? '#' }}" class="inline-flex items-center text-sm font-medium text-slate-500 hover:text-primary transition-colors mb-4 group">
                    <i class="fa-solid fa-arrow-left mr-2 transform group-hover:-translate-x-1 transition-transform"></i> Back to login
                </a>
                <h2 class="text-3xl font-bold text-slate-800 mb-2">Create Account</h2>
                <p class="text-slate-500 text-sm">Join us and start managing your laundry with ease.</p>
            </div>

            <!-- Laravel Form using Route -->
            <form method="POST" action="{{ route('register') ?? '#' }}" class="space-y-5">
                @csrf


<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="input-group relative">
                        <label for="firstName" class="block text-sm font-medium text-slate-600 mb-1 transition-colors">First Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-user text-slate-400 transition-colors"></i>
                            </div>
                            <input type="text" id="firstName" name="first_name" value="{{ old('first_name') }}" required autofocus
                                class="w-full pl-10 pr-4 py-2.5 bg-white/80 border @error('first_name') border-red-500 @else border-slate-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all shadow-sm placeholder:text-slate-400"
                                placeholder="">
                        </div>
                        @error('first_name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="input-group relative">
                        <label for="lastName" class="block text-sm font-medium text-slate-600 mb-1 transition-colors">Last Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-regular fa-user text-slate-400 transition-colors"></i>
                            </div>
                            <input type="text" id="lastName" name="last_name" value="{{ old('last_name') }}" required
                                class="w-full pl-10 pr-4 py-2.5 bg-white/80 border @error('last_name') border-red-500 @else border-slate-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all shadow-sm placeholder:text-slate-400"
                                placeholder="">
                        </div>
                        @error('last_name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="input-group relative">
                    <label for="email" class="block text-sm font-medium text-slate-600 mb-1 transition-colors">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-envelope text-slate-400 transition-colors"></i>
                        </div>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            class="w-full pl-10 pr-4 py-2.5 bg-white/80 border @error('email') border-red-500 @else border-slate-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all shadow-sm placeholder:text-slate-400"
                            placeholder="hello@example.com">
                    </div>
                    @error('email')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>


<div class="input-group relative">
                    <label for="password" class="block text-sm font-medium text-slate-600 mb-1 transition-colors">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-lock text-slate-400 transition-colors"></i>
                        </div>
                        <input type="password" id="password" name="password" required
                            class="w-full pl-10 pr-4 py-2.5 bg-white/80 border @error('password') border-red-500 @else border-slate-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all shadow-sm placeholder:text-slate-400 text-sm"
                            placeholder="Must be at least 8 characters">
                    </div>
                    @error('password')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-group relative">
                    <label for="password_confirmation" class="block text-sm font-medium text-slate-600 mb-1 transition-colors">Confirm Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-lock text-slate-400 transition-colors"></i>
                        </div>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            class="w-full pl-10 pr-4 py-2.5 bg-white/80 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all shadow-sm placeholder:text-slate-400 text-sm"
                            placeholder="Confirm your password">
                    </div>
                </div>

                <div class="flex items-start mt-4">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox" required class="w-4 h-4 text-primary focus:ring-primary border-gray-300 rounded cursor-pointer accent-primary mt-0.5" {{ old('terms') ? 'checked' : '' }}>
                    </div>
                    <div class="ml-2 text-sm">
                        <label for="terms" class="text-slate-600 cursor-pointer">I agree to the <a href="#" class="font-medium text-primary hover:underline">Terms of Service</a> and <a href="#" class="font-medium text-primary hover:underline">Privacy Policy</a>.</label>
                    </div>
                </div>

                <button type="submit" class="mt-8 w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-md text-sm font-semibold text-white bg-primary hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all active:scale-[0.98] transform relative overflow-hidden group">
                    <span class="absolute inset-0 w-full h-full bg-white/20 -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></span>
                    Create Account
                </button>

            </form>

            <div class="mt-6 text-center text-sm text-slate-600">
                Already have an account?
                <a href="{{ route('login') ?? '#' }}" class="font-semibold text-primary hover:text-blue-700 transition-colors ml-1">Log in here</a>
            </div>
        </div>
    </div>
@endsection
