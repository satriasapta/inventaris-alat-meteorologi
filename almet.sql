-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2023 at 04:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almet`
--

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `kondisi_alat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `kondisi_alat`) VALUES
(1, 'Baik'),
(2, 'Rusak'),
(3, 'Rusak Berat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alat`
--

CREATE TABLE `tb_alat` (
  `id_alat` int(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `gambar_alat` varchar(150) NOT NULL,
  `kondisi_alat` varchar(150) NOT NULL,
  `tahun_pembelian` date NOT NULL,
  `kalibrasi` date NOT NULL,
  `lokasi_alat` varchar(150) NOT NULL,
  `komponen_alat` text NOT NULL,
  `penggantian_komponen` text NOT NULL,
  `pemeliharaan_alat` text NOT NULL,
  `perbaikan_alat` text NOT NULL,
  `persiapan_pemeliharaan` text NOT NULL,
  `cara_pemeliharaan` text NOT NULL,
  `modifikasi_alat` text NOT NULL,
  `penyediaan_alat` text NOT NULL,
  `penyediaan_sukucadang` text NOT NULL,
  `keamanan_alat` text NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `id_kondisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alat`
--

INSERT INTO `tb_alat` (`id_alat`, `nama_alat`, `gambar_alat`, `kondisi_alat`, `tahun_pembelian`, `kalibrasi`, `lokasi_alat`, `komponen_alat`, `penggantian_komponen`, `pemeliharaan_alat`, `perbaikan_alat`, `persiapan_pemeliharaan`, `cara_pemeliharaan`, `modifikasi_alat`, `penyediaan_alat`, `penyediaan_sukucadang`, `keamanan_alat`, `id_kategori`, `id_kondisi`) VALUES
(23, 'Thermometer Maximum-Minimum', '1676353152Thermometer Maximum-Minimum.jpeg', '', '2010-06-17', '2022-10-05', '1676353152tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(24, 'Open Pan Evaporimeter', '1676353280Open Pan Evaporimeter.jpeg', '', '2008-08-13', '2022-12-14', '1676353280tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(25, 'Penangkar Hujan Hillman', '1676353415Penangkar Hujan Hillman.jpeg', '', '1984-06-12', '2022-12-14', '1676353415tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(26, 'Theodolite', '1676353465Theodolite.jpeg', '', '2013-07-18', '2022-12-14', '1676353466tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(27, 'Penangkar Hujan OBS', '1676353550Penangkar Hujan OBS.jpeg', '', '1984-07-12', '2022-12-15', '1676353550tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(28, 'PH. TB. Mekanik', '1676353678PH. TB. Mekanik.jpeg', '', '2001-06-06', '2022-12-15', '1676353678tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 3, 1),
(29, 'HV. Sampler', '1676353745HV. Sampler.jpeg', '', '1992-01-01', '2022-01-01', '1676353745tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(30, 'Automatic Rain Water Sampler', '1676353814ARWS.jpeg', '', '2015-01-01', '2022-01-01', '1676353814tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 2, 1),
(31, 'Anemometer', '1676353862Anemometer.jpeg', '', '2008-01-01', '2022-01-01', '1676353862tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 2, 1),
(32, 'Campble Stockes', '1676353943Cambel Stockes.jpeg', '', '2005-01-01', '2022-01-01', '1676353943tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(33, 'Barometer Digital', '1676354011Barometer Digital.jpeg', '', '2004-01-01', '2022-01-01', '1676354011tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 2, 1),
(34, 'Thermohygrograph', '1676354067Thermohygrograph.jpeg', '', '2004-01-01', '2022-01-01', '1676354067Thermohygrograph.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(35, 'Thermometer Digital', '1676354131Thermometer Digital.jpeg', '', '2004-01-01', '2022-01-01', '1676354131tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 2, 1),
(36, 'Thermometer Bola Basah - Bola Kering', '1676354176Thermometer Bola Basah- Bola Kering.jpeg', '', '1994-01-01', '2022-01-01', '1676354176tamannalat.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(37, 'Alert Gempa', '1676354322alatgempa.jpeg', '', '2010-01-01', '2022-01-01', '1676354322ruangpibal.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `kategori_alat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori_alat`) VALUES
(1, 'Konvensional'),
(2, 'Otomatis'),
(3, 'Modern');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logbook`
--

CREATE TABLE `tb_logbook` (
  `id_logbook` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_logbook`
--

INSERT INTO `tb_logbook` (`id_logbook`, `id_alat`, `kondisi`, `tanggal`, `nama_petugas`, `keterangan`) VALUES
(58, 23, 'Operasional', '2023-02-15', 'zakki', ''),
(59, 24, 'Operasional', '2023-02-15', 'zakki', ''),
(60, 25, 'Tidak Operasional', '2023-02-15', 'zakki', ''),
(61, 26, 'Operasional', '2023-02-15', 'zakki', ''),
(62, 27, 'Operasional', '2023-02-15', 'zakki', ''),
(63, 28, 'Operasional', '2023-02-15', 'zakki', ''),
(64, 29, 'Tidak Operasional', '2023-02-15', 'zakki', 'Rusak'),
(65, 30, 'Operasional', '2023-02-15', 'zakki', ''),
(66, 31, 'Operasional', '2023-02-15', 'zakki', ''),
(67, 32, 'Operasional', '2023-02-15', 'zakki', ''),
(68, 33, 'Operasional', '2023-02-15', 'zakki', ''),
(69, 34, 'Operasional', '2023-02-15', 'zakki', ''),
(70, 35, 'Operasional', '2023-02-15', 'zakki', ''),
(71, 36, 'Operasional', '2023-02-15', 'zakki', ''),
(72, 37, 'Operasional', '2023-02-15', 'zakki', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`id_alat`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kondisi` (`id_kondisi`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  ADD PRIMARY KEY (`id_logbook`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_alat`
--
ALTER TABLE `tb_alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  MODIFY `id_logbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD CONSTRAINT `alat_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`),
  ADD CONSTRAINT `tb_alat_ibfk_1` FOREIGN KEY (`id_kondisi`) REFERENCES `kondisi` (`id_kondisi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
