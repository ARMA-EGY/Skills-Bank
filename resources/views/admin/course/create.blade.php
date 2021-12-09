@extends('layouts.master')

@section('style')
@endsection

@section('content')


    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">

            <div class="col-lg-12 text-left">
              <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('master.DASHBOARD')}}</a></li>
                  <li class="breadcrumb-item"><a href="{{route('courses.index')}}">{{__('master.COURSE')}}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ isset($item) ? __('master.EDIT-COURSE') : __('master.ADD-NEW-COURSE') }}</li>
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

        <form action="{{ isset($item) ? route('courses.update', $item->id) : route('courses.store')  }}" method="post" enctype="multipart/form-data">
            @csrf

            @if (isset($item))
               @method('PUT')
            @endif


            <div class="row">

                <div class="col-xl-8">

                    <div class="card card-defualt">
                        <div class="card-header"><i class="fa fa-info-circle"></i> {{__('master.COURSE-INFORMATION')}} </div>
                        <div class="card-body">
                                
                                <div class="row">

                                    <!--=================  Name  =================-->
                                    <div class="form-group col-md-6 mb-2 text-left">
                                        <label class="font-weight-bold text-uppercase">{{__('master.NAME')}}</label>
                                        <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" placeholder="{{__('master.NAME')}}" value="{{ isset($item) ? $item->name : old('name') }}" required>
                                    
                                        @error('name')
                                            <div>
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                    
                                    </div>


                                    <!--=================  CATEGORY  =================-->
                                    <div class="form-group col-md-6 mb-2 text-left">
                                        <label class="font-weight-bold text-uppercase">{{__('master.CATEGORY')}}</label>

                                        <select class="form-control" name="category_id" required>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}" @if (isset($item))  @if ($item->category_id == $category->id ) selected @endif @endif>{{$category->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('category_id')
                                            <div>
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>


                                </div>
                                <hr class="my-2">

                                <div class="row">
                                    <!--=================  PRICE_EG  =================-->
                                    <div class="form-group col-md-6 mb-2 text-left">
                                        <label class="font-weight-bold text-uppercase">{{__('master.PRICE_EG')}} </label>
                                        <input type="number" name="price_eg" class="@error('price_eg') is-invalid @enderror form-control" placeholder="{{__('master.PRICE_EG')}}" value="{{ isset($item) ? $item->price_eg : old('price_eg') }}" required>
                                    
                                        @error('price_eg')
                                            <div>
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                    
                                    </div>
                                    <!--=================  PRICE_SR  =================-->
                                    <div class="form-group col-md-6 mb-2 text-left">
                                        <label class="font-weight-bold text-uppercase">{{__('master.PRICE_SR')}}</label>
                                        <input type="number" name="price_sr" class="@error('price_sr') is-invalid @enderror form-control" placeholder="{{__('master.PRICE_SR')}}" value="{{ isset($item) ? $item->price_sr : old('price_sr') }}" required>
                                    
                                        @error('price_sr')
                                            <div>
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                    
                                    </div>
                


                                </div>
                                <hr class="my-2">

                                <div class="row">
                                    <!--=================  START_DATE  =================-->
                                    <div class="form-group col-md-6 mb-2 text-left">
                                        <label class="font-weight-bold text-uppercase">{{__('master.START_DATE')}}</label>
                                        <input type="date" name="start_date" class="@error('start_date') is-invalid @enderror form-control" placeholder="{{__('master.START_DATE')}}" value="{{ isset($item) ? $item->start_date : old('start_date') }}" required>
                                    
                                        @error('start_date')
                                            <div>
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                    
                                    </div>
                                    <!--=================  END_DATE  =================-->
                                    <div class="form-group col-md-6 mb-2 text-left">
                                        <label class="font-weight-bold text-uppercase">{{__('master.END_DATE')}}</label>
                                        <input type="date" name="end_date" class="@error('end_date') is-invalid @enderror form-control" placeholder="{{__('master.END_DATE')}}" value="{{ isset($item) ? $item->end_date : old('end_date') }}" required>
                                    
                                        @error('end_date')
                                            <div>
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                    
                                    </div>


                                </div>


                                <hr class="my-2">

                                <div class="row">


                                    <!--=================  STUDENTS_LIMIT  =================-->
                                    <div class="form-group col-md-6 mb-2 text-left">
                                        <label class="font-weight-bold text-uppercase">{{__('master.STUDENTS_LIMIT')}}</label>
                                        <input type="number" name="students_limit" class="@error('students_limit') is-invalid @enderror form-control" placeholder="{{__('master.STUDENTS_LIMIT')}}" value="{{ isset($item) ? $item->students_limit : old('students_limit') }}" required>
                                    
                                        @error('students_limit')
                                            <div>
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                    
                                    </div>

                                </div>


                        </div>
                    </div>



                </div>

                <div class="col-xl-4">

                    <div class="card card-defualt">
                        <div class="card-header"><i class="far fa-id-badge"></i> {{__('master.COURSE-PICTURE')}} </div>
                        <div class="card-body px-3">
                            <div class="avatar-preview" style="background-image: url({{ isset($item) ?  asset($item->image)  : asset('images/avatar.png') }})"></div>
                            <div class="my-2 text-left">
                              <small> {!! __('master.IMAGE-INFO') !!} </small> 
                            </div>
                            <input class="btn-info form-control form-control-sm" type="file" accept="image/*" id="avatar" name="image" multiple="false" />
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
        
        $("#avatar").change(function()
        {
            readURL(this);
        });

    </script>
@endsection
