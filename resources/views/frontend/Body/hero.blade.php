@extends('frontend.home')
@section('hero')
    <div class="min-h-screen bg-[#FAF7F6] flex flex-col items-center px-3 py-10">

        <h2 class="text-xl font-sans font-bold text-[#5E5B59]">SHOPS</h2>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($stores as $store)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('store-details', $store->id) }}">
                        <img class="p-5 object-contain mx-auto" src="{{ asset('storage/' . $store->store_image) }}"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('store-details', $store->id) }}">
                            <h5 class="mb-2 text-2xl font-sans font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $store->store_name }}</h5>
                        </a>
                        <p class="mb-3 font-sans font-normal text-gray-700 dark:text-gray-400">
                            {{ $store->store_description }}</p>
                        <a href="{{ route('store-details', $store->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium font-sans text-center text-white bg-[#BF8e43] rounded-lg hover:bg-white hover:text-[#BF8e43] hover:border-[#BF8e43] border focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        @if (auth()->check() && auth()->user()->role === 'admin')
            <div class="border-t border-gray-200"></div>
            <a href="{{ route('new-store') }}" type="button"
                class="inline-flex items-center px-4 py-3 text-sm font-medium font-sans text-center text-white bg-[#BF8e43] rounded-lg hover:bg-white hover:text-[#BF8e43] hover:border-[#BF8e43] border">Add
                Store</a>
        @endif
    </div>
@endsection
