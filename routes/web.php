<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtamaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
//ini adalah perubahan dari daniel
// ini adalah homepage yang mengarah pada controller
Route::get('/', [UtamaController::class, 'boleh']);

Route::get('/daftar-kategori', [KategoriController::class, 'tampil']); 
Route::get('/tambah-kategori', [KategoriController::class, 'create']); 
Route::post('/simpan-kategori', [KategoriController::class, 'simpan']); 
Route::get('/daftar-barang', [BarangController::class, 'tampil']); 
Route::delete('/hapus-kategori/{kategori}', [KategoriController::class, 'hapus'])->name('kategori.hapus'); 
Route::get('/ubah-kategori/{kategori}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
Route::put('/update-kategori',[KategoriController::class, 'update']);
// Route::get('/', function () {
//     return view('utama');
// });

Route::get('/horeee-saya-bisa', function(){
    return 'Ini adalah halaman saya...hore';
});

//ini adalah komentar dari daniel
Route::get('/bisa-aja-bikin-lagi', function(){
    return 'ini loh tak bikin lagi';
});

//haloo
//tes

//coba
//lagi