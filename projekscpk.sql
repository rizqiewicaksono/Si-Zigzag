-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 12:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekscpk`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_24_115013_create_table_pasien', 2),
(5, '2020_06_24_120831_create_table_perikasa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orangtua_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `nilai_gizi` float(10,5) NOT NULL,
  `hasil_gizi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_periksa` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `saran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id`, `nib`, `nama_pasien`, `jenis_kelamin`, `alamat_pasien`, `orangtua_pasien`, `no_hp`, `usia`, `berat_badan`, `tinggi_badan`, `nilai_gizi`, `hasil_gizi`, `waktu_periksa`, `created_at`, `updated_at`, `saran`) VALUES
(31, '302096727', 'Haydar Maulana', 'P', 'lodadi', 'Marsinah', '0812352421', 59, 25, 100, 53.00000, 'normal', '2020-07-05', NULL, NULL, 'memberikan saran untuk mempertahankan dan menjaga asupan yang diberikan kepada anak.'),
(33, '1229018720', 'ricky nagata', 'P', 'purworejo', 'yusuf', '08111232222', 10, 5, 40, 47.73333, 'kurang', '2020-07-03', NULL, NULL, 'memberikan buah dan sayur dalam tiap menu makanan dan makanan yang memiliki sumber karbohidrat, protein serta memberikan asupan vitamin dari susu atau produk lainnya.'),
(35, '683770270', 'Sabrina', 'P', 'kaliurang', 'Asri', '0865413131', 20, 10, 40, 48.75467, 'kurang', '2020-07-03', NULL, NULL, 'memberikan buah dan sayur dalam tiap menu makanan dan makanan yang memiliki sumber karbohidrat, protein serta memberikan asupan vitamin dari susu atau produk lainnya.'),
(36, '2052386581', 'Falih Basman', 'L', 'Jalan Biner', 'Reza Cahya', '08776541311', 36, 70, 104, 53.00000, 'normal', '2020-07-03', NULL, NULL, 'memberikan saran untuk mempertahankan dan menjaga asupan yang diberikan kepada anak.'),
(37, '2122675532', 'Samuel', 'L', 'Jalan Biner', 'surya', '081239984659', 25, 25, 25, 77.56944, 'obesitas', '2020-07-05', NULL, NULL, 'memberikan saran untuk menerapkan pola makan yang sehat dan seimbang, memberikan cemilan buah-buahan dan air putih, serta memperbanyak aktivitas fisik'),
(38, '1344699505', 'ricky', 'L', 'hgjhgj', 'sari', '081239984659', 48, 35, 80, 71.29734, 'lebih', '2020-07-05', NULL, NULL, 'memberikan saran untuk mengatur pola dan porsi makanan yang diberikan serta hindari makanan dengan kandungan kalori dan lemak yang tinggi.'),
(39, '161503871', 'Roy', 'L', 'janti', 'asih', '081239984659', 45, 20, 90, 56.51800, 'normal', '2020-07-05', NULL, NULL, 'memberikan saran untuk mempertahankan dan menjaga asupan yang diberikan kepada anak.'),
(43, '875486841', 'ricky', 'P', 'kaliureang', 'martha', '081239984659', 39, 39, 39, 71.12500, 'lebih', '2020-07-08', NULL, NULL, 'memberikan saran untuk mengatur pola dan porsi makanan yang diberikan serta hindari makanan dengan kandungan kalori dan lemak yang tinggi.'),
(44, '1054218261', 'ricky', 'L', 'kaliureang', 'yusuf', '081239984659', 90, 90, 90, 57.21450, 'normal', '2020-07-08', NULL, NULL, 'memberikan saran untuk mempertahankan dan menjaga asupan yang diberikan kepada anak.'),
(45, '32115519', 'Samuel', 'L', 'hgjhgj', 'martha', '081239984659', 88, 88, 88, 59.25000, 'normal', '2020-07-08', NULL, NULL, 'memberikan saran untuk mempertahankan dan menjaga asupan yang diberikan kepada anak.'),
(46, '32115519', 'Samuel', 'L', 'hgjhgj', 'martha', '081239984659', 88, 88, 88, 59.25000, 'normal', '2020-07-08', NULL, NULL, 'memberikan saran untuk mempertahankan dan menjaga asupan yang diberikan kepada anak.');

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
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `berat_badan` bigint(20) UNSIGNED NOT NULL,
  `tingg_badan` bigint(20) UNSIGNED NOT NULL,
  `usia` bigint(20) UNSIGNED NOT NULL,
  `tanggal_perikasa` date NOT NULL,
  `id_pasien` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sungai', 'sungai@gmail.com', NULL, '$2y$10$xDeo/ADEpOMARzR0WskmqudKESvnyqhfNoY73.KNoFxa5uQ8071v6', NULL, '2020-06-23 23:23:48', '2020-06-23 23:23:48'),
(2, 'kader', 'kader@gmail.com', NULL, '$2y$10$xU/eMBZHiejBpSHJbR6asuaYofUlhhx7u9EYEtLungY9UlQimTmT2', NULL, '2020-06-30 09:48:23', '2020-06-30 09:48:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perikasa_id_pasien_foreign` (`id_pasien`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `perikasa_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
