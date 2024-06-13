<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liches</title>
</head>
<body>
<div>
    @foreach($liches as $lich)
        <div>{{$lich->stringi}}</div>
        <div>{{$lich->nuni}}</div>
        <div>{{$lich->valerki}}</div>
    @endforeach
</div>
</body>
</html>
