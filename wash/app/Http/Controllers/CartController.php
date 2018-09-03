<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use LukePOLO\LaraCart\Facades\LaraCart;

class CartController extends Controller
{
    public function showCart()
    {
       $items = LaraCart::getItems();
        dd($items);
        return view('cart', compact('items'));

    }
    public function addCart(Product $product)
    {
       $check = LaraCart::add(
            $product->id,
            $name = $product->name,
            $qty = 1,
            $price = $product->price,
            $options = [],
            $taxable = true,
            $lineItem = false,
            $image = $product->image

        );
        dd($check);
        echo 'success';

    }
}
