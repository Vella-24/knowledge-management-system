<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            [
                'nama_pelanggan' => 'Rizky Ramadhan',
                'alamat' => 'Surabaya',
                'no_hp' => '082111111111',
                'email' => 'rizky@gmail.com'
            ],
            [
                'nama_pelanggan' => 'Sinta Maharani',
                'alamat' => 'Sidoarjo',
                'no_hp' => '082222222222',
                'email' => 'sinta@gmail.com'
            ],
            [
                'nama_pelanggan' => 'Fajar Nugroho',
                'alamat' => 'Surabaya',
                'no_hp' => '082333333333',
                'email' => 'fajar@gmail.com'
            ],
            [
                'nama_pelanggan' => 'Nadia Permata',
                'alamat' => 'Gresik',
                'no_hp' => '082444444444',
                'email' => 'nadia@gmail.com'
            ],
            [
                'nama_pelanggan' => 'Kevin Wijaya',
                'alamat' => 'Surabaya',
                'no_hp' => '082555555555',
                'email' => 'kevin@gmail.com'
            ]
        ];

        DB::table('pelanggans')->insert($dataku);
    }
}
