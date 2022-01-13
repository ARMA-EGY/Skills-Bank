<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\CategoryClient;
use App\Seo;
use App\Http\Requests\SeoRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Image;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$clients          = client::orderBy('id','desc')->get();
		
        return view('admin.clients.index', [
            'clients' => $clients,
            'clients_count' => client::count(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$categories       = CategoryClient::where('disable',0)->orderBy('id','desc')->get();

        return view('admin.clients.create', [
            'categories' => $categories,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->description);
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    
        $destinationPath = public_path('images/clients');
        //ini_set('memory_limit', '256M');
        $img = Image::make($image->getRealPath());
        $img->save($destinationPath.'/'.$input['imagename']);
        $teamImage = 'images/clients/'.$input['imagename'];

        $clients =  client::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'image' => $teamImage,
        ]);


        session()->flash('success', 'Client Added successfully');
        
        return redirect(route('clients.index'));
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
    public function edit(client $client)
    {
		$categories       = CategoryClient::where('disable',0)->orderBy('id','desc')->get();

		return view('admin.clients.create', [
            'clients'      => $client,
            'categories' => $categories,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {

        $data = $request->only(['name','category_id']);

        if($request->hasfile('image'))
        {

            $file_pointer = public_path().'/'.$client->image;
            if(file_exists($file_pointer) && isset($team->image))
            {
              unlink($file_pointer);
            }

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        
            $destinationPath = public_path('/images/clients');
            //ini_set('memory_limit', '256M');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$input['imagename']);

            $teamImage = 'images/clients/'.$input['imagename'];

            $data['image'] = $teamImage;
        }

        $client->update($data);
        
        session()->flash('success', 'Client updated successfully');
        
        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    //======== Remove Team ======== 
    public function removeclients(Request $request)
    {
        $item = client::where('id', $request->id)->first();

        $file_pointer = public_path().'/'.$item->image;
        if(file_exists($file_pointer) && isset($item->image))
        {
          unlink($file_pointer);
        }

        $item->delete();

    }
}
