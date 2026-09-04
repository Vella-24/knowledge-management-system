<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BarangController extends Controller
{
    public function tampil()
    {
        $barangs = DB::table('barangs')->get();
        return view('barang.daftar', 
        ['barangs' => $barangs]); 
    }

    public function create()
    {
        return view('barang.create');
    }
}
