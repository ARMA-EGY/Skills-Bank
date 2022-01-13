
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
						<h2 class="breadcrumb-head black bold"> <span>Clients</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of clients section
		============================================= -->
		<section id="sponsor" class="sponsor-section">
			<div class="container my-4" data-aos="fade-up" data-aos-duration="1000">
				<div class="section-title mb20 headline text-left">
					<span class="subtitle ml42 text-uppercase">OUR AWESOME CLIENTS</span>
					<h2 class=""><span>Clients </span> We Take Pride in working with:</h2>
				</div>
			</div>

			@foreach ($categories as $category)
			@if ($category->clients->count() > 0)
				<div class="container my-5" data-aos="fade-up" data-aos-duration="1000">
					<div class="section-title mb20 headline text-left">
						<h2 class="text-center text-primary font-weight-bold">{{$category->name}}</h2>
					</div>
					<div class="sponsor-item sponsor-1">
						@foreach ($category->clients as $client)
							<div class="sponsor-pic text-center">
								<img src="{{asset($client->image)}}" alt="{{$client->name}}">
							</div>
						@endforeach
					</div>
				</div>
			@endif
			@endforeach

		</section>
	<!-- End of clients section
		============================================= -->


@endsection


@section('script')


@endsection