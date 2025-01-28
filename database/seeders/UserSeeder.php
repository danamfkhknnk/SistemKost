<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // Menggunakan Faker untuk menghasilkan data acak

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     $userData = [
    //         // [
    //         //     'nama'=> 'penyewa',
    //         //     'email'=>'1@gmail.com',
    //         //     'role'=>'penyewa',
    //         //     'password'=>bcrypt('penyewa')
    //         // ],
    //         // [
    //         //     'nama'=> '1',
    //         //     'email'=>'1@gmail.com',
    //         //     'role'=>'penyewa',
    //         //     'password'=>bcrypt('penyewa')
    //         // ],
    //         // [
    //         //     'nama'=>'admin',
    //         //     'email'=>'admin@gmail.com',
    //         //     'role'=>'admin',
    //         //     'password'=>bcrypt('admin')
    //         // ],
    //         [
    //             'nama'=>'publik',
    //             'email'=>'publik@gmail.com',
    //             'role'=>'publik',
    //             'telepon'=>'',
    //             'email_verified_at'=>'',
    //             'password'=>bcrypt('publik')
    //         ],
    //     ];
        $faker = Faker::create('id_ID'); // Menggunakan locale Indonesia

        for ($i = 0; $i < 50; $i++) {
            User::create([
                'nama' => $faker->name, // Menghasilkan nama acak
                'email' => $faker->unique()->safeEmail, // Menghasilkan email acak
                'role' => 'publik',
                'telepon' => '08' . $faker->randomNumber(8, true), // Menghasilkan nomor telepon acak
                'email_verified_at' => Carbon::createFromTimestamp($faker->dateTimeBetween('2024-01-01', '2024-12-31')->getTimestamp()), // Menghasilkan waktu verifikasi email acak
                'password' => bcrypt('publik') // Password tetap sama
            ]);
        }

        // foreach($userData as $key => $val){
        //     User::create($val);
        // }
     }
}