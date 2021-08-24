-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 04:00 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukualumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_alumnis`
--

CREATE TABLE `album_alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_album` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_album` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hapus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album_alumnis`
--

INSERT INTO `album_alumnis` (`id`, `nama_album`, `angkatan`, `gambar_album`, `tahun_terbit`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'Wisuda Horeee AK', '2018', '1623321886.time.png', '2019', 0, '2021-06-10 03:41:59', '2021-06-10 03:44:46'),
(2, 'Wisuda Horeee', '2019', '1623321923.11-27-27-93df438d57e653b938574b0b1427182d_telephone-clipart-person-telephone-person-transparent-free-for-_600-600.png', '2020', 0, '2021-06-10 03:45:23', '2021-06-10 04:08:33'),
(3, 'Wisuda Tahun Baru', '2020', '1624860700.location_53876-25530.jpg', '2021', 0, '2021-06-27 23:11:40', '2021-06-27 23:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2021_06_09_083727_create_profil_mahasiswas_table', 7),
(24, '2021_06_09_113853_create_album_alumnis_table', 8),
(25, '2021_06_09_072154_create_prodi_alumnis_table', 9),
(26, '2021_06_28_072152_create_validasi_status_mahasiswas_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi_alumnis`
--

CREATE TABLE `prodi_alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi_alumnis`
--

INSERT INTO `prodi_alumnis` (`id`, `nama_prodi`, `grade`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', 'A', 0, NULL, NULL),
(2, 'Taknik Mesin', 'A', 0, NULL, NULL),
(3, 'Teknik Sipil', 'A', 0, NULL, NULL),
(4, 'Manajemen Bisnis Pariwisata', 'A', 0, NULL, NULL),
(5, 'Teknik Pengolahan Hasil Ternak', 'A', 0, NULL, NULL),
(6, 'Agribisnis', 'A', 0, NULL, NULL),
(7, 'Teknik Manufaktur Kapal', 'A', 0, NULL, NULL),
(8, 'Manajemen Bisnis Digital', 'B', 1, '2021-06-14 04:46:29', '2021-06-14 04:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `profil_mahasiswas`
--

CREATE TABLE `profil_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_studi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sosmed` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Tervalidasi',
  `hapus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_mahasiswas`
--

INSERT INTO `profil_mahasiswas` (`id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `prodi`, `alamat`, `lama_studi`, `judul_laporan`, `sosmed`, `angkatan`, `telepon`, `ipk`, `foto`, `pekerjaan`, `user_id`, `status`, `hapus`, `created_at`, `updated_at`) VALUES
(1, '361855401098', 'DELLA', 'Banyuwangi', '2021-06-12', 'laki-laki', 'Teknik Informatika', 'Banyuwangi', '5 Tahun 6 bulan', 'Aplikasi Buku Alumni Berbasis Web dengan Framework Laravel', '@bwi24jam', '2019', '08236823919', '3,00', '36115580-PRISKILA_DELLA-IMG_20180711_173332.jpg', NULL, 2, 'Tervalidasi', 0, '2021-06-13 06:43:10', '2021-08-20 03:49:48'),
(2, '361855401099', 'DELLA PRISKILA', 'Banyuwangi', '2021-06-14', 'laki-laki', 'Teknik Informatika', 'Banyuwangi', '4 Tahun 2 bulan', 'Aplikasi Buku Alumni Berbasis Android', NULL, '2019', '08222212121212', NULL, '36115580-PRISKILA_DELLA-IMG_20180711_173332.jpg', NULL, 3, 'Tervalidasi', 0, '2021-06-13 07:22:38', '2021-06-28 23:08:42'),
(4, '36115579', 'PRISKILA DELLA', 'Banyuwangi', '1999-08-17', 'laki-laki', 'Teknik Informatika', 'Banyuwangi', '5 Tahun 6 bulan', 'Sistem Pendeteksi Maling Berbasis amukan Warga', '@bwi24jam', '2018', '08236823919', '4,00', '36115579-IMG_20170705_055927.jpg', 'Fresh graduate', 4, 'Belum Tervalidasi', 0, '2021-08-16 17:56:17', '2021-08-16 18:00:25'),
(5, '3', 'Uranus', 'Banyuwangi', '2021-08-24', 'laki-laki', 'Teknik Sipil', 'DS. BANGOREJO', '5 Tahun 6 bulan', 'Sistem Pendeteksi Maling Berbasis amukan Warga', '@bwi24jam', '2020', '082121212121', '4,00', '3-Koala.jpg', 'Fresh graduate', 24, 'Belum Tervalidasi', 0, '2021-08-23 11:36:16', '2021-08-23 11:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nim`, `email`, `password`, `role_id`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'Priskila', NULL, 'priskiladella@gmail.com', '$2y$10$aBNK00zGuhceJC106rLrROYv2ucTJpurZLn2JRLJ.5gMnD.Db.msS', 'akademik', 0, NULL, NULL),
(2, 'DELLA', '361855401147', 'dellapriskila@gmail.com', '$2y$10$fPGY0N.lGK9Di4dETk19IOUi7qlgn0jktTV2TKhLJGME1af37EjQm', 'mahasiswa', 0, NULL, NULL),
(3, 'DELLA PRISKILA', '361755401147', 'dellapriskila2@gmail.com', '$2y$10$td.v6Uo54FaM9Ck8XALaeeizM862xJDtxAO9OAOJJIXDt3RBou/RK', 'mahasiswa', 0, NULL, NULL),
(4, 'PRISKILA DELLA', '361955401147', 'dellapriskila3@gmail.com', '$2y$10$roFhdy1XUjAttiMNgTAdXeskGyF6j.NkNcxwBDlTmxi97ugfGF2vS', 'mahasiswa', 0, NULL, NULL),
(5, 'Della Pris', '361655401147', 'dellapriskila4@gmail.com', '$2y$10$9t/LVJgLVQo1ZAJq8347OuIgW6Gbig1OJNpoiBo1ymrGMNDfg1j0C', 'mahasiswa', 0, '2021-06-14 07:03:24', '2021-06-14 07:13:35'),
(22, 'Kaja', '361555401147', 'Kaja@kaja.com', '$2y$10$JfYbmpJyAEJzJun6.ToaDOOVqpxP9t5aHBdelanVPz/ShM/s/5aWa', 'mahasiswa', 0, '2021-07-03 20:20:19', '2021-07-03 20:20:19'),
(23, 'Alpha', '361455401147', 'Alpha@alpha.com', '$2y$10$K5xWBqiQnWKuLBlwCL.ln.IMjKvVu5z/m2SmH3MIk34FzT22WAIQW', 'mahasiswa', 0, '2021-07-03 20:20:19', '2021-07-03 20:20:19'),
(24, 'Uranus', '361355401147', 'Uranus@uranus.com', '$2y$10$CkV0Oizbl6DgzK9Kb/6zEepCctYlWYQ4M9C0DnZ63nub235qh27za', 'mahasiswa', 0, '2021-07-03 20:20:19', '2021-07-03 20:20:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_alumnis`
--
ALTER TABLE `album_alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prodi_alumnis`
--
ALTER TABLE `prodi_alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_mahasiswas`
--
ALTER TABLE `profil_mahasiswas`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `album_alumnis`
--
ALTER TABLE `album_alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `prodi_alumnis`
--
ALTER TABLE `prodi_alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profil_mahasiswas`
--
ALTER TABLE `profil_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
