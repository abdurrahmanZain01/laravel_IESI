@extends('main')

<!-- title -->
@section('title', 'jurusan')

<!-- breadscrumbs-->
@section('breadscrumb')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Data Jurusan</h1>
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
                        Edit Data jurusan
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
                        <form action="{{url('jurusan/'.$user->id)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <table>jurusan</table>
                                <input type="text" name="jurusan" class="form-control" value="{{$user->jurusan}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <table>prodi</table>
                                <input type="text" name="prodi" class="form-control" value="{{$user->prodi}}" autofocus required>
                            </div>
                            {{-- <div class="form-group">
                                <table>Alamat</table>
                                <input type="text" name="alamat" class="form-control" value="{{$user->alamat}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <table>Email</table>
                                <input type="text" name="email" class="form-control" value="{{$user->email}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <table>Ipk</table>
                                <input type="text" name="ipk" class="form-control" value="{{$user->ipk}}" autofocus required>
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

