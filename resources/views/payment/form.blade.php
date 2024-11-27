@extends('layouts.app')

@section('content')
<div class="min-h-screen py-20" style="background: linear-gradient(to bottom right, #000000, #1a1a1a)">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 shadow-2xl border border-white/20">
            <h1 class="text-4xl font-bold text-white mb-8">Complete Your Purchase</h1>
            
            <form action="{{ route('payment.process') }}" method="POST">
                @csrf
                <input type="hidden" name="plan" value="{{ $plan }}">
                <input type="hidden" name="amount" value="{{ $amount }}">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <label for="first_name" class="block text-sm font-medium text-gray-200">First Name</label>
                        <input type="text" name="first_name" id="first_name" 
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
                            required>
                    </div>

                    <div class="space-y-4">
                        <label for="last_name" class="block text-sm font-medium text-gray-200">Last Name</label>
                        <input type="text" name="last_name" id="last_name" 
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
                            required>
                    </div>
                </div>

                <div class="mt-6 space-y-4">
                    <label for="email" class="block text-sm font-medium text-gray-200">Email Address</label>
                    <input type="email" name="email" id="email" 
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
                        required>
                </div>

                <div class="mt-6 space-y-4">
                    <label for="location" class="block text-sm font-medium text-gray-200">Location</label>
                    <input type="text" name="location" id="location" 
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
                        required>
                </div>

                <div class="mt-6 space-y-4">
                    <label for="method" class="block text-sm font-medium text-gray-200">Payment Method</label>
                    <select name="method" id="method" 
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
                        required>
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                        <option value="apple_pay">Apple Pay</option>
                    </select>
                </div>

                <div class="mt-8 p-6 bg-white/5 rounded-xl border border-white/10">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-200">Total Amount</span>
                        <span class="text-2xl font-bold text-yellow-500">Rp {{ number_format($amount) }}</span>
                    </div>
                </div>

                <button type="submit" 
                    class="mt-8 w-full bg-yellow-500 text-black font-bold py-4 px-6 rounded-xl hover:bg-yellow-400 transition-colors duration-300">
                    Complete Payment
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
