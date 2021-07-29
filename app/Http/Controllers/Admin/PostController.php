<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class PostController extends Controller implements ICrud
{
    public function list ()
    {
        // TODO: Implement list() method.
        $list = Post::paginate(15);
        return view('backend.post.list', compact('list'));
    }

    public function add ()
    {
        // TODO: Implement add() method.
        $category = Category::all();
        return view('backend.post.add', compact('category'));
    }

    public function doAdd (Request $request)
    {
        // TODO: Implement doAdd() method.
        $request->validate([
            'title' => 'required',
            'my_content' => 'required',
            'description' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->my_content;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect(route('post.list'));
    }

    public function edit ($id)
    {
        // TODO: Implement edit() method.
        $obj = Post::find($id);
        $category = Category::all();
        return view('backend.post.edit', compact('obj', 'category'));
    }

    public function doEdit (Request $request)
    {
        $request->validate([
            'title' => 'required',
            'my_content' => 'required',
            'description' => 'required',
        ]);

        // TODO: Implement doEdit() method.
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->content = $request->my_content;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect(route('post.list'));
    }

    public function delete ($id)
    {
        // TODO: Implement delete() method.
        Post::where('id', $id)->delete();
        return redirect(route('post.list'));
    }
}
