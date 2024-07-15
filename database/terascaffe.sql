-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 10:35 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terascaffe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenismenu`
--

CREATE TABLE `tb_jenismenu` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenismenu`
--

INSERT INTO `tb_jenismenu` (`id`, `nama`) VALUES
(1, 'Nasi Goreng'),
(2, 'Mie Goreng'),
(3, 'Indomie'),
(4, 'Kwetiaw'),
(5, 'Snack'),
(6, 'Dimsum'),
(7, 'Roti Bakar'),
(8, 'Aneka Jus'),
(9, 'Tea'),
(10, 'Coffee'),
(12, 'Non Coffee');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasir`
--

CREATE TABLE `tb_kasir` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kasir`
--

INSERT INTO `tb_kasir` (`id`, `username`, `password`) VALUES
(1, 'kasir', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `jenis` int(11) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `jenis`, `harga`) VALUES
(1, 'Nasi Goreng Biasa', 1, 15000),
(2, 'Nasi Goreng Pattaya', 1, 18000),
(3, 'Mie Goreng Biasa', 2, 15000),
(4, 'Indomie Tumis', 3, 18000),
(5, 'Indomie Kuah', 3, 18000),
(6, 'Indomie Goreng', 3, 18000),
(7, 'Kwetiaw Goreng', 4, 15000),
(8, 'Kwetiaw Goreng Seafood', 4, 20000),
(9, 'Kwetiaw Goreng Spesial', 4, 25000),
(10, 'Nasi Goreng Seafood', 1, 18000),
(11, 'Nasi Goreng Kampung', 1, 16000),
(12, 'Nasi Goreng Spesial', 1, 20000),
(13, 'Nasi Goreng Spesial Ayam', 1, 25000),
(14, 'Mie Goreng Seafood', 2, 18000),
(15, 'Mie Goreng Spesial', 2, 20000),
(16, 'Mie Goreng Komplit', 2, 25000),
(17, 'Kentang Goreng', 5, 15000),
(18, 'Nugget Goreng', 5, 15000),
(19, 'Dimsum Ayam', 6, 20000),
(20, 'Dimsum Udang', 6, 20000),
(21, 'Dimsum Kepiting', 6, 20000),
(22, 'Matcha', 12, 18000),
(23, 'Red Velvet', 12, 18000),
(24, 'Chocolate', 12, 18000),
(25, 'Vanilla', 12, 18000),
(26, 'Taro', 12, 18000),
(27, 'Espresso', 10, 16000),
(28, 'Cappucino', 10, 20000),
(29, 'Americano', 10, 18000),
(30, 'Long Black', 10, 18000),
(31, 'Sanger', 10, 18000),
(32, 'Teh Manis', 9, 7000),
(33, 'Teh Tarik', 9, 7000),
(34, 'Lemon Tea', 9, 10000),
(35, 'Thai Tea', 9, 10000),
(36, 'Jus Jeruk', 8, 10000),
(37, 'Jus Alpukat', 8, 10000),
(38, 'Jus Terong Belanda', 8, 10000),
(39, 'Jus Buah Naga', 8, 10000),
(40, 'Jus Kuini', 8, 10000),
(41, 'Roti Bakar Pisang Coklat', 7, 18000),
(42, 'Roti Bakar Pisang Keju', 7, 18000),
(43, 'Roti Bakar Pisang Coklat Keju', 7, 22000),
(44, 'Roti Bakar Pisang Strawberry', 7, 22000),
(45, 'Jamur Crispy', 5, 15000),
(46, 'Pisang Crispy Coklat', 5, 14000),
(47, 'Pisang Crispy Coklat Keju', 5, 16000),
(48, 'Bakwan Jagung', 5, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_or` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_or`, `id_user`, `id_menu`, `qty`, `tanggal`) VALUES
(23, 11, 1, 6, '2024-06-23 19:10:30'),
(24, 11, 3, 3, '2024-06-23 19:10:30'),
(26, 11, 2, 3, '2024-06-23 19:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_trans` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `total` double NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_trans`, `id_user`, `id_menu`, `total`, `tanggal`, `status`) VALUES
(12, 11, 3, 135000, '2024-06-23 19:16:45', 'Selesai'),
(13, 11, 2, 54000, '2024-06-23 19:59:30', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `alamat`, `notelp`) VALUES
(11, 'rahman', 'rahman', 'airbatu', '086453536');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenismenu`
--
ALTER TABLE `tb_jenismenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_or`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_user` (`id_user`,`id_menu`),
  ADD KEY `tb_pesanan_ibfk_2` (`id_menu`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jenismenu`
--
ALTER TABLE `tb_jenismenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_or` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD CONSTRAINT `tb_menu_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `tb_jenismenu` (`id`);

--
-- Constraints for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
