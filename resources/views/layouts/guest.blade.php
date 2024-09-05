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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

<div class="min-h-screen sm:pt-0 bg-[#F9FAFB]">
    <div class="mb-[113.73px]">
        <nav class="h-[80px] px-[110px] py-[12px] flex items-center justify-between bg-[#FFFFFF]">
            <div>
                <img src="{{ asset('imgs/FotoFoshi Logo.png') }}" alt="logo" class="w-[135.22px] h-[21.53px]">
            </div>
            <div class="flex items-center space-x-[15px]">
                <div class="rounded-full bg-[#F3F4F6] w-[50px] h-[50px] flex items-center justify-center">
                    <i class="fa-solid fa-gear text-[16px] font-black leading-[34px] text-[#94A3B8]"></i>
                </div>
                <a class="w-[188px] h-[50px] flex justify-center gap-2.5 rounded-[14px] px-[17px] py-[8px] bg-[#FFC727]">
                    <i class="fa-solid fa-camera text-[16px] font-black leading-[34px] text-[#FFFFFF]">
                    </i>
                    <span class="text-[#FFFFFF] text-[16px] leading-[34px] font-medium ">Post a Photo</span>
                </a>
                <div class="flex justify-between items-center">
                    <div class="flex justify-center items-center rounded-full bg-[#F3F4F6] w-[50px] h-[50px]">
                        <i class="fa-solid fa-user text-[16px] font-black leading-[34px] text-[#94A3B8] flex"></i>
                    </div>
                    <span class="w-[77px] h-[44px] px-[15px] text-[16px] leading-[22px] font-medium text-[#94A3B8]">Mohamed Ali</span>
                </div>
                <i class="fa-solid fa-chevron-down w-[12px] h-[22px] pl-[15px] font-medium text-[16px] leading-[22px] text-[#94A3B8]"></i>
            </div>
        </nav>
    </div>

    <div class="flex flex-col sm:justify-center items-center">

        <div class="mb-[20px]">
            <h1 class="text-[30px] font-semibold leading-[50px] text-[#111827]">Login to FotoFoshi</h1>
        </div>

        <div
            class="w-[362px] h-[321.33px] p-[30px] bg-white border-1  border-[#F3F4F6] sm:max-w-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
        <div class="mt-[30.34px]">
            <p class="text-[#6B7280] font-medium text-[16px] leading-[19.36px]">Don’t have an account? <span
                    class="text-[#FFC700]">Sign Up</span></p>
        </div>
    </div>

</div>
</body>
</html>
