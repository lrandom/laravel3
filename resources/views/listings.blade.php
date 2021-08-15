<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($products as $product)
   <div>
       <h4>{{$product->name}}</h4>
       <img src="{{$product->img}}" style="width:100px"/>
       <p>{{$product->price}}</p>
       <a href="{{route('addCart',['id'=>$product->id])}}">Add to Cart</a>
   </div>
@endforeach
</body>
</html>
