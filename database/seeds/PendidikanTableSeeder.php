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
            ['pendidikan'=>'Sekolah Dasar'],
            ['pendidikan'=>'Sekolah Menengah Pertama'],
            ['pendidikan'=>'Strata 1'],
            ['pendidikan'=>'Strata 2']
        ];
        \App\Models\Pendidikan::query()->truncate();
        \App\Models\Pendidikan::insert($data_pendidikan);
    }
}
