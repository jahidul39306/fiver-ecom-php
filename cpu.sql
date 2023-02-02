-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 11:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpuId` int(11) NOT NULL,
  `cpuName` varchar(40) DEFAULT NULL,
  `cpuModel` varchar(40) DEFAULT NULL,
  `cpuSpeed` varchar(40) DEFAULT NULL,
  `cpuSocket` varchar(40) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `picture` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpuId`, `cpuName`, `cpuModel`, `cpuSpeed`, `cpuSocket`, `Price`, `Stock`, `picture`) VALUES
(1, 'Intel CPU', 'Core i3', '3.6 GHz', 'LGA 1200', 380.05, 50, ''),
(2, 'Intel CPU', 'Core i7', '3.6, 2.1, 4.9 GHz', 'FC-LGA16A', 1, 20, ''),
(3, 'AMD Ryzen 5', '5 5600G', '3.9 GHz', 'Socket AM4', 724.57, 30, 'vff'),
(4, 'AMD Ryzen™ 9 ', '9 5950X', '5 GHz', 'SAM5', 2, 10, ''),
(5, 'AMD Ryzen 5 ', '5 4000', '3.7 GHz', 'Socket AM4', 563.42, 30, ''),
(6, 'Intel CPU ', 'Core i5', '2.5, 4.4 GHz', 'LGA 1150', 684, 20, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`cpuId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `cpuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
