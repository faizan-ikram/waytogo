<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'companies';
    protected $fillable = ['CompanyName','Image','email','password'];
}
