-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2023 pada 19.37
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw_method`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_bobot`
--

CREATE TABLE `tabel_bobot` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(50) DEFAULT NULL,
  `bobot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id`, `kriteria`, `bobot`) VALUES
(1, 'kriteria1', 0.4),
(2, 'kriteria2', 0.6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_murid`
--

CREATE TABLE `tabel_murid` (
  `id_matrik` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_murid`
--

INSERT INTO `tabel_murid` (`id_matrik`, `nama`, `kelas`) VALUES
(1, 'Toto Iswanto', 'TPLM004'),
(2, 'aditya parawansyah', 'TPLM004'),
(3, 'Kabul Santoso', 'TPLM004'),
(4, 'aldi mahendra', 'TPLM004'),
(5, 'Reival Fadhil', 'TPLM004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `id` int(11) NOT NULL,
  `id_matrik` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kriteria1` float DEFAULT NULL,
  `kriteria2` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id`, `id_matrik`, `nama`, `kriteria1`, `kriteria2`) VALUES
(1, 1, 'Toto Iswanto', 100, 90),
(5, 2, 'aditya parawansyah', 90, 70),
(6, 3, 'Kabul Santoso', 60, 60),
(7, 4, 'aldi mahendra', 50, 60),
(8, 5, 'Reival Fadhil', 70, 80);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_murid`
--
ALTER TABLE `tabel_murid`
  ADD PRIMARY KEY (`id_matrik`);

--
-- Indeks untuk tabel `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_matrik` (`id_matrik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_murid`
--
ALTER TABLE `tabel_murid`
  MODIFY `id_matrik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
