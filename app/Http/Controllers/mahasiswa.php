<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Controller
{
    public function data(){

        // mahasiswas adalah nama tabel database
        // $mahasiswa = DB::table('mahasiswas')->get();

        // return $mahasiswa;
        // tampilan berupa coding
        // dd($mahasiswa);

        // cara-cara parsing/melempar parameter
        // menggunakan array
        // return view('mahasiswa.data', ['mahasiswa'=>$mahasiswa]);
        // menggunakan compact syaratnya paraeternya harus sama
        // return view('mahasiswa.data', compact('mahasiswa'));


              // mahasiswas adalah nama tabel database
              $jurusan = DB::table('jurusans')->get();

              // return $mahasiswa;
              // tampilan berupa coding
              // dd($mahasiswa);

              // cara-cara parsing/melempar parameter
              // menggunakan array
              // return view('mahasiswa.data', ['mahasiswa'=>$mahasiswa]);
              // menggunakan compact syaratnya paraeternya harus sama
              return view('jurusan.data', compact('jurusan'));
    }

    public function add(){
        return view('jurusan/add');
    }

    public function addProses(Request $request)
    {

        $request->validate([
            'jurusan' => 'required|min:1',
            'prodi' => 'required',
        ]);

        DB::table('jurusans')->insert([
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            ]);
            return redirect('jurusan')->with('status', 'Data berhasil ditambahkan :)');
    }

    public function edit($id)
    {
        $user = DB::table('jurusans')->where('id', $id)->first();
        return view('jurusan/edit', compact('user'));
    }

    public function editProses(Request $request, $id)
    {
        $user = DB::table('jurusans')->where('id', $id)
        ->update([
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
        ]);
        return redirect('jurusan')->with('status', 'Data berhasil diupdate :)');
    }


    public function deleteProses($id)
    {
        DB::table('jurusans')->where('id', $id)->delete();
        return redirect('jurusan')->with('status', 'Data berhasil dihapus :)');
    }
}
