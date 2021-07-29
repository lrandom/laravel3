<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto p-20">

    <div class="grid grid-cols-3 gap-5">
        @foreach($sections as $section)
            <a href="{{route('ui.test',['section_id'=>$section->id])}}"
               class="col-span-1 flex justify-center items-center h-64 shadow border-2 rounded">
                <p>{{$section->name}}</p>
            </a>
        @endforeach
    </div>

</div>
</body>
</html>
