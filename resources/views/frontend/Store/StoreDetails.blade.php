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
                    <a href=""
                        class="bg-[#BF8e43] font-bold rounded-lg text-white px-6 py-3 text-sm hover:bg-white hover:text-[#BF8e43] hover:border-[#1915014a] border">Add
                        to Favorites</a>

                </div>
                @if (Auth::check() && Auth::user()->role === 'admin')
                    <h1>Views: {{ $store->view_count }}</h1>
                @endif
                <hr>
                <p>Recent Items</p>


                <div class="relative bg-gray-200 rounded-lg animate-pulse"
                    style="width: 80%; max-width: 800px; height: 600px; margin: 0 auto;">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                    </div>

                    <div class="instagram-embed-container"
                        style="width: 100%; height: 100%; overflow: hidden; display: none;">
                        <div style="width: 100%; height: 100%; overflow-y: auto;">
                            <blockquote class="instagram-media" data-instgrm-permalink="{{ $store->store_insta }}"
                                data-instgrm-version="14" style="width: 100%; min-height: 100%; border: none;"></blockquote>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const container = document.querySelector('.instagram-embed-container');
                        const placeholder = container.previousElementSibling;

                        const script = document.createElement('script');
                        script.src = '//www.instagram.com/embed.js';
                        script.async = true;

                        script.onload = function() {
                            placeholder.style.display = 'none';
                            container.style.display = 'block';

                            if (typeof instgrm !== 'undefined') {
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
