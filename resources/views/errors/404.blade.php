@extends('frontend.home')
@section('hero')
<div class="text-center py-10">
    <h1 class="text-6xl text-red-500">404</h1>
    <p class="text-2xl mt-4">Oops! Page not found.</p>
    <a href="{{ route('home') }}" class="mt-4 px-4 py-2.5 inline-block rounded-lg bg-[#BF8e43] text-white hover:text-[#BF8e43] hover:bg-white hover:border-[#BF8e43] border">Go Home</a>
</div>
@endsection
