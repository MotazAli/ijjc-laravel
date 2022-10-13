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
    <body x-data="{ darkMode: false }" 
          x-init="
          if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
          localStorage.setItem('darkMode', JSON.stringify(true));
          }
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" 
          x-bind:class="{'dark' : darkMode === true}" class="min-h-screen "
          x-cloak>

        <x-bars.live-news/>
        <x-bars.nav />
        <main class=" bg-white dark:bg-gray-800  text-gray-900 dark:text-white" >
            {{$slot}}
        </main>
        <x-footer/>
    </body>
</html>
