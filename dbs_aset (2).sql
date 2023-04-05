-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 10:26 AM
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

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `kode`, `jabatan`, `username`, `pass`, `date`) VALUES
(3, 'AD-547', 'Administrasi', 'admin', '$2y$10$gZKjAvQEw60pcd6ksaQoYO4szR1iCOzGHNCU1vFf3JDpWmQzyjElq', '2023-04-05 07:21:20');

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
(11, 'KA-357', 'Komputer', 'Elektronik', 'Bekas', 'Lantai 1', '3434343434333', '2000000', 'Amanahkom', '1adb2144b8f0889e1482988434c66bd3.PNG', '687474703a2f2f6c6f63616c686f73742f617365742f617365742f696e6465782f4b412d333537', '', '2023-04-05 07:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_denda`
--

CREATE TABLE `tbl_denda` (
  `id` int(11) NOT NULL,
  `kode_peminjam` varchar(15) NOT NULL,
  `kode_aset` varchar(15) NOT NULL,
  `tgl_pengembalian` varchar(15) NOT NULL,
  `denda` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_denda`
--

INSERT INTO `tbl_denda` (`id`, `kode_peminjam`, `kode_aset`, `tgl_pengembalian`, `denda`, `date`) VALUES
(2, '3434', 'KA-885', '2023-04-05', '0', '2023-04-05 04:31:06'),
(3, 'PJM-1986', 'KA-357', '2023-04-05', '20000', '2023-04-05 08:08:04');

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
(3, 'KL-896', 'Bekas'),
(4, 'KL-265', 'Baru');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `kode_aset` varchar(15) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `alamat_peminjam` text NOT NULL,
  `nohp_peminjam` int(13) NOT NULL,
  `jml_barang` varchar(5) NOT NULL,
  `tgl_peminjaman` varchar(15) NOT NULL,
  `tgl_pengembalian` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(2) NOT NULL,
  `status_denda` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id`, `kode`, `kode_aset`, `nama_peminjam`, `alamat_peminjam`, `nohp_peminjam`, `jml_barang`, `tgl_peminjaman`, `tgl_pengembalian`, `keterangan`, `status`, `status_denda`, `date`) VALUES
(3, 'PJM-1986', 'KA-357', 'Aldi', 'Stabat', 2147483647, '3', '2023-04-02', '2023-04-03', 'Tidak ada', 0, 1, '2023-04-05 08:07:56');

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
-- Indexes for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
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
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_aset`
--
ALTER TABLE `tbl_aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kualitas`
--
ALTER TABLE `tbl_kualitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
