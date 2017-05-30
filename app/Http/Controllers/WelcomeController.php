<?php
/**
 * Created by PhpStorm.
 * User: Dinia
 * Date: 01.03.2017
 * Time: 22:32
 */

namespace App\Http\Controllers;


class WelcomeController
{
    public function contact()
    {
        return view('pages.contact');
    }

}