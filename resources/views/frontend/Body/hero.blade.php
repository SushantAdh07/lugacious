@extends('frontend.home')
@section('hero')
    <div class="min-h-screen bg-[#FAF7F6] flex flex-col items-center px-3 py-10">

        <h2 class="text-xl font-body text-[#5E5B59]">SHOPS</h2>
        <h1>Hello</h1>


        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/' . $store->store_image) }}" alt="">
            </div>
        </div>


    </div>



    <div class="border-t border-gray-200 mx-8"></div>

    <div class="mt-10">
        <a href="{{ route('new-store') }}" class="bg-dark">
            Create Store
        </a>
    </div>
    </div>
@endsection
