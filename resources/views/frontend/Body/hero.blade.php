@php
    use Illuminate\Support\Str;
@endphp

@extends('frontend.home')
@section('hero')
    <div class="min-h-screen bg-[#FAF7F6] flex flex-col items-center px-4 py-8 sm:px-6 sm:py-10">

        <h2 class="text-lg sm:text-xl md:text-2xl font-sans font-bold text-[#BF8e43] mb-4 sm:mb-6">
            Instagram Fashion Stores
        </h2>
<!-- Search Button -->
        <div class="w-full max-w-md ml-auto py-6 px-24">
            
            <div class="relative flex items-center">
                <a href="">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </a> 
              <input 
                type="text" 
                placeholder="Search..." 
                class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all duration-200"
              >     
            </div>
          </div>
<!-- Search Button End -->
        <div class="w-full grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8 px-2 sm:px-4 md:px-6 lg:px-8 xl:px-24">
            @foreach ($stores as $store)
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 hover:shadow-md transition-shadow">
                    <a href="{{ route('store-details', $store->id) }}" class="block">
                        <div class="p-4 sm:p-5 flex justify-center">
                            <img class="object-contain w-full h-40 sm:h-48 max-w-[200px] mx-auto" 
                                 src="{{ asset('storage/' . $store->store_image) }}" 
                                 alt="{{ $store->store_name }}" />
                        </div>
                    </a>
                    <div class="p-4 sm:p-5">
                        <a href="{{ route('store-details', $store->id) }}">
                            <h5 class="mb-2 text-xl sm:text-2xl font-sans font-bold tracking-tight text-gray-900 dark:text-white hover:text-[#BF8e43] transition-colors">
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        @if (auth()->check() && auth()->user()->role === 'admin')
            <div class="w-full border-t border-gray-200 my-6 sm:my-8"></div>
            <a href="{{ route('new-store') }}" type="button"
               class="inline-flex items-center px-3 py-2 sm:px-4 sm:py-3 text-sm font-medium font-sans text-center text-white bg-[#BF8e43] rounded-lg hover:bg-white hover:text-[#BF8e43] hover:border-[#BF8e43] border transition-colors duration-200">
                Add Store
            </a>
        @endif
    </div>
@endsection