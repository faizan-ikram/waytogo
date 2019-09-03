<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactAdmin extends Model
{
    protected $fillable = ['user_id','name','subject','email','message'];

}
