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
                  <li class="breadcrumb-item"><a href="{{route('careers.index')}}">Careers</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ isset($tag) ? 'Edit Career' : 'Create Career' }}</li>
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
      <div class="row">
        <div class="col-xl-12">
            <div class="card card-defualt">
                <div class="card-header"> {{ isset($career) ? 'Edit Career' : 'Add New Career' }}</div>
        
                <div class="card-body">
                    <form action="{{ isset($career) ? route('careers.update', $career->id) : route('careers.store')  }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        @if (isset($career))
                           @method('PUT')
                        @endif
                        
        
                        <!--=================  Job Title  =================-->
        
                        <div class="form-group">
                            <label >Job Title</label>
                        <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" placeholder="Add New Job Title" value="{{ isset($career) ? $career->title : old('title') }}" required>
                        
                            @error('title')
                                <div>
                                     <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
        
                        </div>

                        <!--=================  Experienced  =================-->

                        <div class="form-group">
                          <label >Experienced</label>
                          <input type="text" name="experienced" class="@error('experienced') is-invalid @enderror form-control" placeholder="Add Experienced" value="{{ isset($career) ? $career->experienced : old('experienced') }}" required>
                      
                          @error('experienced')
                              <div>
                                   <span class="text-danger">{{ $message }}</span>
                              </div>
                          @enderror
      
                      </div>

                      <!--=================  Description  =================-->

                      <div class="form-group">
                        <label >Description</label>
                        <textarea type="text" name="description" class="@error('description') is-invalid @enderror form-control" placeholder="Add Description"  required>{{ isset($career) ? $career->description : old('description') }}</textarea>
                    
                        @error('description')
                            <div>
                                 <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
    
                    </div>
        
        
                       
                        <input type="hidden" name="userID" value="{{Auth::user()->id}}">
        
                        <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ isset($career) ? 'Save' : 'Add' }}</button>
                        </div>
        
                    </form>
                </div>
        
            </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
      </footer>
    </div>

@endsection


@section('script')
  <script src="https://cdn.tiny.cloud/1/mq6umcdg6y938v1c32lokocdpgrgp5g2yl794h4y1braa6j6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({
        selector:'textarea.content',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
      });</script>
@endsection
