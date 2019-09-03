<!DOCTYPE html>
<html lang="en">
<head>

	<title>{{$tour->CompanyName}}</title>

  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="{{asset('subdomain/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('subdomain/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('subdomain/css/loaders.css')}}"/>
  	<link rel="stylesheet" href="{{asset('subdomain/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('subdomain/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('subdomain/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{asset('subdomain/css/nivo-lightbox.css')}}">
  	<link rel="stylesheet" href="{{asset('subdomain/css/nivo_themes/default/default.css')}}">
  	<link rel="stylesheet" href="{{asset('subdomain/css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('subdomain/css/contact-input-style.css')}}">

  	
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
		color: black;
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
		background-color: #e4e4e4;
		color: white;
	}

	.modal-body {padding: 2px 16px;}

	.modal-footer {
		padding: 2px 16px;
		background-color: #e4e4e4;
		color: white;
	}
</style>
<body>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
 <div class="loader loader-bg">
        <div class="loader-inner ball-pulse-rise">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>

<!------------Static navbar ------------>
    <nav class="navbar navbar-default top-bar affix" data-spy="affix" data-offset-top="250" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{{$tour->CompanyName}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="http://localhost:8000/home">WayToGo</a></li>
            <li><a href="#banner">Home</a></li>
              <li><a href="#todo">Bookings</a></li>
              <li><a href="#video-sec">Video</a></li>
              <li><a href="#location">Tours</a></li>
              <li><a href="#hotels">Hotels</a></li>
              <li><a href="#contact-sec">Contact us</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    
<!------------ Home Banner ------------>
<section id="banner" class="parallax">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h1 class="wow fadeInUp" data-wow-delay="1s">Dream Vacations</h1>
              <p class="wow fadeInUp" data-wow-delay="1s">The world is a book, and those who do not travel read only a page.<br>
                  <small>For once you have tasted flight you will walk the earth with your eyes turned skywards, for there you have been and there you will long to return.</small>
                  </p>
              <a href="#todo" class="wow fadeInUp btn btn-transparent-white btn-capsul btn-lg smoothScroll" data-wow-delay="1.3s">Discover Now</a>
          </div>

      </div>
    </div>
</section>


<!------------ todo Section ------------>
<section id="todo" class="parallax">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
          <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
            <h2>Bookings<small>Preparing for a Road Trip Checklist</small></h2>
          </div>
      </div>

      
       

        <br>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>User Name</th>
                
                <th>Tour Name</th>
                
                <th>Image</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $post)
                <tr>
                    <td>{{$post['uname']}}</td>
                   
                    
                    <td>{{$post['name']}}</td>
                   
                    
                    <td> <img src="/Tours/Image/{{$post['Image']}}" width="75" height="75"> </td>
                   
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
        </div>
     
      

    
</section>


<!------------ Video section ------------>
<section id="video-sec" class="parallax">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h2 class="wow fadeInUp" data-wow-delay="0.5s">Watch the video<small>All journeys have secret destinations of which the traveler is unaware.</small></h2>
              <a class="popup-youtube" href="https://www.youtube.com/watch?v=b1hT2yYo80k" ><i class="fa fa-play"></i></a>
              <small><em>Video by: Alion Gang</em></small>
          </div>

      </div>
    </div>
</section>

<!------------ Menu section ------------>
<section id="location" class="parallax">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="1s">
            <h2>Tours <small>Every day is a journey, and the journey itself is home.</small></h2>
        </div>
      </div>

      <div class="col-md-6 col-sm-12" style="background-color: #e4e4e4">
      	@foreach($tour1 as $value)
        <div class="media wow fadeInUp" data-wow-delay="0.5s" style="background-color: #e4e4e4">
          <div class="media-object pull-left">
            <img src="\Tours\Image\{{$value->Image}}" class="img-responsive" alt="Food Menu"
            style="height: 200px; width: 200px;">
          </div>
          <div class="media-body">
            <h3 class="media-heading">{{$value->name}}</h3>
            <p>{{$value->Details}}</p>
              <a  data-modal="modal{{$value->id}}" id="bt" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>
							<!--popup-->
							<!-- The Modal -->
							<div id="modal{{$value->id}}" class="modal fixed-top" style="margin-top: -80px;">

								<!-- Modal content -->
								<div class="modal-content">
									<div class="modal-header bg-dark" style="text-align: center; background-color: #e4e4e4">
										<div  class='col-12 modal-title text-center'>
											<h2 >{{$value->name}}</h2>
										</div>
										<button style="align-items: right; height: 10px; width: 10px;" class="close">&times;</button>
									</div>
									<div class="modal-body text-body" style="text-align: center";>
										<p><img src="\Tours\Image\{{$value->Image}}" width="150" height="100" alt=""></p>
										<p class="text-dark"><b>Days: </b>{{$value->days}}</p>
										<p class="text-dark"><b>Departure date: </b>{{$value->departure}}</p>
										<p class="text-dark"><b>Budget: </b>{{$value->Budget}}</p>
										<p class="text-dark"><b style="font-size: larger">Details:</b></br>
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
											<button class="btn btn-sm btn-primary">Book Now</button>

										</form>


									</div>
								</div>

							</div>
							<!--End Of PopUp-->
  		@endforeach

      </div>

  

    </div>
  </div>
  {{ $tour1->links() }}
</section>


<!------------ Gallery section ------------>
<section id="hotels" class="parallax">
  <div class="container">
    <div class="row">

      <div class="col-md-12">

       <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
         <div class="wow fadeInUp section-title" data-wow-delay="1s">
            <h2>Best Hotels out there<small>The great advantage of a hotel is that it is a refuge from home life.</small></h2>
        </div>
      </div>
        
          <!-- iso section -->
          <div class="iso-section wow fadeInUp text-center" data-wow-delay="0.5">

            		<ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".bookings">Booking.com</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".sastaticket">Sastaticket</a></li>
                        

  <li><a href="#" class="opc-main-bg" data-filter=".checkin">Checkin</a></li>
                        
                    </ul>

                    <!-- iso box section -->

                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s" style="background-color: grey;">
                      <div class="iso-box-wrapper col4-iso-box">

                        <div class="iso-box sastaticket col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="https://www.sastaticket.pk/hotels.aspx" data-lightbox-gallery="food-gallery">
                              <img src="{{asset('subdomain/images/hotel-01.png')}}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>SastaTicket</h3>
                        </div>

                        <div class="iso-box bookings col-md-4 col-sm-6" style="height:20px:">
                          <div class="gallery-thumb">
                            <a href="https://www.booking.com/country/pk.html" data-lightbox-gallery="food-gallery">
                              <img height="92.938" width="350" src="{{asset('subdomain/images/hotel-02.png')}}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Booking.com</h3>
                        </div>

                        <div class="iso-box checkin col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="https://checkin.pk/" data-lightbox-gallery="food-gallery">
                              <img height="92.938" width="350" src="{{asset('subdomain/images/hotel-03.png')}}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Checkin</h3>
                        </div>

                        

                       </div>
                    </div>

          </div>

      </div>

    </div>
  </div>
</section>

<!------------ Contact section ------------>
<section id="contact-sec" class=" content">
  <div class="overlay"></div>
	<div class="container form-block">
              <form method="post" action="/send_message/{{$tour->id}}">
                  {{csrf_field()}}
                <div class="row">
                <div class="col-lg-12 text-center"><h2>Get in Touch<small>Stay in touch for more information</small></h2></div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" name="name" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Name</span>
					</label>
				</span>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" name="phone" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Phone</span>
					</label>
				</span>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" name="email" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Email</span>
					</label>
				</span>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <span class="t-area input-hoshi">
                <input class="input_field input_field-hoshi" name="message" type="text" id="input-4" />
						<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Message</span>
					</label>
				</span>
                    <button type="submit" class="btn btn-capsul btn-transparent-white">Send</button>

                </div>
                
                </div>
              </form>
                </div>
</section>





<script src="{{asset('subdomain/js/jquery.js')}}"></script>
<script src="{{asset('subdomain/js/bootstrap.min.js')}}"></script>
<script src="{{asset('subdomain/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('subdomain/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('subdomain/js/isotope.js')}}"></script>
<script src="{{asset('subdomain/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('subdomain/js/nivo-lightbox.min.js')}}"></script>
<script src="{{asset('subdomain/js/jquery.parallax.js')}}"></script>
<script src="{{asset('subdomain/js/smoothscroll.js')}}"></script>
<script src="{{asset('subdomain/js/wow.min.js')}}"></script>
<script src="{{asset('subdomain/js/core.js')}}"></script>
<script>

    var modalBtns = [...document.querySelectorAll("#bt")];
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