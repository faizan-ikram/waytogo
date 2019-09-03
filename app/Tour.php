<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['CompanyId','name','days','Image','Details','Budget','NSA','departure','discount'];

}
