@extends('layouts.app')

@section('title', 'Membership')

@section('content')
<section class="py-14">
    <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
      <!-- Heading Section -->
      <div class="relative max-w-xl mx-auto sm:text-center">
        <h3 class=" text-yellow-500 text-3xl font-semibold sm:text-4xl">Pricing for all sizes</h3>
        <div class=" text-yellow-500 mt-3 max-w-xl">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur consequat nunc.</p>
        </div>
      </div>
  
      <!-- Pricing Plans -->
      <div class="mt-16 justify-center gap-6 sm:grid sm:grid-cols-2 sm:space-y-0 lg:grid-cols-3">
        <!-- Plan 1: Basic Plan -->
        <div class="relative flex-1 flex items-stretch flex-col rounded-xl border-2 border-yellow-400 bg-white mt-6 sm:mt-0">
          <div class="p-8 space-y-4 border-b">
            <span class="text-yellow-500 font-medium">Basic plan</span>
            <div class="text-gray-800 text-3xl font-semibold">
              $12 <span class="text-xl text-gray-600 font-normal">/mo</span>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="px-3 py-3 rounded-lg w-full font-semibold text-sm duration-150 text-white bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">
              Get Started
            </button>
          </div>
          <ul class="p-8 space-y-3">
            <li class="pb-2 text-gray-800 font-medium">
              <p>Features</p>
            </li>
            <li class="flex items-center gap-5">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Curabitur faucibus</span>
            </li>
          </ul>
        </div>
  
        <!-- Plan 2: Startup -->
        <div class="relative flex-1 flex items-stretch flex-col rounded-xl border-2 border-yellow-400 bg-white mt-6 sm:mt-0">
          <div class="w-32 absolute -top-5 left-0 right-0 mx-auto px-3 py-2 rounded-full border shadow-md bg-white text-center text-gray-700 text-sm font-semibold">
            Most popular
          </div>
          <div class="p-8 space-y-4 border-b">
            <span class="text-yellow-500 font-medium">Startup</span>
            <div class="text-gray-800 text-3xl font-semibold">
              $35 <span class="text-xl text-gray-600 font-normal">/mo</span>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="px-3 py-3 rounded-lg w-full font-semibold text-sm duration-150 text-white bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">
              Get Started
            </button>
          </div>
          <ul class="p-8 space-y-3">
            <li class="pb-2 text-gray-800 font-medium">
              <p>Features</p>
            </li>
            <li class="flex items-center gap-5">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Curabitur faucibus</span>
            </li>
          </ul>
        </div>
  
        <!-- Plan 3: Enterprise -->
        <div class="relative flex-1 flex items-stretch flex-col rounded-xl border-2 border-yellow-400 bg-white mt-6 sm:mt-0">
          <div class="p-8 space-y-4 border-b">
            <span class="text-yellow-500 font-medium">Enterprise</span>
            <div class="text-gray-800 text-3xl font-semibold">
              $60 <span class="text-xl text-gray-600 font-normal">/mo</span>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="px-3 py-3 rounded-lg w-full font-semibold text-sm duration-150 text-white bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">
              Get Started
            </button>
          </div>
          <ul class="p-8 space-y-3">
            <li class="pb-2 text-gray-800 font-medium">
              <p>Features</p>
            </li>
            <li class="flex items-center gap-5">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Curabitur faucibus</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  
@endsection