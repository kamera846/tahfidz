-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2020 pada 07.07
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
-- Struktur dari tabel `juz`
--

CREATE TABLE `juz` (
  `id` int(10) UNSIGNED NOT NULL,
  `santri_id` int(10) UNSIGNED NOT NULL,
  `juz_ke` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `juz`
--

INSERT INTO `juz` (`id`, `santri_id`, `juz_ke`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-26 00:58:11', NULL),
(2, 2, 1, '2020-09-16 13:13:11', NULL),
(3, 3, 1, '2020-10-09 11:08:44', NULL),
(4, 4, 1, '2020-09-21 02:20:32', NULL),
(5, 5, 1, '2020-09-12 14:53:56', NULL);

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
(8, '2020_09_01_075941_create_santri_table', 4),
(9, '2020_09_02_055244_create_wali_table', 5),
(10, '2020_09_03_033904_add_new_column_to_santri_table', 6),
(11, '2020_09_03_034215_new_column_santri_table', 7),
(12, '2020_09_03_034913_create_wali_table', 8),
(13, '2020_09_04_234829_ubah_nama_table_user', 9),
(14, '2020_09_05_010908_create_wali_table', 10),
(16, '2020_09_05_011818_column_foreign_table', 11),
(17, '2020_09_05_050644_create_spp_table', 11),
(18, '2020_09_05_053115_delete_column_foreign_table', 12),
(19, '2020_09_07_060308_foreign_wali_table', 13),
(20, '2020_09_07_061510_create_table', 13),
(21, '2020_09_07_061705_foreign_table', 14),
(24, '2020_09_07_062125_foreign_santri_table', 15),
(25, '2020_09_11_075218_create_ustadz_table', 16),
(26, '2020_09_23_081212_create_foreign_juz_table', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `murojaah`
--

CREATE TABLE `murojaah` (
  `id` int(10) UNSIGNED NOT NULL,
  `santri_id` bigint(20) UNSIGNED NOT NULL,
  `halaman` int(255) NOT NULL,
  `jumlah_hafalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_hafalan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `murojaah`
--

INSERT INTO `murojaah` (`id`, `santri_id`, `halaman`, `jumlah_hafalan`, `jenis`, `status_hafalan`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '2/4', 'wajib', 1, '2020-09-03 09:59:59', NULL),
(2, 2, 6, '3/4', 'wajib', 1, '2020-09-03 09:59:59', NULL),
(3, 3, 7, '1/4', 'wajib', 0, '2020-09-03 09:59:59', NULL),
(4, 4, 17, '2/4', 'wajib', 1, '2020-09-03 09:59:59', NULL),
(5, 5, 2, '3/4', 'wajib', 1, '2020-09-03 09:59:59', NULL),
(6, 1, 16, '3/4', 'wajib', 0, '2020-09-10 09:59:59', NULL),
(7, 2, 7, '1/4', 'wajib', 0, '2020-09-10 09:59:59', NULL),
(8, 3, 9, '2/4', 'wajib', 1, '2020-09-10 09:59:59', NULL),
(9, 4, 18, '1/4', 'wajib', 0, '2020-09-10 09:59:59', NULL),
(10, 5, 1, '3/4', 'wajib', 0, '2020-09-10 09:59:59', NULL),
(11, 1, 3, '1/4', 'wajib', 0, '2020-09-17 09:59:59', NULL),
(12, 2, 2, '3/4', 'wajib', 1, '2020-09-17 09:59:59', NULL),
(13, 3, 7, '4/4', 'wajib', 0, '2020-09-17 09:59:59', NULL),
(14, 4, 12, '3/4', 'wajib', 0, '2020-09-17 09:59:59', NULL),
(15, 5, 13, '3/4', 'wajib', 1, '2020-09-17 09:59:59', NULL),
(16, 1, 15, '2/4', 'wajib', 1, '2020-09-24 09:59:59', NULL),
(17, 2, 18, '2/4', 'wajib', 0, '2020-09-24 09:59:59', NULL),
(18, 3, 7, '3/4', 'wajib', 1, '2020-09-24 09:59:59', NULL),
(19, 4, 17, '1/4', 'wajib', 0, '2020-09-24 09:59:59', NULL),
(20, 5, 9, '3/4', 'wajib', 0, '2020-09-24 09:59:59', NULL),
(21, 1, 7, '3/4', 'tambahan', 1, '2020-09-03 09:59:59', NULL),
(22, 2, 6, '4/4', 'tambahan', 1, '2020-09-03 09:59:59', NULL),
(23, 3, 14, '3/4', 'tambahan', 0, '2020-09-03 09:59:59', NULL),
(24, 4, 8, '2/4', 'tambahan', 0, '2020-09-03 09:59:59', NULL),
(25, 5, 19, '4/4', 'tambahan', 1, '2020-09-03 09:59:59', NULL),
(26, 1, 2, '1/4', 'tambahan', 1, '2020-09-10 09:59:59', NULL),
(27, 2, 16, '2/4', 'tambahan', 0, '2020-09-10 09:59:59', NULL),
(28, 3, 8, '4/4', 'tambahan', 1, '2020-09-10 09:59:59', NULL),
(29, 4, 5, '2/4', 'tambahan', 0, '2020-09-10 09:59:59', NULL),
(30, 5, 11, '3/4', 'tambahan', 0, '2020-09-10 09:59:59', NULL),
(31, 1, 20, '4/4', 'tambahan', 1, '2020-09-17 09:59:59', NULL),
(32, 2, 3, '2/4', 'tambahan', 1, '2020-09-17 09:59:59', NULL),
(33, 3, 11, '1/4', 'tambahan', 0, '2020-09-17 09:59:59', NULL),
(34, 4, 1, '2/4', 'tambahan', 1, '2020-09-17 09:59:59', NULL),
(35, 5, 5, '1/4', 'tambahan', 1, '2020-09-17 09:59:59', NULL),
(36, 1, 2, '3/4', 'tambahan', 1, '2020-09-24 09:59:59', NULL),
(37, 2, 3, '4/4', 'tambahan', 1, '2020-09-24 09:59:59', NULL),
(38, 3, 4, '3/4', 'tambahan', 1, '2020-09-24 09:59:59', NULL),
(39, 4, 3, '4/4', 'tambahan', 0, '2020-09-24 09:59:59', NULL),
(40, 5, 19, '3/4', 'tambahan', 1, '2020-09-24 09:59:59', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$NKoyEiSbOdj2lF.cl27FdOeAmEQVU99btBscjNH8EYLKPHnkygLtS', '2020-09-15 00:31:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `id` int(10) UNSIGNED NOT NULL,
  `wali_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`id`, `wali_id`, `nama`, `kelas`, `jk`, `created_at`, `updated_at`) VALUES
(1, 1, 'Farah Nuraini', '2', 'Laki-laki', '2020-09-16 02:27:38', NULL),
(2, 2, 'Ani Wahyuni', '2', 'Laki-laki', '2020-09-15 19:12:38', NULL),
(3, 3, 'Kasusra Wahyudin S.Sos', '3', 'Perempuan', '2020-09-26 08:31:31', NULL),
(4, 4, 'Gandewa Jailani', '2', 'Laki-laki', '2020-09-12 21:22:18', NULL),
(5, 5, 'Talia Rahayu', '5', 'Perempuan', '2020-09-11 18:58:09', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id` int(10) UNSIGNED NOT NULL,
  `santri_id` int(11) NOT NULL,
  `nominal` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id`, `santri_id`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 1, '744885', NULL, NULL),
(2, 2, '10959454', NULL, NULL),
(3, 3, '8591159', NULL, NULL),
(4, 4, '751', NULL, NULL),
(5, 5, '26891112', NULL, NULL),
(6, 6, '5', NULL, NULL),
(7, 7, '5076589', NULL, NULL),
(8, 8, '44', NULL, NULL),
(9, 9, '744975620', NULL, NULL),
(10, 10, '86453625', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `surat_indonesia` varchar(50) NOT NULL,
  `surat_arab` varchar(50) CHARACTER SET utf8 NOT NULL,
  `arti` varchar(100) NOT NULL,
  `jumlah_ayat` int(11) NOT NULL,
  `tempat_turun` varchar(50) NOT NULL,
  `urutan_pewahyuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `surat_indonesia`, `surat_arab`, `arti`, `jumlah_ayat`, `tempat_turun`, `urutan_pewahyuan`) VALUES
(1, 'Surah Al-Fatihah', 'الفاتحة', 'Pembukaan', 7, 'Mekkah', 5),
(2, 'Surah Al-Baqarah', 'البقرة', 'Sapi Betina', 286, 'Madinah', 87),
(3, 'Surah Ali `Imran', 'آل عمران', 'Keluarga `Imran', 200, 'Madinah', 89),
(4, 'Surah An-Nisa`', 'النّساء', 'Wanita', 176, 'Madinah', 92),
(5, 'Surah Al-Ma`idah', 'المآئدة', 'Jamuan (hidangan makanan)', 120, 'Madinah', 112),
(6, 'Surah Al-An`am', 'الانعام', 'Binatang Ternak', 165, 'Mekkah', 55),
(7, 'Surah Al-A’raf', 'الأعراف', 'Tempat yang tertinggi', 206, 'Mekkah', 39),
(8, 'Surah Al-Anfal', 'الأنفال', 'Harta rampasan perang', 75, 'Madinah', 88),
(9, 'Surah At-Taubah', 'التوبة‎‎', 'Pengampunan', 129, 'Madinah', 113),
(10, 'Surah Yunus', 'ينوس', 'Nabi Yunus', 109, 'Mekkah', 51),
(11, 'Surah Hud', 'هود', 'Nabi Hud', 123, 'Mekkah', 52),
(12, 'Surah Yusuf', 'يسوف', 'Nabi Yusuf', 111, 'Mekkah', 53),
(13, 'Surah Ar-Ra’d', 'الرّعد', 'Guruh (petir)', 43, 'Mekkah', 96),
(14, 'Surah Ibrahim', 'إبراهيم', 'Nabi Ibrahim', 52, 'Mekkah', 72),
(15, 'Surah Al-Hijr', 'الحجر', 'Al Hijr (nama gunung)', 99, 'Mekkah', 54),
(16, 'Surah An-Nahl', 'النّحل', 'Lebah', 128, 'Mekkah', 70),
(17, 'Surah Al-Isra`', 'الإسرا', 'Perjalanan Malam', 111, 'Mekkah', 50),
(18, 'Surah Al-Kahf', 'الكهف', 'Penghuni-penghuni gua', 110, 'Mekkah', 69),
(19, 'Surah Maryam', 'مريم', 'Maryam (Maria)', 98, 'Mekkah', 44),
(20, 'Surah Ta Ha', 'طه', 'Ta Ha', 135, 'Mekkah', 45),
(21, 'Surah Al-Anbiya', 'الأنبياء', 'Nabi-Nabi', 112, 'Mekkah', 73),
(22, 'Surah Al-Hajj', 'الحجّ', 'Haji', 78, 'Madinah & Makkah', 103),
(23, 'Surah Al-Mu’minun', 'المؤمنون', 'Orang-orang mukmin', 118, 'Mekkah', 74),
(24, 'Surah An-Nur', 'النّور', 'Cahaya', 64, 'Madinah', 102),
(25, 'Surah Al-Furqan', 'الفرقان', 'Pembeda', 77, 'Mekkah', 42),
(26, 'Surah Asy-Syu`ara`', 'الشّعراء', 'Penyair', 227, 'Mekkah', 47),
(27, 'Surah An-Naml', 'النّمل', 'Semut', 93, 'Mekkah', 48),
(28, 'Surah Al-Qasas', 'القصص', 'Cerita', 88, 'Mekkah', 49),
(29, 'Surah Al-`Ankabut', 'العنكبوت', 'Laba-laba', 69, 'Mekkah', 85),
(30, 'Surah Ar-Rum', 'الرّوم', 'Bangsa Romawi', 60, 'Mekkah', 84),
(31, 'Surah Luqman', 'لقمان', 'Keluarga Luqman', 34, 'Mekkah', 57),
(32, 'Surah As-Sajdah', 'السّجدة', 'Sajdah', 30, 'Mekkah', 75),
(33, 'Surah Al-Ahzab', 'الْأحزاب', 'Golongan-Golongan yang bersekutu', 73, 'Madinah', 90),
(34, 'Surah Saba’', 'سبا', 'Kaum Saba`', 54, 'Mekkah', 58),
(35, 'Surah Fatir', 'فاطر', 'Pencipta', 45, 'Mekkah', 43),
(36, 'Surah Ya Sin', 'يس', 'Yaasiin', 83, 'Mekkah', 41),
(37, 'Surah As-Saffat', 'الصّافات', 'Barisan-barisan', 182, 'Mekkah', 56),
(38, 'Surah Sad', 'ص', 'Shaad', 88, 'Mekkah', 38),
(39, 'Surah Az-Zumar', 'الزّمر', 'Rombongan-rombongan', 75, 'Mekkah', 59),
(40, 'Surah Al-Mu’min', 'المؤمن', 'Orang yg Beriman', 85, 'Mekkah', 60),
(41, 'Surah Fussilat', 'فصّلت', 'Yang dijelaskan', 54, 'Mekkah', 61),
(42, 'Surah Asy-Syura', 'الشّورى', 'Musyawarah', 53, 'Mekkah', 62),
(43, 'Surah Az-Zukhruf', 'الزّخرف', 'Perhiasan', 89, 'Mekkah', 63),
(44, 'Surah Ad-Dukhan', 'الدّخان', 'Kabut', 59, 'Mekkah', 64),
(45, 'Surah Al-Jasiyah', 'الجاثية', 'Yang bertekuk lutut', 37, 'Mekkah', 65),
(46, 'Surah Al-Ahqaf', 'الَأحقاف', 'Bukit-bukit pasir', 35, 'Mekkah', 66),
(47, 'Surah Muhammad', 'محمّد', 'Muhammad', 38, 'Madinah', 95),
(48, 'Surah Al-Fath', 'الفتح', 'Kemenangan', 29, 'Madinah', 111),
(49, 'Surah Al-Hujurat', 'الحجرات', 'Kamar-kamar', 18, 'Madinah', 106),
(50, 'Surah Qaf', 'ق', 'Qaaf', 45, 'Mekkah', 34),
(51, 'Surah Az-Zariyat', 'الذّاريات', 'Angin yang menerbangkan', 60, 'Mekkah', 67),
(52, 'Surah At-Tur', 'الطّور', 'Bukit', 49, 'Mekkah', 76),
(53, 'Surah An-Najm', 'النّجْم', 'Bintang', 62, 'Mekkah', 23),
(54, 'Surah Al-Qamar', 'القمر', 'Bulan', 55, 'Mekkah', 37),
(55, 'Surah Ar-Rahman', 'الرّحْمن', 'Yang Maha Pemurah', 78, 'Madinah & Mekkah', 97),
(56, 'Surah Al-Waqi’ah', 'الواقعه', 'Hari Kiamat', 96, 'Mekkah', 46),
(57, 'Surah Al-Hadid', 'الحديد', 'Besi', 29, 'Madinah', 94),
(58, 'Surah Al-Mujadilah', 'المجادلة', 'Wanita yang mengajukan gugatan', 22, 'Madinah', 105),
(59, 'Surah Al-Hasyr', 'الحشْر', 'Pengusiran', 24, 'Madinah', 101),
(60, 'Surah Al-Mumtahanah', 'الممتحنة', 'Wanita yang diuji', 13, 'Madinah', 91),
(61, 'Surah As-Saff', 'الصّفّ', 'Satu barisan', 14, 'Madinah', 109),
(62, 'Surah Al-Jumu’ah', 'الجمعة', 'Hari Jum’at', 11, 'Madinah', 110),
(63, 'Surah Al-Munafiqun', 'المنافقون', 'Orang-orang yang munafik', 11, 'Madinah', 104),
(64, 'Surah At-Tagabun', 'التّغابن', 'Hari dinampakkan kesalahan-kesalahan', 18, 'Madinah', 108),
(65, 'Surah At-Talaq', 'الطّلاق', 'Talak', 12, 'Madinah', 99),
(66, 'Surah At-Tahrim', 'التّحريم', 'Mengharamkan', 12, 'Madinah', 107),
(67, 'Surah Al-Mulk', 'الملك', 'Kerajaan', 30, 'Mekkah', 77),
(68, 'Surah Al-Qalam', 'القلم', 'Pena', 52, 'Mekkah', 2),
(69, 'Surah Al-Haqqah', 'الحآقّة', 'Hari kiamat', 52, 'Mekkah', 78),
(70, 'Surah Al-Ma’arij', 'المعارج', 'Tempat naik', 44, 'Mekkah', 79),
(71, 'Surah Nuh', 'نوح', 'Nuh', 28, 'Mekkah', 71),
(72, 'Surah Al-Jinn', 'الجنّ', 'Jin', 28, 'Mekkah', 40),
(73, 'Surah Al-Muzzammil', 'المزمّل', 'Orang yang berselimut', 20, 'Mekkah', 3),
(74, 'Surah Al-Muddassir', 'المدشّر', 'Orang yang berkemul', 56, 'Mekkah', 4),
(75, 'Surah Al-Qiyamah', 'القيمة', 'Hari Kiamat', 40, 'Mekkah', 31),
(76, 'Surah Al-Insan', 'الْاٍنسان', 'Manusia', 31, 'Madinah', 98),
(77, 'Surah Al-Mursalat', 'المرسلات', 'Malaikat-Malaikat Yang Diutus', 50, 'Mekkah', 33),
(78, 'Surah An-Naba’', 'النّبا', 'Berita besar', 40, 'Mekkah', 80),
(79, 'Surah An-Nazi’at', 'النّازعات', 'Malaikat-Malaikat Yang Mencabut', 46, 'Mekkah', 81),
(80, 'Surah `Abasa', 'عبس', 'Ia Bermuka masam', 42, 'Mekkah', 24),
(81, 'Surah At-Takwir', 'التّكوير', 'Menggulung', 29, 'Mekkah', 7),
(82, 'Surah Al-Infitar', 'الانفطار', 'Terbelah', 19, 'Mekkah', 82),
(83, 'Surah Al-Tatfif', 'المطفّفين', 'Orang-orang yang curang', 36, 'Mekkah', 86),
(84, 'Surah Al-Insyiqaq', 'الانشقاق', 'Terbelah', 25, 'Mekkah', 83),
(85, 'Surah Al-Buruj', 'البروج', 'Gugusan bintang', 22, 'Mekkah', 27),
(86, 'Surah At-Tariq', 'الطّارق', 'Yang datang di malam hari', 17, 'Mekkah', 36),
(87, 'Surah Al-A’la', 'الْأعلى', 'Yang paling tinggi', 19, 'Mekkah', 8),
(88, 'Surah Al-Gasyiyah', 'الغاشية', 'Hari Pembalasan', 26, 'Mekkah', 68),
(89, 'Surah Al-Fajr', 'الفجر', 'Fajar', 30, 'Mekkah', 10),
(90, 'Surah Al-Balad', 'البلد', 'Negeri', 20, 'Mekkah', 35),
(91, 'Surah Asy-Syams', 'الشّمس', 'Matahari', 15, 'Mekkah', 26),
(92, 'Surah Al-Lail', 'الّيل', 'Malam', 21, 'Mekkah', 9),
(93, 'Surah Ad-Duha', 'الضحى‎‎', 'Waktu matahari sepenggalahan naik (Dhuha)', 11, 'Mekkah', 11),
(94, 'Surah Al-Insyirah', 'الانشراح‎‎', 'Melapangkan', 8, 'Mekkah', 12),
(95, 'Surah At-Tin', 'التِّينِ', 'Buah Tin', 8, 'Mekkah', 28),
(96, 'Surah Al-`Alaq', 'العَلَق', 'Segumpal Darah', 19, 'Mekkah', 1),
(97, 'Surah Al-Qadr', 'الْقَدْرِ', 'Kemuliaan', 5, 'Mekkah', 25),
(98, 'Surah Al-Bayyinah', 'الْبَيِّنَةُ', 'Pembuktian', 8, 'Madinah', 100),
(99, 'Surah Az-Zalzalah', 'الزلزلة‎‎', 'Kegoncangan', 8, 'Madinah', 93),
(100, 'Surah Al-`Adiyat', 'العاديات‎‎', 'Berlari kencang', 11, 'Mekkah', 14),
(101, 'Surah Al-Qari`ah', 'القارعة‎‎', 'Hari Kiamat', 11, 'Mekkah', 30),
(102, 'Surah At-Takasur', 'التكاثر‎‎', 'Bermegah-megahan', 8, 'Mekkah', 16),
(103, 'Surah Al-`Asr', 'العصر', 'Masa/Waktu', 3, 'Mekkah', 13),
(104, 'Surah Al-Humazah', 'الهُمَزة‎‎', 'Pengumpat', 9, 'Mekkah', 32),
(105, 'Surah Al-Fil', 'الْفِيلِ', 'Gajah', 5, 'Mekkah', 19),
(106, 'Surah Quraisy', 'قُرَيْشٍ', 'Suku Quraisy', 4, 'Mekkah', 29),
(107, 'Surah Al-Ma’un', 'الْمَاعُونَ', 'Barang-barang yang berguna', 7, 'Mekkah', 17),
(108, 'Surah Al-Kausar', 'الكوثر', 'Nikmat yang berlimpah', 3, 'Mekkah', 15),
(109, 'Surah Al-Kafirun', 'الْكَافِرُونَ', 'Orang-orang kafir', 6, 'Mekkah', 18),
(110, 'Surah An-Nasr', 'النصر‎‎', 'Pertolongan', 3, 'Madinah', 114),
(111, 'Surah Al-Lahab', 'المسد‎‎', 'Gejolak Api/ Sabut', 5, 'Mekkah', 6),
(112, 'Surah Al-Ikhlas', 'الإخلاص‎‎', 'Ikhlas', 4, 'Mekkah', 22),
(113, 'Surah Al-Falaq', 'الْفَلَقِ', 'Waktu Subuh', 5, 'Mekkah', 20),
(114, 'Surah An-Nas', 'النَّاسِ', 'Manusia', 6, 'Mekkah', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'admin@gmail.com', '$2y$10$23kBBWI6UsKer2FvjFBMROT4ZUKt4.4W.dCd6AJghJ5AZvcjdv5IK', 'fzqFecediUPUPZyntDmRZtjyX5w9XKq6bX4BY5gC0NyNUb6vdVV6dGVXnEJ6', '2020-08-25 01:55:45', '2020-08-25 01:55:45', 'admin'),
(2, 'wayan@gmail.com', '$2y$10$QNRqU3LaFZQP8fTpTP4/deiQlTV/e.T3gkl09D020lTdAbVXqCFRm', NULL, '2020-09-06 23:49:55', '2020-09-06 23:49:55', 'user'),
(3, 'suwarlik@gmail.com', '$2y$10$RbQHMXx8UnVvufwYlYsBjOti8U/.JRkoYTUBLLhqmgu3M46bJAykG', '0Xxne55AjTF029oy1kyribMV9SVhIYjAj2mcNdGiec3JTS0xsV7W8BE2izrO', '2020-09-06 23:50:38', '2020-09-06 23:50:38', 'user'),
(4, 'sabrina.haryanti@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'GIuuT51hwA', '2020-09-23 19:44:37', NULL, 'user'),
(5, 'elma85@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', '6Swnheht35', '2020-09-13 15:52:38', NULL, 'user'),
(6, 'violet.novitasari@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'TAXGKHcLrT', '2020-10-05 21:13:03', NULL, 'user'),
(7, 'aryani.gangsar@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'Ci0C6FH1Vu', '2020-09-24 15:26:01', NULL, 'user'),
(8, 'dalimin.oktaviani@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'TtuOeRyFoR', '2020-09-17 16:27:44', NULL, 'user'),
(9, 'mansur.gasti@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'EAnUjvBFwo', '2020-09-14 16:47:04', NULL, 'user'),
(10, 'mursita.waskita@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'HXmxQCu3KM', '2020-09-14 11:44:22', NULL, 'user'),
(11, 'aurora.budiman@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'oEvRpXIzUB', '2020-09-16 08:07:40', NULL, 'user'),
(12, 'anggriawan.amalia@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'MgDbcmTL60', '2020-09-28 12:45:15', NULL, 'user'),
(13, 'dwi80@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'caRmYBqh7r', '2020-09-15 18:52:55', NULL, 'user'),
(14, 'rbudiyanto@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'cGQ1c21jyK', '2020-10-01 22:38:45', NULL, 'user'),
(15, 'sitorus.zulfa@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'VSwmBF5YV6', '2020-09-16 22:45:12', NULL, 'user'),
(16, 'ika49@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'B9nwskrAnL', '2020-09-16 11:59:05', NULL, 'user'),
(17, 'nilam79@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', '65GEUN0ioi', '2020-09-24 05:02:40', NULL, 'user'),
(18, 'widya.hariyah@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', '2YDSYm60Hf', '2020-09-25 21:18:08', NULL, 'user'),
(19, 'mulyani.gilang@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'nNcMhX8iL4', '2020-10-07 13:39:29', NULL, 'user'),
(20, 'usada.bajragin@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'Wp0Ld2pXfU', '2020-09-11 09:39:39', NULL, 'user'),
(21, 'hardi.andriani@gmail.com', '$2y$10$C9oMtDJ9Er1EwH1KlR9ZAeUQS9DVd9tBr.RZEUgDtoy9o0oPhxyEi', 'g2DvDjqcg4', '2020-09-16 20:55:23', NULL, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ustadz`
--

CREATE TABLE `ustadz` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali`
--

CREATE TABLE `wali` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wali`
--

INSERT INTO `wali` (`id`, `user_id`, `nama`, `no_telp`, `alamat`, `jk`, `created_at`, `updated_at`) VALUES
(1, 2, 'I Wayan Mertayasa', '089765431234', 'Jalan Jombang Gg.3A no.15', 'Laki-laki', '2020-09-06 23:49:55', '2020-09-06 23:49:55'),
(2, 3, 'Suwarlik', '08974567312', 'Jalan Jombang Gg.3A', 'Perempuan', '2020-09-06 23:50:38', '2020-09-06 23:50:38'),
(3, 4, 'Bahuwarna Saka Dabukke S.T.', '0412 6868 414', 'Psr. Dr. Junjunan No. 635, Tegal 86837, KalTim', 'Laki-laki', '2020-10-08 07:55:28', NULL),
(4, 5, 'Nugraha Ardianto', '(+62) 776 3176 8549', 'Gg. Sumpah Pemuda No. 819, Tebing Tinggi 91110, Bali', 'Perempuan', '2020-09-24 02:45:42', NULL),
(5, 6, 'Almira Sudiati', '(+62) 581 0829 3879', 'Gg. Jakarta No. 141, Magelang 23757, SulBar', 'Perempuan', '2020-09-10 03:14:37', NULL),
(6, 7, 'Galuh Utama', '(+62) 885 1743 327', 'Ds. Siliwangi No. 990, Palembang 21058, SulTeng', 'Perempuan', '2020-09-16 19:49:49', NULL),
(7, 8, 'Septi Cinthia Agustina', '0617 0757 114', 'Psr. Laswi No. 541, Cimahi 11861, Aceh', 'Perempuan', '2020-09-23 09:45:03', NULL),
(8, 9, 'Winda Lestari', '0702 0294 657', 'Ds. Pasteur No. 956, Bogor 65174, NTT', 'Perempuan', '2020-09-20 16:47:18', NULL),
(9, 10, 'Febi Agustina', '(+62) 331 8050 1278', 'Ki. Raya Ujungberung No. 418, Palangka Raya 60851, SumBar', 'Perempuan', '2020-10-02 02:42:21', NULL),
(10, 11, 'Bahuwirya Viman Hardiansyah', '0783 3079 684', 'Jr. Reksoninten No. 804, Tomohon 57703, KepR', 'Laki-laki', '2020-09-16 07:55:18', NULL),
(11, 12, 'Winda Agustina', '(+62) 777 9289 876', 'Psr. Cut Nyak Dien No. 831, Palopo 60642, Jambi', 'Laki-laki', '2020-09-18 00:06:18', NULL),
(12, 13, 'Gina Mandasari', '(+62) 953 4850 075', 'Psr. Ujung No. 132, Tanjung Pinang 54811, BaBel', 'Perempuan', '2020-09-13 17:04:55', NULL),
(13, 14, 'Intan Wahyuni', '0337 3116 7975', 'Ds. Sunaryo No. 64, Administrasi Jakarta Pusat 76372, SulSel', 'Perempuan', '2020-09-12 01:53:32', NULL),
(14, 15, 'Parman Prasetya', '022 2808 225', 'Ds. Ikan No. 463, Ambon 70420, SulBar', 'Laki-laki', '2020-09-14 01:40:12', NULL),
(15, 16, 'Clara Prastuti', '0322 4355 889', 'Jr. R.E. Martadinata No. 171, Cilegon 10015, NTT', 'Laki-laki', '2020-10-06 22:49:37', NULL),
(16, 17, 'Halima Septi Puspita', '(+62) 341 4796 613', 'Ki. Honggowongso No. 877, Langsa 17713, SulTra', 'Laki-laki', '2020-10-03 00:56:54', NULL),
(17, 18, 'Wadi Maryadi', '(+62) 876 7505 740', 'Jln. Salam No. 594, Bau-Bau 19534, NTB', 'Laki-laki', '2020-09-15 14:28:05', NULL),
(18, 19, 'Saiful Paiman Marbun S.E.', '(+62) 835 808 796', 'Psr. Otista No. 588, Prabumulih 41206, BaBel', 'Perempuan', '2020-10-06 01:03:03', NULL),
(19, 20, 'Padma Rahimah', '0583 4295 8444', 'Ki. Sukabumi No. 861, Gorontalo 80025, PapBar', 'Laki-laki', '2020-10-01 04:55:59', NULL),
(20, 21, 'Agnes Agustina S.Sos', '(+62) 24 5879 8208', 'Jln. Cikutra Timur No. 391, Pontianak 30036, Bengkulu', 'Laki-laki', '2020-09-15 11:27:17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `juz`
--
ALTER TABLE `juz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `juz_santri_id_foreign` (`santri_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `murojaah`
--
ALTER TABLE `murojaah`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `santri_wali_id_foreign` (`wali_id`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `ustadz`
--
ALTER TABLE `ustadz`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wali_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `juz`
--
ALTER TABLE `juz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `murojaah`
--
ALTER TABLE `murojaah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `ustadz`
--
ALTER TABLE `ustadz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wali`
--
ALTER TABLE `wali`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `juz`
--
ALTER TABLE `juz`
  ADD CONSTRAINT `juz_santri_id_foreign` FOREIGN KEY (`santri_id`) REFERENCES `santri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `santri_wali_id_foreign` FOREIGN KEY (`wali_id`) REFERENCES `wali` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD CONSTRAINT `wali_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
