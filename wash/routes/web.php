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
     $posts = App\Post::take(2)->get();
    $why = App\Page::where('slug', '=', 'why-its-good-for-your-car')->firstOrFail();
    $eco = App\Page::where('slug', '=', 'why-eco-wash')->firstOrFail();




    return view('welcome', compact('posts','why','eco'));
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
    return view('content', compact('data'));
});

Route::get('/booking', function () {
   return view('booking');
});
Route::post('/booking', 'HomeController@store');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
