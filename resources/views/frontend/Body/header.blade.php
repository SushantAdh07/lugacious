<body>
    <header>
        <nav class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3 sm:px-6 sm:py-4 md:px-8 md:py-6">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/logo.png') }}" class="h-7 sm:h-8" alt="Site Logo" />
                </a>

                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-6 lg:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#BF8e43] md:p-0 dark:text-white md:dark:hover:text-[#BF8e43] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200
                                {{ request()->routeIs('home') ? 'md:text-[#BF8e43] md:dark:text-blue-500' : '' }}">
                                Home
                            </a>
                        </li>
                        <!-- 
                            <li>
                                <a href="{{ route('blog') }}"
                                    class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200
                                    {{ request()->routeIs('blog') ? 'md:text-blue-700 md:dark:text-blue-500' : '' }}">
                                    Blog
                                </a>
                            </li>
                        -->
                        <li>
                            <a href="{{ route('users.choice') }}"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:text-[#BF8e43] md:hover:bg-transparent md:border-0 md:hover:text-[#BF8e43] md:p-0 dark:text-white md:dark:hover:text-[#BF8e43] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200 {{ request()->routeIs('users.choice') ? 'md:text-[#BF8e43] md:dark:text-blue-500' : '' }}">
                                Add Yours
                            </a>
                        </li>

                        @auth
                            <li class="relative">
                                <div class="relative inline-block">
                                    <button onclick="this.nextElementSibling.classList.toggle('hidden')" tabindex="0"
                                    class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200">
                                    {{ Auth::user()->name }}
                                </button>
                                <div class="hidden absolute mt-2 w-48 bg-white shadow-lg rounded-md z-50">
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                                    <a href="{{route('logout')}}" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
                                </div>
                                </div>
                                
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}"
                                    class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200">
                                    Log In
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
    const menu = document.getElementById('navbar-default');
    
    menuButton.addEventListener('click', function() {
        menu.classList.toggle('hidden');
        menuButton.setAttribute('aria-expanded', menu.classList.contains('hidden') ? 'false' : 'true');
    });
});
</script>
</body>