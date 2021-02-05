<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Agricolart - A street market in the Dolomites where local high quality food is sold by farmers</title>
        <meta charset="UTF-8">

        <meta name="description" content="These is a street market in the Dolomites, were local high quality food is sold by farmers. The Products are: Honey, meat, cheese, mead, yogurt, ...">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{ asset('media/images/icons/LogoMarce.png') }}"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/themify/themify-icons.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/lightbox2/css/lightbox.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <!--===============================================================================================-->

        <!-- Matomo -->
        <script type="text/javascript">
            var _paq = window._paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function () {
                var u = "https://agricolart.matomo.cloud/";
                _paq.push(['setTrackerUrl', u + 'matomo.php']);
                _paq.push(['setSiteId', '1']);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = '//cdn.matomo.cloud/agricolart.matomo.cloud/matomo.js';
                s.parentNode.insertBefore(g, s);
            })();
        </script>
        <!-- End Matomo Code -->

    </head>
    <body class="animsition">

        <!-- Header -->


        <header>
            <!-- Header desktop -->
            <div class="wrap-menu-header gradient1 trans-0-4">
                <div class="container h-full">
                    <div class="wrap_header trans-0-3">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('media/images/icons/LogoMarce-blanch.png') }}" alt="Logo Agricolart" data-logofixed="{{ asset('media/images/icons/LogoMarce.png') }}">
                            </a>
                        </div>

                        <!-- Menu -->
                        <div class="wrap_menu p-l-45 p-l-0-xl">
                            <nav class="menu">
                                <ul class="main_menu">
                                    <li>
                                        <a href="/">{{ $navbarStart->de_text }}</a>
                                    </li>

                                    <!-- <li>
                                            <a href="menu.html">Menu</a>
                                    </li> -->

                                    <li>
                                        <a href="/about">{{ $navbarAboutus->de_text }}</a>
                                    </li>

                                    <li>
                                        <a href="/gallery">{{ $navbarGallery->de_text }}</a>
                                    </li>

                                    <!-- <li>
                                        <a href="contact.html">Contact</a>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>

                        <!-- Social -->
                        <div class="social flex-w flex-l-m p-r-20">
                            <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="customNav">
        </div>

        <!-- Sidebar -->
        <aside class="sidebar trans-0-4">
            <!-- Button Hide sidebar -->
            <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

            <!-- - -->
            <ul class="menu-sidebar p-t-95 p-b-70">
                <li class="t-center m-b-13">
                    <a href="/" class="txt19">Start</a>
                </li>

                <!-- <li class="t-center m-b-13">
                        <a href="menu.html" class="txt19">Menu</a>
                </li> -->

                <li class="t-center m-b-13">
                    <a href="/about" class="txt19">Über Uns</a>
                </li>

                <li class="t-center m-b-13">
                    <a href="/gallery" class="txt19">Gallerie</a>
                </li>

                <!-- <li class="t-center m-b-33">
                    <a href="contact.html" class="txt19">Contact</a>
                </li> -->
            </ul>

        </aside>




        @yield ('content')



        <!-- Footer -->
        <div class="end-footer bg2">
            <div class="container">
                <div class="p-t-22 p-b-22 txt12">
                    Copyright &copy; 2020 All rights reserved  |  This Website was created with <i class="fa fa-heart"></i> by <b>Alex Ploner</b>
                </div>
                <!-- <div class="flex-sb-m flex-w p-t-22 p-b-22"> -->
                <div class="txt23 p-r-20 p-t-5 p-b-5">   
                    Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </div>
                <!-- </div> -->
            </div>
        </div>


        <!-- Back to top -->
        <div class="btn-back-to-top bg0-hov" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="fa fa-angle-double-up" aria-hidden="true"></i>
            </span>
        </div>

        <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('vendor/select2/select2.min.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/slick-custom.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
        <script type="text/javascript">
            $('.parallax100').parallax100();
        </script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{ asset('vendor/lightbox2/js/lightbox.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('js/main.js') }}"></script>

        <script>
            /*[ Show/hide sidebar ]
             ===========================================================*/
            $('body').append('<div class="overlay-sidebar trans-0-4"></div>');
            var ovlSideBar = $('.overlay-sidebar');
            var btnShowSidebar = $('.btn-show-sidebar');
            var btnHideSidebar = $('.btn-hide-sidebar');
            var sidebar = $('.sidebar');

            $(btnShowSidebar).on('click', function () {
                $(sidebar).addClass('show-sidebar');
                $(ovlSideBar).addClass('show-overlay-sidebar');
            })

            $(btnHideSidebar).on('click', function () {
                $(sidebar).removeClass('show-sidebar');
                $(ovlSideBar).removeClass('show-overlay-sidebar');
            })

            $(ovlSideBar).on('click', function () {
                $(sidebar).removeClass('show-sidebar');
                $(ovlSideBar).removeClass('show-overlay-sidebar');
            })
        </script>

        @yield ('script')

    </body>
</html>

