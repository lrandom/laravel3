<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Phone;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class DemoRelationShip extends Controller
{
    //
    public function oneToOne ()
    {
        $user = User::find(1);
        echo $user->id.'<br>';
        echo $user->name.'<br>';
        echo $user->phone->home_phone.'<br>';
        echo $user->phone->personal_phone.'<br>';

        $phone = Phone::find(1);
        echo $phone->user->name;
    }

    public function oneToMany ()
    {
        $category = Category::find(1);
        echo "Tại danh mục ".$category->name." có các sản phẩm sau <br>";
        $products = $category->products;
        foreach ($products as $product) {
            echo $product->name.'<br>';
        }

        $product = Product::find(1);
        echo 'Sản phẩm này thuộc';
        echo $product->category->name;
    }

    public function manyToMany ()
    {
        $order = Order::find(1);
        $products = $order->products;
        echo 'Đơn hàng mã 1 có sp là';
        foreach ($products as $r) {
            echo $r->name.'<br>';
        }

        $product = Product::find(1);
        $orders = $product->orders;
        echo 'Sản phẩm có id là 1 nằm trong các đơn hàng mã là';
        foreach ($orders as $order) {
            echo $order->id.'<br>';
        }
    }

    public function polyOne ()
    {
        $user = User::find(1);
        echo $user->phone->home_phone;
        echo '<br>';
        $order = Order::find(1);
        echo $order->phone->home_phone;
    }

    public function polyMany ()
    {
        $post = Post::find(1);
        foreach ($post->comments as $comment) {
            echo $comment->content.'<br>';
        }

        $product = Product::find(2);
        foreach ($product->comments as $comment) {
            echo $comment->content.'<br>';
        }
    }

    public function manyToManyMorph ()
    {
        $category = Category::find(1);
        foreach ($category->products as $product) {
            echo 'Sản phẩm có id là'.$product->id.$product->name.'<br>';;
        }

        $category = Category::find(3);
        foreach ($category->posts as $post) {
            echo 'Post có id là'.$post->id.$post->name.'<br>';
        }

        $product = Product::find(1);
        foreach ($product->categorys as $category) {
            echo 'Danh mục có id là'.$category->id.$category->name.'<br>';
        }
    }
}
