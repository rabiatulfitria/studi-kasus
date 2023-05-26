-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 01:08 AM
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
-- Database: `toko_donat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_toko_donat`
--

CREATE TABLE `admin_toko_donat` (
  `id_pengguna` int(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_toko_donat`
--

INSERT INTO `admin_toko_donat` (`id_pengguna`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(1233, 'admin', 'admin1', 'rabiatul fitria sulistina putri', 'fitriarobiatul13@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `harga_donat`
--

CREATE TABLE `harga_donat` (
  `jumlah_harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_donat`
--

INSERT INTO `harga_donat` (`jumlah_harga`) VALUES
('5000.00'),
('6000.00'),
('9500.00'),
('10000.00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`nama_kategori`) VALUES
('Donat Ukuran Mini'),
('Donat Ukuran Regular');

-- --------------------------------------------------------

--
-- Table structure for table `produk_donat`
--

CREATE TABLE `produk_donat` (
  `id` int(3) NOT NULL,
  `nama_donat` varchar(30) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `status` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_donat`
--

INSERT INTO `produk_donat` (`id`, `nama_donat`, `nama_kategori`, `harga`, `status`, `gambar`) VALUES
(1, 'Caviar Chocolate', 'Donat Ukuran Regular', '9500.00', 'tersedia 5 buah', 'caviar_chocolate.png'),
(2, 'Why Nut', 'Donat Ukuran Regular', '10000.00', 'tersedia 8 buah', 'why_nut.png'),
(3, 'Avocado Delight', 'Donat Ukuran Mini', '6000.00', 'belum tersedia', 'avocado_delight.png'),
(4, 'Dont Cry', 'Donat Ukuran Regular', '9500.00', 'tersedia 10 buah', 'dont_cry.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_toko_donat`
--
ALTER TABLE `admin_toko_donat`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `harga_donat`
--
ALTER TABLE `harga_donat`
  ADD PRIMARY KEY (`jumlah_harga`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`nama_kategori`);

--
-- Indexes for table `produk_donat`
--
ALTER TABLE `produk_donat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk_donat`
--
ALTER TABLE `produk_donat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
