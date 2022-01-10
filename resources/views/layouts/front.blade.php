<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title -->
    <title>Skills Bank</title>

	<link rel="stylesheet" href="{{ asset('front_assets/css/owl.carousel.css')}}">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="{{ asset('front_assets/css/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/meanmenu.css')}}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/video.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/progess.css')}}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/responsive.css')}}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/hover-min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/tooltipster.main.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/tooltipster-sideTip-borderless.min.css')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	@yield('style')

</head>
<body>

	<!-- Start of Header section
		============================================= -->
		<header class="header_3">
			<div class="container">
				<div class="navbar-default">

					<div class="nav-menu-4">
						<div class=" float-right ul-li">
							<ul class="">
                                <li class="genius-btn gradient-bg br-30 text-center text-uppercase bold-font book-btn"><a href="{{route('public.calendar')}}">BOOK NOW</a></li>
								<li class="menu-item-has-children ul-li-block">

									@if (LaravelLocalization::getCurrentLocale() == 'eg')
										<a href="#"><img src="{{asset('front_assets/img/flags/egy.svg')}}" style="width: 20px;border-radius: 50%;"></a>
									@elseif (LaravelLocalization::getCurrentLocale() == 'sa')  
										<a href="#"><img src="{{asset('front_assets/img/flags/ksa.png')}}" style="width: 20px;border-radius: 50%;"></a>
									@endif

									<ul class="sub-menu" style="width: 100px;left: -40px;">
										<li><a href="{{ LaravelLocalization::getLocalizedURL('eg', null, [], true) }}"><img src="{{asset('front_assets/img/flags/egy.svg')}}" style="width: 20px;border-radius: 50%;"> <strong>Egypt</strong></a></li>
										<li><a href="{{ LaravelLocalization::getLocalizedURL('sa', null, [], true) }}"><img src="{{asset('front_assets/img/flags/ksa.png')}}" style="width: 20px;border-radius: 50%;"> <strong>KSA</strong></a></li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<nav class="navbar-menu float-left">
							<div class="nav-menu ul-li">
								<ul class="quick-menu">
									<li class="mr-2">
										<a class="p-0" href="{{route('welcome')}}">
											<img src="{{asset('front_assets/img/logo/logo-white.png')}}" style="width: 80px;">
										</a>
									</li>
									<li class="menu-item-has-children ul-li-block">
										<a href="#">Get To Know Us</a>
										<ul class="sub-menu">
											<li><a href="{{route('about')}}">About Skills Bank</a></li>
											<li><a href="{{route('about')}}#founder-word">Word By The Founder</a></li>
											<li><a href="{{route('team')}}">Meet The Team</a></li>
											<li><a href="{{route('welcome')}}#why-choose">Why SB</a></li>
											<li><a href="{{route('clients')}}">Clients</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children ul-li-block">
										<a href="#">Solutions</a>
										<ul class="sub-menu">
											<li><a href="{{route('practical')}}">Practical Training</a></li>
											<li><a href="{{route('virtual')}}">Virtual Training</a></li>
											<li><a href="{{route('videos')}}">Customized E-learning Videos</a></li>
											<li><a href="{{route('designing')}}">Designing Learning Journey</a></li>
											<li><a href="{{route('assessments')}}">Assessments</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children ul-li-block">
										<a href="#">Learning Approach</a>
										<ul class="sub-menu">
											<li><a href="{{route('learningApproach')}}">Blended Learning Approach</a></li>
											<li><a href="{{route('learningTree')}}">SB Learning Tree</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children ul-li-block">
										<a href="#">Workshops</a>
										<ul class="sub-menu">
											<li><a href="{{route('workshop')}}">What's Different?</a></li>
											<li><a href="{{route('public.calendar')}}">Public Calendar</a></li>
										</ul>
									</li>
									<li><a  href="{{route('collaborations')}}">Collaborations</a></li>
									<li><a  href="{{route('reachout')}}">Reach Out</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<div class="altranative-header ul-li-block">
			<div id="menu-container">

				<div class="menu-wrapper">
					<div class="row">

						<div class="logo-area text-left">
							<a href="{{route('welcome')}}">
								<img src="{{asset('front_assets/img/logo/logo-white.png')}}" alt="Logo" style="width: 100px;"> 
							</a>
						</div>

						<button type="button" class="alt-menu-btn float-left ml-auto">
							<span class="hamburger-menu"></span>
						</button>

					</div>
				</div>

				<ul class="menu-list accordion" style="left: -100%;">
					<li class="card">
						<a class="menu-link" href="{{route('welcome')}}">Home</a>
					</li>
					
					<!-- About - start -->
					<li class="card active">
						<div class="card-header" id="heading1">
							<button class="menu-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
								Get To Know Us
							</button>
						</div>
						<ul id="collapse1" class="submenu collapse" aria-labelledby="heading1" data-parent="#accordion" style="">
							<li><a href="{{route('about')}}">About The Company</a></li>
							<li><a href="{{route('about')}}#founder-word">Word By The Founder</a></li>
							<li><a href="{{route('team')}}">Meet The Team</a></li>
							<li><a href="{{route('welcome')}}#why-choose">Why SB</a></li>
							<li><a href="#">Clients</a></li>
						</ul>
					</li>
					<!-- About - end -->

					<!-- Solutions - start -->
					<li class="card">
						<div class="card-header" id="headingtwo">
							<button class="menu-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
								Solutions
							</button>
						</div>
						<ul id="collapsetwo" class="submenu collapse" aria-labelledby="headingtwo" data-parent="#accordion">
							<li><a href="{{route('practical')}}">Practical Training</a></li>
							<li><a href="{{route('virtual')}}">Virtual Training</a></li>
							<li><a href="{{route('videos')}}">Customized E-learning Videos</a></li>
							<li><a href="{{route('designing')}}">Designing Learning Journey</a></li>
							<li><a href="{{route('assessments')}}">Assessments</a></li>
						</ul>
					</li>
					<!-- Solutions - end -->
					
					<!-- Learning - start -->
					<li class="card">
						<div class="card-header" id="headingthree">
							<button class="menu-link" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
								Learning Approach
							</button>
						</div>
						<ul id="collapsethree" class="submenu collapse" aria-labelledby="headingthree" data-parent="#accordion" style="">
							<li><a href="#">Blended Learning Approach</a></li>
							<li><a href="{{route('learningTree')}}">SB Learning Tree</a></li>
						</ul>
					</li>
					<!-- Learning - end -->
					
					<!-- Workshops - start -->
					<li class="card">
						<div class="card-header" id="headingfour">
							<button class="menu-link" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
								Workshops
							</button>
						</div>
						<ul id="collapsefour" class="submenu collapse" aria-labelledby="headingfour" data-parent="#accordion" style="">
							<li><a href="{{route('workshop')}}">What's Different?</a></li>
							<li><a href="{{route('public.calendar')}}">Public Calendar</a></li>
						</ul>
					</li>
					<!-- Workshops - end -->

					<li class="card">
						<a class="menu-link" href="{{route('collaborations')}}">Collaborations</a>
					</li>
					<li class="card">
						<a class="menu-link" href="{{route('reachout')}}">Reach Out</a>
					</li>
					<!-- pages - end -->

				</ul>
			</div>
		</div>
 	<!-- Start of Header section
 		============================================= -->

    
        @yield('content')


	<!-- Start of footer section
		============================================= -->
		<footer>
			<section id="footer-area" class="footer-area-section">
				<div class="container">
					<div class="footer-content pb10">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-widget">
									<div class="footer-logo mb35 text-center">
										<img src="{{asset('front_assets/img/logo/logo-white.png')}}" alt="" style="width: 150px;">
									</div>
									<div class="footer-about-text">
										<p>We take our mission of increasing global access to quality education seriously. We connect learners to the best institutions from around the world.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<div class="footer-menu ul-li-block">
										<h2 class="widget-title"></h2>
										<ul>
											<li><a href="{{route('about')}}"><i class="fas fa-caret-right"></i>About The Company</a></li>
											<li><a href="{{route('team')}}"><i class="fas fa-caret-right"></i>Meet The Team</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Learning Approach</a></li>
											<li><a href="{{route('learningTree')}}"><i class="fas fa-caret-right"></i>SB Learning Tree</a></li>
											<li><a href="{{route('workshop')}}"><i class="fas fa-caret-right"></i>Workshops Details</a></li>
											<li><a href="{{route('public.calendar')}}"><i class="fas fa-caret-right"></i>Public Calendar</a></li>
											<li><a href="{{route('collaborations')}}"><i class="fas fa-caret-right"></i>Collaborations</a></li>
											<li><a href="{{route('reachout')}}"><i class="fas fa-caret-right"></i>Reach Out</a></li>
										</ul>
									</div>
								</div>
								<div class="footer-menu ul-li-block">
									<h2 class="widget-title"></h2>
									<ul>
										<li><a href="{{route('practical')}}"><i class="fas fa-caret-right"></i>Practical Training</a></li>
										<li><a href="{{route('virtual')}}"><i class="fas fa-caret-right"></i>Virtual Training</a></li>
										<li><a href="{{route('videos')}}"><i class="fas fa-caret-right"></i>E-learning Videos</a></li>
										<li><a href="{{route('designing')}}"><i class="fas fa-caret-right"></i>Designing Learning Journey</a></li>
										<li><a href="{{route('assessments')}}"><i class="fas fa-caret-right"></i>Assessments</a></li>
										<li><a href="{{route('blogs')}}"><i class="fas fa-caret-right"></i>Blog</a></li>
										<li><a href="{{route('careers')}}"><i class="fas fa-caret-right"></i>Careers</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="footer-widget">
									<div class="footer-menu ul-li-block ml-0">
										<h2 class="widget-title"></h2>
										<ul>
											<li><a href="#"><i class="fas fa-map-marker-alt"></i>{{$setting->address}}</a></li>
											<li><a href="#"><i class="fas fa-envelope"></i>{{$setting->email}}</a></li>
											<li><a href="#"><i class="fas fa-phone"></i>{{$setting->phone}}</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div> 
					<!-- /footer-widget-content -->
					<div class="footer-social-subscribe mb65">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-social ul-li">
									<h2 class="widget-title">Social Network</h2>
									<ul>
										@foreach ($socials as $social)

											@if ($social->platform == 'Facebook' && $social->off == 1)
												<li><a href="{{$social->link}}" target="_blank" title="{{$social->platform}}"><i class="fab fa-facebook-f"></i></a></li>
											@endif

											@if ($social->platform == 'Twitter' && $social->off == 1)
												<li><a href="{{$social->link}}" target="_blank" title="{{$social->platform}}"><i class="fab fa-twitter"></i></a></li>
											@endif

											@if ($social->platform == 'Instagram' && $social->off == 1)
												<li><a href="{{$social->link}}" target="_blank" title="{{$social->platform}}"><i class="fab fa-instagram"></i></a></li>
											@endif

											@if ($social->platform == 'Linkedin' && $social->off == 1)
												<li><a href="{{$social->link}}" target="_blank" title="{{$social->platform}}"><i class="fab fa-linkedin-in"></i></a></li>
											@endif

											@if ($social->platform == 'Youtube' && $social->off == 1)
											<li><a href="{{$social->link}}" target="_blank" title="{{$social->platform}}"><i class="fab fa-youtube"></i></a></li>
											@endif

											@if ($social->platform == 'Pinterest' && $social->off == 1)
											<li><a href="{{$social->link}}" target="_blank" title="{{$social->platform}}"><i class="fab fa-pinterest-p"></i></a></li>
											@endif

											@if ($social->platform == 'Telegram' && $social->off == 1)
											<li><a href="{{$social->link}}" target="_blank" title="{{$social->platform}}"><i class="fab fa-telegram"></i></a></li>
											@endif

										@endforeach
									</ul>
								</div>
							</div>
							<div class="col-md-9">
								<div class="subscribe-form">
									<h2 class="widget-title">Subscribe Newsletter</h2>

									<div class="subs-form relative-position">
										<form class="subscribe_form">
											@csrf
											<input class="course field1" name="subscriber_email" type="email" placeholder="Email Address." required>
											<div class="nws-button text-center  gradient-bg text-uppercase">
												<button type="submit" class="submit" value="Submit">Subscribe now</button> 
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="copy-right-menu">
						<div class="footer_bottom">
							<p class="text-center mb-0 pb-0" style="font-weight: bold;font-size: 12pt;color: #fff;font-family: Raleway, sans-serif !important;padding: 10px 0;">Powered By 
								<a href="https://armasoftware.com/">
									<img width="70" class="lazy" src="https://armasoftware.com/arma_logo.png" data-ll-status="loaded"> 
								</a>
							</p>
						</div>
					</div>
				</div>
			</section>
		</footer>
	<!-- End of footer section
		============================================= -->

	<!-- Booking Modal -->
	<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Booking Request</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<form class="booking_form">
				@csrf
				<div class="modal-body">

					<div class="course-item-pic-text text-center" style="border: unset;">
						<div class="course-pic relative-position">
							<img id="booking_image" src="" alt="" style="width: 80%;">
							<div class="course-price text-center gradient-bg bg-yellow">
								<span id="booking_price"></span> <span>{{__('front.CURRENCY')}}</span> 
							</div>
							<div class="course-type text-center gradient-bg bg-success">
								<span id="booking_type"></span>
							</div>
						</div>
						<div class="course-item-text p-3">
							<div class="course-title mt10 headline pb-2 relative-position">
								<h3><a href="#" id="booking_name"></a></h3>
								<input type="hidden" id="course_id" name="course_id">
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><i class="fas fa-calendar-alt mr-3"></i> Started <span id="booking_date"></span></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="font-weight-bold" for="inputName">Full Name</label>
						<input type="text" name="name" class="form-control field1" id="inputName" required>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label class="font-weight-bold" for="inputEmail">Email</label>
							<input type="email" name="email" class="form-control field1" id="inputEmail" required>
						</div>
						<div class="form-group col-md-6">
							<label class="font-weight-bold" for="inputphone">Phone</label>
							<input type="number" name="phone" class="form-control field1" id="inputPhone" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label class="font-weight-bold" for="inputCompany">Company</label>
							<input type="text" name="company" class="form-control field1" id="inputCompany" required>
						</div>
						<div class="form-group col-md-6">
							<label class="font-weight-bold" for="inputPosition">Position</label>
							<input type="text" name="position" class="form-control field1" id="inputPosition" required>
						</div>
					</div>
					
					<input type="hidden" name="message" value="">

					<div class="form-group">
						<label class="font-weight-bold">Payment Information</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="payment_method" id="exampleRadios1" value="cash" checked="">
							<label class="form-check-label" for="exampleRadios1">Pay by Cash</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="payment_method" id="exampleRadios2" value="online">
							<label class="form-check-label" for="exampleRadios2"> Credit/Debit Card Payment</label>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary font-weight-bold submit">Confirm</button>
				</div>
			</form>
		</div>
		</div>
	</div>

		<!-- For Js Library -->
		<script src="{{asset('front_assets/js/jquery-2.1.4.min.js')}}"></script>
		<script src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('front_assets/js/popper.min.js')}}"></script>
		<script src="{{asset('front_assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('front_assets/js/jarallax.js')}}"></script>
		<script src="{{asset('front_assets/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('front_assets/js/lightbox.js')}}"></script>
		<script src="{{asset('front_assets/js/jquery.meanmenu.js')}}"></script>
		<script src="{{asset('front_assets/js/scrollreveal.min.js')}}"></script>
		<script src="{{asset('front_assets/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('front_assets/js/waypoints.min.js')}}"></script>
		<script src="{{asset('front_assets/js/jquery-ui.js')}}"></script>
		<script src="{{asset('front_assets/js/gmap3.min.js')}}"></script>
		<script src="{{asset('front_assets/js/switch.js')}}"></script>

		<script src="{{asset('front_assets/js/tooltipster.main.min.js')}}"></script>
		<script src="{{asset('front_assets/js/script.js')}}"></script>
		<script type="application/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<script src="https://inspirothemes.com/polo/plugins/particles/particles.js" type="text/javascript"></script>
		<script src="https://inspirothemes.com/polo/plugins/particles/particles-stars.js" type="text/javascript"></script>

		<script>
			AOS.init();
		</script>

		<!-- GetButton.io widget -->
		<script type="text/javascript">
			(function () {
				var options = {
					facebook: "120174095067860", // Facebook page ID
					whatsapp: "+2 01009779374", // WhatsApp number
					call_to_action: "Message us", // Call to action
					button_color: "#0090d0", // Color of button
					position: "right", // Position may be 'right' or 'left'
					order: "facebook,whatsapp", // Order of buttons
				};
				var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
				var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
				s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
				var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
			})();
		</script>
		<!-- /GetButton.io widget -->

		<script>

			$(document).on("click",".book-course", function()
			{
				var id 	  	= $(this).attr('data-id');
				var name  	= $(this).attr('data-name');
				var price  	= $(this).attr('data-price');
				var date  	= $(this).attr('data-date');
				var image  	= $(this).attr('data-image');
				var type  	= $(this).attr('data-type');

				$('#bookingModal').modal('show');

				$("#booking_name").text(name);
				$("#booking_price").text(price);
				$("#booking_date").text(date);
				$("#course_id").val(id);
				$('#booking_image').attr('src',image);
				$("#booking_type").text(type);
			});

			$('.booking_form').submit(function(e)
			{
				e.preventDefault();
				$('.submit').prop('disabled', true);

					var head1 	= 'Thank You';
					var title1 	= 'Your Request Has Been Sent Successfully, We will contact you ASAP. ';
					var head2 	= 'Oops...';
					var title2 	= 'Something went wrong, please try again later.';
					var title3 	= 'Sorry, this course has been completed.';

				$.ajax({
					url: 		"{{route('booking')}}",
					method: 	'POST',
					dataType: 	'json',
					data:		$(this).serialize()	,
					success : function(data)
						{
							$('.submit').prop('disabled', false);
							
							if (data['status'] == 'true')
							{
								Swal.fire(
										head1,
										title1,
										'success'
										)
								$('.field1').text('');
								$('.field1').val('');

								$('.modal').modal('hide');
							}
							else if (data['status'] == 'false')
							{
								Swal.fire(
										head2,
										title2,
										'error'
										)
							}
							else if (data['status'] == 'full')
							{
								Swal.fire(
										head2,
										title3,
										'error'
										)
							}
						},
						error : function(reject)
						{
							$('.submit').prop('disabled', false);

							var response = $.parseJSON(reject.responseText);
							$.each(response.errors, function(key, val)
							{
								Swal.fire(
										head2,
										val[0],
										'error'
										)
							});
						}
					
				});

			});

			$('.contact_form').submit(function(e)
			{
				e.preventDefault();
				$('.submit').prop('disabled', true);
				$('.error').text('');

					var head1 	= 'Thank You';
					var title1 	= 'Your Message Has Been Sent Successfully, We will contact you ASAP. ';
					var head2 	= 'Oops...';
					var title2 	= 'Something went wrong, please try again later.';

				$.ajax({
					url: 		"{{route('message')}}",
					method: 	'POST',
					dataType: 	'json',
					data:		$(this).serialize()	,
					success : function(data)
						{
							$('.submit').prop('disabled', false);
							
							if (data['status'] == 'true')
							{
								Swal.fire(
										head1,
										title1,
										'success'
										)
								$('.field1').text('');
								$('.field1').val('');
							}
							else if (data['status'] == 'false')
							{
								Swal.fire(
										head2,
										title2,
										'error'
										)
							}
						},
						error : function(reject)
						{
							$('.submit').prop('disabled', false);

							var response = $.parseJSON(reject.responseText);
							$.each(response.errors, function(key, val)
							{
								Swal.fire(
										head2,
										val[0],
										'error'
										)
							});
						}
					
					
				});

			});

            $('.subscribe_form').submit(function(e)
            {
                e.preventDefault();
                $('.submit').prop('disabled', true);
                $('.error').text('');

                var head1 	= 'Thank You';
                var title1 	= 'You\'ve Subscribed Successfully. ';
                var head2 	= 'Oops...';
                var title2 	= 'Something went wrong, please try again later.';


                $.ajax({
                    url: 		"{{route('subscribe')}}",
                    method: 	'POST',
                    dataType: 	'json',
                    data:		$(this).serialize()	,
                    success : function(data)
                        {
                            $('.submit').prop('disabled', false);
                            
                            if (data['status'] == 'true')
                            {
                                Swal.fire(
                                        head1,
                                        title1,
                                        'success'
                                        )
                                $('.field1').text('');
                                $('.field1').val('');
                            }
                            else if (data['status'] == 'false')
                            {
                                Swal.fire(
                                        head2,
                                        title2,
                                        'error'
                                        )
                            }
                        },
                        error : function(reject)
                        {
                            $('.submit').prop('disabled', false);

                            var response = $.parseJSON(reject.responseText);
                            $.each(response.errors, function(key, val)
                            {
                            $('#'+ key + '_error').text(val[0]);

                                Swal.fire(
                                        head2,
                                        val[0],
                                        'error'
                                        )
                            });
                        }
                    
                    
                });

            });

		</script>

        @yield('script')

</body>
</html>
