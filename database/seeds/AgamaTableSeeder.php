<?php

use Illuminate\Database\Seeder;

class AgamaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_agama = [
            ['agama'=>'Islam'],
            ['agama'=>'Kristen'],
            ['agama'=>'Budha'],
            ['agama'=>'Konghuchu']
        ];
        \App\Models\Agama::query()->truncate();
        \App\Models\Agama::insert($data_agama);
    }
}
