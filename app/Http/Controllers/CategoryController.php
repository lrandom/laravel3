<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function getCategory ()
    {
        //$category = DB::table('category')->where('id', 1)->where('id', 2)->get();
        //SELECT * FROM category WHERE id =1 AND id=2;

        /*$category = DB::table('category')->where([
            'id' => 1,
            'name' => 'Adidas'
        ])->get();*////SELECT * FROM category WHERE id =1 AND name="Adidas";


        /*$category = DB::table('category')->where('id', 1)
            ->orWhere('id', 2)->get();*/
        //SELECT * FROM category WHERE id =1 OR id=2;

        $category = DB::table('category')->where('id', 1)
            ->where('slug', 'adidas')
            ->orWhere('id', '2')
            ->get();
        //SELECT * FROM category WHERE id=1 AND id=2 OR slug="adidas"

        //group or where
        $category = DB::table('category')->where('id', 1)->orWhere(function ($query) {
            $query->where('id', 2)->where('slug', 'adidas');
        })->get();
        //SELECT * FROM category WHERE id=1 OR (id=2 AND slug="adidas")

        //dd($category);
        foreach ($category as $cat) {
            echo $cat->id;
            echo $cat->name;
            echo $cat->slug;
            echo '<br>';
        }
    }

    public function getOne ()
    {
        $category = DB::table('category')->first();
        echo $category->id;
        echo $category->name;
        echo $category->slug;
    }

    public function getAggration ()
    {
        echo DB::table('category')->count();
        echo DB::table('category')->min('id');
        echo DB::table('category')->max('id');
        echo DB::table('category')->sum('id');
        echo DB::table('category')->avg('id');
    }

    public function selection ()
    {
        $category = DB::table('category')->select(['id', 'name'])->get();
        foreach ($category as $r) {
            echo $r->id;
            echo $r->name;
            echo $r->slug;
        }
    }

    public function innerJoin ()
    {
        $category = DB::table('category')
            ->join('products', 'category.id', '=', 'products.category_id')
            ->select('category.*', 'category.name as category_name', 'products.name as product_name')->get();
        dd($category);
    }
}
