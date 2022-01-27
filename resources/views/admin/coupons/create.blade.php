@extends('layouts.master')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <style>
    .select2-container .select2-search--inline {display: unset;}
    </style>

    @if (isset($coupon)) 
      @if ($coupon->type == 'private')
        <style>
          .box2
          {
              display: unset;
          }
        </style>

      @elseif ($coupon->type == 'public')
      
        <style>
          .box2
          {
              display: none;
          }
        </style>
      @endif 

    @else
      <style>
        .box2
        {
            display: none;
        }
      </style>
    @endif 

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
                  <li class="breadcrumb-item"><a href="{{route('coupons.index')}}">Coupons</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ isset($item) ? 'Edit Coupon' : 'Add New Coupon' }}</li>
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
                <div class="card-header">{{ isset($coupon) ? __('Edit Coupon') : __('Add New Coupon') }} </div>
        
                <div class="card-body">
                    <form action="{{ isset($coupon) ? route('coupons.update', $coupon->id) : route('coupons.store')  }}" method="post" enctype="multipart/form-data">
                        @csrf

                        @if (isset($coupon))
                           @method('PUT')
                        @endif
                        
                        <div class="row">
                            <!--=================  Code  =================-->
                            <div class="form-group col-md-3 mb-2 text-left">
                                <label class="font-weight-bold text-uppercase">Promo Code</label>
                                <input type="text" name="code" class="@error('code') is-invalid @enderror form-control" placeholder="" value="{{ isset($coupon) ? $coupon->code : old('code') }}" required>
                            
                                @error('code')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
            
                            </div>
        
                            <!--=================  Discount  =================-->
                            <div class="form-group col-md-3 mb-2 text-left">
                                <label class="font-weight-bold text-uppercase">Discount Value</label>
                                <select class="form-control" name="discount" required>
                                  @isset($coupon)
                                      
                                      @foreach(range(1, 99) as $n)
                                          <option value="{{$n}}" @if($coupon->discount == $n) selected @endif>{{$n}} %</option>
                                      @endforeach

                                  @else 
                                      
                                      @foreach(range(1, 99) as $n)
                                          <option value="{{$n}}">{{$n}} %</option>
                                      @endforeach

                                  @endisset
                              </select>   
            
                            </div>

                            <!--================= Start Date  =================-->
                            <div class="form-group col-md-3 mb-2 text-left">
                                <label class="font-weight-bold text-uppercase">Start Date</label>
                                <input type="date" name="start_date" class="@error('start_date') is-invalid @enderror form-control" placeholder="Start Date" value="{{ isset($coupon) ? $coupon->start_date : old('start_date') }}" required>
                            
                                @error('start_date')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
            
                            </div>

                            <!--================= End Date  =================-->
                            <div class="form-group col-md-3 mb-2 text-left">
                              <label class="font-weight-bold text-uppercase">End Date</label>
                              <input type="date" name="end_date" class="@error('end_date') is-invalid @enderror form-control" placeholder="End Date" value="{{ isset($coupon) ? $coupon->end_date : old('end_date') }}" required>
                          
                              @error('end_date')
                                  <div>
                                      <span class="text-danger">{{ $message }}</span>
                                  </div>
                              @enderror
          
                            </div>
                            
                        </div>
                        <hr class="my-3">
        
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">{{ isset($coupon) ? __('Save'):__('Add') }}</button>
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
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  
  <script>
        $(document).ready(function() {
            $(".customers").select2({
                multiple: true,
            });

            $("#private").on("change",function() 
            {
                if ($(this).val() === '1') 
                    {
                        $('.box2').slideDown();
                    }

                else if ($(this).val() === '0')  
                    {
                        $('.box2').slideUp();
                    }
            });

        });
    </script>
@endsection
