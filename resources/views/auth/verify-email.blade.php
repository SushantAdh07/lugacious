<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <section class="font-sans bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="mr-2" src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex">
                        <form class="space-y-4 md:space-y-6" action="{{ route('verification.send') }}" method="POST">
                            @csrf
                            <h1>We've sent a verification email to your email. Please verify your email to be Lugacious!
                            </h1>
                            <button type="submit"
                                class="w-full px-5 py-2.5 text-white bg-[#BF8e43] rounded-lg hover:bg-white hover:text-[#BF8e43] hover:border-[#BF8e43] border">Resend
                                Verification Email</button>
                        </form>

                        <a href="{{ route('home') }}"
                            class=" w-full px-5 py-2.5 text-white bg-[#BF8e43] rounded-lg hover:bg-white hover:text-[#BF8e43] hover:border-[#BF8e43] border">Skip
                            for Now</a>

                    </div>
                    @if ($errors->any())
                        <div
                            class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</body>

</html>
