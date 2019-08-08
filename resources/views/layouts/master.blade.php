<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" value="{{ csrf_token()  }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.typekit.net/ocd5rnk.css">
</head>

<body>

    <div id="app">

        <navbar></navbar>

        @yield('content')

    </div>

</body>

<script src="/js/app.js"></script>

</html>