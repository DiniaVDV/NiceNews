<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;

class AdminController extends Controller
{

    public function admin()
    {
        return view('admin.categories.show');
    }

    public function changeBackgroundBody(){
        return view('admin.background');
    }

}
