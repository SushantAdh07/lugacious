@extends('frontend.home')
@section('hero')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-8">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl overflow-hidden">
            <!-- Store Image -->
            <div class="w-full flex justify-center p-8">
                <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-lg">
                    <img src="{{ $store->store_image }}" alt="Store Image" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-gray-200"></div>

            <!-- Description Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                <!-- Left Section -->
                <div class="space-y-4">
                    <h2 class="text-2xl font-bold text-gray-800">Store Details</h2>
                    <p class="text-gray-600"><span class="font-semibold">Name:</span> {{ $store->name }}</p>
                    <p class="text-gray-600"><span class="font-semibold">Address:</span> {{ $store->address }}</p>
                    <p class="text-gray-600"><span class="font-semibold">Phone:</span> {{ $store->phone }}</p>
                </div>

                <!-- Right Section -->
                <div class="space-y-4">
                    <h2 class="text-2xl font-bold text-gray-800">About Us</h2>
                    <p class="text-gray-600">{{ $store->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
