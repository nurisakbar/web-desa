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
        \App\User::query()->truncate();

        $user = new App\User;
        $password = Hash::make('password');
        $user->create(['name'=>'nuris akbar','email'=>'nuris.akbar@gmail.com','password'=>$password]);
        $user->create(['name'=>'administrator','email'=>'admin@gmail.com','password'=>$password]);
    }
}
