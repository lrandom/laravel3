<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Section;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function home ()
    {
        $sections = Section::all();
        return view('fe.home', compact('sections'));
    }

    public function testDetail ($section_id)
    {
        $questions = Question::where('section_id', $section_id)->get();
        return view('fe.testui', compact('questions'));
    }
}
