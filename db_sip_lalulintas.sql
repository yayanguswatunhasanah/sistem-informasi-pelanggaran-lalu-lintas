-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 08:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sip_lalulintas`
--

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
-- Table structure for table `hubungi_kami`
--

CREATE TABLE `hubungi_kami` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hubungi_kami`
--

INSERT INTO `hubungi_kami` (`id`, `nama_lengkap`, `email`, `subjek`, `pesan`) VALUES
(1, 'Yudistira', 'yudistira@gmail.com', 'Isi Subjek', 'Isi Pesan');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_28_050111_create_categories_table', 1),
(7, '2023_02_28_065501_create_travel_packages_table', 1),
(8, '2023_02_28_065908_create_blogs_table', 1),
(9, '2023_02_28_070324_create_bookings_table', 1),
(10, '2023_03_01_020708_create_galleries_table', 1),
(11, '2023_03_01_151237_add_reads_to_blogs_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekap`
--

CREATE TABLE `rekap` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_handphone` varchar(255) NOT NULL,
  `plat_nomor` varchar(255) NOT NULL,
  `bukti_foto` longtext DEFAULT NULL,
  `bukti_video` longtext DEFAULT NULL,
  `nik_pelanggar` varchar(255) DEFAULT NULL,
  `nama_lengkap_pelanggar` varchar(255) DEFAULT NULL,
  `email_pelanggar` varchar(255) DEFAULT NULL,
  `no_handphone_pelanggar` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap`
--

INSERT INTO `rekap` (`id`, `nik`, `nama_lengkap`, `email`, `no_handphone`, `plat_nomor`, `bukti_foto`, `bukti_video`, `nik_pelanggar`, `nama_lengkap_pelanggar`, `email_pelanggar`, `no_handphone_pelanggar`, `status`, `keterangan`) VALUES
(1, '3278030309000009', 'Yudistira', 'yudistira@gmail.com', '02179812233', 'B ZXC 123', '/5jUlNzs3btdBiZXDoWVLg55Ffz7a2UQDIT2jp7zN.png', '/wFY7tMsi9xiboU6KuZYdfMmvkFzQlBOkTm8m8vEp.mp4', '3278030309000019', 'Omaz', '-', '-', 'Pending', '-'),
(2, '3278030309000010', 'Erik', 'erik22@gmail.com', '123456789', 'B ZXA 123', '/U47N0h04n7UYowqiAQarVGOrCc2qzD7SIdKH88Jb.jpg', '', '3278030309000011', 'Loma', 'loma@gmail.com', '02179122222', 'Tilang', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tops`
--

CREATE TABLE `tops` (
  `id` int(11) NOT NULL,
  `data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tops`
--

INSERT INTO `tops` (`id`, `data`) VALUES
(1, '{\n  \"accuracy\": 0.6566666666666666,\n  \"predict\": [\n    13\n  ],\n  \"status\": true,\n  \"top\": {\n    \"1\": {\n      \"0\": 254.5184332000809,\n      \"1\": 178.57520915377756,\n      \"2\": 171.56522296033148,\n      \"3\": 10.838257493849186,\n      \"4\": 2905.1667750618094,\n      \"5\": 16685.885148104,\n      \"6\": 8570.667898529444,\n      \"7\": 46.901500590249626,\n      \"8\": 188.080180636346,\n      \"9\": 875.5533088347557,\n      \"10\": 12183.574173916093,\n      \"11\": 790.1543571702391,\n      \"12\": 12026.251167667693,\n      \"13\": 18877.453396509423,\n      \"14\": 385.1481874777649,\n      \"15\": 25.646284308262516,\n      \"16\": 6269.687219160129,\n      \"17\": 7.372811953765835,\n      \"18\": 1165.8277917529324,\n      \"19\": 17487.346593007936,\n      \"20\": 135.8883781664704,\n      \"21\": 438.8998745422837,\n      \"22\": 97.97850311899984,\n      \"23\": 96.42795657205275,\n      \"24\": 124.59137011125911\n    }\n  }\n}\n');

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
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `foto` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferensi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `foto`, `preferensi`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$axO9Vey.mG/w8/ssuS4cx.RjiRaZBtAtHinMjc8ZlD9CGMZMvEgKq', NULL, 1, '/f3iLfsWq8Hac0ryfu27O2SyWiLKilZbafDPIyTv1.webp', NULL, '2023-10-11 18:08:51', '2023-12-17 12:16:18'),
(3, 'Yudh', 'yudhaez@gmail.com', NULL, '$2y$10$OAgTUpHkiZcf1z3/Kg7Fuu0Ez2kvoLZ5BNVWIsn2RD./z/nzcQTx6', NULL, 0, '2.png', '[\"2\",\"1\",\"2\",\"1\",\"1\",0,\"1\",\"1\",0,0,\"1\",\"1\",\"1\",0,0,0,0,\"1\"]', NULL, NULL),
(4, 'Yudi', 'yudiii@gmail.com', NULL, '$2y$10$wt89uMoJuEtvcBH72wXz8u1TZTzkB0fX7RFzVzPX1jZ6jbZertGF2', NULL, 0, '1.png', NULL, NULL, NULL),
(5, 'Holland', 'holland@gmail.com', NULL, '$2y$10$8Qc860LYmFWgoaRZQiRjK.O.qg/XdaY15i6Cy.VGxP1SD1N8KUOsi', NULL, 0, '/aAMkdgpC3avxMRZXSmnQTE6gshFPDbBNMQltTwMm.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tops`
--
ALTER TABLE `tops`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekap`
--
ALTER TABLE `rekap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tops`
--
ALTER TABLE `tops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
