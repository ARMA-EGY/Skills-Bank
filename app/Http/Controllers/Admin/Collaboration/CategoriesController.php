<?php

namespace App\Http\Controllers\Admin\Collaboration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collaboration;
use App\Models\CollaborationCategory;
use App\Models\CollabTag;
use App\Models\CollaborationTag;
use App\Models\Seo;
use App\Http\Requests\CollaborationCategory\CategoryRequest;
use App\Http\Requests\CollaborationCategory\UpdateCategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$categories       = Collaboration::orderBy('id','desc')->get();
		
        return view('admin.collaborationcategories.index', [
            'categories' => $categories,
            'categories_count' => CollaborationCategory::all()->count(),
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.collaborationcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CategoryRequest $request)
    {
            // Category::create([
            //     'name' => $request->name
            // ]);

            CollaborationCategory::create($request->all());
            
            $request->session()->flash('success', 'Category created successfully');
            
            return redirect(route('collaborationcategories.index'));
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
    public function edit(CollaborationCategory $collaborationcategory)
    {
		return view('admin.collaborationcategories.create', ['category' => $Collaborationcategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, CollaborationCategory $collaborationcategory)
    {
        //
        $collaborationcategory->update([
            'name' => $request->name
        ]);
		
		session()->flash('success', 'Category updated successfully');
		
		return redirect(route('collaborationcategories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CollaborationCategory $collaborationcategory)
    {
        //
		
		$collaborationcategory->delete();
		
		session()->flash('success', 'Category deleted successfully');
		
		return redirect(route('collaborationcategories.index'));
    }

    
    //======== Remove Category ======== 
    public function removecategory(Request $request)
    {
        $item   = CollaborationCategory::where('id', $request->id)->first();
        $blogs  = Collaboration::where('category_id', $request->id);
        $blogs2 = Collaboration::where('category_id', $request->id)->get();

        foreach ($blogs2 as $blog) 
        {
            Storage::disk('public')->delete($blog->image);
            $tags = CollaborationTag::where('blog_id', $blog->id);
            $tags->delete();
        }

        $item->delete();
        $blogs->delete();
    }
}
