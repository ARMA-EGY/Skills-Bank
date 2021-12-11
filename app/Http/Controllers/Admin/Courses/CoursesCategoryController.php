<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Courses;
use App\Models\Countries;
use App\Models\Roles;
use App\Models\Categories;
use App\Http\Requests\CourseCategory\CategoryRequest;
use App\Http\Requests\CourseCategory\UpdateCategoryRequest;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Image;

class CoursesCategoryController extends Controller
{

    //-------------- Get All Interests ---------------\\

    public function index()
    {
        $user = auth()->user();
		$items       = Categories::orderBy('id','desc')->get();


        return view('admin.coursecategory.index', [
            'items' => $items,
            'total_rows' => count($items),
            
           
        ]);
    }


    //-------------- Get Active Interests ---------------\\

    public function active()
    {
        $user = auth()->user();
		$items       = Categories::where('disable', 0)->orderBy('id','desc')->get();
		
        return view('admin.coursecategory.active', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }


    //-------------- Get Deactive Interests ---------------\\

    public function deactive()
    {
        $user = auth()->user();
		$items       = Categories::where('disable', 1)->orderBy('id','desc')->get();
		
        return view('admin.coursecategory.deactive', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }

    
    //-------------- Create New Interest Page ---------------\\

    public function create()
    {
        $user = auth()->user();

        return view('admin.coursecategory.create');
    }


    //-------------- Store New Data ---------------\\

    public function store(CategoryRequest $request)
    {
            $user = auth()->user();


            $interest =  Categories::create([
                'name' => $request->name,
            ]);
            
            $request->session()->flash('success', 'Category created successfully');
            
            return redirect(route('coursecategory.index'));
    }


    //-------------- Edit Data Page ---------------\\
    
    public function edit(Categories $coursecategory)
    {
        $user = auth()->user();
		return view('admin.coursecategory.create', [
            'item' => $coursecategory,
        ]);
    }

    
    //-------------- Update Data  ---------------\\

    public function update(UpdateCategoryRequest $request, Categories $coursecategory)
    {
        $user = auth()->user();
        DB::transaction(function() use ($request, $coursecategory) {
            $user = auth()->user();
            $data = $request->only(['name']);
            $coursecategory->update($data);
        });	
        
		
		session()->flash('success', 'Category updated successfully');
		
		return redirect(route('coursecategory.index'));
    }


    //-------------- Disable Data  ---------------\\

    public function disable(Request $request)
    {
        $item     = Categories::where('id', $request->id)->first();

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
