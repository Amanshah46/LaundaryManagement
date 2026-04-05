
@extends('layouts.auth')

@section('title', 'Login - FreshFold Laundry')

@section('styles')
    body {
        background-image: radial-gradient(at 0% 0%, hsla(200,98%,48%,0.15) 0px, transparent 50%),
                          radial-gradient(at 100% 100%, hsla(199,89%,48%,0.15) 0px, transparent 50%);
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
@endsection

@section('content')
    <!-- Decorative background elements -->
    <div class="fixed top-20 left-20 w-64 h-64 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="animation-delay: 0s;"></div>
    <div class="fixed bottom-20 right-20 w-80 h-80 bg-cyan-300 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="animation-delay: 2s;"></div>

    <div class="w-full max-w-4xl flex glass-panel rounded-3xl shadow-2xl overflow-hidden relative z-10 transition-all duration-300 hover:shadow-cyan-500/20">

        <!-- Branding Side (Hidden on mobile) -->
        <div class="hidden md:flex flex-col justify-center items-center w-5/12 bg-gradient-to-br from-primary to-blue-700 text-white p-10 relative overflow-hidden">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1545173168-9f1947eebb7f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80')] opacity-20 bg-cover bg-center mix-blend-overlay"></div>
            <div class="relative z-10 flex flex-col items-center text-center">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mb-6 backdrop-blur-sm border border-white/30">
                    <i class="fa-solid fa-shirt text-4xl"></i>
                </div>
                <h1 class="text-3xl font-bold mb-4 tracking-tight">FreshFold</h1>
                <p class="text-blue-100 text-sm leading-relaxed">Your premium laundry management solution. Clean clothes, simplified process, happy customers.</p>
            </div>

            <!-- Simple dots decoration -->
            <div class="absolute bottom-10 flex gap-2">
                <span class="w-2 h-2 rounded-full bg-white opacity-100"></span>
                <span class="w-2 h-2 rounded-full bg-white opacity-50"></span>
                <span class="w-2 h-2 rounded-full bg-white opacity-50"></span>
            </div>
        </div>

        <!-- Login Form Side -->
        <div class="w-full md:w-7/12 p-8 md:p-12 lg:p-16 flex flex-col justify-center bg-white/60">
            <div class="mb-10 text-center md:text-left">
                <h2 class="text-3xl font-bold text-slate-800 mb-2">Welcome Back</h2>
                <p class="text-slate-500">Please enter your details to sign in.</p>
            </div>


<!-- Laravel Form using Route -->
            <form method="POST" action="{{ route('login') ?? '#' }}" class="space-y-6">
                @csrf
                <div class="space-y-5">

                    <div class="input-group relative">
                        <label for="email" class="block text-sm font-medium text-slate-600 mb-1 transition-colors">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-envelope text-slate-400 transition-colors"></i>
                            </div>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                                class="w-full pl-10 pr-4 py-3 bg-white/80 border @error('email') border-red-500 @else border-slate-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all shadow-sm placeholder:text-slate-400"
                                placeholder="hello@example.com">
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="input-group relative">
                        <div class="flex justify-between items-center mb-1">
                            <label for="password" class="block text-sm font-medium text-slate-600 transition-colors">Password</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs font-semibold text-primary hover:text-blue-700 transition-colors">Forgot password?</a>
                            @endif
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-lock text-slate-400 transition-colors"></i>
                            </div>
                            <input type="password" id="password" name="password" required
                                class="w-full pl-10 pr-4 py-3 bg-white/80 border @error('password') border-red-500 @else border-slate-200 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all shadow-sm placeholder:text-slate-400"
                                placeholder="••••••••">
                            <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded cursor-pointer accent-primary">
                    <label for="remember_me" class="ml-2 block text-sm text-slate-600 cursor-pointer">
                        Remember me for 30 days
                    </label>
                </div>

>
<a href="/dashboard"><button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl shadow-md text-sm font-semibold text-white bg-primary hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all active:scale-[0.98] transform relative overflow-hidden group">
                    <span class="absolute inset-0 w-full h-full bg-white/20 -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></span>
                    Sign In
                </button></a>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-slate-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-[#f4fbff] text-slate-500 rounded-lg">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 flex gap-3">
                        <button type="button" class="w-full flex justify-center py-2.5 px-4 border border-slate-200 rounded-xl shadow-sm bg-white text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 focus:outline-none transition-colors">
                            <i class="fa-brands fa-google text-red-500 mr-2 text-lg"></i> Google
                        </button>
                        <button type="button" class="w-full flex justify-center py-2.5 px-4 border border-slate-200 rounded-xl shadow-sm bg-white text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 focus:outline-none transition-colors">
                            <i class="fa-brands fa-apple text-slate-900 mr-2 text-lg"></i> Apple
                        </button>
                    </div>
                </div>

            </form>

            <div class="mt-8 text-center md:text-left text-sm text-slate-600">
                Don't have an account?
                <a href="{{ route('register') ?? '#' }}" class="font-semibold text-primary hover:text-blue-700 transition-colors ml-1">Create an account</a>
            </div>
        </div>
    </div>
@endsection
