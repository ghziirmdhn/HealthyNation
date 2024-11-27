@extends('layouts.app')

@section('content')
<div class="min-h-screen py-20" style="background: linear-gradient(to bottom right, #000000, #1a1a1a)">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 shadow-2xl border border-white/20">
            <div class="bg-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>

            <h1 class="text-3xl font-bold text-white text-center mb-2">Payment Successful!</h1>
            <p class="text-gray-400 text-center mb-8">Thank you for your purchase. Here's your receipt.</p>

            <div class="space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/5 p-4 rounded-xl">
                        <p class="text-sm text-gray-400">Name</p>
                        <p class="text-white font-medium">{{ $payment->first_name }} {{ $payment->last_name }}</p>
                    </div>
                    <div class="bg-white/5 p-4 rounded-xl">
                        <p class="text-sm text-gray-400">Email</p>
                        <p class="text-white font-medium">{{ $payment->email }}</p>
                    </div>
                </div>

                <div class="bg-white/5 p-4 rounded-xl">
                    <p class="text-sm text-gray-400">Location</p>
                    <p class="text-white font-medium">{{ $payment->location }}</p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/5 p-4 rounded-xl">
                        <p class="text-sm text-gray-400">Payment Method</p>
                        <p class="text-white font-medium">{{ ucfirst($payment->method) }}</p>
                    </div>
                    <div class="bg-white/5 p-4 rounded-xl">
                        <p class="text-sm text-gray-400">Plan</p>
                        <p class="text-white font-medium">{{ ucfirst($payment->plan) }}</p>
                    </div>
                </div>

                <div class="bg-white/5 p-6 rounded-xl">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400">Total Amount</span>
                        <span class="text-2xl font-bold text-yellow-500">Rp{{ number_format($payment->amount, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <a href="{{ route('membership') }}" 
                    class="bg-white/5 text-white font-medium py-3 px-6 rounded-xl hover:bg-white/10 transition-colors duration-300">
                    Back to Membership
                </a>
            </div>
        </div>
    </div>
</div>
@endsection