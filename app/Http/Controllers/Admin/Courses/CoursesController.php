<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Courses;
use App\Models\Countries;
use App\Models\Roles;
use App\Models\Categories;
use App\Models\CoursesRequest;
use App\Models\Meeting;
use App\Http\Requests\Course\AddRequest;
use App\Http\Requests\Course\UpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Image;
use LaravelLocalization;
use Mail; 
use App\Mail\meetingInvitation;

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
                $img->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$input['imagename']);

                $courseImage = 'images/courses/'.$input['imagename'];
            }


            $course =  Courses::create([
                'name' => $request->name,
                'price' => $request->price,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'time_from' => $request->time_from,
                'time_to' => $request->time_to,
                'students_limit' => $request->students_limit,
                'category_id' => $request->category_id,
                'image' => $courseImage,
                'description' => $request->description,
                'schedule' => $request->schedule,
                'type' => $request->type,
                'lang' => $request->lang,
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
        $data = $request->only(['name', 'price', 'start_date', 'end_date', 'time_from', 'time_to', 'students_limit', 'category_id', 'description', 'schedule', 'type', 'lang']);


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
            $img->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);

            $courseImage = 'images/courses/'.$input['imagename'];

            $data['image'] = $courseImage;
        }
           


        $course->update($data);

        $mt = Courses::with('meeting')->where('id',$course->id)->first();

        $courseRequests = CoursesRequest::where('course_id',$course->id)->get();

        foreach($courseRequests as $courseRequest)
        {
            Mail::to($courseRequest->email)->send(new meetingInvitation($mt,$courseRequest));
        }
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


    //-------------- Get Active Data ---------------\\

    public function requestes()
    {
        $user = auth()->user();
        $items       = CoursesRequest::orderBy('id','desc')->get();
        
        return view('admin.course.requests', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }


    //-------------- Disable Data  ---------------\\

    public function accept(Request $request)
    {
        $item     = CoursesRequest::where('id', $request->id)->first();

        if($item->accept == 1)
        {
            $accept = 0;
        }
        elseif($item->accept == 0)
        {
            $accept = 1;
        }

        $item->accept = $accept;
        $item->save();
    }


    //-------------- Top of Month  ---------------\\

    public function topMonth(Request $request)
    {
        $item     = Courses::where('id', $request->id)->first();

        if($item->top_month == 1)
        {
            $top_month = 0;
        }
        elseif($item->top_month == 0)
        {
            $top_month = 1;
        }

        $item->top_month = $top_month;
        $item->save();
    }

   
}
