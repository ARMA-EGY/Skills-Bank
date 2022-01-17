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
        //dd($request->description);
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    
        $destinationPath = public_path('images/team');
        //ini_set('memory_limit', '256M');
        $img = Image::make($image->getRealPath());
        $img->save($destinationPath.'/'.$input['imagename']);

        $photo = 'images/team/'.$input['imagename'];
 

        $testimonials =  Testimonial::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $photo,
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

        if($request->hasfile('image'))
        {

            $file_pointer = public_path().'/'.$testimonial->image;
            if(file_exists($file_pointer) && isset($testimonial->image))
            {
              unlink($file_pointer);
            }

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        
            $destinationPath = public_path('/images/team');
            //ini_set('memory_limit', '256M');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$input['imagename']);

            $photo = 'images/team/'.$input['imagename'];

            $data['image'] = $photo;
        }

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
