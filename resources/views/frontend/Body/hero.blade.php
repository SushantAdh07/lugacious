@extends('frontend.home')
@section('hero')
    <div class="min-h-screen bg-[#FAF7F6] flex flex-col items-center px-3 py-10">

        <h2 class="text-xl font-body text-[#5E5B59]">SHOPS</h2>
        <h1>Hello</h1>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($stores as $store)
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/' . $store->store_image) }}"
                        alt="">
                </div>
            @endforeach
        </div>
    </div>
    <div class="border-t border-gray-200 mx-8"></div>
    <a href="{{ route('new-store') }}" type="button"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</a>
    </div>
@endsection
