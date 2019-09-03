<!DOCTYPE html>
<html lang="en">
<head>
	<title>Company</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Destino project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/news_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
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
								<li class="main_nav_item active"><a href="companies">Company</a></li>
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
							<div class="home_title">Company</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index">Home</a></li>
									<li class="home_breadcrumb">Company</li>
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

	<!-- News -->
	<div style="margin-top: 60px; font-size: 40px; font-weight: 400; font " class="col-md-6 offset-md-3">
		Our Partners
	</div>
	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-9">
					<div class="news_posts">
					@foreach($data as $value)
						<!-- News Post -->
						<div class="news_post">
							<div class="post_image">
								<img src="\TravelAgencies\Image\{{$value->Image}}" style="height: 120px ; width: 120px;" alt="">
								<a href="http://localhost:8000/offers3/{{$value->id}}"><div class="post_image_box text-center">View More</div></a>
							</div>
							<div class="post_title"><a href="#">{{$value->CompanyName}}</a></div>
							<div class="post_text">
								<p>{{$value->email}}</p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#">by company</a></li>
									<li>{{$value->created_at}}</li>
								</ul>
							</div>
						</div>
						<hr>
						@endforeach


					</div>
					<br>
					<br>
					<br>
					{{ $data->links() }}
				</div>

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						

						<!-- Featured Posts -->
						<div class="sidebar_featured">

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_1.jpg" alt=""></div>
								<div class="sidebar_featured_title"><a href="gallery">Top destinations in Pakistan</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li><a href="#">by admin</a></li>
										<li>january 31, 2018</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>




						</div>

						<!-- Offers -->
						<div class="sidebar_offers">

							<!-- Offer -->
							<div class="sidebar_offer">
								<div class="sidebar_offer_background" style="background-image:url(images/offer_1.jpg)"></div>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_destination">WayToGo</div>
									<div class="sidebar_offer_percent">Upto 10%</div>
									<div class="sidebar_offer_title">Avail Last Minute Offer</div>
									<div class="sidebar_offer_text">Come tour with us.</div>
									<div class="sidebar_offer_button"><a href="offers">See Offer</a></div>
								</div>
							</div>



						</div>

						<!-- Sidebar Quote -->
						<div class="sidebar_quote">
							<div class="quote_text"><span>“Traveling</span> – it leaves you speechless, then turns you into a storyteller.”</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	
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
						<div class="footer_about_text"></div>

					</div>
				</div>

				<!-- Footer Column -->
			
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news_custom.js"></script>
</body>
</html>