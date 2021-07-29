<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Models\Section;

class SectionController extends Controller implements ICrud
{
    //
    public function list ()
    {
        // TODO: Implement list() method.
        $list = Section::orderBy('created_at', 'DESC')->paginate(15);
        return view('backend.section.list', compact('list'));
    }

    public function add ()
    {
        // TODO: Implement add() method.
        return view('backend.section.add');
    }

    public function doAdd (Request $request)
    {
        // TODO: Implement doAdd() method.
        $request->validate([
            'name' => 'required'
        ]);
        $section = new Section();
        $section->name = $request->name;
        $section->save();
        return redirect(route('section.list'));
    }

    public function edit ($id)
    {
        // TODO: Implement edit() method.
        $obj = Section::find($id);
        return view('backend.section.edit', compact('obj'));
    }

    public function doEdit (Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        // TODO: Implement doEdit() method.
        $section = Section::find($request->id);
        $section->name = $request->name;
        $section->save();
        return redirect(route('section.list'));
    }

    public function delete ($id)
    {
        // TODO: Implement delete() method.
        Section::where('id', $id)->delete();
        return redirect(route('section.list'));
    }

}
