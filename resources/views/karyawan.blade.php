<!doctype html>
<html lang="en">
<head>
    <title>Halaman Karyawan</title>
</head>
<body>

<h1>{{$judul}}</h1>
@foreach($data as $d)
    <p>{{$d}}</p> <br>
@endforeach
</body>
</html>
