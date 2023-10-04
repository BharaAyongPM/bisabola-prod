-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2023 pada 11.12
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisabola`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_club` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `pelatih` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `clubs`
--

INSERT INTO `clubs` (`id`, `nama_club`, `deskripsi`, `alamat`, `manager`, `pelatih`, `no_telp`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'bayangkara fc', 'awdawdwdawdawdaw', 'giritontro', 'adisusanto', 'adijatmiko', '12345678', 'adijatmiko@gmail.com', 'hCm656TU6kFRGbrj70j7cn9Wxmu2qrM0qyU78QOM.png', '2023-07-27 10:41:02', '2023-07-28 01:59:17'),
(2, 'pemuda 17', '', 'malang', 'maryanto', 'maliki', '078845785', 'user2@gmail.com', 'WKU3navQF5f1Ne0cIzVUP5rRHxhM93JiTFVWOnI2.png', '2023-07-28 01:57:38', '2023-07-28 01:57:38'),
(3, 'garuda', '', 'arab', 'surtarte', 'mayam', '134231', 'bambang@gmail.com', 'eX6uMfI2hyJD2KiWw3oDpUfpwoVrc3i2BNvtRmvN.png', '2023-07-28 01:58:19', '2023-07-28 01:58:19'),
(4, 'Diklat Isa U17', '', 'Jakarta', 'Diklat', 'Diklat', '089766474', 'diklatisa@gmail.com', 'itheKmuMzfhn5qjiNP9F72KrV8ahfSUTqX7dSNnQ.png', '2023-07-29 00:45:25', '2023-07-29 00:45:25');

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
-- Struktur dari tabel `leagues`
--

CREATE TABLE `leagues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_liga` varchar(255) NOT NULL,
  `jumlah_club` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `penyelenggara` varchar(255) NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `leagues`
--

INSERT INTO `leagues` (`id`, `nama_liga`, `jumlah_club`, `tahun`, `penyelenggara`, `poster`, `created_at`, `updated_at`) VALUES
(1, 'SHOPE LIGA 1', 22, 2023, 'ShopeFood', 'posters/yrc7z7PjvG1NUa4mBVOrbYSQTBzilZCshpdusfYj.jpg', '2023-07-30 01:32:07', '2023-07-30 01:32:07'),
(2, 'gojek', 11, 2343, 'ShopeFood', 'public/poster/etRS7bBvE8VsUu1Uup5SrRVosIw0P85vsI4L7UbJ.jpg', '2023-07-30 01:37:46', '2023-07-30 01:37:46'),
(3, 'liga 3', 11, 2056, 'bisabola', 'public/poster/9lBFr4JqHjYfD6HhDhso2pIi9UhfQwixQR04lqJf.jpg', '2023-07-31 09:08:47', '2023-07-31 09:08:47'),
(4, 'Liga 4', 34, 2023, 'bisabola', 'AjTrjickItrshRW201LWafCnZyCc5KGcSv7W90nf.jpg', '2023-07-31 09:10:24', '2023-07-31 09:10:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `league_participants`
--

CREATE TABLE `league_participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_liga` bigint(20) UNSIGNED NOT NULL,
  `id_club` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `league_participants`
--

INSERT INTO `league_participants` (`id`, `id_liga`, `id_club`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-07-30 09:39:00', '2023-07-30 09:39:00'),
(2, 1, 3, '2023-07-30 09:39:20', '2023-07-30 09:39:20'),
(3, 4, 1, '2023-07-31 09:11:56', '2023-07-31 09:11:56'),
(4, 4, 2, '2023-07-31 09:12:00', '2023-07-31 09:12:00'),
(5, 4, 3, '2023-07-31 09:12:09', '2023-07-31 09:12:09'),
(6, 4, 4, '2023-07-31 09:12:13', '2023-07-31 09:12:13'),
(7, 1, 1, '2023-07-31 09:12:15', '2023-07-31 09:12:15'),
(8, 4, 1, '2023-07-31 09:12:18', '2023-07-31 09:12:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matches`
--

CREATE TABLE `matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_liga` bigint(20) UNSIGNED NOT NULL,
  `id_club_tuan_rumah` bigint(20) UNSIGNED NOT NULL,
  `id_club_tamu` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matches`
--

INSERT INTO `matches` (`id`, `id_liga`, `id_club_tuan_rumah`, `id_club_tamu`, `hari`, `tanggal`, `jam`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 3, 'kamis', '2023-08-25', '02:03:00', 'stadion malang', '2023-08-05 09:00:11', '2023-08-05 09:00:11');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_07_26_154421_create_clubs_table', 1),
(11, '2023_07_28_151316_create_pemain_table', 2),
(12, '2023_07_28_160012_create_players_table', 3),
(13, '2023_07_30_073651_create_leagues_table', 4),
(14, '2023_07_30_162834_create_league_participants_table', 5),
(15, '2023_08_05_154717_create_matches_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Struktur dari tabel `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `player_code` varchar(255) NOT NULL,
  `club_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tinggi` double(8,2) NOT NULL,
  `berat` double(8,2) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `propinsi` varchar(255) NOT NULL,
  `no_whatsapp` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `players`
--

INSERT INTO `players` (`id`, `player_code`, `club_id`, `nama`, `posisi`, `tempat_lahir`, `tanggal_lahir`, `tinggi`, `berat`, `alamat`, `kota`, `propinsi`, `no_whatsapp`, `foto`, `agama`, `created_at`, `updated_at`) VALUES
(2, 'BB-20230721-Kj5P', 3, 'bhara', 'penyerang', 'wonogiri', '2023-07-21', 123.00, 12.00, 'efefesfef', 'efef', 'eeeee', '232313213', 'D:\\xampp\\tmp\\php442.tmp', 'Islam', '2023-07-28 09:04:23', '2023-07-28 09:04:23'),
(3, 'BB-20230710-Z8pi', 3, 'bhara', 'penyerang', 'wonogiri', '2023-07-10', 178.00, 14.00, 'rfgrfef', 'efef', 'eeeee', '45435345', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '2023-07-28 09:13:37', '2023-07-28 09:13:37'),
(4, 'BB-20230713-c5RW', 2, 'awdwadw', 'wwdawd', 'wonogiri', '2023-07-13', 1323.00, 121.00, 'wdawdwa', 'efefe', 'wdwdw', '34342342', 'D:\\xampp\\tmp\\php149F.tmp', 'Buddha', '2023-07-28 23:18:37', '2023-07-28 23:18:37'),
(5, 'BB-20230710-0001', 4, 'HARDIO DEAGO PAMUNGKAS - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.00, 12.00, 'efefesfef', 'efef', 'eeeee', '232313213', 'D:xampp	mpphp442.tmp', 'Islam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'BB-20230710-0002', 4, 'M FITRIADI CAHYA IMAWAN - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 178.00, 14.00, 'rfgrfef', 'efef', 'eeeee', '45435345', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'BB-20230710-0003', 4, 'ZAKI REANANDO - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 1323.00, 121.00, 'wdawdwa', 'efefe', 'wdwdw', '34342342', 'D:xampp	mpphp149F.tmp', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'BB-20230710-0004', 4, 'MUHAMAD NAUFALINGGA WAHYU RAHMATULLAH - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.01, 12.01, 'efefesfef', 'efef', 'eeeee', '-93940571', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'BB-20230710-0005', 4, 'ACHMAD RAFIF NUR HIDAYAT - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 178.01, 14.01, 'rfgrfef', 'efef', 'eeeee', '-192926006,5', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'BB-20230710-0006', 4, 'KHOLID RAMADHAN AL GHIFARI - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 1323.01, 121.01, 'wdawdwa', 'efefe', 'wdwdw', '-291911442', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'BB-20230710-0007', 4, 'MUHAMMAD RAFLI - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.02, 12.02, 'efefesfef', 'efef', 'eeeee', '-390896877,5', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'BB-20230710-0008', 4, 'ABDULLAH ALIM SITEPU - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 178.02, 14.02, 'rfgrfef', 'efef', 'eeeee', '-489882313', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'BB-20230710-0009', 4, 'M YOFAN HAKIM - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 1323.02, 121.02, 'wdawdwa', 'efefe', 'wdwdw', '-588867748,5', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'BB-20230710-0010', 4, 'KEMAS ABD LATIEF - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.03, 12.03, 'efefesfef', 'efef', 'eeeee', '-687853184', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'BB-20230710-0011', 4, 'DARPA GHUSARIB FIRMAN - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 178.03, 14.03, 'rfgrfef', 'efef', 'eeeee', '-786838619,5', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'BB-20230710-0012', 4, 'EDWIEL MRIED WEIN DUWITH - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 1323.03, 121.03, 'wdawdwa', 'efefe', 'wdwdw', '-885824055', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'BB-20230710-0013', 4, 'FIRZI NUR YUSUF - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.04, 12.04, 'efefesfef', 'efef', 'eeeee', '-984809490,5', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'BB-20230710-0014', 4, 'MUHAMAD RAFLY - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 178.04, 14.04, 'rfgrfef', 'efef', 'eeeee', '-1083794926', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'BB-20230710-0015', 4, 'AZMIY AZIZ - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 1323.04, 121.04, 'wdawdwa', 'efefe', 'wdwdw', '-1182780362', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'BB-20230710-0016', 4, 'DIBRILIAN PANGGIKUNGGAWAK YIGIBALOM - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.05, 12.05, 'efefesfef', 'efef', 'eeeee', '-1281765797', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'BB-20230710-0017', 4, 'M. FARHAN SAVIOLA - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 178.05, 14.05, 'rfgrfef', 'efef', 'eeeee', '-1380751233', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'BB-20230710-0018', 4, 'FARRELL AKMAL ARYASATYA - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 1323.05, 121.05, 'wdawdwa', 'efefe', 'wdwdw', '-1479736668', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'BB-20230710-0019', 4, 'MUHAMAD RASYID - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.06, 12.06, 'efefesfef', 'efef', 'eeeee', '-1578722104', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'BB-20230710-0020', 4, 'ANDIKA PATRISA AKBAR - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 178.06, 14.06, 'rfgrfef', 'efef', 'eeeee', '-1677707539', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'BB-20230710-0021', 4, 'I GST PUTU DIVYA ANGDY - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 1323.06, 121.06, 'wdawdwa', 'efefe', 'wdwdw', '-1776692975', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'BB-20230710-0022', 4, 'RENDI IRAWAN - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.07, 12.07, 'efefesfef', 'efef', 'eeeee', '-1875678410', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'BB-20230710-0023', 4, 'ZUCHLI IMRAN PUTRA - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 178.07, 14.07, 'rfgrfef', 'efef', 'eeeee', '-1974663846', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'BB-20230710-0024', 4, 'WORGU CHIEMELA - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 1323.07, 121.07, 'wdawdwa', 'efefe', 'wdwdw', '-2073649281', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'BB-20230710-0025', 4, 'DONI CAHYO NUGROHO - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.08, 12.08, 'efefesfef', 'efef', 'eeeee', '-2172634717', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'BB-20230710-0026', 4, 'ANDITA NUR ARIFAH - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 178.08, 14.08, 'rfgrfef', 'efef', 'eeeee', '-2271620152', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'BB-20230710-0027', 4, 'NASRIKAH - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 1323.08, 121.08, 'wdawdwa', 'efefe', 'wdwdw', '-2370605588', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'BB-20230710-0028', 4, 'H HARY RUSWANTO - DIKLAT ISA U17', 'bek kanan', 'jakarta', '0000-00-00', 123.09, 12.09, 'efefesfef', 'efef', 'eeeee', '-2469591023', 'lhvAdwcwqrEGRigC5S8bD4ml5fTlH9GTNWi5EXnY.jpg', 'Buddha', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2023-07-27 15:29:00', '$2a$12$Xdb0htEWu4Ic245/7QkfpOz0BjsT4iina/Dc9KiCBbmi6eYkIbgPi', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `league_participants`
--
ALTER TABLE `league_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `league_participants_id_liga_foreign` (`id_liga`),
  ADD KEY `league_participants_id_club_foreign` (`id_club`);

--
-- Indeks untuk tabel `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matches_id_liga_foreign` (`id_liga`),
  ADD KEY `matches_id_club_tuan_rumah_foreign` (`id_club_tuan_rumah`),
  ADD KEY `matches_id_club_tamu_foreign` (`id_club_tamu`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `players_player_code_unique` (`player_code`),
  ADD KEY `players_club_id_foreign` (`club_id`);

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
-- AUTO_INCREMENT untuk tabel `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `league_participants`
--
ALTER TABLE `league_participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `league_participants`
--
ALTER TABLE `league_participants`
  ADD CONSTRAINT `league_participants_id_club_foreign` FOREIGN KEY (`id_club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `league_participants_id_liga_foreign` FOREIGN KEY (`id_liga`) REFERENCES `leagues` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_id_club_tamu_foreign` FOREIGN KEY (`id_club_tamu`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matches_id_club_tuan_rumah_foreign` FOREIGN KEY (`id_club_tuan_rumah`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matches_id_liga_foreign` FOREIGN KEY (`id_liga`) REFERENCES `leagues` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
