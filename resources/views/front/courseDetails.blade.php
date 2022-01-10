
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
									<h3>Description</h3>
                                    {!! $item->description !!}
								</div>
                                
								@if ($item->schedule != '')
									<div class="course-details-content mt-4">
										<h3>Full Schedule</h3>
										{!! $item->schedule !!}
									</div>
								@endif
							</div>
						</div>
						<!-- /course-details -->
                        
					</div>

					<div class="col-md-3">
						<div class="side-bar">
							<div class="course-side-bar-widget">
								<div class="my-4 text-center">
									<button class="btn btn-sm text-uppercase gradient-bg text-white book-course" data-id="{{$item->id}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-type="{{$item->type}}" data-image="{{asset($item->image)}}" data-date="{{\Carbon\Carbon::parse($item->start_date)->format('d F')}}">Enroll THis course</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
	<!-- End of course details section
		============================================= -->	


	<!-- Start related course
		============================================= -->
		<section id="popular-course" class="popular-course-section popular-three" data-aos="flip-down" data-aos-duration="1000">
			<div class="container">
				<div class="section-title mb20 headline text-left">
					<h2>Related <span>Workshops.</span> </h2>
				</div>
				<div id="course-slide-item" class="course-slide">

					@foreach ($courses as $course)
					
						<div class="course-item-pic-text">
							<div class="course-pic relative-position">
								<img src="{{asset($course->image)}}" alt="">
								<div class="course-price text-center gradient-bg bg-yellow">
									<span>{{$course->price}} {{__('front.CURRENCY')}}</span>
								</div>
								<div class="course-type text-center gradient-bg bg-success">
									<span>{{$course->type}}</span>
								</div>
								<div class="course-details-btn">
									<a href="{{route('course.show', $course->id)}}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="course-item-text p-3">
								<div class="course-title mt10 headline pb-2 relative-position">
									<h3><a href="{{route('course.show', $course->id)}}">{{$course->name}}</a></h3>
								</div>
								<div class="course-viewer ul-li">
									<ul>
										<li><i class="fas fa-calendar-alt mr-3"></i> Started {{\Carbon\Carbon::parse($course->start_date)->format('d F')}}</li>
									</ul>
								</div>
								<div class="mt-2 text-center">
									<button class="btn btn-sm text-uppercase gradient-bg text-white book-course" data-id="{{$course->id}}" data-name="{{$course->name}}" data-price="{{$course->price}}" data-type="{{$course->type}}" data-image="{{asset($course->image)}}" data-date="{{\Carbon\Carbon::parse($course->start_date)->format('d F')}}">Book Now</button>
								</div>
							</div>
						</div>
						<!-- /item -->
						
					@endforeach
					
				</div>
			</div>
		</section>
	<!-- End related course
		============================================= -->


@endsection


@section('script')


@endsection