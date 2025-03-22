@extends('frontend.home')
@section('hero')
    <div class="min-h-screen bg-[#FAF7F6] flex flex-col items-center px-3 py-10">

        <h2 class="text-xl font-body text-[#5E5B59]">SHOPS</h2>


        <!-- Shops Grid -->
        <div class="w-full max-w-6xl mt-8 mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-24 gap-y-16">

                @foreach ($stores as $store)
                    <div class="flex flex-col items-center">
                        <!-- Card -->
                        <div class="bg-white rounded-lg shadow-sm w-full py-3 flex flex-col items-center">
                            <!-- Image Container -->
                            <div class="w-48 h-48 rounded-lg flex items-center justify-center overflow-hidden">
                                <!-- Image -->
                                <img src="{{ $store->store_image }}" alt="Store Image" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <!-- Name -->
                        <p class="mt-4 text-lg font-bayon text-[#5E5B59] text-center">
                            {{ $store->store_name }}</p>
                        <button class="bg-[#BF8E43] font-bold rounded-lg text-white px-6 py-3 text-sm">Add to
                            Favorites</button>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
