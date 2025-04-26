@extends('frontend.home')
@section('hero')
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
    <div class="w-full max-w-4xl mx-auto px-4 sm:px-6 py-8">
        <!-- Back Button & Profile Header -->
        <div class="flex items-center mb-8">
            <a href="{{ route('home') }}" class="p-2 rounded-full hover:bg-[#BF8e43]/10 transition-all duration-300">
                <svg class="w-6 h-6 text-[#BF8e43]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h1 class="text-2xl font-bold text-gray-800 ml-4">My Profile</h1>
        </div>

        <!-- Profile Card -->
        <div class="bg-white rounded-2xl">
            <!-- Profile Header with Avatar -->
            <div class="relative bg-gradient-to-r from-[#BF8e43]/10 to-[#BF8e43]/25 p-6">
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 rounded-full relative">
                        {!! userAvatar($user) !!}
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
                    <p class="text-[#BF8e43] font-medium">{{ $user->email }}</p>
                </div>
            </div>

            <!-- Stats Bar -->
            <div class="grid grid-cols-3 divide-x divide-gray-200 bg-gray-50 py-4">
                <div class="text-center">
                    <p class="text-2xl font-bold text-[#BF8e43]">{{ $user->favoriteStores->count() }}</p>
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Favorites</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-[#BF8e43]">0</p>
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Reviews</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-[#BF8e43]">0</p>
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Visits</p>
                </div>
            </div>
        </div>

        <!-- Favorites Section -->
        <div class="mb-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <svg class="w-5 h-5 text-[#BF8e43] mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                </svg>
                Favorite Stores
            </h3>

            @if ($user->favoriteStores->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach ($user->favoriteStores as $store)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg group">
                        <a href="{{ route('store-details', $store->id) }}" class="block">
                            <div class="relative">
                                <img class="w-full h-48 object-cover" 
                                     src="{{ asset('storage/' . $store->store_image) }}" 
                                     alt="{{ $store->store_name }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-4 left-4">
                                    <h4 class="text-xl font-bold text-white group-hover:text-[#BF8e43] transition-colors">{{ $store->store_name }}</h4>
                                </div>
                            </div>
                        </a>
                        <div class="p-4">
                            <p class="text-gray-600 text-sm mb-3">{{ Str::limit($store->store_description, 90, '...') }}</p>
                            <div class="flex justify-between items-center">
                                <a href="{{ route('store-details', $store->id) }}" 
                                   class="text-[#BF8e43] text-sm font-medium hover:underline">
                                    View Details
                                </a>
                                <button class="text-red-400 hover:text-red-600 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-xl p-8 text-center shadow-sm">
                    <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <h4 class="text-lg font-medium text-gray-700 mb-2">No favorites yet</h4>
                    <p class="text-gray-500 mb-4">Start exploring and add your favorite stores</p>
                    <a href="{{ route('home') }}" class="inline-block px-6 py-2 bg-[#BF8e43] text-white rounded-lg hover:bg-[#BF8e43]/90 transition-colors">
                        Browse Stores
                    </a>
                </div>
            @endif
        </div>

        <!-- Recent Activity Section 
        <div class="mb-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <svg class="w-5 h-5 text-[#BF8e43] mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
                Recent Activity
            </h3>
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="text-center text-gray-500">
                    <p>No recent activity yet</p>
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection