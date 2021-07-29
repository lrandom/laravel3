<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Question;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class QuestionController extends Controller implements ICrud
{
    public function list ()
    {
        // TODO: Implement list() method.
        $list = Question::paginate(15);
        return view('backend.question.list', compact('list'));
    }

    public function add ()
    {
        // TODO: Implement add() method.
        $section = Section::all();
        return view('backend.question.add', compact('section'));
    }

    public function doAdd (Request $request)
    {
        // TODO: Implement doAdd() method.
        $request->validate([
            'question' => 'required'
        ]);

        $question = new Question();
        $question->question = $request->question;
        $question->index_correct_answer = $request->index_correct_answer;
        $question->answers = $request->answers;//lưu json
        $question->section_id = $request->section_id;
        $question->save();
        return redirect(route('question.list'));
    }

    public function edit ($id)
    {
        // TODO: Implement edit() method.
        $obj = Question::find($id);
        $category = Category::all();
        return view('backend.question.edit', compact('obj', 'category'));
    }

    public function doEdit (Request $request)
    {
        $request->validate([
            'title' => 'required',
            'my_content' => 'required',
            'description' => 'required',
        ]);

        // TODO: Implement doEdit() method.
        $question = Question::find($request->id);
        $question->title = $request->title;
        $question->content = $request->my_content;
        $question->description = $request->description;
        $question->category_id = $request->category_id;
        $question->save();
        return redirect(route('question.list'));
    }

    public function delete ($id)
    {
        // TODO: Implement delete() method.
        Question::where('id', $id)->delete();
        return redirect(route('question.list'));
    }
}
