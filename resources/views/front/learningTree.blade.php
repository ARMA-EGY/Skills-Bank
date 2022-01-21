
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
						<h2 class="breadcrumb-head black bold"> <span>Learning Tree</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

	<!-- Start of about us content
		============================================= -->
		<section class="why-choose-section version-four backgroud-style pb-5" style="position: relative;">

			<div class="container">
				<div class="extra-features-content">
					<div class="row justify-content-center">
						
						@for ($i = 0; $i < 4; $i++)
							<div class="col-md-3 col-sm-6 hvr-pulse">
								<div class="extra-left-content" data-aos="fade-up-right" data-aos-duration="1000">
									<a href="#tree-{{$i+1}}" class="extra-icon-text text-left">
										<div class="features-icon features-icon2 gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>0{{$i+1}}</span>
											</div>
										</div>
										<div class="features-text text-center">
											<div class="features-text-title text-center">
												<h3>{{$items[$i]->title}} </h3>
											</div>
											<div class="mt-2 text-center">
											</div>
										</div>
									</a>
								</div>
							</div>
						@endfor

						
						<div class="col-md-4 col-sm-6">
							@for ($i = 4; $i < 6; $i++)
								<div class="extra-left-content hvr-pulse my-5 d-block" data-aos="fade-up-right" data-aos-duration="1000">
									<a href="#tree-{{$i+1}}" class="extra-icon-text text-left">
										<div class="features-icon features-icon2 gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>0{{$i+1}}</span>
											</div>
										</div>
										<div class="features-text text-center">
											<div class="features-text-title text-center">
												<h3>{{$items[$i]->title}}</h3>
											</div>
											<div class="mt-2 text-center">
											</div>
										</div>
									</a>
								</div>
							@endfor
						</div>
						
						<div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1000">
							<div class="extra-pic text-center">
								<img src="{{asset('front_assets/img/skillzawy.png')}}" alt="img">
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6">
							@for ($i = 6; $i < 8; $i++)
								<div class="extra-left-content hvr-pulse my-5 d-block" data-aos="fade-up-right" data-aos-duration="1000">
									<a href="#tree-{{$i+1}}" class="extra-icon-text text-left">
										<div class="features-icon features-icon2 gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>0{{$i+1}}</span>
											</div>
										</div>
										<div class="features-text text-center">
											<div class="features-text-title text-center">
												<h3>{{$items[$i]->title}}</h3>
											</div>
											<div class="mt-2 text-center">
											</div>
										</div>
									</a>
								</div>
							@endfor
						</div>
						
						
						@for ($i = 8; $i < 9; $i++)
							<div class="col-md-3 col-sm-6 hvr-pulse">
								<div class="extra-left-content" data-aos="fade-up-right" data-aos-duration="1000">
									<a href="#tree-{{$i+1}}" class="extra-icon-text text-left">
										<div class="features-icon features-icon2 gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>0{{$i+1}}</span>
											</div>
										</div>
										<div class="features-text text-center">
											<div class="features-text-title text-center">
												<h3>{{$items[$i]->title}}</h3>
											</div>
											<div class="mt-2 text-center">
											</div>
										</div>
									</a>
								</div>
							</div>
						@endfor
						
						@for ($i = 9; $i < 11; $i++)
							<div class="col-md-3 col-sm-6 hvr-pulse">
								<div class="extra-left-content" data-aos="fade-up-right" data-aos-duration="1000">
									<a href="#tree-{{$i+1}}" class="extra-icon-text text-left">
										<div class="features-icon features-icon2 gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>{{$i+1}}</span>
											</div>
										</div>
										<div class="features-text text-center">
											<div class="features-text-title text-center">
												<h3>{{$items[$i]->title}}</h3>
											</div>
											<div class="mt-2 text-center">
											</div>
										</div>
									</a>
								</div>
							</div>
						@endfor
						
					</div><!-- /row -->
				</div>
			</div>
			
		</section>

		@foreach ($items as $item)

			<section id="tree-{{ $loop->iteration }}" class="faq-section faq-secound-home-version backgroud-style py-4" style="background: #fccb41;;" data-aos="fade-up-right" data-aos-duration="1000">
				<div class="container">
					<div class="section-title headline text-center">
						<h2> <span>{{ $loop->iteration }}- {{$item->title}}</span></h2>
					</div>
				</div>
			</section>

			<section class="faq-section faq-secound-home-version backgroud-style" style="background-image: unset;" data-aos="zoom-in" data-aos-duration="1000">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="about-us-content-item">
								<div class="about-text-item text-center">
									<div class="about-list mb30 ul-li-block text-left">
										<ul class="row">
											@if (isset($item->description))
												@foreach ($item->description as $description)
												<li class="col-md-6 text-dark">{{$description->title}}</li>
												@endforeach
											@endif
										</ul>
									</div>
								</div>
								<!-- /about-text -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /End  -->
		
		@endforeach

		
		
	<!-- End content
		============================================= -->


@endsection


@section('script')


@endsection