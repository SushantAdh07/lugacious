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
            <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-md shadow-[#E3E1E0]">
                <img src="" alt="Your Image" class="w-full h-full object-cover">
            </div>
        </div>


        <div class="border-t border-gray-200 mx-8"></div>


        <div class="p-6">
            <div class="space-y-4 justify-center">

                <p class="text-gray-600"></p>
            </div>
            <div class="space-y-4 mt-2">
                <p class="text-gray-600"><span class="font-semibold">Name:</span>{{ $user->name }}</p>
                <p class="text-gray-600"><span class="font-semibold">Email:</span>{{ $user->email }}</p>
                @if ($user->favoriteStores->count() > 0)
                    @foreach ($user->favoriteStores as $store)
                        <div
                            class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 hover:shadow-md transition-shadow">
                            <a href="{{ route('store-details', $store->id) }}" class="block">
                                <div class="p-4 sm:p-5 flex justify-center">
                                    <img class="object-contain w-full h-40 sm:h-48 max-w-[200px] mx-auto"
                                        src="{{ asset('storage/' . $store->store_image) }}"
                                        alt="{{ $store->store_name }}" />
                                </div>
                            </a>
                            <div class="p-4 sm:p-5">
                                <a href="{{ route('store-details', $store->id) }}">
                                    <h5
                                        class="mb-2 text-xl sm:text-2xl font-sans font-bold tracking-tight text-gray-900 dark:text-white hover:text-[#BF8e43] transition-colors">
                                        {{ $store->store_name }}
                                    </h5>
                                </a>
                                <p class="mb-3 font-sans text-sm sm:text-base text-gray-700 dark:text-gray-400">
                                    {{ Str::limit($store->store_description, 75, '...') }}
                                </p>
                                <a href="{{ route('store-details', $store->id) }}"
                                    class="inline-flex items-center px-3 py-2 text-xs sm:text-sm font-medium font-sans text-center text-white bg-[#BF8e43] rounded-lg hover:bg-white hover:text-[#BF8e43] hover:border-[#BF8e43] border transition-colors duration-200">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3 h-3 sm:w-3.5 sm:h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
