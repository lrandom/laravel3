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
<div class="container-fluid mx-auto bg-indigo-50">
    <nav class="w-full flex justify-between items-center shadow px-5 bg-white">
        <div>
            <img class="w-20" src="https://seeklogo.com/images/C/CMS-logo-5598CC4E0F-seeklogo.com.gif"/>
        </div>

        <div class="flex space-x-2 text-bold">
            <div><a href="{{route('section.list')}}">Section</a></div>
            <div><a href="{{route('question.list')}}">Question</a></div>
        </div>
    </nav>

    <div class="h-screen">
        @section('content')

        @show
    </div>

    <footer>Copyright 2021 NIIT CMS</footer>
</div>
</body>
</html>
