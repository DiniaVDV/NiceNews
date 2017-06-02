<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = [
        'title',
        'price',
        'content',
        'name_company',
        'position',
        'leftsidebar',
        'rightsidebar',
    ];



     public static function getAdverts()
	{
		return Advert::orderBy('position')->get();
	}
}
