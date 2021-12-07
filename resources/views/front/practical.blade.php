
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
						<h2 class="breadcrumb-head black bold"> <span>Practical Training</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start content
		============================================= -->
		<section class="about-page-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="about-us-content-item">
							
							<div class="row" data-aos="fade-left" data-aos-duration="1000">

								<div class="col-md-7">
									<div class="about-text-item">
										<div class="section-title-2 headline text-left">
											<h2><span>Customized & Practical Training Programs</span></h2>
											<p>You list needs, We list solutions.</p>
										</div>
										<div class="about-content-text">
											<p>
												The Skills Bank Learning Design team customizes all the training programs needed to level up every core competency your team members have in their skill banks. We cover technical, business, and soft skills for all career levels starting from juniors all the way to top executives, with every other career level in between.
											</p>
										</div>
									</div>
								</div>

								<div class="col-md-5 m-auto">
									<img src="{{asset('front_assets/img/about/1.jpg')}}" class="img-fluid br-30">
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</section>
	<!-- End content
		============================================= -->


	<!-- Start content
		============================================= -->
		<section class="about-page-section" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9">
						<div class="about-us-content-item">
							
							<div class="about-text-item">
								<div class="section-title-2 headline text-left">
									<h2>Criteria we always consider: </h2>
								</div>

								<div class="app-details-content">
									<div class="about-list mb30 ul-li-block">
										<ul>
											<li>All the training programs are customized to your team needs and career levels. They are also tailored to your industry and business goals.  </li>
											<li>Our training programs are also designed based on Blended Learning Approach:</li>
										</ul>
									</div>
								</div>
								
								<p>
									Using that approach, we blend online learning tools like ebooks, online activities, and similar online-based resources and tools with face-to-face learning practices. That approach is also allowing your employees to enjoy the mix of receiving training content via classroom interaction and an online one. It’s up-to-date, attractive and proved to be top efficient.
								</p>
								<div class="about-btn text-center">
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font br-30">
										<a href="#">Need training? <i class="fas fa-caret-right"></i></a>
									</div>
								</div>
								
							</div>
							<!-- /about-text -->
							
						</div>
					</div>
					
				</div>
			</div>
		</section>
	<!-- End content
		============================================= -->


@endsection


@section('script')


@endsection