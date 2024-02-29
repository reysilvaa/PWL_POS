<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'ELE', 'kategori_nama' => 'Elektronik'],
            ['kategori_id' => 2, 'kategori_kode' => 'PAK', 'kategori_nama' => 'Pakaian'],
            ['kategori_id' => 3, 'kategori_kode' => 'FUR', 'kategori_nama' => 'Furniture'],
            ['kategori_id' => 4, 'kategori_kode' => 'OTO', 'kategori_nama' => 'Otomotif'],
            ['kategori_id' => 5, 'kategori_kode' => 'OLG', 'kategori_nama' => 'Olahraga'],
        ];
    
        DB::table('m_kategori')->insert($data);
    }
    
}
