<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\news;
use App\Slider;
use App\gallery;

class HomeController extends Controller
{
    /**
     * Display a listing of the index resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Product::orderBy('created_at','desc')->take(3);
        $news = news::latest()->first();
        $slider = Slider::orderBy('created_at','asc')->get();
        $data = $query->get();
        return view('front.index',['data'=>$data, 'news'=>$news, 'slider'=>$slider]);
    }

    /**
     * Display a listing of the product resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product()
    {
        $data = Product::orderBy('created_at','desc')->paginate(10);
        return view('front.product', ['data'=>$data]);
    }

     /**
     * Display a listing of the product resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berita()
    {
        $data = news::orderBy('created_at','desc')->paginate(10);
        return view('front.news', ['data'=>$data]);
    }

    
     /**
     * Display a listing of the product resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        $data = gallery::orderBy('created_at','desc')->paginate(10);
        return view('front.gallery', ['data'=>$data]);
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
