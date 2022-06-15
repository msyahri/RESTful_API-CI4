-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2022 pada 11.54
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
(3, 'Ananda Syifa', 'ananda.cipacipacip@gmail.com', '088888888888', 'Tumiyang'),
(0, 'mradmin', 'mohsyahri10@gmail.com', '08585558472', 'Purwokerto');

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
(0, 'mohsyahri10@gmail.com', '7bcc50df20da078969fe7eb5ce92c1352dab34d4'),
(5, 'ananda.cipacipacip@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921');

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
(1, 'Asem Manis', 'Botol', 17000, '21', NULL, NULL),
(4, 'Asem Manis', 'Botol', 17000, '21', NULL, NULL),
(5, 'Asem Manis Jawi', 'Botol', 20000, '21', NULL, NULL),
(6, 'jago', 'buuk', 12000, '200', NULL, NULL),
(8, 'bahagia', 'pil', 12000, '200', NULL, NULL),
(12, 'Imissu', 'kangen', 1111, '1', NULL, NULL),
(16, 'Nyoba update', 'Serbuk Instant', 10000, 'Serbuk Instant', '2022-06-12 07:49:03', '2022-06-12 09:10:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `alamat` varchar(100) NOT NULL,
  `nope` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`alamat`, `nope`, `email`, `website`) VALUES
('Jl. Pengasinan, Cingebul, Kabupaten Banyumas, Jawa Tengah', '082323830961', 'info@jalumasbanyumas.com', 'www.jalumasbanyumas.com');

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
(1, 'mradmin', 'mradmin@mail.com', '828d352c3c6ce4ef4c09f4aaea6999c4e3746dee', 1),
(5, 'Anandaa', 'anandaku@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 1);

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
-- Indeks untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agen`
--
ALTER TABLE `agen`
  MODIFY `id_agen` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_pesan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `auth_ibfk_1` FOREIGN KEY (`email`) REFERENCES `agen` (`email_agen`);

--
-- Ketidakleluasaan untuk tabel `tb_sa`
--
ALTER TABLE `tb_sa`
  ADD CONSTRAINT `tb_sa_ibfk_1` FOREIGN KEY (`id_lvl`) REFERENCES `tb_lvl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
