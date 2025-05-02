<body>
    <header class="sticky top-0 z-50 shadow-sm">
        <nav class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3 sm:px-6 sm:py-4">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse group">
                    <img src="{{ asset('images/logo.png') }}" class="h-10 sm:h-14 transition-all duration-300 group-hover:scale-105" alt="Lugacious Logo" />
                </a>

                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center justify-center p-2 w-10 h-10 text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 transition-colors duration-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                    </svg>
                </button>

                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-6 lg:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#BF8e43] md:p-0 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200
                                {{ request()->routeIs('home') ? 'md:text-[#BF8e43] font-semibold' : '' }}">
                                Home
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('blog') }}"
                                class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#BF8e43] md:p-0 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200
                                {{ request()->routeIs('blog') ? 'md:text-[#BF8e43] font-semibold' : '' }}">
                                Blog
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('users.choice') }}"
                                class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#BF8e43] md:p-0 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200 
                                {{ request()->routeIs('users.choice') ? 'md:text-[#BF8e43] font-semibold' : '' }}">
                                Add Yours
                            </a>
                        </li>

                        @auth
                            <li class="relative group" x-data="{ open: false }">
                                <button type="button" 
                                        @click="open = !open"
                                        @mouseenter="if(window.innerWidth >= 768) open = true"
                                        class="flex items-center py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#BF8e43] md:p-0 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200
                                        {{ request()->routeIs('users.profile') ? 'md:text-[#BF8e43] font-semibold' : '' }}">
                                    <span>{{ explode(' ', Auth::user()->name)[0] }}</span>
                                    <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                
                                <div class="absolute right-0 mt-2 w-48 origin-top-right bg-white dark:bg-gray-800 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-50 transition-all duration-200"
                                    x-show="open"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    @mouseleave="if(window.innerWidth >= 768) open = false"
                                    @click.outside="open = false">
                                    <div class="py-1">
                                        <a href="{{route('users.profile')}}" 
                                           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-[#BF8e43]/10 dark:hover:bg-gray-700 transition-colors duration-150"
                                           @click="open = false">
                                            Profile
                                        </a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" 
                                                    class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-[#BF8e43]/10 dark:hover:bg-gray-700 transition-colors duration-150">
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}"
                                    class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#BF8e43] md:p-0 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-colors duration-200 
                                    {{ request()->routeIs('login') ? 'md:text-[#BF8e43] font-semibold' : '' }}">
                                    Log In
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
            const menu = document.getElementById('navbar-default');
            
            menuButton.addEventListener('click', function() {
                const expanded = menu.classList.toggle('hidden');
                menuButton.setAttribute('aria-expanded', !expanded);
                
                const icon = menuButton.querySelector('svg');
                if (!expanded) {
                    icon.innerHTML = '<path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>';
                } else {
                    icon.innerHTML = '<path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>';
                }
            });

            const navLinks = document.querySelectorAll('#navbar-default a');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 768) {
                        menu.classList.add('hidden');
                        menuButton.setAttribute('aria-expanded', 'false');
                        menuButton.querySelector('svg').innerHTML = '<path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>';
                    }
                });
            });
        });
    </script>
</body>