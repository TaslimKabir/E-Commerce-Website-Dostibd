<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\ProductDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
    public function order()
    {
       
        $cart=new Cart();
        return view('frontend.orderplacement.order',['carts'=>$cart->all()]);
    }

    public function orderPost(Request $request){
       
        $cart1=new Cart();
        $cart=$cart1->all();
        foreach($cart as $value)
        {
            if($value->email==auth()->user()->email)
            {
                $id1=$value->id;
                $id= Cart::find($id1);
                Order :: createOrder ($request,$id);
                Cart :: deletecart($id1);
            }
          
        }
      
        return redirect('/order');
    }
   
}
