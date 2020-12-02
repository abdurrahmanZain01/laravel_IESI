@extends('main')

<!-- title -->
@section('title', 'mahasiswa')

<!-- breadscrumbs-->
@section('breadscrumb')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Mahasiswa</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="" >Mahasiswa</a></li>
                    <li class="active">Data</i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

<!--content-->
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>
                        Data Mahasiswa
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{url('cetak')}}" target="_blank" class="btn btn-success btn-sm">
                        <i class="fa fa-print"></i> cetak
                    </a>
                    <a href="{{url('mahasiswa/create')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-border">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Ipk</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $item)
                            <tr>
                                {{-- cara manual --}}
                                {{-- <td>{{$item ->id}}</td> --}}

                                {{-- menggunakan loop laravel --}}
                                <td>{{$loop ->iteration}}</td>

                                <td>{{$item ->Nama}}</td>
                                <td>{{$item ->nim}}</td>
                                <td>{{$item ->mhs['jurusan']}}</td>
                                <td>{{$item ->alamat}}</td>
                                <td>{{$item ->email}}</td>
                                <td>{{$item ->ipk}}</td>
                                <td class="text-center">
                                    <a href="{{ url('mahasiswa/'.$item->id)}}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('mahasiswa/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="{{url('mahasiswa/'.$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('hapus data ?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

