<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\AdminLogin;
use App\Models\ListProduct;
use App\Models\Order;
use App\Models\ProductDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.admin.category.index');
    }
    public function manage()
    {
        $product = new ProductDetails();
        // $productList= ProductDetails ::find($id);
        return view('backend.admin.product.showProductList',['products'=>$product->all()]);
    }

    public function productValueRec(Request $request)
    {
       ProductDetails :: createProductDetails ($request);
        return redirect('/category/add')->with('msg',"Category Add Successfuly");
    }

    public function showProductList()
    {
      
        $product = new ProductDetails();
        // $productList= ProductDetails ::find($id);
        return view('backend.admin.product.showProductList',['products'=>$product->all()]);
    }

    public function manageProduct()
    {
        $manage_product = new ProductDetails();
        return view('backend.admin.product.manageProduct',['products'=>$manage_product->all()]);
    }
    public function productDetailsRec(Request $request)
    {
        ProductDetails :: createProductDetails($request);
        return redirect('/product/manageProduct')->with('msg',"Category Add Successfuly");
    }
    public function viewProductDetails()
    {
        return view('backend.admin.product.viewProductDetails');
    }
    public function orderDetails()
    {
        $order=new Order();
        return view('backend.admin.order.orderDetails',['orders'=>$order->all()]);
    }

    public function deleteOrder($id)
    {
        $order = Order :: deleteOrderList($id);
        return redirect('/admin/orderDetails');
      
    }
    public function acceptOrder($id)
    {
        $order = Order :: accept($id);
        return redirect('/admin/orderDetails');
      
    }

    public function adminLogin()
    {
        return view('backend.admin.adminLogin.adminLogin');
    }
    public function adminLoginPost(Request $request)
    {
        $admin1 = new AdminLogin();
        $admin = $admin1->all();
        foreach($admin as $value)
        {
            if($value->email == $request->email &&  $value->password == $request->password)
            {
               return redirect('/dashboard');
            }
            else
             return to_route('admin.login');
              
        }
    }
}
    




