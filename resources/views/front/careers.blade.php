
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
						<h2 class="breadcrumb-head black bold"> <span>Careers</span></h2>
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

											@foreach ($items as $item)

												<div class="list-blog-item px-3 pb-3" data-aos="fade-up" data-aos-duration="1000">
													<div class="row justify-content-center">
														<div class="col-md-8">
															<div class="blog-title-content headline">
																<h3><a>{{ $item->title}} </a></h3>
																<div class="blog-content">
																	{{ $item->description}} 
																</div>

																<div class="view-all-btn bold-font">
																	<a>Experience: {{ $item->experienced}} </a>
																</div>
															</div>
														</div>
														<div class="col-md-4 m-auto text-center">
															<div class="mt-2 text-center">
																<button class="btn btn-sm text-uppercase gradient-bg text-white apply-job">Apply Now</button>
															</div>
														</div>
													</div>
												</div>

											@endforeach

										</div>
									</div>
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
			</div>
		</section>
	<!-- End of collaborations content
		============================================= -->


@endsection


@section('script')


@endsection