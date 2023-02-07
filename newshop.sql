-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 09:26 AM
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
-- Database: `newshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `PhoneNum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Pass`, `FirstName`, `Email`, `PhoneNum`) VALUES
(1, 'ahm232', '1234', 'ali', 'ali@gmail.com', '0598768898'),
(2, 'abc123', '1234', 'bader', 'bader33@gmail.com', '0577777898'),
(3, 'aed234', '4313', 'mustafa', 'musta45@gmail.com', '0542421354'),
(4, 'www333', '5678', 'abdul', 'abdul123@gmail.com', '0599987877'),
(5, 'sad22', '4564', 'ibrahim', 'ibrahim@gmail.com', '0544443211'),
(6, 'ali67', '4545', 'ahmed', 'ahmed546@gmail.com', '0539888878');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `cpuName` varchar(40) DEFAULT NULL,
  `cpuModel` varchar(40) DEFAULT NULL,
  `cpuSpeed` varchar(40) DEFAULT NULL,
  `cpuSocket` varchar(40) DEFAULT NULL,
  `Price` varchar(40) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`id`, `cpuName`, `cpuModel`, `cpuSpeed`, `cpuSocket`, `Price`, `Stock`, `image`) VALUES
(1, 'Intel CPU', 'Core i3', '3.6 GHz', 'LGA 1200', '380.05', 50, ''),
(2, 'Intel CPU', 'Core i7', '3.6, 2.1, 4.9 GHz', 'FC-LGA16A', '1545.00', 20, ''),
(3, 'AMD Ryzen 5', '5 5600G', '3.9 GHz', 'Socket AM4', '724.57', 30, ''),
(4, 'AMD Ryzen™ 9 ', '9 5950X', '5 GHz', 'SAM5', '2339.02', 10, ''),
(5, 'AMD Ryzen 5 ', '5 4000', '3.7 GHz', 'Socket AM4', '563.42', 30, '63dd5f29c063f9.25255554.jpg'),
(6, 'Intel CPU ', 'Core i5', '2.5, 4.4 GHz', 'LGA 1150', '684', 20, '63dd5f0863c8e7.83923371.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `OrderNum` int(11) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `PhoneNum` varchar(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `OrderNum`, `LastName`, `FirstName`, `country`, `Email`, `PhoneNum`, `UserName`, `Pass`) VALUES
(1, 344, 'ali', 'mohammed', 'dammam', 'moh222@gmail.com', '+539987898', '', ''),
(2, 347, 'micv', 'alex', 'us', 'alex3232@gmail.com', '+153453456', '', ''),
(3, 645, 'ali', 'khalid', 'khobar', 'kal777@gmail.com', '+535437898', '', ''),
(4, 345, 'ahmed', 'bader', 'dammam', 'bad212@gmail.com', '+535685898', '', ''),
(5, 678, 'swe', 'felix', 'mexico', 'fswe22@gmail.com', '+521234589', '', ''),
(6, 143, 'ali', 'ahmed', 'dammam', 'ali99@gmail.com', '+539457898', '', ''),
(7, 321, 'john', 'mik', 'paris', 'mik@gmail.com', '+333993246', '', ''),
(8, 743, 'ali', 'abdullah', 'dammam', 'aaa@gmail.com', '+539876843', '', ''),
(9, 567, 'mohammed', 'ahmed', 'dubai', 'moh112@gmail.com', '+971909888', '', ''),
(10, 867, 'ali', 'hassan', 'dammam', 'hass@gmail.com', '+539435666', '', ''),
(11, 0, NULL, 'demo', '', 'demo@gmail.com', 'demo', 'demo', 'demo'),
(12, 0, NULL, 'customer', '', 'customer@gamil.com', 'customer', 'customer', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `id` int(11) NOT NULL,
  `gpuName` varchar(40) DEFAULT NULL,
  `gpuRamSize` varchar(40) DEFAULT NULL,
  `gpuClockSpeed` varchar(40) DEFAULT NULL,
  `gpuVideoOutput` varchar(40) DEFAULT NULL,
  `gpuRamType` varchar(40) DEFAULT NULL,
  `price` varchar(40) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`id`, `gpuName`, `gpuRamSize`, `gpuClockSpeed`, `gpuVideoOutput`, `gpuRamType`, `price`, `stock`, `image`) VALUES
(1, 'MSI Gaming GeForce RTX 3070 Ti', '8 GB', '1800 MHz', 'DisplayPort, HDMI', 'GDDR6', '3452.64', 5, ''),
(2, 'NVIDIA GeForce RTX 3050', '8 GB', '1777 MHz', 'DisplayPort, HDMI', 'GDDR6', '1099.00', 10, ''),
(3, 'ASRock Radeon RX 6600', '8 GB', '1626 MHz', 'DisplayPort, HDMI', 'GDDR6', '1011.99', 10, ''),
(4, 'GIGABYTE B660 AORUS Master', '4 GB', '1500 MHz', 'DisplayPort, HDMI', 'DDR4', '830.76', 20, ''),
(5, 'MSI Ventus GeForce RTX 3060 Ti', '8 GB', '1695 MHz', 'DisplayPort, HDMI', 'GDDR6', '2115.99', 5, ''),
(6, 'GIGABYTE AORUS GeForce RTX 3050 ELITE', '8 GB', '1750 MHz', 'DisplayPort, HDMI', 'GDDR6', '1611.14', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `id` int(11) NOT NULL,
  `ramName` varchar(40) DEFAULT NULL,
  `ramSpeed` varchar(40) DEFAULT NULL,
  `ramType` varchar(40) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`id`, `ramName`, `ramSpeed`, `ramType`, `price`, `stock`, `image`) VALUES
(1, 'Corsair Vengeance RGB Pro SL', '32GB', 'DDR4', 586.81, 50, ''),
(2, 'Crucial RAM', '16GB', 'DDR4', 200, 50, ''),
(3, 'Crucial by Micron', '8GB', 'DDR4', 137.47, 50, ''),
(4, 'Pepisky LO', '4GB', 'DDR3', 124.83, 50, ''),
(5, 'KUESUNY ', '16GB', 'DDR3', 179.99, 50, ''),
(6, 'Hynix Laptop Ram ', '8GB', 'DDR3', 105.78, 50, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
