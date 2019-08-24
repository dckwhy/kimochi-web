-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2019 at 02:45 PM
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
-- Table structure for table `data_accessories`
--

CREATE TABLE `data_accessories` (
  `id` int(11) NOT NULL,
  `nama_accessories` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_layanan`
--

CREATE TABLE `data_layanan` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(50) DEFAULT NULL,
  `description` text,
  `harga` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_layanan`
--

INSERT INTO `data_layanan` (`id`, `nama_layanan`, `description`, `harga`, `img`) VALUES
(1, 'Full Face Cuci Standard', 'Cuci helm half full face bersih dan harum sekali', 10000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_accessories`
--
ALTER TABLE `data_accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_layanan`
--
ALTER TABLE `data_layanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_accessories`
--
ALTER TABLE `data_accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_layanan`
--
ALTER TABLE `data_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
