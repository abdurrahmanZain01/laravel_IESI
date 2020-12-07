@extends('main')

<!-- title -->
@section('title', 'mahasiswa')

<!-- breadscrumbs-->
@section('breadscrumb')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                {{-- <div class="pull-right">
                    <a href="{{url('cetak')}}" target="_blank" class="btn btn-success btn-sm">
                        <i class="fa fa-print"></i> cetak
                    </a>
                    <a href="{{url('mahasiswa/create')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> add
                    </a>
                    <a href="{{url('mahasiswa/create')}}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-filter">
                        <i class="fa fa-filter"></i> filter
                    </a>

                </div> --}}
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

{{-- <div class="modal fade" id="modal-filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Filter data mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
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
            </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Filter</button>
        </div>
      </div>
    </div>
  </div> --}}
{{--
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
@endsection

{{-- @section('scripts')

<script type="text/javascript">
    $(document).ready(function()){

        $('.btn-filter').click(function(e){
            e.preventDefault();
            alert('tes button');
        })
    }
</script>

@endsection --}}
