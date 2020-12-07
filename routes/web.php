<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    // return view('home');
    return dd(Auth::user());
});


Route::get('jurusan', function() {
    return view('jurusan/data');
});


Route::get('register', 'App\Http\Controllers\AuthController@register');
Route::get('login', 'App\Http\Controllers\AuthController@login');

Route::post('login', 'App\Http\Controllers\AuthController@postLogin')->name('login');
Route::post('register', 'App\Http\Controllers\AuthController@postRegister')->name('register');

Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');


// menampilkan halaman data jurusan
Route::get('jurusan', 'App\Http\Controllers\mahasiswa@data');
//menambahkan data mahasiswa ke database
Route::post('jurusan', 'App\Http\Controllers\mahasiswa@addProses');
// menampilkan halaman edit mahasiswa
Route::get('jurusan/edit/{id}','App\Http\Controllers\mahasiswa@edit');
// menampilkan halaman tambah data
Route::get('jurusan/add','App\Http\Controllers\mahasiswa@add');
// mengupdate database mahasiswa
Route::patch('jurusan/{id}','App\Http\Controllers\mahasiswa@editProses');
// mendelete data mahasiswa
Route::delete('jurusan/{id}', 'App\Http\Controllers\mahasiswa@deleteProses');


// eloquent ORM
Route::resource('dosen', 'App\Http\Controllers\DosenController');
Route::resource('mahasiswa', 'App\Http\Controllers\MahasiswaController');
Route::get('cetak', 'App\Http\Controllers\MahasiswaController@cetak')->name('cetak');
Route::get('filter', 'App\Http\Controllers\MahasiswaController@filter')->name('filter');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
