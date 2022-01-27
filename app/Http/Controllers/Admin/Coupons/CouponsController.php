<?php

namespace App\Http\Controllers\Admin\Coupons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Http\Requests\Coupon\AddRequest;
use App\Http\Requests\Coupon\UpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$coupons         = Coupon::orderBy('id','desc')->get();
		
        return view('admin.coupons.index', [
            'coupons' => $coupons,
            'coupons_count' => Coupon::all()->count(),
        ]);

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.coupons.create', [
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $coupon = Coupon::create([
            'code' => $request->code,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'discount' => $request->discount,
        ]);

        if($request->customers)
        {
            $coupon->customers()->attach($request->customers);
        }


        session()->flash('success', 'Coupon created successfully');
        
        return redirect(route('coupons.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {

		return view('admin.coupons.create', [
            'coupon'      => $coupon,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Coupon $coupon)
    {
        
        $data = $request->only(['code', 'start_date', 'end_date', 'discount']);

        $coupon->update($data);

        session()->flash('success', 'Coupon updated successfully');
        
        return redirect(route('coupons.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }


    //-------------- Disable Data  ---------------\\

    public function disable(Request $request)
    {
        $item     = Coupon::where('id', $request->id)->first();

        if($item->off == 1)
        {
            $off = 0;
        }
        elseif($item->off == 0)
        {
            $off = 1;
        }

        $item->off = $off;
        $item->save();
    }

    
}
