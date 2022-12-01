<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ dark: false }" :class="dark ? '' : 'dark'" x-cloak>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Roberto Manna</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            [x-cloak] { display: none }
        </style>
    </head>
    <body class="antialiased text-zinc-800 dark:text-zinc-200">
        <div class="min-h-screen bg-zinc-100 dark:bg-zinc-900 pt-24">

            <x-layout.navbar></x-layout.navbar>

            {{ $slot }}

            <x-layout.footer></x-layout.footer>

        </div>

    </body>
</html>
