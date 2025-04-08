<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&family=Poppins:ital,wght@0,100;0,900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>

<body class="font-body min-h-screen flex flex-col bg-white">
    {{ View::make('frontend.body.header') }}

    <main class="flex-grow relative"> <!-- Added relative here -->
        @yield('hero')
        @yield('error')
    </main>

    {{ View::make('frontend.body.footer') }}
</body>

</html>
