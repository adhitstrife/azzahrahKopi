<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('admin/admin');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/','AdminController@index')->name('admin.index');
    
    // Group rout for product admin
    Route::prefix('product')->group(function(){
        Route::get('/','ProductController@index')->name('admin.product.index');
        Route::get('/add','ProductController@create')->name('admin.product.create');
        Route::post('/','ProductController@store')->name('admin.product.store');
        Route::get('/{id}','ProductController@show')->name('admin.product.show');
        Route::get('/edit/{id}','ProductController@edit')->name('admin.product.edit');
        Route::get('/productImage/{id}','ProductController@image')->name('admin.product.image.edit');
        Route::put('/update/{id}','ProductController@update')->name('admin.product.update');
        Route::put('/productImage/{id}','ProductController@editImage')->name('admin.product.image.edit');
        Route::delete('/delete/{id}','ProductController@destroy')->name('admin.product.delete');
    });
    Route::prefix('news')->group(function(){
        Route::get('/','NewsController@index')->name('admin.news.index');
        Route::get('/add','NewsController@create')->name('admin.news.create');
        Route::post('/','NewsController@store')->name('admin.news.store');
        Route::get('/{id}','NewsController@show')->name('admin.news.show');
        Route::get('/edit/{id}','NewsController@edit')->name('admin.news.edit');
        Route::get('/newsImage/{id}','NewsController@image')->name('admin.news.image.edit');
        Route::put('/update/{id}','NewsController@update')->name('admin.news.update');
        Route::put('/productNews/{id}','NewsController@editImage')->name('admin.news.image.edit');
        Route::delete('/delete/{id}','NewsController@destroy')->name('admin.news.delete');
    });

    Route::group(['prefix' => 'slider'], function () {
        Route::get('/','SliderController@index')->name('admin.slider.index');
        Route::get('/add','SliderController@create')->name('admin.slider.create');
        Route::post('/','SliderController@store')->name('admin.slider.store');
        Route::get('/slider/{id}','SliderController@edit')->name('admin.slider.edit');
        Route::put('/slider/{id}','SliderController@update')->name('admin.slider.update');
        Route::delete('/slider/{id}','SliderController@delete')->name('admin.slider.delete');
    });

    Route::group(['prefix' => 'gallery'], function () {
        Route::get('/','GalleryController@index')->name('admin.gallery.index');
        Route::get('/add','GalleryController@create')->name('admin.gallery.create');
        Route::post('/','GalleryController@store')->name('admin.gallery.store');
        Route::get('/gallery/{id}','GalleryController@edit')->name('admin.gallery.edit');
        Route::put('/gallery/{id}','GalleryController@update')->name('admin.gallery.update');
        Route::delete('/gallery/{id}','GalleryController@destroy')->name('admin.gallery.delete');
    });

    Route::group(['prefix' => 'testimoni'], function (){
        Route::get('/','TestimoniController@index')->name('admin.testimoni.index');
        Route::get('/add','TestimoniController@create')->name('admin.testimoni.create');
        Route::post('/','TestimoniController@index')->name('admin.testimoni.store');
        Route::get('/testimoni/edit/{id}','TestimoniController@edit')->name('admin.testimoni.edit');
        Route::update('/testimoni/edit/{id}','TestimoniController@update')->name('admin.testimoni.update');
        Route::update('/testimoni/delete/{id}','TestimoniController@destroy')->name('admin.testimoni.delete');
    });
});

Route::namespace('front')->group(function(){
    Route::get('/','HomeController@index')->name('front.index');
    Route::get('/product','HomeController@product')->name('front.product.page');
    Route::get('/berita','HomeController@berita')->name('front.berita.page');
    Route::get('/gallery','HomeController@gallery')->name('front.gallery.page');
});