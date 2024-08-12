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
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'John Doe', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'Jane Smith', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 3, 'user_id' => 2, 'pembeli' => 'Jack White', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 4, 'user_id' => 2, 'pembeli' => 'Jill Green', 'penjualan_kode' => 'TRX004', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'James Brown', 'penjualan_kode' => 'TRX005', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Jenny Black', 'penjualan_kode' => 'TRX006', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Joe Grey', 'penjualan_kode' => 'TRX007', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 8, 'user_id' => 1, 'pembeli' => 'Joan Silver', 'penjualan_kode' => 'TRX008', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 9, 'user_id' => 2, 'pembeli' => 'Jeff Gold', 'penjualan_kode' => 'TRX009', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 10, 'user_id' => 2, 'pembeli' => 'Judy Blue', 'penjualan_kode' => 'TRX010', 'penjualan_tanggal' => now()],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
