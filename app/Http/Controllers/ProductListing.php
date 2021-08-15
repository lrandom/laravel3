<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductListing extends Controller
{
    //
    public function listing()
    {
        $products = Product::all();
        return view('listings', ['products' => $products,
        ]);
    }

}
