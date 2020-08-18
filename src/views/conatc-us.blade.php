<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello contact us {{$name}}</h1>
<form action="{{route('contact')}}" method="post">
name: <input type="text" name="name">
mobile: <input type="text" name="mobile">
email: <input type="text" name="email">
<input type="submit" value="submit">
</form>
</body>
</html>