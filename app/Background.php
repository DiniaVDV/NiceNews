<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'header_color',
        'header_color_apply',
        'header_img',
        'body_color',
        'body_img',

    ];
}
