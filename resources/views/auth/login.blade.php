<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('images/favicon-logo.png')}}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lugacious - Login</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900 min-h-screen font-sans">
        <div class="flex flex-col items-center justify-center px-4 py-8 mx-auto md:h-screen lg:py-0">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="h-10 sm:h-14 transition-all duration-200 hover:scale-105" src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            
            @if (session('error'))
                <div class="w-full max-w-md p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 flex items-center" role="alert">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-medium">{{ session('error') }}</span>
                </div>
            @endif
            
            <div class="w-full bg-white rounded-lg shadow-sm dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="text-center">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white transform transition hover:scale-105">
                            Welcome Back
                        </h1>
                        <p class="text-gray-500 dark:text-gray-300">Sign in to your personalized space</p>
                    </div>
                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                            <input type="email" name="email" id="email" autocomplete="username" placeholder="name@company.com"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#BF8e43] focus:border-[#BF8e43] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#BF8e43] dark:focus:border-[#BF8e43]"
                                required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" autocomplete="current-password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#BF8e43] focus:border-[#BF8e43] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#BF8e43] dark:focus:border-[#BF8e43]"
                                required>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-[#BF8e43] dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-[#BF8e43] dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="{{ route('password.request') }}"
                                class="text-sm font-medium text-[#BF8e43] hover:underline dark:text-[#BF8e43]">Forgot password?</a>
                        </div>
                        <button type="submit"
                            class="w-full px-5 py-3 text-sm font-medium text-center text-white bg-[#BF8e43] rounded-lg hover:bg-[#a87a38] transition-colors duration-200 focus:ring-4 focus:outline-none focus:ring-[#BF8e43]/50 dark:focus:ring-[#BF8e43]/80">
                            Sign in
                        </button>

                        <div class="flex items-center before:flex-1 before:border-t before:border-gray-300 after:flex-1 after:border-t after:border-gray-300">
                            <p class="mx-4 mb-0 text-center text-gray-500 dark:text-gray-300">OR</p>
                        </div>

                        <a href="{{route('auth.google')}}"
                            class="w-full px-5 py-2.5 inline-flex items-center justify-center gap-2 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600 transition-colors duration-200"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                            <span>Continue with Google</span>
                        </a>
        
                        <p class="text-sm text-center text-gray-500 dark:text-gray-400">
                            Don't have an account? <a href="{{ route('register') }}"
                                class="font-medium text-[#BF8e43] hover:underline dark:text-[#BF8e43]">Sign up here</a>
                        </p>
                    </form>
                    
                    @if ($errors->has('email'))
                        <div class="p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</body>
</html>