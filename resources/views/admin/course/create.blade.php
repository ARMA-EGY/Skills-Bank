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
                  <li class="breadcrumb-item"><a href="{{route('courses.index')}}">{{__('master.COURSES')}}</a></li>
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
                                <!--=================  TIME FROM  =================-->
                                <div class="form-group col-md-6 mb-2 text-left">
                                    <label class="font-weight-bold text-uppercase">{{__('master.FROM')}}</label>
                                    <input type="time" name="time_from" class="@error('time_from') is-invalid @enderror form-control" placeholder="{{__('master.FROM')}}" value="{{ isset($item) ? $item->time_from : old('time_from') }}" required>
                                
                                    @error('time_from')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                
                                </div>
                                <!--=================  TIME TO  =================-->
                                <div class="form-group col-md-6 mb-2 text-left">
                                    <label class="font-weight-bold text-uppercase">{{__('master.TO')}}</label>
                                    <input type="time" name="time_to" class="@error('time_to') is-invalid @enderror form-control" placeholder="{{__('master.TO')}}" value="{{ isset($item) ? $item->time_to : old('time_to') }}" required>
                                
                                    @error('time_to')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                
                                </div>


                            </div>
                            <hr class="my-2">

                            <div class="row">

                                <!--=================  PRICE  =================-->
                                <div class="form-group col-md-6 mb-2 text-left">
                                    <label class="font-weight-bold text-uppercase">{{__('master.PRICE')}} </label>
                                    <input type="number" name="price" class="@error('price') is-invalid @enderror form-control" placeholder="{{__('master.PRICE')}}" value="{{ isset($item) ? $item->price : old('price') }}" required>
                                
                                    @error('price')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                
                                </div>

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
                            <hr class="my-2">

                            <div class="row">

                                <!--=================  TYPE  =================-->
                                <div class="form-group col-md-6 mb-2 text-left">
                                    <label class="font-weight-bold text-uppercase">Type </label>
                                    <select class="form-control" name="type" required>
                                        <option value="Class Room" @if (isset($item))  @if ($item->type == 'Class Room' ) selected @endif @endif>Class Room</option>
                                        <option value="Virtual" @if (isset($item))  @if ($item->type == 'Virtual' ) selected @endif @endif>Virtual</option>
                                    </select>

                                    @error('type')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                
                                </div>

                                <!--=================  LANG  =================-->
                                <div class="form-group col-md-6 mb-2 text-left">
                                    <label class="font-weight-bold text-uppercase">Country</label>
                                    <select class="form-control" name="lang" required>
                                        <option value="eg" @if (isset($item))  @if ($item->type == 'eg' ) selected @endif @endif>Egypt</option>
                                        <option value="sa" @if (isset($item))  @if ($item->type == 'sa' ) selected @endif @endif>KSA</option>
                                    </select>
                                    
                                    @error('lang')
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
                            <div class="avatar-preview" style="background-image: url({{ isset($item) ?  asset($item->image)  : asset('images/no-image.png') }})"></div>
                            <div class="my-2 text-left">
                              <small> {!! __('master.IMAGE-INFO') !!} </small> 
                            </div>
                            <input class="btn-info form-control form-control-sm" type="file" accept="image/*" id="avatar" name="image" multiple="false" />
                        </div>
                    </div>

                </div>

                <div class="col-xl-12">
                    <div class="card card-defualt">
                        <div class="card-header"> Description</div>
                        <div class="card-body">
                                <div class="form-group">
                                    <textarea id="content" class="content" name="description" rows="20">{{ isset($item) ? $item->description : old('description') }}</textarea>
                                    @error('description')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card card-defualt">
                        <div class="card-header"> Full Schedule</div>
                        <div class="card-body">
                                <div class="form-group">
                                    <textarea class="content" name="schedule" rows="20">{{ isset($item) ? $item->schedule : old('schedule') }}</textarea>
                                    @error('schedule')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                
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
  <script src="https://cdn.tiny.cloud/1/mq6umcdg6y938v1c32lokocdpgrgp5g2yl794h4y1braa6j6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


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

        tinymce.init({
            selector:'textarea.content',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',

                file_picker_callback (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

                tinymce.activeEditor.windowManager.openUrl({
                url : '/file-manager/tinymce5',
                title : 'Laravel File manager',
                width : x * 0.8,
                height : y * 0.8,
                onMessage: (api, message) => {
                    callback(message.content, { text: message.text })
                }
                })
                }

        });

    </script>
@endsection
