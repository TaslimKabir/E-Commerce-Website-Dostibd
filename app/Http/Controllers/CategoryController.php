<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryPant()
    {
      $category = new Category();
       return view('frontend.category.pant',['categories'=>$category->all()]);
    }
    public function categoryShoes()
    {
       $category = new Category();
       return view('frontend.category.shoes',['categories'=>$category->all()]);
    }
    public function categoryTshirt()
    {
       $category = new Category();
       return view('frontend.category.t-shirt',['categories'=>$category->all()]);
    }
    public function categoryCloth()
    {
       $category = new Category();
       return view('frontend.category.cloth',['categories'=>$category->all()]);
    }
    public function categoryDonate()
    {
       return view('frontend.category.donate');
    }
    public function productDetails($id)
    {
       $product = Category::find($id);
       $category = new Category();
       return view('frontend.product.productDetails',['categories'=>$category->all()],['id'=>$product]);
    }
    public function newProduct()
    {
       $category = new Category();
       return view('frontend.product.newProduct',['categories'=>$category->all()]);
    }
    public function productDetailsShoes()
    {
       $category = new Category();
       return view('frontend.product.productDetailsShoes',['categories'=>$category->all()]);
    }
}
    

