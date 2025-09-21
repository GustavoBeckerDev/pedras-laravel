<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedras Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('/components/header')

    @yield('content')

    <script src={{ asset('js/app.js') }}></script>
</body>
</html>
