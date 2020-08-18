<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <link rel="icon" type="image/png" href="{{asset('images/Lg_ 1.png')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/33bf1ad68d.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    @yield('styles')
</head>
<body>
   @include('layouts.header')
   @yield('content')
   @include('layouts.footer')
</body>
    @yield('scripts')
</html>
