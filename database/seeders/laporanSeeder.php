<?php

namespace Database\Seeders;

use App\Models\laporan;
use Illuminate\Database\Seeder;

class laporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laporan = [
            // [
            //     'kamar_id'=> '22',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-11-05 00:00:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '22',
            //     'tipe'=> 'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-12-05 12:49:36',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '15',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '11/11/2024 13.08',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '15',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '11/12/2024 13.05',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '16',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '12/11/2024 13.11',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '16',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '12/12/2024 13.15',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '21',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-11-15 13:24:37',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '21',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-12-16 13:43:25',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '19',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-11-25 15:26:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '17',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-11-20 13:49:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '17',
            //     'tipe'=> 'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-12-20 13:53:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '18',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-11-28 15:40:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '23',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-11-03 15:48:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '23',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-12-03 15:50:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '27',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-10-30 15:53:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '27',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-12-16 15:57:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '28',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-11-06 16:00:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '28',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-12-06 16:03:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '29',
            //     'tipe'=> 'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-11-06 16:09:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '29',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-12-06 16:11:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '30',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-12-09 16:17:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '30',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-12-03 15:50:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '34',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-11-10 16:22:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '34',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-12-10 16:23:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '31',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-11-11 16:27:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '31',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-12-11 16:29:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '33',
            //     'tipe'=> 'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-11-19 16:35:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '33',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-12-19 16:36:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '32',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-11-17 16:40:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '32',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-12-17 16:42:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '24',
            //     'tipe'=>'Masuk',
            //     'harga'=>'325000',
            //     'created_at' => '2024-11-20 16:45:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '24',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-12-20 16:46:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '25',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-11-26 16:49:00',
            //     'updated_at' => null
            // ],
            // [
            //     'kamar_id'=> '35',
            //     'tipe'=>'Masuk',
            //     'harga'=>'575000',
            //     'created_at' => '2024-12-02 16:52:00',
            //     'updated_at' => null
            // ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'200000',
                'created_at' => '2024-10-27 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-10-27 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Sampah',
                'tipe'=>'Keluar',
                'harga'=>'50000',
                'created_at' => '2024-10-27 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'100000',
                'created_at' => '2024-11-04 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Wifi',
                'tipe'=>'Keluar',
                'harga'=>'286000',
                'created_at' => '2024-10-27 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'100000',
                'created_at' => '2024-11-15 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'50000',
                'created_at' => '2024-11-18 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-11-19 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'100000',
                'created_at' => '2024-10-30 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-10-30 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Sampah',
                'tipe'=>'Keluar',
                'harga'=>'50000',
                'created_at' => '2024-11-01 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air',
                'tipe'=>'Keluar',
                'harga'=>'4500',
                'created_at' => '2024-11-03 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Gas',
                'tipe'=>'Keluar',
                'harga'=>'19500',
                'created_at' => '2024-11-03 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-11-04 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Wifi',
                'tipe'=>'Keluar',
                'harga'=>'340500',
                'created_at' => '2024-11-04 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-11-06 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Gas',
                'tipe'=>'Keluar',
                'harga'=>'22000',
                'created_at' => '2024-11-07 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Sampah',
                'tipe'=>'Keluar',
                'harga'=>'50000',
                'created_at' => '2024-10-27 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'100000',
                'created_at' => '2024-11-09 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-11-14 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Sunlight',
                'tipe'=>'Keluar',
                'harga'=>'7000',
                'created_at' => '2024-11-14 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'8000',
                'created_at' => '2024-11-07 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'100000',
                'created_at' => '2024-11-24 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'8000',
                'created_at' => '2024-11-25 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Sampah',
                'tipe'=>'Keluar',
                'harga'=>'50000',
                'created_at' => '2024-12-01 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'100000',
                'created_at' => '2024-11-28 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-12-01 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'100000',
                'created_at' => '2024-12-04 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Wifi',
                'tipe'=>'Keluar',
                'harga'=>'340500',
                'created_at' => '2024-11-05 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'12000',
                'created_at' => '2024-12-09 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Lampu Kamar Mandi',
                'tipe'=>'Keluar',
                'harga'=>'19000',
                'created_at' => '2024-12-10 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'100000',
                'created_at' => '2024-12-15 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-12-12 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-12-20 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'200000',
                'created_at' => '2024-11-28 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-12-02 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Sampah',
                'tipe'=>'Keluar',
                'harga'=>'50000',
                'created_at' => '2024-12-03 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'100000',
                'created_at' => '2024-12-06 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Token Listrik',
                'tipe'=>'Keluar',
                'harga'=>'150000',
                'created_at' => '2024-12-17 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4000',
                'created_at' => '2024-12-02 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Air Galon',
                'tipe'=>'Keluar',
                'harga'=>'4500',
                'created_at' => '2024-12-10 16:52:00',
                'updated_at' => null
            ],
            [
                'item'=> 'Wifi',
                'tipe'=>'Keluar',
                'harga'=>'285500',
                'created_at' => '2024-12-05 16:52:00',
                'updated_at' => null
            ],
        ];

        foreach($laporan as $key => $val){
            laporan::create($val);
        }
     }
}