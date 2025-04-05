@extends('frontend.home')
@section('hero')
    <div class="min-h-screen bg-[#FAF7F6] flex flex-col items-center px-3 py-10">

        <h2 class="text-xl font-body text-[#5E5B59]">SHOPS</h2>

        <div class="w-full max-w-6xl mt-8 mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-24 gap-y-16">

                @foreach ($stores as $store)
                    <div class="flex flex-col items-center">

                        <a href="{{ route('store-details', $store->id) }}">
                            <div class="bg-white rounded-lg shadow-sm w-full py-3 flex flex-col items-center">

                                <div class="w-48 h-48 rounded-lg flex items-center justify-center overflow-hidden">

                                    <img src="{{ asset('storage/app/public/images' . $store->store_image) }}"
                                        alt="Store Image" class="w-full h-full object-cover">
                                </div>
                            </div>

                            <p class="mt-4 text-lg font-bayon text-[#5E5B59] text-center">
                                {{ $store->store_name }}</p>
                            <button class="bg-[#BF8E43] font-bold rounded-lg text-white px-6 py-3 text-sm">Add
                                to
                                Favorites</button>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="border-t border-gray-200 mx-8"></div>

        <div class="mt-10">
            <a href="{{ route('new-store') }}" class="bg-dark">
                Create Your Store
            </a>
        </div>
    </div>
@endsection
