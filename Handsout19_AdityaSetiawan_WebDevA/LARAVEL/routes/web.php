<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/tentang', function () {
    return 'Aditya Setiawan Web Development Kelas A';
});

//Basic Parameters
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/{comment}', function ($post, $comment) {
    return 'Pos ke-'.$post." Komen ke-: " .$comment;
});

//Optional parameters
Route::get('/user/{name}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/kodebarang/{jenis?}/{merek?}', function ($jk='k01', $mrk='samsung') {
    return "kode barang $jk dan nama barang $mrk";
});

//Route Name
Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('tampil', function () {
    return view('tampil');
})->name('tampil');

//Route Redirect
Route::get('/pesandisini', function () {
    return '<h1>pesan disini</h1>';
});
Route::redirect('/contact-us','/pesandisini');

//Route Grup
Route::prefix('/admin')->group(function () {
    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen</h1>";
    });
    Route::get('/tendik', function () {
        echo "<h1>Daftar Tendik</h1>";
    });
    Route::get('/jurusan', function () {
        echo "<h1>Daftar Jurusan</h1>";
    });
});

// Route untuk memberi pesan bila diluar jangkauan
Route::fallback(function(){
    return "maaf, ini alamat palsu";
});

//Route untuk controller
use App\Http\Controllers\PengajarController;
Route::get('/daftar-dosen',[PengajarController::class,'daftarPengajar']);
Route::get('/tabel-pengajar',[PengajarController::class,'tabelPengajar']);
Route::get('/blog-pengajar',[PengajarController::class,'blogPengajar']);

//Route akses view dari controller
use App\Http\Controllers\PageControllerSatu;
Route::get('/pasar-buah',[PageControllerSatu::class,'satu']);

use App\Http\Controllers\CRUDController;
Route::resource('crud',CRUDController::class);

use App\Http\Controllers\CRUDPhoto;
Route::resource('photos',CRUDPhoto::class)->only(['index','show']);
Route::resource('photos',CRUDPhoto::class)->except(['create','store','update','destroy']);

Route::get('/selamat',function(){
    return view('hello',['name'=>'Aditya']);
});

use App\Http\Controllers\WelcomeController;
Route::get('/greeting',[
    WelcomeController::class,'greeting'
]);

use App\Http\Controllers\halloController;
Route::get('/heloow',[
    halloController::class,'greeting'
]);