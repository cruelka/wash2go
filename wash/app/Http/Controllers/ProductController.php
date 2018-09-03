<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cproduct;

class ProductController extends Controller
{

    public function index()
    {

    }

    public function show($id)
    {
        $data = Product::with('cproduct')->where('id', $id)->get();
        return view('product',compact( 'data'));
    }
}
