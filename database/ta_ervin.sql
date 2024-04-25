-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 09:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_ervin`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_artikel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_artikel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users` bigint(20) UNSIGNED DEFAULT NULL,
  `kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar_artikel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul_artikel`, `isi_artikel`, `users`, `kategori`, `created_at`, `updated_at`, `gambar_artikel`) VALUES
(1, 'Tes Artikel', '<p>TES</p>', 1, 1, '2023-05-08 01:18:59', '2023-05-08 01:18:59', '1683537539102.2020-02-05.jpg');

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
-- Table structure for table `kategori_artikels`
--

CREATE TABLE `kategori_artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hastag_kategori` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_artikels`
--

INSERT INTO `kategori_artikels` (`id`, `nama_kategori`, `hastag_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Umum', '#umum', '2023-05-08 01:18:31', '2023-05-08 01:18:31');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekolahs`
--

CREATE TABLE `sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koordinat_gps` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kebutuhan_tenagakerja` int(10) DEFAULT NULL,
  `informasi_lainnya` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('DICARI','TIDAK SEDANG MENCARI') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekolahs`
--

INSERT INTO `sekolahs` (`id`, `nama_sekolah`, `alamat_sekolah`, `koordinat_gps`, `kebutuhan_tenagakerja`, `informasi_lainnya`, `created_at`, `updated_at`, `gambar`, `status`, `jurusan`) VALUES
(1, 'SMA Kristen 1 Tomohon', 'Talete 2, Tomohon, Sulawesi Utara, Indonesia', '1.3121617653951436, 124.84294712622491', 2, '<p><em><strong>SMA Kristen 1 Tomohon</strong></em>&nbsp;atau lebih dikenal dengan nama&nbsp;<strong>Smaker</strong>,&nbsp;<strong>Smaker 1</strong>, atau&nbsp;<strong>Smakerto</strong>&nbsp;adalah SMA Kristen yang terletak di&nbsp;<a title=\"Kota Tomohon\" href=\"https://id.wikipedia.org/wiki/Kota_Tomohon\">Kota Tomohon</a>&nbsp;Provinsi&nbsp;<a title=\"Sulawesi Utara\" href=\"https://id.wikipedia.org/wiki/Sulawesi_Utara\">Sulawesi Utara</a>. SMA Kristen 1 Tomohon kini terakreditasi A dengan predikat Sekolah Standar Nasional. Sekolah ini adalah sekolah swasta di bawah naungan yayasan&nbsp;<a class=\"mw-redirect\" title=\"GMIM\" href=\"https://id.wikipedia.org/wiki/GMIM\">GMIM</a>&nbsp;<a class=\"new\" title=\"Ds. A.Z.R Wenas (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=Ds._A.Z.R_Wenas&amp;action=edit&amp;redlink=1\">Ds. A.Z.R Wenas</a>.&nbsp;<strong>SMA Kristen 1 Tomohon</strong>&nbsp;juga merupakan sekolah unggulan dan merupakan sekolah percontohan Gerakan Literasi Sekolah di Sulawesi Utara. Dan sekolah ini juga mendapat predikat \"Sekolah Zonasi\" untuk Kota Tomohon dari Kementerian Pendidikan dan Kebudayaan.</p>\r\n<h2><span id=\"Sejarah\" class=\"mw-headline\">Sejarah</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a class=\"mw-editsection-visualeditor\" title=\"Sunting bagian: Sejarah\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;veaction=edit&amp;section=1\">sunting</a><span class=\"mw-editsection-divider\">&nbsp;|&nbsp;</span><a title=\"Sunting bagian: Sejarah\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;action=edit&amp;section=1\">sunting sumber</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<p>Lembaga SMA Kristen 1 Tomohon didirikan pada tanggal 15 September 1951 dengan Nama SMA Kristen Tomohon di Kaaten Tomohon atas prakarsa dari Badan Pekerja Sinode Gereja Masehi Injili di Minahasa (BPS-GMIM) dibawah Dinas Pendidikan dan Persekolahan GMIM dan juga menjadi penyelenggara pada saat itu. Pada tahun 1959-1960 terjadi pergolakan permesta, sehingga SMA Kristen Tomohon dipindahkan lokasi ke Titiwungen, Manado. Pada Tahun 1961 SMA Kristen Tomohon berpindah lagi ke lokasi saat ini yaitu Talete 2, Tomohon (kompleks belakang kantor Sinode GMIM) dan direstui oleh Departemen Pendidikan dan Kebudayaan RI (DPK).</p>\r\n<h2><span id=\"Fasilitas\" class=\"mw-headline\">Fasilitas</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a class=\"mw-editsection-visualeditor\" title=\"Sunting bagian: Fasilitas\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;veaction=edit&amp;section=2\">sunting</a><span class=\"mw-editsection-divider\">&nbsp;|&nbsp;</span><a title=\"Sunting bagian: Fasilitas\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;action=edit&amp;section=2\">sunting sumber</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<p>SMA Kristen 1 Tomohon, juga ditunjang dengan berbagai sarana yang memadai yang nyaman, asri dan bersih yaitu;</p>\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\"><a class=\"image\" href=\"https://id.wikipedia.org/wiki/Berkas:Lapangan_Olahraga_SMA_Kristen_1_Tomohon.jpg\"><img class=\"thumbimage\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Lapangan_Olahraga_SMA_Kristen_1_Tomohon.jpg/220px-Lapangan_Olahraga_SMA_Kristen_1_Tomohon.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Lapangan_Olahraga_SMA_Kristen_1_Tomohon.jpg/330px-Lapangan_Olahraga_SMA_Kristen_1_Tomohon.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Lapangan_Olahraga_SMA_Kristen_1_Tomohon.jpg/440px-Lapangan_Olahraga_SMA_Kristen_1_Tomohon.jpg 2x\" width=\"220\" height=\"165\" data-file-width=\"4000\" data-file-height=\"3000\"></a>\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\">&nbsp;</div>\r\nLapangan Olahraga</div>\r\n</div>\r\n</div>\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\"><a class=\"image\" href=\"https://id.wikipedia.org/wiki/Berkas:Ruang_Serba_Guna.jpg\"><img class=\"thumbimage\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Ruang_Serba_Guna.jpg/220px-Ruang_Serba_Guna.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Ruang_Serba_Guna.jpg/330px-Ruang_Serba_Guna.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Ruang_Serba_Guna.jpg/440px-Ruang_Serba_Guna.jpg 2x\" width=\"220\" height=\"165\" data-file-width=\"3264\" data-file-height=\"2448\"></a>\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\">&nbsp;</div>\r\nGedung Serba Guna</div>\r\n</div>\r\n</div>\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\"><a class=\"image\" href=\"https://id.wikipedia.org/wiki/Berkas:Taman_Sekolah.jpg\"><img class=\"thumbimage\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Taman_Sekolah.jpg/220px-Taman_Sekolah.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/8/82/Taman_Sekolah.jpg/330px-Taman_Sekolah.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/82/Taman_Sekolah.jpg/440px-Taman_Sekolah.jpg 2x\" width=\"220\" height=\"124\" data-file-width=\"1920\" data-file-height=\"1080\"></a>\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\">&nbsp;</div>\r\nTaman Sekolah</div>\r\n</div>\r\n</div>\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\"><a class=\"image\" href=\"https://id.wikipedia.org/wiki/Berkas:Gedung_Kelas_Depan_Sekolah.jpg\"><img class=\"thumbimage\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Gedung_Kelas_Depan_Sekolah.jpg/220px-Gedung_Kelas_Depan_Sekolah.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/0/02/Gedung_Kelas_Depan_Sekolah.jpg/330px-Gedung_Kelas_Depan_Sekolah.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/02/Gedung_Kelas_Depan_Sekolah.jpg/440px-Gedung_Kelas_Depan_Sekolah.jpg 2x\" width=\"220\" height=\"124\" data-file-width=\"3264\" data-file-height=\"1836\"></a>\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\">&nbsp;</div>\r\nGedung Kelas Bagian Depan Sekolah</div>\r\n</div>\r\n</div>\r\n<ul>\r\n<li>Ruang Kelas yang bersih</li>\r\n<li>Laboratorium&nbsp;<a title=\"Fisika\" href=\"https://id.wikipedia.org/wiki/Fisika\">Fisika</a>,&nbsp;<a title=\"Biologi\" href=\"https://id.wikipedia.org/wiki/Biologi\">Biologi</a>,&nbsp;<a title=\"Kimia\" href=\"https://id.wikipedia.org/wiki/Kimia\">Kimia</a>, dan&nbsp;<a title=\"Komputer\" href=\"https://id.wikipedia.org/wiki/Komputer\">Komputer</a></li>\r\n<li>Ruang Multimedia</li>\r\n<li>Lapangan&nbsp;<a class=\"mw-redirect\" title=\"Volly\" href=\"https://id.wikipedia.org/wiki/Volly\">Volly</a>,&nbsp;<a class=\"mw-redirect\" title=\"Basket\" href=\"https://id.wikipedia.org/wiki/Basket\">Basket</a>,&nbsp;<a title=\"Futsal\" href=\"https://id.wikipedia.org/wiki/Futsal\">Futsal</a>&nbsp;dan&nbsp;<a title=\"Bulu tangkis\" href=\"https://id.wikipedia.org/wiki/Bulu_tangkis\">bulu tangkis</a></li>\r\n<li>Ruang&nbsp;<a title=\"Perpustakaan\" href=\"https://id.wikipedia.org/wiki/Perpustakaan\">Perpustakaan</a></li>\r\n<li>Gedung Serba Guna (GSG)</li>\r\n<li>Unit Kesehatan Sekolah (UKS)</li>\r\n<li>Fasilitas&nbsp;<a title=\"Internet\" href=\"https://id.wikipedia.org/wiki/Internet\">Internet</a>&nbsp;(<a class=\"mw-redirect\" title=\"WiFi\" href=\"https://id.wikipedia.org/wiki/WiFi\">WiFi</a>)</li>\r\n<li>Taman Sekolah</li>\r\n<li>Kantin</li>\r\n<li>Koperasi</li>\r\n<li>Ruang Guru</li>\r\n<li>Ruang Alat&nbsp;<a class=\"mw-redirect\" title=\"Marching Band\" href=\"https://id.wikipedia.org/wiki/Marching_Band\">Marching Band</a>&nbsp;dan juga&nbsp;<a class=\"mw-disambig\" title=\"Band\" href=\"https://id.wikipedia.org/wiki/Band\">Band</a></li>\r\n<li>Ruang OSIS</li>\r\n<li>Ruang Bimbingan dan Konseling</li>\r\n<li>Toilet yang bersih</li>\r\n<li>Ruang Mini Radio/Center, ruang kepala sekolah serta Ruangan Tata Usaha.</li>\r\n</ul>\r\n<h2><span id=\"Kegiatan_Ekstrakurikuler\" class=\"mw-headline\">Kegiatan Ekstrakurikuler</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a class=\"mw-editsection-visualeditor\" title=\"Sunting bagian: Kegiatan Ekstrakurikuler\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;veaction=edit&amp;section=3\">sunting</a><span class=\"mw-editsection-divider\">&nbsp;|&nbsp;</span><a title=\"Sunting bagian: Kegiatan Ekstrakurikuler\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;action=edit&amp;section=3\">sunting sumber</a><span class=\"mw-editsection-bracket\">]</span></span></h2>\r\n<p>Untuk menyalurkan bakat siswa dan mengembangkannya maka SMA Kristen 1 Tomohon menyediakan pilihan kegiatan ekstrakurikuler, antara lain:</p>\r\n<hr>\r\n<h3><span id=\"Kelompok_Ilmiah_Remaja\" class=\"mw-headline\">Kelompok Ilmiah Remaja</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a class=\"mw-editsection-visualeditor\" title=\"Sunting bagian: Kelompok Ilmiah Remaja\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;veaction=edit&amp;section=4\">sunting</a><span class=\"mw-editsection-divider\">&nbsp;|&nbsp;</span><a title=\"Sunting bagian: Kelompok Ilmiah Remaja\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;action=edit&amp;section=4\">sunting sumber</a><span class=\"mw-editsection-bracket\">]</span></span></h3>\r\n<ul>\r\n<li>Matematika</li>\r\n<li>Fisika</li>\r\n<li>Kimia</li>\r\n<li>Biologi</li>\r\n<li>Ekonomi</li>\r\n<li>Geografi</li>\r\n<li>Kebumian</li>\r\n<li>Astronomi</li>\r\n<li>Informatika</li>\r\n</ul>\r\n<h3><span id=\"Ekstrakurikuler_Intra_Organisasi\" class=\"mw-headline\">Ekstrakurikuler Intra Organisasi</span><span class=\"mw-editsection\"><span class=\"mw-editsection-bracket\">[</span><a class=\"mw-editsection-visualeditor\" title=\"Sunting bagian: Ekstrakurikuler Intra Organisasi\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;veaction=edit&amp;section=5\">sunting</a><span class=\"mw-editsection-divider\">&nbsp;|&nbsp;</span><a title=\"Sunting bagian: Ekstrakurikuler Intra Organisasi\" href=\"https://id.wikipedia.org/w/index.php?title=SMA_Kristen_1_Tomohon&amp;action=edit&amp;section=5\">sunting sumber</a><span class=\"mw-editsection-bracket\">]</span></span></h3>\r\n<hr>\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\"><a class=\"image\" href=\"https://id.wikipedia.org/wiki/Berkas:Apel_dan_Upacara_Bendera_.jpg\"><img class=\"thumbimage\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Apel_dan_Upacara_Bendera_.jpg/220px-Apel_dan_Upacara_Bendera_.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Apel_dan_Upacara_Bendera_.jpg/330px-Apel_dan_Upacara_Bendera_.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Apel_dan_Upacara_Bendera_.jpg/440px-Apel_dan_Upacara_Bendera_.jpg 2x\" width=\"220\" height=\"124\" data-file-width=\"4000\" data-file-height=\"2250\"></a>\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\">&nbsp;</div>\r\nUpacara Bendera</div>\r\n</div>\r\n</div>\r\n<ul>\r\n<li>PMR (<a title=\"Palang Merah Remaja\" href=\"https://id.wikipedia.org/wiki/Palang_Merah_Remaja\">Palang Merah Remaja</a>)</li>\r\n<li>PRAMUKA (<a class=\"mw-redirect\" title=\"Praja Muda Karana\" href=\"https://id.wikipedia.org/wiki/Praja_Muda_Karana\">Praja Muda Karana</a>) Gugus Depan 02-083 &amp; 02-084</li>\r\n<li>Pelayanan Siswa (PELSIS)</li>\r\n<li>Marching Band</li>\r\n</ul>\r\n<ul>\r\n<li>Paduan Suara</li>\r\n<li>Kolintang</li>\r\n<li>Tari</li>\r\n<li>Karate</li>\r\n</ul>\r\n<p>Untuk Kontak bisa menguhubungi : admin@gmail.com</p>', '2023-05-08 01:31:56', '2023-11-07 12:08:43', '1683538316400.17-09-30-12-33-47-846_deco.jpg', 'DICARI', 'Teknik Sipil'),
(2, 'SMKS Kristen 1 Tomohon', 'Jl. Tomohon-Tondano No.158, Matani Satu, Kec. Tomohon Tengah, Kota Tomohon, Sulawesi Utara', '1.3144383, 124.84893', 8, '<table style=\"border-collapse: collapse; width: 100.017%; border: 1px solid rgb(0, 0, 0); margin-left: auto; margin-right: auto; height: 176.368px;\" border=\"1\"><colgroup><col style=\"width: 6.17904%;\"><col style=\"width: 60.4749%;\"><col style=\"width: 33.327%;\"></colgroup>\r\n<thead>\r\n<tr style=\"text-align: center; height: 19.5964px;\">\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); text-align: center; height: 19.5964px;\"><strong>NO</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); text-align: center; height: 19.5964px;\"><strong>MATA PELAJARAN</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); text-align: center; height: 19.5964px;\"><strong>KEBUTUHAN GURU</strong></td>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr style=\"height: 19.5964px;\">\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>1</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px;\"><strong>PENDIDIKAN AGAMA DAN BUDI PEKERTI KRISTEN</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>2</strong></td>\r\n</tr>\r\n<tr style=\"height: 19.5964px;\">\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>2</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px;\"><strong>BAHASA INGGRIS</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>1</strong></td>\r\n</tr>\r\n<tr style=\"height: 19.5964px;\">\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>3</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px;\"><strong>SIMULASI DIGITAL</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>2</strong></td>\r\n</tr>\r\n<tr style=\"height: 19.5964px;\">\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>4</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px;\"><strong>Teknik Instalasi Tenaga Listrik</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>3</strong></td>\r\n</tr>\r\n<tr style=\"height: 19.5964px;\">\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>5</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px;\"><strong>Teknik Kendaraan Ringan</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>3</strong></td>\r\n</tr>\r\n<tr style=\"height: 19.5964px;\">\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>6</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px;\"><strong>Teknik Sepeda Motor</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>3</strong></td>\r\n</tr>\r\n<tr style=\"height: 19.5964px;\">\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>7</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px;\"><strong>Desain Komunikasi Visual</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>1</strong></td>\r\n</tr>\r\n<tr style=\"height: 19.5964px;\">\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>8</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px;\"><strong>PRAKARYA DAN KEWIRAUSAHAAN</strong></td>\r\n<td style=\"border-width: 1px; border-color: rgb(0, 0, 0); height: 19.5964px; text-align: center;\"><strong>2</strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>SMKS KRISTEN 1 TOMOHON&nbsp;adalah salah satu satuan pendidikan dengan jenjang&nbsp;<a href=\"https://data.sekolah-kita.net/jenjang/SMK\">SMK</a>&nbsp;di Matani Satu, Kec. Tomohon Tengah, Kota Tomohon, Sulawesi Utara. Dalam menjalankan kegiatannya, SMKS KRISTEN 1 TOMOHON berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.</strong></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>&nbsp;Guru :&nbsp;<span class=\"text-info\">46</span></strong><br><strong>&nbsp;&nbsp;Siswa Laki-laki :&nbsp;<span class=\"text-info\">697</span></strong><br><strong>&nbsp;&nbsp;Siswa Perempuan :&nbsp;<span class=\"text-info\">130</span></strong><br><strong>&nbsp;Rombongan Belajar :&nbsp;<span class=\"text-info\">34</span></strong></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong><span class=\"text-info\">&nbsp;Kurikulum :&nbsp;SMK 2013 REV. Teknik Instalasi Tenaga Listrik<br>&nbsp;Penyelenggaraan : Pagi/5 hari<br>&nbsp;Manajemen Berbasis Sekolah :&nbsp;<br>&nbsp;Semester Data :&nbsp;2023/2024-1<br>&nbsp;</span></strong></p>\r\n<p style=\"text-align: justify;\"><strong><span class=\"text-info\">&nbsp;Akses Internet : Tidak Ada<br>&nbsp;Sumber Listrik : PLN<br>&nbsp;Daya Listrik :&nbsp;35,000<br>&nbsp;Luas Tanah :&nbsp;12,166&nbsp;M&sup2;</span></strong></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong><span class=\"text-info\">&nbsp;Ruang Kelas :&nbsp;29&nbsp;<span class=\"text-red small\">*</span><br>&nbsp;Laboratorium :&nbsp;1&nbsp;<span class=\"text-red small\">*</span><br>&nbsp;Perpustakaan :&nbsp;1&nbsp;<span class=\"text-red small\">*</span><br>&nbsp;Sanitasi Siswa :&nbsp;16&nbsp;<span class=\"text-red small\">*</span><br>&nbsp;</span></strong></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', '2023-10-31 04:33:15', '2023-10-31 04:33:15', '1698751995133.smks kristen 1.jpg', 'DICARI', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Kk/tLH9cLs671Kj8YfWE5unRLtUEs3hix6MJ06SVBHKTcst0.JXFm', NULL, '2023-05-07 01:08:11', '2023-05-07 01:08:11', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori_artikels`
--
ALTER TABLE `kategori_artikels`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sekolahs`
--
ALTER TABLE `sekolahs`
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
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_artikels`
--
ALTER TABLE `kategori_artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolahs`
--
ALTER TABLE `sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
