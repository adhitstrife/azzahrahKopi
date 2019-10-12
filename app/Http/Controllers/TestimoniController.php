<?php

namespace App\Http\Controllers;

use App\testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $published = testimoni::orderBy('created_at','desc')->where('status','publish')->paginate(10);
        $draft = testimoni::orderBy('created_at','desc')->where('status','draft')->paginate(10);
        return view('admin.testimoni.index',['user' => $user,'datas'=>$published,'draft'=>$draft ]);
    }

    
    public function draftIndex()
    {
        $user = Auth::user();
        $datas = testimoni::orderBy('created_at','desc')->where('status','draft')->paginate(10);
        return view('admin.testimoni.draft',['user' => $user,'datas'=>$datas]);
    }

    public function gantiPublish($id)
    {
        $user = Auth::user();
        $datas = testimoni::orderBy('created_at','desc')->where('status','draft')->paginate(10);
        return view('admin.testimoni.ganti',['user' => $user,'datas'=>$datas,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.testimoni.create')->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name'=>'required',
            'jobs'=>'required',
            'quote'=>'required',
            'image'=>'required|image|max:10024',
        ]);

        $data = new testimoni;
        $data->name = $request->name;
        $data->jobs = $request->jobs;
        $data->quote = $request->quote;
        $data->status = 'draft';

        $uploadFile = $request->image;
        $filename = time()."avatar".".".$uploadFile->getClientOriginalExtension();
        $destination = 'public/image/avatar';
        $uploadFile->storeAs($destination,$filename);
        $data->image = $filename;
        
        $data->save();

        

        $user = Auth::user();
        return redirect()->route('admin.testimoni.index')->with('user',$user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(testimoni $testimoni,$id)
    {
        $data = $testimoni->findOrFail($id);
        $user = Auth::user();
        return view('admin.testimoni.edit',['user' => $user,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimoni $testimoni, $id)
    {
        $validate = $request->validate([
            'name'=>'required',
            'jobs'=>'required',
            'quote'=>'required',
        ]);

        $data = $testimoni->findOrFail($id);
        $data->name = $request->name;
        $data->jobs = $request->jobs;
        $data->quote = $request->quote;
        if($request->hasFile('image'))
        {
            $imagepath = storage_path('app/public/image/avatar/'.$data->image);
            if(File::exists($imagepath)){
                File::delete($imagepath);
            }
            $uploadFile = $request->image;
            $filename = time()."avatar".".".$uploadFile->getClientOriginalExtension();
            $destination = 'public/image/avatar';
            $uploadFile->storeAs($destination,$filename);
            $data->image = $filename;        
        }
        $data->save();

        $user = Auth::user();
        return redirect()->route('admin.testimoni.index')->with('user',$user);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function publish(Request $request, testimoni $testimoni, $id)
    {
        $publish = $testimoni->findOrFail($request->id);
        $publish->status = 'draft';
        $publish->save();

        $data = $testimoni->findOrFail($id);
        $data->status = 'publish';
        $data->save();

        $user = Auth::user();
        return redirect()->route('admin.testimoni.index')->with('user',$user);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimoni $testimoni,$id)
    {
        $data = $testimoni->findOrFail($id);
        $imagepath = storage_path('app/public/image/avatar/'.$data->image);
            if(File::exists($imagepath)){
                File::delete($imagepath);
            }
        $data->delete();
        $user = Auth::user();
        return redirect()->route('admin.testimoni.index')->with('user',$user);
    }
}
