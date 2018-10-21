<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'KadaMati') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
</head>

<body>
    <div id="page">
        <header class="main-header">
            @include('frontend.parts.social')
            @include('frontend.parts.header')
        </header>

        <div>
            @yield('content')
        </div>
        <footer class="main-footer">

        </footer>
    </div>
    <script src="{{ asset('js/frontend.js') }}" defer></script>
</body>

</html>