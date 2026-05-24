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
        <div class="bg-menuDark tf-container">

            <!--<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,dogecoin,ripple,litecoin,tron" currency="usd" background-color="#fff" locale="en"></coingecko-coin-price-marquee-widget>-->

            <div class="pt-12 pb-12 ">
                <h5><span>Balance</span></h5>
                <h1 class="mt-16"><a href="#">{{ ucwords(auth()->user()->acct_currency) }}{{ number_format(auth()->user()->balance,2) }}</a></h1>
                <ul class="mt-16 grid-4 m--16">
                     <li>
                        <a href="{{route('deposits.create')}}" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i class="icon icon-wallet"></i></span>
                             Deposit
                        </a>
                    </li>
                    <!--<li>-->
                    <!--    <a href="{{route('investment.create')}}" class="tf-list-item d-flex flex-column gap-8 align-items-center">-->
                    <!--        <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i class="icon icon-way"></i></span>-->
                    <!--        Invest-->
                    <!--    </a>-->
                    <!--</li>-->
                    <li>
                        <a href="{{url('user/withdraw-type')}}" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i class="icon icon-way2"></i></span>
                            Withdraw
                        </a>
                    </li>

                    <li>
                        <a href="{{route('referral.index')}}" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i class="icon icon-exchange"></i></span>
                            Referral
                        </a>
                    </li>
                     <li>
                        <a href="javascript:void(Tawk_API.toggle())"class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i class="icon icon-help"></i></span>
                            Support
                            <div id="status"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bg-menuDark tf-container">
            <div class="pt-12  pb-12 mt-3">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="#" class="coin-box d-block mb-3">
                            <div class="coin-logo">
                                <div class="title">
                                    <h6>Deposit</h6>
                                </div>
                            </div>
                            <div class="mt-8 mb-8 coin-chart">
                                <div id="line-chart-1"></div>
                            </div>
                            <div class="coin-price d-flex justify-content-between">
                                <h5>{{ ucwords(auth()->user()->acct_currency) }}{{ number_format(auth()->user()->deposits()->where('status', 'completed')->sum('amount'), 2) }}
                                </h5>
                            </div>
                            <div class="blur bg1">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="#" class="coin-box d-block mb-3">
                            <div class="coin-logo">
                                <div class="title">
                                    <h6>ROI</h6>
                                </div>
                            </div>
                            <div class="mt-8 mb-8 coin-chart">
                                <div id="line-chart-3"></div>
                            </div>
                            <div class="coin-price d-flex justify-content-between">
                                <h5>{{ ucwords(auth()->user()->acct_currency) }}{{ number_format(auth()->user()->investments()->where('status', 'completed')->sum('profit'), 2) }}
                                </h5>
                            </div>
                            <div class="blur bg4">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="#" class="coin-box d-block mb-3">
                            <div class="coin-logo">
                                <div class="title">
                                    <h6>Active Investment</h6>
                                </div>
                            </div>
                            <div class="mt-8 mb-8 coin-chart">
                                <div id="line-chart-2"></div>
                            </div>
                            <div class="coin-price d-flex justify-content-between">
                                <h5>{{ ucwords(auth()->user()->acct_currency) }}{{ number_format(auth()->user()->investments()->where('status', 'active')->sum('amount'), 2) }}
                                </h5>
                            </div>
                            <div class="blur bg2">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="#" class="coin-box d-block mb-3">
                            <div class="coin-logo">
                                <div class="title">
                                    <h6>Withdrawn</h6>
                                </div>
                            </div>
                            <div class="mt-8 mb-8 coin-chart">
                                <div id="line-chart-4"></div>
                            </div>
                            <div class="coin-price d-flex justify-content-between">
                                <h5>{{ ucwords(auth()->user()->acct_currency) }}{{ number_format(auth()->user()->withdrawals()->where('status', 'completed')->sum('amount'), 2) }}</h5>
                            </div>
                            <div class="blur bg4">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
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
    <!--Start of tawk.to Status Code-->

<script type="text/javascript">

Tawk_API = Tawk_API || {};

Tawk_API.onStatusChange = function (status){

if(status === 'online')

{

document.getElementById('status').innerHTML = '<a href="javascript:void(Tawk_API.toggle())">Online - Click to chat</a>';

}

else if(status === 'away')

{

document.getElementById('status').innerHTML = 'We are currently away';

}

else if(status === 'offline')

{

document.getElementById('status').innerHTML = 'Live chat is Offline';

}

};

</script>

<!--End of tawk.to Status Code -->


<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src="{{ get_settings('live_chat') }}";
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
    </body>
    </html>
