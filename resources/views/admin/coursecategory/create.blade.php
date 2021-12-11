@extends('layouts.master')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection


@section('content')

    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">

            <div class="col-lg-12 text-left">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{route('coursecategory.index')}}">Course Category</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ isset($item) ? __('master.EDIT-CATEGORY') : __('master.ADD-NEW-CATEGORY') }}</li>
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

      <form action="{{ isset($item) ? route('coursecategory.update', $item->id) : route('coursecategory.store')  }}" method="post" enctype="multipart/form-data">
        @csrf

          @if (isset($item))
             @method('PUT')
          @endif


          <div class="row">

              <div class="col-xl-12">

                  <div class="card card-defualt">
                      <div class="card-header"><i class="fa fa-info-circle"></i> {{__('master.INFORMATION')}} </div>
                      <div class="card-body">
                              

                    <!--=================  Name  =================-->
                    <div class="row">
                        <div class="form-group col-md-6 mb-2 text-left">
                            <label class="font-weight-bold text-uppercase">Name</label>
                            <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" placeholder="Name" value="{{ isset($item) ? $item->name : old('name') }}" required>
                        
                            @error('name')
                                <div>
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror

                        </div>                       

                    </div>
                    

                      </div>
                  </div>

              </div>


          </div>

          <div class="card card-defualt">
              <div class="card-body">
                  <div class="form-group mb-0">
                      <button type="submit" class="btn btn-success btn-block">{{ isset($item) ?  __('master.SAVE'):__('master.ADD') }}</button>
                  </div>
              </div>
          </div>

      </form>
    <!-- Footer -->
    <footer class="footer pt-0">
    </footer>
  </div>

@endsection


@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() 
  {
      $('.select2').select2();
  });

  function readURL(input) 
  {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function (e) 
          {
              $('.avatar-preview').css('background-image','url('+e.target.result+')');
          };
          
          reader.readAsDataURL(input.files[0]);
      }
  }
  
  $("#image").change(function()
  {
      readURL(this);
  });

</script>
@endsection
