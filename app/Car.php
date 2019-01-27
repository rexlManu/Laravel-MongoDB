<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Car extends Eloquent
{

    protected $fillable = [
        'carcompany', 'model', 'price'
    ];

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
    }
}