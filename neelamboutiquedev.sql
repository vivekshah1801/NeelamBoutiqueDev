-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 01:06 PM
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
-- Table structure for table `enquiry_walater`
--

CREATE TABLE `enquiry_walater` (
  `EnquiryId` int(15) NOT NULL,
  `ProductId` int(20) NOT NULL,
  `CustomerName` varchar(100) DEFAULT NULL,
  `CustomerNumber` text DEFAULT NULL,
  `CustomerPrefTime` text DEFAULT NULL,
  `CustomerMessage` varchar(500) DEFAULT NULL,
  `EnquiryTimeStamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_wanow`
--

CREATE TABLE `enquiry_wanow` (
  `EnquiryId` int(15) NOT NULL,
  `ProductId` int(20) NOT NULL,
  `CustomerName` varchar(100) DEFAULT NULL,
  `CustomerNumber` text DEFAULT NULL,
  `EnquiryTimeStamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(50) NOT NULL,
  `ProductDesignId` int(10) NOT NULL DEFAULT 101,
  `ProductName` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `ProductCategory` varchar(100) COLLATE utf8mb4_bin DEFAULT 'NULL',
  `ProductImageLink` varchar(1000) COLLATE utf8mb4_bin DEFAULT 'NULL',
  `ProductAddedOn` datetime(6) NOT NULL,
  `IsTrending` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry_wanow`
--
ALTER TABLE `enquiry_wanow`
  ADD PRIMARY KEY (`EnquiryId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry_wanow`
--
ALTER TABLE `enquiry_wanow`
  MODIFY `EnquiryId` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
