-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2022 pada 07.37
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agen`
--

CREATE TABLE `agen` (
  `id_agen` int(3) NOT NULL,
  `nama_agen` varchar(50) NOT NULL,
  `email_agen` varchar(50) NOT NULL,
  `nope_agen` varchar(15) NOT NULL,
  `alamat_agen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agen`
--

INSERT INTO `agen` (`id_agen`, `nama_agen`, `email_agen`, `nope_agen`, `alamat_agen`) VALUES
(0, 'mradmin', 'mohsyahri10@gmail.com', '08585558472', 'Purwokerto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agen_report`
--

CREATE TABLE `agen_report` (
  `id` int(4) NOT NULL,
  `email` varchar(55) NOT NULL,
  `nama_agen` varchar(50) NOT NULL,
  `stok` int(4) NOT NULL,
  `terjual` int(4) NOT NULL,
  `upah` varchar(7) NOT NULL DEFAULT '2500'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agen_report`
--

INSERT INTO `agen_report` (`id`, `email`, `nama_agen`, `stok`, `terjual`, `upah`) VALUES
(1, 'mohsyahri10@gmail.com', 'mradmin', 30, 40, '2500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id`, `email`, `password`) VALUES
(1, 'mohsyahri10@gmail.com', '7bcc50df20da078969fe7eb5ce92c1352dab34d4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_pesan` int(3) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `email_pengirim` varchar(50) NOT NULL,
  `nope_pengirim` varchar(15) NOT NULL,
  `subjek` varchar(30) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_pesan`, `nama_pengirim`, `email_pengirim`, `nope_pengirim`, `subjek`, `pesan`) VALUES
(1, 'Admin', 'admin@mail.com', '127001', 'Test inserted', 'Inserted check');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `harga_produk` double NOT NULL,
  `stok_produk` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `jenis_produk`, `harga_produk`, `stok_produk`, `created_at`, `updated_at`) VALUES
(1, 'Jalumas Kunyit Asem (250ml)', 'Botol Siap Minum', 5000, '210', NULL, '2022-06-19 11:34:42'),
(4, 'Jalumas RRJ (250ml)', 'Botol Siap Minum', 5000, '185', NULL, '2022-06-19 11:34:59'),
(5, 'Jalumas Kencur Instant', 'Serbuk Instant', 15000, '155', NULL, '2022-06-19 11:35:21'),
(6, 'Jalumas Kunyit Instant', 'Serbuk Instant', 12000, '135', NULL, '2022-06-19 11:35:36'),
(8, 'Jalumas Jahe Instant', 'Serbuk Instant', 15000, '155', NULL, '2022-06-19 11:35:57'),
(12, 'Jalumas Temulawak Instant', 'Serbuk Instant', 15000, '135', NULL, '2022-06-19 11:36:14'),
(16, 'Jalumas RRJ Instant', 'Serbuk Instant', 15000, '125', '2022-06-12 07:49:03', '2022-06-19 11:36:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nope` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `alamat`, `nope`, `email`, `website`) VALUES
(1, 'Jl. Pengasinan, Desa Cingebul, Kabupaten Banyumas, Jawa Tengah', '082323830961', 'info@jalumasbanyumas.com', 'www.jalumasbanyumas.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lvl`
--

CREATE TABLE `tb_lvl` (
  `id` int(11) NOT NULL,
  `lvl` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lvl`
--

INSERT INTO `tb_lvl` (`id`, `lvl`) VALUES
(1, 'sa'),
(2, 'pa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sa`
--

CREATE TABLE `tb_sa` (
  `id` int(11) NOT NULL,
  `unm` varchar(30) DEFAULT NULL,
  `u_e` varchar(30) DEFAULT NULL,
  `u_p` varchar(200) DEFAULT NULL,
  `id_lvl` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sa`
--

INSERT INTO `tb_sa` (`id`, `unm`, `u_e`, `u_p`, `id_lvl`) VALUES
(1, 'mradmin', 'mradmin@mail.com', '828d352c3c6ce4ef4c09f4aaea6999c4e3746dee', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`id`, `token`) VALUES
(1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im1vaHN5YWhyaTEwQGdtYWlsLmNvbSIsImlhdCI6MTY1NTYxNTgzMiwiZXhwIjoxNjU1NjE5NDMyfQ.inrsg3Mn2vrthESiOFThbRJz3UYxBdgAXyhdxlapkgU');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`email_agen`),
  ADD UNIQUE KEY `id_agen` (`id_agen`);

--
-- Indeks untuk tabel `agen_report`
--
ALTER TABLE `agen_report`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_lvl`
--
ALTER TABLE `tb_lvl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sa`
--
ALTER TABLE `tb_sa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_lvl`);

--
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agen`
--
ALTER TABLE `agen`
  MODIFY `id_agen` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `agen_report`
--
ALTER TABLE `agen_report`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_pesan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_lvl`
--
ALTER TABLE `tb_lvl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_sa`
--
ALTER TABLE `tb_sa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127003;

--
-- AUTO_INCREMENT untuk tabel `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_sa`
--
ALTER TABLE `tb_sa`
  ADD CONSTRAINT `tb_sa_ibfk_1` FOREIGN KEY (`id_lvl`) REFERENCES `tb_lvl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
