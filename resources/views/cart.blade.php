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
<table style="width:100%">
    <tr>
        <td>Tên sp</td>
        <td>Số lượng</td>
        <td>Giá/1 sp</td>
        <td>Tổng giá</td>
        <td>Thao tác</td>
    </tr>

    <tr>
    @foreach($cart as $cartItem)
        <tr>
            <td>{{$cartItem['product']->name}}</td>
            <td>{{$cartItem['quantity']}}</td>
            <td>{{$cartItem['product']->price}}</td>
            <td>{{$cartItem['product']->price*$cartItem['quantity']}}</td>
            <td>
                <a href="{{route('deleteCartItem',['id'=>$cartItem['product']->id])}}">Xoá</a>
                <a href="{{route('updateQuantity',['id'=>$cartItem['product']->id,'quantity'=>1])}}">Tăng</a>
                <a href="{{route('updateQuantity',['id'=>$cartItem['product']->id,'quantity'=>-1])}}">Giảm</a>
            </td>
        </tr>
        @endforeach
        </tr>
</table>
</body>
</html>
