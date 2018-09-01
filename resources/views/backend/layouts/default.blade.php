@php
    $_activePrimaryNav = isset($_activePrimaryNav) ? $_activePrimaryNav : 'dashboard';
    $_activeSecondaryNav = isset($_activeSecondaryNav) ? $_activeSecondaryNav : null;
    $_alertType = isset($_alertType) ? $_alertType : null;
    $_alertMessage = isset($_alertMessage) ? $_alertMessage : null;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'KadaMati') }}</title>
    <!-- Styles -->
<<<<<<< HEAD
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
=======
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
>>>>>>> 3309dbbf70cf7fbf88c4f9feba7198dc64891d77
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
</head>
<body class="sidebar-mini skin-purple">
    <div id="app" class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            @include('backend.parts.main-header')
        </header>
        
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            @include('backend.parts.main-sidebar',
            [
                'activePrimary' => $_activePrimaryNav,
                'activeSecondary' => $_activeSecondaryNav,
            ])
        </aside>

        <div class="content-wrapper">
            @includeWhen($_alertMessage, 'backend.parts.main-alert',
            [
                'type' => $_alertType,
                'message' => $_alertMessage,
            ])
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/backend.js') }}" defer></script>
</body>
</html>