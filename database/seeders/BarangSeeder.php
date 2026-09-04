<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            ['nama' => 'Nasi Goreng', 'harga' => 20000, 'stok' => 10, 'kategori_id' => 1],
            ['nama' => 'Kentang Goreng', 'harga' => 15000, 'stok' => 10, 'kategori_id' => 2],
            ['nama' => 'Jus Stroberi', 'harga' => 10000, 'stok' => 10, 'kategori_id' => 3],
            ['nama' => 'Fanta', 'harga' => 6000, 'stok' => 10, 'kategori_id' => 4],
            ['nama' => 'UltraMilk', 'harga' => 12000, 'stok' => 10, 'kategori_id' => 5],
            ['nama' => 'Fresh Milk', 'harga' => 12000, 'stok' => 10, 'kategori_id' => 5]
        ];
        DB::table('barangs')->insert($dataku);
    }
}
