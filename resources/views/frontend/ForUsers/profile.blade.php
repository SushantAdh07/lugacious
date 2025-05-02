@extends('frontend.home')
@section('hero')
<div class="bg-[#FAF7F6] dark:bg-gray-900 min-h-screen">
    <div class="w-full max-w-4xl mx-auto px-4 sm:px-6 py-8">
        <!-- Header with Back Button -->
        <div class="flex items-center mb-8">
            <a href="{{ route('home') }}" class="p-2 rounded-full hover:bg-[#BF8e43]/10 transition-all duration-300">
                <svg class="w-6 h-6 text-[#BF8e43]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </a>
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white ml-4">My Profile</h1>
        </div>

        <!-- Profile Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm overflow-hidden mb-8">
            <!-- Profile Header with Gradient -->
            <div class="relative bg-gradient-to-r from-[#BF8e43]/10 to-[#BF8e43]/25 p-6">
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 rounded-full relative">
                        {!! userAvatar($user) !!}
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mt-4">{{ $user->name }}</h2>
                    
                    <!-- Verification Status -->
                    <div class="mt-2">
                        @if (Auth::user()->email_verified_at)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                Verified User
                                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                        @else
                            <a href="{{route('verification.notice')}}" class="inline-flex items-center text-[#BF8e43] hover:underline text-sm font-medium">
                                Verify Your Email
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        @endif
                    </div>
                    
                    <p class="text-[#BF8e43] font-medium mt-2">{{ $user->email }}</p>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-3 divide-x divide-gray-200 dark:divide-gray-700 bg-gray-50 dark:bg-gray-700 py-4">
                <div class="text-center">
                    <p class="text-2xl font-bold text-[#BF8e43]">{{ $user->favoriteStores->count() }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider">Favorites</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-[#BF8e43]">0</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider">Reviews</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-[#BF8e43]">0</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider">Visits</p>
                </div>
            </div>
        </div>

        <!-- Favorites Section -->
        <div class="mb-8">
            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4 flex items-center">
                <svg class="w-5 h-5 text-[#BF8e43] mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                </svg>
                Favorite Stores
            </h3>

            @if ($user->favoriteStores->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach ($user->favoriteStores as $store)
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg group">
                            <a href="{{ route('store-details', $store->id) }}" class="block">
                                <div class="relative">
                                    <img class="w-full h-48 object-cover" 
                                         src="{{ asset('storage/' . $store->store_image) }}" 
                                         alt="{{ $store->store_name }}">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4">
                                        <h4 class="text-xl font-bold text-white group-hover:text-[#BF8e43] transition-colors">
                                            {{ $store->store_name }}
                                        </h4>
                                    </div>
                                </div>
                            </a>
                            <div class="p-4">
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">
                                    {{ Str::limit($store->store_description, 90, '...') }}
                                </p>
                                <div class="flex justify-between items-center">
                                    <a href="{{ route('store-details', $store->id) }}" 
                                       class="text-[#BF8e43] text-sm font-medium hover:underline">
                                        View Details
                                    </a>
                                    <form action="{{ route('stores.toggleFavorite', $store->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" 
                                                class="text-gray-400 hover:text-red-500 dark:hover:text-red-400 transition-colors"
                                                aria-label="Remove from favorites">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white dark:bg-gray-800 rounded-xl p-8 text-center shadow-sm">
                    <svg class="w-16 h-16 mx-auto text-gray-300 dark:text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    <h4 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">No favorites yet</h4>
                    <p class="text-gray-500 dark:text-gray-400 mb-4">Start exploring and add your favorite stores</p>
                    <a href="{{ route('home') }}" 
                       class="inline-block px-6 py-2 bg-[#BF8e43] text-white rounded-lg hover:bg-amber-700 transition-colors">
                        Browse Stores
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection