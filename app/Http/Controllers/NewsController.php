<?php

namespace App\Http\Controllers;

use App\news;
use App\ImageNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $datas = news::orderBy('created_at','asc')->paginate(5);
       
        return view('admin.news.index',['user' => $user,'datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.news.create')->with('user',$user);
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
            'title'=>'required',
            'news'=>'required',
            'image'=>'required|image|max:10024',
        ]);

        $data = new news;
        $data->title = $request->title;
        $data->news = $request->news;
        $data ->save();

        $image = new ImageNews;
        $uploadFile = $request->image;
        $filename = time()."product".".".$uploadFile->getClientOriginalExtension();
        $destination = 'public/image/news';
        // dd($size);
        $uploadFile->storeAs($destination,$filename);
        $image->image = $filename;
        $image->news_id = $data->id;
        $image->save();

        $user = Auth::user();
        return redirect()->route('admin.news.index')->with('user',$user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news, $id)
    {
        $data = $news->findOrFail($id);
        $user = Auth::user();
        return view('admin.news.show',['user' => $user,'data'=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function image(ImageNews $image, $id)
    {
        $data = $image->findOrFail($id);
        $user = Auth::user();
        return view('admin.news.image',['user' => $user,'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news, $id)
    {
        $data = $news->findOrFail($id);
        $user = Auth::user();
        return view('admin.news.edit',['user' => $user,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news, $id)
    {
        $validate = $request->validate([
            'title'=>'required',
            'news'=>'required',
            'image'=>'required|image|max:10024',
        ]);

        $data = news::findOrFail($id);
        $data->title = $request->title;
        $data->news = $request->news;
        $data ->save();

        $user = Auth::user();
        return view('admin.news.edit',['user' => $user,'data'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news,$id)
    {
        $data = $news->findOrFail($id);
        $data->delete();
        $user = Auth::user();
        return redirect()->route('admin.news.index')->with('user',$user);
    }

    public function editImage(ImageNews $image,Request $request,$id)
    {
        $image = $image->findOrFail($id);
        $imagepath = storage_path('app/public/image/news/'.$image->image);        
        if(File::exists($imagepath)){
            File::delete($imagepath);
        }

        $newImage = new images;
        $uploadFile = $request->image;
        $filename = time()."images".".".$uploadFile->getClientOriginalExtension();
        $destination = 'public/image/news';
        $uploadFile->storeAs($destination,$filename);
        $newImage->image = $filename;
        $newImage->product_id = $image->product_id;
        $newImage->save();

        $image->delete();
        $user = Auth::user();
        return redirect()->route('admin.product.index')->with('user',$user);
    }
}
