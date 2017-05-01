<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Product;
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/contact',  "adminController@contact");

Route::get('/index',  "adminController@home");

Route:: get('/product',"ProductController@ViewProduct");
Route:: get('/add',"ProductController@AddProduct");
Route:: post('/add',"ProductController@AddProduct");
Route:: get('/add/{id}', function ($id){
    $product=Product::find($id);
    $product->delete();
    return redirect("product");
});

Route:: get('/edit/{id}',"ProductController@EditProduct");
Route:: post('/edit/{id}',"ProductController@EditProduct");