<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AgamaTableSeeder::class);
        $this->call(StatusKawinTableSeeder::class);
        $this->call(PekerjaanTableSeeder::class);
        $this->call(PendidikanTableSeeder::class);
        $this->call(ArtikelTableSeeder::class);
    }
}
