@extends('layouts.app')

@section('title', 'Facilities')

@section('content')
<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-4xl py-32 sm:py-48 lg:py-56">
        <div class="text-center">
            <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                Explore Our Facilities
            </h1>
            <p class="mt-8 text-lg font-medium text-gray-500 sm:text-xl/8">
                We provide a variety of facilities to ensure your comfort and convenience. Explore our services designed to support your needs.
            </p>
        </div>

        <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Facility 1 -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md">
                <h2 class="text-lg font-semibold text-gray-900">High-Speed Internet</h2>
                <p class="mt-4 text-sm text-gray-500">
                    Stay connected with our high-speed Wi-Fi available in all areas.
                </p>
            </div>

            <!-- Facility 2 -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md">
                <h2 class="text-lg font-semibold text-gray-900">Study Rooms</h2>
                <p class="mt-4 text-sm text-gray-500">
                    Private study rooms equipped with modern amenities for a productive environment.
                </p>
            </div>

            <!-- Facility 3 -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md">
                <h2 class="text-lg font-semibold text-gray-900">Library Access</h2>
                <p class="mt-4 text-sm text-gray-500">
                    Access a wide range of books, journals, and digital resources in our library.
                </p>
            </div>

            <!-- Facility 4 -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md">
                <h2 class="text-lg font-semibold text-gray-900">Cafeteria</h2>
                <p class="mt-4 text-sm text-gray-500">
                    Enjoy a variety of meals and beverages at our on-site cafeteria.
                </p>
            </div>

            <!-- Facility 5 -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md">
                <h2 class="text-lg font-semibold text-gray-900">Gym Facilities</h2>
                <p class="mt-4 text-sm text-gray-500">
                    Stay fit and healthy with our state-of-the-art gym equipment.
                </p>
            </div>

            <!-- Facility 6 -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md">
                <h2 class="text-lg font-semibold text-gray-900">Event Spaces</h2>
                <p class="mt-4 text-sm text-gray-500">
                    Host workshops, meetings, or gatherings in our multipurpose event spaces.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
