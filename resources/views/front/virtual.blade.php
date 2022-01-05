
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
						<h2 class="breadcrumb-head black bold"> <span>Virtual Training</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of about us content
		============================================= -->
		<section id="about-page" class="about-page-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="about-us-content-item">
							
							<div class="row" data-aos="fade-left" data-aos-duration="1000">

								<div class="col-md-7">
									<div class="about-text-item">
										<div class="section-title-2 headline text-left">
											<h2><span>Virtual Training</span></h2>
										</div>
										<div class="about-content-text">
											<p>
												Amongst the Coronavirus circumstances, we became highly aware of the urge of providing you with virtual training options. That’s why at Skills Bank, not only materials are customized, Training premises are customized too. 
											</p>
											<p>
												You can choose to get trained at our head office, or your premises, and you can go virtually for remote training requests. All the remote training requests have a special LD design to be highly interactive, beneficial, and convenient for all your participants.
											</p>
										</div>
									</div>
								</div>

								<div class="col-md-5 m-auto">
									<img src="{{asset('front_assets/img/about/2.jpg')}}" class="img-fluid br-30">
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</section>
	<!-- End of about us content
		============================================= -->


	<!-- Start of about us content
		============================================= -->
		<section id="about-page" class="about-page-section" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9">
						<div class="about-us-content-item">
							
							<div class="about-text-item">
								<div class="section-title-2 headline text-left">
									<h2>How we make sure virtual training 100% efficient? </h2>
								</div>

								<div class="app-details-content">
									<div class="about-list mb30 ul-li-block">
										<ul>
											<li>A training host is always there before the training to provide orientation for participants on how to use the online platform.  </li>
											<li>An assessment during the virtual training is always taking place to make sure participants are following up.</li>
											<li>All materials are tailored to fit the virtual training environment.</li>
											<li>Our virtual training is based on 100% interactive content. So, just like the classroom training programs, our trainees are helped to stay focused, enterianed, and getting the learning experience they used to.</li>
										</ul>
									</div>
								</div>
								
								<div class="about-btn text-center">
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font br-30">
										<a href="{{route('reachout')}}">Need training? <i class="fas fa-caret-right"></i></a>
									</div>
								</div>
								
							</div>
							<!-- /about-text -->
							
						</div>
					</div>
					
				</div>
			</div>
		</section>
	<!-- End of about us content
		============================================= -->


@endsection


@section('script')


@endsection