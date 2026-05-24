    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $page_title }} - {{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{asset('assets/guest/fonts/fonts.css')}}">
        <!-- Icons -->
        <link rel="stylesheet" href="{{asset('assets/guest/fonts/font-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/guest/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/guest/css/styles.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/guest/css/swiper-bundle.min.css')}}">
        <link rel="shortcut icon" href="{{static_asset('logo.png')}}" type="image/x-icon">

        <script type="text/javascript" src="{{asset('assets/guest/js/jquery.min.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
        <script type="text/javascript" src="{{asset('assets/guest/js/tradingview.js')}}"></script>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
                async>
            {
                "colorTheme":"light"
            }
        </script>
        
        <?php
          $greetings = "";

    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");

    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");

    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        $greetings = "Good morning";
    } else

    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        $greetings = "Good afternoon";
    } else

    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        $greetings = "Good evening";
    } else

    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        $greetings = "Good night";
    }
        ?>

    {{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    </head>
    <body>

    @include('flash')

    <div class="header-style2 fixed-top bg-menuDark">
        <div class="d-flex justify-content-between align-items-center">
            <a class="box-account" href="{{url('user/dashboard')}}">
                <img src="{{static_asset('avt/avt2.jpg.png')}}" alt="img" class="avt">
                <div class="info">
                    <p class="text-xsmall text-secondary">{{ $greetings }}!</p>
                    <h6>{{ ucwords(auth()->user()->name) }}</h6>
                </div>
            </a>
        </div>
    </div>

    <div class="pt-68 pb-80">
        
        @stack('content')
    </div>

    @include('layouts.guest.footer')

    <script type="text/javascript" src="{{asset('assets/guest/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/apexcharts.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/chart.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/line-chart.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/guest/js/main.js')}}"></script>
    </body>
    </html>
