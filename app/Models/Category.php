<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    static $category, $image, $directory, $imageName, $imageNew;
    static function imageUrl($imagedata){
        self::$image = $imagedata->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'ProductList-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    static function createProductDetails($request)
    {
         
        self :: $category = new ProductDetails();
        self :: $category->image=self :: imageUrl($request);
        self :: $category->name = $request->name;
        self :: $category->code = $request->code;
        self :: $category->price = $request->price;
        self :: $category->quantity = $request->quantity;
        self :: $category->category = $request->category;
        self :: $category->tag = $request->tag;
        self :: $category->weight = $request->weight;
        self :: $category->description = $request->description;
        self :: $category->action = $request->action;
        self :: $category->save();

    }
    static function createViewIdWiseProduct($request,$id)
    {
        $category = ProductDetails::find($id);
        self :: $category = new ProductDetails();
        self :: $category->image=self :: imageUrl($request);
        self :: $category->name = $request->name;
        self :: $category->code = $request->code;
        self :: $category->price = $request->price;
        self :: $category->quantity = $request->quantity;
        self :: $category->category = $request->category;
        self :: $category->tag = $request->tag;
        self :: $category->weight = $request->weight;
        self :: $category->description = $request->description;
        self :: $category->action = $request->action;
        self :: $category->save();

    }

    static function deleteProduct($id)
    {
        $category = ProductDetails :: find($id);
        
        if(file_exists($category->image))
        {
            unlink($category->image);
        }
       $category ->delete();
    }
    static function editProduct($request, $id)
    {
        $category = ProductDetails::find($id);
        if($request->file('image')){
            if(file_exists($category->image)){
                unlink($category->image);
            }
            self::$imageNew = self::imageUrl($request);
        }
        else{
            self::$imageNew = $category->image;
        }
         $category->image=self :: $imageNew;
         $category->name = $request->name;
         $category->code = $request->code;
         $category->price = $request->price;
         $category->quantity = $request->quantity;
         $category->category = $request->category;
         $category->tag = $request->tag;
         $category->weight = $request->weight;
         $category->description = $request->description;
         $category->action = $request->action;
         $category->save();

    }

}