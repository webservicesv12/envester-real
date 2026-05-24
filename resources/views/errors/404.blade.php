@extends('errors.app')

@php($page_title = "Page Not Found")

@push('content')
    <div class="before:fixed before:top-0 before:h-screen before:w-screen before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:transition-[opacity,height] before:duration-300 before:ease-in-out before:content-['']">
        <div class="container relative">
            <!-- BEGIN: Error Page -->
            <div class="flex h-screen flex-col items-center justify-center text-center lg:flex-row lg:text-left">
               
                <div class="mt-10 text-white lg:mt-0">
                    <div class="intro-x text-8xl font-medium">404</div>
                    <div class="intro-x mt-5 text-xl font-medium lg:text-3xl">Oops. This page has gone missing.</div>
                    <div class="intro-x mt-3 text-lg">You may have mistyped the address or the page may have moved.</div>
                    <a href="{{ url('/') }}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed intro-x mt-10 border-white px-4 py-3 text-white dark:border-darkmode-400 dark:text-slate-200">Back to Home</a>
                </div>
            </div>
            <!-- END: Error Page -->
        </div>
    </div>
@endpush
