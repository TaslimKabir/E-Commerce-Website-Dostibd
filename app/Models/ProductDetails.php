<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;
    static $product, $image, $directory, $imageName, $imageNew;
    static function imageUrl($imagedata){
        self::$image = $imagedata->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'Product-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    static function createProductDetails($request)
    {
      
       
        self :: $product = new ProductDetails();
        self :: $product->image=self :: imageUrl($request);
        self :: $product->category_name= $request->category_name;
        self ::$product->brand_name= $request->brand_name;
        self :: $product->code = $request->code;
        self :: $product->price = $request->price;
        self :: $product->quantity = $request->quantity;
        self :: $product->tag = $request->tag;
        self :: $product->weight = $request->weight;
        self :: $product->description = $request->description;
        self :: $product->status = $request->status ;
      
        
        
        self :: $product->save();



       
      
      
      

    }
    static function createViewIdWiseProduct($request,$id)
    {
        $product = ProductDetails::find($id);
        self :: $product = new ProductDetails();
        self :: $product->image=self :: imageUrl($request);
        self :: $product->category_name= $request->category_name;
        self ::$product->brand_name= $request->brand_name;
        self :: $product->code = $request->code;
        self :: $product->price = $request->price;
        self :: $product->quantity = $request->quantity;
       
        self :: $product->tag = $request->tag;
        self :: $product->weight = $request->weight;
        self :: $product->description = $request->description;
        self :: $product->action = $request->action;
        self :: $product->save();

    }

    static function deleteProduct($id)
    {
        $product = ProductDetails :: find($id);
        
        if(file_exists($product->image))
        {
            unlink($product->image);
        }
       $product ->delete();
    }
    static function editProduct($request, $id)
    {
        $product = ProductDetails::find($id);
        if($request->file('image')){
            if(file_exists($product->image)){
                unlink($product->image);
            }
            self::$imageNew = self::imageUrl($request);
        }
        else{
            self::$imageNew = $product->image;
        }
         $product->image=self :: $imageNew;
         self :: $product->category_name= $request->category_name;
         self ::$product->brand_name= $request->brand_name;
         $product->code = $request->code;
         $product->price = $request->price;
         $product->quantity = $request->quantity;
        
         $product->tag = $request->tag;
         $product->weight = $request->weight;
         $product->description = $request->description;
         $product->action = $request->action;
         $product->save();

    }

}
