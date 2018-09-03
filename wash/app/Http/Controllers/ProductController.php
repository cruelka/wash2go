<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cproduct;

class ProductController extends Controller
{

    public function index()
    {

    }

    public function show($slug)
    {
        $data = Cproduct::with('product')->where('slug', $slug)->get();
        return view('home',compact( 'bookings'));
    }
}