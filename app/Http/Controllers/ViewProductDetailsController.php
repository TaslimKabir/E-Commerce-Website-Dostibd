<?php

namespace App\Http\Controllers;

use App\Models\ProductDetails;
use Illuminate\Http\Request;

class ViewProductDetailsController extends Controller
{
    // public function viewProductDetails()
    // {
    //     return view('backend.admin.product.viewProductDetails');
    // }
    public function categoryPant()
    {
       $product = new ProductDetails();
       return view('frontend.category.pant',['products'=>$product->all()]);
    }
    public function categoryShoes()
    {
       $product = new ProductDetails();
       return view('frontend.category.shoes',['products'=>$product->all()]);
    }
    public function categoryTshirt()
    {
       $product = new ProductDetails();
       return view('frontend.category.t-shirt',['products'=>$product->all()]);
    }
    public function categoryCloth()
    {
       $product = new ProductDetails();
       return view('frontend.category.cloth',['products'=>$product->all()]);
    }
    public function categoryDonate()
    {
       return view('frontend.category.donate');
    }
    public function productDetails($id)
    {
       $product1 =ProductDetails::find($id);
       $product = new ProductDetails();
       return view('frontend.product.productDetails',['products'=>$product->all()],['id'=>$product1]);
    }
    public function newProduct()
    {
       $product = new ProductDetails();
       return view('frontend.product.newProduct',['products'=>$product->all()]);
    }
    public function productDetailsShoes()
    {
       $product = new ProductDetails();
       return view('frontend.product.productDetailsShoes',['products'=>$product->all()]);
    }
    public function viewIDwiseProduct($id)
    {
        $product = ProductDetails::find($id);
        return view('backend.admin.product.viewIDwiseProduct',['products'=>$product]);
      
    }
    public function deleteProduct($id)
    {
        $product = ProductDetails :: deleteProduct($id);
        return redirect('/product/showProductList');
      
    }
    public function editProduct($id)
    {
        $product = ProductDetails::find($id);
        return view('backend.admin.product.editProduct',['product'=>$product]);
      
    }
    public function UpdateProduct( Request $request, $id)
    {
       ProductDetails:: editProduct($request, $id);
       return redirect('/product/showProductList');
    
    }
   
}
