-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Bulan Mei 2023 pada 10.22
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SolveBlem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contests`
--

CREATE TABLE `contests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `start_at` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `max_participant` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contests`
--

INSERT INTO `contests` (`id`, `title`, `slug`, `user_id`, `start_at`, `duration`, `max_participant`, `password`, `created_at`, `updated_at`) VALUES
(111111, 'latihan pemrograman', 'lat-p', 2, '2023-05-18 15:04:29', 60, 60, 'fajry', NULL, NULL),
(222222, 'latihan pemrograman2', 'lat-p2', 3, '2023-05-18 15:04:29', 60, 60, 'fajry', NULL, NULL),
(661677, 'latihan pemrograman', 'latihan-pemrograman', 1, '2023-05-18 15:10:00', 3, 1, 'fajry', '2023-05-18 08:06:38', '2023-05-18 08:06:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contest_problem`
--

CREATE TABLE `contest_problem` (
  `contest_id` bigint(20) UNSIGNED NOT NULL,
  `problem_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contest_problem`
--

INSERT INTO `contest_problem` (`contest_id`, `problem_id`, `created_at`, `updated_at`) VALUES
(111111, 1, NULL, NULL),
(222222, 1, NULL, NULL),
(111111, 2, NULL, NULL),
(222222, 2, NULL, NULL),
(661677, 1, NULL, NULL),
(661677, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contest_problem_user`
--

CREATE TABLE `contest_problem_user` (
  `contest_id` bigint(20) UNSIGNED NOT NULL,
  `problem_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `answer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contest_problem_user`
--

INSERT INTO `contest_problem_user` (`contest_id`, `problem_id`, `user_id`, `answer`, `created_at`, `updated_at`) VALUES
(661677, 1, 4, 100, NULL, NULL),
(661677, 6, 4, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contest_user`
--

CREATE TABLE `contest_user` (
  `contest_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contest_user`
--

INSERT INTO `contest_user` (`contest_id`, `user_id`, `nilai`, `created_at`, `updated_at`) VALUES
(111111, 1, 0, NULL, NULL),
(111111, 3, 0, NULL, NULL),
(222222, 1, 0, NULL, NULL),
(222222, 2, 0, NULL, NULL),
(661677, 2, 0, NULL, NULL),
(661677, 4, 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_07_081047_create_problem_table', 1),
(6, '2023_05_08_180610_create_contest_table', 1),
(7, '2023_05_09_160436_create_contest_problem_table', 1),
(8, '2023_05_09_160659_create_submission_table', 1),
(9, '2023_05_15_080049_create_problem_user_table', 1),
(10, '2023_05_17_202259_create_contest_user_table', 1),
(11, '2023_05_17_203721_create_contest_problem_user_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `problem`
--

CREATE TABLE `problem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `batas_waktu` varchar(255) NOT NULL,
  `batas_memori` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `format_input` text NOT NULL,
  `format_output` text NOT NULL,
  `contoh_input` text NOT NULL,
  `contoh_output` text NOT NULL,
  `case_input` text NOT NULL,
  `case_output` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `problem`
--

INSERT INTO `problem` (`id`, `judul`, `slug`, `user_id`, `batas_waktu`, `batas_memori`, `deskripsi`, `format_input`, `format_output`, `contoh_input`, `contoh_output`, `case_input`, `case_output`, `created_at`, `updated_at`) VALUES
(1, 'Pak Dengklek dan Operasi Sederhana', 'pak-dengklek-dan-operasi-sederhana', 1, '1 s', '64 MB', 'Pak Dengklek memutuskan sekolah lagi. Dia baru saja mendapat PR dari guru matematikanya. Sayangnya Pak Dengklek sudah terlalu lelah, dia sudah tak sanggup lagi. Pak Dengklek melihat potensi Anda yang begitu besar. Maka dari itu, kali ini dia minta bantuan Anda untuk menyelesaikan PR-nya. <br><br>\n            Buatlah sebuah program yang membaca dua buah bilangan bulat X dan Y. X dan Y dijamin bukan nol. Tuliskan hasil penjumlahan, pengurangan, perkalian, bagian bulat pembagian dan sisanya.', 'Sebuah baris yang berisi dua buah bilangan bulat, X dan Y.', 'Lima buah baris, yakni :<br>\n                Baris pertama berisi hasil penjumlahan, yakni X + Y<br>\n                Baris kedua berisi hasil pengurangan, yakni X - Y<br>\n                Baris ketiga berisi hasil perkalian, yakni X * Y<br>\n                Baris keempat berisi bagian bulat hasil pembagian, yakni bagian bulat dari X / Y<br>\n                Baris terakhir berisi X mod Y, yakni sisa pembagian dari X / Y</p>', '6 4', '10<br>2<br>24<br>1<br>2', '6 4', '10<br>2<br>24<br>1<br>2', '2023-05-18 08:04:28', '2023-05-18 08:04:28'),
(2, 'Tambah Tambah', 'tambah-tambah', 1, '2 s', '64 MB', 'Pak Dengklek memutuskan sekolah lagi. Dia baru saja mendapat PR dari guru matematikanya. Sayangnya Pak Dengklek sudah terlalu lelah, dia sudah tak sanggup lagi. Pak Dengklek melihat potensi Anda yang begitu besar. Maka dari itu, kali ini dia minta bantuan Anda untuk menyelesaikan PR-nya. <br><br>\n            Buatlah sebuah program yang membaca dua buah bilangan bulat X dan Y. X dan Y dijamin bukan nol. Tuliskan hasil penjumlahan, pengurangan, perkalian, bagian bulat pembagian dan sisanya.', 'Sebuah baris yang berisi dua buah bilangan bulat, X dan Y.', 'Lima buah baris, yakni :<br>\n                Baris pertama berisi hasil penjumlahan, yakni X + Y<br>\n                Baris kedua berisi hasil pengurangan, yakni X - Y<br>\n                Baris ketiga berisi hasil perkalian, yakni X * Y<br>\n                Baris keempat berisi bagian bulat hasil pembagian, yakni bagian bulat dari X / Y<br>\n                Baris terakhir berisi X mod Y, yakni sisa pembagian dari X / Y</p>', '6 4', '10<br>2<br>24<br>1<br>2', '6 4', '10<br>2<br>24<br>1<br>2', '2023-05-18 08:04:28', '2023-05-18 08:04:28'),
(3, 'Mengambil Gajah', 'mengambil-gajah', 1, '2 s', '64 MB', 'Pak Dengklek memutuskan sekolah lagi. Dia baru saja mendapat PR dari guru matematikanya. Sayangnya Pak Dengklek sudah terlalu lelah, dia sudah tak sanggup lagi. Pak Dengklek melihat potensi Anda yang begitu besar. Maka dari itu, kali ini dia minta bantuan Anda untuk menyelesaikan PR-nya. <br><br>\n            Buatlah sebuah program yang membaca dua buah bilangan bulat X dan Y. X dan Y dijamin bukan nol. Tuliskan hasil penjumlahan, pengurangan, perkalian, bagian bulat pembagian dan sisanya.', 'Sebuah baris yang berisi dua buah bilangan bulat, X dan Y.', 'Lima buah baris, yakni :<br>\n                Baris pertama berisi hasil penjumlahan, yakni X + Y<br>\n                Baris kedua berisi hasil pengurangan, yakni X - Y<br>\n                Baris ketiga berisi hasil perkalian, yakni X * Y<br>\n                Baris keempat berisi bagian bulat hasil pembagian, yakni bagian bulat dari X / Y<br>\n                Baris terakhir berisi X mod Y, yakni sisa pembagian dari X / Y</p>', '6 4', '10<br>2<br>24<br>1<br>2', '6 4', '10<br>2<br>24<br>1<br>2', '2023-05-18 08:04:28', '2023-05-18 08:04:28'),
(4, 'Mencari Lompatan', 'mencari-lompatan', 1, '2 s', '64 MB', 'Pak Dengklek memutuskan sekolah lagi. Dia baru saja mendapat PR dari guru matematikanya. Sayangnya Pak Dengklek sudah terlalu lelah, dia sudah tak sanggup lagi. Pak Dengklek melihat potensi Anda yang begitu besar. Maka dari itu, kali ini dia minta bantuan Anda untuk menyelesaikan PR-nya. <br><br>\n            Buatlah sebuah program yang membaca dua buah bilangan bulat X dan Y. X dan Y dijamin bukan nol. Tuliskan hasil penjumlahan, pengurangan, perkalian, bagian bulat pembagian dan sisanya.', 'Sebuah baris yang berisi dua buah bilangan bulat, X dan Y.', 'Lima buah baris, yakni :<br>\n                Baris pertama berisi hasil penjumlahan, yakni X + Y<br>\n                Baris kedua berisi hasil pengurangan, yakni X - Y<br>\n                Baris ketiga berisi hasil perkalian, yakni X * Y<br>\n                Baris keempat berisi bagian bulat hasil pembagian, yakni bagian bulat dari X / Y<br>\n                Baris terakhir berisi X mod Y, yakni sisa pembagian dari X / Y</p>', '6 4', '10<br>2<br>24<br>1<br>2', '6 4', '10<br>2<br>24<br>1<br>2', '2023-05-18 08:04:28', '2023-05-18 08:04:28'),
(5, 'Waterfall', 'waterfall', 1, '2 s', '64 MB', 'Pak Dengklek memutuskan sekolah lagi. Dia baru saja mendapat PR dari guru matematikanya. Sayangnya Pak Dengklek sudah terlalu lelah, dia sudah tak sanggup lagi. Pak Dengklek melihat potensi Anda yang begitu besar. Maka dari itu, kali ini dia minta bantuan Anda untuk menyelesaikan PR-nya. <br><br>\n            Buatlah sebuah program yang membaca dua buah bilangan bulat X dan Y. X dan Y dijamin bukan nol. Tuliskan hasil penjumlahan, pengurangan, perkalian, bagian bulat pembagian dan sisanya.', 'Sebuah baris yang berisi dua buah bilangan bulat, X dan Y.', 'Lima buah baris, yakni :<br>\n                Baris pertama berisi hasil penjumlahan, yakni X + Y<br>\n                Baris kedua berisi hasil pengurangan, yakni X - Y<br>\n                Baris ketiga berisi hasil perkalian, yakni X * Y<br>\n                Baris keempat berisi bagian bulat hasil pembagian, yakni bagian bulat dari X / Y<br>\n                Baris terakhir berisi X mod Y, yakni sisa pembagian dari X / Y</p>', '6 4', '10<br>2<br>24<br>1<br>2', '6 4', '10<br>2<br>24<br>1<br>2', '2023-05-18 08:04:28', '2023-05-18 08:04:28'),
(6, 'Perkalian', 'perkalian', 1, '1 s', '64 mb', 'Buatlah program perkalian', 'Dua buah bilangan yaitu x dan y', 'Suatu bilangan hasil kali x dan y', '3 5', '15', '8 9', '72', '2023-05-18 08:08:58', '2023-05-18 08:08:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `problem_user`
--

CREATE TABLE `problem_user` (
  `problem_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `submission`
--

CREATE TABLE `submission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fajry', 'Papazy', 'fajry@mhs.unsyiah.ac.id', NULL, '$2y$10$u1Iid84JL3Dg5juOHVGYpudyxURnSk66soljTrJcQYzxpDW0wReHy', NULL, '2023-05-18 08:04:29', '2023-05-18 08:04:29'),
(2, 'Habil', 'Noitusanx', 'habil@mhs.unsyiah.ac.id', NULL, '$2y$10$kuFLQBZXnzTRHXMWI4TFg.LAhfMTS6yEIQL.ytZMsgv8umnAKKYby', NULL, '2023-05-18 08:04:29', '2023-05-18 08:04:29'),
(3, 'Ariansyah', 'Noitusanx2', 'habil2@mhs.unsyiah.ac.id', NULL, '$2y$10$.LGL8NAtL3agsdyY86JZaOSRRELJN/0ihUTMvavHM9R9NXetj3BHm', NULL, '2023-05-18 08:04:29', '2023-05-18 08:04:29'),
(4, 'andre', 'andre', 'andre@gmail.com', NULL, '$2y$10$oDcdZDjnaZr0IHXorLOuAurhcnR3K5P7lbjbXfS5rYiTE72Y41LV2', NULL, '2023-05-18 08:10:36', '2023-05-18 08:10:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contest_problem`
--
ALTER TABLE `contest_problem`
  ADD KEY `contest_problem_contest_id_foreign` (`contest_id`),
  ADD KEY `contest_problem_problem_id_foreign` (`problem_id`);

--
-- Indeks untuk tabel `contest_problem_user`
--
ALTER TABLE `contest_problem_user`
  ADD KEY `contest_problem_user_contest_id_foreign` (`contest_id`),
  ADD KEY `contest_problem_user_problem_id_foreign` (`problem_id`),
  ADD KEY `contest_problem_user_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `contest_user`
--
ALTER TABLE `contest_user`
  ADD KEY `contest_user_contest_id_foreign` (`contest_id`),
  ADD KEY `contest_user_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contests`
--
ALTER TABLE `contests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661678;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `problem`
--
ALTER TABLE `problem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `submission`
--
ALTER TABLE `submission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `contest_problem`
--
ALTER TABLE `contest_problem`
  ADD CONSTRAINT `contest_problem_contest_id_foreign` FOREIGN KEY (`contest_id`) REFERENCES `contests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contest_problem_problem_id_foreign` FOREIGN KEY (`problem_id`) REFERENCES `problem` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `contest_problem_user`
--
ALTER TABLE `contest_problem_user`
  ADD CONSTRAINT `contest_problem_user_contest_id_foreign` FOREIGN KEY (`contest_id`) REFERENCES `contests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contest_problem_user_problem_id_foreign` FOREIGN KEY (`problem_id`) REFERENCES `problem` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contest_problem_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `contest_user`
--
ALTER TABLE `contest_user`
  ADD CONSTRAINT `contest_user_contest_id_foreign` FOREIGN KEY (`contest_id`) REFERENCES `contests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contest_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
