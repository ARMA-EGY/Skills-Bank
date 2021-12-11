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
                  <li class="breadcrumb-item"><a href="{{route('learningtree.index')}}">Lear</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ isset($item) ? 'Edit Leaning Tree' : 'Add New Learning Tree' }}</li>
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

      <form action="{{ isset($item) ? route('learningtree.update', $item->id) : route('learningtree.store')  }}" method="post" enctype="multipart/form-data">
        @csrf

          @if (isset($item))
             @method('PUT')
          @endif


          <div class="row">

              <div class="col-xl-12">

                  <div class="card card-defualt">
                      <div class="card-header"><i class="fa fa-info-circle"></i> {{__('master.INFORMATION')}} </div>
                      <div class="card-body">
                              

                    <!--=================  Tile  =================-->
                    <div class="row">
                        <div class="form-group col-md-6 mb-2 text-left">
                            <label class="font-weight-bold text-uppercase">Title</label>
                            <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" placeholder="Title" value="{{ isset($item) ? $item->title : old('title') }}" required>
                        
                            @error('title')
                                <div>
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror

                        </div> 
                        
                        

          
                        









                        <div class="row">

<!--=================  description  =================-->
<div class="col-md-6">
    <div class="card card-defualt">
        <div class="card-header">description</div>

        <div class="card-body">

            <div class="tab-content my-4" id="myTabContent">
                

                    <div class="text-right mb-3">
                        <a class="btn btn-sm btn-primary text-white add_description"><i class="fa fa-plus"></i>  </a>
                    </div>

                    <div id="append_description">
                        
                        @if (isset($item->description))
                        
                            @foreach ($item->description as $description)
                                <div class="form-row parent description_en description_{{ $loop->iteration }}">
                                    <div class="form-group col-md-10 mb-2">
                                        <input type="text" class="form-control form-control-sm" name="description[]" value="{{$description->title}}" required>
                                    </div>
                                    <div class="form-group col-md-2 m-auto text-center">
                                        <a class="btn btn-sm btn-danger remove3 text-white" data-class="description_{{ $loop->iteration }}">
                                            <i class="fa fa-times "></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            
                        @endif
                            
                    </div>
                    
                
            </div>


        </div>
    </div>
</div>



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



  $('.add_description').click(function(){

    var item = $('.description').length
    var total = item + 1;

    $("#append_description").append('<div class="form-row parent description description_'+total+'"><div class="form-group col-md-10 mb-2"><input type="text" class="form-control form-control-sm" name="description[]" value="" required></div><div class="form-group col-md-2 m-auto text-center"><a class="btn btn-sm btn-danger remove3 text-white" data-class="description_'+total+'"><i class="fa fa-times "></i></a></div></div>');

  });

  $(document).on("click",".remove3", function()
        {
            var item 	= '.' + $(this).attr('data-class');
            $(item).remove();
        });
</script>
@endsection
