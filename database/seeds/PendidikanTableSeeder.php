<?php

use Illuminate\Database\Seeder;

class PendidikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_pendidikan = [
            ['pendidikan'=>'TIDAK / BELUM SEKOLAH'],
            ['pendidikan'=>'BELUM TAMAT SD/SEDERAJAT'],
            ['pendidikan'=>'TAMAT SD / SEDERAJAT'],
            ['pendidikan'=>'SLTP/SEDERAJAT'],
            ['pendidikan'=>'SLTA / SEDERAJAT'],
            ['pendidikan'=>'DIPLOMA I / II'],
            ['pendidikan'=>'AKADEMI/ DIPLOMA III/S. MUDA'],
            ['pendidikan'=>'DIPLOMA IV/ STRATA I'],
            ['pendidikan'=>'STRATA II'],
            ['pendidikan'=>'STRATA III']
        ];
        \App\Models\Pendidikan::query()->truncate();
        \App\Models\Pendidikan::insert($data_pendidikan);
    }
}
