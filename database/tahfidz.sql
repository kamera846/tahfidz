-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2020 pada 08.01
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tahfidz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_29_103055_create_santri_table', 2),
(7, '2020_08_31_064847_create_murojaah_table', 3),
(8, '2020_09_01_075941_create_santri_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`id_santri`, `nama`, `kelas`, `jk`, `created_at`, `updated_at`) VALUES
(4, 'Violet Nasyiah M.Farm', '6', 'Laki-laki', NULL, '2020-09-01 19:15:36'),
(5, 'Hartana Salahudin S.H.', '2', 'Laki-laki', NULL, NULL),
(6, 'Fathonah Prastuti', '3', 'Laki-laki', NULL, NULL),
(7, 'Usyi Dewi Wastuti S.E.I', '4', 'Laki-laki', NULL, NULL),
(8, 'Chelsea Astuti', '4', 'Laki-laki', NULL, NULL),
(9, 'Harto Among Suryono', '3', 'Perempuan', NULL, NULL),
(10, 'Kenzie Dabukke', '2', 'Laki-laki', NULL, NULL),
(11, 'Karna Tampubolon', '3', 'Perempuan', NULL, NULL),
(12, 'Tomi Budiman S.Farm', '3', 'Perempuan', NULL, NULL),
(13, 'Iriana Humaira Lailasari S.Gz', '4', 'Perempuan', NULL, NULL),
(14, 'Humaira Yuniar M.Kom.', '3', 'Laki-laki', NULL, NULL),
(15, 'Dariati Sihotang', '5', 'Laki-laki', NULL, NULL),
(16, 'Heru Prasetya', '2', 'Perempuan', NULL, NULL),
(17, 'Vicky Salsabila Mandasari', '1', 'Perempuan', NULL, NULL),
(18, 'Melinda Mulyani', '2', 'Perempuan', NULL, NULL),
(19, 'Marsudi Irawan', '3', 'Perempuan', NULL, NULL),
(22, 'Ananda Raysha Pradana', 'XI-PH-3', 'Laki-laki', '2020-09-01 19:10:41', '2020-09-01 19:25:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$23kBBWI6UsKer2FvjFBMROT4ZUKt4.4W.dCd6AJghJ5AZvcjdv5IK', 'dlGa2J4YEXWKHI0YMIYqdU6jO54AxTOBxLA1e5OCPRcN95QXgCCpge0O76Pt', '2020-08-25 01:55:45', '2020-08-25 01:55:45', 'admin'),
(2, 'User', 'user@gmail.com', '$2y$10$YXQHqHyv.F1mJWHYVJFz1ecwafmoZnmYjLyVJBRuLJvqmm5ZSl/ki', 'LvdgAQQwZx47OJ36fZN0Zqbg24heA8AEsyelSN2VUv7OuooSkuUtn2EE2W3c', '2020-08-25 01:56:02', '2020-08-25 01:56:02', 'user'),
(6, 'Dwi Andika', 'andikadwi@gmail.com', '$2y$10$t/rkOKl36UOl4RjC5j/H3usMOw5HF3PU5g/1h2Fqmi8DYoJWaxvvW', NULL, '2020-08-29 13:38:06', '2020-08-29 13:38:06', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
