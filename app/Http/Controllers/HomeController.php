<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /*Handling trang home*/
    public function index ()
    {
        return view('frontend.home');
    }

    public function about (Request $request)
    {
        //dd($request);
        //$_GET['id'];
        if ($request->isMethod('GET')) {
            echo 'GET REQUEST METHOD';
        }

        //Kiểm tra xem id có tồn tại hay không
        if ($request->has('id')) {
            echo $request->id;
            echo $request->query('id');//available với GET METHOD
            echo $request->input('id');

            $allRequest = $request->all();
            //dd($allRequest);
            foreach ($allRequest as $k => $v) {
                echo $v;
            }
        } else {
            echo "ID không tồn tại";
        }
        //return view('frontend.about');
    }

    //load giao diện có một form liên hệ
    public function contact ()
    {
        return view('frontend.contact');
    }

    //Xử lý dữ liệu gửi từ form liên hệ
    public function getContact (Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|max:10|min:10'
        ]);
    }
}
