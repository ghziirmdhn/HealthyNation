@extends('layouts.app')

@section('title', 'Class')

@section('content')
<section class="py-14 bg-gray-50">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Section Heading -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Our Classes</h2>
      <p class="mt-4 text-gray-600">
        Find the perfect workout classes to match your fitness goals. From yoga to high-intensity training, we have everything to help you stay fit.
      </p>
    </div>

    <!-- Class List -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Class Item -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/500x300" alt="Yoga Class">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900">Yoga & Relaxation</h3>
          <p class="mt-4 text-gray-600">
            Improve your flexibility, strengthen your core, and relax your mind with our guided yoga sessions. Suitable for all levels.
          </p>
        </div>
      </div>
      <!-- Class Item -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/500x300" alt="HIIT Training">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900">HIIT Training</h3>
          <p class="mt-4 text-gray-600">
            High-Intensity Interval Training to boost your stamina and burn calories. Get ready to push your limits.
          </p>
        </div>
      </div>
      <!-- Class Item -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/500x300" alt="Strength Training">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900">Strength Training</h3>
          <p class="mt-4 text-gray-600">
            Build muscle, increase strength, and tone your body with our state-of-the-art strength training programs.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
