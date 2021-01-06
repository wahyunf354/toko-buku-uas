-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06 Jan 2021 pada 15.22
-- Versi Server: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_buku_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `buku_id` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `kategori_id` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`buku_id`, `judul_buku`, `kategori_id`, `pengarang`, `tahun_terbit`) VALUES
(6, 'Javascript itu mudah', '7', 'Sinta', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `gambar_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_gambar`
--

INSERT INTO `tb_gambar` (`gambar_id`, `buku_id`, `url`) VALUES
(4, 6, 'https://firebasestorage.googleapis.com/v0/b/gber-7c4a6.appspot.com/o/buku_ppw%2F1.jpg?alt=media&token=93995d31-0024-4d1f-8edd-8c972d1571b1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_id`, `nama_kategori`) VALUES
(7, 'Pendidikan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`buku_id`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`gambar_id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `gambar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
