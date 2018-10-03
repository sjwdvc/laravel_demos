<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Laravel demos - Landingspage</title>

    <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- original oneUO Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">

    <!-- END original oneUO Icons -->
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <!-- Page JS Plugins CSS go here -->

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/oneui.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<!-- default Login & register links -->
{{--@if (Route::has('login'))--}}
    {{--<div class="top-right links">--}}
        {{--@auth--}}
            {{--<a href="{{ url('/home') }}">Home</a>--}}
        {{--@else--}}
            {{--<a href="{{ route('login') }}">Login</a>--}}
            {{--<a href="{{ route('register') }}">Register</a>--}}
        {{--@endauth--}}
    {{--</div>--}}
{{--@endif--}}

<!-- Right Side Of Navbar -->
{{--<ul class="top-right navbar-nav ml-auto">--}}
    {{--<!-- Authentication Links -->--}}
    {{--@guest--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
        {{--</li>--}}
    {{--@else--}}
        {{--<li class="nav-item dropdown">--}}
            {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                {{--{{ Auth::user()->name }}--}}
            {{--</a>--}}

            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                    {{--{{ __('Logout') }}--}}
                {{--</a>--}}

                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--@csrf--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</li>--}}
    {{--@endguest--}}
{{--</ul>--}}



<!-- END default Login & register links -->


<!-- Page Container -->
<!--
    Available Classes:

    'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
    'header-navbar-transparent'  Enables a transparent header (if also fixed, it will get a solid dark background color on scrolling)
-->
<div id="page-container" class="sidebar-l sidebar-mini sidebar-o side-scroll header-navbar-fixed header-navbar-transparent">
    <!-- Sidebar -->
    @include('layouts.landing.nav')
    <!-- END Sidebar -->

    <!-- Header -->
    @include('layouts.landing.header')
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        @include('layouts.auth')

        <!-- Hero Content -->
        @include('layouts.landing.banner')
        <!-- END Hero Content -->

        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    @include('layouts.landing.footer')
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/oneui.min.js"></script>

<!-- Page JS Plugins + Page JS Code -->
</body>
</html>
