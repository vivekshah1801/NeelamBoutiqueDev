-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 02:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neelam`
--

-- --------------------------------------------------------

--
-- Table structure for table `callbackreq`
--

CREATE TABLE `callbackreq` (
  `CallBackId` int(10) NOT NULL,
  `Time` datetime(6) NOT NULL,
  `MobileNum` int(10) NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `Message` varchar(5000) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `EnqId` int(100) NOT NULL,
  `ProdId` int(10) NOT NULL,
  `MobileNum` int(10) NOT NULL,
  `TimeStamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `Name` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(50) NOT NULL,
  `ProdId` int(10) NOT NULL,
  `ProdName` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `IsTrending` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `PriImageLink` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `AddedOn` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `callbackreq`
--
ALTER TABLE `callbackreq`
  ADD PRIMARY KEY (`CallBackId`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`EnqId`),
  ADD KEY `ProdId` (`ProdId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`,`ProdId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
