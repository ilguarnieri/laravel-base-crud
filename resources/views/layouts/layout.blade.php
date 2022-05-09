<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('img/dc-logo.png') }}">
    <title>@yield('metaTitle')</title>
</head>
<body>
    @include('components.header')

    <main>
        @yield('mainContent')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>