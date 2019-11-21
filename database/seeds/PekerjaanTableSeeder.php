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
            ['pekerjaan'=>'BELUM/TIDAK BEKERJA'],
            ['pekerjaan'=>'MENGURUS RUMAH TANGGA'],
            ['pekerjan'=>'PELAJAR/MAHASISWA'],
            ['pekerjaan'=>'PENSIUNAN'],
            ['pekerjaan'=>'PEGAWAI NEGERI SIPIL (PNS)'],
            ['pekerjaan'=>'TENTARA NASIONAL INDONESIA (TNI)'],
            ['pekerjan'=>'KEPOLISIAN RI (POLRI)'],
            ['pekerjaan'=>'PERDAGANGAN'],
            ['pekerjan'=>'PETANI/PEKEBUN'],
            ['pekerjaan'=>'PETERNAK']
        ];
        \App\Models\Pekerjaan::query()->truncate();
        \App\Models\Pekerjaan::insert($data_agama);
    }
}
