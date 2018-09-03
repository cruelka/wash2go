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
        $item = LaraCart::add(
            $product->id,
            $name = $product->name,
            $qty = 1,
            $price = $product->price,
            $options = [],
            $taxable = true,
            $lineItem = false


        );
        $item->addSubItem([
            'description' =>  $product->image, // this line is not required!
            'price' => 0,
            'qty' => 0
        ]);

        echo 'success';

    }
    
    public function clearCart()
    {
        LaraCart::emptyCart();
        LaraCart::removeAttribute('image');


        echo 'clear';

    }
}
