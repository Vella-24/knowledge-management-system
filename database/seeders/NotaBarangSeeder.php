<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
        [
            'notas_id' => 1,
            'barangs_id' => 1,
            'jumlah' => 2,
            'harga' => DB::table('barangs')->where('id', 1)->value('harga'),
            'subtotal' => DB::table('barangs')->where('id', 1)->value('harga') * 2
        ],
        [
            'notas_id' => 1,
            'barangs_id' => 3,
            'jumlah' => 1,
            'harga' => DB::table('barangs')->where('id', 3)->value('harga'),
            'subtotal' => DB::table('barangs')->where('id', 3)->value('harga') * 1
        ],
        ];
        DB::table('nota_barangs')->insert($dataku);
    }
}
