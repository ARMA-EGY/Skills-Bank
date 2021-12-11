<?php

namespace App\Http\Controllers\Admin\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\BlogTag;
use App\Models\Seo;
use App\Http\Requests\Tags\TagRequest;
use App\Http\Requests\Tags\UpdateTagRequest;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$tags           = Tag::orderBy('id','desc')->get();
		
        return view('admin.tags.index', [
            'tags'      => $tags,
            'tags_count' => Tag::all()->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        Tag::create($request->all());
        
        session()->flash('success', 'Tag created successfully');
        
        return redirect(route('tags.index'));
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
    public function edit(Tag $tag)
    {

        return view('admin.tags.create', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request,Tag $tag)
    {
        $tag->update([
            'name' => $request->name
        ]);
		
		session()->flash('success', 'Tag updated successfully');
		
		return redirect(route('tags.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
		$tag->delete();
		
		session()->flash('success', 'Tag deleted successfully');
		
		return redirect(route('tag.index'));
    }

    //======== Remove Tag ======== 
    public function removetag(Request $request)
    {
        $item = Tag::where('id', $request->id)->first();
        $tags = BlogTag::where('tag_id', $request->id);
        // $tags = DB::table('blog_tag')->where('tag_id', $request->id);

        $item->delete();
        $tags->delete();
    }
}
