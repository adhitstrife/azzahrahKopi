<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $datas = Product::orderBy('created_at','asc')->paginate(5);
        return view('admin.product.index',['user' => $user,'datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.product.create')->with('user',$user);
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
            'desc'=>'required',
            'price'=>'required'
        ]);

        $data = new Product;
        $data->name = $request->name;
        $data->desc = $request->desc;
        $data->price = $request->price;
        $data ->save();
        $user = Auth::user();
        return redirect()->route('admin.product.index')->with('user',$user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        $data = $product->findOrFail($id);
        $user = Auth::user();
        return view('admin.product.show',['user' => $user,'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $data = $product->findOrFail($id);
        $user = Auth::user();
        return view('admin.product.edit',['user' => $user,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $data = $product->findOrFail($id);
        $data->name = $request->name;
        $data->desc = $request->desc;
        $data->price = $request->price;
        $data ->save();
        $user = Auth::user();
        return redirect()->route('admin.product.index')->with('user',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $data = $product->findOrFail($id);
        $data->delete();
        $user = Auth::user();
        return redirect()->route('admin.product.index')->with('user',$user);
    }
}
