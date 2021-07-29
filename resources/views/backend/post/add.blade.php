@extends('backend.layout')
@section('content')

    <div class="bg-white mt-5 p-2 mx-auto w-1/2 p-5 rounded shadow">
        <form method="post" action="{{route('post.doAdd')}}" class="space-y-2">
            @csrf
            <div class="w-full flex gap-2 justify-center items-center">
                <label class="w-36">Title</label>
                <input type="text" name="title" class="border-2 rounded w-full" value="{{old('name')}}"/>
            </div>
            <div class="text-red-500 text-md w-full text-center">
                @error('name')
                {{$message}}
                @enderror
            </div>

            <div class="w-full flex gap-2 justify-center items-center">
                <label class="w-36">Description</label>
                <input type="text" name="description" class="border-2 rounded w-full" value="{{old('decsription')}}"/>
            </div>
            <div class="text-red-500 text-md w-full text-center">
                @error('description')
                {{$message}}
                @enderror
            </div>

            <div class="w-full flex gap-2 justify-center items-center">
                <label class="w-36">Content</label>
                <textarea name="my_content" class="w-full rounded border-2 h-40"></textarea>
            </div>
            <div class="text-red-500 text-md w-full text-center">
                @error('content')
                {{$message}}
                @enderror
            </div>

            <div class="w-full flex gap-2 justify-center items-center">
                <label class="w-36">Category</label>
                <select class="border-2 rounded w-full" name="category_id">
                    @foreach($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="w-full">
                <button class="bg-blue-500 w-1/2 block rounded mx-auto text-white p-1">Submit</button>
            </div>

        </form>
    </div>
@endsection
