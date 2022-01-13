@extends('layouts.admin')

@section('content')

    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Landing Pages</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        
        
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="{{ asset('landing_assets/img/page2.jpg') }}" alt="Image placeholder" class="card-img-top">
            
            <div class="card-body p-3">
              <div class="text-center">
                <h5 class="h3">
                  Landing Page Two
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Showcase - Two 
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Description Here...
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 p-3">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-primary  mr-4 "><i class="fas fa-copy"></i> Get Link</a>
                <a href="{{route('edit-landing')}}" target="_blank" class="btn btn-sm btn-info  mr-4 "><i class="fa fa-edit"></i> Edit</a>
                <a href="#" target="_blank" class="btn btn-sm btn-default float-right"><i class="far fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>
        

      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
      </footer>
    </div>

@endsection
