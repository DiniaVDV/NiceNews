<?php

namespace App\Http\Controllers\Admin;

use App\Background;
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

    public function applyBackgroundBody(Request $request)
    {
        $backgroundList =  Background::get()->first();
        $backgroundListArray = Background::get()->first()->toArray();
        $input = $request->all();

        foreach ($input as $inputKey => $inputValue){
            foreach ($backgroundListArray as $key => $background){
                if($inputKey == $key) {
                    $backgroundListArray[$key] = $input[$inputKey];
                }
            }
        }
        $backgroundList->update($backgroundListArray);

        return redirect('admin_panel/color_background')->with([
            'flash_message' => 'Фон изменен!',
            'flash_message_important' => true
        ]);
    }

}
