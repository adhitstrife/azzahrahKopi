<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Product;
use App\news;
use App\Slider;
use App\gallery;
use App\testimoni;
use App\Icon;
use App\Welcome;
use Mail;
use App\Pesan;
use App\Footer;

class HomeController extends Controller
{
    /**
     * Display a listing of the index resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Product::orderBy('created_at','desc')->take(6);
        $news = news::orderBy('created_at','desc')->take(3)->get();
        $slider = Slider::orderBy('created_at','asc')->get();
        $testimoni = testimoni::where('status','publish')->get();
        $icon = Icon::first();
        $welcome = Welcome::first();
        $footer = Footer::first();
        $data = $query->get();
        return view('front.index',['footer'=>$footer,'welcome'=>$welcome,'data'=>$data, 'news'=>$news, 'slider'=>$slider, 'testimoni'=>$testimoni,'icon'=>$icon]);
    }

    /**
     * Display a listing of the product resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product(Request $request)
    {
        if ($request->has('tags')) {
            $data = Product::orderBy('created_at','desc')->where('tags',$request->tags)->paginate(10);        
        } else {
            $data = Product::orderBy('created_at','desc')->paginate(10);
        }
        $footer = Footer::first();
        $icon = Icon::first();
        return view('front.menu', ['data'=>$data,'icon'=>$icon,'footer'=>$footer]);
    }

     /**
     * Display a listing of the product resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berita()
    {
        $data = news::orderBy('created_at','desc')->paginate(10);
        $icon = Icon::first();
        $footer = Footer::first();
        return view('front.blog', ['data'=>$data,'icon'=>$icon,'footer'=>$footer]);
    }

    public function beritaDetail($id)
    {
        $data = news::findOrFail($id);
        $icon = Icon::first();
        $footer = Footer::first();
        return view('front.blog-details', ['data'=>$data,'icon'=>$icon, 'footer'=>$footer]);
    }

    public function elements()
    {
        return view('front.elements');
    }
    
     /**
     * Display a listing of the product resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        $data = gallery::orderBy('created_at','desc')->paginate(10);
        $icon = Icon::first();
        $footer = Footer::first();
        return view('front.gallery', ['data'=>$data,'icon'=>$icon,'footer'=>$footer]);
    }

    public function contactUs()
    {
        $icon = Icon::first();
        $footer = Footer::first();
        return view('front.contact-us', ['icon'=>$icon,'footer'=>$footer]);
    }

    public function about()
    {
        $icon = Icon::first();
        $footer = Footer::first();
        return view('front.about', ['icon'=>$icon,'footer'=>$footer]);
    }

    public function mail(Request $request)
    {
        $to_name = 'Azzahrah Cafe';
        $to_email = 'kopiazzahrah60@gmail.com';
        $data = array(
            'receiver' => $to_name,
            'name' => $request->name,
            'from' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message,
        );

        Mail::send('emails.email', $data, function($message) use ($to_email,$to_name,$data) 
        {
            $message->to($to_email)
                    ->subject($data['subject']);
        });

        $data = new Pesan;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->pesan = $request->message;
        if($request->has('subscribe'))
        {
            $data->subscription = '1';
        } else {
            $data->subscription = '0';
        }
        $data->save();
        
        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
          }else{
            return redirect()->route('front.index');
          }
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
