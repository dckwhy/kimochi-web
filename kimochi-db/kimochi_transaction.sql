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
-- Database: `kimochi_transaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_transaction`
--

CREATE TABLE `data_transaction` (
  `id` int(11) NOT NULL,
  `id_cashier` int(11) DEFAULT NULL,
  `id_to` varchar(50) DEFAULT NULL,
  `id_cust` varchar(50) DEFAULT NULL,
  `id_tr` varchar(50) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL,
  `voucher_id` int(11) DEFAULT NULL,
  `voucher_discount` int(11) DEFAULT NULL,
  `voucher_value` int(11) DEFAULT NULL,
  `coupon_code` varchar(50) DEFAULT NULL,
  `coupon_value` int(11) DEFAULT NULL,
  `coupon_desc` text,
  `total` int(11) DEFAULT NULL,
  `payment_method` varchar(20) DEFAULT NULL,
  `cash` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  `bonus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaction`
--

INSERT INTO `data_transaction` (`id`, `id_cashier`, `id_to`, `id_cust`, `id_tr`, `tgl_transaksi`, `sub_total`, `voucher_id`, `voucher_discount`, `voucher_value`, `coupon_code`, `coupon_value`, `coupon_desc`, `total`, `payment_method`, `cash`, `kembalian`, `bonus`) VALUES
(1, 1, 'TO_2019091221', 'CUST_53602941', 'TR_201909111227', '2019-09-12', NULL, 0, NULL, NULL, 'CP_12345', 5000, 'Hari kebaikan', 20000, 'Tunai', 50000, 30000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_transaction`
--
ALTER TABLE `data_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_transaction`
--
ALTER TABLE `data_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
