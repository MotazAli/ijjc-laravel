<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IJJC</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lexend Mega' rel='stylesheet'>

        <!-- Styles -->
        @vite('resources/css/app.css')

        <!-- Scripts -->
        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    </head>
    <body>
        <x-nav-bar />
        <main>
            {{$slot}}
        </main>
        <x-footer/>
    </body>
</html>
