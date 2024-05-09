<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>

    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="Описание"/>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @vite(['resources/css/script.css', 'resources/js/app.js'])

</head>

<body>
<div id="layout">
@include('shared.header')
@include('shared.slider')

    @yield('content')

</div>
@include('shared.footer')
@include('shared.popup')
</body>
</html>
