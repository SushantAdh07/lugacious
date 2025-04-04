<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luga ko Pachadi</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    {{ View::make('backend.Body.header') }}
    {{ View::make('backend.Body.sidebar') }}
</body>

</html>
