<footer class="mt-auto bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700">
    <div class="max-w-6xl mx-auto px-4 py-6 flex flex-col sm:flex-row justify-between items-center gap-4">
        <div class="text-gray-600 dark:text-gray-300 text-sm">
            © {{ date('Y') }} Pulpious Tech Ltd. All rights reserved.
        </div>
        <div class="flex items-center gap-6">
            <a href="{{ route('feedback') }}" 
               class="text-[#BF8e43] hover:text-amber-700 dark:hover:text-amber-600 transition-colors duration-200 text-sm font-medium">
                Leave Feedback
            </a>
        </div>
    </div>
</footer>