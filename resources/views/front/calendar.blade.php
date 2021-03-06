
@extends('layouts.front')

@section('style')
	<style>
		.owl-nav 
		{
			right: 0;
			top: -50px;
			position: absolute;
		}
	</style>
@endsection

@section('content')


	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style" style="background-image: url({{asset('front_assets/img/banner/breed.jpg')}});">
			<div class="blakish-overlay"></div>
			<div id="particles-stars" class="particles"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold"> <span>Public Calendar</span> </h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of calendar section
		============================================= -->
		<section id="course-page" class="course-page-section pb-5 pt-3 mt-4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="row">
							<div class="col-md-3">
								<div class="short-filter-tab">
									<div class="shorting-filter">
										<select id="month" class="m-0 w-100">
											<option value="all">All Months</option>
											<option value="month-01" @if ($currentMonth == '01') selected @endif>January</option>
											<option value="month-02" @if ($currentMonth == '02') selected @endif>February</option>
											<option value="month-03" @if ($currentMonth == '03') selected @endif>March</option>
											<option value="month-04" @if ($currentMonth == '04') selected @endif>April</option>
											<option value="month-05" @if ($currentMonth == '05') selected @endif>May</option>
											<option value="month-06" @if ($currentMonth == '06') selected @endif>June</option>
											<option value="month-07" @if ($currentMonth == '07') selected @endif>July</option>
											<option value="month-08" @if ($currentMonth == '08') selected @endif>August</option>
											<option value="month-09" @if ($currentMonth == '09') selected @endif>September</option>
											<option value="month-10" @if ($currentMonth == '10') selected @endif>October</option>
											<option value="month-11" @if ($currentMonth == '11') selected @endif>November</option>
											<option value="month-12" @if ($currentMonth == '12') selected @endif>December</option>
										</select>
									</div>
								</div>
								<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active" id="v-pills-cat-all" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">All Categories</a>
									@foreach ($categories as $category)
										<a class="nav-link" id="v-pills-cat-{{$category->id}}" data-toggle="pill" href="#v-cat-{{$category->id}}" role="tab" aria-controls="v-cat-{{$category->id}}" aria-selected="false">{{$category->name}}</a>
									@endforeach
								</div>
							</div>
							<div class="col-md-9">
							  <div class="tab-content" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
									<div class="genius-post-item">
										<div class="tab-container">
											<div class="tab-content-1 pt35">
												<div class="best-course-area best-course-v2">
													<div class="row justify-content-center">

            										@if ($courses->count() > 0)
														@foreach ($courses as $course)
															<div class="col-md-4 course month-{{\Carbon\Carbon::parse($course->start_date)->format('m')}}">
																<div class="course-item-pic-text mt-5">
																	<div class="course-pic relative-position">
																		<img src="{{asset($course->image)}}" alt="">
																		<div class="course-price text-center gradient-bg bg-yellow">
																			<span>{{$course->price}} {{__('front.CURRENCY')}}</span>
																		</div>
																		<div class="course-type text-center gradient-bg bg-success">
																			<span>{{$course->type}}</span>
																		</div>
																		<div class="course-details-btn">
																			<a href="{{route('course.show', $course->id)}}">WORKSHOP DETAILS <i class="fas fa-arrow-right"></i></a>
																		</div>
																	</div>
																	<div class="course-item-text p-3">
																		<div class="course-title mt10 headline pb-2 relative-position">
																			<h3><a href="{{route('course.show', $course->id)}}">{{$course->name}}</a></h3>
																		</div>
																		<div class="course-viewer ul-li">
																			<ul>
																				<li><i class="fas fa-calendar-alt mr-3"></i> Started {{\Carbon\Carbon::parse($course->start_date)->format('d F')}}</li>
																				<li class="mt-1"><i class="far fa-clock mr-3"></i>  {{\Carbon\Carbon::parse($course->time_from)->format('h:i a')}} : {{\Carbon\Carbon::parse($course->time_to)->format('h:i a')}}</li>
																			</ul>
																		</div>
																		<div class="mt-2 text-center">
																			<button class="btn btn-sm text-uppercase gradient-bg text-white book-course" data-id="{{$course->id}}" data-name="{{$course->name}}" data-price="{{$course->price}}" data-type="{{$course->type}}" data-image="{{asset($course->image)}}" data-date="{{\Carbon\Carbon::parse($course->start_date)->format('d F')}}" data-date2="{{$course->start_date}}">Book Now</button>
																		</div>
																	</div>
																</div>
															</div>
															<!-- /item -->
														@endforeach
													@else
														<p class="text-center">No Data Available.</p>
													@endif
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								@foreach ($categories as $category)
									<div class="tab-pane fade" id="v-cat-{{$category->id}}" role="tabpanel" aria-labelledby="v-cat-{{$category->id}}">
										
										<div class="genius-post-item">
											<div class="tab-container">
												<div class="pt35">
													<div class="best-course-area best-course-v2">
														<div class="row justify-content-center">
														@if ($courses->where('category_id', $category->id)->count() > 0)
															@foreach ($courses as $course)
																@if ($course->category->id == $category->id)
																	<div class="col-md-4 course month-{{\Carbon\Carbon::parse($course->start_date)->format('m')}}">
																		<div class="course-item-pic-text mt-5">
																			<div class="course-pic relative-position">
																				<img src="{{asset($course->image)}}" alt="">
																				<div class="course-price text-center gradient-bg bg-yellow">
																					<span>{{$course->price}} {{__('front.CURRENCY')}}</span>
																				</div>
																				<div class="course-type text-center gradient-bg bg-success">
																					<span>{{$course->type}}</span>
																				</div>
																				<div class="course-details-btn">
																					<a href="{{route('course.show', $course->id)}}">WORKSHOP DETAILS <i class="fas fa-arrow-right"></i></a>
																				</div>
																			</div>
																			<div class="course-item-text p-3">
																				<div class="course-title mt10 headline pb-2 relative-position">
																					<h3><a href="{{route('course.show', $course->id)}}">{{$course->name}}</a></h3>
																				</div>
																				<div class="course-viewer ul-li">
																					<ul>
																						<li><i class="fas fa-calendar-alt mr-3"></i> Started {{\Carbon\Carbon::parse($course->start_date)->format('d F')}}</li>
																						<li class="mt-1"><i class="far fa-clock mr-3"></i>  {{\Carbon\Carbon::parse($course->time_from)->format('h:i a')}} : {{\Carbon\Carbon::parse($course->time_to)->format('h:i a')}}</li>
																					</ul>
																				</div>
																				<div class="mt-2 text-center">
																					<button class="btn btn-sm text-uppercase gradient-bg text-white book-course" data-id="{{$course->id}}" data-name="{{$course->name}}" data-price="{{$course->price}}" data-type="{{$course->type}}" data-image="{{asset($course->image)}}" data-date="{{\Carbon\Carbon::parse($course->start_date)->format('d F')}}" data-date2="{{$course->start_date}}">Book Now</button>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- /item -->
																@endif
															@endforeach
														@else
															<p class="text-center">No Data Available.</p>
														@endif
														</div>
													</div>
												</div>
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
	<!-- End of calendar section
		============================================= -->
		


@endsection


@section('script')

<script>

	$(document).on("change","#month", function()
    {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        var filter 	   = '.' + $('option:selected', this).val();

        if(filter == '.all')
        {
            $('.course').show();
        }
        else
        {
            $('.course').hide();
            $(filter).show();
        }

        console.log(filter);
    });


    function filter() 
    {
        var filter 	   = '.' + $('#month').val()

        if(filter == '.all')
        {
            $('.course').show();
        }
        else
        {
            $('.course').hide();
            $(filter).show();
        }
    }

	$(document).ready(function() 
	{
		filter();
	});
	

</script>

@endsection