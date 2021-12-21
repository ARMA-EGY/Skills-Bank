
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

											@foreach ($items as $item)

												<div class="list-blog-item" data-aos="fade-up" data-aos-duration="1000">
													<div class="row">
														<div class="col-md-4">
															<div class="blog-post-img-content">
																<div class="blog-img-date relative-position">
																	<div class="blog-thumnile">
																		<img class="rounded" src="{{asset('storage/'.$item->image)}}" alt="">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="blog-title-content headline">
																<h3><a href="{{route('collab.show', $item->url)}}">{{ $item->title}} </a></h3>
																<div class="blog-content">
																	{{ \Illuminate\Support\Str::limit(strip_tags($item->content), 100, '...') }}  
																</div>

																<div class="view-all-btn bold-font">
																	<a href="{{route('collab.show', $item->url)}}">Read More <i class="fas fa-chevron-circle-right"></i></a>
																</div>
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