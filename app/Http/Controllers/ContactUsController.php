<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function sendMsg(Request $request)
    {
        ContactUs :: createContactUs ($request);
        return redirect('/contact')->with('msg',"Category Add Successfuly");
    }
}
