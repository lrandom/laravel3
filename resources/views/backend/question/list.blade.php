@extends('backend.layout')
@section('content')
    <a class="bg-blue-500 w-36 text-center block rounded mx-auto text-white p-1 my-5"
       href="{{route('question.add')}}">Add</a>
    <div class="bg-white mt-5 w-full p-2">
        <table class="table-auto w-full">
            <tr class="font-bold">
                <td class="text-bold">Id</td>
                <td class="text-bold ">Question</td>
                <td class="text-bold ">Answers</td>
                <td class="text-bold ">Correct Answer</td>
                <td class="text-bold ">Section</td>
                <td class="text-bold ">Action</td>
            </tr>

            @foreach($list as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->question}}</td>
                    <td>
                        @foreach($item->answers as $answer)
                            <div>{{$answer}}</div>
                        @endforeach
                    </td>
                    <td>{{$item->answers[$item->index_correct_answer]}}</td>
                    <td>{{$item->section->name}}</td>
                    <td>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xoá không')"
                           href="{{route('question.delete',['id'=>$item->id])}}">Xoá</a>
                        <a href="{{route('question.edit',['id'=>$item->id])}}">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$list->links()}}
    </div>
@endsection
