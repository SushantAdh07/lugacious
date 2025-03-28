@extends('frontend.home')
@section('hero')
    @auth
        @if (Auth::user()->role === 'admin')
            <button>Create Blog</button @endif
        @endauth
        <h1>Blog Content</h1>
        <h2>Top Nepalese Fashion Brands</h2>
        <p>I was roaming around Internet sometimes Instagram, sometimes binge surfing I came across couple of Nepalese brand
            who
            sells good and authentic product.</p>
        <img src="" alt="">
    @endsection
