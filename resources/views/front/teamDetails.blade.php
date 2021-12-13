
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
						<h2 class="breadcrumb-head black bold">About <span>{{$item->name}}</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of member details area
		============================================= -->	
		<section id="teacher-details" class="teacher-details-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="teacher-details-content mb45">
							<div class="row">
								<div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
									<div class="teacher-details-img">
										<img src="{{asset($item->image)}}" class="rounded" alt="">
									</div>
								</div>
								<div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
									<div class="teacher-details-text">
										<div class="section-title-2  headline text-left">
											<h2> <span>{{$item->name}}.</span></h2>
											<div class="teacher-deg">
												 <span>{{$item->title}}.</span> 
											</div>
										</div>
										<div class="teacher-desc-social ul-li">
											<ul>
												<li>
													<a href="{{$item->facebook}}">
														<div class="info-social">
															<i class="fab fa-facebook-f"></i>
														</div>
														<span class="info-text">Facebook</span>
													</a>
												</li>
												<li>
													<a href="{{$item->twitter}}">
														<div class="info-social">
															<i class="fab fa-twitter"></i>
														</div>
														<span class="info-text">Twitter</span>
													</a>
												</li>
												<li>
													<a href="{{$item->linkedin}}">
														<div class="info-social">
															<i class="fab fa-linkedin"></i>
														</div>
														<span class="info-text">Linkedin </span>
														
													</a>
												</li>
											</ul>
										</div>

										<div class="teacher-address">
											<div class="address-details ul-li-block">
												<ul>
													<li>
														<div class="addrs-icon">
															<i class="fas fa-phone"></i>
														</div>
														<div class="add-info">
															<span><b>phone: </b>{{$item->phone}}</span>
														</div>
													</li>
													<li>
														<div class="addrs-icon">
															<i class="fas fa-envelope"></i>
														</div>
														<div class="add-info">
															<span><b>E-mail: </b>{{$item->email}}</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						
						<div class="about-us-content-item mb45" data-aos="fade-up" data-aos-duration="1000">

                            {!! $item->description !!}
							
						</div>
						
					</div>
				</div>
			</div>
		</section>
	<!-- End  of member details area
		============================================= -->	


@endsection


@section('script')


@endsection