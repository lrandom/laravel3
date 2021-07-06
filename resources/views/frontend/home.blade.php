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
@include('frontend.nav',['name'=>'NIIT'])

This is homepage
{{$name}}

{{$age}}

<?php $myName = "Luan";
function total ($a, $b)
{
    return $a + $b;
}
?>

{{$myName}} <br>
{{total(10,50)}} <br>


@if(true)
    <div>Hello, xin chào các bạn</div>
@endif

@if(true)
    <div>Điều kiện khớp</div>
@else
    <div>Điều kiện không khớp</div>
@endif

<?php
$weather = 'Trời mưa';
?>
@if($weather=='Trời nắng')
    <div>Ở nhà ngủ</div>
@elseif($weather=='Trời mưa')
    <div>Rút quần áo vào và ở nhà ngủ</div>
@elseif($weather =='Trời mát')
    <div>Đi chơi</div>
@endif

<?php
$age = 18;
?>

@switch($age)
    @case(18)
    <div>Bạn đã là thanh niên</div>
    @break

    @case(16)
    <div>Bạn đã là thanh thiếu niên</div>
    @break

    @default

@endswitch

@for ($i = 0; $i < 10; $i++)
    <div>{{$i}}</div>
@endfor

<@php $x = 0; @endphp>
@while($x<10)
    {{$x}}
    <?php $x++ ?>
@endwhile

<?php $list = [1, 2, 3, 4, 5, 6]; ?>

@foreach($list as $item)
    <div>{{$item}}</div>
@endforeach
</body>
</html>
