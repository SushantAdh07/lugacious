@extends('frontend.home')
@section('hero')
    <div class="w-full max-w-6xl mx-auto">
        <div class="w-full flex justify-center pt-8 pb-4 relative">
            <a href="{{ route('home') }}" class="absolute left-0 text-[#BF8e43] hover:text-gray-800 transition duration-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
            </a>
            <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-lg">
                <img src="" alt="Store Image" class="w-full h-full object-cover">
            </div>
        </div>


        <div class="border-t border-gray-200 mx-8"></div>


        <div class="p-6">
            <div class="space-y-4 justify-center">

                <p class="text-gray-600">{{ $store->store_description }}</p>
            </div>
            <div class="space-y-4 mt-2">
                <p class="text-gray-600"><span class="font-semibold">Store Name:</span> {{ $store->store_name }}</p>
                <p class="text-gray-600"><span class="font-semibold">Category:</span> {{ $store->store_category }}</p>
                <p class="text-gray-600"><span class="font-semibold">Instagram Followers:</span>
                    {{ $store->store_followers }}</p>
                <button
                    class="bg-[#BF8e43] font-bold rounded-lg text-white px-6 py-3 text-sm hover:bg-white hover:text-[#BF8e43] hover:border-[#1915014a] border">Add
                    to
                    Favorites</button>
            </div>
            <a class="bg-black" href="{{ route('delete-store', $store->id) }}">Delete</a>



        </div>
    </div>
@endsection
