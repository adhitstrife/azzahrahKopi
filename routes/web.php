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

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function(){
    Route::get('/','AdminController@index')->name('admin.index');
    
    // Group rout for product admin
    Route::prefix('product')->group(function(){
        Route::get('/','ProductController@index')->name('admin.product.index');
        Route::get('/add','ProductController@create')->name('admin.product.create');
        Route::post('/','ProductController@store')->name('admin.product.store');
        Route::get('/{id}','ProductController@show')->name('admin.product.show');
        Route::get('/edit/{id}','ProductController@edit')->name('admin.product.edit');
        Route::put('/update/{id}','ProductController@update')->name('admin.product.update');
        Route::delete('/delete/{id}','ProductController@destroy')->name('admin.product.delete');
    });
});