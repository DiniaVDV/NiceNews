<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
     public static function getAdverts()
	{
		return Advert::orderBy('position')->get();
	}
}
