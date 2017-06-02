<?php
/**
 * Created by PhpStorm.
 * User: Dinia
 * Date: 02.06.2017
 * Time: 15:29
 */

namespace App;


trait Validates
{
    public function validateById($name, $id)
    {
        $item = $name::findOrFail($id);
        if($item){
            return $item;
        }else{
            return false;
        }

    }
}