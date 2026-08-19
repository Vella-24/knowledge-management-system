<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtamaController;

Route::get('/', [UtamaController::class, 'boleh']);

// Route::get('/', function () {
//     return view('utama');
// });

Route::get('/horeee-saya-bisa', function(){
    return 'Ini adalah halaman saya...hore';
});

Route::get('/bisa-aja-bikin-lagi', function(){
    return 'ini loh tak bikin lagi';
});

