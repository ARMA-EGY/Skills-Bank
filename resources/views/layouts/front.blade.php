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
                                <li class="genius-btn gradient-bg br-30 text-center text-uppercase bold-font book-btn"><a href="#">BOOK NOW</a></li>
								<li class="menu-item-has-children ul-li-block">
									<a href="#"><img src="{{asset('front_assets/img/flags/egy.svg')}}" style="width: 20px;border-radius: 50%;"></a>
									<ul class="sub-menu" style="width: 100px;left: -40px;">
										<li><a href="#"><img src="{{asset('front_assets/img/flags/egy.svg')}}" style="width: 20px;border-radius: 50%;"> <strong>Egypt</strong></a></li>
										<li><a href="#"><img src="{{asset('front_assets/img/flags/ksa.png')}}" style="width: 20px;border-radius: 50%;"> <strong>KSA</strong></a></li>
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
											<li><a href="{{route('about')}}">About The Company</a></li>
											<li><a href="{{route('about')}}#founder-word">Word By The Founder</a></li>
											<li><a href="{{route('team')}}">Meet The Team</a></li>
											<li><a href="{{route('welcome')}}#why-choose">Why SB</a></li>
											<li><a href="#">Clients</a></li>
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
											<li><a href="#">Blended Learning Approach</a></li>
											<li><a href="{{route('learningTree')}}">SB Learning Tree</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children ul-li-block">
										<a href="#">Workshops</a>
										<ul class="sub-menu">
											<li><a href="{{route('workshop')}}">Workshops Details</a></li>
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
							<li><a href="{{route('workshop')}}">Workshops Details</a></li>
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
											<li><a href="#"><i class="fas fa-caret-right"></i>About The Company</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Meet The Team</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Learning Approach</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>SB Learning Tree</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Workshops Details</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Public Calendar</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Collaborations</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Reach Out</a></li>
										</ul>
									</div>
								</div>
								<div class="footer-menu ul-li-block">
									<h2 class="widget-title"></h2>
									<ul>
										<li><a href="#"><i class="fas fa-caret-right"></i>Practical Training</a></li>
										<li><a href="#"><i class="fas fa-caret-right"></i>Virtual Training</a></li>
										<li><a href="#"><i class="fas fa-caret-right"></i>E-learning Videos</a></li>
										<li><a href="#"><i class="fas fa-caret-right"></i>Designing Learning Journey</a></li>
										<li><a href="#"><i class="fas fa-caret-right"></i>Assessments</a></li>
										<li><a href="#"><i class="fas fa-caret-right"></i>Blog</a></li>
										<li><a href="#"><i class="fas fa-caret-right"></i>Careers</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="footer-widget">
									<div class="footer-menu ul-li-block ml-0">
										<h2 class="widget-title"></h2>
										<ul>
											<li><a href="#"><i class="fas fa-map-marker-alt"></i>1st Floor,Bulding No. 4, Street No. 158, Maadi, Cairo, Egypt</a></li>
											<li><a href="#"><i class="fas fa-envelope"></i>info@skillsbankme.com</a></li>
											<li><a href="#"><i class="fas fa-phone"></i>+2 (010) 0977 9374</a></li>
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
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-9">
								<div class="subscribe-form">
									<h2 class="widget-title">Subscribe Newsletter</h2>

									<div class="subs-form relative-position">
										<form action="#" method="post">
											<input class="course" name="course" type="email" placeholder="Email Address.">
											<div class="nws-button text-center  gradient-bg text-uppercase">
												<button type="submit" value="Submit">Subscribe now</button> 
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

        @yield('script')

</body>
</html>
