<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class OrmCategoryController extends Controller
{
    //

    public function getAll ()
    {
        $list = Category::all();
        dd($list);

        $list = Category::where('id', '>', 1)->orderBy('id', 'DESC')->get();
        foreach ($list as $r) {
            echo $r->id.'<br>';
            echo $r->name.'<br>';
        }
    }


    public function paginate ()
    {
        $list = Category::paginate(10);
        $list->appends([
            'query' => 'NIIT', 'category_id' => 1,
        ]);
        return view('frontend/category', compact('list'));
    }


    public function findOne ()
    {
        $categoryObj = Category::find(1);
        echo $categoryObj->id.'<br>';
        echo $categoryObj->name;
    }

    public function insert ()
    {
        /*$categoryObj = new Category();
        $categoryObj->name = "New Balance";
        $categoryObj->slug = "new-balance";
        $categoryObj->parent_id = 0;
        //'INSERT INTO category(name,slug,parent_id) VALUES("new balance","",0)';
        $categoryObj->save();*/

        Category::create([
            'name' => 'Rick Owen',
            'slug' => 'rick_owen',
            'parent_id' => 0
        ]);
    }

    public function update ()
    {
        $category = Category::find(1);
        $category->name = 'Vans';
        $category->slug = 'vans';
        $category->save();
        //UPDATE category SET name="Vans', slug="vans";
    }

    public function softDelete ()
    {
        $category = Category::find(1);
        $category->delete();///xoá mềm
    }

    public function getOnlyTrashed ()
    {
        dd(Category::onlyTrashed()->get());
    }

    public function restore ()
    {
        Category::onlyTrashed()->where('id', 1)->restore();
    }

    public function hardDelete ()
    {
        $category = Category::find(1);
        $category->forceDelete();///xoá mềm
    }
}
