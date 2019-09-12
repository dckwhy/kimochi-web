-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2019 at 06:01 AM
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
-- Database: `kimochi_helm`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_helm`
--

CREATE TABLE `data_helm` (
  `id` int(11) NOT NULL,
  `id_cust` varchar(50) DEFAULT NULL,
  `id_layanan` int(11) DEFAULT NULL,
  `jenis_helm` varchar(20) DEFAULT NULL,
  `merk_helm` varchar(20) DEFAULT NULL,
  `lama_pemakaian` varchar(20) DEFAULT NULL,
  `tempurung_luar` enum('Mulus','Baret','Retak','Pecah') DEFAULT NULL,
  `visor` enum('Mulus','Baret Buram','Retak','Pecah') DEFAULT NULL,
  `baut_kiri` enum('Bagus','Peyot','Rusak') DEFAULT NULL,
  `baut_kanan` enum('Bagus','Peyot','Rusak') DEFAULT NULL,
  `busa` varchar(50) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_helm`
--

INSERT INTO `data_helm` (`id`, `id_cust`, `id_layanan`, `jenis_helm`, `merk_helm`, `lama_pemakaian`, `tempurung_luar`, `visor`, `baut_kiri`, `baut_kanan`, `busa`, `img`, `status`, `jumlah`) VALUES
(5, 'CUST_53602941', 1, 'Full Face', 'INK', '1 Tahun', 'Mulus', 'Mulus', 'Bagus', 'Peyot', 'Robek|', NULL, 'Selesai', 1),
(6, 'CUST_53602941', 2, 'Full Face', 'Shoei', '1 Tahun', 'Baret', 'Baret Buram', 'Bagus', 'Peyot', 'Robek|', NULL, 'Selesai', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_helm`
--
ALTER TABLE `data_helm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_helm`
--
ALTER TABLE `data_helm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
