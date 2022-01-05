
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
						<h2 class="breadcrumb-head black bold">About <span>Skills Bank</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of about us content
		============================================= -->
		<section id="about-page" class="about-page-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="about-us-content-item">

							<div class="row" data-aos="fade-left" data-aos-duration="1000">

								<div class="col-md-7">
									<div class="about-text-item">
										<div class="about-content-text">
											<p>
												Skills Bank is a training service provider founded and managed by Mr. Mohamed El-Baz in 2016. Operating with the strong belief that every individual in any business has the power to efficiently take the lead to attain its organizational goals, the Skills Bank team strives to provide qualified training programs in the most needed skills for today’s workforce, such as management skills, MS Office skills, data analysis for businesses, and interpersonal skills to all career levels all around Egypt governorates and the Middle East region. Skills Bank's main focus is to consistently develop practical training and coaching services that are up to date, customized to clients’ needs, and have a direct positive impact on the business ecosystem. To reach that target with high quality and efficiency, Skills Bank established its own in-house Learning Design department that originally and exclusively designs every single training program conducted by the company and assigns the experienced trainer accordingly. 
											</p>
											<p>
												Since its establishment and until now, Skills Bank has a proven track record of delivering highly efficient training and coaching services to over 150 SMEs and large corporates in different sectors such as banking, pharmaceutical, oil & gas, real estate, construction, automotive, telecommunication, FMCGs, wholesale, retail, industrial, shipping, insurance, NGOs, and many others. With a head office in Cairo, the heart of Egypt, Skills Bank serves most of Egypt's governorates, including Cairo, Suez, Port Said, Alexandria, Behera, Mansoura, El Gouna, and more. It also serves Gulf countries, starting with Kuwait and KSA, and currently planning to rapidly expand in additional countries. 
											</p>
										</div>
									</div>
								</div>

								<div class="col-md-5 m-auto">
									<img src="{{asset('front_assets/img/about/abt-1.jpg')}}" class="img-fluid br-30">
								</div>
							</div>

							<div class="row" data-aos="fade-right" data-aos-duration="1000">

								<div class="col-md-5 m-auto">
									<img src="{{asset('front_assets/img/h-4.jpg')}}" class="img-fluid br-30">
								</div>

								<div class="col-md-7">
									<div class="about-text-item">
										<div class="section-title-2  headline text-left mt-5">
											<h2>Our <span>Vision</span></h2>
										</div>
										<p>
											Reshaping the learning experience for both individuals and corporations in Egypt and the Middle East. 
										</p>
									</div>
								</div>
							</div>
							
							<!-- /about-text -->
							
						</div>
					</div>
					
				</div>
			</div>
		</section>
	<!-- End of about us content
		============================================= -->


	<!-- Start of Founder Word section
		============================================= -->
		<section id="founder-word" class="faq-section faq-secound-home-version backgroud-style" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">SKILLS BANK WORD</span>
					<h2>Word By<span> The Founder</span></h2>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-9">
						<div class="about-us-content-item">

							<div class="about-text-item text-center">
								<p class="text-white">
									“When the coronavirus hit the world in the start of 2020, our vision for reshaping the learning experience was put to the test. Full teams were obliged to work from home, leaders were terrified about whether their human calibers could make it or not, and there was an urge for employee training on how to handle a crisis that they never faced before. An entire new bank of skills was needed for each individual! Crisis management, how to effectively lead a virtual team, agile working changing business model change management, working under pressure, and a lot more. That was the challenging phase where Skills Bank needed to immediately restructure training materials, premises, methodologies to support businesses to survive while keeping the focus on track and committing to the new obligations. It was the real challenge.  
								</p>
								<p class="text-white">
									Thanks to our dedicated team of trainers, Learning Design experts, and account managers, Skills Bank successfully redefined the full training experience in 6 months. We went virtually while keeping the usual efficient training experience with new training solutions and systems. We coped fast with the business crisis, helped our clients to do the same, and currently keep leveling up. 
								</p>
								<p class="text-white">
									Based on our clients' testimonials, we did succeed in reshaping the learning experience in a very short time with effective solutions. We pride ourselves on making the vision a reality, and we can’t be more excited about what’s coming next." 
								</p>

								<div class="section-title-2 headline text-right my-2 founder-word">
									<h2 class="mb-2 text-white"><span>Mohamed El-Baz</span></h2>
									<div class="text-white"><span>Managing Director of Skills Bank</span> 
									</div>
								</div>

							</div>
							<!-- /about-text -->
							
						</div>
					</div>
					
				</div>

			</div>
		</section>
	<!-- End  of Founder Word section
		============================================= -->


@endsection


@section('script')


@endsection