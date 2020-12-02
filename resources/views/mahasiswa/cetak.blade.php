<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        table.static{
            position: relative;
            border:1px solid #543535;
        }
    </style>
    <title>CETAK DATA MAHASISWA</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Data Mahasiswa</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Ipk</th>
            </tr>
            @foreach ($mahasiswa as $item)
            <tr>
                <td>{{$loop ->iteration}}</td>

                <td>{{$item ->Nama}}</td>
                <td>{{$item ->nim}}</td>
                <td>{{$item ->mhs['jurusan']}}</td>
                <td>{{$item ->alamat}}</td>
                <td>{{$item ->email}}</td>
                <td>{{$item ->ipk}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
