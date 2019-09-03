<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Waytogo') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link href="{{asset('plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css') }}">
    
</head>
<body style="background-image:url({{asset('images/k2elements.jpg') }})">
    <div id="app">
        <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_container d-flex flex-row align-items-center justify-content-start">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                <div>WayToGo</div>
                                <div>travel agency</div>
                                <div class="logo_image"><img src="images/logo.png" alt=""></div>
                            </div>
                        </div>

                        <!-- Main Navigation -->
                        <nav class="main_nav ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item active"><a href="#">Home</a></li>
                                <li class="main_nav_item"><a href="about">About us</a></li>
                                <li class="main_nav_item"><a href="gallery">Gallery</a></li>
                                <li class="main_nav_item"><a href="offers">Offers</a></li>
                                <li class="main_nav_item"><a href="companies">Company</a></li>
                                <li class="main_nav_item"><a href="contact">Contact</a></li>
                                <?php
                                if(Auth::user())
                                {
                                 ?>
                                <li class="main_nav_item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{Auth::user()->name}}
                                    </a>
                                    <div class="dropdown-menu" style="background-color: rgb(19, 26, 47);" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" style="line-height: 60px; background-color: rgb(19, 26, 47);" href="DashBoard">My Bookings</a>
                                        <a class="dropdown-item" style="line-height: 60px; background-color: rgb(19, 26, 47);" href="U_Logout">Logout</a>
                                    </div>
                                </li>

                                <?php
                                }
                                else
                                    {
                                ?>
                                <li class="main_nav_item"><a href="login">Login</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>

                        <!-- Search -->
                        <div class="search">
                            <form action="#" class="search_form">
                                <input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
                                <button type="submit" class="search_button ml-auto ctrl_class"><img src="{{asset('images/search.png') }}" alt=""></button>
                            </form>
                        </div>

                        <!-- Hamburger -->
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </header>

        <main class="py-4" style="margin-top: 200px;">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->

    <script src="{{asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{asset('styles/bootstrap4/popper.js') }}"></script>
    <script src="{{asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{asset('plugins/easing/easing.js') }}"></script>
    <script src="{{asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{asset('js/custom.js') }}"></script>
</body>
</html>
