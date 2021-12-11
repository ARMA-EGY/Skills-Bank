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
                  <li class="breadcrumb-item active" aria-current="page">Our People</li>
                </ol>
              </nav>
            </div>

            <div class="col-lg-6 col-5 text-right">
              <a href="{{ route('team.create')}}" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> New Employee</a>
            </div>

            @if(session()->has('success'))	
                <div class="alert alert-success alert-dismissible fade show m-auto" role="alert">
                    {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif

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
                  <h3 class="mb-0">All People  <span class="badge badge-primary p-2">{{$team_count}}</span></h3>
                </div>
              </div>
            </div>

            @if ($team->count() > 0)

            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush display nowrap" id="example">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">phone</th>
                    <th scope="col">email</th>
                    <th scope="col">description</th>
                    <th scope="col">facebook</th> 
                    <th scope="col">twitter</th> 
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($team as $employee)

                  <tr class="parent">
                    <td>{{ $loop->iteration }}</td>
                    <td> <b> {{  $employee->name }} </b></td>
                    <td> {{  $employee->title }} </td>
                    <td>{{  $employee->phone }}</td>
                    <td> {{  $employee->email }} </td>
                    <td>{{  $employee->description }}</td>
                    <td> {{  $employee->facebook }} </td>
                    <td>{{  $employee->twitter }}</td>
  
                    <td>
                      <a href="{{ route('team.edit', $employee->id)}}" class="btn btn-primary float-left btn-sm mx-1"><i class="fa fa-edit"></i> Edit</a>
                      <span class="btn btn-sm btn-warning remove_item" data-id="{{$employee->id}}" data-url="{{route('remove-team')}}"><i class="fa fa-trash-alt"></i> Remove</span>
                    </td>
                  </tr>

                  @endforeach
                 
                </tbody>
              </table>
            </div>


            @else 
                <p class="text-center"> No Employees Yet.</p>
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