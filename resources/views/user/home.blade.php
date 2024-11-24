@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="relative bg-yellow-400 min-h-screen w-full rounded-lg">
  {{-- Gambar latar belakang full width dengan efek smokey --}}
  <div class="relative h-screen bg-black">
    <img
      src="{{ asset('assets/Home.jpg') }}"
      alt="Background"
      class="w-full h-full object-cover"
    />
    <div class="absolute inset-0 bg-black opacity-50"></div> {{-- Efek smokey transparan hitam --}}
    {{-- Konten Utama --}}
    <div class="absolute inset-0 flex items-center justify-center text-center px-6 lg:px-12 py-16">
      <div class="max-w-5xl">
        {{-- Judul --}}
        <h1 class="text-white text-5xl lg:text-7xl font-bold leading-tight">
          REACH YOUR LIMITS AND GET TO THE NEXT LEVEL
        </h1>
        {{-- Deskripsi --}}
        <p class="text-white text-lg lg:text-2xl mt-6 leading-relaxed">
          Norem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, 
          ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
        </p>
        {{-- Tombol --}}
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-6">
          <button class="px-8 py-4 border-2 border-white text-white font-bold text-lg rounded-md hover:bg-white hover:text-black transition">
            LEARN MORE
          </button>
          <button class="px-8 py-4 bg-pink-600 text-white font-bold text-lg rounded-md hover:bg-pink-700 transition">
            JOIN NOW
          </button>
        </div>
      </div>
    </div>
  </div>

  {{-- Pemisah antara gambar latar belakang dan bagian bawah --}}
  <div class="relative bg-black h-16 overflow-hidden">
    <div class="absolute flex items-center h-full animate-marquee">
      <span class="text-white text-2xl font-bold mx-4 uppercase tracking-wider">Why Choose Us</span>
      <span class="text-white text-2xl font-bold mx-4 uppercase tracking-wider">Why Choose Us</span>
      <span class="text-white text-2xl font-bold mx-4 uppercase tracking-wider">Why Choose Us</span>
      <span class="text-white text-2xl font-bold mx-4 uppercase tracking-wider">Why Choose Us</span>
      <span class="text-white text-2xl font-bold mx-4 uppercase tracking-wider">Why Choose Us</span>
    </div>
  </div>

  {{-- Bagian bawah dengan konten grid --}}
  <div class="py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 md:grid-cols-3 gap-8">
      {{-- Kolom 1 --}}
      <div class="flex flex-col items-center">
        <img
          src="{{ asset('assets/Home(Bottom1).jpg') }}"
          alt="Rectangle"
          class="w-100 h-100 rounded-lg mb-4 object-cover"
        />
        <h3 class="text-black text-xl font-bold mb-2">Title 1</h3>
        <p class="text-gray-700 text-center">
          Dorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.
        </p>
      </div>
      {{-- Kolom 2 --}}
      <div class="flex flex-col items-center">
        <img
          src="{{ asset('assets/Home(Bottom2).jpg') }}"
          alt="Rectangle"
          class="w-100 h-100 rounded-lg mb-4 object-cover"
        />
        <h3 class="text-black text-xl font-bold mb-2">Title 2</h3>
        <p class="text-gray-700 text-center">
          Dorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.
        </p>
      </div>
      {{-- Kolom 3 --}}
      <div class="flex flex-col items-center">
        <img
          src="{{ asset('assets/Home(Bottom3).jpg') }}"
          alt="Rectangle"
          class="w-100 h-100 rounded-lg mb-4 object-cover"
        />
        <h3 class="text-black text-xl font-bold mb-2">Title 3</h3>
        <p class="text-gray-700 text-center">
          Dorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
