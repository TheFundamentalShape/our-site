<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" value="{{ csrf_token()  }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.typekit.net/wsd8aqd.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="bg-gray-200">

    <div id="app">

        <navbar></navbar>

        @yield('content')

    </div>

</body>

<script src="/js/app.js"></script>

</html>