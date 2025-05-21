<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

//kalo di java use itu mirip import
//import java.io.*;


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

//system.out.println();
//nah kalo di oop nya php itu ::, jadinya ganti . di java itu. jadi misalkan di java bakalan ditulis Route.get();
//ini kalo di php jadinya:
Route::get('/', function () {
    return view('welcome');
});
//kode diatas ada contohnya di dokumentasi laravel

Route::get('/selamat', function () {
    return view('welcome');
});

//ini simple route
Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

//dia ga muncul underscrore awalnya, karena ga punya filenya. ceknya ke bagian explorer - resources - views
//nah kalo dah bikin dia bakalan muncul underscore, terus cek aja, jangan lupa pake 127.0.01:8000/blog
Route::get('blog', function () {
	return view('blog');
});

Route::get('hello',[Coba::class, 'helloword']);
//Route::get('hello','App\Http\Controllers\Coba@helloword)

//pertemuan 1
Route::get('pertama', function() {
    return view('pertama');
});

//pertemuan 3
Route::get('bootstrap1', function() {
    return view('bootstrap1');
});

Route::get('bootstrap2', function() {
    return view('bootstrap2');
});

//pertemuan 4 Latihan Layout Kode Soal 8
Route::get('halamanlogin', function() {
    return view('halamanlogin');
});

//Linktree
Route::get('linktree', function() {
    return view('linktree');
});

//Pertemuan 7
Route::get('js1', function() {
    return view('js1');
});

Route::get('js2', function() {
    return view('js2');
});

//Danantara
Route::get('indexdanantara', function() {
    return view('indexdanantara');
});

//ETS
Route::get('index', function() {
    return view('index');
});

//Frontend kumpulan file pertemuan 1 hingga ets
Route::get('frontend', function() {
    return view('frontend');
});

Route::get('dosen',[Coba::class, 'index']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']); //ini adalah bagian halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //redirect atau action form

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

