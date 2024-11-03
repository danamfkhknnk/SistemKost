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
                'name'=>'Mas 1',
                'email'=>'1@gmail.com',
                'role'=>'penyewa',
                'password'=>bcrypt('penyewa')
            ],
            [
                'name'=>'Mas admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('admin')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}