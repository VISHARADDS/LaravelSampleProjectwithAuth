<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/headerUI.css') }}"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased flex flex-col min-h-screen"
      style="background-image: url('{{ asset('image/login.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="">
                <nav class="navbar navbar-expand-lg blur border-radius-xl mt-4 top-0 z-index-3 shadow position-absolute my-3 py-2 start-2 end-0 mx-0">
                    <div class="container-fluid px-0" style="display:flex">
                        <a class=" font-weight-bolder ms-sm-3" href="/" style="font-size:17px;white-space: nowrap" >
                            <img src="{{ asset('image/logo.png') }}" style="width: 70px; height: 50px;">
                            &nbsp;TECH DEAL
                        </a>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                @if (Route::has('login'))
                                    <nav class="-mx-3 flex flex-1 justify-end">
                                        @auth
                                            <a href="{{ url('/dashboard') }}"
                                               class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                Dashboard
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}"
                                               class="btn btn-success   text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" style="margin-right:10px;margin-bottom:0rem">
                                                Log in
                                            </a>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"
                                                   class=" btn btn-dark text-white  ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"  style="margin-right:10px;margin-bottom:0rem">
                                                    Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="flex-grow flex flex-col sm:justify-center items-center pt-6 sm:pt-0"
         style="padding: 20px; border-radius: 8px;">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

    <x-footer />
</body>
</html>
