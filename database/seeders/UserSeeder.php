<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama'=> 'penyewa',
                'email'=>'1@gmail.com',
                'role'=>'penyewa',
                'password'=>bcrypt('penyewa')
            ],
            [
                'nama'=> '1',
                'email'=>'1@gmail.com',
                'role'=>'penyewa',
                'password'=>bcrypt('penyewa')
            ],
            [
                'nama'=>'admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('admin')
            ],
            [
                'nama'=>'publik',
                'email'=>'publik@gmail.com',
                'role'=>'publik',
                'password'=>bcrypt('publik')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
     }
}