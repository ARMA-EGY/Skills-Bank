
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
						<h2 class="breadcrumb-head black bold"> <span>Public Calendar</span> </h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of calendar section
		============================================= -->
		<section id="course-page" class="course-page-section pb-5 mt-4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<div class="sponsor-item sponsor-1">
							<div class="text-center">
								<a href="#"><h4 class="my-3">January</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">February</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">March</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">April</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">May</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">June</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">July</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">August</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">September</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">October</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3">November</h4></a>
							</div>
							<div class="text-center">
								<a href="#"><h4 class="my-3 bg-primary text-white">December</h4></a>
							</div>
						</div>
						
						<div class="short-filter-tab">
							<div class="tab-button blog-button ul-li text-center float-right">
								<ul class="product-tab">
									<li class="active" rel="tab1"><i class="fas fa-th"></i></li>
									<li rel="tab2"> <i class="fas fa-list"></i></li>
								</ul>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
							  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All Courses</a>
								<a class="nav-link" href="#" role="tab" >Interpersonal skills and self-development </a>
								<a class="nav-link" href="#" role="tab" >Business Topics</a>
								<a class="nav-link" href="#" role="tab" >Leading Your Business</a>
								<a class="nav-link" href="#" role="tab" >Leadership & Management</a>
								<a class="nav-link" href="#" role="tab" >Business Writing</a>
								<a class="nav-link" href="#" role="tab" >MS Office</a>
								<a class="nav-link" href="#" role="tab" >Customer Service</a>
								<a class="nav-link" href="#" role="tab" >Sales</a>
								<a class="nav-link" href="#" role="tab" >Finance</a>
								<a class="nav-link" href="#" role="tab" >Supply Chain</a>
								<a class="nav-link" href="#" role="tab" >HR</a>
							  </div>
							</div>
							<div class="col-md-9">
							  <div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
									
									<div class="genius-post-item">
										<div class="tab-container">
											<div id="tab1" class="tab-content-1 pt35">
												<div class="best-course-area best-course-v2">
													<div class="row justify-content-center">

														<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
															<div class="course-item-pic-text mt-5">
																<div class="course-pic relative-position">
																	<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	<div class="course-price text-center gradient-bg bg-yellow">
																		<span>2,500 L.E</span>
																	</div>
																	<div class="course-details-btn">
																		<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
																	</div>
																</div>
																<div class="course-item-text p-3">
																	<div class="course-title mt10 headline pb-2 relative-position">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																	</div>
																	<div class="course-viewer ul-li">
																		<ul>
																			<li><a href=""><i class="fas fa-calendar-alt mr-3"></i> Started 29 October</a></li>
																		</ul>
																	</div>
																	<div class="mt-2 text-center">
																		<button class="btn btn-sm text-uppercase gradient-bg text-white book-course">Book Now</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- /course -->

														<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
															<div class="course-item-pic-text mt-5">
																<div class="course-pic relative-position">
																	<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	<div class="course-price text-center gradient-bg bg-yellow">
																		<span>2,500 L.E</span>
																	</div>
																	<div class="course-details-btn">
																		<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
																	</div>
																</div>
																<div class="course-item-text p-3">
																	<div class="course-title mt10 headline pb-2 relative-position">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																	</div>
																	<div class="course-viewer ul-li">
																		<ul>
																			<li><a href=""><i class="fas fa-calendar-alt mr-3"></i> Started 29 October</a></li>
																		</ul>
																	</div>
																	<div class="mt-2 text-center">
																		<button class="btn btn-sm text-uppercase gradient-bg text-white book-course">Book Now</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- /course -->

														<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
															<div class="course-item-pic-text mt-5">
																<div class="course-pic relative-position">
																	<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	<div class="course-price text-center gradient-bg bg-yellow">
																		<span>2,500 L.E</span>
																	</div>
																	<div class="course-details-btn">
																		<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
																	</div>
																</div>
																<div class="course-item-text p-3">
																	<div class="course-title mt10 headline pb-2 relative-position">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																	</div>
																	<div class="course-viewer ul-li">
																		<ul>
																			<li><a href=""><i class="fas fa-calendar-alt mr-3"></i> Started 29 October</a></li>
																		</ul>
																	</div>
																	<div class="mt-2 text-center">
																		<button class="btn btn-sm text-uppercase gradient-bg text-white book-course">Book Now</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- /course -->

														<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
															<div class="course-item-pic-text mt-5">
																<div class="course-pic relative-position">
																	<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	<div class="course-price text-center gradient-bg bg-yellow">
																		<span>2,500 L.E</span>
																	</div>
																	<div class="course-details-btn">
																		<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
																	</div>
																</div>
																<div class="course-item-text p-3">
																	<div class="course-title mt10 headline pb-2 relative-position">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																	</div>
																	<div class="course-viewer ul-li">
																		<ul>
																			<li><a href=""><i class="fas fa-calendar-alt mr-3"></i> Started 29 October</a></li>
																		</ul>
																	</div>
																	<div class="mt-2 text-center">
																		<button class="btn btn-sm text-uppercase gradient-bg text-white book-course">Book Now</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- /course -->

														<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
															<div class="course-item-pic-text mt-5">
																<div class="course-pic relative-position">
																	<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	<div class="course-price text-center gradient-bg bg-yellow">
																		<span>2,500 L.E</span>
																	</div>
																	<div class="course-details-btn">
																		<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
																	</div>
																</div>
																<div class="course-item-text p-3">
																	<div class="course-title mt10 headline pb-2 relative-position">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																	</div>
																	<div class="course-viewer ul-li">
																		<ul>
																			<li><a href=""><i class="fas fa-calendar-alt mr-3"></i> Started 29 October</a></li>
																		</ul>
																	</div>
																	<div class="mt-2 text-center">
																		<button class="btn btn-sm text-uppercase gradient-bg text-white book-course">Book Now</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- /course -->

														<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
															<div class="course-item-pic-text mt-5">
																<div class="course-pic relative-position">
																	<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	<div class="course-price text-center gradient-bg bg-yellow">
																		<span>2,500 L.E</span>
																	</div>
																	<div class="course-details-btn">
																		<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
																	</div>
																</div>
																<div class="course-item-text p-3">
																	<div class="course-title mt10 headline pb-2 relative-position">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																	</div>
																	<div class="course-viewer ul-li">
																		<ul>
																			<li><a href=""><i class="fas fa-calendar-alt mr-3"></i> Started 29 October</a></li>
																		</ul>
																	</div>
																	<div class="mt-2 text-center">
																		<button class="btn btn-sm text-uppercase gradient-bg text-white book-course">Book Now</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- /course -->

													</div>
												</div>
											</div><!-- /tab-1 -->

											<div id="tab2" class="tab-content-1">
												<div class="course-list-view">
													<table>
														<tr class="list-head">
															<th>COURSE NAME</th>
															<th>COURSE TYPE</th>
															<th>STARTS</th>
															<th>LENGTH</th>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">2,500 L.E</a></span>
																			
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">2,500 L.E</a></span>
																			
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">2,500 L.E</a></span>
																			
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">2,500 L.E</a></span>
																			
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">2,500 L.E</a></span>
																			
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">2,500 L.E</a></span>
																			
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('front_assets/img/course/c-1.png')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fundamentals of Design Thinking</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">2,500 L.E</a></span>
																			
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
													</table>
												</div>
											</div><!-- /tab-2 -->
										</div>
									</div>
								</div>
							  </div>
							</div>
						  </div>

						
					</div>
					
				</div>
			</div>
		</section>
	<!-- End of calendar section
		============================================= -->
		


@endsection


@section('script')


@endsection