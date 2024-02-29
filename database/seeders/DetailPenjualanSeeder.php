<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = 1;
        for ($i = 1; $i <= 10; $i++) {
            // Simulasi 3 barang untuk setiap transaksi
            for ($j = 1; $j <= 3; $j++) {
                $penjualanId = DB::table('t_penjualan')->value('penjualan_id');;
                $barangId = rand(1, 10); // Ganti dengan id barang yang sesuai dengan aplikasi Anda
                $hargaBarang = DB::table('m_barang')->where('barang_id', $barangId)->value('harga_jual');

                DB::table('t_penjualan_detail')->insert([
                    'detail_id' => $id++,
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    'harga' => $hargaBarang,
                    'jumlah' => rand(1, 5),
                ]);
            }
        }
    }
}
