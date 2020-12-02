@extends('main')

<!-- title -->
@section('title', 'jurusan')

<!-- breadscrumbs-->
@section('breadscrumb')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data</h1>
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

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>
                        Tambah Jurusan
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{url('jurusan')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> back
                    </a>
                </div>
            </div>

            <div class="card-body ">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        {{-- pada laravel untuk memproses data memerlukan token dengan menggunakan @csrf --}}
                        <form action="{{url('jurusan')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <table>Jurusan</table>
                                <input type="text" name="jurusan" class="form-control" autofocus required >
                            </div>
                            <div class="form-group">
                                <table>prodi</table>
                                <input type="text" name="prodi" class="form-control"  autofocus >
                            </div>

                            {{-- <div class="form-group">
                                <table>Alamat</table>
                                <input type="text" name="alamat" class="form-control" @error('alamat') is-invalid @enderror autofocus >
                                @error('alamat')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <table>Email</table>
                                <input type="text" name="email" class="form-control" @error('email') is-invalid @enderror autofocus >
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <table>Ipk</table>
                                <input type="text" name="ipk" class="form-control" @error('ipk') is-invalid @enderror autofocus >
                                @error('ipk')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div> --}}

                            <button type="submit" class="btn btn-success">save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

