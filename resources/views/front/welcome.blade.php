
@extends('layouts.front')


@section('content')

	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">

				@foreach ($sliders as $slider)
					
					<div class="slider-area slider-bg-1 relative-position" style="background-image: url({{asset('storage/'.$slider->image)}});">
						<div id="particles-stars" class="particles"></div>
						<div class="slider-text">
							<div class="section-title mb20 headline text-center">
								<div class="layer-1-1">
									<span class="subtitle text-uppercase text-white">EDUCATION & TRAINING ORGANIZATION</span>
								</div>
								<div class="layer-1-3">
									<h2><span>This is</span> Where You <br> Fuel Their <span>Skills Bank</span></h2>
								</div>
							</div>
							<div class="layer-1-4">
								<div id="course-btn">
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="{{route('about')}}">Know More About Us<i class="fas fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				@endforeach

			</div>
		</section>
	<!-- End of slider section
		============================================= -->


	<!-- Start of Search Courses
		============================================= -->
		<section id="search-course" class="search-course-section search-course-third" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
				<div class="search-counter-up mb-4">

					<div class="section-title relative-position my-3 headline text-center">
						<h2>In 5 Years <span>We Fueled</span></h2>
					</div>
					
					<div class="version-four">
						<div class="row justify-content-center">

							<div class="col-md-3 hvr-float-shadow">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<img src="{{asset('front_assets/img/icons/corporates.png')}}">
									</div>
									<div class="counter-number ml-2">
										<span class="counter-count bold-font">200</span><span>+</span>
										<p>Corporates</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3 hvr-float-shadow">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<img src="{{asset('front_assets/img/icons/trainees.png')}}">
									</div>
									<div class="counter-number ml-2">
										<span class="counter-count bold-font">13</span><span>.000+</span>
										<p>Trainees</p>
									</div>
								</div>
							</div>
							<!-- /counter -->
						</div>
					</div>

					<div class="version-four">
						<div class="row">
							<div class="col-md-3 hvr-float-shadow">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<img src="{{asset('front_assets/img/icons/time.png')}}">
									</div>
									<div class="counter-number ml-2">
										<span class="counter-count bold-font">8 </span><span>.000+</span>
										<p>Training Hours</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3 hvr-float-shadow">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<img src="{{asset('front_assets/img/icons/sector.png')}}">
									</div>
									<div class="counter-number ml-2">
										<span class="counter-count bold-font">21</span><span>+</span>
										<p>Different Business Sectors</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3 hvr-float-shadow">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<img src="{{asset('front_assets/img/icons/locations.png')}}">
									</div>
									<div class="counter-number ml-2">
										<span class="counter-count bold-font">15</span><span>+</span>
										<p>Governorates Around Egypt</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3 hvr-float-shadow">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<img src="{{asset('front_assets/img/icons/trainer.png')}}">
									</div>
									<div class="counter-number ml-2">
										<span class="counter-count bold-font">250</span><span>+</span>
										<p>Qualified Trainers</p>
									</div>
								</div>
							</div>
							<!-- /counter -->
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of Search Courses
		============================================= -->


	<!-- Start of about us section
		============================================= -->
		<section id="about-us" class="about-us-section home-secound home-third pt-5">
			<div class="container">
				<div class="section-title relative-position mb20 headline text-center">
					<span class="subtitle ml42 text-uppercase">SKILLS BANK SOLUTIONS</span>
					<h2><span>How Do We</span> Fuel Your Skills Bank? </h2>
				</div>

				<div class="row justify-content-center" data-aos="fade-right" data-aos-duration="1000">

					<div class="col-md-4 mb-4">
						<div class="about-box hvr-grow-shadow">
							<div class="about-us-text" style="background: url({{asset('front_assets/img/about/1.jpg')}});background-size: cover;position: relative;">
								<div class="overlay"></div>
								<div class="section-title2 relative-position mb20 headline text-center text-yellow">
									<a href="{{route('practical')}}"><h6 class="font-weight-bold">Customized & Practical Training Programs </h6></a>
								</div>
								<div class="about-content-text text-center relative-position">
									<p class="text-white">The Skills Bank Learning Design team customizes all the training programs needed to level up every core competency your team members have in their skills bank </p>
									<div class="about-btn mt-4 text-center">
										<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
											<a href="{{route('practical')}}">Read More<i class="fas fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /box -->

					<div class="col-md-4 mb-4">
						<div class="about-box hvr-grow-shadow">
							<div class="about-us-text" style="background: url({{asset('front_assets/img/about/2.jpg')}});background-size: cover;position: relative;">
								<div class="overlay"></div>
								<div class="section-title2 relative-position mb20 headline text-center text-yellow">
									<a href="{{route('virtual')}}"><h6 class="font-weight-bold">Virtual Training </h6></a>
								</div>
								<div class="about-content-text text-center relative-position">
									<p class="text-white">Amongst the Coronavirus circumstances, we became highly aware of the urge of providing you with virtual training options.</p>
									<div class="about-btn mt-4 text-center">
										<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
											<a href="{{route('virtual')}}">Read More<i class="fas fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /box -->

					<div class="col-md-4 mb-4">
						<div class="about-box hvr-grow-shadow">
							<div class="about-us-text" style="background: url({{asset('front_assets/img/about/3.jpg')}});background-size: cover;position: relative;">
								<div class="overlay"></div>
								<div class="section-title2 relative-position mb20 headline text-center text-yellow">
									<a href="{{route('videos')}}"><h6 class="font-weight-bold">Customized e-Learning Training Production </h6></a>
								</div>
								<div class="about-content-text text-center relative-position">
									<p class="text-white">We have responded to the increasing number of clients who want to incorporate training videos in which star Subject Matter Experts (SMEs). </p>
									<div class="about-btn mt-4 text-center">
										<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
											<a href="{{route('videos')}}">Read More<i class="fas fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /box -->

					<div class="col-md-4 mb-4">
						<div class="about-box hvr-grow-shadow">
							<div class="about-us-text" style="background: url({{asset('front_assets/img/about/4.jpg')}});background-size: cover;position: relative;">
								<div class="overlay"></div>
								<div class="section-title2 relative-position mb20 headline text-center text-yellow">
									<a href="{{route('designing')}}"><h6 class="font-weight-bold">Designing Learning Journeys for full tracks </h6></a>
								</div>
								<div class="about-content-text text-center relative-position">
									<p class="text-white">We understand the huge effort, knowledge, and focus needed to create a long term training tracks. We spare you all of that through our professional</p>
									<div class="about-btn mt-4 text-center">
										<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
											<a href="{{route('designing')}}">Read More<i class="fas fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /box -->

					<div class="col-md-4 mb-4">
						<div class="about-box hvr-grow-shadow">
							<div class="about-us-text" style="background: url({{asset('front_assets/img/about/5.jpg')}});background-size: cover;position: relative;">
								<div class="overlay"></div>
								<div class="section-title2 relative-position mb20 headline text-center text-yellow">
									<a href="{{route('assessments')}}"><h6 class="font-weight-bold">Skills Assessments </h6></a>
								</div>
								<div class="about-content-text text-center relative-position">
									<p class="text-white">Every now and then, you need to know where your human assets stand and what they need to effectively move forward towards achieving your next organizational goal. </p>
									<div class="about-btn mt-4 text-center">
										<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
											<a href="{{route('assessments')}}">Read More<i class="fas fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /box -->
					
				</div>
				
			</div>
		</section>
	<!-- End of about us section
		============================================= -->

	<!-- Start of Who Do section
		============================================= -->
		<section class="about-us-section home-secound home-third pt-4 pb-5" data-aos="flip-down" data-aos-duration="1000">
			<div class="container">
				<div class="section-title relative-position mb20 headline text-center">
					<span class="subtitle ml42 text-uppercase">OUR TRAINEES</span>
					<h2><span>Who Do</span> We Train? </h2>
				</div>
			</div>
			<div class="about-course-categori one-page-category about-teacher-2">
				<div class="container">
					<div class="row text-center justify-content-center">

						<div class="col-md-3">
							<div class="category-icon-title text-center">
								<div class="category-icon">
									<img src="{{asset('front_assets/img/fresh.svg')}}" class="who-img">
								</div>
								<div class="category-title">
									<h4>Juniors</h4>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="category-icon-title text-center">
								<div class="category-icon">
									<img src="{{asset('front_assets/img/mid.svg')}}" class="who-img">
								</div>
								<div class="category-title">
									<h4>Mid Career </h4>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="category-icon-title text-center">
								<div class="category-icon">
									<img src="{{asset('front_assets/img/ex.svg')}}" class="who-img">
								</div>
								<div class="category-title">
									<h4>Executives and business leaders </h4>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
	<!-- End Who Do section
		============================================= -->

	<!-- Start why choose section
		============================================= -->
		<section id="why-choose" class="why-choose-section version-four backgroud-style" style="position: relative;">

			<div class="container">
				<div class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase">WHAT'S DIFFERENT</span>
					<h2><span>Why Do </span> 200+ Corporations Trust Skills Bank? </h2>
					<div class="mt-3 mb-5">
						<span>We actually asked them to answer that!</span>
						<p>You know, there is no better way to get trustworthy feedback. Their answers were really uplifting, and we gathered the most common responses for you.</p>
					</div>
				</div>
				<div class="extra-features-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="extra-left">

								<div class="extra-left-content" data-aos="fade-up-right" data-aos-duration="1000">
									<div class="extra-icon-text text-left tooltip2" data-tooltip-content="#why-1">
										<div class="features-icon gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>01</span>
											</div>
										</div>
										<div class="features-text">
											<div class="features-text-title">
												<h3>Accountability Is For Real</h3>
											</div>
											<div class="features-text-dec">
												<span>Responding on the spot to your requests, proposing effective...</span>
											</div>
										</div>
									</div>
									<div class="d-none">
										<div id="why-1">
											<p>Responding on the spot to your requests, proposing effective solutions to any obstacle you face, getting approvals quickly, always following up, and keeping you posted with any update you need; this is how our team translates “accountability” into real daily actions.</p>
											<p>Every time you deal with us, there is always an experienced account manager who is specially hired to quickly and effectively assist you through every step. You can count on them 100% as they are empowered to make decisions, take actions, and are closely mentored by the Skills Bank management team. They are resourceful, accountable, well-trained, and experienced enough to make the training and overall process easier for you. </p>
										</div>
									</div>
								</div>
								<!-- // extra-left-content --> 

								<div class="extra-left-content" data-aos="fade-up-right" data-aos-duration="1200">
									<div class="extra-icon-text tooltip2" data-tooltip-content="#why-2">
										<div class="features-icon gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>02</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title">
												<h3>The Only Rule Is “Make Things Happen!” </h3>
											</div>
											<div class="features-text-dec">
												<span>Clients’ requests are not subjected to rigid procedures because...</span>
											</div>
										</div>
									</div>
									<div class="d-none">
										<div id="why-2">
											<p>Clients’ requests are not subjected to rigid procedures because the only rule here is to make things happen for you!  </p>
											<p>The Skills Bank system is designed with a big room for flexibility to smoothly fulfill clients’ various requests. The team is also open to change and caters to special requests, and they’re well-trained to work everything around to fit your needs without compromising quality or consistency.  </p>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->

								<div class="extra-left-content" data-aos="fade-up-right" data-aos-duration="1400">
									<div class="extra-icon-text tooltip2" data-tooltip-content="#why-3">
										<div class="features-icon gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>03</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title">
												<h3>“They Always Keep Us Posted”</h3>
											</div>
											<div class="features-text-dec">
												<span>Thanks to our comprehensive reporting systems, this is one of the...</span>
											</div>
										</div>
									</div>
									<div class="d-none">
										<div id="why-3">
											<p>Thanks to our comprehensive reporting systems, this is one of the most common testimonials we always receive. You can skip attending the training, and you will still know everything that happened pre and during the training and what should be done after.</p>
											<p>Our team has developed a report that has a summary of the training, daily attendance, and audience reactions and attitude day-by-day. It also provides a detailed review of each trainee’s engagement level during training, pre and post-assessment, and development recommendations to facilitate steps moving forward.  </p>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->
							</div><!-- /extra-left -->
						</div>
						<!-- /col-sm-3 -->

						<div class="col-sm-4" data-aos="zoom-in-up" data-aos-duration="1000">
							<div class="extra-pic text-center">
								<img src="{{asset('front_assets/img/skillzawy.png')}}" alt="img">
							</div>
						</div>
						<!-- /col-sm-6 -->

						<div class="col-md-4 col-sm-6">
							<div class="extra-right">
								<div class="extra-left-content" data-aos="fade-up-left" data-aos-duration="1600">
									<div class="extra-icon-text text-right tooltip2" data-tooltip-content="#why-4">
										<div class="features-icon gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>04</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title text-right">
												<h3>A Communication Plan Spares You A LOT</h3>
											</div>
											<div class="features-text-dec text-right">
												<span>Our team is not only accountable and supportive with reports and...</span>
											</div>
										</div>
									</div>
									<div class="d-none">
										<div id="why-4">
											<p>Our team is not only accountable and supportive with reports and facilitating quick assistance, but they also do most of the job for you! You don’t need to follow up or update your trainees anymore. Just give us the attendance sheet with their contacts, and we take it from there.  </p>
											<p>Our team developed a communication plan that guides attendees from start to finish. It starts with an invitation to the training, a second reminder for the training dates, and what they need to prepare before attending. We also provide an open communication channel where we walk each trainee through the full journey of the training and keep in touch if they need to inquire about anything related to the training. If it’s virtual training, we make sure that every trainee knows how to use the learning platform and test it if needed. This way, we spare you the hassle of coordination; you watch, and we act.  </p>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->

								<div class="extra-left-content" data-aos="fade-up-left" data-aos-duration="1800">
									<div class="extra-icon-text text-right tooltip2" data-tooltip-content="#why-5">
										<div class="features-icon gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>05</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title text-right">
												<h3>In-House Learning Design Department </h3>
											</div>
											<div class="features-text-dec text-right">
												<span>A trusted training program is a result of a credible, experienced,...</span>
											</div>
										</div>
									</div>
									<div class="d-none">
										<div id="why-5">
											<p>A trusted training program is a result of a credible, experienced, and qualified Learning Design department. At Skills Bank, we do not leave a chance for any piece of information that is outdated, inexact, or subjective.  </p>
											<p>Our training program designs rely on hands-on experience that is backed by science. The only source for all of our programs and materials is right from our Learning Design department. The content is fresh, interactive, original, customized, and exclusive, with trusted resources and intensive professional frameworks.  </p>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->

								<div class="extra-left-content" data-aos="fade-up-left" data-aos-duration="2000">
									<div class="extra-icon-text text-right tooltip2" data-tooltip-content="#why-6">
										<div class="features-icon gradient-bg bg-yellow text-center">
											<div class="feat-tag">
												<span>06</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title text-right">
												<h3> A1 Trainers With Wide Exposure</h3>
											</div>
											<div class="features-text-dec text-right">
												<span>The trainer selection process at Skills Bank is based on an intensive...</span>
											</div>
										</div>
									</div>
									<div class="d-none">
										<div id="why-6">
											<p>The trainer selection process at Skills Bank is based on an intensive filtration process. First of all, the selection of trainers is always dependent on trainees’ fields and career levels. Then come our prerequisites.  </p>
											<p>Trainers must adhere to the upscaling standards of our clientele. They must also have solid experience in delivering corporate training, with a minimum of 5 proven years of hands-on experience in the given topic since we train based on real-time experiences rather than the usual standard information. Not to mention, being technology-oriented with the cleverness of perfectly utilizing it for a better learning experience is a must. Most importantly, selected trainers must have international exposure that allows them to tackle any topic in an inclusive, objective, and open-minded approach. Currently, our team of trainers encompasses 250 qualified and experienced matter experts who ticked the box for each prerequisite on our list.  </p>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->
							</div><!-- /extra-left -->
						</div>
						<!-- /col-sm-3 -->
					</div><!-- /row -->
				</div>
			</div>
			
		</section>
	<!-- End why choose section
		============================================= -->


	<!-- Start popular course
		============================================= -->
		<section id="popular-course" class="popular-course-section popular-three" data-aos="flip-down" data-aos-duration="1000">
			<div class="container">
				<div class="section-title mb20 headline text-left">
					<span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
					<h2>Top of the Month <span>Workshops.</span> </h2>
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
										<li><i class="far fa-clock mr-3"></i> From {{\Carbon\Carbon::parse($course->time_from)->format('h:i a')}} To {{\Carbon\Carbon::parse($course->time_to)->format('h:i a')}}</li>
									</ul>
								</div>
								<div class="mt-2 text-center">
									<button class="btn btn-sm text-uppercase gradient-bg text-white book-course" data-id="{{$course->id}}" data-name="{{$course->name}}" data-price="{{$course->price}}" data-type="{{$course->type}}" data-image="{{asset($course->image)}}" data-date="{{\Carbon\Carbon::parse($course->start_date)->format('d F')}}" data-date2="{{$course->start_date}}">Book Now</button>
								</div>
							</div>
						</div>
						<!-- /item -->
						
					@endforeach
					
				</div>
			</div>
		</section>
	<!-- End popular course
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


	<!-- Start of contact area
		============================================= -->
		<section id="contact-area" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row">
						<div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<span class="subtitle ml42  text-uppercase">CONTACT US</span>
									<h2><span>Have Some Skills Bank to Enrich?</span></h2>
								</div>

								<div class="contact_secound_form">
									<form class="contact_form">
										@csrf
										<div class="contact-info">
											<input class="name field1" name="name" type="text" placeholder="Your Name." required>
										</div>
										<div class="contact-info">
											<input class="phone field1" name="phone" type="number" placeholder="Your Phone" required>
										</div>
										<div class="contact-info">
											<input class="email field1" name="email" type="email" placeholder="Your Email" required>
										</div>
										<div class="contact-info">
											<input class="company field1" name="company" type="text" placeholder="Company Name" required>
										</div>
										<div class="contact-info">
											<input class="position field1" name="position" type="text" placeholder="Your Position" required>
										</div>
										<textarea class="field1" placeholder="Message." name="message" spellcheck="false" required></textarea>
										<div class="nws-button text-center  gradient-bg text-capitalize mb-4">
											<button type="submit" class="submit" value="Submit">SEND MESSAGE <i class="fas fa-caret-right text-yellow"></i></button> 
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
							<div class="section-title headline text-center">
									<h2>You Can Find Us <span> EVERYWHERE!</span></h2>
							</div>
							<img src="{{asset('front_assets/img/map.png')}}" class="img-fluid rounded">
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact area
		============================================= -->


@endsection


@section('script')

    <script>
        $(document).ready(function() 
        {
            $('.tooltip2').tooltipster({
            contentCloning: true, 
            contentAsHTML: true, 
            interactive: true, 
            animation: 'fade',
            side: [ 'left', 'top', 'bottom', 'right'],
            delay: 200,
            maxWidth: 360,
            minWidth: 200,
            theme: 'tooltipster-borderless'
            });
        });
    </script>

@endsection