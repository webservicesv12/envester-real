<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }} - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{static_asset('logo.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/vendors/litepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/vendors/tippy.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/vendors/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/themes/waveform.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/app.css')}}"> <!-- END: CSS Assets-->

    <script type="text/javascript" src="{{asset('assets/guest/js/jquery.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

@include('flash')

<div class="waveform before:content-[''] before:h-screen before:w-screen before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:top-0 before:fixed">
    <div class="relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
        <div class="xl:ml-0 shadow-xl transition-[margin] duration-300 xl:shadow-none fixed top-0 left-0 z-50 side-menu group after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden side-menu--collapsed [&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
            <div class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50 [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                <a class="mt-5 ml-5" href="">
                    <i data-tw-merge="" data-lucide="x" class="stroke-[1] w-8 h-8 text-white"></i>
                </a>
            </div>
            <div class="side-menu__content pr-1 z-20 relative w-[275px] border-slate-200/80 duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] h-screen flex flex-col after:content-[''] after:absolute after:inset-0 after:bg-gradient-to-b after:from-theme-1 after:to-theme-2/30  after:border-slate-200/80 after:group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] before:content-[''] before:absolute before:inset-0 before:bg-[275px_auto] before:bg-fixed before:bg-no-repeat before:bg-waveform before:bg-theme-2">
                <div class="relative z-10 hidden h-[65px] w-[275px] flex-none items-center overflow-hidden px-5 duration-300 xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed]:xl:w-[91px]">
                    <a class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-4" href="">
                        <div class="w-6 h-6 image-fit">
                            <img src="{{static_asset('logo.png')}}" alt="{{ config('app.name') }}">
                        </div>
                        <div class="ml-3 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                            {{ config('app.name') }}
                        </div>
                    </a>
                    <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex" href="">
                        <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
                    </a>
                </div>

                <div class="scrollable-ref w-full h-full z-20 pl-5 pr-4 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">

                    @include('layouts.backend.header')

                </div>


            </div>
            <div class="top-bar group fixed inset-x-0 top-0 h-[65px] transition-[margin] duration-300 ease-in-out xl:ml-[275px] group-[.side-menu--collapsed]:xl:ml-[90px] [&.top-bar--active]:mt-3.5">
                <div class="absolute inset-x-0 h-full xl:mr-5 transition-[padding] duration-300 ease-in-out group-[.top-bar--active]:px-5 before:content-[''] before:mx-5 before:xl:mx-5 before:absolute before:top-0 before:inset-x-0 before:-mt-[15px] before:h-[20px] before:backdrop-blur">
                    <div class="box group-[.top-bar--active]:box flex h-full w-full items-center border-transparent bg-transparent px-5 shadow-none transition-[padding,background-color,border-color] duration-300 ease-in-out group-[.top-bar--active]:border-transparent group-[.top-bar--active]:bg-theme-2/80 group-[.top-bar--active]:backdrop-blur">
                        <div class="flex items-center gap-1 xl:hidden">
                            <a class="p-2 text-white rounded-full open-mobile-menu hover:bg-white/5" href="">
                                <i data-tw-merge="" data-lucide="align-justify" class="stroke-[1] h-[18px] w-[18px]"></i>
                            </a>
                            <a class="p-2 text-white rounded-full hover:bg-white/5" data-tw-toggle="modal" data-tw-target="#quick-search" href="javascript:;">
                                <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                            </a>
                        </div>
                        <!-- BEGIN: Breadcrumb -->
                        <nav aria-label="breadcrumb" class="flex flex-1 hidden xl:block">
                            <ol class="flex items-center text-theme-1 dark:text-slate-300 text-white/90">
                                <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white">
                                    <a href="">Dashboard</a>
                                </li>
                                <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-white/70">
                                    <a href="">{{ $page_title }}</a>
                                </li>
                            </ol>
                        </nav>
                        <!-- END: Breadcrumb -->

                    </div>
                </div>
            </div>
        </div>
                <div class="content relative transition-[margin,width] duration-100 pl-5 xl:pl-0 pr-5 pt-[66px] pb-5 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                    <div class="relative z-10 mt-[35px] rounded-3xl bg-slate-100 px-5 pt-px pb-5 min-h-screen before:content-[''] before:rounded-3xl before:bg-slate-100/30 before:inset-x-0 before:h-20 before:top-0 before:absolute before:z-[-1] before:-mt-3.5 before:mx-5 after:content-[''] after:rounded-3xl after:bg-slate-100/20 after:inset-x-0 after:h-20 after:top-0 after:absolute after:z-[-2] after:-mt-7 after:mx-12">

                <div class="mt-8 flex items-center">
                    <h2 class="intro-y mr-auto text-lg font-medium">{{ $page_title }}</h2>
                </div>

                @stack('main')

                <div class="intro-y box mt-5 gap-y-6 px-5 py-8 sm:gap-6">
                    @stack('content')
                </div>

            </div>
        </div>
    </div>
</div>


@include('layouts.backend.footer')


<!-- BEGIN: Vendor JS Assets-->
<script src="{{asset('assets/backend/dist/js/vendors/dom.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/tailwind-merge.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/lucide.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/dayjs.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/litepicker.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/tippy.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/tab.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/popper.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/dropdown.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/simplebar.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/chartjs.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/transition.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/modal.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/theme-color.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/lucide.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/litepicker.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/tippy.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/utils/colors.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/utils/helper.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/report-line-chart-1.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/report-bar-chart-1.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/report-line-chart-2.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/report-donut-chart-1.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/themes/waveform.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/quick-search.js')}}"></script> <!-- END: Vendor JS Assets-->
<!-- BEGIN: Pages, layouts, components JS Assets-->
<!-- END: Pages, layouts, components JS Assets-->
</body>
</html>
