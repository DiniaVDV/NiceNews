<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Navbar;


class NavbarController extends Controller
{
    public function edit(){
        $navbar = Navbar::all();

        return view('admin.navbarEdit', compact('navbar'));
    }
}
