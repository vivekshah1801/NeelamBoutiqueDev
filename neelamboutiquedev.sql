-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 07:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `CustomerNumber` text,
  `CustomerPrefTime` text,
  `CustomerMessage` varchar(500) DEFAULT NULL,
  `EnquiryTimeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_wanow`
--

CREATE TABLE `enquiry_wanow` (
  `EnquiryId` int(15) NOT NULL,
  `ProductId` int(20) NOT NULL,
  `CustomerName` varchar(100) DEFAULT NULL,
  `CustomerNumber` text,
  `EnquiryTimeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(50) NOT NULL,
  `ProductDesignId` int(10) NOT NULL DEFAULT '101',
  `ProductName` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `ProductCategory` varchar(100) COLLATE utf8mb4_bin DEFAULT 'NULL',
  `ProductImageLink` varchar(1000) COLLATE utf8mb4_bin DEFAULT 'NULL',
  `ProductAddedOn` datetime(6) NOT NULL,
  `IsTrending` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `ProductDesignId`, `ProductName`, `ProductCategory`, `ProductImageLink`, `ProductAddedOn`, `IsTrending`) VALUES
(1, 12, 'virasat kurti', 'kurti', 'product5.jpg', '2019-12-28 15:10:22.000000', 'Yes'),
(2, 45, 'Patola', '', '', '2019-12-28 15:25:29.000000', 'Yes'),
(3, 24, 'patiyala dress', 'dress', 'product.jpg', '2019-12-28 18:24:52.000000', 'Yes'),
(4, 24, 'Bridal lehenga', 'bride', 'product.jpg', '2019-12-28 18:37:54.000000', 'Yes'),
(5, 34, 'bride', 'bride', 'product5.jpg', '2019-12-28 18:40:13.000000', 'Yes');

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
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
