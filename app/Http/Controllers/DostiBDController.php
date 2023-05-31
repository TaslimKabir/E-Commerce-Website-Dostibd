<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Auth;
use App\Models\ProductDetails;
use Illuminate\Http\Request;


class DostiBDController extends Controller
{
    static $count;
    public function welcome()
    {

        $product = new ProductDetails();
        return view('frontend.home.index', ['products' => $product->all()]);
    }
    public function index()
    {

        $product = new ProductDetails();
        return view('frontend.home.index', ['products' => $product->all()]);
    }
    public function about()
    {
        return view('frontend.aboutUs.about');
    }
    public function shelf()
    {
        return view('frontend.shelf.shelf');
    }
    public function policies()
    {
        return view('frontend.policies.policies');
    }
    public function contact()
    {
        return view('frontend.contact.contact');
    }
    public function password()
    {
        return view('frontend.password.password');
    }
    public function myAcount()
    {
        $cart = new Cart(); 
        $order = new Order();
        return view('frontend.myAcount.myAcount',['orders' => $order->all()]);
    }
    
    
    public function cart()
    {
        $cart = new Cart(); 
        $id1= request()->query('Id');
        $quantity1 = request()->query('quantity');
    
        
        if(isset(Cart ::orderBy('id','desc')->first()->pid))
        {
            if($id1>0){

                
            $pid= Cart ::orderBy('id','desc')->first()->pid;
            $quantity= Cart ::orderBy('id','desc')->first()->quantity;
            $email= Cart ::orderBy('id','desc')->first()->email;
            
           
            
            if($pid==$id1 && $quantity==$quantity1 && $email==auth()->user()->email)
            {
              
                return view('frontend.cart.cart',['carts'=>$cart->all()]);
            }
            else{
                          
                $product = ProductDetails::find($id1);
                Cart :: createCart ($quantity1,$product);
            }
            }
            
        }
        elseif(isset($id1))
        {
            $product = ProductDetails::find($id1);
            Cart :: createCart ($quantity1,$product);
        }
        else
            {
               
        return view('frontend.cart.cart',['carts'=>$cart->all()]);

            }
       

      
        return view('frontend.cart.cart',['carts'=>$cart->all()]);
        // return $pid."pid". $quantity."quantity". $email."email";
    }


    public function deleteCart($id)
    {
       
        $cart = Cart :: deletecart($id);
        return redirect('/cart');
      
    }
    

    public function search(Request $request)
    {
        $product = ProductDetails::where('brand_name', 'like', '%' . $request->input('query') . '%')->orwhere('category_name', 'like', '%' . $request->input('query') . '%')->get();

        return view('frontend.home.search', ['products' => $product]);
    }

}
