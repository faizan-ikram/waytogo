<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="WayToGo project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
								<li class="main_nav_item active"><a href="contact">Contact</a></li>
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
					<li class="menu_item menu_mm"><a href="index">Home</a></li>
					<li class="menu_item menu_mm"><a href="about">About us</a></li>
					<li class="menu_item menu_mm"><a href="offers">Offers</a></li>
					<li class="menu_item menu_mm"><a href="companies">Company</a></li>
					<li class="menu_item menu_mm"><a href="#">Contact</a></li>
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
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Contact</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.html">Home</a></li>
									<li class="home_breadcrumb">Contact</li>
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


	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_title">Get in touch</div>
					<div class="contact_subtitle">say hello</div>
				</div>
			</div>
			@if (Session::has('message'))
				<div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif
			<div class="row contact_content">
				<div class="col-lg-5">
					<div class="contact_text">
						<p>For queries please leave us a message or contact us by sending Email</p>
					</div>
					<div class="contact_info">
						<div class="contact_info_box">i</div>
						<div class="contact_info_container">
							<div class="contact_info_content">
								<ul>
									<li>Address: House abc A.I.T,Lahore</li>
									<li>Phone: +92 345 7953 453</li>
									<li>Email: waytogo@gmail.com</li>
								</ul>
							</div>
							<div class="contact_info_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<form action="send_message_admin" method="post" id="contact_form" class="clearfix">
							{{csrf_field()}}
							<input name="name" id="contact_input_name" class="contact_input contact_input_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
							<input name="email" id="contact_input_email" class="contact_input contact_input_email" type="text" placeholder="E-mail" required="required" data-error="E-mail is required.">
							<input name="subject" id="contact_input_subject" class="contact_input contact_input_subject" type="text" placeholder="Subject">
							<input name="message" id="contact_input_message" class="contact_message_input contact_input_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message.">
							<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">Send</button>
						</form>
					</div>
				</div>
			</div>
			<div class="row contact_map">

			
			<!-- Google Map -->

<div id="googleMap" style="width:50%;height:330px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(31.582045,74.329376),
    zoom:10,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPAXdx0-ZoxDaa8pGK5YIP6TcuEDwwYWA&callback=myMap"></script>
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
<script src="js/contact_custom.js"></script>

</body>
</html>