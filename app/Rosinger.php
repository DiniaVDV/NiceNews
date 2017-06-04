<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rosinger extends Model
{
    protected $fillable =[
        'name',
        'email'
    ];

    public $timestamps = false;
}
