<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class Order extends Model
{
    use HasFactory;
    static $order,$cart1,$cart;

    static function createOrder($request,$id)
    {
        
        self :: $order = new Order();
             
        self :: $order->user_email=auth()->user()->email;
        self :: $order->image=$id->image;
        self :: $order->pid=$id->pid;
        self :: $order->quantity=$id->quantity;
        self :: $order->subtotal= $id->subtotal;
        self :: $order->status='Pendding';
        self :: $order->name= $request->name;
        self :: $order->company= $request->company;
        self :: $order->city= $request->city;
        self :: $order->postal_code= $request->postal_code;
        self :: $order->prefecture= $request->prefecture;
        self :: $order->address= $request->address;
        self :: $order->mobile= $request->phone;
        self :: $order->email= $request->email;
        self :: $order->time_slot= $request->time_slot;
        self :: $order->brand_name=$id->name;
        self :: $order->note=$request->note; 
        self :: $order->total= $id->subtotal; 
        self :: $order->save();
 
    }
    static function deleteOrderList($id)
    {
        $order = Order :: find($id);
        
        // if(file_exists($order->image))
        // {
        //     unlink($order->image);
        // }
        $order->delete();
    }
    static function accept($id)
    {
        $order = Order :: find($id);
       
    }
   
}
