-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 04:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bahagiaputramotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `transmisi` varchar(200) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `spesifikasi`, `brand`, `transmisi`, `stok`, `price`) VALUES
(41, 'Yamaha Vixion', 'Mesin 150cc', 'Yamaha', 'Manual Clutch', '10', '15.000.000'),
(42, 'Yamaha NMAX', 'Mesin 150cc', 'Yamaha', 'Matic', '10', '20.000.000'),
(44, 'Yamaha R15', 'Mesin 150cc', 'Yamaha', 'Manual Clutch', '10', '40.000.000'),
(45, 'Yamaha XMAX', 'Mesin 250cc', 'Yamaha', 'Matic', '10', '45.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id_barang` int(100) NOT NULL,
  `nama1` varchar(100) NOT NULL,
  `brand1` varchar(100) NOT NULL,
  `stok1` int(100) NOT NULL,
  `harga1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id_barang`, `nama1`, `brand1`, `stok1`, `harga1`) VALUES
(4, 'Yamalube oil', 'Oli', 11, '50000'),
(5, 'Kampas REM', 'Brake Pads', 10, '30000'),
(6, 'Ban Luar', 'Ban', 15, '2100000'),
(8, 'Saringan Udara', 'Filter', 5, '40000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'Admin1', '$2y$10$HZENQX1qPnk2ZPwfUn4/P.oBnhuITwqT2ZnlkB/sYGA4DT4I7zIci'),
(7, 'admin2', '$2y$10$X7ecxb6WytJJSxJC4CC7UOT53H3XyUZNIUcq8PpKkNyLUJaZPhP3K'),
(8, 'tes', '$2y$10$l24xbXOlf9yI.G0KKd5gBeXEnz0CbgrvevRIfUSRG2lzljjemqETS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
