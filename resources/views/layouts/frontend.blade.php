<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link type="image/x-icon" href="{{ asset('frontedns/images/fav-icon.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('frontends/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontends/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontends/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontends/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontends/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontends/css/responsive.css') }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-142494086-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-142494086-2');
    </script>
</head>

<body data-new-gr-c-s-check-loaded="14.1007.0" data-gr-ext-installed="">

    <!-- Start preloader -->
    <div id="preloader" style="display: none;">
        <label>Loading</label>
    </div>
    <!-- End preloader -->

    @include('frontend.includes.header-1')

    @yield('content')

    @include('frontend.includes.footer')

    <script src="{{ asset('frontends/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontends/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontends/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontends/js/script.js') }}"></script>


    <div id="overlay_padjipbilemhhpppjmkabednoeiaaaac"
        style="position: fixed; width: 100%; height: 100%; top: 0; display: none; left: 0; right: 0; bottom: 0; background-color: rgba(0,0,0,0.5); z-index: 9999999; cursor: pointer; "
        onclick="this.style.display='none'"></div>
</body>

</html>
