<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        Hello <strong>{{ $receiver }}</strong>,

        <h3>{{$name}} Mengirimkan Pesan</h3>
        <h5>Email : {{$from}}</h5>
        <p>Message : {{$body}}</p>
</body>
</html>