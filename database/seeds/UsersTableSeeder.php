<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'Dumitru Admin',
            'email' => 'avs.dev2+1@gmail.com',
            'role' => '1',
            'password' =>  Hash::make('111111'),
        ],
        [
            'name' => 'Andrei Admin',
            'email' => 'avs.dev2+2@gmail.com',
            'role' => '1',
            'password' =>  Hash::make('111111'),               

        ],
        [
            'name' => 'Dumitru Client',
            'email' => 'avs.dev2+3@gmail.com',
            'role' => '2',
            'password' =>  Hash::make('111111'),
        ],
        [
            'name' => 'Andrei Client',
            'email' => 'avs.dev2+4@gmail.com',
            'role' => '2',
            'password' =>  Hash::make('111111'),               

        ],
      ]);
    }
}
