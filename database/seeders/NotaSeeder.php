<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            [
                'tanggal' => '2026-09-01 09:30:00',
                'pegawais_id' => 1,
                'pelanggans_id' => 1,
                'total' => 18500
            ],
            [
                'tanggal' => '2026-09-02 10:15:00',
                'pegawais_id' => 2,
                'pelanggans_id' => 2,
                'total' => 150000
            ],
            [
                'tanggal' => '2026-09-03 11:00:00',
                'pegawais_id' => 3,
                'pelanggans_id' => 3,
                'total' => 95000
            ],
            [
                'tanggal' => '2026-09-04 13:20:00',
                'pegawais_id' => 2,
                'pelanggans_id' => 4,
                'total' => 90000
            ],
            [
                'tanggal' => '2026-09-05 14:45:00',
                'pegawais_id' => 5,
                'pelanggans_id' => 5,
                'total' => 215000
            ]
        ];

        DB::table('notas')->insert($dataku);
    }
}
