
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
						<h2 class="breadcrumb-head black bold">Our <span>Team</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of teacher section
		============================================= -->
		<section id="teacher-page" class="teacher-page-section">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-md-9">
						<div class="about-us-content-item">

							<div class="about-text-item" data-aos="fade-left" data-aos-duration="1000">
								<div class="section-title-2 headline text-left">
									<h2>Meet <span>The Team</span></h2>
								</div>
								<p>
									Every single member of our team has one goal in mind; to positively contribute to your journey of leveling up your career by perfectly doing one's own job. 
								</p>
								<p class="text-center text-white">
									Let’s introduce some of them to you! 
								</p>
							</div>
							
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="teachers-archive">
							<div class="row justify-content-center">

								@foreach ($items as $item)
									
									<div class="col-md-3 col-sm-6" data-aos="flip-right" data-aos-duration="1000">
										<div class="teacher-pic-content">
											<div class="teacher-img-content relative-position">
												<img src="{{asset($item->image)}}" alt="">
												<div class="teacher-hover-item">
													<div class="teacher-social-name ul-li-block">
														<ul>
															<li><a href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
															<li><a href="{{$item->twitter}}"><i class="fab fa-twitter"></i></a></li>
															<li><a href="{{$item->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
														</ul>
													</div>
													<div class="teacher-text">
														Know more about {{$item->name}} full journey 
													</div>
												</div>
												<div class="teacher-next text-center">
													<a href="{{route('member.show', $item->id)}}"><i class="text-gradiant fas fa-arrow-right"></i></a>
												</div>
											</div>
											<div class="teacher-name-designation">
												<span class="teacher-name">{{$item->name}} </span>
												<span class="teacher-designation">{{$item->title}} </span>
											</div>
										</div>
									</div>

								@endforeach
								

							</div>

							
							<!-- Pagination -->
							<div class="row">
								<div class="col-12 d-flex justify-content-center py-4">
									{{$items->links()}}
								</div>
							</div>
							<!-- end: Pagination -->
							
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of teacher section
		============================================= -->
		


@endsection


@section('script')


@endsection