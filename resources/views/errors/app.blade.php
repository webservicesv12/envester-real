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

@stack('content')

<!-- BEGIN: Vendor JS Assets-->
<script src="{{asset('assets/backend/dist/js/vendors/dom.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/tailwind-merge.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/lucide.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/vendors/modal.js')}}"></script>
<script src="{{asset('assets/backend/dist/js/components/base/theme-color.js')}}"></script>
<script src="{{asset('assets/backend/   dist/js/components/base/lucide.js')}}"></script> <!-- END: Vendor JS Assets-->
<!-- BEGIN: Pages, layouts, components JS Assets-->
<!-- END: Pages, layouts, components JS Assets-->
</body>
</html>
