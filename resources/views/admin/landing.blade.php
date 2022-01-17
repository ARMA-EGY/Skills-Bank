@extends('layouts.master')

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
        
        
        <div class="col-md-6">
          <div class="card card-profile">
            <img src="{{ asset('landing_assets/img/page2.jpg') }}" alt="Image placeholder" class="card-img-top">
            
            <div class="card-body p-3">
              <div class="text-center">
                <h5 class="h3">
                  {{$landing->name}}
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>{{$landing->showcase}} 
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>{{$landing->description}}
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 p-3">
              <div class="d-flex justify-content-between">
                <a  class="btn btn-sm btn-primary text-white pointer copyButton mr-4 "><i class="fas fa-copy"></i> Copy Link</a>
                <input class="linkToCopy" value="https://ebe-eg.net/landing/{{$landing->url}}" style="position: absolute; opacity: 0;top: 0; left: 0;">
                <a  class="btn btn-sm btn-warning text-white pointer  mr-4  get_landing" data-id="{{$landing->id}}"><i class="fa fa-cog"></i> Edit Data</a>
                <a href="{{route('edit-landing')}}" target="_blank" class="btn btn-sm btn-info  mr-4 "><i class="fa fa-edit"></i> Edit Page</a>
                <a href="https://ebe-eg.net/landing/{{$landing->url}}" target="_blank" class="btn btn-sm btn-default float-right"><i class="far fa-eye"></i> View</a>
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



@section('script')

<script>


 const Toast = Swal.mixin({
	  toast: true,
	  position: 'top-end',
	  showConfirmButton: false,
	  timer: 3000,
	  timerProgressBar: true,
	  onOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	  }
	})

    
	$(document).on('click', '.copyButton', function()
	{
		$(this).siblings('input.linkToCopy').select();      
		document.execCommand("copy");
		
		var title = 'Link Has Copied Successfully .';
		Toast.fire({
		  icon: 'success',
		  title: title
		})

	});
	
	
	
        $('.get_landing').click(function()
        {
            var id 	= $(this).attr('data-id');

            $('#popup').modal('show');
            $('#modal_body').html('<div class="divload"><img src="/public/images/load.gif" width="50" class="m-auto"></div>');

            $.ajax({
                url:"{{route('getlanding')}}",
                type:"POST",
                dataType: 'text',
                data:    {"_token": "{{ csrf_token() }}",
                            id: id},
                success : function(response)
                    {
                    $('#modal_body').html(response);
                    }  
                })

        });
        
        
        // ==========================  Edit Landing Data ==========================

        $(document).on('submit', '.landing_form', function(e)
            {
                e.preventDefault();
                let formData = new FormData(this);
                $('.submit').prop('disabled', true);

                var head1 	= 'Done';
                var title1 	= 'Data Changed Successfully. ';
                var head2 	= 'Oops...';
                var title2 	= 'Something went wrong, please try again later.';


                $.ajax({
                    url: 		"{{route('editlanding')}}",
                    method: 	'POST',
                    data: formData,
                    dataType: 	'json',
                    contentType: false,
                    processData: false,
                    success : function(data)
                        {
                            $('.submit').prop('disabled', false);
                            
                            if (data['status'] == 'true')
                            {
                                Swal.fire(
                                        head1,
                                        title1,
                                        'success'
                                        )
                                $('.modal').modal('hide');
                            }
                            else if (data['status'] == 'false')
                            {
                                Swal.fire(
                                        head2,
                                        title2,
                                        'error'
                                        )
                            }
                        },
                        error : function(reject)
                        {
                            $('.submit').prop('disabled', false);

                            var response = $.parseJSON(reject.responseText);
                            $.each(response.errors, function(key, val)
                            {
                                Swal.fire(
                                        head2,
                                        val[0],
                                        'error'
                                        )
                            });
                        }
                    
                    
                });

        });
	
    
</script>

@endsection

