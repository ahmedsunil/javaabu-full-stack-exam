<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#F9FAFB]">
    <div class="mb-[20px]">
        <h1 class="text-[30px] font-semibold leading-[50px] text-[#111827]">Login to FotoFoshi</h1>
    </div>

    <div
        class="w-[362px] h-[321.33px] p-[30px] bg-white border-1  border-[#F3F4F6] sm:max-w-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
    <div>

    </div>
</div>
</body>
</html>
