<body>
    <header>
        <nav class="bg-[#FAF7F6] border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex flex-wrap p-6 justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />

                </a>
                <a href="{{ route('blog') }}">Blog Page</a>
                @auth
                    <div class="flex items-center lg:order-2">
                        <a href=""
                            class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">{{ Auth::user()->name }}</a>
                    </div>
                @else
                    <div class="flex items-center lg:order-2">
                        <a href="{{ route('login') }}"
                            class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log
                            in</a>
                    </div>
                @endauth

            </div>
        </nav>
    </header>
</body>
