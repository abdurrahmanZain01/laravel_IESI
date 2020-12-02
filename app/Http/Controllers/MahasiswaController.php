<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        // return $mahasiswa;
        return view('mahasiswa/index', compact('mahasiswa'));
    }

    public function cetak()
    {
        $mahasiswa = mahasiswa::get();
        // return $mahasiswa;
        return view('mahasiswa/cetak', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = jurusan::all();
        return view('mahasiswa/create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required|min:1',
            'nim' => 'required',
            'jurusan_id' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'ipk' => 'required',
        ]);


        $mahasiswa = new mahasiswa;

        $mahasiswa->Nama = $request->Nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->jurusan_id = $request->jurusan_id;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->email = $request->email;
        $mahasiswa->ipk = $request->ipk;
        $mahasiswa->save();

        return redirect('mahasiswa')->with('status', 'Data berhasil ditambahkan :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        $mahasiswa->makeHidden('nim');
        // return $mahasiswa;

        // $mahasiswa = mahasiswa::where('id',$id)->get();
        // $mahasiswa = $mahasiswa[0];

        return view('mahasiswa/detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        $jurusan = jurusan::all();
        return view('mahasiswa/edit', compact('mahasiswa','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $request->validate([
            'Nama' => 'required|min:1',
            'nim' => 'required',
            'jurusan_id' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'ipk' => 'required',
        ]);

        $mahasiswa->Nama = $request->Nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->jurusan_id = $request->jurusan_id;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->email = $request->email;
        $mahasiswa->ipk = $request->ipk;
        $mahasiswa->save();

        return redirect('mahasiswa')->with('status', 'Data berhasil diupdate :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('mahasiswa')->with('status', 'Data Id '.$mahasiswa->id.' '.$mahasiswa->Nama.' berhasil dihapus');
    }
}
