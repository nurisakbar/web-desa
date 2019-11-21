<?php

use Illuminate\Database\Seeder;

class StatusKawinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_agama = [
            ['status_kawin'=>'Belum Kawin'],
            ['status_kawin'=>'Kawin'],
            ['status_kawin'=>'CERAI HIDUP'],
            ['status_kawin'=>'CERAI MATI']
        ];
        \App\Models\StatusKawin::query()->truncate();
        \App\Models\StatusKawin::insert($data_agama);
    }
}
