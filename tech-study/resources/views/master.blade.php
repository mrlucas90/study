<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="HuanDM(Lucas)">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Nosifer&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <!-- Theme Styles -->
        <link href="{{ asset('css/freelancer.min.css') }}" rel="stylesheet">

    </head>
    <body id="page-top">
        @yield('content')
        @stack('js')
    </body>
</html>
