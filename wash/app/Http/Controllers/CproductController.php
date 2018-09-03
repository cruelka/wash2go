<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cproduct;

class CproductController extends Controller
{

    public function index()
    {

    }

    public function show($slug)
    {
        $data = Cproduct::with('product')->where('slug', $slug)->get();
        return view('categories',compact( 'data'));
    }
}
