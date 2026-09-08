<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Kategori;

class BarangController extends Controller
{
    public function tampil()
    {
        $barangs = DB::table('barangs')
            ->join('kategoris', 'barangs.kategori_id', '=', 'kategoris.id')
            ->select(
                'barangs.*',
                'kategoris.nama as nama_kategori'
            )
            ->get();

        return view('barang.daftar', [
            'barangs' => $barangs
        ]);
    }

    public function create()
    {
        $kategoris = Kategori::all();

        return view('barang.create', [
            'kategoris' => $kategoris
        ]);
    }

    public function simpan(Request $request)
    {
        DB::table('barangs')->insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori_id
        ]);

        return redirect('/daftar-barang')
            ->with('success', 'Barang berhasil ditambahkan');
    }

    public function ubah($barang)
    {
        $barang = DB::table('barangs')
            ->where('id', $barang)
            ->first();

        $kategoris = DB::table('kategoris')->get();

        return view('barang.ubah', [
            'barang' => $barang,
            'kategoris' => $kategoris
        ]);
    }

    public function update(Request $request)
    {
        DB::table('barangs')
            ->where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'kategori_id' => $request->kategori_id
            ]);

        return redirect('/daftar-barang');
    }

    public function hapus($barang)
    {
        DB::table('barangs')
            ->where('id', $barang)
            ->delete();

        return redirect('/daftar-barang')
            ->with('success', 'Barang berhasil dihapus');
    }

}