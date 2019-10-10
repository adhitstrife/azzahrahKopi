<?php

namespace App\Http\Controllers;

use App\Slider;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $datas = Slider::orderBy('created_at','desc')->get();
        return view('admin.slider.index',['user' => $user,'datas'=>$datas]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.slider.create')->with('user',$user);
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

        $image = new Slider;
        $uploadFile = $request->image;
        $filename = time()."slider".".".$uploadFile->getClientOriginalExtension();
        $destination = 'public/image/slider';
        // dd($size);
        $uploadFile->storeAs($destination,$filename);
        $image->image = $filename;
        $image->save();

        $user = Auth::user();
        return redirect()->route('admin.slider.index')->with('user',$user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider, $id)
    {
        $data = $slider->findOrFail($id);
        $user = Auth::user();
        return view('admin.slider.edit',['user' => $user,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider, $id)
    {
        $image = $slider->findOrFail($id);
        $imagepath = storage_path('app/public/image/slider/'.$image->image);
        if(File::exists($imagepath)){
            File::delete($imagepath);
        }

        $uploadFile = $request->image;
        $filename = time()."slider".".".$uploadFile->getClientOriginalExtension();
        $destination = 'public/image/slider';
        $uploadFile->storeAs($destination,$filename);
        $image->image = $filename;
        $image->save();


        $user = Auth::user();
        return redirect()->route('admin.slider.index')->with('user',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
