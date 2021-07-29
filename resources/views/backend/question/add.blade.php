@extends('backend.layout')
@section('content')

    <div class="bg-white mt-5 p-2 mx-auto w-1/2 p-5 rounded shadow">
        <form method="post" action="{{route('question.doAdd')}}" class="space-y-2">
            @csrf

            <div class="w-full flex gap-2 justify-center items-center">
                <label class="w-36">Question</label>
                <input type="text" name="question" class="border-2 rounded w-full" value="{{old('question')}}"/>
            </div>

            @for ($i = 0; $i < 4; $i++)
                <div class="w-full flex gap-2 justify-center items-center">
                    <label class="w-36">Answer {{$i+1}}</label>
                    <input type="text" name="answers[]" class="border-2 rounded w-full"/>
                </div>
            @endfor

            <div class="w-full flex gap-2 justify-center items-center">
                <label class="w-36">Correct Answer</label>
                <select class="border-2 rounded w-full" name="index_correct_answer">
                    @for ($i = 0; $i < 4; $i++)
                        <option value="{{$i}}">Đáp án {{$i+1}}</option>
                    @endfor
                </select>
            </div>

            <div class="w-full flex gap-2 justify-center items-center">
                <label class="w-36">Section</label>
                <select class="border-2 rounded w-full" name="section_id">
                    @foreach($section as $sec)
                        <option value="{{$sec->id}}">{{$sec->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="w-full">
                <button class="bg-blue-500 w-1/2 block rounded mx-auto text-white p-1">Submit</button>
            </div>

        </form>
    </div>
@endsection
