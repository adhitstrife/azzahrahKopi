<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Icon;
use App\Welcome;
use File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Auth::user();
        $icon = Icon::first();
        $welcome = Welcome::first();
        return view('admin/admin',['data'=>$data,'icon' => $icon, 'welcome' => $welcome]);
    }

    public function addText(){
        $user = Auth::user();
        return view('admin.addText')->with('user',$user);
    }

    public function storeText(Request $request)
    {
        $validate = $request->validate([
            'title'=>'required',
            'text'=>'required',
        ]);

        $data = new Welcome;
        $data->title = $request->title;
        $data->text = $request->text;        
        $data->save();

        $user = Auth::user();
        return redirect()->route('admin.index')->with('user',$user);
    }

    public function editText($id){
        $user = Auth::user();
        $data = Welcome::findOrFail($id);
        return view('admin.editText',['user'=>$user,'data'=>$data]);
    }

    public function updateText(Request $request,$id)
    {
        $validate = $request->validate([
            'title'=>'required',
            'text'=>'required',
        ]);

        $data = Welcome::findOrFail($id);
        $data->title = $request->title;
        $data->text = $request->text;        
        $data->save();

        $user = Auth::user();
        return redirect()->route('admin.index')->with('user',$user);
    }

    public function addIcon(){
        $user = Auth::user();
        return view('admin.addIcon')->with('user',$user);
    }

    public function editIcon($id){
        $user = Auth::user();
        $data = Icon::findOrFail($id);
        return view('admin.editIcon',['user'=>$user,'data'=>$data]);
    }

    public function storeIcon(Request $request){
        $validate = $request->validate([
            'image'=>'required|mimes:png|max:10024',
        ]);

        $image = new Icon;
        $uploadFile = $request->image;
        $filename = time()."Icon".".".$uploadFile->getClientOriginalExtension();
        $destination = 'public/image/icon';
        // dd($size);
        $uploadFile->storeAs($destination,$filename);
        $image->icon = $filename;
        $image->save();

        $user = Auth::user();
        return redirect()->route('admin.index')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateIcon(Request $request, $id)
    {
        $validate = $request->validate([
            'image'=>'required|mimes:png|max:10024',
        ]);

        $image = Icon::findOrFail($id);


        $imagepath = storage_path('app/public/image/icon/'.$image->icon);
        if(File::exists($imagepath)){
            File::delete($imagepath);
        }
        // dd($imagepath);

        $uploadFile = $request->image;
        $filename = time()."Icon".".".$uploadFile->getClientOriginalExtension();
        $destination = 'public/image/icon';
        // dd($size);
        $uploadFile->storeAs($destination,$filename);
        $image->icon = $filename;
        $image->save();

        $user = Auth::user();
        return redirect()->route('admin.index')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
