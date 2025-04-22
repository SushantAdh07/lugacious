@extends('frontend.home')
@section('title', $store->store_name . ' - Lugacious')
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
                <img src="{{ asset('storage/' . $store->store_image) }}" alt="Store Image"
                    class="w-full h-full object-cover">
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
                    {{ $store->store_followers }}+</p>
                <div class="mt-3">
                    @if (Auth::check() && Auth::user()->role === 'admin')
                        <a href="{{ route('edit-store', $store->id) }}"
                            class="bg-[#BF8e43] font-bold rounded-lg text-white px-6 py-3 text-sm hover:bg-white hover:text-[#BF8e43] hover:border-[#1915014a] border">Edit</a>

                        <a
                            class="bg-[#BF8e43] font-bold rounded-lg text-white px-6 py-3 text-sm hover:bg-white hover:text-[#BF8e43] hover:border-[#1915014a] border">Delete</a>
                    @endif
                    
                    @auth
                    <form method="POST" action="{{ route('stores.toggleFavorite', $store->id) }}">
                        @csrf
                        <button class="bg-[#BF8e43] font-bold rounded-lg text-white px-6 py-3 text-sm hover:bg-white hover:text-[#BF8e43] hover:border-[#1915014a] border" type="submit">
                            {{ auth()->user()->favoriteStores->contains($store->id) ? 'Unfavorite' : 'Add to Favorites' }}
                        </button>
                    </form>
                    @else
                    <a href="{{route('login')}}" class="bg-[#BF8e43] font-bold rounded-lg text-white px-6 py-3 text-sm hover:bg-white hover:text-[#BF8e43] hover:border-[#1915014a] border">Add to Favorites</a>
                    @endauth

                </div>
                @if (Auth::check() && Auth::user()->role === 'admin')
                    <h1>Views: {{ $store->view_count }}</h1>
                @endif
                <hr>

                <div class="relative w-full max-w-[800px] mx-auto">
                    <div id="insta-placeholder" class="bg-gray-200 aspect-square flex items-center justify-center min-h-[300px]">
                      <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                      </svg>
                    </div>
                  
                    <div id="insta-embed" class="opacity-0 aspect-square w-full transition-opacity duration-100">
                      <blockquote class="instagram-media" 
                                data-instgrm-permalink="{{ $store->store_insta }}"
                                data-instgrm-version="14"
                                style="width:100%; min-height:100%; border:none;"></blockquote>
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
                      placeholder.remove(); 
                      embed.classList.remove('opacity-0');
                      
                      if (window.instgrm) {
                        instgrm.Embeds.process(); 
                      }
                    };
                    
                    document.body.appendChild(script);
                  });
                  </script>
            </div>
        </div>
    </div>
    
@endsection
