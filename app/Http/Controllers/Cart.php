<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Cart extends Controller
{
    public function addToCart($id, Request $request)
    {
        if ($request->session()->exists('CART')) {
            //đã có giỏ hàng
            $cart = $request->session()->get('CART');
            //dd($cart);
            $found = false;
            for ($i = 0; $i < count($cart); $i++) {
                if ($id == $cart[$i]['product']->id) {
                    //có sp trong giỏ hàng
                    $cart[$i]['quantity'] = $cart[$i]['quantity'] + 1;
                    $found = true;
                    break;
                }
            }

            $product = Product::find($id);
            if (!$found) {
                //không có sp
                array_push($cart, [
                    'product' => $product,
                    'quantity' => 1
                ]);
            }
            $request->session()->put('CART', $cart);
        } else {
            //chưa có giỏ hàng
            $cart = [];
            $product = Product::find($id);

            array_push($cart, [
                'product' => $product,
                'quantity' => 1
            ]);

            $request->session()->put('CART', $cart);
        }

        return redirect()->back();
    }

    public function getCart(Request $request)
    {
        $cart = [];
        if ($request->session()->exists('CART')) {
            $cart = $request->session()->get('CART');
        }

        return view('cart', compact('cart'));
    }

    public function deleteCartItem($id, Request $request)
    {
        $cart = $request->session()->get('CART');
        $cartClc = collect($cart);
        $cart = $cartClc->filter(function ($item) use ($id) {
         return $item['product']->id != $id;
        });

  /*      [
            "0"=>"sp1",
            "1"=>"spn2"
        ];*/

        $cart = collect($cart->values());//đánh lại chỉ số


/*        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['product']->id == $id) {
                array_splice($cart, $i, 1);
                break;
            }
        }*/



        $request->session()->put('CART', $cart->toArray());
        return redirect('/cart');
    }

    public function updateQuantity($id, $quantity, Request $request)
    {
        $cart = $request->session()->get('CART');
        $cartClc = collect($cart);
        $cart = $cartClc->map(function ($item) use ($id, $quantity) {
            if ($item['product']->id == $id) {
                //tang/giam sl
                $item['quantity'] = $item['quantity'] + $quantity;
                return $item;
            }
            return $item;
        });

        $cart = $cart->toArray();
        $request->session()->put('CART', $cart);
        return redirect('/cart');
    }
}
