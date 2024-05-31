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
        $data = 
        [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'b1',
                'barang_nama' => 'Baju',
                'harga_beli' => 50000,
                'harga_jual' => 60000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'b2',
                'barang_nama' => 'Celana',
                'harga_beli' => 100000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'b3',
                'barang_nama' => 'Coklat',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'b4',
                'barang_nama' => 'Bolu Mini',
                'harga_beli' => 7000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'b5',
                'barang_nama' => 'Air Putih',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'b6',
                'barang_nama' => 'Sprite',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'b7',
                'barang_nama' => 'Stop Kontak',
                'harga_beli' => 15000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'b8',
                'barang_nama' => 'Kabel Data',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'b9',
                'barang_nama' => 'Beras',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'b10',
                'barang_nama' => 'Telor',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
