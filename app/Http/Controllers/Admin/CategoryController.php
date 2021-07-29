<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Models\Category;

class CategoryController extends Controller implements ICrud
{
    //
    public function list ()
    {
        // TODO: Implement list() method.
        $list = Category::orderBy('created_at', 'DESC')->paginate(15);
        return view('backend.category.list', compact('list'));
    }

    public function add ()
    {
        // TODO: Implement add() method.
        return view('backend.category.add');
    }

    public function doAdd (Request $request)
    {
        // TODO: Implement doAdd() method.
        $request->validate([
            'name' => 'required'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect(route('category.list'));
    }

    public function edit ($id)
    {
        // TODO: Implement edit() method.
        $obj = Category::find($id);
        return view('backend.category.edit', compact('obj'));
    }

    public function doEdit (Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        // TODO: Implement doEdit() method.
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect(route('category.list'));
    }

    public function delete ($id)
    {
        // TODO: Implement delete() method.
        Category::where('id', $id)->delete();
        return redirect(route('category.list'));
    }

}
