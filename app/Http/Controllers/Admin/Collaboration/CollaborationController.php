<?php

namespace App\Http\Controllers\Admin\Collaboration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collaboration;
use App\Models\CollaborationCategory;
use App\Models\CollabTag;
use App\Models\CollaborationTag;
use App\Models\Seo;
use App\Http\Requests\Collaboration\CollaborationRequest;
use App\Http\Requests\Seo\SeoRequest;
use App\Http\Requests\Collaboration\UpdateCollaborationRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Image;

class CollaborationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		$collaboration          = Collaboration::where('status', 1)->orderBy('id','desc')->get();
		
        return view('admin.collaboration.index', [
            'blogs' => $collaboration,
            'blog_count' => Collaboration::where('status', 1)->count(),
        ]);

    }


    public function draft()
    {
		
		$drafts         = Collaboration::where('status', 0)->orderBy('id','desc')->get();
		
        return view('admin.collaboration.draft', [
            'drafts' => $drafts,
            'draft_count' => Collaboration::where('status', 0)->count(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.collaboration.create', [
            'categories'    => CollaborationCategory::all() ,
             'tags'         => CollabTag::all(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CollaborationRequest $request)
    {
        
        if($request->url == '')
        {
            $url1 = $request->title;
        }
        else
        {
            $url1 = $request->url;
        }

        $url =  preg_replace(array('/[-?]/', '/\s+/'), '_', $url1);
        

        $blog =  Collaboration::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $request->image->store('images/collaboration', 'public'),
            'alt_image' => $request->alt_image,
            'category_id' => $request->category_id,
            'user_id' => $request->userID,
            'token' => uniqid(),
            'url' => $url,
            'status' => $request->status,
            'project_date' => $request->project_date,
            'trainees_no' => $request->trainees_no,
            'training_hours' => $request->training_hours,
        ]);
   

        // if($request->tags)
        // {
        //     $blog->tags()->attach($request->tags);
        // }

        $seo = Seo::create([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'page_token' => $blog->token,
            'image' => $blog->image,
        ]);

        session()->flash('success', 'Post created successfully');
        
        return redirect(route('collaboration.index'));
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
    public function edit(Collaboration $collaboration)
    {
        $seo                = Seo::where('page_token', $collaboration->token)->first();
        $collaboration->keywords     = $seo->keywords;

		return view('admin.collaboration.create', [
            'blog'      => $collaboration,
            'categories' => CollaborationCategory::all() ,
            'tags'      => CollabTag::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollaborationRequest $request, Collaboration $collaboration)
    {
        if($request->url == '')
        {
            $url1 = $request->title;
        }
        else
        {
            $url1 = $request->url;
        }

        $url =  preg_replace(array('/[-?]/', '/\s+/'), '_', $url1);

        $data = $request->only(['title', 'description', 'content', 'category_id', 'alt_image', 'status', 'project_date', 'trainees_no', 'training_hours']);

        $seo                = Seo::where('page_token', $collaboration->token)->first();
        $seo->title         = $request->title;
        $seo->description   = $request->description;
        $seo->keywords      = $request->keywords;

        if($request->hasfile('image'))
        {
            $image = $request->image->store('images/collaboration', 'public');
            Storage::disk('public')->delete($Collaboration->image);

            $data['image'] = $image;
            $seo->image     = $image;
        }

        if($request->tags)
        {
            $collaboration->tags()->sync($request->tags);
        }

        $data['url'] = $url;

        $collaboration->update($data);
        
        $seo->save();

        session()->flash('success', 'Post updated successfully');
        
        return redirect(route('collaboration.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collaboration = Collaboration::where('id', $id)->first();

        Storage::disk('public')->delete($collaboration->image);
        $collaboration->delete();

        session()->flash('success', 'Collaboration deleted successfully');
        
        return redirect(route('collaboration.index'));

    }

    //======== Remove Blog ======== 
    public function removeblog(Request $request)
    {
        $item = collaboration::where('id', $request->id)->first();
        $tags = collaborationTag::where('blog_id', $request->id);
        $seo  = Seo::where('page_token', $item->token)->first();
        // $tags = DB::table('blog_tag')->where('blog_id', $request->id);

        Storage::disk('public')->delete($item->image);

        $item->delete();
        $tags->delete();
        $seo->delete();

    }
}
