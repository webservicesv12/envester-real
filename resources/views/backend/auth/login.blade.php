<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }} - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('assets/backend/dist/css/app.css')}}">
</head>
<body>

<div class="before:fixed before:top-0 before:z-[-1] before:h-screen before:w-screen before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:transition-[opacity,height] before:duration-300 before:ease-in-out before:content-['']">
    <div class="container relative">
        <div class="flex min-h-screen w-full items-center justify-center p-5 md:p-20">
            <div class="intro-y w-96">
                <!--<img class="mx-auto w-16" src="{{ static_asset('logo.png') }}" alt="{{config('app.name')}}">-->
                <div class="mt-8 text-center text-2xl font-medium text-white dark:text-slate-300">Admin Login
                </div>
               <form method="post" action="{{route('login.store')}}">
                   @csrf
                   <div class="box box--stacked relative mt-14 max-w-[450px] px-5 py-8">

                       <x-input-label for="email" :value="__('Email Address')" />
                       <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Email Address" />
                       <x-input-error :messages="$errors->get('email')" class="mt-2" />

                       <x-input-label for="password" :value="__('Password')" />
                       <x-text-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="current-password"  placeholder="Password"/>

                       <x-input-error :messages="$errors->get('password')" class="mt-2" />

                       <div class="mt-5 text-center xl:mt-8 xl:text-left">
                           <button data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-full py-3 xl:mr-3">Login</button>
                       </div>
                   </div>
               </form>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN: Vendor JS Assets-->
<script src="{{asset('assets/backend/dist/js/vendors/dom.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/tailwind-merge.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/lucide.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/modal.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/theme-color.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/lucide.js')}}"></script> <!-- END: Vendor JS Assets-->
<!-- BEGIN: Pages, layouts, components JS Assets-->
<!-- END: Pages, layouts, components JS Assets-->
</body>
</html>
