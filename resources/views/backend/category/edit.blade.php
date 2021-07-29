@extends('backend.layout')
@section('content')

    <div class="bg-white mt-5 p-2 mx-auto w-1/2 p-5 rounded shadow">
        <form method="post" action="{{route('category.doEdit')}}" class="space-y-2">
            @csrf
            <input type="hidden" name="id" value="{{$obj->id}}">
            <div class="w-full flex gap-2 justify-center items-center">
                <label>Name</label>
                <input type="text" name="name" class="border-2 rounded w-full" value="{{$obj->name}}"/>
            </div>
            <div class="text-red-500 text-md w-full text-center">
                @error('name')
                {{$message}}
                @enderror
            </div>

            <div class="w-full">
                <button class="bg-blue-500 w-1/2 block rounded mx-auto text-white p-1">Submit</button>
            </div>

        </form>
    </div>
@endsection
