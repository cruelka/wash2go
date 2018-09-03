<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use LukePOLO\LaraCart\Facades\LaraCart;

class CartController extends Controller
{
    public function showCart()
    {  dd(LaraCart::getItems());
        foreach($items =  as $item) {

        }
    }
    public function addCart(Product $product)
    {
        LaraCart::add(
            $product->id,
            $name = $product->name,
            $qty = 1,
            $price = $product->price,
            $options = [],
            $taxable = true,
            $lineItem = false
        );
        echo 'success';

    }
}
