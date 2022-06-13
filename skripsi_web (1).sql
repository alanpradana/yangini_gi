-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 09.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peternak`
--

CREATE TABLE `data_peternak` (
  `id` int(11) NOT NULL,
  `nama_peternak` varchar(50) NOT NULL,
  `keadaan_ekonomi` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `jumlah_tanggungan` varchar(50) NOT NULL,
  `jumlah_pengeluaran` varchar(50) NOT NULL,
  `lokasi_ternak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_peternak`
--

INSERT INTO `data_peternak` (`id`, `nama_peternak`, `keadaan_ekonomi`, `pendidikan_terakhir`, `jumlah_tanggungan`, `jumlah_pengeluaran`, `lokasi_ternak`) VALUES
(1, '', 'Miskin', 'SD', 'Rp 1.000.000', 'Rp 1.000.000', 'Sungai'),
(2, 'pak basuki', 'Sangat Miskin', 'SD', 'Rp 1.000.000', 'Rp 2.000.000', 'Tanah Sendiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_kriteria`
--

CREATE TABLE `kode_kriteria` (
  `id` int(11) NOT NULL,
  `kode_kriteria` varchar(25) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `bobot_nilai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kode_kriteria`
--

INSERT INTO `kode_kriteria` (`id`, `kode_kriteria`, `kriteria`, `bobot_nilai`) VALUES
(1, '2', '3', '4'),
(2, '33', '4', '55'),
(3, '33', '4', '55'),
(4, '11', '33', '33'),
(5, '33', '3', '55'),
(6, '33', '3', '55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id` int(11) NOT NULL,
  `kode_kriteria` int(11) NOT NULL,
  `sub_kriteria` int(11) NOT NULL,
  `bobot_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` varchar(20) NOT NULL,
  `aktif` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `role_id`, `aktif`, `password`) VALUES
(6, 'alan', 'alanpradana94@gmail.com', '1', '1', '$2y$10$2tLyjXyd1qRNzZC4XRSBJeuqWvxGTAX65jeANwACOGzxvTrpfadVm'),
(25, 'yogi', 'yogi@gmail.com', '1', '1', '$2y$10$eRZ8NYpoQCXogWG5RIbXf.tqh/e/CXRO3UagOlLcL6.vTggfFiQ4.\r\n\r\nMessage @pitter\r\n'),
(27, 'alanpr', 'alan@gmail.com', '1', '1', 'elin12345'),
(28, 'Yogi Prayoga', 'yogip@gmail.com', '1', '1', '$2y$10$UV998/OExnT5FeLM4TWRTucFFgTy7Oh6VzqTsCIbeIJjFUPMkCklO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_peternak`
--
ALTER TABLE `data_peternak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kode_kriteria`
--
ALTER TABLE `kode_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_peternak`
--
ALTER TABLE `data_peternak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kode_kriteria`
--
ALTER TABLE `kode_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
