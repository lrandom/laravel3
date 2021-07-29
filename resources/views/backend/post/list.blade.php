@extends('backend.layout')
@section('content')
    <a class="bg-blue-500 w-36 text-center block rounded mx-auto text-white p-1 my-5"
       href="{{route('post.add')}}">Add</a>
    <div class="bg-white mt-5 w-full p-2">
        <table class="table-auto w-full">
            <tr class="font-bold">
                <td class="text-bold">Id</td>
                <td class="text-bold ">Title</td>
                <td class="text-bold ">Description</td>
                <td class="text-bold ">Category</td>
                <td class="text-bold ">Action</td>
            </tr>

            @foreach($list as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xoá không')"
                           href="{{route('post.delete',['id'=>$item->id])}}">Xoá</a>
                        <a href="{{route('post.edit',['id'=>$item->id])}}">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$list->links()}}
    </div>
@endsection
