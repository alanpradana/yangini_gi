-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `alternatif`;
CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode _alternati` int(11) NOT NULL,
  `nama_alternatif` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `data_peternak`;
CREATE TABLE `data_peternak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_peternak` varchar(50) NOT NULL,
  `keadaan_ekonomi` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `jumlah_tanggungan` varchar(50) NOT NULL,
  `jumlah_pengeluaran` varchar(50) NOT NULL,
  `lokasi_ternak` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(200) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot_kriteria` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `nama_kriteria`, `bobot_kriteria`) VALUES
(7,	'C3',	'Pendidikan Terakhir',	'90');

DROP TABLE IF EXISTS `sub_kriteria`;
CREATE TABLE `sub_kriteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kretera_id` int(11) NOT NULL,
  `sub_kriteria` varchar(225) NOT NULL,
  `bobot_nilai` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` varchar(20) NOT NULL,
  `aktif` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `nama`, `email`, `role_id`, `aktif`, `password`) VALUES
(29,	'Yogi',	'yogi@gmail.com',	'1',	'1',	'$2y$10$YmE4eI8q3XgKQnmK3K4maOl92icD.15ZmXDM6nDtGrjTCEHHt31G.');

-- 2022-07-15 16:04:11
