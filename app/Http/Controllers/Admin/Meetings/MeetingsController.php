<?php

namespace App\Http\Controllers\Admin\Meetings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meeting;
use App\Models\CoursesRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Traits\MeetingTrait;
use App\Models\Courses;
use App\Http\Requests\Meeting\AddRequest;
use Illuminate\Database\Eloquent\Builder;
use App\Mail\meetingInvitation;
use Mail;


class MeetingsController extends Controller
{
    use MeetingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$meetings          = Meeting::where('disable', 0)->orderBy('id','desc')->get();

        return view('admin.meeting.index', [
            'meetings' => $meetings,
            'meetings_count' => count($meetings),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Courses::whereHas('category', function (Builder $query) {
            $query->where('disable', 0);
        })->where('disable', 0)->get();

        
        return view('admin.meeting.create', [
            'courses' => $courses,
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
        $response = $this->create_meeting($request->email ,$request->topic ,$request->start_time);
        if($response['message'] == 'failure')
        {
            session()->flash('fail', 'opps something went wrong');
        }else{
            if(isset($response['data']->uuid)){

                $meeting =  Meeting::create([
                    'topic' => $request->topic,
                    'start_time' => $request->start_time,
                    'course_id' => $request->course_id,
                    'meeting_id' => $response['data']->id,
                    'url' => $response['data']->join_url,
                    'email' => $request->email,
                ]);
                
                $mt = Courses::with('meeting')->where('id',$request->course_id)->first();

                $courseRequests = CoursesRequest::where('course_id',$request->course_id)->get();

                foreach($courseRequests as $courseRequest)
                {
                    Mail::to($courseRequest->email)->send(new meetingInvitation($mt,$courseRequest));
                }

                

                session()->flash('success', 'Meeting created successfully');
            }else{
                session()->flash('fail', $response);
            }
   

            
        }
       
        return redirect(route('meetings.index'));
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    //======== Remove Meeting ======== 
    public function removemeeting(Request $request)
    {
        $item = Meeting::where('id', $request->id)->first();
        $response = $this->delete_meeting($item->email,$item->meeting_id);
        if($response['message'] == 'failure')
        {
            session()->flash('fail', 'opps something went wrong');
        }else{
            $item->disable      = 1;
            $item->save();
            }


    }
}
