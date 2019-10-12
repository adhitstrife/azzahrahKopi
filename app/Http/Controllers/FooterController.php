<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = Footer::first();
       
        return view('admin.footer.index',['user' => $user,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user = Auth::user();
       
        return view('admin.footer.create',['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Footer;
        $data->footerText = $request->footerText;
        $data->footerAddress = $request->footerAddress;
        $data->footerEmail = $request->footerEmail;
        $data->footerPhone = $request->footerPhone;
        $data->facebookLink = $request->facebook;
        $data->twitterLink = $request->twitter;
        $data->instagramLink = $request->instagram;
        $data->save();

        return redirect()->route('admin.footer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer,$id)
    {
        $data = Footer::findOrFail($id);

        $user = Auth::user();
       
        return view('admin.footer.edit',['user' => $user,'data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer, $id)
    {
        $data = Footer::findOrFail($id);
        $data->footerText = $request->footerText;
        $data->footerAddress = $request->footerAddress;
        $data->footerEmail = $request->footerEmail;
        $data->footerPhone = $request->footerPhone;
        $data->facebookLink = $request->facebook;
        $data->twitterLink = $request->twitter;
        $data->instagramLink = $request->instagram;
        $data->save();

        return redirect()->route('admin.footer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
