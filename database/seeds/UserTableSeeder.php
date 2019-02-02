<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'jad',
            'firstname'=>'Riahi',
            'email'=>'jad@hotmail.com',
            'password' => bcrypt('coding5'),
            'remember_token' => str_random(10),
        
        ]);
   
    }
}
