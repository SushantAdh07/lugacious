@php
    use Illuminate\Support\Str;
@endphp

@extends('frontend.home')
@section('hero')
<div class="container mx-auto px-4 py-12 relative z-10">
    <!-- Premium Header -->
    <div class="flex flex-col items-center mb-16">
        <div class="relative mb-8">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-4">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#BF8e43] to-[#f8d7a3]">Instagram Fashion</span>
            </h1>
            <p class="text-center text-white/80 max-w-2xl mx-auto">Discover the world's most exclusive fashion boutiques and emerging designers</p>
            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-32 h-1 bg-gradient-to-r from-transparent via-[#BF8e43] to-transparent"></div>
        </div>
        
        <!-- Luxury Search -->
        <div class="w-full max-w-2xl relative">
            <form action="{{ route('search.store') }}" method="GET" class="relative">
                <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-[#BF8e43]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input 
                    type="text" 
                    name="search"
                    placeholder="Search designer stores..." 
                    class="w-full py-4 pl-14 pr-6 bg-gray-800/50 text-white placeholder-white/50 border border-gray-700 rounded-full focus:ring-2 focus:ring-[#BF8e43] focus:border-[#BF8e43] focus:outline-none transition-all duration-300 backdrop-blur-sm hover:border-gray-600"
                >
                <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#BF8e43] text-white rounded-full p-2 hover:bg-[#d9a95b] transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <!-- Fashion Stores Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach ($stores as $store)
        <div class="group relative bg-gray-800 rounded-2xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 border border-gray-700 hover:border-[#BF8e43]/50">
            <!-- Store Image with Glow Effect -->
            <div class="relative overflow-hidden h-72">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/50 z-10"></div>
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                     src="{{ asset('storage/' . $store->store_image) }}" 
                     alt="{{ $store->store_name }}">
                <div class="absolute bottom-0 left-0 p-6 w-full z-20">
                    <h3 class="text-xl font-bold text-white group-hover:text-[#BF8e43] transition-colors">
                        {{ $store->store_name }}
                    </h3>
                    <div class="flex items-center mt-2">
                        <div class="flex text-[#BF8e43]">
                            ★ ★ ★ ★ ★
                        </div>
                        <span class="text-sm text-white/80 ml-2">(42)</span>
                    </div>
                </div>
                <div class="absolute top-5 right-5 z-20">
                    <button class="p-2.5 bg-gray-900/80 backdrop-blur-sm rounded-full text-white hover:text-[#BF8e43] transition-colors border border-gray-700 hover:border-[#BF8e43]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Store Info -->
            <div class="p-6">
                <p class="text-gray-400 mb-5 line-clamp-2 min-h-[3rem]">
                    {{ $store->store_description }}
                </p>
                <div class="flex justify-between items-center">
                    <a href="{{ route('store-details', $store->id) }}"
                       class="inline-flex items-center px-5 py-2.5 bg-[#BF8e43] text-white rounded-lg hover:bg-[#d9a95b] transition-colors font-medium group">
                        View Collection
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                    <span class="text-xs text-gray-500">NEW COLLECTION</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Admin Add Store Button -->
    @if (auth()->check() && auth()->user()->role === 'admin')
    <div class="mt-16 text-center">
        <a href="{{ route('new-store') }}" 
           class="inline-flex items-center px-8 py-4 bg-[#BF8e43] text-white font-medium rounded-full hover:bg-[#d9a95b] transition-colors group relative overflow-hidden">
            <span class="relative z-10 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add New Store
            </span>
            <span class="absolute inset-0 bg-white/10 group-hover:bg-white/5 backdrop-blur-sm transition-all duration-300"></span>
        </a>
    </div>
    @endif
</div>
@endsection