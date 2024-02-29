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
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_penjualan')->insert([
                'user_id' => 1 ,
                'pembeli' => 'Pembeli ' . $i,
                'penjualan_kode' => 'P00'. $i,
                'penjualan_tanggal' => now(),
            ]);
        }
    }
}
