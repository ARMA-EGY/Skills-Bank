
@extends('layouts.landing')


@section('style')
<style>
.owl-controls
{
    display: none;
}
</style>
@endsection

@section('content')

	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
					
					<div class="slider-area slider-bg-1 relative-position" style="background-image: url({{asset($content->image_1)}});">
						<div id="particles-stars" class="particles"></div>
						<div class="slider-text">
							<div class="section-title mb20 headline text-center">
								<div class="layer-1-1">
									<span class="subtitle text-uppercase text-white">EDUCATION & TRAINING ORGANIZATION</span>
								</div>
								<div class="layer-1-3">
									<h2><span>{!!$content->text_1!!}</span></h2>
								</div>
							</div>
						</div>
					</div>

			</div>
		</section>
	<!-- End of slider section
		============================================= -->


	<!-- Start of Search Courses
		============================================= -->
		<section id="search-course" class="search-course-section search-course-third bg-light py-5" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
				<div class="search-counter-up mb-4">
					<div class="relative-position my-3 headline text-center">
						{!!$content->text_2!!}
					</div>
				</div>
			</div>
		</section>
	<!-- End of Search Courses
		============================================= -->


	<!-- Start of about us section
		============================================= -->
		<section class="about-page-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="about-us-content-item">

							<div class="row" data-aos="fade-left" data-aos-duration="1000">
								<div class="col-md-7 m-auto">
									<div class="about-text-item">
										{!!$content->text_3!!}
									</div>
								</div>

								<div class="col-md-4 m-auto">
									<img src="{{asset($content->image_2)}}" class="img-fluid br-30">
								</div>
							</div>

							<div class="row" data-aos="fade-right" data-aos-duration="1000">
								<div class="col-md-4 m-auto">
									<img src="{{asset($content->image_3)}}" class="img-fluid br-30">
								</div>

								<div class="col-md-7 m-auto">
									<div class="about-text-item">
										{!!$content->text_4!!}
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</section>
	<!-- End of about us section
		============================================= -->


	<!-- Start of contact area
		============================================= -->
		<section id="contact-area" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row justify-content-center">
						<div class="col-md-8" data-aos="fade-right" data-aos-duration="1000">
							<div class="contact-left-content" style="max-width: unset;">
								<div class="section-title  mb45 headline text-center">
									<h2><span>Have Some Skills Bank to Enrich?</span></h2>
								</div>

								<div class="contact_secound_form">

                                    <form class="landing_form" style="padding: 20px;border: 1px solid #ccc;border-radius: 10px;box-shadow: 0 0 5px 1px #ccc;">
                                        @csrf

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="font-weight-bold" for="inputName">First Name</label>
                                                <input type="text" name="name" class="form-control field1" id="inputName" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="font-weight-bold" for="inputLastName">Last Name</label>
                                                <input type="text" name="lastname" class="form-control field1" id="inputLastName" required>
                                            </div>
                                        </div>	

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="font-weight-bold" for="inputEmail">Email</label>
                                                <input type="email" name="email" class="form-control field1" id="inputEmail" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="font-weight-bold" for="inputphone">Phone</label>
                                                <input type="number" name="phone" class="form-control field1" id="inputPhone" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="font-weight-bold" for="inputCompany">Company</label>
                                                <input type="text" name="company" class="form-control field1" id="inputCompany" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="font-weight-bold" for="inputPosition">Position</label>
                                                <input type="text" name="position" class="form-control field1" id="inputPosition" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="font-weight-bold" for="inputCompany">Message</label>
                                                <textarea class="form-control field1" rows="5" placeholder="Write your message here." name="message" spellcheck="false"></textarea>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group form-check">
                                            <input type="checkbox" name="newsletter" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Subscribe to our newsletters</label>
                                        </div>
                                        
                                        <div class="nws-button text-center  gradient-bg text-capitalize mb-4">
                                            <button type="submit" class="submit" value="Submit">SEND MESSAGE <i class="fas fa-caret-right text-yellow"></i></button> 
                                        </div>
                                    </form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact area
		============================================= -->


	<!-- Start of testimonial secound section
		============================================= -->
		<section id="testimonial_2" class="testimonial_2_section pt-4 mb-5" data-aos="flip-right" data-aos-duration="1000">
			<div class="container">
				<div class="testimonial-slide">
					
					<div class="section-title mb20 headline text-left">
						<span class="subtitle ml42 text-uppercase">WHAT THEY SAY ABOUT US</span>
						<h2>Corporate <span>Testimonial.</span></h2>
					</div>

					<div  id="testimonial-slide-item" class="testimonial-slide-area">

						@foreach ($testimonials as $testimonial)
							<div class="student-qoute">
								<p>{!!$testimonial->description!!}</p>
								<div class="student-name-designation">
									<img class="d-inline-block rounded mr-2" style="width: 50px;" src="{{asset($testimonial->image)}}" alt="">
									<span class="st-name bold-font">{{$testimonial->name}}</span>
									<span class="st-designation">{{$testimonial->title}}</span>
								</div>
							</div>
						@endforeach

					</div>
				</div>
			</div>
		</section>
	<!-- End  of testimonial secound section
		============================================= -->


	<!-- Start of clients section
		============================================= -->
		<section id="sponsor" class="sponsor-section" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
					
				<div class="section-title mb20 headline text-left">
					<span class="subtitle ml42 text-uppercase">OUR AWESOME CLIENTS</span>
					<h2 class=""><span>Clients </span> We Take Pride in working with:</h2>
				</div>

				<div class="sponsor-item sponsor-1">
					@foreach ($clients as $client)
						<div class="sponsor-pic text-center">
							<img src="{{asset($client->image)}}" alt="{{$client->name}}">
						</div>
					@endforeach
				</div>
			</div>
		</section>
	<!-- End of clients section
		============================================= -->


@endsection


@section('script')

@endsection