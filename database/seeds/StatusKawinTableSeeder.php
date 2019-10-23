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
            ['status_kawin'=>'Kawin'],
            ['status_kawin'=>'Belum Kawin'],
            ['status_kawin'=>'Duda'],
            ['status_kawin'=>'Janda']
        ];
        \App\Models\StatusKawin::query()->truncate();
        \App\Models\StatusKawin::insert($data_agama);
    }
}
