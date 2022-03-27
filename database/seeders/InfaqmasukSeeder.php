<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InfaqmasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // insert data ke table infaq masuk
        DB::table('infaq_masuk')->insert([
            'kode_infaq' => 101,
            'keterangan' => 'infaq',
            'tanggal' => '1 Desember 2021',
            'jumlah' => '1000', 
        ]);
    }
}
