<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Your Email | Lugacious</title>
    @vite(['resources/css/app.css'])
</head>

<body class="font-sans bg-gray-50 dark:bg-gray-900 min-h-screen">
    <section class="flex flex-col items-center justify-center px-4 py-8 mx-auto min-h-screen">
        <a href="/" class="flex items-center mb-8">
            <img class="h-16 sm:h-20 transition-transform duration-200 hover:scale-105" 
                 src="{{ asset('images/logo.png') }}" 
                 alt="Lugacious Logo">
        </a>

        <div class="w-full bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border dark:border-gray-700 max-w-md">
            <div class="p-6 sm:p-8 space-y-6">
                <div class="flex justify-center">
                    <div class="bg-[#BF8e43]/10 p-4 rounded-full">
                        <svg class="w-10 h-10 text-[#BF8e43]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>

                <div class="text-center">
                    <h1 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Verify Your Email Address</h1>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        We've sent a verification link to your email. Please check your inbox and click the link to complete your registration.
                    </p>
                </div>

                <form action="{{ route('verification.send') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="flex flex-col sm:flex-row gap-3">
                        <button type="submit"
                                class="px-5 py-2.5 text-sm font-medium text-center text-white bg-[#BF8e43] rounded-lg hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-[#BF8e43]/50 transition-colors duration-300">
                            Resend Verification Email
                        </button>
                        <a href="{{ route('home') }}"
                           class="px-5 justify-center items-center py-2.5 text-sm font-medium text-center text-[#BF8e43] bg-white border border-[#BF8e43] rounded-lg hover:bg-[#BF8e43]/10 focus:ring-4 focus:outline-none focus:ring-[#BF8e43]/50 transition-colors duration-300">
                            Skip for Now
                        </a>
                    </div>
                </form>

                <p class="text-sm text-gray-500 dark:text-gray-400 text-center">
                    Didn't receive the email? Check your spam folder or 
                    <a href="{{ route('verification.send') }}" class="text-[#BF8e43] hover:underline">try again</a>.
                </p>
            </div>
        </div>

        @if ($errors->any())
            <div class="w-full max-w-md mt-6 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>
</body>
</html>