<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    static $cart;
    static function createCart($quantity,$product)
    {
        self :: $cart = new Cart();
        self :: $cart->image=$product->image;
        self :: $cart->name= $product->brand_name;
        self :: $cart->email= auth()->user()->email;
        self :: $cart->price= $product->price;
        self :: $cart->subtotal= $product->price*$quantity;
        self :: $cart->quantity= $quantity;
        self :: $cart->pid= $product->id;
       
        self :: $cart->save();

    }
    static function deletecart($id)
    {
        $cart = Cart :: find($id);
       $cart ->delete();
    }

}