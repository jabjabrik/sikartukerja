-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2025 at 04:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikartukerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_kerja`
--

CREATE TABLE `lowongan_kerja` (
  `id_lowongan_kerja` bigint(20) UNSIGNED NOT NULL,
  `kriteria` enum('Laki-laki','Perempuan','Laki-laki / Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `lulusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lowongan_kerja`
--

INSERT INTO `lowongan_kerja` (`id_lowongan_kerja`, `kriteria`, `lulusan`, `keterangan`, `foto`) VALUES
(1, 'Laki-laki / Perempuan', 'SMA/SMK', 'Posisi ini berbasis kontrak selama 6 bulan dengan kemungkinan perpanjangan berdasarkan performa kerja. Kami mencari individu yang memiliki keterampilan komunikasi yang baik, bersedia bekerja dalam tekanan', 'loker1.jpg'),
(2, 'Perempuan', 'D3 Perhotelan', 'Kami menerima fresh graduate untuk posisi ini, asalkan memiliki semangat belajar yang tinggi dan siap menjalani pelatihan intensif selama 3 bulan', 'loker2.jpg'),
(3, 'Laki-laki', 'SMA/SMK', 'Posisi ini mengharuskan kandidat untuk bekerja di kantor utama dengan jam kerja fleksibel. Kandidat diharapkan memiliki pengalaman dalam manajemen proyek, kemampuan multitasking', 'loker3.jpg'),
(4, 'Laki-laki / Perempuan', 'S1 Pendidikan', 'Kami mencari individu dengan kemampuan komunikasi yang baik, dapat bekerja dalam tim, dan memiliki etos kerja yang tinggi. Kandidat diharapkan memiliki pemahaman dasar tentang industri', 'loker4.jpg'),
(5, 'Perempuan', 'S1 Komunikasi', 'Lowongan ini membutuhkan kandidat yang memiliki SIM A aktif dan bersedia melakukan perjalanan dinas ke berbagai lokasi ses', 'loker5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id_monitoring` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nopencaker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status_bekerja` enum('bekerja','belum bekerja') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_bekerja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id_monitoring`, `id_user`, `nopencaker`, `tanggal`, `status_bekerja`, `tempat_bekerja`) VALUES
(1, 2, 'AK1-2023-0001', '2025-06-21', 'bekerja', 'PT Maju Jaya Abadi'),
(2, 3, 'AK1-2023-0002', '2025-06-24', 'belum bekerja', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` enum('belum kawin','kawin','cerai hidup','cerai mati') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('islam','kristen','katolik','hindu','buddha','khonghucu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengalaman_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pas_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('proses','divalidasi','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `kartu_ak1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_user`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status_perkawinan`, `agama`, `alamat`, `no_telepon`, `pendidikan_terakhir`, `pengalaman_kerja`, `pas_foto`, `foto_ktp`, `status`, `kartu_ak1`) VALUES
(1, 2, '3510010101010001', 'Jaka Nugraha', 'Probolinggo', '2003-05-15', 'Laki-laki', 'belum kawin', 'islam', 'Jl Lumajang GG. Mangga RT/RW 001/010 Kel Kedungasem Kec Wonoasih', '081234567890', 'SMA / Sederajat', '-', 'pas_foto.jpg', 'foto_ktp.jpg', 'divalidasi', 'kartu_ak1_1.jpg'),
(2, 3, '3510020202020002', 'Ilham Romadoni', 'Probolinggo', '2001-10-20', 'Laki-laki', 'belum kawin', 'islam', 'Jln Selamet Riadi RT/RW 005/005 Kel Kanigaran Kec Kanigaran', '082345678901', 'Diploma IV / Strata I', '2 tahun sebagai Auditor', 'pas_foto.jpg', 'foto_ktp.jpg', 'divalidasi', 'kartu_ak1_1.jpg'),
(3, 4, '3510030303030003', 'Budi Santoso', 'Bandung', '1999-03-10', 'Laki-laki', 'cerai hidup', 'katolik', 'kanigaran', '083456789012', 'SMA / Sederajat', '2 tahun sebagai Driver', 'pas_foto.jpg', 'foto_ktp.jpg', 'proses', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','pemohon') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pemohon',
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `role`, `is_active`) VALUES
(1, 'ridwan abdilah', 'ridwan.abdilah@gmail.com', '$2y$10$kVIrvx5nLsfcKpMzpvo2ae/g9Hd4w.MNyIkiAblRI3vyijYU48s.u', 'admin', '1'),
(2, 'jaka nugraha', 'nugraha@gmail.com', '$2y$10$kVIrvx5nLsfcKpMzpvo2ae/g9Hd4w.MNyIkiAblRI3vyijYU48s.u', 'pemohon', '1'),
(3, 'Ilham Romadoni', 'ilham.romadoni@gmail.com', '$2y$10$kVIrvx5nLsfcKpMzpvo2ae/g9Hd4w.MNyIkiAblRI3vyijYU48s.u', 'pemohon', '1'),
(4, 'Budi Santoso', 'budi.santoso@gmail.com', '$2y$10$kVIrvx5nLsfcKpMzpvo2ae/g9Hd4w.MNyIkiAblRI3vyijYU48s.u', 'pemohon', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  ADD PRIMARY KEY (`id_lowongan_kerja`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id_monitoring`),
  ADD KEY `monitoring_id_user_foreign` (`id_user`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `pendaftaran_id_user_foreign` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  MODIFY `id_lowongan_kerja` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id_monitoring` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD CONSTRAINT `monitoring_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
