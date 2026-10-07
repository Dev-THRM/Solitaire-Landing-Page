<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Admin Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-[#0a0b0e]">
        <div class="min-h-screen flex">
            <!-- Left Side: Image/Branding -->
            <div class="hidden lg:flex lg:w-1/2 relative bg-[#0a0b0e] overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-[#0a0b0e] to-[#13151a] opacity-90 z-10"></div>
                <!-- Abstract decorative shapes -->
                <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10">
                    <svg class="absolute w-full h-full text-white/5 opacity-30 transform scale-150" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="0,100 100,0 100,100"/>
                    </svg>
                    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#2980b9] rounded-full mix-blend-screen filter blur-[100px] opacity-20 animate-blob"></div>
                    <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-[#1f618d] rounded-full mix-blend-screen filter blur-[100px] opacity-20 animate-blob animation-delay-2000"></div>
                </div>
                
                <div class="relative z-20 flex flex-col justify-center px-12 py-12 lg:px-24 w-full h-full text-white">
                    <a href="/" class="mb-12 inline-block">
                        <img src="{{ asset('solitaire-logo.png') }}" alt="Solitaire Logo" class="h-32 w-auto p-3 bg-white/5 backdrop-blur-sm rounded-xl border border-white/10">
                    </a>
                    
                    <h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-6 leading-tight text-white">
                        Manage your<br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2980b9] to-[#6dd5ed]">brilliant team</span>
                    </h1>
                    <p class="text-gray-400 text-lg max-w-md leading-relaxed">
                        Access the administrative portal to oversee consultants, manage client insights, and control your digital presence with elegance and ease.
                    </p>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="w-full lg:w-1/2 flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-20 xl:px-24 bg-white relative">
                <!-- Mobile Logo -->
                <a href="/" class="lg:hidden absolute top-8 left-8 flex items-center">
                    <img src="{{ asset('solitaire-logo.png') }}" alt="Solitaire Logo" class="h-10 w-auto">
                </a>

                <div class="w-full max-w-md mx-auto">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
