<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    static $register;
    static function makeRegistration($data)
    {
        self :: $register = new Register();
        self :: $register->name = $data->name;
        self :: $register->phone= $data->phone;
        self :: $register->email = $data->email;
        self :: $register->password = $data->password;
        self :: $register->conformation = $data->conformation;
        self :: $register->save();
    }
    
}
