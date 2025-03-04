<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 10), // Acak barang dari 1 sampai 10
                    'harga' => rand(60000, 100000),
                    'jumlah' => rand(1, 5),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
