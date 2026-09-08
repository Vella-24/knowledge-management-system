<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            [
                'nama_pegawai' => 'Andi Pratama',
                'jabatan' => 'Admin',
                'no_hp' => '081234567890',
                'email' => 'andi@gmail.com'
            ],
            [
                'nama_pegawai' => 'Budi Santoso',
                'jabatan' => 'Kasir',
                'no_hp' => '081234567891',
                'email' => 'budi@gmail.com'
            ],
            [
                'nama_pegawai' => 'Citra Lestari',
                'jabatan' => 'Kasir',
                'no_hp' => '081234567892',
                'email' => 'citra@gmail.com'
            ],
            [
                'nama_pegawai' => 'Dimas Wijaya',
                'jabatan' => 'Supervisor',
                'no_hp' => '081234567893',
                'email' => 'dimas@gmail.com'
            ],
            [
                'nama_pegawai' => 'Eka Putri',
                'jabatan' => 'Admin',
                'no_hp' => '081234567894',
                'email' => 'eka@gmail.com'
            ]
        ];

        DB::table('pegawais')->insert($dataku);
    }
}
