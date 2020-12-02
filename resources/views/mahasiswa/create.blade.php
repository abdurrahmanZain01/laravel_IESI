@extends('main')

<!-- title -->
@section('title', 'mahasiswa')

<!-- breadscrumbs-->
@section('breadscrumb')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data Mahasiswa</h1>
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
                        Tambah mahasiswa
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{url('mahasiswa')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> back
                    </a>
                </div>
            </div>

            <div class="card-body ">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        {{-- pada laravel untuk memproses data memerlukan token dengan menggunakan @csrf --}}
                        <form action="{{url('mahasiswa')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="Nama" class="form-control" @error('Nama') is-invalid @enderror value="{{old('Nama')}}" autofocus >
                                @error('Nama')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Nim</label>
                                <input type="text" name="nim" class="form-control" @error('nim') is-invalid @enderror >
                                @error('nim')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Jurusan</label>
                                <select type="number" name="jurusan_id" class="form-control" @error('jurusan_id') is-invalid @enderror >

                                <option value="">--pilih--</option>
                                @foreach ($jurusan as $item)
                                <option value="{{$item->id}}">{{$item->jurusan}}</option>
                                @endforeach
                                </select>

                                @error('jurusan_id')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror

                                {{-- @error('jurusan')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror --}}
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" @error('alamat') is-invalid @enderror  >
                                @error('alamat')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" @error('email') is-invalid @enderror  >
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <table>Ipk</table>
                                <input type="text" name="ipk" class="form-control" @error('ipk') is-invalid @enderror  >
                                @error('ipk')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success">save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

