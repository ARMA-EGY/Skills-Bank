<?php

namespace App\Http\Controllers\Admin\Testimonials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Seo;
use App\Http\Requests\SeoRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Image;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$testimonials          = Testimonial::orderBy('id','desc')->get();
		
        return view('admin.testimonial.index', [
            'testimonials' => $testimonials,
            'testimonials_count' => Testimonial::count(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.testimonial.create', [
            
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
 

        $testimonials =  Testimonial::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
        ]);


        session()->flash('success', 'testimonial Added successfully');
        
        return redirect(route('testimonials.index'));
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
    public function edit(Testimonial $testimonial)
    {

		return view('admin.testimonial.create', [
            'testimonials'      => $testimonial,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {

        $data = $request->only(['name','title','description']);

        $testimonial->update($data);
        
        session()->flash('success', 'testimonial updated successfully');
        
        return redirect(route('testimonials.index'));
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

    //======== Remove Team ======== 
    public function removetestimonials(Request $request)
    {
        $item = Testimonial::where('id', $request->id)->first();

        $item->delete();

    }
}
