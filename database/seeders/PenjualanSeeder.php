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
        $data =[
            ['user_id' => 3, 'pembeli' => 'Adit', 'penjualan_kode' => 'PJ00', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Jaden', 'penjualan_kode' => 'PJ01', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Rosyid', 'penjualan_kode' => 'PJ02', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Naufal', 'penjualan_kode' => 'PJ03', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Randa', 'penjualan_kode' => 'PJ04', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Dio', 'penjualan_kode' => 'PJ05', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Septa', 'penjualan_kode' => 'PJ06', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Arif', 'penjualan_kode' => 'PJ07', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Gunawan', 'penjualan_kode' => 'PJ08', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Syifa', 'penjualan_kode' => 'PJ09', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Satrio', 'penjualan_kode' => 'PJ10', 'penjualan_tanggal' => now()],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
