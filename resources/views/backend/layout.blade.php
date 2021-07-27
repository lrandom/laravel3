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
<div class="container">
    <nav>
        <div><a href="">Category</a></div>
        <div><a href="">Post</a></div>
    </nav>

    <div>
        @section('content')

        @show
    </div>

    <footer>Copyright 2021 NIIT CMS</footer>
</div>
</body>
</html>
