-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 02:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `No` int(2) NOT NULL,
  `BusType` varchar(50) NOT NULL,
  `RouteID` varchar(50) NOT NULL,
  `PlateNo` text NOT NULL,
  `WDFirstBus` time NOT NULL,
  `WDLastBus` time NOT NULL,
  `WEFirstBus` time NOT NULL,
  `WELastBus` time NOT NULL,
  `Frequency` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`No`, `BusType`, `RouteID`, `PlateNo`, `WDFirstBus`, `WDLastBus`, `WEFirstBus`, `WELastBus`, `Frequency`, `Status`) VALUES
(1, 'RapidKL Bus', '300', 'WES1245', '05:20:00', '22:56:00', '05:20:00', '22:56:00', '6', 'OK'),
(4, 'GoKL Bus', 'GOKL-01-(GREEN)', 'WER 2356', '06:00:00', '23:00:00', '07:00:00', '23:00:00', '10-15', 'OK'),
(5, 'Smart Selangor Bus', 'HS01', 'WSR 3232', '06:00:00', '20:00:00', '06:00:00', '20:00:00', '', 'OK'),
(2, 'MRT Putrajaya Feeder Bus', 'T103', '[WXC4567]', '06:00:00', '23:30:00', '06:00:00', '11:30:00', '20-40', 'OK'),
(3, 'MRT Kajang Feeder Bus', 'T305', 'WJX 5455', '06:00:00', '23:30:00', '06:00:00', '23:30:00', '30-50', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `train_status`
--

CREATE TABLE `train_status` (
  `train_id` int(11) NOT NULL,
  `train_name` varchar(50) NOT NULL,
  `frequency` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `train_status`
--

INSERT INTO `train_status` (`train_id`, `train_name`, `frequency`, `status`) VALUES
(3, 'Ampang Line', '3 (CBD) / 6 (non-CBD)', 'Delay'),
(4, 'Sri Petaling Line', '3 (CBD) / 6 (non-CBD)', 'Delay'),
(5, 'Kelana Jaya Line', '4 (Peak Hours) / 7(non Peak Hours)', 'Good'),
(8, 'KL Monorail Line', '10', 'Good'),
(9, 'Kajang Line', '6 (Peak Hours) / 10(non Peak Hours)', 'Good'),
(12, 'Putrajaya Line', '5 (Peak Hours) / 10(non Peak Hours)', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`RouteID`);

--
-- Indexes for table `train_status`
--
ALTER TABLE `train_status`
  ADD PRIMARY KEY (`train_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
