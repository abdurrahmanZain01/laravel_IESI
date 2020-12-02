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
                    <li><a href="" >Data</a></li>
                    <li class="active">Detail</i></li>
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
                        Detail Mahasiswa
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{url('mahasiswa')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-plus"></i> back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="col-md-8 offset-md-2">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width:30%" >Nama</th>
                                <td>{{$mahasiswa->Nama}}</td>
                            </tr>
                            <tr>
                                <th>Nim</th>
                                <td>{{$mahasiswa->nim}}</td>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <td>{{$mahasiswa->mhs['jurusan']}}</td>
                            </tr>
                            <tr>
                                <th>Ipk</th>
                                <td>{{$mahasiswa->ipk}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

