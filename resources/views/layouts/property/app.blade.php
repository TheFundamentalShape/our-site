<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" value="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://kit.fontawesome.com/825a6bb202.js"></script>
</head>
<body class="bg-gray-200 text-gray-800 font-dashboard">

<div id="app">
    <dashboard-navbar></dashboard-navbar>
    <div class="md:flex text-dashboard">
        <div class="hidden lg:block">
            @include('layouts.sidebar')
        </div>

        <div class="px-4 mt-6 w-full">
            <div class="flex justify-between">
                <div>
                    <h1 class="text-md font-bold text-xl">{{ $property->name }}</h1>
                    <p class="text-gray-600 font-medium text-lg">{{ $property->domain }}</p>
                </div>
                <div>
                    <a class="lg:hidden inline-block text-3xl px-3 pt-1 rounded hover:bg-gray-800 hover:text-white" v-on:click="openNav()"><i class="fas fa-bars"></i></a>
                </div>
            </div>

            <div id="mobileNav" class="lg:hidden -mx-6 mt-6" v-show="mobileNavOpen">
                @include('layouts.sidebar')
            </div>

            <div class="my-6">
                @yield('content')
            </div>

        </div>
    </div>
</div>

</body>
<script src="/js/app.js"></script>
</html>