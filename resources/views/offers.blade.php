<!DOCTYPE html>
<html lang="en">
<head>
	<title>Offers</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Destino project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
	<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('styles/offers_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('styles/offers_responsive.css')}}">
</head>


<style>
	body {font-family: Arial, Helvetica, sans-serif;}

	/* The Modal (background) */
	.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 200px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content */
	.modal-content {
		position: relative;
		background-color: #fefefe;
		margin: auto;
		padding: 0;
		border: 1px solid #888;
		width: 80%;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		-webkit-animation-name: animatetop;
		-webkit-animation-duration: 0.4s;
		animation-name: animatetop;
		animation-duration: 0.4s
	}

	/* Add Animation */
	@-webkit-keyframes animatetop {
		from {top:-300px; opacity:0}
		to {top:0; opacity:1}
	}

	@keyframes animatetop {
		from {top:-300px; opacity:0}
		to {top:0; opacity:1}
	}

	/* The Close Button */
	.close {
		color: white;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}

	.modal-header {
		padding: 2px 16px;
		background-color: #5cb85c;
		color: white;
	}

	.modal-body {padding: 2px 16px;}

	.modal-footer {
		padding: 2px 16px;
		background-color: #5cb85c;
		color: white;
	}
</style>
<body>
@if(Session::has('flash_message'))
	<div class="alert alert-success">
		<strong> {!! session('flash_message') !!}</strong>
	</div>
@endif
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
								<div>Waytogo</div>
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
								<li class="main_nav_item active"><a href="offers">Offers</a></li>
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
					<li class="menu_item menu_mm"><a href="http://localhost:8000/index">Home</a></li>
					<li class="menu_item menu_mm"><a href="http://localhost:8000/about">About us</a></li>
					<li class="menu_item menu_mm"><a href="#">Offers</a></li>
					<li class="menu_item menu_mm"><a href="http://localhost:8000/companies">Company</a></li>
					<li class="menu_item menu_mm"><a href="http://localhost:8000/contact">Contact</a></li>
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

				<div class="menu_copyright menu_mm">,,.,;//////;</div>
			</div>

		</div>

	</div>

	<!-- Home -->
	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/offers.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Offers</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index">Home</a></li>
									<li class="home_breadcrumb">Offers</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Find Form -->

	<div class="find"  style="width: 100%; margin-top: -2px;">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="find_background_container prlx_parent">
			<div class="find_background prlx" style="background-image:url({{asset('images/find.jpg')}})"></div>
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

	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Top destinations in Gilgit</h2>
						<div>take a look at these offers</div>
					</div>
				</div>
			</div>
			<div class="row filtering_row">
				<div class="col">
					<div class="sorting_group_1">
						<ul class="item_sorting">
							<li>
								<span class="sorting_text">Filter by</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Name</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "discount" }'><span>Discount</span></li>
								</ul>
							</li>
					
							<li>
								<span class="sorting_text">Name</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Name</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">Price</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">Discount</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "discount" }'><span>Discount</span></li>
								</ul>
							</li>
							
						</ul>
					</div>
					<div class="sorting_group_2 clearfix">
						<div class="sorting_icons clearfix">
							<div class="detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
							<div class="box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="items item_grid clearfix">

						<!-- Item -->
						@foreach($data as $value)
						<div class="item clearfix rating_5">
							<div class="item_image"><img src="\Tours\Image\{{$value->Image}}" width="170" height="80" alt=""></div>
							<div class="item_content">
								<div class="item_title">{{$value->name}} </div>
								<div class="item_price"> {{$value->Budget}}</div>
								<div class="item_days">days: {{$value->days}}</div>
								<ul>
									<li>1 person</li>
									<li>4 nights</li>
									<li>3 star hotel</li>
								</ul>
								
								<div class="item_discount">Discount= {{$value->discount}}%</div>
								<div class="item_more_link">	<a data-modal="modal{{$value->id}}" class="bt" >Read More</a></div>
								------------
							</div>



						</div>

							<!--popup-->
							<!-- The Modal -->
							<div id="modal{{$value->id}}" class="modal" style="margin-top: -80px;">

								<!-- Modal content -->
								<div class="modal-content">
									<div class="modal-header bg-dark" style="text-align: center;">
										<div  class='col-12 modal-title text-center'>
											<h2 >{{$value->name}}</h2>
										</div>
										<span style="align-items: right" class="close">&times;</span>
									</div>
									<div class="modal-body text-body" style="text-align: center";>
										<p><img src="\Tours\Image\{{$value->Image}}" width="150" height="100" alt=""></p>
										<p class="text-dark"><b>Days: </b>{{$value->days}}</p>
										<p class="text-dark"><b>Departure date: </b>{{$value->departure}}</p>
										<p class="text-dark"><b>Budget: </b>{{$value->Budget}}</p>
										<p class="text-dark"><b style="font-size: larger">Details:</b><br>
											{{$value->Details}}</p>
										<p><div class="float-left">Total Seats = {{$value->NSA}} </div>
										<div class="float-right">Remaining Seats = {{$value->NSA -$value->NRP}} </div></p>
									</div>
									<div style="align-items: normal" class="modal-footer bg-dark">


										<form method="post" action="/Book/{{ $value->id }}">
											{{csrf_field()}}
											<div class="form-group row">

												
												<div class="col-md-10">
													
													<input type="number" class="form-control form-control-sm" id="lgFormGroupInput" placeholder="Number of seats" name="seats">
												</div>
											</div>
											<button class="btn btn-sm btn-light">Book Now</button>

										</form>


									</div>
								</div>

							</div>
							<!--End Of PopUp-->


						@endforeach

					</div>
				</div>
			</div>



			{{ $data->links() }}
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
								<div>Waytogo</div>
								<div>travel agency</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>
						<div class="footer_about_text"></div>

					</div>
				</div>

				<!-- Footer Column -->
				
				<!-- Footer Column -->
				
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
<script>

    var modalBtns = [...document.querySelectorAll(".bt")];
    modalBtns.forEach(function(btn){
        btn.onclick = function() {
            var modal = btn.getAttribute('data-modal');
            document.getElementById(modal).style.display = "block";
        }
    });

    var closeBtns = [...document.querySelectorAll(".close")];
    closeBtns.forEach(function(btn){
        btn.onclick = function() {
            var modal = btn.closest('.modal');
            modal.style.display = "none";
        }
    });

    window.onclick = function(event) {
        if (event.target.className === "modal") {
            event.target.style.display = "none";
        }
    }
</script>
</body>
</html>