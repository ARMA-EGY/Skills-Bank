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
                  <li class="breadcrumb-item"><a href="{{route('meetings.index')}}">Meetings</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ isset($tag) ? 'Edit Meeting' : 'Create Meeting' }}</li>
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
                <div class="card-header"> {{ isset($meeting) ? 'Edit Meeting' : 'Add New Meeting' }}</div>
        
                <div class="card-body">
                    <form action="{{ isset($meeting) ? route('meetings.update', $meeting->id) : route('meetings.store')  }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        @if (isset($meeting))
                           @method('PUT')
                        @endif
                        
        
                        <!--=================  Topic  =================-->
        
                        <div class="form-group">
                          <label >Topic</label>
                          <input type="text" name="topic" class="@error('topic') is-invalid @enderror form-control" placeholder="Add New topic" value="{{ isset($meeting) ? $meeting->title : old('meeting') }}" required>
                          
                              @error('topic')
                                  <div>
                                      <span class="text-danger">{{ $message }}</span>
                                  </div>
                              @enderror
        
                        </div>

                        <!--=================  Start Time  =================-->

                        <div class="form-group">
                          <label class="font-weight-bold text-uppercase">Start Time</label>
                          <input type="date" name="start_time" class="@error('start_time') is-invalid @enderror form-control" placeholder="Start Time" value="{{ isset($meeting) ? $item->meeting : old('start_time') }}" required>
                      
                          @error('start_time')
                              <div>
                                  <span class="text-danger">{{ $message }}</span>
                              </div>
                          @enderror
      
                      </div>

                      <!--=================  Course  =================-->

                      <div class="form-group">
                        <label class="font-weight-bold text-uppercase">Course</label>
                        <select class="form-control" name="course_id" required>
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}" @if (isset($meeting))  @if ($meeting->course_id == $course->id ) selected @endif @endif>{{$course->name}}</option>
                            @endforeach
                        </select>

                        @error('course_id')
                            <div>
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
        
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">{{ isset($meeting) ? 'Save' : 'Add' }}</button>
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
