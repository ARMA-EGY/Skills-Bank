<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Courses;
use App\Models\Countries;
use App\Models\Roles;
use App\Models\Categories;
use App\Http\Requests\Course\AddRequest;
use App\Http\Requests\Course\UpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Image;

class CoursesController extends Controller
{

    //-------------- Get All Data ---------------\\

    public function index()
    {
        $user = auth()->user();
		$items       = Courses::orderBy('id','desc')->get();

        return view('admin.course.index', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }


    //-------------- Get Active Data ---------------\\

    public function active()
    {
        $user = auth()->user();
		$items       = Courses::where('disable', 0)->orderBy('id','desc')->get();
		
        return view('admin.course.active', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }


    //-------------- Get Deactive Data ---------------\\

    public function deactive()
    {
        $user = auth()->user();
		$items       = Courses::where('disable', 1)->orderBy('id','desc')->get();
		
        return view('admin.course.deactive', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }

    
    //-------------- Create New Data Page ---------------\\

    public function create()
    {
        $user = auth()->user();
        return view('admin.course.create', [
            'categories'   => Categories::where('disable', 0)->orderBy('id','desc')->get(),
            ]);
    }


    //-------------- Store New Data ---------------\\

    public function store(AddRequest $request)
    {
            $user = auth()->user();

            if($request->hasfile('image'))
            {
                $image = $request->file('image');
                $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            
                $destinationPath = public_path('images/courses');
                ini_set('memory_limit', '2048M');
                $img = Image::make($image->getRealPath());
                $img->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$input['imagename']);

                $courseImage = 'images/courses/'.$input['imagename'];
            }


            $course =  Courses::create([
                'name' => $request->name,
                'price_eg' => $request->price_eg,
                'price_sr' => $request->price_sr,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'students_limit' => $request->students_limit,
                'category_id' => $request->category_id,
                'image' => $courseImage,
            ]);
            
            $request->session()->flash('success', 'Course Was Added successfully');
            
            return redirect(route('courses.index'));
    }


    //-------------- Edit Data Page ---------------\\
    
    public function edit(courses $course)
    {
        $user = auth()->user();
		return view('admin.course.create', [
            'item' => $course,
            'categories'   => Categories::where('disable', 0)->orderBy('id','desc')->get(),
        ]);
    }

    
    //-------------- Update Data  ---------------\\

    public function update(UpdateRequest $request, courses $course)
    {

        $user = auth()->user();
        $data = $request->only(['name', 'price_eg', 'price_sr', 'start_date', 'end_date', 'students_limit', 'category_id']);


        if($request->hasfile('image'))
        {
            $file_pointer = public_path().'/'.$course->image;
            if(file_exists($file_pointer) && isset($course->image))
            {
              unlink($file_pointer);
            }

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        
            $destinationPath = public_path('/images/courses');
            ini_set('memory_limit', '2048M');
            $img = Image::make($image->getRealPath());
            $img->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);

            $courseImage = 'images/courses/'.$input['imagename'];

            $data['image'] = $courseImage;
        }
           


        $course->update($data);
		
		session()->flash('success', 'Course was updated successfully');
		
		return redirect(route('courses.index'));
    }


    //-------------- Disable Data  ---------------\\

    public function disable(Request $request)
    {
        $item     = Courses::where('id', $request->id)->first();

        if($item->disable == 1)
        {
            $disable = 0;
        }
        elseif($item->disable == 0)
        {
            $disable = 1;
        }

        $item->disable = $disable;
        $item->save();
    }
   
}
