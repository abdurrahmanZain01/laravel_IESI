@extends('main')

<!-- title -->
@section('title', 'jurusan')

<!-- breadscrumbs-->
@section('breadscrumb')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Jurusan</h1>
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
                        Data Jurusan
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{url('jurusan/add')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-border">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        {{-- <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Ipk</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $item)
                            <tr>
                                {{-- cara manual --}}
                                {{-- <td>{{$item ->id}}</td> --}}

                                {{-- menggunakan loop laravel --}}
                                <td>{{$loop ->iteration}}</td>

                                <td>{{$item ->jurusan}}</td>
                                <td>{{$item ->prodi}}</td>
                                {{-- <td>{{$item ->jurusan_id}}</td>
                                <td>{{$item ->alamat}}</td>
                                <td>{{$item ->email}}</td>
                                <td>{{$item ->ipk}}</td> --}}
                                <td class="text-center">
                                    <a href="{{ url('jurusan/edit/'.$item->id)}}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="{{url('jurusan/'.$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('hapus data ?')">
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

