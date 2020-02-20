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

        <!-- Theme Styles -->
        <link href="{{ asset('css/freelancer.min.css') }}" rel="stylesheet">

        <!-- JavaScripts -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jqBootstrapValidation.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/contact_me.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/freelancer.min.js') }}" type="text/javascript"></script>
    </head>
    <body>
        @yield('content')
    </body>
</html>
