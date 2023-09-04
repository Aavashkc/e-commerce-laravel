<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'User 1',
                'email' => 'user1@example.com',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'User 2',
                'email' => 'user2@example.com',
                'password' =>Hash::make('123'),
            ],
            [
                'name' => 'User 3',
                'email' => 'user3@example.com',
                'password' => Hash::make('123'),
            ],
            // Add more user data here...
        ];

        DB::table('users')->insert($users);
        //
        // DB::table('users')->insert([
        //     'name'=> 'hello world',
        //     "email"=>"hello@gmail.com",
        //     "password"=>Hash::make('123')
        // ]);
        // DB::table('users')->insert([
        //     'name'=> 'ak',
        //     "email"=>"ak@gmail.com",
        //     "password"=>Hash::make('123')
        // ]);
    }
}
