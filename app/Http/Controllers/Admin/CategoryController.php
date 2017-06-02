<?php
namespace App\Http\Controllers\Admin;

use App\Validates;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.show', compact('categories'));
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }
    public function update($id, CategoryRequest $request)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('admin_panel.categories')->with('message', 'Категория создана.');
    }
    public function create()
    {

        return view('admin.categories.create')->with('message', 'Категория создана.');
    }
    public function store(CategoryRequest $request)
    {

        $res = Category::create($request->all());

        //Article::create($request->all());
        //session()->flash('flash_message', 'You article has been created!');
        return redirect('admin_panel/categories')->with([
            'flash_message' => 'You article has been created!',
            'flash_message_important' => true

        ]);
    }


    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('admin_panel.categories')->with('message', 'Категория удалена.');
    }

}