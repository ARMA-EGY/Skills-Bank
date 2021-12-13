<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Categories;
use App\Models\Courses;
use App\Models\CoursesRequest;
use App\Models\Blog;
use App\Models\Team;

use App\Models\Message;
use App\Models\Subscriber;
use App\Http\Requests\SubscriberRequest;
use App\Models\ReceiverEmail;
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

    //-------------- Single Course Page ---------------\\
    public function courseShow($id)
    {
        $item       = Courses::select('id', 'name', 'description', 'image', 'start_date', 'end_date', 'disable', 'price_'.LaravelLocalization::getCurrentLocale(). ' as price' )->where('disable', 0)->where('id',$id)->first();

        return view('front.courseDetails',[
            'item'        => $item,
         ]);     
    }
    
    //-------------- Blogs Page ---------------\\
    public function blogs()
    {
        $blogs       = Blog::where('status', 1)->orderBy('id','desc')->paginate(9);

        return view('front.blogs',[
            'blogs' => $blogs,
        ]);     
    }
    
    //-------------- Single Blog Page ---------------\\
    public function blogShow($url)
    {
        $blog               = Blog::where('url', $url)->first();
		$related_blogs      = Blog::where('id', '!=', $blog->id)->where('status', 1)->orderBy('id','desc')->limit(2)->get();
        
        return view('front.blogDetails',[
            'blog' => $blog,
            'related_blogs' => $related_blogs,
        ]);     
    }
    
    //-------------- Collaborations Page ---------------\\
    public function collaborations()
    {
        $collaborations       = Blog::where('status', 1)->orderBy('id','desc')->paginate(9);

        return view('front.collaborations',[
            'items' => $collaborations,
        ]);    
    }
    
    //-------------- Single Collaboration Page ---------------\\
    public function collabShow($url)
    {
        $collaboration      = Blog::where('url', $url)->first();

        return view('front.collabDetails',[
            'item' => $collaboration,
        ]);     
    }
    
    //-------------- Team Page ---------------\\
    public function team()
    {
        $items       = Team::orderBy('id','desc')->paginate(9);

        return view('front.team',[
            'items' => $items,
        ]);     
    }
    
    //-------------- Single Member Page ---------------\\
    public function memberShow($id)
    {
        $item      = Team::where('id', $id)->first();

        return view('front.teamDetails',[
            'item' => $item,
        ]);     
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


    //-------------- Messages ---------------\\

    public function message(Request $request)
    {
        $message1 =  Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        $receiver_email     = ReceiverEmail::first();

        $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'phone' => $request->phone,
        'message' => $request->message,
        ];

        Mail::to($receiver_email->email)->send(new ContactUs($data));

        if($message1)
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


    //-------------- Subscribe ---------------\\
    
    public function subscribe(SubscriberRequest $request)
    {
        $subscribe =  Subscriber::create([
            'subscriber_email' => $request->subscriber_email,
        ]);

        if($subscribe)
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
