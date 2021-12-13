
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
						<h2 class="breadcrumb-head black bold"> <span>Course Details</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of course details section
		============================================= -->
		<section id="course-details" class="course-details-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="course-details-item">
							<div class="course-single-pic mb30 text-center">
								<img src="{{asset($item->image)}}" alt="">
							</div>
							<div class="course-single-text">
								<div class="course-title mt10 headline relative-position">
									<h3><b>{{$item->name}}</b> </h3>
                                    <div class="course-viewer ul-li mt-4">
                                        <ul>
                                            <li><a href=""><i class="fas fa-calendar-alt mr-3"></i> Started {{\Carbon\Carbon::parse($item->start_date)->format('d F')}} </a></li>
                                        </ul>
                                    </div>
								</div>
								<div class="course-details-content">
                                    {!! $item->description !!}
								</div>
                                
							</div>
						</div>
						<!-- /course-details -->
                        
					</div>

					<div class="col-md-3">
						<div class="side-bar">
							<div class="course-side-bar-widget">
								<div class="my-4 text-center">
									<button class="btn btn-sm text-uppercase gradient-bg text-white book-course" data-id="{{$item->id}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-image="{{asset($item->image)}}" data-date="{{\Carbon\Carbon::parse($item->start_date)->format('d F')}}">Enroll THis course</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
	<!-- End of course details section
		============================================= -->	


@endsection


@section('script')


@endsection