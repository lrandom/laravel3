<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function setSession(Request $request)
    {
        $request->session()->put('name', 'Luan');
        session(['id' => 1,
        ]);
    }

    public function getSession(Request $request)
    {
        echo $request->session()->get('name');//Luan
        echo session('id');//1
        dd($request->session()->all());
    }

    public function checkExist(Request $request)
    {
        if ($request->session()->has('name')) {
            echo "Session name có tồn tại";
        }

        if ($request->session()->exists('name')) {
            echo "Session name có tồn tại và giá trị của session này khác null";
        }
    }

    public function deleteSession(Request $request)
    {
        $request->session()->forget('name');//xoá session có key name
        $request->session()->forget(['name', 'id']); //xoá session có key id
        $request->session()->flush();//xoá toàn bộ
    }

    public function setFlashSession()
    {
        return redirect('/get-flash-session')->with('success', 'Thêm flash session thành công');
    }

    public function getFlashSession()
    {
        return view('/get-flash-session');
    }

}
