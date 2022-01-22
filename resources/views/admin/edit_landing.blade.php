@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.css">
@endsection

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
                  <li class="breadcrumb-item"><a href="{{route('admin.landing')}}">Landing Page</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Page</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: Header -->


    <!-- Page content -->
    <div class="container-fluid mt--6">

        <form action="{{route('updatelanding')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-xl-8">

                    <div class="card card-defualt">
                        <div class="card-header"><i class="fa fa-info-circle"></i> Text </div>
                        <div class="card-body">
                            <div class="row">

                                <!--=================  Title =================-->
                                <div class="form-group col-md-12 mb-2">
                                    <label class="font-weight-bold">Title</label>
                                    <input type="text" name="text_1" class="form-control" value="{{ isset($content) ? $content->text_1 : old('text_1') }}" required>
                                    @error('text_1')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                    <hr>
                                </div>

                                <!--=================  Text 1 =================-->
                                <div class="form-group col-md-12 mb-2">
                                    <label class="font-weight-bold">Paragraph One</label>
                                    <textarea class="content" name="text_2" rows="20">{{ isset($content) ? $content->text_2 : old('text_2') }}</textarea>
                                    @error('text_2')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                    <hr>
                                </div>

                                <!--=================  Text 2 =================-->
                                <div class="form-group col-md-12 mb-2">
                                    <label class="font-weight-bold">Paragraph Two</label>
                                    <textarea class="content" name="text_3" rows="20">{{ isset($content) ? $content->text_3 : old('text_3') }}</textarea>
                                    @error('text_3')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                    <hr>
                                </div>

                                <!--=================  Text 3 =================-->
                                <div class="form-group col-md-12 mb-2">
                                    <label class="font-weight-bold">Paragraph Three</label>
                                    <textarea class="content" name="text_4" rows="20">{{ isset($content) ? $content->text_4 : old('text_4') }}</textarea>
                                    @error('text_4')
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
                        <div class="card-header"><i class="far fa-image"></i> Cover </div>
                        <div class="card-body px-3">
                            <div class="avatar-preview preview1" style="background-image: url({{ isset($content) ?  asset($content->image_1)  : asset('images/no-image.png') }})"></div>
                            <div class="my-2 text-left">
                              <small> {!! __('master.IMAGE-INFO') !!} </small> 
                            </div>
                            <input class="btn-info form-control form-control-sm" type="file" accept="image/*" id="avatar" name="image_1" multiple="false"/>
                        </div>
                    </div>

                    <div class="card card-defualt">
                        <div class="card-header"><i class="far fa-image"></i> Picture One </div>
                        <div class="card-body px-3">
                            <div class="avatar-preview preview2" style="background-image: url({{ isset($content) ?  asset($content->image_2)  : asset('images/no-image.png') }})"></div>
                            <div class="my-2 text-left">
                              <small> {!! __('master.IMAGE-INFO') !!} </small> 
                            </div>
                            <input class="btn-info form-control form-control-sm" type="file" accept="image/*" id="avatar2" name="image_2" multiple="false"/>
                        </div>
                    </div>

                    <div class="card card-defualt">
                        <div class="card-header"><i class="far fa-image"></i> Picture Two </div>
                        <div class="card-body px-3">
                            <div class="avatar-preview preview3" style="background-image: url({{ isset($content) ?  asset($content->image_3)  : asset('images/no-image.png') }})"></div>
                            <div class="my-2 text-left">
                              <small> {!! __('master.IMAGE-INFO') !!} </small> 
                            </div>
                            <input class="btn-info form-control form-control-sm" type="file" accept="image/*" id="avatar3" name="image_3" multiple="false"/>
                        </div>
                    </div>

                </div>

            </div>

            <input type="hidden" name="id" value="{{$landing->id}}">
            <div class="card card-defualt">
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-success btn-block">{{__('master.SAVE')}}</button>
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
  <script src="https://cdn.tiny.cloud/1/mq6umcdg6y938v1c32lokocdpgrgp5g2yl794h4y1braa6j6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  
    function readURL(input) 
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) 
            {
                $('.preview1').css('background-image','url('+e.target.result+')');
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL2(input) 
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) 
            {
                $('.preview2').css('background-image','url('+e.target.result+')');
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL3(input) 
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) 
            {
                $('.preview3').css('background-image','url('+e.target.result+')');
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#avatar").change(function()
    {
        readURL(this);
    });
    
    $("#avatar2").change(function()
    {
        readURL2(this);
    });
    
    $("#avatar3").change(function()
    {
        readURL3(this);
    });

    tinymce.init({
        selector:'textarea.content',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
      });</script>
@endsection
