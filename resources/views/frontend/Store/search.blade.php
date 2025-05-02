@php
    use Illuminate\Support\Str;
@endphp

@extends('frontend.home')
@section('hero')
<div class="min-h-screen bg-[#BF8e43] relative overflow-hidden">
    

    <!-- Content Container -->
    <div class="relative z-10 container mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <!-- Glass Header Panel -->
        <div class="bg-white/20 border border-white/10 rounded-3xl shadow-glass p-8 mb-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-[#f8d7a3]">Instagram Fashion</span>
                </h1>
                <p class="text-white max-w-2xl mx-auto">Discover the world's most exclusive fashion boutiques and emerging designers</p>
                <div class="relative inline-block mt-8 w-full max-w-2xl backdrop-blur-sm bg-white/5 rounded-full border border-white/10">
                    <form action="{{ route('search.store') }}" method="GET" class="relative">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            name="search"
                            placeholder="Search stores..." 
                            class="w-full py-4 pl-14 pr-16 bg-transparent text-white placeholder-white/70 border border-none focus:ring-1 focus:ring-[#BF8e43] focus:border-[#BF8e43] focus:outline-none transition-all duration-300"
                        >
                        <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-[#BF8e43] text-white rounded-full p-2 hover:bg-[#d9a95b] transition-colors shadow-gold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        

        <!-- Glass Store Cards Grid -->
        @if ($results->count() > 0)
        <div class="">
            <h1 class="relative p-4 text-lg text-white font-md">Search Results:</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach ($results as $store)
            <div class="group relative backdrop-blur-md bg-white/20 border border-white/10 rounded-2xl overflow-hidden transition-all duration-500 hover:bg-white/10 hover:border-[#BF8e43]/30 hover:shadow-glass-lg">
                <!-- Store Image with Glass Overlay -->
                <div class="relative h-72 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/50 z-10"></div>
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                         src="{{ asset('storage/' . $store->store_image) }}" 
                         alt="{{ $store->store_name }}">
                    <!-- Glass Info Panel -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 backdrop-blur-sm z-20">
                        <h3 class="text-xl font-bold text-white group-hover:text-[#BF8e43] transition-colors">
                            {{ $store->store_name }}
                        </h3>
                        <div class="flex items-center mt-2">
                            <div class="flex text-[#BF8e43]">
                                ★ ★ ★ ★ ★
                            </div>
                            <span class="text-sm text-white/80 ml-2"></span>
                        </div>
                    </div>
                    <!-- Favorite Button 
                    <div class="absolute top-5 right-5 z-20">
                        <button class="p-2.5 backdrop-blur-sm bg-black/50 rounded-full text-white hover:text-[#BF8e43] transition-colors border border-white/10 hover:border-[#BF8e43] shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div> -->
                </div>

                <!-- Store Details -->
                <div class="p-4">
                    <p class="text-gray-200 mb-5 line-clamp-2 min-h-[3rem] text-md">
                        {{ Str::limit($store->store_description, 75, '...') }}
                    </p>
                    
                        <a href="{{ route('store-details', $store->id) }}"
                           class="inline-flex items-center px-5 py-2 bg-white text-[#BF8e43] rounded-lg hover:bg-transparent hover:text-white border hover:border-white transition-colors font-medium group shadow-gold">
                            View Store
                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        
            <h1 class="relative p-4 text-lg text-white font-md">Oops! No stores found...</h1>
        
        @endif
    </div>
</div>

@endsection
