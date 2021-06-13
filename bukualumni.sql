-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 05:02 PM
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
  `hapus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album_alumnis`
--

INSERT INTO `album_alumnis` (`id`, `nama_album`, `angkatan`, `gambar_album`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'Wisuda Horeee AK', '12', '1623321886.time.png', 0, '2021-06-10 03:41:59', '2021-06-10 03:44:46'),
(2, 'Wisuda Horeee', '13', '1623321923.11-27-27-93df438d57e653b938574b0b1427182d_telephone-clipart-person-telephone-person-transparent-free-for-_600-600.png', 1, '2021-06-10 03:45:23', '2021-06-10 04:08:33');

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
(15, '2021_06_09_072154_create_prodi_alumnis_table', 1),
(23, '2021_06_09_083727_create_profil_mahasiswas_table', 7),
(24, '2021_06_09_113853_create_album_alumnis_table', 8);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi_alumnis`
--

INSERT INTO `prodi_alumnis` (`id`, `nama_prodi`, `grade`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', '', NULL, NULL),
(2, 'Taknik Mesin', '', NULL, NULL),
(3, 'Teknik Sipil', '', NULL, NULL),
(4, 'Manajemen Bisnis Pariwisata', '', NULL, NULL),
(5, 'Teknik Pengolahan Hasil Ternak', '', NULL, NULL),
(6, 'Agribisnis', '', NULL, NULL),
(7, 'Teknik Manufaktur Kapal', '', NULL, NULL);

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
  `tahun_lulus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_mahasiswas`
--

INSERT INTO `profil_mahasiswas` (`id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `prodi`, `alamat`, `lama_studi`, `judul_laporan`, `tahun_lulus`, `angkatan`, `telepon`, `foto`, `user_id`, `hapus`, `created_at`, `updated_at`) VALUES
(1, '361855401098', 'DELLA ', 'Banyuwangi', '2021-06-12', 'perempuan', 'Teknik Informatika', 'Banyuwangi', '5 Tahun 6 bulan', 'Aplikasi Buku Alumni Berbasis Web dengan Framework Laravel', '2021', '13', '08236823919', '361855401098-DELLA_PRISKILA-favicon.ico', 2, 0, '2021-06-13 06:43:10', '2021-06-13 06:43:10'),
(2, '361855401099', 'PRISKILA', 'Banyuwangi', '2021-06-14', 'laki-laki', 'Teknik Informatika', 'Banyuwangi', '4 Tahun 2 bulan', 'Aplikasi Buku Alumni Berbasis Android', '2021', '13', '08222212121212', NULL, 3, 0, '2021-06-13 07:22:38', '2021-06-13 07:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Priskila', 'priskiladella@gmail.com', '$2y$10$aBNK00zGuhceJC106rLrROYv2ucTJpurZLn2JRLJ.5gMnD.Db.msS', 'akademik', NULL, NULL),
(2, 'DELLA', 'dellapriskila@gmail.com', '$2y$10$fPGY0N.lGK9Di4dETk19IOUi7qlgn0jktTV2TKhLJGME1af37EjQm', 'mahasiswa', NULL, NULL),
(3, 'DELLA PRISKILA', 'dellapriskila2@gmail.com', '$2y$10$td.v6Uo54FaM9Ck8XALaeeizM862xJDtxAO9OAOJJIXDt3RBou/RK', 'mahasiswa', NULL, NULL),
(4, 'PRISKILA DELLA', 'dellapriskila3@gmail.com', '$2y$10$roFhdy1XUjAttiMNgTAdXeskGyF6j.NkNcxwBDlTmxi97ugfGF2vS', 'mahasiswa', NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `prodi_alumnis`
--
ALTER TABLE `prodi_alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profil_mahasiswas`
--
ALTER TABLE `profil_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
