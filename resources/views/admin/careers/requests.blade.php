@extends('layouts.master')

@section('style')
    
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

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
                  <li class="breadcrumb-item"><a href="#">Careers</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Requests</li>
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
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">All Requests  <span class="badge badge-primary p-2">{{$requests_count}}</span></h3>
                </div>
              </div>
            </div>

            @if ($requests->count() > 0)

            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush display nowrap" id="example">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Available Date</th>
                    <th scope="col">CV</th>
                    <th scope="col">Career</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($requests as $request)

                  <tr class="parent">
                    <td>{{ $loop->iteration }}</td>
                    <td> <b> {{  $request->name }} </b></td>
                    <td> {{  $request->phone }} </td>
                    <td> {{  $request->email }} </td>
                    <td> {{  $request->available_date }} </td>
                    <td> <a href="{{ asset('storage/'.$request->cv) }}" target="_blank" class="btn btn-primary btn-sm mx-1"> View</a></td>
                    <td> {{$request->career->title}} </td>
                    <td> {{ $request->created_at->format('d-m-Y') }}</td>
                  </tr>

                  @endforeach
                 
                </tbody>
              </table>
            </div>


            @else 
                <p class="text-center"> No Careers Yet.</p>
            @endif

            <!-- Card footer -->
            <div class="card-footer py-2">
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
   

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


<script>
  $('#example').DataTable( {
      "pagingType": "numbers"
    } );
</script>
    
@endsection