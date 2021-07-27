<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class CategoryController extends Controller implements ICrud
{
    //
    public function list ()
    {
        // TODO: Implement list() method.
        $list = Category::paginate(15);
        return view('backend.category.list', compact('list'));
    }

    public function add ()
    {
        // TODO: Implement add() method.
    }

    public function doAdd (Request $request)
    {
        // TODO: Implement doAdd() method.
    }

    public function edit ()
    {
        // TODO: Implement edit() method.
    }

    public function doEdit (Request $request)
    {
        // TODO: Implement doEdit() method.
    }

    public function delete ($id)
    {
        // TODO: Implement delete() method.
    }

}
