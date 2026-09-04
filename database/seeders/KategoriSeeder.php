<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            ['nama' => 'Makanan Berat', 'deskripsi' => 'Ini adalah makanan yang akan memberatkan perutmu'],
            ['nama' => 'Makanan Ringan', 'deskripsi' => 'Ini adalah makanan yang akan meringankan hidupmu'],
            ['nama' => 'Jus', 'deskripsi' => 'Ini adalah minuman yang berasal dari olahan buah'],
            ['nama' => 'Soda', 'deskripsi' => 'Ini adalah minuman yang membuatmu bersendawa'],
            ['nama' => 'Susu', 'deskripsi' => 'Ini adalah minuman yang menyehatkan']
        ];
        DB::table('kategoris')->insert($dataku);
    }
}
