@extends('frontend.home')
@section('hero')
    <div class="min-h-screen bg-[#FAF7F6] flex flex-col items-center px-3 py-10">

        <h2 class="text-xl font-body text-[#5E5B59]">SHOPS</h2>


        <!-- Shops Grid -->
        <div class="w-full max-w-6xl mt-8 mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-24 gap-y-16">
                @foreach (range(1, 8) as $shop)
                    <div class="flex flex-col items-center">
                        <!-- Card -->
                        <div class="bg-white rounded-lg shadow-sm p-20 w-full flex flex-col items-center">
                            <!-- Placeholder for card content (e.g., an image or icon) -->
                            <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                                <!-- Example: Icon or image -->

                            </div>
                        </div>
                        <!-- Name -->
                        <p class="mt-4 text-lg font-bayon text-[#5E5B59] text-center">NAME {{ $shop }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
