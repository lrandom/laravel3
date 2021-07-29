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
<div class="container mx-auto p-20 space-y-10 ">
    @foreach($questions as $q)
        <div class="border-2 shadow p-10">
            {{$q->question}}
        </div>

        <div class="grid grid-cols-2 gap-4">
            @foreach($q->answers as $a)
                <div class="col-span-1 border-2 rounded p-4">
                    {{$a}}
                </div>
            @endforeach
        </div>
    @endforeach
</div>
</body>
</html>
