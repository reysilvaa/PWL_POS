<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
       $kategoriIdElektronik = DB::table('m_kategori')->where('kategori_kode', 'ELE')->value('kategori_id');
       $kategoriIdPakaian = DB::table('m_kategori')->where('kategori_kode', 'PAK')->value('kategori_id');
       $kategoriIdFurniture = DB::table('m_kategori')->where('kategori_kode', 'FUR')->value('kategori_id');
       $kategoriIdOtomotif = DB::table('m_kategori')->where('kategori_kode', 'OTO')->value('kategori_id');
       $kategoriIdOlahraga = DB::table('m_kategori')->where('kategori_kode', 'OLG')->value('kategori_id');

       $data = [
           ['kategori_id' => $kategoriIdElektronik, 'barang_kode' => 'BRG01', 'barang_nama' => 'Laptop', 'harga_beli' => 8000000, 'harga_jual' => 10000000],
           ['kategori_id' => $kategoriIdPakaian, 'barang_kode' => 'BRG02', 'barang_nama' => 'Kemeja', 'harga_beli' => 200000, 'harga_jual' => 250000],
           ['kategori_id' => $kategoriIdFurniture, 'barang_kode' => 'BRG03', 'barang_nama' => 'Meja', 'harga_beli' => 500000, 'harga_jual' => 700000],
           ['kategori_id' => $kategoriIdOtomotif, 'barang_kode' => 'BRG04', 'barang_nama' => 'Mobil', 'harga_beli' => 50000000, 'harga_jual' => 70000000],
           ['kategori_id' => $kategoriIdOlahraga, 'barang_kode' => 'BRG05', 'barang_nama' => 'Bola Futsal', 'harga_beli' => 100000, 'harga_jual' => 150000],
           ['kategori_id' => $kategoriIdElektronik, 'barang_kode' => 'BRG06', 'barang_nama' => 'Smartwatch', 'harga_beli' => 1500000, 'harga_jual' => 2000000],
           ['kategori_id' => $kategoriIdPakaian, 'barang_kode' => 'BRG07', 'barang_nama' => 'Jaket', 'harga_beli' => 300000, 'harga_jual' => 400000],
           ['kategori_id' => $kategoriIdFurniture, 'barang_kode' => 'BRG08', 'barang_nama' => 'Kursi', 'harga_beli' => 400000, 'harga_jual' => 550000],
           ['kategori_id' => $kategoriIdOtomotif, 'barang_kode' => 'BRG09', 'barang_nama' => 'Motor', 'harga_beli' => 15000000, 'harga_jual' => 18000000],
           ['kategori_id' => $kategoriIdOlahraga, 'barang_kode' => 'BRG10', 'barang_nama' => 'Sepatu Lari', 'harga_beli' => 250000, 'harga_jual' => 350000],
       ];

       DB::table('m_barang')->insert($data);
    }
    
}
