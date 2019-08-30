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
    @yield('content')
</div>

</body>
<script src="/js/app.js"></script>
</html>