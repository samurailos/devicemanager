-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 03:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_devices`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_device`
--

CREATE TABLE `tbl_device` (
  `id` int(11) NOT NULL,
  `make` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `deviceType` varchar(50) NOT NULL,
  `imeiSerialno` int(100) NOT NULL,
  `osVersion` varchar(50) NOT NULL,
  `assignedTo` varchar(100) NOT NULL,
  `serviceVehicle` varchar(50) DEFAULT NULL,
  `dateAssigned` date NOT NULL,
  `status_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_device`
--

INSERT INTO `tbl_device` (`id`, `make`, `model`, `deviceType`, `imeiSerialno`, `osVersion`, `assignedTo`, `serviceVehicle`, `dateAssigned`, `status_id`) VALUES
(6, 'Hp', 'ProBook', 'Laptop', 123456, 'Windows 10', 'Jet Li', '5678HN', '2020-04-22', 1),
(11, 'Samsung', 'S7 edge', 'Phone', 123456, 'Windows 10', 'Sheena Smith', '1234gn', '2020-06-02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_devicetype`
--

CREATE TABLE `tbl_devicetype` (
  `deviceType_id` int(11) NOT NULL,
  `device_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_devicetype`
--

INSERT INTO `tbl_devicetype` (`deviceType_id`, `device_Type`) VALUES
(1, 'Phone'),
(3, 'Tablet'),
(4, 'Laptop'),
(5, 'Sim Card'),
(6, 'Memory Card');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_name`) VALUES
(1, 'Active'),
(2, 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_device`
--
ALTER TABLE `tbl_device`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deviceType` (`deviceType`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `tbl_devicetype`
--
ALTER TABLE `tbl_devicetype`
  ADD PRIMARY KEY (`deviceType_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `status_id` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_device`
--
ALTER TABLE `tbl_device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
