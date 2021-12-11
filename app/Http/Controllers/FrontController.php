<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Categories;
use App\Models\Courses;
use App\Models\CoursesRequest;
use App\Models\Blog;

use App\Mail\ContactUs;
use Mail; 
use LaravelLocalization;



class FrontController extends Controller
{

/*
|--------------------------------------------------------------------------
| PAGES
|--------------------------------------------------------------------------
*/

    //-------------- Home Page ---------------\\
    public function index()
    {
        $courses       = Courses::select('id', 'name', 'image', 'start_date', 'end_date', 'disable', 'price_'.LaravelLocalization::getCurrentLocale(). ' as price' )->where('disable', 0)->orderBy('id','desc')->limit(6)->get();

        return view('front.welcome', [
            'courses' => $courses,
        ]);

        return view('front.welcome');     
    }
    
    //-------------- About Page ---------------\\
    public function about()
    {
        return view('front.about');     
    }
    
    //-------------- Team Page ---------------\\
    public function team()
    {
        return view('front.team');     
    }
    
    //-------------- Clients Page ---------------\\
    public function clients()
    {
        return view('front.clients');     
    }
    
    //-------------- Learning Approach Page ---------------\\
    public function learningApproach()
    {
        return view('front.learningApproach');     
    }
    
    //-------------- Learning Tree Page ---------------\\
    public function learningTree()
    {
        return view('front.learningTree');     
    }
    
    //-------------- Workshop Page ---------------\\
    public function workshop()
    {
        return view('front.workshop');     
    }
    
    //-------------- Calendar Page ---------------\\
    public function calendar()
    {
        return view('front.calendar');     
    }
    
    //-------------- Collaborations Page ---------------\\
    public function collaborations()
    {
        return view('front.collaborations');     
    }
    
    //-------------- Blogs Page ---------------\\
    public function blogs()
    {
        return view('front.blogs');     
    }
    
    //-------------- Careers Page ---------------\\
    public function careers()
    {
        return view('front.careers');     
    }
    
    //-------------- Reach Out Page ---------------\\
    public function reachout()
    {
        return view('front.reachout');     
    }
    
    //-------------- Practical Solution Page ---------------\\
    public function practical()
    {
        return view('front.practical');     
    }
    
    //-------------- Virtual Solution Page ---------------\\
    public function virtual()
    {
        return view('front.virtual');     
    }
    
    //-------------- Videos Solution Page ---------------\\
    public function videos()
    {
        return view('front.videos');     
    }
    
    //-------------- Designing Solution Page ---------------\\
    public function designing()
    {
        return view('front.designing');     
    }
    
    //-------------- Assessments Solution Page ---------------\\
    public function assessments()
    {
        return view('front.assessments');     
    }


/*
|--------------------------------------------------------------------------
| ACTIONS
|--------------------------------------------------------------------------
*/


    //-------------- Booking Course ---------------\\

    public function booking(Request $request)
    {
        $booking =  CoursesRequest::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'company'       => $request->company,
            'position'      => $request->position,
            'message'       => $request->message,
            'course_id'     => $request->course_id,
            'country'       => LaravelLocalization::getCurrentLocale(),
        ]);
        
        if($booking)
        {
            return response()->json([
                'status' => 'true',
                'msg' => 'success'
            ]) ;
        }
        else
        {
            return response()->json([
                'status' => 'false',
                'msg' => 'error'
            ]) ;
        }

    }

}
