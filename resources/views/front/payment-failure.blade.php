
@extends('layouts.front')

@section('style')

<style>
	.payment
	{
		border:1px solid #f2f2f2;
		max-height:300px;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
		text-align: center;
		font-size: 30px;
		color: #fff;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a
    {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
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
						<h2 class="breadcrumb-head black bold"> <span></span></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

		<div class="container mb-5">
			<div class="row">
			   <div class="col-md-6 mx-auto mt-5">
				  <div class="payment">
					 <div class="payment_header bg-danger">
						<div class="check">
							<i class="fa fa-check-close" aria-hidden="true"></i> Payment Failed!
						</div>
					 </div>
					 <div class="content">
						<h1>Transactioin was declined</h1>
						<p>Please try agian later </p>
						<a class="btn btn-primary mt-4 mb-3" href="{{route('welcome')}}">Go to Home</a>
					 </div>
					 
				  </div>
			   </div>
			</div>
		 </div>

@endsection


@section('script')


@endsection