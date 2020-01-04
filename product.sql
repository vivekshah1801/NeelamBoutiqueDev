-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 09:54 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neelamboutiquedev`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(50) NOT NULL,
  `ProductDesignId` int(10) NOT NULL DEFAULT 101,
  `ProductName` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `ProductCategory` varchar(100) COLLATE utf8mb4_bin DEFAULT 'NULL',
  `ProductDescription` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL,
  `ProductImageLink` varchar(1000) COLLATE utf8mb4_bin DEFAULT 'NULL',
  `ProductAddedOn` datetime(6) NOT NULL,
  `IsTrending` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `ProductDesignId`, `ProductName`, `ProductCategory`, `ProductDescription`, `ProductImageLink`, `ProductAddedOn`, `IsTrending`) VALUES
(1, 12, '', '', NULL, '', '2019-12-29 08:23:42.000000', 'Yes'),
(2, 123, 'sdga', 'bridal', NULL, 'vivek.jpg', '2020-01-04 21:30:24.000000', 'yes'),
(3, 1234, 'sdhfj', 'indo-western', NULL, 'vivek.jpg', '2020-01-04 21:37:53.000000', 'no'),
(4, 89, 'whejfg', 'indo-western', NULL, 'images/products/', '2020-01-04 21:41:27.000000', 'no'),
(5, 1245, 'sdvhjags', 'choli', NULL, 'images/products/', '2020-01-04 21:42:50.000000', 'no'),
(6, 987, 'djgfha', 'bridal', 'ndhfstye', 'images/products/6.jpg', '2020-01-04 21:53:43.000000', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
