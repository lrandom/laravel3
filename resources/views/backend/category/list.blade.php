@extends('backend.layout')
@section('content')
    <a class="bg-blue-500 w-36 text-center block rounded mx-auto text-white p-1 my-5"
       href="{{route('category.add')}}">Add</a>
    <div class="bg-white mt-5 w-full p-2">
        <table class="table-auto w-full">
            <tr class="font-bold">
                <td class="text-bold">Id</td>
                <td class="text-bold ">Name</td>
                <td class="text-bold ">Action</td>
            </tr>

            @foreach($list as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xoá không')"
                           href="{{route('category.delete',['id'=>$item->id])}}">Xoá</a>
                        <a href="{{route('category.edit',['id'=>$item->id])}}">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$list->links()}}
    </div>
@endsection
