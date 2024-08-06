<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    //
    protected $table = 'contactus';  
    public $fillable = ['name','email','subject','message'];   
}
