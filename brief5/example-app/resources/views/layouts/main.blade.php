<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Homeradar - Real Estate Listing Template')</title>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/dashboard-style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="loader-inner">
            <svg>
                <defs>
                    <filter id="goo">
                        <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
                        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
                        <fecomposite in="SourceGraphic" in2="gooey" operator="atop"/>
                    </filter>
                </defs>
            </svg>
        </div>
    </div>
    <!--loader end-->
    <!-- Main -->
    <div id="main">
        @include('partials.headerDashboard')

        <!-- wrapper -->
            @include('partials.dashboardMenu')

            @yield('content')

        <!-- @include('partials.footerDashboard') -->
    </div>
    <!-- Main end -->

    <!--=============== scripts  ===============-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
