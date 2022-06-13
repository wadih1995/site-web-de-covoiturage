<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($d as $i)
        <div class="card col-sm-6 col-lg-3 border-right-0 " style="border: 5px solid black ">
            <div class="card-body">
            <p class="card-text" style="color:red">{{$i->name}}</div>
            <div class="card-footer">{{$i->body}}</div>
        </div>
        @endforeach
    </ul>
</body>
</html>