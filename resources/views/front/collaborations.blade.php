
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
						<h2 class="breadcrumb-head black bold"> <span>Collaborations</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

	<!-- Start of collaborations content
		============================================= -->
		<section id="blog-item" class="blog-item-post">
			<div class="container">
				<div class="blog-content-details">
					<div class="row">

						<div class="col-md-12">
							<div class="blog-post-content">

								<div class="genius-post-item">
									<div class="tab-container">
										<div class="blog-list-view">

											<div class="list-blog-item" data-aos="fade-up" data-aos-duration="1000">
												<div class="row">
													<div class="col-md-4">
														<div class="blog-post-img-content">
															<div class="blog-img-date relative-position">
																<div class="blog-thumnile">
																	<img class="rounded" src="{{asset('front_assets/img/blog/bp-2.jpg')}}" alt="">
																</div>
																<div class="course-price text-center gradient-bg">
																	<span>26 April 2018</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="blog-title-content headline">
															<h3><a href="collab-single.html">CHF - Cooperative Housing Foundation </a></h3>
															<div class="blog-content">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
															</div>

															<div class="view-all-btn bold-font">
																<a href="collab-single.html">Read More <i class="fas fa-chevron-circle-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="list-blog-item" data-aos="fade-up" data-aos-duration="1000">
												<div class="row">
													<div class="col-md-4">
														<div class="blog-post-img-content">
															<div class="blog-img-date relative-position">
																<div class="blog-thumnile">
																	<img class="rounded" src="{{asset('front_assets/img/blog/bp-3.jpg')}}" alt="">
																</div>
																<div class="course-price text-center gradient-bg">
																	<span>26 April 2018</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="blog-title-content headline">
															<h3><a href="collab-single.html">ILO – International Labor Organization </a></h3>
															<div class="blog-content">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
															</div>

															<div class="view-all-btn bold-font">
																<a href="collab-single.html">Read More <i class="fas fa-chevron-circle-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="list-blog-item" data-aos="fade-up" data-aos-duration="1000">
												<div class="row">
													<div class="col-md-4">
														<div class="blog-post-img-content">
															<div class="blog-img-date relative-position">
																<div class="blog-thumnile">
																	<img class="rounded" src="{{asset('front_assets/img/blog/bp-5.jpg')}}" alt="">
																</div>
																<div class="course-price text-center gradient-bg">
																	<span>26 April 2018</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="blog-title-content headline">
															<h3><a href="collab-single.html">Capacity Building Programme for Leads of the Women with Disabilities   </a></h3>
															<div class="blog-content">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
															</div>

															<div class="view-all-btn bold-font">
																<a href="collab-single.html">Read More <i class="fas fa-chevron-circle-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>


								<div class="couse-pagination text-center ul-li">
									<ul>
										<li class="pg-text"><a href="#">PREV</a></li>
										<li><a href="#">01</a></li>
										<li><a href="#">02</a></li>
										<li class="active"><a href="#">03</a></li>
										<li><a href="#">04</a></li>
										<li><a href="#">...</a></li>
										<li><a href="#">15</a></li>
										<li class="pg-text"><a href="#">NEXT</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
	<!-- End of collaborations content
		============================================= -->
		


@endsection


@section('script')


@endsection