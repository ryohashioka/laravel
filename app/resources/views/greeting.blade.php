<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        
        @include('layouts.header')
    
        <h1 class="bg-gray-900 text-white">Hello, {{ $name }}</h1>
        <div class="flex">
            <div>幅: {{ $x }}</div>
            <div>高さ: {{ $y }}</div>
            <div>長さ: {{ $z }}</div>
        </div>
    </body>
</html>
