@extends('frontend.home')
@section('title', $store->store_name . ' - Lugacious')
@section('hero')
<div class="bg-[#FAF7F6] dark:bg-gray-900 min-h-screen py-8">
    <div class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full flex flex-col items-center pt-4 pb-6 relative">
            <a href="{{ url()->previous() }}" class="absolute left-4 top-4 flex items-center text-[#BF8E43] hover:text-amber-700 mb-6 transition-colors duration-300">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back
        </a>
            
            <div class="w-32 h-32 sm:w-48 sm:h-48 rounded-full overflow-hidden border-4 border-white shadow-lg shadow-[#E3E1E0]/50 dark:shadow-gray-800/50">
                <img src="{{ asset('storage/' . $store->store_image) }}" alt="{{ $store->store_name }}" class="w-full h-full object-cover">
            </div>
            
            <h1 class="mt-4 text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white text-center">{{ $store->store_name }}</h1>
            <p class="mt-2 text-sm sm:text-base text-[#BF8e43] font-medium">{{ match($store->store_category) {
                'Unisex' => 'Men and Women', 
                'Male' => 'Men',
                default => $store->store_category
            } }}</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 sm:p-8 mb-8">
            <div class="space-y-4">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">About This Store</h2>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">{{ $store->store_description }}</p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-gray-100 dark:border-gray-700">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-[#BF8e43] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300"><span class="font-medium">Followers:</span> {{ number_format($store->store_followers) }}+</span>
                    </div>
                    
                    @if($store->store_insta)
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-[#BF8e43] mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        <a href="{{ $store->store_insta }}" target="_blank" class="text-[#BF8e43] hover:underline">View Instagram</a>
                    </div>
                    @endif
                </div>
            </div>

            <div class="mt-8 flex flex-wrap gap-4">
                @if (Auth::check() && Auth::user()->role === 'admin')
                    <a href="{{ route('edit-store', $store->id) }}" class="px-6 py-3 bg-[#BF8e43] text-white font-medium rounded-lg hover:bg-amber-700 transition-colors duration-300 shadow-md">
                        Edit Store
                    </a>
                    <a href="{{ route('delete-store', $store->id) }}" class="px-6 py-3 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition-colors duration-300 shadow-md">
                        Delete Store
                    </a>
                @endif
                
                @auth
                <form method="POST" action="{{ route('stores.toggleFavorite', $store->id) }}" class="flex">
                    @csrf
                    <button class="px-5 py-2.5 flex items-center gap-2 bg-white text-[#BF8e43] border border-[#BF8e43] rounded-lg hover:bg-[#BF8e43]/10 transition-colors font-medium shadow-sm" type="submit">
                        <svg class="w-5 h-5" fill="{{ auth()->user()->favoriteStores->contains($store->id) ? '#BF8e43' : 'none' }}" stroke="#BF8e43" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        {{ auth()->user()->favoriteStores->contains($store->id) ? 'Saved' : 'Save to Favorites' }}
                    </button>
                </form>
                @else
                <a href="{{route('login')}}" class="px-5 py-2.5 flex items-center gap-2 bg-white text-[#BF8e43] border border-[#BF8e43] rounded-lg hover:bg-[#BF8e43]/10 transition-colors font-medium shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="#BF8e43" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    Save to Favorites
                </a>
                @endauth
            </div>

            @if (Auth::check() && Auth::user()->role === 'admin')
                <div class="mt-6 text-sm text-gray-500 dark:text-gray-400">
                    <span class="font-medium">Views:</span> {{ number_format($store->view_count) }}
                </div>
            @endif
        </div>

        <div class="relative w-full bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
            <div id="insta-placeholder" class="w-full aspect-square bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
                <div class="text-center p-6">
                    <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <p class="mt-3 text-gray-500 dark:text-gray-400">Loading Instagram content...</p>
                </div>
            </div>
            
            <div id="insta-embed" class="opacity-0 aspect-square w-full transition-opacity duration-300">
                <blockquote class="instagram-media" 
                          data-instgrm-permalink="{{ $store->store_insta }}"
                          data-instgrm-version="14"
                          style="width:100%; min-height:100%; border:none;"></blockquote>
            </div>
        </div>
    </div>
</div>

<script>


document.addEventListener('DOMContentLoaded', () => {
    const placeholder = document.getElementById('insta-placeholder');
    const embed = document.getElementById('insta-embed');
    
    const script = document.createElement('script');
    script.src = '//www.instagram.com/embed.js';
    script.async = true;
    
    script.onload = () => {
        setTimeout(() => {
            placeholder.remove(); 
            embed.classList.remove('opacity-0');
            
            if (window.instgrm) {
                instgrm.Embeds.process(); 
            }
        }, 500);
    };
    
    document.body.appendChild(script);
});
</script>
@endsection