<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Account - {{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{asset('assets/guest/fonts/fonts.css')}}">
        <!-- Icons -->
        <link rel="stylesheet" href="{{asset('assets/guest/fonts/font-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/guest/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/guest/css/styles.css')}}"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body >

    <div class="pt-45 pb-20">
        <div class="tf-container">

            <!--<div>-->
            <!--    <center>-->
            <!--        <img src="{{static_asset('logo.png')}}" class="mb-3" style="width: 150px; height: 100px;" alt="">-->
            <!--    </center>-->
            <!--</div>-->

             {{ $slot }}

        </div>
    </div>
        <script type="text/javascript" src="{{asset('assets/guest/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/guest/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/guest/js/main.js')}}"></script>

    </body>
</html>
