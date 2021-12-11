
@extends('layouts.front')


@section('content')


	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style" style="background-image: url({{asset('front_assets/img/banner/breed.jpg')}});">
			<div class="blakish-overlay"></div>
			<div id="particles-stars" class="particles"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold"> <span>Reach Out</span> </h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of contact section
		============================================= -->
		<section id="contact-page" class="contact-page-section" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">SEND US A MESSAGE</span>
					<h2>Keep<span> In Touch.</span></h2>
				</div>
				<div class="social-contact">
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-facebook-f"></i>
						</div>
						<div class="category-title">
							<h4>Facebbok</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-twitter"></i>
						</div>
						<div class="category-title">
							<h4>Twitter</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-google-plus-g"></i>
						</div>
						<div class="category-title">
							<h4>Google +</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-behance"></i>
						</div>
						<div class="category-title">
							<h4>Behance</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-instagram"></i>
						</div>
						<div class="category-title">
							<h4>Instagram</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-dribbble"></i>
						</div>
						<div class="category-title">
							<h4>Dribble</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact section
		============================================= -->


	<!-- Start of contact area
		============================================= -->
		<section id="contact-area" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row">
						<div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<span class="subtitle ml42  text-uppercase">CONTACT US</span>
									<h2><span>Have Some Skills Bank to Enrich?</span></h2>
								</div>

								<div class="contact_secound_form">
									<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
										<div class="contact-info">
											<input class="name" name="name" type="text" placeholder="Your Name.">
										</div>
										<div class="contact-info">
											<input class="phone" name="phone" type="number" placeholder="Your Phone">
										</div>
										<div class="contact-info">
											<input class="email" name="email" type="email" placeholder="Your Email">
										</div>
										<textarea placeholder="Message." spellcheck="false"></textarea>
										<div class="nws-button text-center  gradient-bg text-capitalize br-30 mb-4">
											<button type="submit" value="Submit">SEND MESSAGE <i class="fas fa-caret-right text-yellow"></i></button> 
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
							<div class="section-title headline text-center">
									<h2>You Cand Find Us <span> EVERYWHERE!</span></h2>
							</div>
							<img src="{{asset('front_assets/img/map.png')}}" class="img-fluid rounded">
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact area
		============================================= -->
		


@endsection


@section('script')


@endsection