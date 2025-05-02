@extends('frontend.home')
@section('hero')
<section class="bg-[#FAF7F6] dark:bg-gray-900 min-h-screen py-8">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Share Your Feedback</h1>
            <p class="text-gray-600 dark:text-gray-300">We value your thoughts and suggestions to improve our platform</p>
        </div>


        @if ($errors->any())
            <div class="mb-6 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6">
            <form action="{{ route('add.feedback') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="feedback" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Your Feedback <span class="text-red-500">*</span>
                    </label>
                    <textarea name="feedback" id="feedback" rows="6" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#BF8e43] focus:border-[#BF8e43] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#BF8e43] dark:focus:border-[#BF8e43]"
                        placeholder="What suggestions or feedback would you like to share with us?"></textarea>
                </div>
                
                <div class="flex justify-end">
                    <button type="submit" 
                            class="px-5 py-2.5 text-sm font-medium text-center text-white bg-[#BF8e43] rounded-lg hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-[#BF8e43]/50 dark:focus:ring-[#BF8e43]/80 transition-colors duration-300">
                        Submit Feedback
                    </button>
                </div>
            </form>
        </div>
        
        @if (session('success'))
            <div id="toast-success" class="fixed top-4 right-4 z-50">
                <div class="flex items-center p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-lg dark:text-gray-400 dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                    </div>
                    <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
                    <button onclick="dismissToast()" class="ml-auto -mx-1.5 -my-1.5 text-gray-400 hover:text-gray-900 rounded-lg p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 14 14">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <div class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
            <p>We read all feedback carefully and use it to improve our service.</p>
            <p class="mt-1">Thank you for helping us grow!</p>
        </div>
    </div>
</section>

@if (session('success'))
<script>
    function dismissToast() {
        document.getElementById('toast-success').remove();
    }
    setTimeout(dismissToast, 5000);
</script>
@endif
@endsection