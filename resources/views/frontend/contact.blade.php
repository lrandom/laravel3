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
<form method="post" action="{{route('contact.get')}}">
    @csrf
    <div><input type="text" class="form-control" name="full_name"
                placeholder="Full Name *"></div>
    <div style="color:red">
        {{$errors->first('full_name')}}
    </div>

    <div><input type="text" class="form-control" name="phone"
                placeholder="Phone *"></div>
    <div style="color:red">
        {{$errors->first('phone')}}
    </div>

    <div><input type="text" class="form-control" name="email"
                placeholder="Email *"></div>
    <div style="color:red">
        @error('email')
        {{$message}}
        @enderror
    </div>

    <div><textarea placeholder="Content" name="content"></textarea></div>

    <button>Submit</button>
</form>
</body>
</html>
