<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\CategoryClient;
use App\Models\Countries;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Providers\RouteServiceProvider;

use Image;

class ClientsCategoryController extends Controller
{

    //-------------- Get All Interests ---------------\\

    public function index()
    {
        $user = auth()->user();
		$items       = CategoryClient::orderBy('id','desc')->get();

        return view('admin.clientscategory.index', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }

    
    //-------------- Create New Interest Page ---------------\\

    public function create()
    {
        $user = auth()->user();

        return view('admin.clientscategory.create');
    }


    //-------------- Store New Data ---------------\\

    public function store(Request $request)
    {
            $user = auth()->user();


            $interest =  CategoryClient::create([
                'name' => $request->name,
            ]);
            
            $request->session()->flash('success', 'Category created successfully');
            
            return redirect(route('clientscategory.index'));
    }


    //-------------- Edit Data Page ---------------\\
    
    public function edit(CategoryClient $clientscategory)
    {
        $user = auth()->user();
		return view('admin.clientscategory.create', [
            'item' => $clientscategory,
        ]);
    }

    
    //-------------- Update Data  ---------------\\

    public function update(Request $request, CategoryClient $clientscategory)
    {
        $user = auth()->user();
        DB::transaction(function() use ($request, $clientscategory) {
            $user = auth()->user();
            $data = $request->only(['name']);
            $clientscategory->update($data);
        });	
        
		
		session()->flash('success', 'Category updated successfully');
		
		return redirect(route('clientscategory.index'));
    }


    //-------------- Disable Data  ---------------\\

    public function disable(Request $request)
    {
        $item     = CategoryClient::where('id', $request->id)->first();

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
