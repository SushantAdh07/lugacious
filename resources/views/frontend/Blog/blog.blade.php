@extends('frontend.home')
@section('hero')
    <div class="block mt-3 p-4">
        <div>
            @auth
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('create-blog') }}"
                        class="bg-[#BF8E43] font-bold rounded-lg text-white px-6 py-3 text-sm">Create Blog</a>
                @endif
            @endauth
        </div>
        <h1 class="mt-2">Blog Content</h1>
        <h2>Top Nepalese Fashion Brands</h2>
        <p>I was roaming around Internet sometimes Instagram, sometimes binge surfing I came across couple of Nepalese
            brand
            who
            sells good and authentic product.</p>
        <img src="" alt="">
    </div>
@endsection
