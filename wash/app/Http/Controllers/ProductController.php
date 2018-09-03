<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cproduct;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {

    }

    public function show($id)
    {
        $data = Product::with('cats')->where('id', $id)->get();
        $more = Product::where(
            ['category',$data->first()->cats->id],
            ['id','!=', $id])->take(4)->get();
        return view('product',compact( 'data' , 'more'));
    }
}
