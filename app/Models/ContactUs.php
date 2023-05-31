<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    static $contact;
    static function createContactUs($request)
    {
        self :: $contact = new ContactUs();
        self :: $contact->name= $request->name;
        self :: $contact->numberad= $request->numberad;
        self :: $contact->address= $request->address;
        self :: $contact->msg= $request->msg;
        self :: $contact->save();

    }
}
