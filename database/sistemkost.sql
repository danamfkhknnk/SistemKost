-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2024 at 04:02 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemkost`
--

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint UNSIGNED NOT NULL,
  `wa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `wa`, `fb`, `logo`, `galeri`, `created_at`, `updated_at`, `alamat`) VALUES
(1, '6285848373051', 'frandy.852333', '20241213004154_IMG_4553.PNG', '20241223144803_dapur.jpg,20241223144803_dapur2.jpg,20241223144803_garasi.jpg,20241223144803_km2.jpg,20241223144803_km3.jpg,20241223144803_rooftop.jpg,20241223144803_ruangtamu.jpg', NULL, '2024-12-23 07:48:03', 'Karang Pakis Rt 6 Rw 1, Desa Jepang Pakis, Kecamatan Jati, Kabupaten Kudus, Jawa Tengah - 59342');

-- --------------------------------------------------------

--
-- Table structure for table `kamars`
--

CREATE TABLE `kamars` (
  `id` bigint UNSIGNED NOT NULL,
  `nokamar` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` enum('AC','Kipas Angin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('tersedia','terisi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarkamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamars`
--

INSERT INTO `kamars` (`id`, `nokamar`, `tipe`, `harga`, `status`, `gambarkamar`, `created_at`, `updated_at`) VALUES
(15, '1', 'Kipas Angin', '325000', 'terisi', '20241223155708_1.jpg,20241223155708_kipas2.jpg,20241223155708_km.jpg,20241223155708_dapur.jpg', '2024-12-03 00:49:32', '2024-12-26 06:03:45'),
(16, '3', 'Kipas Angin', '325000', 'terisi', '20241223155723_3.jpg,20241223155723_kipas2.jpg,20241223155723_km.jpg,20241223155723_dapur.jpg', '2024-12-03 00:49:44', '2024-12-26 06:12:21'),
(17, '4', 'Kipas Angin', '325000', 'terisi', '20241223155746_4.jpg,20241223155746_kipas2.jpg,20241223155746_km.jpg,20241223155746_dapur.jpg', '2024-12-03 00:49:56', '2024-12-26 06:49:34'),
(18, '5', 'Kipas Angin', '325000', 'terisi', '20241223155803_5.jpg,20241223155803_kipas2.jpg,20241223155803_km.jpg,20241223155803_dapur.jpg', '2024-12-08 23:34:32', '2024-12-26 08:40:30'),
(19, '6', 'AC', '575000', 'terisi', '20241223145746_6.jpg,20241223145746_ac2.jpg,20241223145746_dapur.jpg,20241223145746_km.jpg', '2024-12-10 21:17:23', '2024-12-26 08:27:14'),
(21, '7', 'AC', '575000', 'terisi', '20241223145826_7.jpg,20241223145826_ac2.jpg,20241223145826_dapur.jpg,20241223145826_km.jpg', '2024-12-10 21:21:56', '2024-12-26 06:43:46'),
(22, '2', 'Kipas Angin', '325000', 'terisi', '20241223155826_2.jpg,20241223155826_kipas2.jpg,20241223155826_km.jpg,20241223155826_dapur.jpg', '2024-12-23 07:58:52', '2024-12-26 05:40:47'),
(23, '8', 'Kipas Angin', '325000', 'terisi', '20241223150308_8.jpg,20241223150308_dapur2.jpg,20241223150308_kipas1.jpg,20241223150308_km3.jpg', '2024-12-23 08:00:21', '2024-12-26 08:48:46'),
(24, '9', 'Kipas Angin', '325000', 'terisi', '20241223150230_9.jpg,20241223150230_dapur2.jpg,20241223150230_kipas1.jpg,20241223150230_km3.jpg', '2024-12-23 08:02:30', '2024-12-26 09:45:49'),
(25, '10', 'Kipas Angin', '325000', 'terisi', '20241223154303_10.jpg,20241223154303_dapur2.jpg,20241223154303_kipas1.jpg,20241223154303_km3.jpg', '2024-12-23 08:04:38', '2024-12-26 09:49:35'),
(27, '11', 'Kipas Angin', '325000', 'terisi', '20241223155116_11.jpg,20241223155116_kipas1.jpg,20241223155116_km3.jpg,20241223155116_dapur2.jpg', '2024-12-23 08:46:48', '2024-12-26 08:57:30'),
(28, '12', 'Kipas Angin', '325000', 'terisi', '20241223155157_12.jpg,20241223155157_kipas1.jpg,20241223155157_km3.jpg,20241223155157_dapur2.jpg', '2024-12-23 08:47:09', '2024-12-26 09:00:44'),
(29, '13', 'Kipas Angin', '325000', 'terisi', '20241223155226_13.jpg,20241223155226_kipas1.jpg,20241223155226_km3.jpg,20241223155226_dapur2.jpg', '2024-12-23 08:47:40', '2024-12-26 09:09:18'),
(30, '14', 'Kipas Angin', '325000', 'terisi', '20241223155250_14.jpg,20241223155250_kipas1.jpg,20241223155250_km3.jpg,20241223155250_dapur2.jpg', '2024-12-23 08:48:25', '2024-12-26 09:20:19'),
(31, '15', 'Kipas Angin', '325000', 'terisi', '20241223155327_15.jpg,20241223155327_kipas1.jpg,20241223155327_km3.jpg,20241223155327_dapur2.jpg', '2024-12-23 08:49:06', '2024-12-26 09:28:30'),
(32, '16', 'Kipas Angin', '325000', 'terisi', '20241223155359_16.jpg,20241223155359_kipas1.jpg,20241223155359_km3.jpg,20241223155359_dapur2.jpg', '2024-12-23 08:49:29', '2024-12-26 09:41:22'),
(33, '17', 'Kipas Angin', '325000', 'terisi', '20241223155443_17.jpg,20241223155443_kipas1.jpg,20241223155443_km3.jpg,20241223155443_dapur2.jpg', '2024-12-23 08:54:43', '2024-12-26 09:35:33'),
(34, '18', 'Kipas Angin', '325000', 'terisi', '20241223155504_18.jpg,20241223155504_kipas1.jpg,20241223155504_km3.jpg,20241223155504_dapur2.jpg', '2024-12-23 08:55:04', '2024-12-26 09:22:50'),
(35, '19', 'Kipas Angin', '325000', 'terisi', '20241223155524_19.jpg,20241223155524_kipas1.jpg,20241223155524_km3.jpg,20241223155524_dapur2.jpg', '2024-12-23 08:55:24', '2024-12-26 09:52:27'),
(36, '20', 'Kipas Angin', '325000', 'tersedia', '20241227093304_4.jpg,20241227093304_ac.jpg,20241227093304_dapur2.jpg,20241227093304_km.jpg', '2024-12-27 02:33:04', '2024-12-29 08:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `keluhans`
--

CREATE TABLE `keluhans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarbukti` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('tolak','selesai','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluhans`
--

INSERT INTO `keluhans` (`id`, `user_id`, `judul`, `keluhan`, `gambarbukti`, `status`, `created_at`, `updated_at`) VALUES
(14, 91, 'Lantai Kotor', 'Lantai kotor di lorong kamar', '20241227085415_IMG-20241227-WA0027.jpg', 'selesai', '2024-12-27 01:54:15', '2024-12-27 01:54:43'),
(15, 91, 'Dapur Kotor', 'Dapur kotor belum di bersihkan', '20241227085543_k1.jpg', 'pending', '2024-12-27 01:55:43', '2024-12-27 01:55:43'),
(16, 90, 'Parkir', 'Parkir Sembarangan di lorong, susah motor lainnya keluar', '20241227090728_IMG-20241227-WA0028.jpg', 'pending', '2024-12-27 02:07:28', '2024-12-27 02:07:28'),
(17, 89, 'Lampu', 'Lampu dapur mati tidak bisa hidup', '20241227090851_IMG-20241227-WA0030.jpg', 'selesai', '2024-12-27 02:08:51', '2024-12-27 02:54:30'),
(18, 88, 'Kamar Mandi', 'Kamar Mandi Kotor Di Lantainya', '20241227091059_IMG-20241227-WA0029.jpg', 'tolak', '2024-12-27 02:10:59', '2024-12-29 14:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint UNSIGNED NOT NULL,
  `kamar_id` bigint UNSIGNED DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe` enum('Keluar','Masuk') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Keluar',
  `harga` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id`, `kamar_id`, `item`, `tipe`, `harga`, `created_at`, `updated_at`) VALUES
(16, 22, NULL, 'Masuk', '325000', '2024-11-04 17:00:00', NULL),
(17, 22, NULL, 'Masuk', '325000', '2024-12-05 05:49:36', NULL),
(18, 15, NULL, 'Masuk', '325000', '2024-11-11 06:08:00', NULL),
(19, 15, NULL, 'Masuk', '325000', '2024-11-12 06:05:00', NULL),
(20, 16, NULL, 'Masuk', '325000', '2024-12-11 06:11:00', NULL),
(21, 16, NULL, 'Masuk', '325000', '2024-12-12 06:15:00', NULL),
(22, 21, NULL, 'Masuk', '575000', '2024-11-15 06:24:37', NULL),
(23, 21, NULL, 'Masuk', '575000', '2024-12-16 06:43:25', NULL),
(24, 19, NULL, 'Masuk', '575000', '2024-11-25 08:26:00', NULL),
(25, 17, NULL, 'Masuk', '325000', '2024-11-20 06:49:00', NULL),
(26, 17, NULL, 'Masuk', '325000', '2024-12-20 06:53:00', NULL),
(27, 18, NULL, 'Masuk', '325000', '2024-11-28 08:40:00', NULL),
(28, 23, NULL, 'Masuk', '325000', '2024-11-03 08:48:00', NULL),
(29, 23, NULL, 'Masuk', '325000', '2024-12-03 08:50:00', NULL),
(30, 27, NULL, 'Masuk', '325000', '2024-10-30 08:53:00', NULL),
(31, 27, NULL, 'Masuk', '575000', '2024-12-16 08:57:00', NULL),
(32, 28, NULL, 'Masuk', '575000', '2024-11-06 09:00:00', NULL),
(33, 28, NULL, 'Masuk', '575000', '2024-12-06 09:03:00', NULL),
(34, 29, NULL, 'Masuk', '325000', '2024-11-06 09:09:00', NULL),
(35, 29, NULL, 'Masuk', '325000', '2024-12-06 09:11:00', NULL),
(36, 30, NULL, 'Masuk', '325000', '2024-12-09 09:17:00', NULL),
(37, 30, NULL, 'Masuk', '325000', '2024-12-03 08:50:00', NULL),
(38, 34, NULL, 'Masuk', '325000', '2024-11-10 09:22:00', NULL),
(39, 34, NULL, 'Masuk', '325000', '2024-12-10 09:23:00', NULL),
(40, 31, NULL, 'Masuk', '325000', '2024-11-11 09:27:00', NULL),
(41, 31, NULL, 'Masuk', '575000', '2024-12-11 09:29:00', NULL),
(42, 33, NULL, 'Masuk', '325000', '2024-11-19 09:35:00', NULL),
(43, 33, NULL, 'Masuk', '325000', '2024-12-19 09:36:00', NULL),
(44, 32, NULL, 'Masuk', '325000', '2024-11-17 09:40:00', NULL),
(45, 32, NULL, 'Masuk', '325000', '2024-12-17 09:42:00', NULL),
(46, 24, NULL, 'Masuk', '325000', '2024-11-20 09:45:00', NULL),
(47, 24, NULL, 'Masuk', '575000', '2024-12-20 09:46:00', NULL),
(48, 25, NULL, 'Masuk', '575000', '2024-11-26 09:49:00', NULL),
(49, 35, NULL, 'Masuk', '575000', '2024-12-02 09:52:00', NULL),
(50, NULL, 'Token Listrik', 'Keluar', '200000', '2024-10-27 09:52:00', NULL),
(51, NULL, 'Air Galon', 'Keluar', '4000', '2024-10-27 09:52:00', NULL),
(52, NULL, 'Sampah', 'Keluar', '50000', '2024-10-27 09:52:00', NULL),
(53, NULL, 'Token Listrik', 'Keluar', '100000', '2024-11-04 09:52:00', NULL),
(54, NULL, 'Wifi', 'Keluar', '286000', '2024-10-27 09:52:00', NULL),
(55, NULL, 'Token Listrik', 'Keluar', '100000', '2024-11-15 09:52:00', NULL),
(56, NULL, 'Token Listrik', 'Keluar', '50000', '2024-11-18 09:52:00', NULL),
(57, NULL, 'Air Galon', 'Keluar', '4000', '2024-11-19 09:52:00', NULL),
(58, NULL, 'Token Listrik', 'Keluar', '100000', '2024-10-30 09:52:00', NULL),
(59, NULL, 'Air Galon', 'Keluar', '4000', '2024-10-30 09:52:00', NULL),
(60, NULL, 'Sampah', 'Keluar', '50000', '2024-11-01 09:52:00', NULL),
(61, NULL, 'Air', 'Keluar', '4500', '2024-11-03 09:52:00', NULL),
(62, NULL, 'Gas', 'Keluar', '19500', '2024-11-03 09:52:00', NULL),
(63, NULL, 'Air', 'Keluar', '4000', '2024-11-04 09:52:00', NULL),
(64, NULL, 'Wifi', 'Keluar', '340500', '2024-11-04 09:52:00', NULL),
(65, NULL, 'Air Galon', 'Keluar', '4000', '2024-11-06 09:52:00', NULL),
(66, NULL, 'Gas', 'Keluar', '22000', '2024-11-07 09:52:00', NULL),
(67, NULL, 'Sampah', 'Keluar', '50000', '2024-10-27 09:52:00', NULL),
(68, NULL, 'Token Listrik', 'Keluar', '100000', '2024-11-09 09:52:00', NULL),
(69, NULL, 'Air Galon', 'Keluar', '4000', '2024-11-14 09:52:00', NULL),
(70, NULL, 'Sunlight', 'Keluar', '7000', '2024-11-14 09:52:00', NULL),
(71, NULL, 'Air Galon', 'Keluar', '8000', '2024-11-07 09:52:00', NULL),
(72, NULL, 'Token Listrik', 'Keluar', '100000', '2024-11-24 09:52:00', NULL),
(73, NULL, 'Air Galon', 'Keluar', '8000', '2024-11-25 09:52:00', NULL),
(74, NULL, 'Sampah', 'Keluar', '50000', '2024-12-01 09:52:00', NULL),
(75, NULL, 'Token Listrik', 'Keluar', '100000', '2024-11-28 09:52:00', NULL),
(76, NULL, 'Air Galon', 'Keluar', '4000', '2024-12-01 09:52:00', NULL),
(77, NULL, 'Token Listrik', 'Keluar', '100000', '2024-12-04 09:52:00', NULL),
(78, NULL, 'Wifi', 'Keluar', '340500', '2024-11-05 09:52:00', NULL),
(79, NULL, 'Air Galon', 'Keluar', '12000', '2024-12-09 09:52:00', NULL),
(80, NULL, 'Lampu Kamar Mandi', 'Keluar', '19000', '2024-12-10 09:52:00', NULL),
(81, NULL, 'Token Listrik', 'Keluar', '100000', '2024-12-15 09:52:00', NULL),
(82, NULL, 'Air Galon', 'Keluar', '4000', '2024-12-12 09:52:00', NULL),
(83, NULL, 'Air Galon', 'Keluar', '4000', '2024-12-20 09:52:00', NULL),
(84, NULL, 'Token Listrik', 'Keluar', '200000', '2024-11-28 09:52:00', NULL),
(85, NULL, 'Air Galon', 'Keluar', '4000', '2024-12-02 09:52:00', NULL),
(86, NULL, 'Sampah', 'Keluar', '50000', '2024-12-03 09:52:00', NULL),
(87, NULL, 'Token Listrik', 'Keluar', '100000', '2024-12-06 09:52:00', NULL),
(88, NULL, 'Token Listrik', 'Keluar', '150000', '2024-12-17 09:52:00', NULL),
(89, NULL, 'Air Galon', 'Keluar', '4000', '2024-12-02 09:52:00', NULL),
(90, NULL, 'Air Galon', 'Keluar', '4500', '2024-12-10 09:52:00', NULL),
(91, NULL, 'Wifi', 'Keluar', '285500', '2024-12-05 09:52:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_19_031534_create_kamar', 1),
(5, '2024_11_19_034424_create_penyewas', 1),
(6, '2024_11_19_034504_create_keluhans', 1),
(7, '2024_11_28_081700_changecolomkamar', 2),
(10, '2024_12_02_013000_changekolomgambarkamar', 3),
(11, '2024_12_03_075831_createtabelpenghuni', 3),
(12, '2024_12_07_061017_createtabelinformasi', 4),
(13, '2024_12_07_061553_createtabelfasilitas', 4),
(14, '2024_12_07_061726_createtabeltestimoni', 4),
(15, '2024_12_09_042420_add_new_column_to_infos_table', 5),
(18, '2024_12_10_083628_createtablepembayarans', 6),
(19, '2024_12_12_090844_createcolomjatuhtempo', 7),
(20, '2024_12_13_054650_createcolomnohpusers', 8),
(25, '2024_12_29_120543_create_laporans_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('danamifkhakunnurkhasan@gmail.com', '0yEv9PsOqi464ybns7DNfMPLbQtUGiNvXCgmGgTio8uoYOevoJOTUiK35qzk', '2024-12-27 02:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `kamar_id` bigint UNSIGNED NOT NULL,
  `penghuni_id` bigint UNSIGNED DEFAULT NULL,
  `status` enum('pending','selesai','batal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` enum('baru','sewa') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snap_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jatuhtempo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `user_id`, `kamar_id`, `penghuni_id`, `status`, `tipe`, `snap_token`, `created_at`, `updated_at`, `jatuhtempo`) VALUES
(65, 69, 22, 37, 'selesai', 'sewa', '3216eb91-f7c8-46e2-aa65-234e75c2c45d', '2024-11-04 17:00:00', '2024-11-05 05:40:47', '2024-11-05'),
(66, 69, 22, 37, 'selesai', 'sewa', 'f534c306-0928-4a3d-b0ab-67c45f3d8e8e', '2024-12-05 05:49:36', '2024-12-04 17:00:00', '2024-12-05'),
(67, 71, 15, 38, 'selesai', 'sewa', '69677f64-df1d-49e4-b019-62bd15e9925b', '2024-11-11 06:08:06', '2024-11-10 17:00:00', '2024-11-11'),
(68, 71, 15, 38, 'selesai', 'sewa', 'f901109a-dca7-494f-a9cf-b6cc00551d81', '2024-12-11 06:05:37', '2024-12-11 06:06:48', '2024-12-11'),
(69, 72, 16, 39, 'selesai', 'sewa', '8d0a0571-26fc-4fa5-ad56-4c9376b46eae', '2024-11-12 06:11:58', '2024-11-12 06:12:21', '2024-11-12'),
(70, 72, 16, 39, 'selesai', 'sewa', '85e73040-a801-4f13-a47d-ca952ca9e16b', '2024-12-12 06:15:18', '2024-12-12 06:16:01', '2024-12-12'),
(71, 73, 21, 40, 'selesai', 'sewa', '2fab474e-563b-4cea-9af7-84ca22a38af9', '2024-11-15 06:24:37', '2024-12-26 06:29:02', '2024-11-15'),
(72, 74, 21, 42, 'selesai', 'baru', 'c65c1a43-92d2-46d5-92df-15fe3a6926c6', '2024-12-16 06:43:25', '2024-12-16 06:43:46', NULL),
(73, 75, 17, 43, 'selesai', 'sewa', 'cd8e3691-7909-4e54-87ae-ee59750c070d', '2024-11-20 06:49:12', '2024-11-20 06:49:34', '2024-11-20'),
(74, 75, 17, 43, 'selesai', 'sewa', 'b15aeddf-b1a0-47a0-b1df-f65f5cf422cb', '2024-12-20 06:53:06', '2024-12-20 06:53:38', '2024-12-20'),
(75, 76, 19, 44, 'selesai', 'sewa', '7b628729-f0e2-459c-b0e7-5ce423867f30', '2024-11-25 08:26:49', '2024-11-25 08:27:14', '2024-11-25'),
(76, 77, 18, 45, 'selesai', 'sewa', 'ed2a3bf1-cdc4-4a66-8368-881c38bc39cf', '2024-11-28 08:40:04', '2024-11-28 08:40:30', '2024-11-28'),
(77, 78, 23, 46, 'selesai', 'sewa', '64216ec2-82e1-4bb1-9054-0e6adca91386', '2024-11-03 08:48:26', '2024-11-03 08:48:46', '2024-11-03'),
(78, 78, 23, 46, 'selesai', 'sewa', '7a0f7a1a-8780-4dd6-910c-0553873dd05b', '2024-12-03 08:50:23', '2024-12-03 08:50:47', '2024-12-03'),
(79, 79, 27, 47, 'selesai', 'sewa', '22e21e63-c484-4ba9-be92-3679dcc36495', '2024-10-30 08:53:06', '2024-10-30 08:53:23', '2024-10-30'),
(80, 80, 27, 48, 'selesai', 'baru', '303f101b-1ced-49b4-9a09-0d8c4c4ab199', '2024-12-16 08:57:11', '2024-12-16 08:57:30', NULL),
(81, 81, 28, 49, 'selesai', 'sewa', '7643a513-c1fc-4e54-ad51-e6c990badc35', '2024-11-06 09:00:26', '2024-11-06 09:00:44', '2024-11-06'),
(82, 81, 28, 49, 'selesai', 'sewa', '478e7f1d-2137-400c-ab04-2b1811945d6a', '2024-12-06 09:03:01', '2024-12-06 09:03:23', '2024-12-06'),
(83, 82, 29, 50, 'selesai', 'sewa', '6d931f62-40de-4448-8378-ad575f0e85a8', '2024-11-06 09:09:01', '2024-11-06 09:09:18', '2024-11-06'),
(84, 82, 29, 50, 'selesai', 'sewa', '85ac06ce-5eed-41b3-9f3e-50b23ace8d24', '2024-12-06 09:11:26', '2024-12-06 09:11:51', '2024-12-06'),
(85, 83, 30, 51, 'selesai', 'sewa', '2242af45-a1ac-48c9-806b-a8df993ff954', '2024-11-09 09:13:45', '2024-11-09 09:14:08', '2024-11-09'),
(86, 84, 30, 52, 'selesai', 'baru', '9b711dc8-0a4e-48c8-ab93-60535901312b', '2024-12-09 09:17:28', '2024-12-09 09:20:19', NULL),
(87, 85, 34, 53, 'selesai', 'sewa', '41ee5767-6af2-4b26-99cb-f0086af78254', '2024-11-10 09:22:23', '2024-11-10 09:22:50', '2024-11-10'),
(88, 85, 34, 53, 'selesai', 'sewa', '09220e45-c990-488e-836e-51d445aedba4', '2024-12-10 09:23:57', '2024-12-10 09:24:27', '2024-12-10'),
(89, 86, 31, 54, 'selesai', 'sewa', 'c49fc66d-f441-4259-aa9b-e45a15a495c5', '2024-11-11 09:27:35', '2024-11-11 09:28:30', '2024-11-11'),
(90, 86, 31, 54, 'selesai', 'sewa', 'e80b0cee-6fa0-4766-9f66-520ebe093e16', '2024-12-11 09:29:45', '2024-12-11 09:30:08', '2024-12-11'),
(91, 87, 33, 55, 'selesai', 'sewa', 'd3908128-d415-4389-a1d9-4234d6aac09c', '2024-11-19 09:35:08', '2024-11-19 09:35:33', '2024-11-19'),
(92, 87, 33, 55, 'selesai', 'sewa', '93adc366-c4b7-46f3-bfc3-ffa60b39030e', '2024-12-19 09:36:47', '2024-12-19 09:37:49', '2024-12-19'),
(93, 88, 32, 56, 'selesai', 'sewa', 'ee831acd-6f5d-4546-bc2d-2dec12ce35ed', '2024-11-17 09:40:44', '2024-11-17 09:41:22', '2024-11-17'),
(94, 88, 32, 56, 'selesai', 'sewa', 'c81eedeb-a8e1-40da-882e-bdbe2a5a1d45', '2024-12-17 09:42:28', '2024-12-17 09:42:57', '2024-12-17'),
(95, 89, 24, 57, 'selesai', 'baru', '36b52944-e858-4e83-8d18-c358bce1dc69', '2024-11-20 09:45:27', '2024-11-20 09:45:49', NULL),
(96, 89, 24, 57, 'selesai', 'sewa', '43163cff-55f1-4547-9b50-85f76db7650a', '2024-12-20 09:46:40', '2024-12-20 09:47:27', '2024-12-20'),
(97, 90, 25, 58, 'selesai', 'baru', 'a2bca469-d4c8-4c5b-be8d-dca05c832f12', '2024-11-26 09:49:19', '2024-11-26 09:49:35', NULL),
(98, 91, 35, 59, 'selesai', 'baru', 'c5efcb25-8f91-480c-b335-22c62fe37c79', '2024-12-02 09:52:02', '2024-12-02 09:52:27', NULL),
(100, 83, 36, NULL, 'batal', 'baru', '1b6dc751-b524-4c97-9c27-b54981aef48c', '2024-12-27 02:45:31', '2024-12-29 01:40:34', NULL),
(101, 69, 22, 37, 'pending', 'sewa', '2872bc9e-324b-41df-a134-b0cb20d116ad', '2024-12-27 10:05:32', NULL, '2025-01-05'),
(102, 83, 36, NULL, 'batal', 'baru', 'ae23c313-fb12-499f-82b9-13f18af9e559', '2024-12-29 01:09:58', '2024-12-29 01:31:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penghunis`
--

CREATE TABLE `penghunis` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `kamar_id` bigint UNSIGNED DEFAULT NULL,
  `tgglmasuk` date DEFAULT NULL,
  `tgglkeluar` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penghunis`
--

INSERT INTO `penghunis` (`id`, `user_id`, `nik`, `alamat`, `kamar_id`, `tgglmasuk`, `tgglkeluar`, `created_at`, `updated_at`) VALUES
(37, 69, '3329271902991675', 'Desa Bumiharjo, Kecamatan Juwana, Kabupaten Pati', 22, '2024-08-05', NULL, '2024-12-26 05:40:47', '2024-12-27 02:30:31'),
(38, 71, '3329142512058475', 'Desa Sukolilo, Kecamatan Sukolilo, Kabupaten Pati', 15, '2024-09-05', NULL, '2024-12-26 06:03:45', '2024-12-27 02:27:15'),
(39, 72, '3331122702999466', 'Desa Kedunguter, Kecamatan Karanganyar, Kabupaten Demak', 16, '2024-10-12', NULL, '2024-12-26 06:12:21', '2024-12-27 02:26:29'),
(40, 73, NULL, NULL, NULL, '2024-11-15', '2024-12-15', '2024-12-26 06:25:07', '2024-12-26 06:28:15'),
(42, 74, '3332100501037799', 'Desa Brati, Kecamatan Brati, Kabupaten Grobogan', 21, '2024-12-16', NULL, '2024-12-26 06:43:46', '2024-12-27 02:25:51'),
(43, 75, '3331082208992340', 'Desa Kebonbatur, Kecamatan Mranggen, Kabupaten Demak', 17, '2024-10-20', NULL, '2024-12-26 06:49:34', '2024-12-27 02:25:10'),
(44, 76, '3329011205019197', 'Desa Kayen, Kecamatan Kayen, Kabupaten Pati', 19, '2024-09-25', NULL, '2024-12-26 08:27:14', '2024-12-27 02:24:04'),
(45, 77, '3328152104054227', 'Desa Punjulharjo, Kecamatan Rembang, Kabupaten Rembang', 18, '2024-09-28', NULL, '2024-12-26 08:40:30', '2024-12-27 02:23:17'),
(46, 78, '3330210403053974', 'Desa Mlonggo, Kecamatan Mlonggo, Kabupaten Jepara', 23, '2024-10-03', NULL, '2024-12-26 08:48:46', '2024-12-27 02:22:36'),
(47, 79, NULL, NULL, NULL, '2024-10-30', '2024-11-30', '2024-12-26 08:53:23', '2024-12-26 08:56:44'),
(48, 80, '3332032212018775', 'Desa Kradenan, Kecamatan Kradenan, Kabupaten Grobogan', 27, '2024-12-16', NULL, '2024-12-26 08:57:30', '2024-12-27 02:21:56'),
(49, 81, '3330291109057832', 'Desa Batealit, Kecamatan Batealit, Kabupaten Jepara', 28, '2024-09-06', NULL, '2024-12-26 09:00:44', '2024-12-27 02:21:16'),
(50, 82, '3331211711005541', 'Desa Mangunjiwan, Kecamatan Demak, Kabupaten Demak', 29, '2024-10-06', NULL, '2024-12-26 09:09:18', '2024-12-27 02:20:25'),
(51, 83, NULL, NULL, NULL, '2024-09-09', '2024-12-09', '2024-12-26 09:14:08', '2024-12-26 09:16:55'),
(52, 84, '3330142611988759', 'Desa Plajan, Kecamatan Pakis Aji, Kabupaten Jepara', 30, '2024-12-09', NULL, '2024-12-26 09:20:19', '2024-12-27 02:14:36'),
(53, 85, '3317022603030001', 'Desa Pasedan Kecamatan Bulu Kabupaten Rembang', 34, '2024-10-10', NULL, '2024-12-26 09:22:50', '2024-12-27 02:13:52'),
(54, 86, '3332311003039537', 'Desa Pulokulon, Kecamatan Pulokulon, Kabupaten Grobogan', 31, '2024-10-11', NULL, '2024-12-26 09:28:30', '2024-12-27 02:12:50'),
(55, 87, '3332120505027562', 'Desa Ngaringan, Kecamatan Ngaringan, Kabupaten Grobogan', 33, '2024-09-19', NULL, '2024-12-26 09:35:33', '2024-12-27 02:12:03'),
(56, 88, '3331250501047847', 'Desa Kadilangu, Kecamatan Demak, Kabupaten Demak', 32, '2024-10-17', NULL, '2024-12-26 09:41:22', '2024-12-27 02:10:26'),
(57, 89, '3328050701006800', 'Desa Tritunggal, Kecamatan Rembang, Kabupaten Rembang', 24, '2024-11-20', NULL, '2024-12-26 09:45:49', '2024-12-27 02:08:16'),
(58, 90, '3329180604021254', 'Desa Tlogowungu, Kecamatan Tlogowungu, Kabupaten Pati', 25, '2024-11-26', NULL, '2024-12-26 09:49:35', '2024-12-27 02:06:38'),
(59, 91, '3328102306036597', 'Desa Karangmangu, Kecamatan Sarang, Kabupaten Rembang', 35, '2024-12-02', NULL, '2024-12-26 09:52:27', '2024-12-27 02:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DRD8O1NNfQKrOtAOOsMPwa4WMpjVR933D8oGza8Z', 68, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZGVEYWU0TVdWc1kycHMxOXg4dTNrckJORlF1ckxyOGNSYU1rNnhOMyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3BlbmdndW5hP3BhZ2U9MiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2ODt9', 1735474201),
('omQhoUjObFSNEUNKyMbNwrurHynHMIe03OSxSpch', 68, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUE5IbHRPVGx4YTc3NnRpY21CeTNJanlDa0QwcG5iaFBuSjlYU3NGbCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2thbWFyIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wdWJsaWsvdGVudGFuZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY4O30=', 1735484353),
('SdjW5UluWXCZMYslZCnEuevYYMTvShsx3QLBxtwv', 91, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRGFiWnFESG42bEk2UnlJemp6TlhubldDOW5mVzZRUDhXWWtrZXBZRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZW55ZXdhL3Byb2ZpbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjkxO30=', 1735480534),
('XdkXGWNZ2r67cw8fam8nzj90w0Anwv35b24f5L5P', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUWZOSHVYVUN6a2VZNXVqM1dOTURuTUN6MXNWQlVheTRvUFo1NFpSOCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1735481601);

-- --------------------------------------------------------

--
-- Table structure for table `tentangs`
--

CREATE TABLE `tentangs` (
  `id` bigint UNSIGNED NOT NULL,
  `poin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tentangs`
--

INSERT INTO `tentangs` (`id`, `poin`, `desk`, `created_at`, `updated_at`) VALUES
(1, 'Lokasi Strategis', 'Berada di area yang mudah diakses, dekat dengan pusat pendidikan, perkantoran, dan fasilitas umum seperti pasar, minimarket, serta transportasi publik.', NULL, '2024-12-14 10:53:01'),
(2, 'Fasilitas Modern', 'Dilengkapi dengan akses internet cepat, sistem keamanan 24 jam, kamar mandi dalam, dan ruang bersama yang nyaman untuk penghuni.', NULL, '2024-12-08 22:24:08'),
(3, 'Lingkungan Nyaman dan Tenang', 'Suasana kost yang asri, bersih, dan jauh dari kebisingan, mendukung penghuni untuk beristirahat maupun bekerja dengan nyaman.', NULL, '2024-12-08 22:24:08'),
(4, 'Sistem Keamanan Terjamin', 'CCTV aktif 24 jam dan akses terbatas bagi penghuni memastikan keamanan seluruh penghuni dan properti mereka.', NULL, '2024-12-08 22:24:08'),
(5, 'Pelayanan Ramah dan Profesional', 'Pengelola selalu siap membantu kebutuhan penghuni dengan sikap ramah dan tanggap.', NULL, '2024-12-08 22:24:08'),
(6, 'Harga Terjangkau', 'Menawarkan tarif yang kompetitif dengan berbagai pilihan paket sewa sesuai kebutuhan penghuni, tanpa mengurangi kualitas fasilitas dan pelayanan.', NULL, '2024-12-08 22:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `testis`
--

CREATE TABLE `testis` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `testi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testis`
--

INSERT INTO `testis` (`id`, `user_id`, `testi`, `created_at`, `updated_at`) VALUES
(13, 69, NULL, '2024-12-26 05:40:47', '2024-12-28 04:54:27'),
(14, 71, NULL, '2024-12-26 06:03:45', '2024-12-28 04:55:01'),
(15, 72, '\"Pemilik kost ramah dan selalu siap membantu.\"', '2024-12-26 06:12:21', '2024-12-26 06:15:38'),
(16, 73, NULL, '2024-12-26 06:25:07', '2024-12-26 06:25:07'),
(18, 74, '\"Lokasi strategis, dekat dengan kampus dan pusat perbelanjaan.\"', '2024-12-26 06:43:46', '2024-12-26 06:46:47'),
(19, 75, '\"Kamar bersih, dan kebersihan selalu terjaga.\"', '2024-12-26 06:49:34', '2024-12-26 06:49:45'),
(20, 76, '\"Sinyal WiFi cepat, sangat mendukung pekerjaan dan studi online.\"', '2024-12-26 08:27:14', '2024-12-26 08:37:26'),
(21, 77, '\"Lingkungan tenang, tidak ada gangguan dari luar.\"', '2024-12-26 08:40:30', '2024-12-26 08:46:33'),
(22, 78, NULL, '2024-12-26 08:48:46', '2024-12-26 08:48:46'),
(23, 79, '\"Keamanan terjamin dengan CCTV dan akses gerbang yang tertutup.\"', '2024-12-26 08:53:23', '2024-12-26 08:55:15'),
(24, 80, NULL, '2024-12-26 08:57:30', '2024-12-26 08:57:30'),
(25, 81, '\"Area parkir luas, tidak perlu khawatir soal kendaraan.\"', '2024-12-26 09:00:44', '2024-12-26 09:02:28'),
(26, 82, '\"Ada dapur bersama yang bersih dan nyaman digunakan.\"', '2024-12-26 09:09:18', '2024-12-26 09:11:36'),
(27, 83, '\"Kost ini sangat mendukung aktivitas saya sebagai mahasiswa.\"', '2024-12-26 09:14:08', '2024-12-26 09:15:12'),
(28, 84, NULL, '2024-12-26 09:20:19', '2024-12-26 09:20:19'),
(29, 85, '\"Harga kost terjangkau untuk fasilitas yang diberikan.\"', '2024-12-26 09:22:50', '2024-12-26 09:24:10'),
(30, 86, '\"Saya betah tinggal di sini karena suasananya homey.\"', '2024-12-26 09:28:30', '2024-12-26 09:29:23'),
(31, 87, '\"Sistem pengelolaan kost yang profesional, tidak pernah ada masalah.\"', '2024-12-26 09:35:33', '2024-12-26 09:38:24'),
(32, 88, '\"Penghuni lainnya ramah, seperti keluarga sendiri.\"', '2024-12-26 09:41:22', '2024-12-26 09:42:40'),
(33, 89, '\"Aturan kost jelas dan ditegakkan dengan baik.\"', '2024-12-26 09:45:49', '2024-12-26 09:47:54'),
(34, 90, '\"Dekat dengan transportasi umum, sangat memudahkan mobilitas.\"', '2024-12-26 09:49:35', '2024-12-26 09:49:46'),
(35, 91, '\"Saya sangat merekomendasikan kost ini untuk siapa saja yang mencari kenyamanan.\"', '2024-12-26 09:52:27', '2024-12-26 09:53:13'),
(39, 83, NULL, '2024-12-29 06:39:11', '2024-12-29 06:39:11'),
(40, 83, NULL, '2024-12-29 06:41:51', '2024-12-29 06:41:51'),
(41, 79, NULL, '2024-12-29 06:59:10', '2024-12-29 06:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','penyewa','publik') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publik',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `email_verified_at`, `password`, `role`, `created_at`, `updated_at`, `telepon`) VALUES
(68, 'Hanggoro', 'hanggoro@gmail.com', '2024-12-23 09:27:20', '$2y$12$Tx/eqkG4teEcqu55IG4ljOvOU6nH.pTKmx75yZIWXnFzvpJjRlhji', 'admin', '2024-12-23 09:27:11', '2024-12-23 09:27:11', '6285848373051'),
(69, 'Firdaus', 'firadaus@gmail.com', '2024-12-25 05:36:40', '$2y$12$FtciIQrTBbta5uggdKLEJ.wt4xdtZVH7rLRT0iUV4AvU21WB1KTwK', 'penyewa', '2024-12-26 05:35:52', '2024-12-26 05:40:47', '62895342993570'),
(71, 'Arya', 'arya@gmail.com', '2024-12-05 06:02:36', '$2y$12$vgE.0BexXp8LfW9tmmCHcO0O3FFoPHkEMyGJ.YVDxMKXSk2PKeK/6', 'penyewa', '2024-12-26 06:02:18', '2024-12-26 06:03:45', '6285384310037'),
(72, 'Lilik', 'lilik@gmail.com', '2024-12-04 06:11:19', '$2y$12$HniBl/malXmy6BIxTKS99.4tedPy8hOJI7l0LgZVcMPy/c5JfiZCe', 'penyewa', '2024-12-26 06:11:00', '2024-12-26 06:12:21', '62895415015783'),
(73, 'Rony', 'rony@gmail.com', '2024-12-02 06:23:54', '$2y$12$gjMoAlM7stArb5tPWV712ewHQ7niZoR8xOhWYcOOcVfn2ZooH4Ho6', 'publik', '2024-12-26 06:23:30', '2024-12-26 06:29:02', '6285713947086'),
(74, 'afif', 'afif@gmail.com', '2024-10-11 06:41:33', '$2y$12$1c0Ei9x2pC2uvLm9fIMEmebdTx6QqifOFSLySR71zznXQ7Qfgs752', 'penyewa', '2024-12-26 06:41:22', '2024-12-26 06:43:46', '6282124038401'),
(75, 'Fahri', 'fahri@gmail.com', '2024-10-11 06:48:25', '$2y$12$xow0H6bBKaWXmVnDC4Yn0.fWtIoTLLId5YB1IYRYtaHgCMIyYvTYe', 'penyewa', '2024-12-26 06:48:14', '2024-12-26 06:49:34', '6289637055941'),
(76, 'Irvan', 'irvan@gmail.com', '2024-10-14 08:09:10', '$2y$12$CCnvvB6OOiitPhtawOxNo.e33w8.o4ZLiI/.cJtkKgWeurE0enNke', 'penyewa', '2024-12-26 08:08:59', '2024-12-26 08:27:14', '6287720372123'),
(77, 'Puthut', 'puthut@gmail.com', '2024-10-07 08:38:44', '$2y$12$I5vdWAlsnDWY7LW.JfcmuOEeqLUdx2cVLTPHoLoZscoRXXDNQ84zO', 'penyewa', '2024-12-26 08:38:11', '2024-12-26 08:40:30', '6289669660879'),
(78, 'Taufik', 'taufik@gmail.com', '2024-10-16 08:47:46', '$2y$12$juJ70IcSXHBOgf4IN2XcxutFYJBGzIEP5IL7xiGofTCtIa9Bqn3ES', 'penyewa', '2024-12-26 08:47:32', '2024-12-26 08:48:46', '6285712060097'),
(79, 'Rifki', 'rifki@gmail.com', '2024-09-17 08:52:28', '$2y$12$YFmW.4lQdLK9ErEEKvJ92.v0o0q/aSOw4ah5QfNpLSQmfmyh2LjuC', 'publik', '2024-12-26 08:52:16', '2024-12-29 08:01:59', '62821915747817'),
(80, 'Nanda', 'nanda@gmail.com', '2024-12-10 08:56:07', '$2y$12$CtLqTjCcCcO3t7G06.Ic1OJuJ59aCUICrqinTCVDuK3BuHkkHVyP2', 'penyewa', '2024-12-26 08:55:47', '2024-12-26 08:57:30', '6281339696299'),
(81, 'Aziz', 'aziz@gmail.com', '2024-10-10 08:59:42', '$2y$12$4QIOupZQanWKos5bSjq/Ou2GcI9AmBlZw1wFacwhPz3qnfg98uKri', 'penyewa', '2024-12-26 08:59:25', '2024-12-26 09:00:44', '62895617180309'),
(82, 'Pian', 'Pian@gmail.com', '2024-10-11 09:08:23', '$2y$12$peeM/Vmqm3AarQWEGmSWT.HE1jAHYVKceFJrsgxZP4w4ngpU6pkPG', 'penyewa', '2024-12-26 09:06:43', '2024-12-26 09:09:18', '6283115633749'),
(83, 'Anjas', 'anjas@gmail.com', '2024-09-10 09:13:10', '$2y$12$9UMfxnwQN0JpJMsfxgnupuiEwmC1etx2HHIKAhRkAqjBybM3BbZc2', 'publik', '2024-12-26 09:12:57', '2024-12-29 06:58:37', '6285700327003'),
(84, 'Rama', 'rama@gmail.com', '2024-11-06 09:15:57', '$2y$12$p/2hGgIOJFYbI3Ys2Eab/uSHOgndo9737PmFBNq1wrApC1EAS1Xci', 'penyewa', '2024-12-26 09:15:43', '2024-12-26 09:20:19', '628601565878'),
(85, 'Dana', 'danamifkhakunnurkhasan@gmail.com', '2024-10-08 09:21:56', '$2y$12$5ca4qs9bbATwzPiVSiGxN.U/N.JuEbdi/QJyo3vUM/nTlTVm3AkFy', 'penyewa', '2024-12-26 09:21:48', '2024-12-26 09:22:50', '6282242478858'),
(86, 'Gusti', 'gusti@gmail.com', '2024-10-16 09:25:49', '$2y$12$kVQbW1a0y2AwNeSo/BIA5OoVfBeOtJaPjpb9Xz2AtJLw.70CKbShS', 'penyewa', '2024-12-26 09:25:27', '2024-12-26 09:28:30', '6287765576757'),
(87, 'Irsyad', 'irsyad@gmail.com', '2024-01-16 09:34:06', '$2y$12$x6bqX2fCafz6ibCMxEtvA.UQfO/c1xT8SFtfCgQg.MIWU8TIfAskS', 'penyewa', '2024-12-26 09:33:56', '2024-12-26 09:35:33', '6289635969282'),
(88, 'Santo', 'santo@gmail.com', '2024-10-15 09:39:56', '$2y$12$1La.JAe2CwkE7fDqkRs9kOsxFtvrIJiQaJMZFEkzvxlYiFgk3zXkW', 'penyewa', '2024-12-26 09:39:49', '2024-12-26 09:41:22', '6285338180223'),
(89, 'Alvian', 'alvian@gmail.com', '2024-10-04 09:44:52', '$2y$12$K7.gcAw3OY.FT5uZHozc1OsJbe85sAXIhGPJAWzw9Rwp8UiTnrQeq', 'penyewa', '2024-12-26 09:44:36', '2024-12-26 09:45:49', '628776576757'),
(90, 'Ilham', 'ilham@gmail.com', '2024-10-19 09:48:47', '$2y$12$i3//0RTL9slA8C1ROxohy.D2/.ocCsTWA6B9fALNBl3dLImteePVm', 'penyewa', '2024-12-26 09:48:35', '2024-12-26 09:49:35', '6285643079636'),
(91, 'Awie', 'awie@gmail.com', '2024-12-01 09:51:24', '$2y$12$nPeVfJ0OJ/pz3Kt19oG.W.xm0sZDQZJ5Q1qLjXxtWs3HJj3lU0m7G', 'penyewa', '2024-12-26 09:51:17', '2024-12-26 09:52:27', '6285600052079'),
(92, 'Tes', 'tes@gmail.com', NULL, '$2y$12$5qX3NOQcwFJkvz/PZOK3defFpQnGXqwrDo.0aoAF19gUp2dm47ksW', 'publik', '2024-12-27 02:39:22', '2024-12-27 02:39:22', '081339696299');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamars`
--
ALTER TABLE `kamars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kamars_nokamar_unique` (`nokamar`);

--
-- Indexes for table `keluhans`
--
ALTER TABLE `keluhans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keluhans_user_id_foreign` (`user_id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporans_kamar_id_foreign` (`kamar_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayarans_user_id_foreign` (`user_id`),
  ADD KEY `pembayarans_kamar_id_foreign` (`kamar_id`),
  ADD KEY `pembayarans_penghuni_id_foreign` (`penghuni_id`);

--
-- Indexes for table `penghunis`
--
ALTER TABLE `penghunis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penghunis_nik_unique` (`nik`),
  ADD KEY `penghunis_user_id_foreign` (`user_id`),
  ADD KEY `penghunis_kamar_id_foreign` (`kamar_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tentangs`
--
ALTER TABLE `tentangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testis`
--
ALTER TABLE `testis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testis_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kamars`
--
ALTER TABLE `kamars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `keluhans`
--
ALTER TABLE `keluhans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `penghunis`
--
ALTER TABLE `penghunis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tentangs`
--
ALTER TABLE `tentangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testis`
--
ALTER TABLE `testis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluhans`
--
ALTER TABLE `keluhans`
  ADD CONSTRAINT `keluhans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `laporans`
--
ALTER TABLE `laporans`
  ADD CONSTRAINT `laporans_kamar_id_foreign` FOREIGN KEY (`kamar_id`) REFERENCES `kamars` (`id`);

--
-- Constraints for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD CONSTRAINT `pembayarans_kamar_id_foreign` FOREIGN KEY (`kamar_id`) REFERENCES `kamars` (`id`),
  ADD CONSTRAINT `pembayarans_penghuni_id_foreign` FOREIGN KEY (`penghuni_id`) REFERENCES `penghunis` (`id`),
  ADD CONSTRAINT `pembayarans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `penghunis`
--
ALTER TABLE `penghunis`
  ADD CONSTRAINT `penghunis_kamar_id_foreign` FOREIGN KEY (`kamar_id`) REFERENCES `kamars` (`id`),
  ADD CONSTRAINT `penghunis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `testis`
--
ALTER TABLE `testis`
  ADD CONSTRAINT `testis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
