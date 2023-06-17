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

use App\Product;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',"productController@show");
Route::get('/Add',"productController@addProduct");
Route::post('/Add',"productController@addProduct");
Route::get('/home/{id}',function ($id){
    $newProduct = Product::find($id);
    $newProduct->delete();
    return redirect('home');
});

Route::get('/Display/{id}',function ($id){
    $pro = Product::find($id);
    $arr=Array('proes'=>$pro);
    return view('product.Display',$arr);


});

Route::post('/Display/{id}',"productController@editProduct");
