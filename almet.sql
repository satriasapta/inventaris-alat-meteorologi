-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2023 at 02:42 AM
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
(1, 'Thermometer Max-Min', 'termometer.jpeg', '', '2020-02-05', '2023-01-04', 'tamanalat.jpeg', '', '', '', '', '', '', '', '', '', '', 1, 1),
(2, 'Penangkar Hujan', '1674653164UseCaseBMKG.drawio.png', '', '2020-02-05', '2023-01-20', '1674653164UseCaseBMKG.drawio.png', '', '', '', '', '', '', '', '', '', '', 1, 1),
(3, 'Anemometer', '1674666578tamanalat.jpeg', '', '2020-02-05', '2023-01-20', '1674666578tamanalat.jpeg', '', '', '', '', '', '', '', '', '', '', 3, 2);

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
(30, 1, 'Operasional', '2023-02-02', 'Satria', ''),
(31, 2, 'Tidak Operasional', '2023-02-02', 'Satria', 'Rusak'),
(32, 3, 'Tidak Operasional', '2023-02-02', 'Satria', 'Rusak'),
(33, 1, 'Operasional', '2023-01-24', 'Muzakki', ''),
(34, 2, 'Operasional', '2023-01-24', 'Muzakki', ''),
(35, 3, 'Operasional', '2023-01-24', 'Muzakki', ''),
(36, 1, 'Operasional', '2023-01-25', 'Satria', ''),
(37, 2, 'Operasional', '2023-01-25', 'Satria', ''),
(38, 3, 'Operasional', '2023-01-25', 'Satria', ''),
(39, 1, 'Operasional', '2023-01-26', 'Satria', ''),
(40, 2, 'Operasional', '2023-01-26', 'Satria', ''),
(41, 3, 'Operasional', '2023-01-26', 'Satria', ''),
(42, 1, 'Operasional', '2023-01-27', 'Satria', ''),
(43, 2, 'Operasional', '2023-01-27', 'Satria', ''),
(44, 3, 'Operasional', '2023-01-27', 'Satria', '');

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
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  MODIFY `id_logbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
