-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2019 at 06:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kimochi_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jasa`
--

CREATE TABLE `data_jasa` (
  `id` int(11) NOT NULL,
  `judul_layanan` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `harga` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jasa`
--

INSERT INTO `data_jasa` (`id`, `judul_layanan`, `deskripsi`, `harga`, `img`) VALUES
(1, 'Cuci Full Face + Wax', 'Cuci bersih dan harum helm full face', 15000, NULL),
(2, 'Cuci Full Face Biasa', 'Cuci bersih helm full face', 10000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jasa`
--
ALTER TABLE `data_jasa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jasa`
--
ALTER TABLE `data_jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
