-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2021 pada 15.43
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_suhulembab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelembaban`
--

CREATE TABLE `tb_kelembaban` (
  `id` int(5) NOT NULL,
  `id_ruangan` varchar(3) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `kelembaban` varchar(4) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `aksi_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelembaban`
--

INSERT INTO `tb_kelembaban` (`id`, `id_ruangan`, `nama_ruangan`, `waktu`, `kelembaban`, `aksi`, `aksi_waktu`) VALUES
(1, '1', 'Kantor', '2021-11-23 13:42:12', '', '46', '0000-00-00 00:00:00'),
(2, '2', 'Ruang Tamu', '2021-11-23 13:55:10', '50', '', '2021-11-23 13:55:10'),
(3, '1', 'Kantor', '2021-11-23 21:38:47', '5', '', '0000-00-00 00:00:00'),
(4, '1', 'Kantor', '2021-11-23 21:40:55', '2', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_set_poin`
--

CREATE TABLE `tb_set_poin` (
  `id_ruangan` int(20) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `kelembaban` varchar(255) NOT NULL,
  `waktu_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_set_poin`
--

INSERT INTO `tb_set_poin` (`id_ruangan`, `nama_ruangan`, `suhu`, `kelembaban`, `waktu_input`) VALUES
(1, 'Kantor', '30', '51', '2021-11-18 20:42:00'),
(2, 'Ruang Tamu', '30', '45', '2021-11-23 15:33:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suhu`
--

CREATE TABLE `tb_suhu` (
  `id_suhu` int(5) NOT NULL,
  `id_ruangan` varchar(3) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `suhu` varchar(4) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `aksi_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_suhu`
--

INSERT INTO `tb_suhu` (`id_suhu`, `id_ruangan`, `nama_ruangan`, `waktu`, `suhu`, `aksi`, `aksi_waktu`) VALUES
(1, '1', 'Kantor', '2021-11-23 13:46:10', '28', '', '2021-11-23 21:16:00'),
(2, '2', 'Ruang Tamu', '2021-11-23 13:54:30', '29', '', '2021-11-23 13:54:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kelembaban`
--
ALTER TABLE `tb_kelembaban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_set_poin`
--
ALTER TABLE `tb_set_poin`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `tb_suhu`
--
ALTER TABLE `tb_suhu`
  ADD PRIMARY KEY (`id_suhu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kelembaban`
--
ALTER TABLE `tb_kelembaban`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_set_poin`
--
ALTER TABLE `tb_set_poin`
  MODIFY `id_ruangan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_suhu`
--
ALTER TABLE `tb_suhu`
  MODIFY `id_suhu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
