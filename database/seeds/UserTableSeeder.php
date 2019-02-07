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
            'role_id'=> 1,

        
        ]);
        User::create([
            'name'=>'sabri',
            'firstname'=>'Riahi',
            'email'=>'sabri@hotmail.com',
            'password' => bcrypt('coding5'),
            'remember_token' => str_random(10),
            'role_id'=> 2,

        
        ]);
        User::create([
            'name'=>'wassim',
            'firstname'=>'Riahi',
            'email'=>'wassim@hotmail.com',
            'password' => bcrypt('coding5'),
            'remember_token' => str_random(10),
            'role_id'=> 3,

        
        ]);
        User::create([
            'name'=>'saida',
            'firstname'=>'Riahi',
            'email'=>'saida@hotmail.com',
            'password' => bcrypt('coding5'),
            'remember_token' => str_random(10),
            'role_id'=> 2,

        
        ]);
   
    }
}
