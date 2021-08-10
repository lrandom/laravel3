<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload()
    {
        return view('upload');
    }

    function doUpload(Request $request)
    {
        // $request->file('image')->store('images', 'public');
        //lưu vào db storage/images/rh3z3ciSY81wkEXWU3abbbxxImB6gTKcEmVeylhL.jpg
        $name = time() . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('images', $name, 'public');
        $gallery = new Gallery();
        $gallery->path = 'storage/images/' . $name;
        $gallery->save();
    }

    function show()
    {
        $list = Gallery::all();
        return view('show-image', compact('list'));

    }
}
