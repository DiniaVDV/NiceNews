<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dropdown extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'alias',
        'for_moderator',
        'for_reg_users',
        'position',
        'dropdown_menu',
        'for_unreg_users',
        'for_admin',
    ];
}
