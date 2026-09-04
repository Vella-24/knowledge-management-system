<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KategoriController extends Controller
{
    public function tampil()
    {
        $kategoris = DB::table('kategoris')->get();
        return view('kategori.daftar', 
        ['kategoris' => $kategoris]); 
    }
}
