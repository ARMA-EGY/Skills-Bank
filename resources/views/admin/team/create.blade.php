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
                  <li class="breadcrumb-item"><a href="{{route('team.index')}}">Our People</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ isset($tag) ? 'Edit Employee' : 'Create Employee' }}</li>
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
                <div class="card-header"> {{ isset($team) ? 'Edit Employee' : 'Add New Employee' }}</div>
        
                <div class="card-body">
                    <form action="{{ isset($team) ? route('team.update', $team->id) : route('team.store')  }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        @if (isset($team))
                           @method('PUT')
                        @endif
                        
        
                              <div class="row">

                                  <!--=================  Name English =================-->
                                  <div class="form-group col-md-6 mb-2">
                                      <label for="name">Name</label>
                                      <input id="name" type="text" name="name" class="@error('name') is-invalid @enderror form-control" placeholder="Add Name" value="{{ isset($team) ? $team->name : old('name') }}" required>
                                  
                                      @error('name')
                                          <div>
                                              <span class="text-danger">{{ $message }}</span>
                                          </div>
                                      @enderror
                                  </div>



                                  <!--=================  Title =================-->
                                  <div class="form-group col-md-6 mb-2">
                                      <label for="title">Title</label>
                                      <input id="title" type="text" name="title" class="@error('title') is-invalid @enderror form-control" placeholder="Add Position" value="{{ isset($team) ? $team->title : old('title') }}" required>
                                  
                                      @error('title')
                                          <div>
                                              <span class="text-danger">{{ $message }}</span>
                                          </div>
                                      @enderror
                  
                                  </div>

                              </div>
                              
                  
                              <div class="row">

                                  <!--=================  email  =================-->
                                  <div class="form-group col-md-6 mb-2">
                                      <label for="email">email</label>
                                      <input id="email" type="text" name="email" class="@error('email') is-invalid @enderror form-control" placeholder="Add E-mail" value="{{ isset($team) ? $team->email : old('email') }}" required>
                                  
                                      @error('email')
                                          <div>
                                              <span class="text-danger">{{ $message }}</span>
                                          </div>
                                      @enderror
                  
                                  </div>

                                  <!--=================  phone =================-->
                                  <div class="form-group col-md-6 mb-2">
                                      <label for="phone">phone</label>
                                      <input id="phone" type="number" name="phone" class="@error('phone') is-invalid @enderror form-control" placeholder="phone" value="{{ isset($team) ? $team->phone : old('phone') }}" required>
                                  
                                      @error('phone')
                                          <div>
                                              <span class="text-danger">{{ $message }}</span>
                                          </div>
                                      @enderror
                  
                                  </div>

                              </div>


                              <div class="row">

                                  <!--=================  facebook =================-->
                                  <div class="form-group col-md-6 mb-2">
                                      <label for="facebook">facebook</label>
                                      <input id="facebook" type="text" name="facebook" class="@error('facebook') is-invalid @enderror form-control" value="{{ isset($team) ? $team->facebook : old('facebook') }}">
                                  
                                      @error('facebook')
                                          <div>
                                              <span class="text-danger">{{ $message }}</span>
                                          </div>
                                      @enderror
                  
                                  </div>

                                  <!--=================  twitter =================-->
                                  <div class="form-group col-md-6 mb-2">
                                      <label for="twitter">twitter</label>
                                      <input id="twitter" type="text" name="twitter" class="@error('twitter') is-invalid @enderror form-control" placeholder="twitter" value="{{ isset($team) ? $team->twitter : old('twitter') }}" required>
                                  
                                      @error('twitter')
                                          <div>
                                              <span class="text-danger">{{ $message }}</span>
                                          </div>
                                      @enderror
                  
                                  </div>

                              </div>                              



                              <div class="row">

                                  <!--=================  description =================-->
                                  <div class="form-group col-md-12 mb-2 ">
                                    <label for="description">Description</label>
                                    <textarea id="description" type="text" name="description" class="@error('description') is-invalid @enderror form-control" rows="2" placeholder="Add Description">{{ isset($team) ? $team->description : old('description') }}</textarea>
                                
                                    @error('description')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                  
                                  </div>

                              </div>   

      
                            <!--=================  Image  =================-->
            
                            @if (isset($team))
                                <div class="form-group mt-4">
                                    <img src="{{ asset('storage/'.$team->image) }}" alt="" width="100%">
                                </div>
                            @endif
            
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" type="file" name="image" accept="image/*" class="@error('image') is-invalid @enderror form-control form-control-sm" >
                            
                                @error('image')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
            
                            </div>
        
                       
                        <input type="hidden" name="userID" value="{{Auth::user()->id}}">
        
                        <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ isset($team) ? 'Save' : 'Add' }}</button>
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
