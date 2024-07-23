<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h3>Survey</h3>
    @foreach ($cabangs as $item)
       {{ $item->kd_cabang }} <br>
        {{ $item->nama_cabang }}<p></p>
    @endforeach
</body>
</html>