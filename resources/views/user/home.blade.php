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
<div
  x-data="{ faqsList: [
  {
      q: 'What are some random questions to ask?',
      a: 'That\'s exactly the reason we created this random question generator. There are hundreds of random questions to choose from so you\'re able to find the perfect random question.',
      href: 'javascript:void(0)'
  },
  {
      q: 'Do you include common questions?',
      a: 'This generator doesn\'t include most common questions. The thought is that you can come up with common questions on your own so most of the questions in this generator.',
      href: 'javascript:void(0)'
  },
  {
      q: 'Can I use this for 21 questions?',
      a: 'Yes! there are two ways that you can use this question generator depending on what you\'re after. You can indicate that you want 21 questions generated.',
      href: 'javascript:void(0)'
  },
  {
      q: 'Are these questions for girls or for boys?',
      a: 'The questions in this generator are gender neutral and can be used to ask either male or females (or any other gender the person identifies with).',
      href: 'javascript:void(0)'
  },
  {
      q: 'What do you wish you had more talent doing?',
      a: 'If you\'ve been searching for a way to get random questions, you\'ve landed on the correct webpage. We created the Random Question Generator to ask you as many random questions as your heart desires.',
      href: 'javascript:void(0)'
  }
] }"
>
  <section class="relative min-h-screen w-full rounded-lg py-14">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
      <div class="space-y-5 sm:text-center sm:max-w-md sm:mx-auto">
        <h3 class="text-white text-3xl font-extrabold sm:text-4xl">
          How can we help?
        </h3>
        <p class="text-white">
          Everything you need to know about the product. Can’t find the
          answer you’re looking for? feel free to
          <a
            class="text-indigo-600 font-semibold whitespace-nowrap"
            href="javascript:void(0)"
          >
            contact us </a
          >.
        </p>
        <form @submit.prevent="" class="mx-auto sm:max-w-xs">
          <div class="relative">
            <svg
              class="w-6 h-6 text-white absolute left-3 inset-y-0 my-auto"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fillRule="evenodd"
                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                clip-rule="evenodd"
              />
            </svg>
            <input
              type="text"
              placeholder="Enter your email"
              class="w-full pl-12 pr-3 py-2 text-white bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg"
            />
          </div>
        </form>
      </div>
      <div class="mt-12">
        <ul
          class="space-y-8 gap-12 grid-cols-2 sm:grid sm:space-y-0 lg:grid-cols-3"
        >
          <template x-for="(item, index) in faqsList" :key="index">
            <li class="space-y-3">
              <summary
                class="flex items-center justify-between font-semibold text-white"
                x-text="item.q"
              ></summary>
              <p class="text-white leading-relaxed" x-html="item.a"></p>
              <a
                :href="item.href"
                class="flex items-center gap-x-1 text-sm text-indigo-600 hover:text-indigo-400 duration-150 font-medium"
              >
                Read more
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                  />
                </svg>
              </a>
            </li>
          </template>
        </ul>
      </div>
    </div>
  </section>
</div>
@endsection
