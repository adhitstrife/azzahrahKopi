<?php

namespace App\Http\Controllers;

use App\gallery;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $datas = gallery::orderBy('created_at','desc')->get();
        return view('admin.gallery.index',['user' => $user,'datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.gallery.create')->with('user',$user);
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
            'image'=>'required|image|max:10024',
        ]);

        $image = new gallery;
        $uploadFile = $request->image;
        $filename = time()."gallery".".".$uploadFile->getClientOriginalExtension();
        $destination = 'public/image/gallery';
        // dd($size);
        $uploadFile->storeAs($destination,$filename);
        $image->image = $filename;
        $image->save();

        $user = Auth::user();
        return redirect()->route('admin.gallery.index')->with('user',$user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery, $id)
    {
        $image = $gallery->findOrFail($id);
        $imagepath = storage_path('app/public/image/gallery/'.$image->image);
        if(File::exists($imagepath)){
            File::delete($imagepath);
        }
        $image->delete();

        $user = Auth::user();
        return redirect()->route('admin.gallery.index')->with('user',$user);
    }
}
