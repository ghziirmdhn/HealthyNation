@extends('layouts.app')

@section('title', 'Class')

@section('content')
<body class="bg-black" x-data="{ showLogin: true }">
    <div class="min-h-screen flex items-center justify-center p-4">
        <!-- Auth Card Container -->
        <div class="w-full max-w-md">
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl border border-white/20 overflow-hidden">
                <!-- Card Header -->
                <div class="relative h-32 bg-gradient-to-r from-yellow-400 to-fuchsia-600">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h2 class="text-3xl font-bold text-white" x-text="showLogin ? 'Welcome Back!' : 'Create Account'"></h2>
                    </div>
                </div>

                <!-- Form Container -->
                <div class="p-8">
                    <!-- Login Form -->
                    <div x-show="showLogin"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform translate-x-40"
                         x-transition:enter-end="opacity-100 transform translate-x-0">
                        <p class="text-gray-400 text-center mb-6">
                            Don't have an account? 
                            <button @click="showLogin = false" class="text-yellow-500 hover:text-yellow-400 font-medium">
                                Sign up
                            </button>
                        </p>

                        <form action="{{ route('user.login.post') }}" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </span>
                                    <input type="email" name="email" placeholder="Email address" 
                                           class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                                </div>
                            </div>

                            <div>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                        </svg>
                                    </span>
                                    <input type="password" name="password" placeholder="Password"
                                           class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                                </div>
                            </div>

                            <div class="flex items-center justify-between text-sm">
                                <label class="flex items-center text-gray-400">
                                    <input type="checkbox" class="mr-2 text-yellow-500 focus:ring-yellow-500">
                                    Remember me
                                </label>
                                <a href="#" class="text-yellow-500 hover:text-yellow-400">Forgot password?</a>
                            </div>

                            <button type="submit" class="w-full py-3 rounded-lg bg-gradient-to-r from-yellow-500 to-yellow-600 text-black font-semibold hover:from-yellow-400 hover:to-yellow-500 transition-all duration-300">
                                Sign In
                            </button>
                        </form>

                        <div class="mt-6">
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-white/10"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-2 bg-black/40 text-gray-400">Or continue with</span>
                                </div>
                            </div>

                            <div class="mt-6 grid grid-cols-3 gap-3">
                                <button class="flex justify-center py-2 px-4 border border-white/10 rounded-lg hover:bg-white/5 transition-colors">
                                    <img src="{{ asset('assets/google.png') }}" class="h-5 w-5" alt="Google">
                                </button>
                                <button class="flex justify-center py-2 px-4 border border-white/10 rounded-lg hover:bg-white/5 transition-colors">
                                    <img src="{{ asset('assets/apple.png') }}" class="h-5 w-5" alt="Apple">
                                </button>
                                <button class="flex justify-center py-2 px-4 border border-white/10 rounded-lg hover:bg-white/5 transition-colors">
                                    <img src="{{ asset('assets/facebook.png') }}" class="h-5 w-5" alt="Facebook">
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Register Form -->
                    <div x-show="!showLogin"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-x-40"
                         x-transition:enter-end="opacity-100 transform translate-x-0">
                        <p class="text-gray-400 text-center mb-6">
                            Already have an account? 
                            <button @click="showLogin = true" class="text-yellow-500 hover:text-yellow-400 font-medium">
                                Sign in
                            </button>
                        </p>

                        <form action="{{ route('user.register.post') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </span>
                                <input type="email" name="email" placeholder="Email address"
                                       class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            </div>

                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </span>
                                <input type="text" name="username" placeholder="Username"
                                       class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            </div>

                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </span>
                                <input type="password" name="password" placeholder="Password"
                                       class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            </div>

                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </span>
                                <input type="password" name="password_confirmation" placeholder="Confirm password"
                                       class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            </div>

                            <button type="submit" class="w-full py-3 rounded-lg bg-gradient-to-r from-yellow-500 to-yellow-600 text-black font-semibold hover:from-yellow-400 hover:to-yellow-500 transition-all duration-300">
                                Create Account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>