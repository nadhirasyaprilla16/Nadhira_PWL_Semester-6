<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 3,
                'pembeli' => 'Nadhira',
                'penjualan_kode' => 'P001',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Wijaya',
                'penjualan_kode' => 'P002',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Shabrina',
                'penjualan_kode' => 'P003',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Jaira',
                'penjualan_kode' => 'P004',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Galanala',
                'penjualan_kode' => 'P005',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Gale',
                'penjualan_kode' => 'P006',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Dinda',
                'penjualan_kode' => 'P007',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Niken',
                'penjualan_kode' => 'P008',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Rama',
                'penjualan_kode' => 'P009',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Amsal',
                'penjualan_kode' => 'P010',
                'penjualan_tanggal' => now()
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
