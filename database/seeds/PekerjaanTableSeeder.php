<?php

use Illuminate\Database\Seeder;

class PekerjaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_agama = [
            ['pekerjaan'=>'Dosen'],
            ['pekerjaan'=>'Buruh Bangunan'],
            ['pekerjan'=>'Polisi'],
            ['pekerjaan'=>'Kuli']
        ];
        \App\Models\Pekerjaan::query()->truncate();
        \App\Models\Pekerjaan::insert($data_agama);
    }
}
