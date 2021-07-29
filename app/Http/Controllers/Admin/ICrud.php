<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

interface ICrud
{
    public function list ();

    public function add ();//LOAD GIAO DIỆN ADD

    public function doAdd (Request $request);//DO POST ACTION

    public function edit ($id);//LOAD GIAO DIỆN SỬA

    public function doEdit (Request $request);//DO EDIT ACTION

    public function delete ($id); //XOÁ
}
