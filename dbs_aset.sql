-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 11:18 AM
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
-- Database: `dbs_aset`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aset`
--

CREATE TABLE `tbl_aset` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `kualitas` varchar(20) NOT NULL,
  `lokasi_aset` varchar(30) NOT NULL,
  `no_faktur_pembelian` varchar(30) NOT NULL,
  `harga_pembelian` varchar(20) NOT NULL,
  `toko_pembelian` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `qr` varchar(100) NOT NULL,
  `user` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_aset`
--

INSERT INTO `tbl_aset` (`id`, `kode`, `nama_aset`, `kategori`, `kualitas`, `lokasi_aset`, `no_faktur_pembelian`, `harga_pembelian`, `toko_pembelian`, `foto`, `qr`, `user`, `date`) VALUES
(5, 'KA-633', 'Komputer', '-- Pilih Kategori --', 'Baru', '-- Pilih Lokasi Aset --', '3434343', '20000000', 'Azlan', 'da8b9fb0a3b3c3697594e9702ef9d947.png', '4b412d363333', '', '2023-04-03 07:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `kode`, `nama_kategori`, `date`) VALUES
(2, 'KT-88', 'Elektronik', '2023-04-03 09:04:22'),
(3, 'KT-561', 'Material', '2023-04-03 09:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kualitas`
--

CREATE TABLE `tbl_kualitas` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `kualitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kualitas`
--

INSERT INTO `tbl_kualitas` (`id`, `kode`, `kualitas`) VALUES
(2, 'KL-321', 'Baru'),
(3, 'KL-896', 'Bekas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lokasi`
--

CREATE TABLE `tbl_lokasi` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lokasi`
--

INSERT INTO `tbl_lokasi` (`id`, `kode`, `nama_lokasi`, `ruangan`, `date`) VALUES
(3, 'LK-810', 'Lantai 1', 'Gudang', '2023-04-03 09:09:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aset`
--
ALTER TABLE `tbl_aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kualitas`
--
ALTER TABLE `tbl_kualitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_aset`
--
ALTER TABLE `tbl_aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kualitas`
--
ALTER TABLE `tbl_kualitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
