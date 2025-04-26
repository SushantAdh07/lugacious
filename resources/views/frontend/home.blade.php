<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lugacious')</title>
    <link rel="icon" href="{{asset('storage/favicon.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>

<body class="">
    {{ View::make('frontend.Body.header') }}

    
        @yield('hero')
        @yield('error')
    

    {{ View::make('frontend.Body.footer') }}
</body>

</html>
