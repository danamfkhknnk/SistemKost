<?php

namespace Database\Seeders;

use App\Models\kamar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kamarseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nokamar'=> '11',
                'tipe'=>'Kipas Angin',
                'harga'=>'325000',
                'status'=>'tersedia',
                'gambarkamar' => '20241223150438_km3.jpg,20241223150438_dapur2.jpg,20241223150438_kipas1.jpg,20241223150438_11.jpg'
            ],
        ];

        foreach($userData as $key => $val){
            kamar::create($val);
        }
     }
}