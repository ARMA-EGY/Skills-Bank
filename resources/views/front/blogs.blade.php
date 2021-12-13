
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
						<h2 class="breadcrumb-head black bold">Skills Bank <span>Blog</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

	<!-- Start of blog content
		============================================= -->
		<section id="blog-item" class="blog-item-post">
			<div class="container">
				<div class="blog-content-details">
					<div class="row">

						<div class="col-md-12">
							<div class="blog-post-content">

								<div class="genius-post-item">
									<div class="tab-container">

										<div class="row">

											@foreach ($blogs as $blog)
												
												<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
													<div class="blog-post-img-content">
														<div class="blog-img-date relative-position">
															<div class="blog-thumnile">
																<img class="rounded" src="{{asset('storage/'.$blog->image)}}" alt="">
															</div>
															<div class="course-price text-center gradient-bg">
																<span>{{ date('j M, Y', strtotime($blog->created_at))}}</span>
															</div>
														</div>
														<div class="blog-title-content headline">
															<h3><a href="{{route('blog.show', $blog->url)}}">{{ $blog->title}}</a></h3>
															<div class="blog-content">
																{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }} 
															</div>

															<div class="view-all-btn bold-font">
																<a href="{{route('blog.show', $blog->url)}}">Read More <i class="fas fa-chevron-circle-right"></i></a>
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
										{{$blogs->links()}}
									</div>
								</div>
								<!-- end: Pagination -->
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
	<!-- End of blog content
		============================================= -->
		


@endsection


@section('script')


@endsection