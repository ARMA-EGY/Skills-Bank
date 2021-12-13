<?php

namespace App\Http\Controllers\Admin\LearningTree;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LearningTree;
use App\Models\TreeDescription;

use Illuminate\Support\Facades\Storage;
use DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Image;

class LearningTreeController extends Controller
{

    //-------------- Get All Interests ---------------\\

    public function index()
    {
        $user = auth()->user();
		$items       = LearningTree::orderBy('id','desc')->get();


        return view('admin.learningtree.index', [
            'items' => $items,
            'total_rows' => count($items),
            
           
        ]);
    }


    //-------------- Get Active Interests ---------------\\

    public function active()
    {
        $user = auth()->user();
		$items       = LearningTree::where('disable', 0)->orderBy('id','desc')->get();
		
        return view('admin.learningtree.active', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }


    //-------------- Get Deactive Interests ---------------\\

    public function deactive()
    {
        $user = auth()->user();
		$items       = LearningTree::where('disable', 1)->orderBy('id','desc')->get();
		
        return view('admin.learningtree.deactive', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }

    
    //-------------- Create New Interest Page ---------------\\

    public function create()
    {
        $user = auth()->user();

        return view('admin.learningtree.create');
    }


    //-------------- Store New Data ---------------\\

    public function store(Request $request)
    {
            $user = auth()->user();

            DB::transaction(function() use ($request) {
                $user = auth()->user();
                $LearningTree =  LearningTree::create([
                    'title' => $request->title,
                ]);
                
    
                if(isset($request->description))
                {
        
                    //======== description ======== 
                    for ($i = 0; $i < count($request->description); $i++) 
                    {
                        $description[] = [
                            'title' => $request->description[$i],
                            'learningtree_id' => $LearningTree->id
                        ];
                    }
        
                    $description1      =  TreeDescription::insert($description);
                }
            });	

            $request->session()->flash('success', 'Learning Tree created successfully');
            
            return redirect(route('learningtree.index'));
    }


    //-------------- Edit Data Page ---------------\\
    
    public function edit(LearningTree $learningtree)
    {
        $user = auth()->user();
		return view('admin.learningtree.create', [
            'item' => $learningtree,
        ]);
    }

   
    //-------------- Update Data  ---------------\\

    public function update(Request $request, LearningTree $learningtree)
    {
        $user = auth()->user();
        DB::transaction(function() use ($request, $learningtree) {


            $learningtree               = LearningTree::where('id', $learningtree->id)->first();
            $TreeDescription        = TreeDescription::where('learningtree_id', $learningtree->id);
            $TreeDescription->delete();
    
            $data = $request->only(['title']);
            $learningtree->update($data);

            if(isset($request->description))
            {

                //======== description ======== 
                for ($i = 0; $i < count($request->description); $i++) 
                {
                    $description[] = [
                        'title' => $request->description[$i],
                        'learningtree_id' => $learningtree->id
                    ];
                }
    
                $description1      =  TreeDescription::insert($description);
            }
        });	
        
		
		session()->flash('success', 'Learning Tree updated successfully');
		
		return redirect(route('learningtree.index'));
    }

    
}
