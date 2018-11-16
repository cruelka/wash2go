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

Route::get('/', function () {
     //$posts = App\Post::take(2)->get();
   // $why = App\Page::where('slug', '=', 'why-its-good-for-your-car')->firstOrFail();
   // $eco = App\Page::where('slug', '=', 'why-eco-wash')->firstOrFail();
   // $products = App\Product::take(4)->get();




    return view('welcome', compact('posts','why','eco','products'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('post/{slug}', function($slug){
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    return view('post', compact('post'));
});
Route::get('blog', function () {
    $posts = App\Post::paginate(3);
    return view('posts', compact('posts'));
});

Route::get('page/{slug}', function($slug){
    $data = App\Page::where('slug', '=', $slug)->firstOrFail();
    $posts = App\Post::take(3)->get();
    $products = App\Product::take(4)->get();
    return view('content', compact('data','posts','products'));
});
Route::get('/mail', 'HomeController@basic_email');
Route::get('/booking', function () {
   return view('booking');
});
Route::post('/booking', 'HomeController@store');
Route::post('/check', 'HomeController@checkTime');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/category/{slug}', 'CproductController@show');
Route::get('/product/{id}', 'ProductController@show');

Route::get('/cart','CartController@showCart');
Route::get('/cart/{product}','CartController@addCart');
Route::get('/clear','CartController@clearCart');
Route::post('/cart/update','CartController@updateQty');
Route::post('/cart/remove','CartController@removeItem');