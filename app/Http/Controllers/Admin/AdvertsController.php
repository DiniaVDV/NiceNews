<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Advert;
use App\Http\Requests\AdvertsRequest;

class AdvertsController extends Controller
{

    public function index()
    {
        $adverts = Advert::paginate(10);
        return view('admin.adverts.show', compact('adverts'));
    }

    public function create()
    {
        return view('admin.adverts.create');
    }

    public function store(AdvertsRequest $request)
    {
        Advert::create($request->all());
        //Article::create($request->all());
        //session()->flash('flash_message', 'You article has been created!');
        return redirect('admin_panel/adverts')->with([
            'flash_message' => 'Реклама добавлена!',
            'flash_message_important' => true
        ]);
    }

    public function edit($id)
    {
        $advert = Advert::findOrFail($id);
        return view('admin.adverts.edit', compact('advert'));
    }

    public function update($id, AdvertsRequest $request)
    {
        $advert = Advert::findOrFail($id);
        $advert->update($request->all());
        return redirect('admin_panel/adverts')->with('message', 'Реклама обновлена.');
    }

    public function destroy($id)
    {
        Advert::findOrFail($id)->delete();
        return redirect()->route('admin_panel/adverts')->with('message', 'Реклама удалена.');
    }

}
