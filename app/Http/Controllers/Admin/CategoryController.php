<?php
namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(10);
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
        return redirect()->route('admin_panel.categories')->with('message', 'Категория обновлена.');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect('admin_panel/categories')->with([
            'flash_message' => 'Категория была довавлена!',
            'flash_message_important' => true
        ]);
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('admin_panel.categories')->with('message', 'Категория удалена.');
    }

}