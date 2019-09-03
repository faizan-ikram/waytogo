<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Bookings</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Destino project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/offers_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/offers_responsive.css')}}">
</head>
<body>

<div class="super_container">

    <!-- Header -->

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
                                <li class="main_nav_item"><a href="home">Home</a></li>
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
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="DashBoard">My Bookings</a>
                                        <a class="dropdown-item" href="U_Logout">Logout</a>

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
                                <button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
                            </form>
                        </div>

                        <!-- Hamburger -->
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu_container menu_mm">

        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <div class="menu_search_form_container">
                    <form action="#" id="menu_search_form">
                        <input type="search" class="menu_search_input menu_mm">
                        <button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
                    </form>
                </div>
                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="welcome">Home</a></li>
                    <li class="menu_item menu_mm"><a href="about">About us</a></li>
                    <li class="menu_item menu_mm"><a href="offers">Offers</a></li>
                    <li class="menu_item menu_mm"><a href="companies">Company</a></li>
                    <li class="menu_item menu_mm"><a href="contact">Contact</a></li>
                </ul>

                <!-- Menu Social -->

                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="menu_copyright menu_mm">///</div>
            </div>

        </div>

    </div>

    <!-- Home -->

    <div class="home">
        <!-- Image by https://unsplash.com/@peecho -->
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_title">My Bookings</div>
                            <div class="home_breadcrumbs">
                                <ul class="home_breadcrumbs_list">
                                    <li class="home_breadcrumb"><a href="index">Home</a></li>
                                    <li class="home_breadcrumb">My Bookings</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Find Form -->

    <div class="find" style="width: 100%; margin-top: 0px;">
        <!-- Image by https://unsplash.com/@garciasaldana_ -->
        <div class="find_background_container prlx_parent">
            <div class="find_background prlx" style="background-image:url(images/find.jpg)"></div>
        </div>
        <!-- <div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="find_title text-center">Find the Adventure of a lifetime</div>
                </div>
                <div class="col-12">
                    <div class="find_form_container">
                        <form action="/search" method="post" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
                            {{csrf_field()}}
                            <div class="find_item">
                                <div>Destination:</div>
                                <select name="name" id="adventure" class="dropdown_item_select find_input">
                                    @foreach($result as $value)
                                        <option>{{$value['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="find_item">
                                <div>Departure</div>
                                <input type="date" class="destination find_input" required="required" name="departure" placeholder="Enter Min Price">

                            </div>
                            <div class="find_item">
                                <div>Min price</div>
                                <input type="text" class="destination find_input" required="required" name="min_price" placeholder="Enter Min Price">
                            </div>
                            <div class="find_item">
                                <div>Max price</div>
                                <input type="text" class="destination find_input" required="required" name="max_price" placeholder="Enter Max Price">
                            </div>
                            <button class="button find_button">Find</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div>
    <div class="row">
        <div class="col-12">
            <div class="find_title text-center" style="color:#0b0b0b">My Bookings</div>
        </div>
    <div class="container" style="background-color: white;">

        <br>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>User Name</th>
                <th>No Of Seats</th>
                <th>ID</th>
                <th>Name</th>
                <th>Days</th>

                <th>Budget</th>
                <th>Departure</th>
                <th>Image</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $post)
                <tr>
                    <td>{{$post['uname']}}</td>
                    <td>{{$post['seats']}}</td>
                    <td>{{$post['id']}}</td>
                    <td>{{$post['name']}}</td>
                    <td>{{$post['days']}}</td>

                    <td>{{$post['Budget']}}</td>
                    <td>{{$post['departure']}}</td>
                    <td> <img src="/Tours/Image/{{$post['Image']}}" width="75" height="75"> </td>
                    <td>
                        <form action="{{action('BookController@destroy', $post['id'])}}" method="get">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Cancel Booking</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
        <br>
        <br>
        <br>
    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_about">
                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                <div>WayToGo</div>
                                <div>travel agency</div>
                                <div class="logo_image"><img src="images/logo.png" alt=""></div>
                            </div>
                        </div>
                        <div class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel eleifend quis, tempus rut rum metus. Pellentesque ultricies enim eu quam fermentum hendrerit.</div>

                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_latest">
                        <div class="footer_title">Latest Booking</div>
                        <div class="footer_latest_content">

                            <!-- Footer Latest Post -->
                            <div class="footer_latest_item">
                                <div class="footer_latest_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@peecho"></div>
                                <div class="footer_latest_item_content">
                                    <div class="footer_latest_item_title"><a href="company">Summer</a></div>
                                    <div class="footer_latest_item_date">Jan 09, 2018</div>
                                </div>
                            </div>

                            <!-- Footer Latest Post -->
                            <div class="footer_latest_item">
                                <div class="footer_latest_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@sanfrancisco"></div>
                                <div class="footer_latest_item_content">
                                    <div class="footer_latest_item_title"><a href="company">A perfect vacation</a></div>
                                    <div class="footer_latest_item_date">Jan 09, 2018</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="tags footer_tags">
                        <div class="footer_title">Tags</div>
                        <ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
                            <li class="tag"><a href="#">travel</a></li>
                            <li class="tag"><a href="#">summer</a></li>
                            <li class="tag"><a href="#">Festival</a></li>
                            <li class="tag"><a href="#">beach</a></li>
                            <li class="tag"><a href="#">offer</a></li>
                            <li class="tag"><a href="#">vacation</a></li>
                            <li class="tag"><a href="#">trip</a></li>
                            <li class="tag"><a href="#">city break</a></li>
                            <li class="tag"><a href="#">adventure</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('plugins/easing/easing.js')}}"></script>
    <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('js/offers_custom.js')}}"></script>
</body>
</html>