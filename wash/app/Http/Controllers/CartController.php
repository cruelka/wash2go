<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use LukePOLO\LaraCart\Facades\LaraCart;

class CartController extends Controller
{
    public function showCart()
    {
        foreach($items = LaraCart::getItems() as $item) {
             echo $item->id;
        }
    }
    public function addCart(Product $product)
    {
        LaraCart::add(
            $product->id,
            $name = $product->name,
            $qty = 1,
            $price = '0.00',
            $options = [],
            $taxable = true,
            $lineItem = false
        );
        echo 'success';

    }
}
