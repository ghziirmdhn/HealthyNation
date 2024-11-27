@extends('layouts.app')

@section('title', 'Membership')

@section('content')
<div class="relative min-h-screen">
    <!-- Background Images with Smoke Effect -->
    <div class="absolute inset-0 grid grid-cols-3 gap-0">
        <!-- First Image -->
        <div class="relative h-full">
            <img src="{{ asset('assets/Home(Bottom2).jpg') }}" alt="Gym 1" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <!-- Second Image -->
        <div class="relative h-full">
            <img src="{{ asset('assets/Home(Bottom3).jpg') }}" alt="Gym 2" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <!-- Third Image -->
        <div class="relative h-full">
            <img src="{{ asset('assets/Home(Bottom1).jpg') }}" alt="Gym 3" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <!-- Additional Smoke Effect -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-white mb-4">Choose Your Journey</h1>
                <p class="text-xl text-gray-300">Transform your life with our premium membership plans</p>
            </div>

            <!-- Pricing Cards -->
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Monthly Plan -->
                <div class="group">
                    <div class="relative bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <div class="absolute -top-4 -left-4 w-20 h-20 bg-yellow-500 rounded-full opacity-20 group-hover:scale-150 transition-all duration-500"></div>
                        <h3 class="text-2xl font-bold text-white mb-4">Monthly Plan</h3>
                        <div class="text-4xl font-bold text-yellow-500 mb-6">
                            Rp100k
                            <span class="text-lg font-normal text-gray-400">/month</span>
                        </div>
                        <ul class="text-gray-300 space-y-3 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                Basic Equipment Access
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                Standard Classes
                            </li>
                        </ul>
                        <form action="{{ route('payment.form') }}" method="GET">
                            <input type="hidden" name="plan" value="monthly">
                            <button class="w-full py-4 bg-yellow-500 text-black font-semibold rounded-xl hover:bg-yellow-400 transition-colors duration-300">
                                Get Started
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Middle Class -->
                <div class="group">
                    <div class="relative bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 transform scale-105">
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-yellow-500 rounded-full opacity-20 group-hover:scale-150 transition-all duration-500"></div>
                        <span class="absolute -top-4 right-4 bg-yellow-500 text-black text-sm font-bold px-4 py-1 rounded-full">POPULAR</span>
                        <h3 class="text-2xl font-bold text-white mb-4">Middle Class</h3>
                        <div class="text-4xl font-bold text-yellow-500 mb-6">
                            Rp550k
                            <span class="text-lg font-normal text-gray-400">/6 months</span>
                        </div>
                        <ul class="text-gray-300 space-y-3 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                All Basic Features
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                Premium Classes
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                Personal Trainer
                            </li>
                        </ul>
                        <form action="{{ route('payment.form') }}" method="GET">
                            <input type="hidden" name="plan" value="middle_class">
                            <button class="w-full py-4 bg-yellow-500 text-black font-semibold rounded-xl hover:bg-yellow-400 transition-colors duration-300">
                                Get Started
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Annual Plan -->
                <div class="group">
                    <div class="relative bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <div class="absolute -top-4 -left-4 w-20 h-20 bg-yellow-500 rounded-full opacity-20 group-hover:scale-150 transition-all duration-500"></div>
                        <h3 class="text-2xl font-bold text-white mb-4">Annual Plan</h3>
                        <div class="text-4xl font-bold text-yellow-500 mb-6">
                            Rp1000k
                            <span class="text-lg font-normal text-gray-400">/year</span>
                        </div>
                        <ul class="text-gray-300 space-y-3 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                All Middle Class Features
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                Exclusive VIP Areas
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                </svg>
                                Nutrition Consultation
                            </li>
                        </ul>
                        <form action="{{ route('payment.form') }}" method="GET">
                            <input type="hidden" name="plan" value="annual">
                            <button class="w-full py-4 bg-yellow-500 text-black font-semibold rounded-xl hover:bg-yellow-400 transition-colors duration-300">
                                Get Started
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection