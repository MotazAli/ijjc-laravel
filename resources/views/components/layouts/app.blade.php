@props([
    'title' => ''
])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ $title }} | IJJC</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lexend Mega' rel='stylesheet'>

        <!-- Styles -->
        @livewireStyles
        @vite('resources/css/app.css')

        <!-- Scripts -->
        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
        <script src="https://kit.fontawesome.com/0ad76f9f0e.js" crossorigin="anonymous"></script>

    </head>
    <body x-data="{ darkMode: false}"
          x-init="
          if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
          localStorage.setItem('darkMode', JSON.stringify(true));
          }
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
          x-bind:class="{'dark' : darkMode === true}"
          x-cloak>

        <x-header/>
        <main class="min-h-[80vh] colors-theme" >
            {{$slot}}
        </main>
        <x-footer/>
        @livewireScripts
    </body>
</html>
