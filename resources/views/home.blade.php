<!DOCTYPE html>
<html lang="en">
<head>
<title>WayToGo</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
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

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="height: 82%; background-image:url(images/elements.jpg)"></div>

	</div>

	<!-- Find Form -->

	<div class="find" style="margin-top: -194px;">
		
		<div>
			<div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12" style="padding-top: 60px;">
					<div class="find_title text-center">Find the Adventure of a lifetime</div>
				</div>
				<div class="col-12">
					<div class="find_form_container">
						<form action="/search" method="post" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							{{csrf_field()}}
							<div class="find_item">
								<div>Destination:</div>
								<select name="name" id="adventure" class="dropdown_item_select find_input">
									@foreach($data1 as $value)
										<option>{{$value->name}}</option>
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

	<!-- Top Destinations -->

	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">0
						<h2>Top destinations in <br>Northern Pakistan<br/> </h2>
						<div>Take a look at these offers</div>
					</div>
				</div>
			</div>
			<div class="row top_content">

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img height="167px" width="262px" src="images/Naran-valley1.jpg" alt="https://unsplash.com/@sgabriel"></div>
							<div class="top_item_content">
								<div class="top_item_price">From Rs:7000</div>
								<div class="top_item_text">Naran valley,Pakistan</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/kashmir1.jpg" alt="https://unsplash.com/@jenspeter"></div>
							<div class="top_item_content">
								<div class="top_item_price">From $8000</div>
								<div class="top_item_text">Azad Kashmir,Pakistan</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">


					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/kashmir1.jpg" alt="https://unsplash.com/@jenspeter"></div>
							<div class="top_item_content">
								<div class="top_item_price">From $8000</div>
								<div class="top_item_text">Chitral,Pakistan</div>
							</div>

						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/swat1.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
							<div class="top_item_content">
								<div class="top_item_price">From $10000</div>
								<div class="top_item_text">Swat,Pakistan</div>
							</div>
						</a>	
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Last -->
	<div class="row">
		<div class="col">
			<div class="section_title text-center">
				<h2>Special offers</h2>
				<div>take a look at these offers</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<div class="last">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="last_background parallax-window" data-parallax="scroll" data-image-src="images/last.jpg" data-speed="0.8"></div>

		<div class="container">
			<div class="row">
				<div class="last_logo"><img src="images/last_logo.png" alt=""></div>
				@foreach($data as $value)
				<div class="col-lg-6 last_col">
					<div class="last_item">
						<div class="last_item_content">
							<div class="last_subtitle">{{$value->name}}</div>
							<div class="last_percent">{{$value->discount}}%</div>
							<div class="last_title">Last Minute Offer</div>
							<div class="last_text">{{$value->Details}}</div>
							<div class="button last_button"><a href="offers2/{{$value->id}}">See Offer</a></div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

		</div>

	</div>
	{{ $data->links() }}

	<!-- Video -->

	
	<!-- Popular -->

	
	<!-- Special -->

	<div class="special">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Special Places</h2>
						<div>take a look at these places</div>
					</div>
				</div>
			</div>
		</div>
		<div class="special_content">
			<div class="special_slider_container">
				<div class="owl-carousel owl-theme special_slider">
					
					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item">
							<div class="special_item_background"><img src="images/special_1.jpg" alt="https://unsplash.com/@garciasaldana_"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="offers.html">Gwadar</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_2.jpg" alt="https://unsplash.com/@varshesh"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Culture</div>
								<div class="special_title"><a href="offers.html">Lahore</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_3.jpg" alt="https://unsplash.com/@paulgilmore_"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="offers.html">Hunza</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="offers.html">Karachi</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_5.jpg" alt="https://unsplash.com/@dnevozhai"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="offers.html">Makran costal highway</a></div>
							</div>
						</div>
					</div>

				</div>

				<div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
					<img src="images/special_slider.png" alt="">
				</div>
			</div>
		</div>
	</div>

	

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
						<div class="footer_about_text">Copyrights are reserved by WayToGo.</div>
						>
					</div>
				</div>

				<!-- Footer Column -->

							<!-- Footer Latest Post -->

				<!-- Footer Column -->
				
			

			</div>
		</div>
	</footer>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPAXdx0-ZoxDaa8pGK5YIP6TcuEDwwYWA&callback=myMap"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>