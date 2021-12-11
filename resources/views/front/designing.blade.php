
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
						<h2 class="breadcrumb-head black bold"> <span>Designing Learning Journey</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start content
		============================================= -->
		<section  class="about-page-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="about-us-content-item">
							
							<div class="row" data-aos="fade-left" data-aos-duration="1000">

								<div class="col-md-7">
									<div class="about-text-item">
										<div class="section-title-2 headline text-left">
											<h2><span>Designing Learning Journeys for full tracks</span></h2>
										</div>
										<div class="about-content-text">
											<p>
												We understand the huge effort, knowledge, and focus needed to create a long term training tracks. We spare you all of that through our professional, experience, and up-to date Learning Design department. They take it from there and start listing all of your needs in form of targets, and create the full training track accordingly. 
											</p>
										</div>
									</div>
								</div>

								<div class="col-md-5 m-auto">
									<img src="{{asset('front_assets/img/about/4.jpg')}}" class="img-fluid br-30">
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
					<div class="col-md-6">
						<div class="about-us-content-item">
							
							<div class="about-text-item">
								<div class="section-title-2 headline text-left">
									<h2>What do we include? </h2>
								</div>

								<div class="app-details-content">
									<div class="about-list mb30 ul-li-block">
										<ul>
											<li>Pre and Post assessments </li>
											<li>Track duration </li>
											<li>Outlines and learning objectives for each program </li>
											<li>Material Structional design </li>
											<li>Prerequists if there are any </li>
											<li>Reports </li>
											<li>Action plans for what’s after </li>
										</ul>
									</div>
								</div>
								
								<div class="about-btn text-center">
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font br-30">
										<a href="#">Request a Design <i class="fas fa-caret-right"></i></a>
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