<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->create(['name'=>'nuris akbar','email'=>'nuris.akbar@gmail.com','password'=>'password']);
        factory('App\User',50)->create();
    }
}
