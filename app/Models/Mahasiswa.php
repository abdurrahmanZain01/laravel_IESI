<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    //hiding data
    protected $hidden = ['Nama'];

    public function mhs()
    {

        return $this->belongsTo('App\Models\jurusan','jurusan_id');
    }
}
