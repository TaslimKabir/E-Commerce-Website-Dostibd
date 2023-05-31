<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    static $donation, $image, $directory, $imageName, $imageNew;
    static function imageUrl($imagedata){
        self::$image = $imagedata->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'Donation-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    static function createDonationdetail($data)
    {
        self :: $donation = new Donation();
        self :: $donation->image=self :: imageUrl($data);
        self :: $donation->donar_name = $data-> donar_name;
        self :: $donation->cloth_name = $data-> cloth_name ;
        self :: $donation->quantiy = $data->quantiy ;
        self :: $donation->description=$data-> description;
        self :: $donation->save();

    }
    static function deleteDonation($id)
    {
        $donation = Donation :: find($id);
        
        if(file_exists($donation->image))
        {
            unlink($donation->image);
        }
       $donation ->delete();
    }

    static function editDonation($request, $id)
    {
        $donation = Donation::find($id);
        if($request->file('image')){
            if(file_exists($donation->image)){
                unlink($donation->image);
            }
            self::$imageNew = self::imageUrl($request);
        }
        else{
            self::$imageNew = $donation->image;
        }
        $donation ->image= self ::$imageNew;
        $donation->donar_name=$request->donar_name;
        $donation ->cloth_name = $request->cloth_name;
        $donation ->quantiy= $request->quantiy;
        $donation ->description = $request->description;
        $donation->save();

    }
}
