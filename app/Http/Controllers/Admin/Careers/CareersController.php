<?php

namespace App\Http\Controllers\Admin\Careers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\CareerRequest;
use App\Models\Seo;
use App\Http\Requests\SeoRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		$careers          = Career::where('disable', 0)->orderBy('id','desc')->get();
		
        return view('admin.careers.index', [
            'careers' => $careers,
            'careers_count' => Career::where('disable', 0)->count(),
        ]);

    }

    public function requests()
    {
		
		$requests          = CareerRequest::orderBy('id','desc')->get();
		
        return view('admin.careers.requests', [
            'requests' => $requests,
            'requests_count' => CareerRequest::count(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.careers.create', [
            
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $career =  Career::create([
            'title' => $request->title,
            'description' => $request->description,
            'experienced' => $request->experienced,
        ]);


        session()->flash('success', 'Career created successfully');
        
        return redirect(route('careers.index'));
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
    public function edit(Career $career)
    {

		return view('admin.careers.create', [
            'career'      => $career,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {

        $data = $request->only(['title', 'description', 'experienced']);

        $career->update($data);
        
        session()->flash('success', 'Career updated successfully');
        
        return redirect(route('careers.index'));
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

    //======== Remove Career ======== 
    public function removecareer(Request $request)
    {
        $item = Career::where('id', $request->id)->first();

        $item->disable      = 1;
        
        $item->save();

    }
}
