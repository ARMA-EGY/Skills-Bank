
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


	<!-- Start of Blog single content
		============================================= -->
		<section id="blog-detail" class="blog-details-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10" data-aos="fade-up" data-aos-duration="1000">
						<div class="blog-details-content">
							<div class="post-content-details">
								<div class="blog-detail-thumbnile mb35">
									<img src="{{asset('storage/'.$blog->image)}}" alt="">
								</div>
								<h2>{{ $blog->title}}</h2>

								<div class="date-meta text-uppercase">
									<span><i class="fas fa-calendar-alt"></i> {{ date('j M, Y', strtotime($blog->created_at))}}</span>
								</div>
                                
								<div>
                                    {!! $blog->content !!}
                                </div>
                                
							</div>
							<div class="blog-share-tag">
								<div class="share-text float-left">
									Share this
								</div>
								<div class="share-social ul-li float-right">
									<ul>
										<li><a href="https://www.facebook.com/sharer.php?u={{url()->current()}}" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://twitter.com/intent/tweet?text={{$blog->title}}&url={{url()->current()}}" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/shareArticle?url={{url()->current()}}&title={{$blog->title}}" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
                            
						</div>

						<div class="blog-recent-post about-teacher-2">
							<div class="section-title-2  headline text-left">
								<h2 class="text-dark"><span>Related</span> Blogs</h2>
							</div>
							<div class="recent-post-item">
								<div class="row">

                                    @foreach ($related_blogs as $related_blog)
                                        <div class="col-md-6">
                                            <div class="blog-post-img-content">
                                                <div class="blog-img-date relative-position">
                                                    <div class="blog-thumnile">
                                                        <img src="{{asset('storage/'.$related_blog->image)}}" alt="">
                                                    </div>
                                                    <div class="course-price text-center gradient-bg">
                                                        <span>{{ date('j M, Y', strtotime($related_blog->created_at))}}</span>
                                                    </div>
                                                </div>
                                                <div class="blog-title-content headline">
                                                    <h3><a href="{{route('blog.show', $related_blog->url)}}">{{ $related_blog->title}}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
	<!-- End of Blog single content
		============================================= -->


@endsection


@section('script')


@endsection