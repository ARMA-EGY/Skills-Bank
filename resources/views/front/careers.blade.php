
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
						<h2 class="breadcrumb-head black bold"> <span>Careers</span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

	<!-- Start of collaborations content
		============================================= -->
		<section id="blog-item" class="blog-item-post">
			<div class="container">
				<div class="blog-content-details">
					<div class="row">

						<div class="col-md-12">
							<div class="blog-post-content">

								<div class="genius-post-item">
									<div class="tab-container">
										<div class="blog-list-view">

											@foreach ($items as $item)

												<div class="list-blog-item px-3 pb-3" data-aos="fade-up" data-aos-duration="1000">
													<div class="row justify-content-center">
														<div class="col-md-8">
															<div class="blog-title-content headline">
																<h3><a>{{ $item->title}} </a></h3>
																<div class="blog-content">
																	{{ $item->description}} 
																</div>

																<div class="view-all-btn bold-font">
																	<a>Experience: {{ $item->experienced}} </a>
																</div>
															</div>
														</div>
														<div class="col-md-4 m-auto text-center">
															<div class="mt-2 text-center">
																<button class="btn btn-sm text-uppercase gradient-bg text-white apply-job" data-name="{{$item->title}}" data-id="{{$item->id}}">Apply Now</button>
															</div>
														</div>
													</div>
												</div>

											@endforeach

										</div>
									</div>
								</div>


								<!-- Pagination -->
								<div class="row">
									<div class="col-12 d-flex justify-content-center py-4">
										{{$items->links()}}
									</div>
								</div>
								<!-- end: Pagination -->

							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
	<!-- End of collaborations content
		============================================= -->


	<!-- Career Modal -->
	<div class="modal fade" id="careerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Apply Job</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<form class="career_form">
				@csrf
				<div class="modal-body">

					<div class="course-item-pic-text text-center" style="border: unset;">
						<div class="course-item-text p-3">
							<div class="course-title mt10 headline pb-2 relative-position">
								<h3><a href="#" id="career_name"></a></h3>
								<input type="hidden" id="career_id" name="career_id">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="font-weight-bold" for="inputName">Full Name</label>
						<input type="text" name="name" class="form-control field1" id="inputName" required>
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
							<label class="font-weight-bold" for="inputDate">Available Date</label>
							<input type="date" name="available_date" class="form-control field1" id="inputDate" required>
						</div>
						<div class="form-group col-md-6">
							<label class="font-weight-bold" for="inputCV">Upload CV</label>
							<input type="file" name="cv" class="form-control field1" accept="application/msword, application/pdf, image/*" id="inputCV" required>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary font-weight-bold submit">Confirm</button>
				</div>
			</form>
		</div>
		</div>
	</div>

@endsection


@section('script')

<script>

	$(document).on("click",".apply-job", function()
	{
		var id 	  	= $(this).attr('data-id');
		var name  	= $(this).attr('data-name');

		$('#careerModal').modal('show');

		$("#career_name").text(name);
		$("#career_id").val(id);
	});

        
	$(document).on('submit', '.career_form', function(e)
	{
		e.preventDefault();
		let formData = new FormData(this);
		$('.submit').prop('disabled', true);

		var head1 	= 'Thank You';
		var title1 	= 'Your Career Request Has Been Sent Successfully, We will contact you ASAP. ';
		var head2 	= 'Oops...';
		var title2 	= 'Something went wrong, please try again later.';

		$.ajax({
			url: 		"{{route('career-request')}}",
			method: 	'POST',
			data: formData,
			dataType: 	'json',
			contentType: false,
			processData: false,
			success : function(data)
			{
				$('#careerModal').modal('hide');
				$('.submit').prop('disabled', false);
				if (data['status'] == 'true')
				{
					Swal.fire(
							head1,
							title1,
							'success'
							)
					$('.field1').text('');
					$('.field1').val('');
				}
				else if (data['status'] == 'false')
				{
					Swal.fire(
							head2,
							title2,
							'error'
							)
				}
			},
			error : function(reject)
			{
				$('.submit').prop('disabled', false);
				var response = $.parseJSON(reject.responseText);
				$.each(response.errors, function(key, val)
				{
					Swal.fire(
							head2,
							val[0],
							'error'
							)
				});
			}
			
		});

	});

</script>

@endsection