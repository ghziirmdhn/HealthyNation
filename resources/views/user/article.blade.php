@extends('layouts.app')

@section('title', 'Article')

@section('content')
<section class="py-14 bg-gray-50">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Section Heading -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Latest Articles</h2>
      <p class="mt-4 text-gray-600">          
        Stay informed with our latest tips, guides, and articles on fitness, health, and nutrition.
      </p>
    </div>

    <!-- Article List -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Article Item -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/500x300" alt="Healthy Eating">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900">
            <a href="#" class="hover:text-yellow-500 transition">5 Healthy Eating Tips for a Better You</a>
          </h3>
          <p class="mt-4 text-gray-600">
            Discover how to fuel your workouts and improve your lifestyle with these simple, effective eating tips.
          </p>
        </div>
      </div>
      <!-- Article Item -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/500x300" alt="Cardio Workouts">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900">
            <a href="#" class="hover:text-yellow-500 transition">The Benefits of Cardio Workouts</a>
          </h3>
          <p class="mt-4 text-gray-600">
            Learn how cardio can help you stay fit, improve heart health, and keep your energy levels high.
          </p>
        </div>
      </div>
      <!-- Article Item -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/500x300" alt="Stress Relief">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900">
            <a href="#" class="hover:text-yellow-500 transition">Top Exercises for Stress Relief</a>
          </h3>
          <p class="mt-4 text-gray-600">
            Find out which exercises can help you unwind and maintain a healthy mind-body balance.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
