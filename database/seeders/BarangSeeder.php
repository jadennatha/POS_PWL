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
        $data = [
            ['kategori_id' => 1, 'barang_kode' => 'BR001', 'barang_nama' => 'TV', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['kategori_id' => 1, 'barang_kode' => 'BR002', 'barang_nama' => 'Laptop', 'harga_beli' => 7000000, 'harga_jual' => 8000000],
            ['kategori_id' => 2, 'barang_kode' => 'BR003', 'barang_nama' => 'Kaos', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['kategori_id' => 2, 'barang_kode' => 'BR004', 'barang_nama' => 'Jaket', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['kategori_id' => 3, 'barang_kode' => 'BR005', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 15000, 'harga_jual' => 25000],
            ['kategori_id' => 3, 'barang_kode' => 'BR006', 'barang_nama' => 'Mie Ayam', 'harga_beli' => 12000, 'harga_jual' => 20000],
            ['kategori_id' => 4, 'barang_kode' => 'BR007', 'barang_nama' => 'Teh Botol', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['kategori_id' => 4, 'barang_kode' => 'BR008', 'barang_nama' => 'Kopi', 'harga_beli' => 5000, 'harga_jual' => 10000],
            ['kategori_id' => 5, 'barang_kode' => 'BR009', 'barang_nama' => 'Pulpen', 'harga_beli' => 2000, 'harga_jual' => 5000],
            ['kategori_id' => 5, 'barang_kode' => 'BR010', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 5000, 'harga_jual' => 10000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
