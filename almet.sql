-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 05:05 AM
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
-- Table structure for table `tb_alat`
--

CREATE TABLE `tb_alat` (
  `id_alat` int(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `kelompok_alat` varchar(100) NOT NULL,
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
  `keamanan_alat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alat`
--

INSERT INTO `tb_alat` (`id_alat`, `nama_alat`, `kelompok_alat`, `gambar_alat`, `kondisi_alat`, `tahun_pembelian`, `kalibrasi`, `lokasi_alat`, `komponen_alat`, `penggantian_komponen`, `pemeliharaan_alat`, `perbaikan_alat`, `persiapan_pemeliharaan`, `cara_pemeliharaan`, `modifikasi_alat`, `penyediaan_alat`, `penyediaan_sukucadang`, `keamanan_alat`) VALUES
(1, 'Thermometer Max-Min', 'Konvensional', 'termometer.jpeg', 'Layak', '2022-01-02', '2023-01-01', 'tmnalat.jpeg', '1. Thermometer Maksimum \r\n2. Thermometer Minimum\r\n3. Dudukan Thermometer Max-min', '1. Penggantian thermometer Max-Min setiap 8(delapan) tahun.\r\n2. Penggantian dudukan thermometer Max-Min setiap 5 (lima) tahun.', 'Pemeliharaan berkala wajib dilakukan mingguan dan bulanan.\r\n', '1. Kerusakan pada thermometer Max-Min harus dilakukan penggantian;\r\n2. Kerusakan pada dudukan thermometer Max-Min dapat dilakukan \r\nperbaikan.\r\n', '1. Persiapan pelaksanaan pemeliharaan berkala :\r\na. mingguan :\r\nPeralatan yang harus dipersiapkan :\r\n- kain halus yang bersih;\r\n- cairan pembersih dengan konsentrasi rendah.\r\nb. bulanan :\r\nPeralatan yang harus dipersiapkan :\r\n- kain halus yang bersih;\r\n- cairan pembersih dengan konsentrasi rendah;\r\n- pembersih stainless steel atau metal polish;\r\n- cat besi warna silver;\r\n- pengencer cat;\r\n- toolkit set.\r\n2. Persiapan perbaikan untuk mengembalikan fungsinya :\r\nPeralatan yang harus dipersiapkan :\r\na. kain halus yang bersih;\r\nb. cairan pembersih dengan konsentrasi rendah;\r\nc. wadah air dari plastik;\r\nd. air panas;\r\ne. lem besi;\r\nf. toolkit set.', '1. Cara pelaksanaan pemeliharaan berkala :\r\na. mingguan :\r\n- waktu pemeliharaan berkala mingguan dilaksanakan setelah jam \r\npengamatan 00 UTC, sampai dengan sebelum jam pengamatan \r\nberikutnya;\r\n- lepas thermometer Max-Min dari dudukannya, bersihkan kotoran \r\ndan debu yang melekat dengan kain halus yang bersih dan cairan \r\npembersih; \r\n- bersihkan kotoran dan karat pada dudukan thermometer Max-Min \r\ndengan kain halus yang bersih dan cairan pembersih;\r\n- setelah proses perawatan selesai, pasang kembali thermometer\r\nMax-Min pada tempat kedudukannya semula secara hati-hati;\r\n- waktu yang diperlukan 10 (sepuluh) menit;\r\n- catat seluruh aktifitas yang dilakukan pada log book peralatan.\r\nb. bulanan :\r\n- waktu pemeliharaan berkala bulanan dilaksanakan antara tanggal \r\n1 - 5 setiap bulannya, setelah jam pengamatan 00 UTC sampai \r\ndengan sebelum jam pengamatan berikutnya;\r\n- catat penunjukan suhu pada thermometer Max-Min;\r\n- lepas thermometer Max-Min dari dudukannya, bersihkan kotoran \r\ndan debu yang melekat dengan kain halus yang bersih dan cairan \r\npembersih;\r\n- bersihkan kotoran dan karat pada dudukan thermometer Max-Min\r\ndengan kain halus yang bersih dan cairan pembersih;\r\n- lakukan pengecatan pada dudukan yang terbuat dari besi dengan \r\ncat berwarna silver dan bersihkan bagian dudukan yang terbuat \r\ndari stainless steel dengan pembersih stainless steel atau metal \r\npolish;\r\n- setelah proses perawatan selesai, pasang kembali thermometer\r\nMax-Min pada tempat kedudukan semula secara hati-hati dengan \r\nmemperhatikan posisi suhu maksimum dan minimum yang \r\ntercatat sebelum dilakukan pemeliharaan;\r\n- waktu yang diperlukan 20 (dua puluh) menit;\r\n- catat seluruh aktifitas yang dilakukan pada log book peralatan.\r\n2. Cara perbaikan untuk mengembalikan fungsinya :\r\na. apabila air raksa dalam kolom air raksa thermometer Max terputus, \r\nambil thermometer Max secara perlahan-lahan kemudian diayun \r\natau dipelantingkan sampai air raksa menyatu kembali;\r\nb. apabila yang terputus adalah alkohol yang terdapat pada \r\nthermometer Min, ambil thermometer Min secara perlahan-lahan \r\nkemudian celupkan bulb thermometer Min kedalam air hangat \r\nsampai alkohol yang terputus tersambung kembali (batas maksimum \r\npanas air adalah 100C di atas batas maksimum penunjukan skala di \r\nthermometer Min ), dan kembalikan indeks pada ujung alkohol;\r\nc. apabila kerusakan pada dudukan untuk thermometer Max-Min, \r\nlakukan perbaikan mekanik dengan pengeleman atau pengelasan, \r\ndan terlebih dahulu melepaskan thermometer Max-Min dari tempat \r\nyang akan diperbaiki;\r\nd. apabila kerusakan tidak dapat diperbaiki, lakukan penggantian alat;\r\ne. waktu pelaksanaan perbaikan paling lama 1 x 24 jam setelah \r\ndiketahui kerusakan;\r\nf. catat seluruh aktifitas yang dilakukan pada log book peralatan;\r\ng. laporkan kerusakan dan hasil perbaikan peralatan secara hirarki.', 'Modifikasi, rekondisi, dan rehabilitasi terhadap thermometer Max-Min tidak \r\ndapat dilakukan.', 'Peralatan thermometer Max-Min merupakan peralatan yang terkait \r\nlangsung dengan pembuatan informasi cuaca yang dapat mengindikasikan \r\nadanya kenaikan suhu udara yang maksimum dan minimum, pemilik \r\nstasiun pengamatan wajib memiliki peralatan cadangan.\r\n', 'Suku cadang tidak disediakan untuk thermometer Max-Min.', 'Keamanan terhadap peralatan thermometer Max-Min dapat dilakukan \r\nmelalui tersedianya petugas keamanan.\r\n\r\nThermometer Max-Min harus di tempatkan di dalam sangkar meteorologi \r\npada stasiun pengamatan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alat`
--
ALTER TABLE `tb_alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
