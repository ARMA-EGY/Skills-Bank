<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Slider;
use App\Models\Categories;
use App\Models\Courses;
use App\Models\CoursesRequest;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Client;
use App\Models\CategoryClient;

use App\Models\LearningTree;
use App\Models\TreeDescription;
use App\Models\Collaboration;
use App\Models\Testimonial;

use App\Models\Career;
use App\Models\CareerRequest;
use App\Models\Message;
use App\Models\Subscriber;
use App\Http\Requests\SubscriberRequest;
use App\Models\ReceiverEmail;
use App\Mail\ContactUs;
use App\Models\Social;
use App\Models\Meeting;
use App\Traits\PaymentTrait;
use App\Models\paymentOrders;
use App\Mail\meetingInvitation;
use App\Mail\bookingRequest;
use Mail; 
use LaravelLocalization;
use MailchimpMarketing\ApiClient;


class FrontController extends Controller
{
    use PaymentTrait;
/*
|--------------------------------------------------------------------------
| PAGES
|--------------------------------------------------------------------------
*/

    //-------------- Home Page ---------------\\
    public function index()
    {
		$sliders       = Slider::where('lang', LaravelLocalization::getCurrentLocale())->orderBy('id','desc')->get();
        $courses       = Courses::where('lang', LaravelLocalization::getCurrentLocale())->where('top_month', 1)->where('disable', 0)->orderBy('id','desc')->limit(8)->get();
		$clients       = client::orderBy('id','desc')->limit(8)->get();
		$testimonials  = Testimonial::orderBy('id','desc')->limit(4)->get();

        return view('front.welcome', [
            'sliders'       => $sliders,
            'courses'       => $courses,
            'clients'       => $clients,
            'testimonials'  => $testimonials,
            'socials'       => Social::all(),
        ]);
    }
    
    //-------------- About Page ---------------\\
    public function about()
    {         

        return view('front.about', [
            'socials' => Social::all(),
        ]); 
    }
    
    //-------------- Clients Page ---------------\\
    public function clients()
    {
		$clients       = client::orderBy('id','desc')->get();
		$categories    = CategoryClient::where('disable',0)->orderBy('id','asc')->get();

        return view('front.clients', [
            'clients'       => $clients,
            'categories'    => $categories,
            'socials' => Social::all(),
        ]);     
    }
    
    //-------------- Learning Approach Page ---------------\\
    public function learningApproach()
    {

        return view('front.learningApproach', [
            'socials' => Social::all(),
        ]);        
    }
    
    //-------------- Learning Tree Page ---------------\\
    public function learningTree()
    {  
		$items       = LearningTree::orderBy('id','asc')->get();

        return view('front.learningTree', [
            'items' => $items,
            'socials' => Social::all(),
        ]);      
    }
    
    //-------------- Workshop Page ---------------\\
    public function workshop()
    { 
        return view('front.workshop', [
            'socials' => Social::all(),
        ]);     
    }
    
    //-------------- Calendar Page ---------------\\
    public function calendar()
    {
        $currentMonth       = date('m');
        $categories    = Categories::where('disable', 0)->orderBy('id','desc')->get();
        $courses       = Courses::where('lang', LaravelLocalization::getCurrentLocale())->where('disable', 0)->orderBy('id','desc')->get();

        return view('front.calendar', [
            'categories'    => $categories,
            'courses'       => $courses,
            'currentMonth'  => $currentMonth,
            'socials'       => Social::all(),
        ]);       
    }
    
    //-------------- Careers Page ---------------\\
    public function careers()
    {
		$careers          = Career::where('disable', 0)->orderBy('id','desc')->paginate(9);

        return view('front.careers', [
            'items'     => $careers,
            'socials'   => Social::all(),
        ]);        
    }
    
    //-------------- Reach Out Page ---------------\\
    public function reachout()
    { 
        return view('front.reachout', [
            'socials' => Social::all(),
        ]);      
    }
    
    //-------------- Practical Solution Page ---------------\\
    public function practical()
    {
        return view('front.practical', [
            'socials' => Social::all(),
        ]);       
    }
    
    //-------------- Virtual Solution Page ---------------\\
    public function virtual()
    {
        return view('front.virtual', [
            'socials' => Social::all(),
        ]);        
    }
    
    //-------------- Videos Solution Page ---------------\\
    public function videos()
    {  
        return view('front.videos', [
            'socials' => Social::all(),
        ]);       
    }
    
    //-------------- Designing Solution Page ---------------\\
    public function designing()
    {
        return view('front.designing', [
            'socials' => Social::all(),
        ]);        
    }
    
    //-------------- Assessments Solution Page ---------------\\
    public function assessments()
    { 
        return view('front.assessments', [
            'socials' => Social::all(),
        ]);       
    }

    //-------------- Single Course Page ---------------\\
    public function courseShow($id)
    {
        $item       = Courses::where('disable', 0)->where('id',$id)->first();
        $courses    = Courses::where('disable', 0)->where('lang', LaravelLocalization::getCurrentLocale())->where('id', '!=' ,$item->id)->where('category_id',$item->category_id)->limit(6)->get();

        return view('front.courseDetails',[
            'item'        => $item,
            'courses'     => $courses,
            'socials' => Social::all(),
         ]);     
    }
    
    //-------------- Blogs Page ---------------\\
    public function blogs()
    {
        $blogs       = Blog::where('status', 1)->orderBy('id','desc')->paginate(9);

        return view('front.blogs',[
            'blogs' => $blogs,
            'socials' => Social::all(),
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
            'socials' => Social::all(),
        ]);     
    }
    
    //-------------- Collaborations Page ---------------\\
    public function collaborations()
    {
        $collaborations       = Collaboration::where('status', 1)->orderBy('id','desc')->paginate(9);

        return view('front.collaborations',[
            'items' => $collaborations,
            'socials' => Social::all(),
        ]);    
    }
    
    //-------------- Single Collaboration Page ---------------\\
    public function collabShow($url)
    {
        $collaboration      = Collaboration::where('url', $url)->first();

        return view('front.collabDetails',[
            'item' => $collaboration,
            'socials' => Social::all(),
        ]);     
    }
    
    //-------------- Team Page ---------------\\
    public function team()
    {
        $items       = Team::orderBy('id','desc')->paginate(9);

        return view('front.team',[
            'items' => $items,
            'socials' => Social::all(),
        ]);     
    }
    
    //-------------- Single Member Page ---------------\\
    public function memberShow($id)
    {
        $item      = Team::where('id', $id)->first();

        return view('front.teamDetails',[
            'item' => $item,
            'socials' => Social::all(),
        ]);     
    }
    
    //-------------- Payment Page ---------------\\
    public function payment()
    {

        return view('front.payment-failure',[
            'socials' => Social::all(),
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

        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => '4025dc9bd24a4342d0f798ecbe6e6be5-us20',
            'server' => 'http://armasoftware.com/'
        ]);

        $response = $mailchimp->ping->get();
        dd($response);

        $course     = Courses::where('id', $request->course_id)->first();
        $limit      = $course->students_limit;
        $students   = CoursesRequest::where('course_id', $request->course_id)->where('accept', 1)->count();
        $exist      = CoursesRequest::where('course_id', $request->course_id)->where('email', $request->email)->count();

        if($students >= $limit)
        {
            return response()->json([
                'status' => 'full',
                'msg' => 'error'
            ]) ;
        }
        elseif($exist > 0)
        {
            return response()->json([
                'status' => 'exist',
                'msg' => 'error'
            ]) ;
        }
        else
        {
            $booking =  CoursesRequest::create([
                'name'                  => $request->name,
                'email'                 => $request->email,
                'phone'                 => $request->phone,
                'company'               => $request->company,
                'position'              => $request->position,
                'message'               => $request->message,
                'course_id'             => $request->course_id,
                'payment_method'        => $request->payment_method,
                'country'               => LaravelLocalization::getCurrentLocale(),
            ]);

            $mt = Courses::with('meeting')->where('id',$request->course_id)->first();

            Mail::to($request->email)
            ->send(new meetingInvitation($mt,$booking));
            

            Mail::to('admin@gmail.com')
            ->send(new bookingRequest($mt,$booking));

            



            if($booking)
            {

                if($request->payment_method == 'online')
                {
                    $paymentKey = $this->PaymentLink($course,$request, $booking);

                    return response()->json([
                        'status' => 'true',
                        'msg' => 'successpay',
                        'paymentKey' => $paymentKey,
                    ]) ;
                }

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


    
    public function processedCallback(Request $request)
    {   
        if($request->success == true)
        {
            $paymentOrders = paymentOrders::where('order_id', $request->order['id'])->get();
            
            $coursesRequest = CoursesRequest::where('id', $paymentOrders->request_id)
            ->update(['payed' => 1]);
        }
    }

    public function responseCallback(Request $request)
    {   
        if($request->success == true)
        {
            return view('front.payment',[
                'socials' => Social::all(),
            ]);   
        }else{
            return view('front.payment-failure',[
                'socials' => Social::all(),
            ]);  
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
            'company' => $request->company,
            'position' => $request->position,
        ]);

        $receiver_email     = ReceiverEmail::first();

        $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'phone' => $request->phone,
        'message' => $request->message,
        'company' => $request->company,
        'position' => $request->position,
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


    //-------------- Career Request ---------------\\

    public function careerrequest(Request $request)
    {
        $career =  CareerRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'available_date' => $request->available_date,
            'cv' => $request->cv->store('images/cv', 'public'),
            'career_id' => $request->career_id,
        ]);

        if($career)
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
