
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
						<h2 class="breadcrumb-head black bold"><span>Collaborations</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->



	<!-- Start of Collaboration single content
		============================================= -->
		<section id="blog-detail" class="blog-details-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10" data-aos="fade-up" data-aos-duration="1000">
						<div class="blog-details-content">
							<div class="post-content-details">
								<div class="blog-detail-thumbnile mb35">
									<img src="{{asset('storage/'.$item->image)}}" alt="">
								</div>
								<h2>{{ $item->title}}</h2>

								<div class="date-meta">
									<span><i class="fas fa-calendar-alt"> Project Date:</i> {{ $item->project_date}} </span>
									<span><i class="fas fa-users"> Trainees no.: </i> {{ $item->trainees_no}} </span>
									<span><i class="fas fa-history"> Training hours: </i> {{ $item->training_hours}}</span>
								</div>
                                
								<div>
                                    {!! $item->content !!}
                                </div>

							</div>
							<div class="blog-share-tag">
								<div class="share-text float-left">
									Share this
								</div>
								<div class="share-social ul-li float-right">
									<ul>
										<li><a href="https://www.facebook.com/sharer.php?u={{url()->current()}}" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://twitter.com/intent/tweet?text={{$item->title}}&url={{url()->current()}}" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/shareArticle?url={{url()->current()}}&title={{$item->title}}" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

                        
					</div>
				</div>
			</div>
		</section>
	<!-- End of Collaboration single content
		============================================= -->

@endsection


@section('script')


@endsection