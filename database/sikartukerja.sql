-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2025 pada 10.34
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

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
-- Struktur dari tabel `lowongan_kerja`
--

CREATE TABLE `lowongan_kerja` (
  `id_lowongan_kerja` bigint(20) UNSIGNED NOT NULL,
  `kriteria` enum('Laki-laki','Perempuan','Laki-laki / Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lulusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_upload` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lowongan_kerja`
--

INSERT INTO `lowongan_kerja` (`id_lowongan_kerja`, `kriteria`, `nama_instansi`, `lulusan`, `keterangan`, `tanggal_berlaku`, `foto`, `tanggal_upload`) VALUES
(1, 'Laki-laki / Perempuan', 'PT. Cakrawala Teknologi Nusantara', 'SMA / Sederajat', 'Posisi ini berbasis kontrak selama 6 bulan dengan kemungkinan perpanjangan berdasarkan performa kerja. Kami mencari individu yang memiliki keterampilan komunikasi yang baik, bersedia bekerja dalam tekanan', '2025-08-24', 'loker1.jpg', '2025-07-24'),
(2, 'Perempuan', 'CV. Bumi Hijau Sejahtera', 'SMA / Sederajat', 'Kami menerima fresh graduate untuk posisi ini, asalkan memiliki semangat belajar yang tinggi dan siap menjalani pelatihan intensif selama 3 bulan', '2025-08-24', 'loker2.jpg', '2025-07-24'),
(3, 'Laki-laki', 'PT. Mitra Logistik Indonesia', 'SMA / Sederajat', 'Posisi ini mengharuskan kandidat untuk bekerja di kantor utama dengan jam kerja fleksibel. Kandidat diharapkan memiliki pengalaman dalam manajemen proyek, kemampuan multitasking', '2025-09-24', 'loker3.jpg', '2025-07-24'),
(4, 'Laki-laki / Perempuan', 'CV. Solusi Media Kreatif', 'SMA / Sederajat', 'Kami mencari individu dengan kemampuan komunikasi yang baik, dapat bekerja dalam tim, dan memiliki etos kerja yang tinggi. Kandidat diharapkan memiliki pemahaman dasar tentang industri', '2025-09-24', 'loker4.jpg', '2025-07-24'),
(5, 'Perempuan', 'PT. Energi Mandiri Terbarukan', 'SMA / Sederajat', 'Lowongan ini membutuhkan kandidat yang memiliki SIM A aktif dan bersedia melakukan perjalanan dinas ke berbagai lokasi ses', '2025-07-17', 'loker5.jpg', '2025-07-24');

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
(1, 'sikartukerja', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitoring`
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
-- Dumping data untuk tabel `monitoring`
--

INSERT INTO `monitoring` (`id_monitoring`, `id_user`, `nopencaker`, `tanggal`, `status_bekerja`, `tempat_bekerja`) VALUES
(1, 2, 'AK1-2023-0001', '2025-07-19', 'bekerja', 'PT Maju Jaya Abadi'),
(2, 3, 'AK1-2023-0002', '2025-07-22', 'belum bekerja', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pendaftaran` date NOT NULL DEFAULT curdate(),
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
  `tanggal_upload` date DEFAULT NULL,
  `kartu_ak1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_user`, `tanggal_pendaftaran`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status_perkawinan`, `agama`, `alamat`, `no_telepon`, `pendidikan_terakhir`, `pengalaman_kerja`, `pas_foto`, `foto_ktp`, `status`, `tanggal_upload`, `kartu_ak1`) VALUES
(1, 2, '2025-07-19', '3510010101010001', 'Jaka Nugraha', 'Probolinggo', '2003-05-15', 'Laki-laki', 'belum kawin', 'islam', 'Jl Lumajang GG. Mangga RT/RW 001/010 Kel Kedungasem Kec Wonoasih', '081234567890', 'SMA / Sederajat', '-', 'pas_foto.jpg', 'foto_ktp.jpg', 'divalidasi', '2025-07-21', 'kartu_ak1_1.jpg'),
(2, 3, '2025-07-20', '3510020202020002', 'Ilham Romadoni', 'Probolinggo', '2001-10-20', 'Laki-laki', 'belum kawin', 'islam', 'Jln Selamet Riadi RT/RW 005/005 Kel Kanigaran Kec Kanigaran', '082345678901', 'Diploma IV / Strata I', '2 tahun sebagai Auditor', 'pas_foto.jpg', 'foto_ktp.jpg', 'divalidasi', '2025-07-22', 'kartu_ak1_1.jpg'),
(3, 4, '2025-07-21', '3510030303030003', 'Budi Santoso', 'Bandung', '1999-03-10', 'Laki-laki', 'cerai hidup', 'katolik', 'Jl Lumajang GG. Jeruk RT/RW 002/010 Kel Kedungasem Kec Wonoasih', '083456789012', 'SMA / Sederajat', '2 tahun sebagai Driver', 'pas_foto.jpg', 'foto_ktp.jpg', 'proses', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `role`, `is_active`) VALUES
(1, 'disperinaker', 'disperinaker@gmail.com', '$2y$10$kVIrvx5nLsfcKpMzpvo2ae/g9Hd4w.MNyIkiAblRI3vyijYU48s.u', 'admin', '1'),
(2, 'jaka nugraha', 'nugraha@gmail.com', '$2y$10$kVIrvx5nLsfcKpMzpvo2ae/g9Hd4w.MNyIkiAblRI3vyijYU48s.u', 'pemohon', '1'),
(3, 'Ilham Romadoni', 'ilham.romadoni@gmail.com', '$2y$10$kVIrvx5nLsfcKpMzpvo2ae/g9Hd4w.MNyIkiAblRI3vyijYU48s.u', 'pemohon', '1'),
(4, 'Budi Santoso', 'budi.santoso@gmail.com', '$2y$10$kVIrvx5nLsfcKpMzpvo2ae/g9Hd4w.MNyIkiAblRI3vyijYU48s.u', 'pemohon', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  ADD PRIMARY KEY (`id_lowongan_kerja`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id_monitoring`),
  ADD KEY `monitoring_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD UNIQUE KEY `pendaftaran_nik_unique` (`nik`),
  ADD KEY `pendaftaran_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  MODIFY `id_lowongan_kerja` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id_monitoring` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  ADD CONSTRAINT `monitoring_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
