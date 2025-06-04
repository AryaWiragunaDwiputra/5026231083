<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route.fer("publish url",view)
//get itu ada dua, yang pertama itu publish url. lalu yang kedua itu viewnya

Route::get('/selamat', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
}); //simple HTML

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello',[Coba::class, 'helloworld']);

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('learnjs1', function () {
    return view('learnjs1');
});

Route::get('learnjs2', function () {
    return view('learnjs2');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('new', function () {
    return view('new');
});


Route::get('dosen',[Coba::class, 'index']);

// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian formulir

Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD dataabase pegawai belajar_laravel
Route::get('/pegawai', [PegawaiDBCOntroller::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBCOntroller::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBCOntroller::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBCOntroller::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBCOntroller::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBCOntroller::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBCOntroller::class, 'cari']);
