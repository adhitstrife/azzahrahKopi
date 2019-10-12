<?php

namespace App\Http\Controllers;


use App\Product;
use App\images;
use App\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Image;
use Mail;


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
        $datas = Product::orderBy('created_at','desc')->paginate(10);
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
            'tags'=>'required',
            'price'=>'required',
            'image'=>'required|image|max:10024',
        ]);
        

        $data = new Product;
        $data->name = $request->name;
        $data->desc = $request->desc;
        $data->price = $request->price;
        $data->tags = $request->tags;
        $data->save();

        $image = new images;
        $uploadFile = $request->image;
        $filename = time()."product".".".$uploadFile->getClientOriginalExtension();
        $destination = 'public/image/product';
        $uploadFile->storeAs($destination,$filename);
        $image->image = $filename;
        $image->product_id = $data->id;
        $image->save();

        $email = Pesan::where('subscription',1)->get();
        foreach ($email as $email) 
        {
            $to_name = $email->name;
            $to_email = $email->email;
            $content = array(
                'name' => $to_name,
                'subject' => 'Pemberitahuan Product Baru',
                'productName' => $data->name,
                'productPrice' => $data->price,
            );

            Mail::send('emails.product', $content, function($message) use ($to_email,$to_name,$data) 
            {
                $message->to($to_email)
                        ->subject($data['subject']);
            });
        }

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
     * Display the specified resource.
     *
     * @param  \App\Image  $product
     * @return \Illuminate\Http\Response
     */
    public function image(Images $image,$id)
    {
        $data = $image->findOrFail($id);
        $user = Auth::user();
        return view('admin.product.image',['user' => $user,'data'=>$data]);
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
        $validate = $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'tags'=>'required',
            'price'=>'required',
        ]);
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

    public function editImage(images $image,Request $request,$id)
    {
        $image = $image->findOrFail($id);
        $imagepath = public_path('image/product/'.$image->image);
        if(File::exists($imagepath)){
            File::delete($imagepath);
        }

        $newImage = new images;
        $uploadFile = $request->image;
        $filename = time()."images".".".$uploadFile->getClientOriginalExtension();
        $destination = 'image/product';
        $uploadFile->move(public_path($destination),$filename);
        $newImage->image = $filename;
        $newImage->product_id = $image->product_id;
        $newImage->save();

        $image->delete();
        $user = Auth::user();
        return redirect()->route('admin.product.index')->with('user',$user);
    }
}
