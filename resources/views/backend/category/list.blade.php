@extends('backend.layout')
@section('content')
    <div>
        <table>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Action</td>
            </tr>

            @foreach($list as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <a>Xoá</a>
                        <a>Sửa</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
