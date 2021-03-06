<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <x-navbar></x-navbar>
        <div class="min-h-screen font-sans text-gray-900 antialiased dark:bg-gray-500 " style="background-image:url('https://wallpapercave.com/wp/wp5220842.jpg'); background-position: center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;" >
            {{ $slot }}
        </div>
    </body>
</html>
