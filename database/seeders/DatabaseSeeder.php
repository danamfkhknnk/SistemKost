<?php

namespace Database\Seeders;

use App\Models\laporan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('infos')->insertOrIgnore([
            'id' => 1,
            'wa' => '6285848373051',
            'fb' => 'frandy.852333',
            'logo' => '20241213004154_IMG_4553.PNG',
            'galeri' => '20241223144803_dapur.jpg,20241223144803_dapur2.jpg,20241223144803_garasi.jpg,20241223144803_km2.jpg,20241223144803_km3.jpg,20241223144803_rooftop.jpg,20241223144803_ruangtamu.jpg',
            'created_at' => '2024-12-23 07:48:03',
            'updated_at' => null, // Anda bisa menggunakan 'now()' jika ingin mengisi dengan waktu saat ini
            'alamat' => 'Karang Pakis Rt 6 Rw 1, Desa Jepang Pakis, Kecamatan Jati, Kabupaten Kudus, Jawa Tengah - 59342',
        ]);

        
        DB::table('users')->insertOrIgnore([
            ['id' => 68, 'nama' => 'Hanggoro', 'email' => 'hanggoro@gmail.com', 'email_verified_at' => '2024-12-23 09:27:20', 'password' => '$2y$12$Tx/eqkG4teEcqu55IG4ljOvOU6nH.pTKmx75yZIWXnFzvpJjRlhji', 'role' => 'admin', 'created_at' => '2024-12-23 09:27:11', 'updated_at' => '2024-12-23 09:27:11', 'telepon' => '6285848373051'],
            ['id' => 69, 'nama' => 'Firdaus', 'email' => 'firadaus@gmail.com', 'email_verified_at' => '2024-12-25 05:36:40', 'password' => '$2y$12$FtciIQrTBbta5uggdKLEJ.wt4xdtZVH7rLRT0iUV4AvU21WB1KTwK', 'role' => 'penyewa', 'created_at' => '2024-12-26 05:35:52', 'updated_at' => '2024-12-26 05:40:47', 'telepon' => '62895342993570'],
            ['id' => 71, 'nama' => 'Arya', 'email' => 'arya@gmail.com', 'email_verified_at' => '2024-12-05 06:02:36', 'password' => '$2y$12$vgE.0BexXp8LfW9tmmCHcO0O3FFoPHkEMyGJ.YVDxMKXSk2PKeK/6', 'role' => 'penyewa', 'created_at' => '2024-12-26 06:02:18', 'updated_at' => '2024-12-26 06:03:45', 'telepon' => '6285384310037'],
            ['id' => 72, 'nama' => 'Lilik', 'email' => 'lilik@gmail.com', 'email_verified_at' => '2024-12-04 06:11:19', 'password' => '$2y$12$HniBl/malXmy6BIxTKS99.4tedPy8hOJI7l0LgZVcMPy/c5JfiZCe', 'role' => 'penyewa', 'created_at' => '2024-12-26 06:11:00', 'updated_at' => '2024-12-26 06:12:21', 'telepon' => '62895415015783'],
            ['id' => 73, 'nama' => 'Rony', 'email' => 'rony@gmail.com', 'email_verified_at' => '2024-12-02 06:23:54', 'password' => '$2y$12$gjMoAlM7stArb5tPWV712ewHQ7niZoR8xOhWYcOOcVfn2ZooH4Ho6', 'role' => 'publik', 'created_at' => '2024-12-26 06:23:30', 'updated_at' => '2024-12-26 06:29:02', 'telepon' => '6285713947086'],
            ['id' => 74, 'nama' => 'afif', 'email' => 'afif@gmail.com', 'email_verified_at' => '2024-10-11 06:41:33', 'password' => '$2y$12$1c0Ei9x2pC2uvLm9fIMEmebdTx6QqifOFSLySR71zz nXQ7Qfgs752', 'role' => 'penyewa', 'created_at' => '2024-12-26 06:41:22', 'updated_at' => '2024-12-26 06:43:46', 'telepon' => '6282124038401'],
            ['id' => 75, 'nama' => 'Fahri', 'email' => 'fahri@gmail.com', 'email_verified_at' => '2024-10-11 06:48:25', 'password' => '$2y$12$xow0H6bBKaWXmVnDC4Yn0.fWtIoTLLId5YB1IYRYtaHgCMIyYvTYe', 'role' => 'penyewa', 'created_at' => '2024-12-26 06:48:14', 'updated_at' => '2024-12-26 06:49:34', 'telepon' => '6289637055941'],
            ['id' => 76, 'nama' => 'Irvan', 'email' => 'irvan@gmail.com', 'email_verified_at' => '2024-10-14 08:09:10', 'password' => '$2y$12$CCnvvB6OOiitPhtawOxNo.e33w8.o4ZLiI/.cJtkKgWeurE0enNke', 'role' => 'penyewa', 'created_at' => '2024-12-26 08:08:59', 'updated_at' => '2024-12-26 08:27:14', 'telepon' => '6287720372123'],
            ['id' => 77, 'nama' => 'Puthut', 'email' => 'puthut@gmail.com', 'email_verified_at' => '2024-10-07 08:38:44', 'password' => '$2y$12$I5vdWAlsnDWY7LW.JfcmuOEeqLUdx2cVLTPHoLoZscoRXXDNQ84zO', 'role' => 'penyewa', 'created_at' => '2024-12-26 08:38:11', 'updated_at' => '2024-12-26 08:40:30', 'telepon' => '6289669660879'],
            ['id' => 78, 'nama' => 'Taufik', 'email' => 'taufik@gmail.com', 'email_verified_at' => '2024-10-16 08:47:46', 'password' => '$2y$12$juJ70IcSXHBOgf4IN2XcxutFYJBGzIEP5IL7xiGofTCtIa9Bqn3ES', 'role' => 'penyewa', 'created_at' => '2024-12-26 08:47:32', 'updated_at' => '2024-12-26 08:48:46', 'telepon' => '6285712060097'],
            ['id' => 79, 'nama' => 'Rifki', 'email' => 'rifki@gmail.com', 'email_verified_at' => '2024-09-17 08:52:28', 'password' => '$2y$12$YFmW.4lQdLK9ErEEKvJ92.v0o0q/aSOw4ah5QfNpLSQmfmyh2LjuC', 'role' => 'publik', 'created_at' => '2024-12-26 08:52:16', 'updated_at' => '2024-12-29 08:01:59', 'telepon' => '62821915747817'],
            ['id' => 80, 'nama' => 'Nanda', 'email' => 'nanda@gmail.com', 'email_verified_at' => '2024-12-10 08:56:07', 'password' => '$2y$12$CtLqTjCcCcO3t7G06.Ic1OJuJ59aCUICrqinTCVDuK3BuHkkHVyP2', 'role' => 'penyewa', 'created_at' => '2024-12-26 08:55:47', 'updated_at' => '2024-12-26 08:57:30', 'telepon' => '6281339696299'],
            ['id' => 81, 'nama' => 'Aziz', 'email' => 'aziz@gmail.com', 'email_verified_at' => '2024-10-10 08:59:42', 'password' => '$2y$12$4QIOupZQanWKos5bSjq/Ou2GcI9AmBlZw1wFacwhPz3qnfg98uKri', 'role' => 'penyewa', 'created_at' => '2024-12-26 08:59:25', 'updated_at' => '2024-12-26 09:00:44', 'telepon' => '62895617180309'],
            ['id' => 82, 'nama' => 'Pian', 'email' => 'Pian@gmail.com', 'email_verified_at' => '2024-10-11 09:08:23', 'password' => '$2y$12$peeM/Vmqm3AarQWEGmSWT.HE1jAHYVKceFJrsgxZP4w4ngpU6pkPG', 'role' => 'penyewa', 'created_at' => '2024-12-26 09:06:43', 'updated_at' => '2024-12-26 09:09:18', 'telepon' => '6283115633749'],
            ['id' => 83, 'nama' => 'Anjas', 'email' => 'anjas@gmail.com', 'email_verified_at' => '2024-09-10 09:13:10', 'password' => '$2y$12$9UMfxnwQN0JpJMsfxgnupuiEwmC1etx2HHIKAhRkAqjBybM3BbZc2', 'role' => 'publik', 'created_at' => '2024-12-26 09:12:57', 'updated_at' => '2024-12-29 06:58:37', 'telepon' => '6285700327003'],
            ['id' => 84, 'nama' => 'Rama', 'email' => 'rama@gmail.com', 'email_verified_at' => '2024-11-06 09:15:57', 'password' => '$2y$12$p/2hGgIOJFYbI3Ys2Eab/uSHOgndo9737PmFBNq1wrApC1EAS1Xci', 'role' => 'penyewa', 'created_at' => '2024-12-26 09:15:43', 'updated_at' => '2024-12-26 09:20:19', 'telepon' => '628601565878'],
            ['id' => 85, 'nama' => 'Dana', 'email' => 'danamifkhakunnurkhasan@gmail.com', 'email_verified_at' => '2024-10-08 09:21:56', 'password' => '$2y$12$5ca4qs9bbATwzPiVSiGxN.U/N.JuEbdi/QJyo3vUM/nTlTVm3AkFy', 'role' => 'penyewa', 'created_at' => '2024-12-26 09:21:48', 'updated_at' => '2024-12-26 09:22:50', 'telepon' => '6282242478858'],
            ['id' => 86, 'nama' => 'Gusti', 'email' => 'gusti@gmail.com', 'email_verified_at' => '2024-10-16 09:25:49', 'password' => '$2y$12$kVQbW1a0y2AwNeSo/BIA5OoVfBeOtJaPjpb9Xz2AtJLw.70CKbShS', 'role' => 'penyewa', 'created_at' => '2024-12-26 09:25:27', 'updated_at' => '2024-12-26 09:28:30', 'telepon' => '6287765576757'],
            ['id' => 87, 'nama' => 'Irsyad', 'email' => 'irsyad@gmail.com', 'email_verified_at' => '2024-01-16 09:34:06', 'password' => '$2y$12$x6bqX2fCafz6ibCMxEtvA.UQfO/c1xT8SFtfCgQg.MIWU8TIfAskS', 'role' => 'penyewa', 'created_at' => '2024-12-26 09:33:56', 'updated_at' => '2024-12-26 09:35:33', 'telepon' => '628963596 9282'],
            ['id' => 88, 'nama' => 'Santo', 'email' => 'santo@gmail.com', 'email_verified_at' => '2024-10-15 09:39:56', 'password' => '$2y$12$1La.JAe2CwkE7fDqkRs9kOsxFtvrIJiQaJMZFEkzvxlYiFgk3zXkW', 'role' => 'penyewa', 'created_at' => '2024-12-26 09:39:49', 'updated_at' => '2024-12-26 09:41:22', 'telepon' => '6285338180223'],
            ['id' => 89, 'nama' => 'Alvian', 'email' => 'alvian@gmail.com', 'email_verified_at' => '2024-10-04 09:44:52', 'password' => '$2y$12$K7.gcAw3OY.FT5uZHozc1OsJbe85sAXIhGPJAWzw9Rwp8UiTnrQeq', 'role' => 'penyewa', 'created_at' => '2024-12-26 09:44:36', 'updated_at' => '2024-12-26 09:45:49', 'telepon' => '628776576757'],
            ['id' => 90, 'nama' => 'Ilham', 'email' => 'ilham@gmail.com', 'email_verified_at' => '2024-10-19 09:48:47', 'password' => '$2y$12$i3//0RTL9slA8C1ROxohy.D2/.ocCsTWA6B9fALNBl3dLImteePVm', 'role' => 'penyewa', 'created_at' => '2024-12-26 09:48:35', 'updated_at' => '2024-12-26 09:49:35', 'telepon' => '6285643079636'],
            ['id' => 91, 'nama' => 'Awie', 'email' => 'awie@gmail.com', 'email_verified_at' => '2024-12-01 09:51:24', 'password' => '$2y$12$nPeVfJ0OJ/pz3Kt19oG.W.xm0sZDQZJ5Q1qLjXxtWs3HJj3lU0m7G', 'role' => 'penyewa', 'created_at' => '2024-12-26 09:51:17', 'updated_at' => '2024-12-26 09:52:27', 'telepon' => '6285600052079'],
            ['id' => 92, 'nama' => 'Tes', 'email' => 'tes@gmail.com', 'email_verified_at' => NULL, 'password' => '$2y$12$5qX3NOQcwFJkvz/PZOK3defFpQnGXqwrDo.0aoAF19gUp2dm47ksW', 'role' => 'publik', 'created_at' => '2024-12-27 02:39:22', 'updated_at' => '2024-12-27 02:39:22', 'telepon' => '081339696299'],
        ]);
        
        DB::table('kamars')->insertOrIgnore([
            ['id' => 15, 'nokamar' => '1', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155708_1.jpg,20241223155708_kipas2.jpg,20241223155708_km.jpg,20241223155708_dapur.jpg', 'created_at' => '2024-12-03 00:49:32', 'updated_at' => '2024-12-26 06:03:45'],
            ['id' => 16, 'nokamar' => '3', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155723_3.jpg,20241223155723_kipas2.jpg,20241223155723_km.jpg,20241223155723_dapur.jpg', 'created_at' => '2024-12-03 00:49:44', 'updated_at' => '2024-12-26 06:12:21'],
            ['id' => 17, 'nokamar' => '4', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155746_4.jpg,20241223155746_kipas2.jpg,20241223155746_km.jpg,20241223155746_dapur.jpg', 'created_at' => '2024-12-03 00:49:56', 'updated_at' => '2024-12-26 06:49:34'],
            ['id' => 18, 'nokamar' => '5', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155803_5.jpg,20241223155803_kipas2.jpg,20241223155803_km.jpg,20241223155803_dapur.jpg', 'created_at' => '2024-12-08 23:34:32', 'updated_at' => '2024-12-26 08:40:30'],
            ['id' => 19, 'nokamar' => '6', 'tipe' => 'AC', 'harga' => '575000', 'status' => 'terisi', 'gambarkamar' => '20241223145746_6.jpg,20241223145746_ac2.jpg,20241223145746_dapur.jpg,20241223145746_km.jpg', 'created_at' => '2024-12-10 21:17:23', 'updated_at' => '2024-12-26 08:27:14'],
            ['id' => 21, 'nokamar' => '7', 'tipe' => 'AC', 'harga' => '575000', 'status' => 'terisi', 'gambarkamar' => '20241223145826_7.jpg,20241223145826_ac2.jpg,20241223145826_dapur.jpg,20241223145826_km.jpg', 'created_at' => '2024-12-10 21:21:56', 'updated_at' => '2024-12-26 06:43:46'],
            ['id' => 22, 'nokamar' => '2', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155826_2.jpg,20241223155826_kipas2.jpg,20241223155826_km.jpg,20241223155826_dapur.jpg', ' created_at' => '2024-12-23 07:58:52', 'updated_at' => '2024-12-26 05:40:47'],
            ['id' => 23, 'nokamar' => '8', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223150308_8.jpg,20241223150308_dapur2.jpg,20241223150308_kipas1.jpg,20241223150308_km3.jpg', 'created_at' => '2024-12-23 08:00:21', 'updated_at' => '2024-12-26 08:48:46'],
            ['id' => 24, 'nokamar' => '9', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223150230_9.jpg,20241223150230_dapur2.jpg,20241223150230_kipas1.jpg,20241223150230_km3.jpg', 'created_at' => '2024-12-23 08:02:30', 'updated_at' => '2024-12-26 09:45:49'],
            ['id' => 25, 'nokamar' => '10', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223154303_10.jpg,20241223154303_dapur2.jpg,20241223154303_kipas1.jpg,20241223154303_km3.jpg', 'created_at' => '2024-12-23 08:04:38', 'updated_at' => '2024-12-26 09:49:35'],
            ['id' => 27, 'nokamar' => '11', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155116_11.jpg,20241223155116_kipas1.jpg,20241223155116_km3.jpg,20241223155116_dapur2.jpg', 'created_at' => '2024-12-23 08:46:48', 'updated_at' => '2024-12-26 08:57:30'],
            ['id' => 28, 'nokamar' => '12', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155157_12.jpg,20241223155157_kipas1.jpg,20241223155157_km3.jpg,20241223155157_dapur2.jpg', 'created_at' => '2024-12-23 08:47:09', 'updated_at' => '2024-12-26 09:00:44'],
            ['id' => 29, 'nokamar' => '13', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155226_13.jpg,20241223155226_kipas1.jpg,20241223155226_km3.jpg,20241223155226_dapur2.jpg', 'created_at' => '2024-12-23 08:47:40', 'updated_at' => '2024-12-26 09:09:18'],
            ['id' => 30, 'nokamar' => '14', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155250_14.jpg,20241223155250_kipas1.jpg,20241223155250_km3.jpg,20241223155250_dapur2.jpg', 'created_at' => '2024-12-23 08:48:25', 'updated_at' => '2024-12-26 09:20:19'],
            ['id' => 31, 'nokamar' => '15', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155327_15.jpg,20241223155327_kipas1.jpg,20241223155327_km3.jpg,20241223155327_dapur2.jpg', ' created_at' => '2024-12-23 08:49:06', 'updated_at' => '2024-12-26 09:28:30'],
            ['id' => 32, 'nokamar' => '16', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155359_16.jpg,20241223155359_kipas1.jpg,20241223155359_km3.jpg,20241223155359_dapur2.jpg', 'created_at' => '2024-12-23 08:49:29', 'updated_at' => '2024-12-26 09:41:22'],
            ['id' => 33, 'nokamar' => '17', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155443_17.jpg,20241223155443_kipas1.jpg,20241223155443_km3.jpg,20241223155443_dapur2.jpg', 'created_at' => '2024-12-23 08:54:43', 'updated_at' => '2024-12-26 09:35:33'],
            ['id' => 34, 'nokamar' => '18', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155504_18.jpg,20241223155504_kipas1.jpg,20241223155504_km3.jpg,20241223155504_dapur2.jpg', 'created_at' => '2024-12-23 08:55:04', 'updated_at' => '2024-12-26 09:22:50'],
            ['id' => 35, 'nokamar' => '19', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'terisi', 'gambarkamar' => '20241223155524_19.jpg,20241223155524_kipas1.jpg,20241223155524_km3.jpg,20241223155524_dapur2.jpg', 'created_at' => '2024-12-23 08:55:24', 'updated_at' => '2024-12-26 09:52:27'],
            ['id' => 36, 'nokamar' => '20', 'tipe' => 'Kipas Angin', 'harga' => '325000', 'status' => 'tersedia', 'gambarkamar' => '20241227093304_4.jpg,20241227093304_ac.jpg,20241227093304_dapur2.jpg,20241227093304_km.jpg', 'created_at' => '2024-12-27 02:33:04', 'updated_at' => '2024-12-29 08:01:59'],
        ]);
        
        DB::table('penghunis')->insertOrIgnore([
            ['id' => 37, 'user_id' => 69, 'nik' => '3329271902991675', 'alamat' => 'Desa Bumiharjo, Kecamatan Juwana, Kabupaten Pati', 'kamar_id' => 22, 'tgglmasuk' => '2024-08-05', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 05:40:47', 'updated_at' => '2024-12-27 02:30:31'],
            ['id' => 38, 'user_id' => 71, 'nik' => '3329142512058475', 'alamat' => 'Desa Sukolilo, Kecamatan Sukolilo, Kabupaten Pati', 'kamar_id' => 15, 'tgglmasuk' => '2024-09-05', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 06:03:45', 'updated_at' => '2024-12-27 02:27:15'],
            ['id' => 39, 'user_id' => 72, 'nik' => '3331122702999466', 'alamat' => 'Desa Kedunguter, Kecamatan Karanganyar, Kabupaten Demak', 'kamar_id' => 16, 'tgglmasuk' => '2024-10-12', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 06:12:21', 'updated_at' => '2024-12-27 02:26:29'],
            ['id' => 40, 'user_id' => 73, 'nik' => NULL, 'alamat' => NULL, 'kamar_id' => NULL, 'tgglmasuk' => '2024-11-15', 'tgglkeluar' => '2024-12-15', 'created_at' => '2024-12-26 06:25:07', 'updated_at' => '2024-12-26 06:28:15'],
            ['id' => 42, 'user_id' => 74, 'nik' => '3332100501037799', 'alamat' => 'Desa Brati, Kecamatan Brati, Kabupaten Grobogan', 'kamar_id' => 21, 'tgglmasuk' => '2024-12-16', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 06:43:46', 'updated_at' => '2024-12-27 02:25:51'],
            ['id' => 43, 'user_id' => 75, 'nik' => '3331082208992340', 'alamat' => 'Desa Kebonbatur, Kecamatan Mranggen, Kabupaten Demak', 'kamar_id' => 17, 'tgglmasuk' => '2024-10-20', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 06:49:34', 'updated_at' => '2024-12-27 02:25:10'],
            ['id' => 44, 'user_id' => 76, 'nik' => '3329011205019197', 'alamat' => 'Desa Kayen, Kecamatan Kayen, Kabupaten Pati', 'kamar_id' => 19, 'tgglmasuk' => '2024-09-25', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 08:27:14', 'updated_at' => '2024-12-27 02:24:04'],
            ['id' => 45, 'user_id' => 77, 'nik' => '3328152104054227', 'alamat' => 'Desa Punjulharjo, Kecamatan Rembang, Kabupaten Rembang', 'kamar_id' => 18, 'tgglmasuk' => '2024-09-28', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 08:40:30', 'updated_at' => '2024-12-27 02:23:17'],
            ['id' => 46, 'user_id' => 78, 'nik' => '3330210403053974', 'alamat' => 'Desa Mlonggo, Kecamatan Mlonggo, Kabupaten Jepara', 'kamar_id' => 23, 'tgglmasuk' => '2024-10-03', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 08:48:46', 'updated_at' => '2024-12-27 02:22:36'],
            ['id' => 47, 'user_id' => 79, 'nik' => NULL, 'alamat' => NULL, 'kamar_id' => NULL, 'tgglmasuk' => '2024-10-30', 'tgglkeluar' => '2024-11-30', 'created_at' => '2024-12-26 08:53:23', 'updated_at' => '2024-12-26 08:56:44'],
            ['id' => 48, 'user_id' => 80, 'nik' => '3332032212018775', 'alamat' => 'Desa Kradenan, Kecamatan Kradenan, Kabupaten Grobogan', 'kamar_id' => 27, 'tgglmasuk' => '2024-12-16', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 08:57:30', 'updated_at' => '2024-12-27 02:21:56'],
            ['id' => 49, 'user_id' => 81, 'nik' => '3330291109057832', 'alamat' => 'Desa Batealit, Kecamatan Batealit, Kabupaten Jepara', 'kamar_id' => 28, 'tgglmasuk' => '2024-09-06', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:00:44', 'updated_at' => '2024-12-27 02:21:16'],
            ['id' => 50, 'user_id' => 82, 'nik' => '3331211711005541', 'alamat' => 'Desa Mangunjiwan, Kecamatan Demak, Kabupaten Demak', 'kamar_id' => 29, 'tgglmasuk' => '2024-10-06', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:09:18', 'updated_at' => '2024-12-27 02:20:25'],
            ['id' => 51, 'user_id' => 83, 'nik' => NULL, 'alamat' => NULL, 'kamar_id' => NULL, 'tgglmasuk' => '2024-09-09', 'tgglkeluar' => '2024-12-09', 'created_at' => '2024-12-26 09:14:08', 'updated_at' => '2024-12-26 09:16:55'],
            ['id' => 52, 'user_id' => 84, 'nik' => '3330142611988759', 'alamat' => 'Desa Plajan, Kecamatan Pakis Aji, Kabupaten Jepara', 'kamar_id' => 30, 'tgglmasuk' => '2024-12-09', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:20:19', 'updated_at' => '2024-12-27 02:14:36'],
            ['id' => 53, 'user_id' => 85, 'nik' => '3317022603030001', 'alamat' => 'Desa Pasedan Kecamatan Bulu Kabupaten Rembang', 'kamar_id' => 34, 'tgglmasuk' => '2024-10-10', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:22:50', 'updated_at' => '2024-12-27 02:13:52'],
            ['id' => 54, 'user_id' => 86, 'nik' => '3332311003039537', 'alamat' => 'Desa Pulokulon, Kecamatan Pulokulon, Kabupaten Grobogan', 'kamar_id' => 31, 'tgglmasuk' => '2024-10-11', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:28:30', 'updated_at' => '2024-12-27 02:12:50'],
            ['id' => 55, 'user_id' => 87, 'nik' => '3332120505027562', 'alamat' => 'Desa Ngaringan, Kecamatan Ngaringan, Kabupaten Grobogan', 'kamar_id' => 33, 'tgglmasuk' => '2024-09-19', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:35:33', 'updated_at' => '2024-12-27 02:12:03'],
            ['id' => 56, 'user_id' => 88, 'nik' => '3331250501047847', 'alamat' => 'Desa Kadilangu, Kecamatan Demak, Kabupaten Demak', 'kamar_id' => 32, 'tgglmasuk' => '2024-10-17', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:41:22', 'updated_at' => '2024-12-27 02:10:26'],
            ['id' => 57, 'user_id' => 89, 'nik' => '3328050701006800', 'alamat' => 'Desa Tritunggal, Kecamatan Rembang, Kabupaten Rembang', 'kamar_id' => 24, 'tgglmasuk' => '2024-11-20', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:45:49', 'updated_at' => '2024-12-27 02:08:16'],
            ['id' => 58, 'user_id' => 90, 'nik' => '3329180604021254', 'alamat' => 'Desa Tlogowungu, Kecamatan Tlogowungu, Kabupaten Pati', 'kamar_id' => 25, 'tgglmasuk' => '2024-11-26', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:49:35', 'updated_at' => '2024-12-27 02:06:38'],
            ['id' => 59, 'user_id' => 91, 'nik' => '3328102306036597', 'alamat' => 'Desa Karangmangu, Kecamatan Sarang, Kabupaten Rembang', 'kamar_id' => 35, 'tgglmasuk' => '2024-12-02', 'tgglkeluar' => NULL, 'created_at' => '2024-12-26 09:52:27', 'updated_at' => '2024-12-27 02:05:27'],
        ]);

        DB::table('pembayarans')->insertOrIgnore([
            ['id' => 65, 'user_id' => 69, 'kamar_id' => 22, 'penghuni_id' => 37, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '3216eb91-f7c8-46e2-aa65-234e75c2c45d', 'created_at' => '2024-11-04 17:00:00', 'updated_at' => '2024-11-05 05:40:47', 'jatuhtempo' => '2024-11-05'],
            ['id' => 66, 'user_id' => 69, 'kamar_id' => 22, 'penghuni_id' => 37, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'f534c306-0928-4a3d-b0ab-67c45f3d8e8e', 'created_at' => '2024-12-05 05:49:36', 'updated_at' => '2024-12-04 17:00:00', 'jatuhtempo' => '2024-12-05'],
            ['id' => 67, 'user_id' => 71, 'kamar_id' => 15, 'penghuni_id' => 38, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '69677f64-df1d-49e4-b019-62bd15e9925b', 'created_at' => '2024-11-11 06:08:06', 'updated_at' => '2024-11-10 17:00:00', 'jatuhtempo' => '2024-11-11'],
            ['id' => 68, 'user_id' => 71, 'kamar_id' => 15, 'penghuni_id' => 38, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'f901109a-dca7-494f-a9cf-b6cc00551d81', 'created_at' => '2024-12-11 06:05:37', 'updated_at' => '2024-12-11 06:06:48', 'jatuhtempo' => '2024-12-11'],
            ['id' => 69, 'user_id' => 72, 'kamar_id' => 16, 'penghuni_id' => 39, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '8d0a0571-26fc-4fa5-ad56-4c9376b46eae', 'created_at' => '2024-11-12 06:11:58', 'updated_at' => '2024-11-12 06:12:21', 'jatuhtempo' => '2024-11-12'],
            ['id' => 70, 'user_id' => 72, 'kamar_id' => 16, 'penghuni_id' => 39, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '85e73040-a801-4f13-a47d-ca952ca9e16b', 'created_at' => '2024-12-12 06:15:18', 'updated_at' => '2024-12-12 06:16:01', 'jatuhtempo' => '2024-12-12'],
            ['id' => 71, 'user_id' => 73, 'kamar_id' => 21, 'penghuni_id' => 40, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '2fab474e-563b-4cea-9af7-84ca22a38af9', 'created_at' => '2024-11-15 06:24:37', 'updated_at' => '2024-12-26 06:29:02', 'jatuhtempo' => '2024-11-15'],
            ['id' => 72, 'user_id' => 74, 'kamar_id' => 21, 'penghuni_id' => 42, 'status' => 'selesai', 'tipe' => 'baru', 'snap_token' => 'c65c1a43-92d2-46d5-92df-15fe3a6926c6', 'created_at' => '2024-12-16 06:43:25', 'updated_at' => '2024-12-16 06:43:46', 'jatuhtempo' => NULL],
            ['id' => 73, 'user_id' => 75, 'kamar_id' => 17, 'penghuni_id' => 43, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'cd8e3691-7909-4e54-87ae-ee59750c070d', 'created_at' => '2024-11-20 06:49:12', 'updated_at' => '2024-11-20 06:49:34', 'jatuhtempo' => '2024-11-20'],
            ['id' => 74, 'user_id' => 75, 'kamar_id' => 17, 'penghuni_id' => 43, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'b15aeddf-b1a0-47a0-b1df-f65f5cf422cb', 'created_at' => '2024-12-20 06:53:06', 'updated_at' => '2024-12-20 06:53:38', 'jatuhtempo' => '2024-12-20'],
            ['id' => 75, 'user_id' => 76, 'kamar_id' => 19, 'penghuni_id' => 44, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '7b628729-f0e2-459c-b0e7-5ce423867f30', 'created_at' => '2024-11-25 08:26:49', 'updated_at' => '2024-11-25 08:27:14', 'jatuhtempo' => '2024-11-25'],
            ['id' => 76, 'user_id' => 77, 'kamar_id' => 18, 'penghuni_id' => 45, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'ed2a3bf1-cdc4-4a66-8368-881c38bc39cf', 'created_at' => '2024-11-28 08:40:04', 'updated_at' => '2024-11-28 08:40:30', 'jatuhtempo' => '2024-11-28'],
            ['id' => 77, 'user_id' => 78, 'kamar_id' => 23, 'penghuni_id' => 46, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '64216ec2-82e1-4bb1-9054-0e6adca91386', 'created_at' => '2024-11-03 08:48:26', 'updated_at' => '2024-11-03 08:48:46', 'jatuhtempo' => '2024-11-03'],
            ['id' => 78, 'user_id' => 78, 'kamar_id' => 23, 'penghuni_id' => 46, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '7a0f7a1a-8780-4dd6-910c-0553873dd05b', 'created_at' => '2024-12-03 08:50:23', 'updated_at' => '2024-12 -03 08:50:47', 'jatuhtempo' => '2024-12-03'],
            ['id' => 79, 'user_id' => 79, 'kamar_id' => 27, 'penghuni_id' => 47, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '22e21e63-c484-4ba9-be92-3679dcc36495', 'created_at' => '2024-10-30 08:53:06', 'updated_at' => '2024-10-30 08:53:23', 'jatuhtempo' => '2024-10-30'],
            ['id' => 80, 'user_id' => 80, 'kamar_id' => 27, 'penghuni_id' => 48, 'status' => 'selesai', 'tipe' => 'baru', 'snap_token' => '303f101b-1ced-49b4-9a09-0d8c4c4ab199', 'created_at' => '2024-12-16 08:57:11', 'updated_at' => '2024-12-16 08:57:30', 'jatuhtempo' => NULL],
            ['id' => 81, 'user_id' => 81, 'kamar_id' => 28, 'penghuni_id' => 49, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '7643a513-c1fc-4e54-ad51-e6c990badc35', 'created_at' => '2024-11-06 09:00:26', 'updated_at' => '2024-11-06 09:00:44', 'jatuhtempo' => '2024-11-06'],
            ['id' => 82, 'user_id' => 81, 'kamar_id' => 28, 'penghuni_id' => 49, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '478e7f1d-2137-400c-ab04-2b1811945d6a', 'created_at' => '2024-12-06 09:03:01', 'updated_at' => '2024-12-06 09:03:23', 'jatuhtempo' => '2024-12-06'],
            ['id' => 83, 'user_id' => 82, 'kamar_id' => 29, 'penghuni_id' => 50, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '6d931f62-40de-4448-8378-ad575f0e85a8', 'created_at' => '2024-11-06 09:09:01', 'updated_at' => '2024-11-06 09:09:18', 'jatuhtempo' => '2024-11-06'],
            ['id' => 84, 'user_id' => 82, 'kamar_id' => 29, 'penghuni_id' => 50, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '85ac06ce-5eed-41b3-9f3e-50b23ace8d24', 'created_at' => '2024-12-06 09:11:26', 'updated_at' => '2024-12-06 09:11:51', 'jatuhtempo' => '2024-12-06'],
            ['id' => 85, 'user_id' => 83, 'kamar_id' => 30, 'penghuni_id' => 51, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '2242af45-a1ac-48c9-806b-a8df993ff954', 'created_at' => '2024-11-09 09:13:45', 'updated_at' => '2024-11-09 09:14:08', 'jatuhtempo' => '2024-11-09'],
            ['id' => 86, 'user_id' => 84, 'kamar_id' => 30, 'penghuni_id' => 52, 'status' => 'selesai', 'tipe' => 'baru', 'snap_token' => '9b711dc8-0a4e-48c 8-ab93-60535901312b', 'created_at' => '2024-12-09 09:17:28', 'updated_at' => '2024-12-09 09:20:19', 'jatuhtempo' => NULL],
            ['id' => 87, 'user_id' => 85, 'kamar_id' => 34, 'penghuni_id' => 53, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '41ee5767-6af2-4b26-99cb-f0086af78254', 'created_at' => '2024-11-10 09:22:23', 'updated_at' => '2024-11-10 09:22:50', 'jatuhtempo' => '2024-11-10'],
            ['id' => 88, 'user_id' => 85, 'kamar_id' => 34, 'penghuni_id' => 53, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '09220e45-c990-488e-836e-51d445aedba4', 'created_at' => '2024-12-10 09:23:57', 'updated_at' => '2024-12-10 09:24:27', 'jatuhtempo' => '2024-12-10'],
            ['id' => 89, 'user_id' => 86, 'kamar_id' => 31, 'penghuni_id' => 54, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'c49fc66d-f441-4259-aa9b-e45a15a495c5', 'created_at' => '2024-11-11 09:27:35', 'updated_at' => '2024-11-11 09:28:30', 'jatuhtempo' => '2024-11-11'],
            ['id' => 90, 'user_id' => 86, 'kamar_id' => 31, 'penghuni_id' => 54, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'e80b0cee-6fa0-4766-9f66-520ebe093e16', 'created_at' => '2024-12-11 09:29:45', 'updated_at' => '2024-12-11 09:30:08', 'jatuhtempo' => '2024-12-11'],
            ['id' => 91, 'user_id' => 87, 'kamar_id' => 33, 'penghuni_id' => 55, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'd3908128-d415-4389-a1d9-4234d6aac09c', 'created_at' => '2024-11-19 09:35:08', 'updated_at' => '2024-11-19 09:35:33', 'jatuhtempo' => '2024-11-19'],
            ['id' => 92, 'user_id' => 87, 'kamar_id' => 33, 'penghuni_id' => 55, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '93adc366-c4b7-46f3-bfc3-ffa60b39030e', 'created_at' => '2024-12-19 09:36:47', 'updated_at' => '2024-12-19 09:37:49', 'jatuhtempo' => '2024-12-19'],
            ['id' => 93, 'user_id' => 88, 'kamar_id' => 32, 'penghuni_id' => 56, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'ee831acd-6f5d-4546-bc2d-2dec12ce35ed', 'created_at' => '2024-11-17 09:40:44', 'updated_at' => '2024-11-17 09:41:22', 'jatuhtempo' => '2024-11-17'],
            ['id' => 94, 'user_id' => 88, 'kamar_id' => 32, 'penghuni_id' => 56, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => 'c81eedeb-a8e1-40da-882e-bdbe2a5a1d45', 'created_at' => '2024-12-17 09:42:28', 'updated_at' => '2024-12-17 09:42:57', 'jatuhtempo' => '2024-12-17'],
            ['id' => 95, 'user_id' => 89, 'kamar_id' => 24, 'penghuni_id' => 57, 'status' => 'selesai', 'tipe' => 'baru', 'snap_token' => '36b52944-e858-4e83-8d18-c358bce1dc69', 'created_at' => '2024-11-20 09:45:27', 'updated_at' => '2024-11-20 09:45:49', 'jatuhtempo' => NULL],
            ['id' => 96, 'user_id' => 89, 'kamar_id' => 24, 'penghuni_id' => 57, 'status' => 'selesai', 'tipe' => 'sewa', 'snap_token' => '43163cff-55f1-4547-9b50-85f76db7650a', 'created_at' => '2024-12-20 09:46:40', 'updated_at' => '2024-12-20 09:47:27', 'jatuhtempo' => '2024-12-20'],
            ['id' => 97, 'user_id' => 90, 'kamar_id' => 25, 'penghuni_id' => 58, 'status' => 'selesai', 'tipe' => 'baru', 'snap_token' => 'a2bca469-d4c8-4c5b-be8d-dca05c832f12', 'created_at' => '2024-11-26 09:49:19', 'updated_at' => '2024-11-26 09:49:35', 'jatuhtempo' => NULL],
            ['id' => 98, 'user_id' => 91, 'kamar_id' => 35, 'penghuni_id' => 59, 'status' => 'selesai', 'tipe' => 'baru', 'snap_token' => 'c5efcb25-8f91-480c-b335-22c62fe37c79', 'created_at' => '2024-12-02 09:52:02', 'updated_at' => '2024-12-02 09:52:27', 'jatuhtempo' => NULL],
            ['id' => 100, 'user_id' => 83, 'kamar_id' => 36, 'penghuni_id' => NULL, 'status' => 'batal', 'tipe' => 'baru', 'snap_token' => '1b6dc751-b524-4c97-9c27-b54981aef48c', 'created_at' => '2024-12-27 02:45:31', 'updated_at' => '2024-12-29 01:40:34', 'jatuhtempo' => NULL],
            ['id' => 101, 'user_id' => 69, 'kamar_id' => 22, 'penghuni_id' => 37, 'status' => 'pending', 'tipe' => 'sewa', 'snap_token' => '2872bc9e-324b-41df-a134-b0cb20d116ad', 'created_at' => '2024-12-27 10:05:32', 'updated_at' => NULL, 'jatuhtempo' => '2025-01-05'],
            ['id' => 102, 'user_id' => 83, 'kamar_id' => 36, 'penghuni_id' => NULL, 'status' => 'batal', 'tipe' => 'baru', 'snap_token' => 'ae23c313-fb12-499f-82b9-13f18af9e559', 'created_at' => '2024-12-29 01:09:58', 'updated_at' => '2024-12-29 01:31:09', 'jatuhtempo' => NULL],
        ]);
        




        
        DB::table('laporans')->insertOrIgnore([
            ['id' => 16, 'kamar_id' => 22, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-04 17:00:00', 'updated_at' => null],
            ['id' => 17, 'kamar_id' => 22, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-05 05:49:36', 'updated_at' => null],
            ['id' => 18, 'kamar_id' => 15, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-11 06:08:00', 'updated_at' => null],
            ['id' => 19, 'kamar_id' => 15, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-12 06:05:00', 'updated_at' => null],
            ['id' => 20, 'kamar_id' => 16, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-11 06:11:00', 'updated_at' => null],
            ['id' => 21, 'kamar_id' => 16, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-12 06:15:00', 'updated_at' => null],
            ['id' => 22, 'kamar_id' => 21, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-11-15 06:24:37', 'updated_at' => null],
            ['id' => 23, 'kamar_id' => 21, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-12-16 06:43:25', 'updated_at' => null],
            ['id' => 24, 'kamar_id' => 19, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-11-25 08:26:00', 'updated_at' => null],
            ['id' => 25, 'kamar_id' => 17, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-20 06:49:00', 'updated_at' => null],
            ['id' => 26, 'kamar_id' => 17, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-20 06:53:00', 'updated_at' => null],
            ['id' => 27, 'kamar_id' => 18, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-28 08:40:00', 'updated_at' => null],
            ['id' => 28, 'kamar_id' => 23, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created _at' => '2024-11-03 08:48:00', 'updated_at' => null],
            ['id' => 29, 'kamar_id' => 23, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-03 08:50:00', 'updated_at' => null],
            ['id' => 30, 'kamar_id' => 27, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-10-30 08:53:00', 'updated_at' => null],
            ['id' => 31, 'kamar_id' => 27, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-12-16 08:57:00', 'updated_at' => null],
            ['id' => 32, 'kamar_id' => 28, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-11-06 09:00:00', 'updated_at' => null],
            ['id' => 33, 'kamar_id' => 28, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-12-06 09:03:00', 'updated_at' => null],
            ['id' => 34, 'kamar_id' => 29, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-06 09:09:00', 'updated_at' => null],
            ['id' => 35, 'kamar_id' => 29, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-06 09:11:00', 'updated_at' => null],
            ['id' => 36, 'kamar_id' => 30, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-09 09:17:00', 'updated_at' => null],
            ['id' => 37, 'kamar_id' => 30, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-03 08:50:00', 'updated_at' => null],
            ['id' => 38, 'kamar_id' => 34, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-10 09:22:00', 'updated_at' => null],
            ['id' => 39, 'kamar_id' => 34, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-10 09:23:00', 'updated_at' => null],
            ['id' => 40, 'kamar_id' => 31, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-11 09:27:00', 'updated_at' => null],
            ['id' => 41, 'kamar_id' => 31, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-12-11 09:29:00', 'updated_at' => null],
            ['id' => 42, 'kamar_id' => 33, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-19 09:35:00', 'updated_at' => null],
            ['id' => 43, 'kamar_id' => 33, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-19 09:36:00', 'updated_at' => null],
            ['id' => 44, 'kamar_id' => 32, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-17 09:40:00', 'updated_at' => null],
            ['id' => 45, 'kamar_id' => 32, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-12-17 09:42:00', 'updated_at' => null],
            ['id' => 46, 'kamar_id' => 24, 'item' => null, 'tipe' => 'Masuk', 'harga' => '325000', 'created_at' => '2024-11-20 09:45:00', 'updated_at' => null],
            ['id' => 47, 'kamar_id' => 24, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-12-20 09:46:00', 'updated_at' => null],
            ['id' => 48, 'kamar_id' => 25, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-11-26 09:49:00', 'updated_at' => null],
            ['id' => 49, 'kamar_id' => 35, 'item' => null, 'tipe' => 'Masuk', 'harga' => '575000', 'created_at' => '2024-12-02 09:52:00', 'updated_at' => null],
            ['id' => 50, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '200000', 'created_at' => '2024-10-27 09:52:00', 'updated_at' => null],
            ['id' => 51, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '4000', 'created_at' => '2024-10-27 09:52:00', 'updated_at' => null],
            ['id' => 52, 'kamar_id' => null, 'item' => 'Sampah', 'tipe' => 'Keluar', 'harga' => '50000', 'created_at' => '2024-10-27 09:52:00', 'updated_at' => null],
            ['id' => 53, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '100000', 'created_at' => '2024-11-04 09:52:00', 'updated_at' => null],
            ['id' => 54, 'kamar_id' => null, 'item' => 'Wifi', 'tipe' => 'Keluar', 'harga' => '286000', 'created_at' => '2024-10-27 09:52:00', 'updated_at' => null],
            ['id' => 55, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '100000', 'created_at' => '2024-11-15 09:52:00', 'updated_at' => null],
            ['id' => 56, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '50000', 'created_at' => '2024-11-18 09:52:00', 'updated_at' => null],
            ['id' => 57, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '4000', 'created_at' => '2024-11-19 09:52:00', 'updated_at' => null],
            ['id' => 58, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '100000', 'created_at' => '2024-10-30 09:52:00', 'updated_at' => null],
            ['id' => 60, 'kamar_id' => null, 'item' => 'Sampah', 'tipe' => 'Keluar', 'harga' => '50000', 'created_at' => '2024-11-01 09:52:00', 'updated_at' => null],
            ['id' => 61, 'kamar_id' => null, 'item' => 'Air', 'tipe' => 'Keluar', 'harga' => '4500', 'created_at' => '2024-11-03 09:52:00', 'updated_at' => null],
            ['id' => 62, 'kamar_id' => null, 'item' => 'Gas', 'tipe' => 'Keluar', 'harga' => '19500', 'created_at' => '2024-11-03 09:52:00', 'updated_at' => null],
            ['id' => 63, 'kamar_id' => null, 'item' => 'Air', 'tipe' => 'Keluar', 'harga' => '4000', 'created_at' => '2024-11-04 09:52:00', 'updated_at' => null],
            ['id' => 64, 'kamar_id' => null, 'item' => 'Wifi', 'tipe' => 'Keluar', 'harga' => '340500', 'created_at' => '2024-11-04 09:52:00', 'updated_at' => null],
            ['id' => 65, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '4000', 'created_at' => '2024-11-06 09:52:00', 'updated_at' => null],
            ['id' => 66, 'kamar_id' => null, 'item' => 'Gas', 'tipe' => 'Keluar', 'harga' => '22000', 'created_at' => '2024-11-07 09:52:00', 'updated_at' => null],
            ['id' => 67, 'kamar_id' => null, 'item' => 'Sampah', 'tipe' => 'Keluar', 'harga' => '50000', 'created_at' => '2024-10-27 09:52:00', 'updated_at' => null],
            ['id' => 68, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '100000', 'created_at' => '2024-11-09 09:52:00', 'updated_at' => null],
            ['id' => 69, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '4000', 'created_at' => '2024-11-14 09:52:00', 'updated_at' => null],
            ['id' => 70, 'kamar_id' => null, 'item' => 'Sunlight', 'tipe' => 'Keluar', 'harga' => '7000', 'created_at' => '2024-11-14 09:52:00', 'updated_at' => null],
            ['id' => 71, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '8000', 'created_at' => '2024-11-07 09:52:00', 'updated_at' => null],
            ['id' => 72, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '100000', 'created_at' => '2024-11-24 09:52:00', 'updated_at' => null],
            ['id' => 73, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '8000', 'created_at' => '2024-11-25 09:52:00', 'updated_at' => null],
            ['id' => 74, 'kamar_id' => null, 'item' => 'Sampah', 'tipe' => 'Keluar', 'harga' => '50000', 'created_at' => '2024-12-01 09:52:00', 'updated_at' => null],
            ['id' => 75, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '100000', 'created_at' => '2024-11-28 09:52:00', 'updated_at' => null],
            ['id' => 76, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '4000', 'created_at' => '2024-12-01 09:52:00', 'updated_at' => null],
            ['id' => 77, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '100000', 'created_at' => '2024-12-04 09:52:00', 'updated_at' => null],
            ['id' => 78, 'kamar_id' => null, 'item' => 'Wifi', 'tipe' => 'Keluar', 'harga' => '340500', 'created_at' => '2024-11-05 09:52:00', 'updated_at' => null],
            ['id' => 79, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '12000', 'created_at' => '2024-12-09 09:52:00', 'updated_at' => null],
            ['id' => 80, 'kamar_id' => null, 'item' => 'Lampu Kamar Mandi', 'tipe' => 'Keluar', 'harga' => '19000', 'created_at' => '2024-12-10 09:52:00', 'updated_at' => null],
            ['id' => 81, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '100000', 'created_at' => '2024-12-15 09:52:00', 'updated_at' => null],
            ['id' => 82, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '4000', 'created_at' => '2024-12-12 09:52:00', 'updated_at' => null],
            ['id' => 83, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '4000', 'created_at' => '2024-12-20 09:52:00', 'updated_at' => null],
            ['id' => 84, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '200000', 'created_at' => '2024-11-28 09:52:00', 'updated_at' => null],
            ['id' => 85, 'kamar_id' => null, 'item' => 'Air Galon', 'tipe' => 'Keluar', 'harga' => '4000', 'created_at' => '2024-12-02 09:52:00', 'updated_at' => null],
            ['id' => 86, 'kamar_id' => null, 'item' => 'Sampah', 'tipe' => 'Keluar', 'harga' => '50000', 'created_at' => '2024-12-03 09:52:00', 'updated_at' => null],
            ['id' => 87, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '100000', 'created_at' => '2024-12-06 09:52:00', 'updated_at' => null],
            ['id' => 88, 'kamar_id' => null, 'item' => 'Token Listrik', 'tipe' => 'Keluar', 'harga' => '150000', 'created_at' => '2024-12-17 09:52:00', 'updated_at' => null],
        ]);


        
        DB::table('testis')->insertOrIgnore([
            ['id' => 13, 'user_id' => 69, 'testi' => NULL, 'created_at' => '2024-12-26 05:40:47', 'updated_at' => '2024-12-28 04:54:27'],
            ['id' => 14, 'user_id' => 71, 'testi' => NULL, 'created_at' => '2024-12-26 06:03:45', 'updated_at' => '2024-12-28 04:55:01'],
            ['id' => 15, 'user_id' => 72, 'testi' => '"Pemilik kost ramah dan selalu siap membantu."', 'created_at' => '2024-12-26 06:12:21', 'updated_at' => '2024-12-26 06:15:38'],
            ['id' => 16, 'user_id' => 73, 'testi' => NULL, 'created_at' => '2024-12-26 06:25:07', 'updated_at' => '2024-12-26 06:25:07'],
            ['id' => 18, 'user_id' => 74, 'testi' => '"Lokasi strategis, dekat dengan kampus dan pusat perbelanjaan."', 'created_at' => '2024-12-26 06:43:46', 'updated_at' => '2024-12-26 06:46:47'],
            ['id' => 19, 'user_id' => 75, 'testi' => '"Kamar bersih, dan kebersihan selalu terjaga."', 'created_at' => '2024-12-26 06:49:34', 'updated_at' => '2024-12-26 06:49:45'],
            ['id' => 20, 'user_id' => 76, 'testi' => '"Sinyal WiFi cepat, sangat mendukung pekerjaan dan studi online."', 'created_at' => '2024-12-26 08:27:14', 'updated_at' => '2024-12-26 08:37:26'],
            ['id' => 21, 'user_id' => 77, 'testi' => '"Lingkungan tenang, tidak ada gangguan dari luar."', 'created_at' => '2024-12-26 08:40:30', 'updated_at' => '2024-12-26 08:46:33'],
            ['id' => 22, 'user_id' => 78, 'testi' => NULL, 'created_at' => '2024-12-26 08:48:46', 'updated_at' => '2024-12-26 08:48:46'],
            ['id' => 23, 'user_id' => 79, 'testi' => '"Keamanan terjamin dengan CCTV dan akses gerbang yang tertutup."', 'created_at' => '2024-12-26 08:53:23', 'updated_at' => '2024-12-26 08:55:15'],
            ['id' => 24, 'user_id' => 80, 'testi' => NULL, 'created_at' => '2024-12-26 08:57:30', 'updated_at' => '2024-12-26 08:57:30'],
            ['id' => 25, 'user_id' => 81, 'testi' => '"Area parkir luas, tidak perlu khawatir soal kendaraan."', 'created_at' => '2024-12-26 09:00:44', 'updated_at' => '2024-12-26 09:02:28'],
            ['id' => 26, 'user_id' => 82, 'testi' => '"Ada dapur bersama yang bersih dan nyaman digunakan."', 'created_at' => '2024-12-26 09:09:18', 'updated_at' => '2024-12-26 09:11:36'],
            ['id' => 27, 'user_id' => 83, 'testi' => '"Kost ini sangat mendukung aktivitas saya sebagai mahasiswa."', 'created_at' => '2024-12-26 09:14:08', 'updated_at' => '2024-12-26 09:15:12'],
            ['id' => 28, 'user_id' => 84, 'testi' => NULL, 'created_at' => '2024-12-26 09:20:19', 'updated_at' => '2024-12-26 09:20:19'],
            ['id' => 29, 'user_id' => 85, 'testi' => '"Harga kost terjangkau untuk fasilitas yang diberikan."', 'created_at' => '2024-12-26 09:22:50', 'updated_at' => '2024-12-26 09:24:10'],
            ['id' => 30, 'user_id' => 86, 'testi' => '"Saya betah tinggal di sini karena suasananya homey."', 'created_at' => '2024-12-26 09:28:30', 'updated_at' => '2024-12-26 09:29:23'],
            ['id' => 31, 'user_id' => 87, 'testi' => '"Sistem pengelolaan kost yang profesional, tidak pernah ada masalah."', 'created_at' => '2024-12-26 09:35:33', 'updated_at' => '2024-12-26 09:38:24'],
            ['id' => 32, 'user_id' => 88, 'testi' => '"Penghuni lainnya ramah, seperti keluarga sendiri."', 'created_at' => '2024-12-26 09:41:22', 'updated_at' => '2024-12-26 09:42:40'],
            ['id' => 33, 'user_id' => 89, 'testi' => '"Aturan kost jelas dan ditegakkan dengan baik."', 'created_at' => '2024-12-26 09:45:49', 'updated_at' => '2024-12-26 09:47:54'],
            ['id' => 34, 'user_id' => 90, 'testi' => '"Dekat dengan transportasi umum, sangat memudahkan mobilitas."', 'created_at' => '2024-12-26 09:49:35', 'updated_at' => '2024-12-26 09:49:46'],
            ['id' => 35, 'user_id' => 91, 'testi' => '"Saya sangat merekomendasikan kost ini untuk siapa saja yang mencari kenyamanan."', 'created_at' => '2024-12-26 09:52:27', 'updated_at' => '2024-12-26 09:53:13'],
            ['id' => 39, 'user_id' => 83, 'testi' => NULL, 'created_at' => '2024-12-29 06:39:11', 'updated_at' => '2024-12-29 06:39:11'],
            ['id' => 40, 'user_id' => 83, 'testi' => NULL, 'created_at' => '2024-12-29 06:41:51', 'updated_at' => '2024-12-29 06:41:51'],
            ['id' => 41, 'user_id' => 79, 'testi' => NULL, 'created_at' => '2024-12-29 06:59:10', 'updated_at' => '2024-12-29 06:59:10'],
        ]);
        
        DB::table('keluhans')->insertOrIgnore([
            ['id' => 14, 'user_id' => 91, 'judul' => 'Lantai Kotor', 'keluhan' => 'Lantai kotor di lorong kamar', 'gambarbukti' => '20241227085415_IMG-20241227-WA0027.jpg', 'status' => 'selesai', 'created_at' => '2024-12-27 01:54:15', 'updated_at' => '2024-12-27 01:54:43'],
            ['id' => 15, 'user_id' => 91, 'judul' => 'Dapur Kotor', 'keluhan' => 'Dapur kotor belum di bersihkan', 'gambarbukti' => '20241227085543_k1.jpg', 'status' => 'pending', 'created_at' => '2024-12-27 01:55:43', 'updated_at' => '2024-12-27 01:55:43'],
            ['id' => 16, 'user_id' => 90, 'judul' => 'Parkir', 'keluhan' => 'Parkir Sembarangan di lorong, susah motor lainnya keluar', 'gambarbukti' => '20241227090728_IMG-20241227-WA0028.jpg', 'status' => 'pending', 'created_at' => '2024-12-27 02:07:28', 'updated_at' => '2024-12-27 02:07:28'],
            ['id' => 17, 'user_id' => 89, 'judul' => 'Lampu', 'keluhan' => 'Lampu dapur mati tidak bisa hidup', 'gambarbukti' => '20241227090851_IMG-20241227-WA0030.jpg', 'status' => 'selesai', 'created_at' => '2024-12-27 02:08:51', 'updated_at' => '2024-12-27 02:54:30'],
            ['id' => 18, 'user_id' => 88, 'judul' => 'Kamar Mandi', 'keluhan' => 'Kamar Mandi Kotor Di Lantainya', 'gambarbukti' => '20241227091059_IMG-20241227-WA0029.jpg', 'status' => 'tolak', 'created_at' => '2024-12-27 02:10:59', 'updated_at' => '2024-12-29 14:50:00'],
        ]);

        DB::table('tentangs')->insertOrIgnore([
            ['id' => 1, 'poin' => 'Lokasi Strategis', 'desk' => 'Berada di area yang mudah diakses, dekat dengan pusat pendidikan, perkantoran, dan fasilitas umum seperti pasar, minimarket, serta transportasi publik.', 'created_at' => '2024-12-14 10:53:01', 'updated_at' => null],
            ['id' => 2, 'poin' => 'Fasilitas Modern', 'desk' => 'Dilengkapi dengan akses internet cepat, sistem keamanan 24 jam, kamar mandi dalam, dan ruang bersama yang nyaman untuk penghuni.', 'created_at' => '2024-12-08 22:24:08', 'updated_at' => null],
            ['id' => 3, 'poin' => 'Lingkungan Nyaman dan Tenang', 'desk' => 'Suasana kost yang asri, bersih, dan jauh dari kebisingan, mendukung penghuni untuk beristirahat maupun bekerja dengan nyaman.', 'created_at' => '2024-12-08 22:24:08', 'updated_at' => null],
            ['id' => 4, 'poin' => 'Sistem Keamanan Terjamin', 'desk' => 'CCTV aktif 24 jam dan akses terbatas bagi penghuni memastikan keamanan seluruh penghuni dan properti mereka.', 'created_at' => '2024-12-08 22:24:08', 'updated_at' => null],
            ['id' => 5, 'poin' => 'Pelayanan Ramah dan Profesional', 'desk' => 'Pengelola selalu siap membantu kebutuhan penghuni dengan sikap ramah dan tanggap.', 'created_at' => '2024-12-08 22:24:08', 'updated_at' => null],
            ['id' => 6, 'poin' => 'Harga Terjangkau', 'desk' => 'Menawarkan tarif yang kompetitif dengan berbagai pilihan paket sewa sesuai kebutuhan penghuni, tanpa mengurangi kualitas fasilitas dan pelayanan.', 'created_at' => '2024-12-08 22:24:08', 'updated_at' => null],
        ]);

    }
}