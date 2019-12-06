-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 08:06 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodrepository`
--

CREATE TABLE `bloodrepository` (
  `B_Bag_ID` int(5) NOT NULL,
  `Blood_Type` varchar(3) NOT NULL,
  `Cost` decimal(5,2) NOT NULL,
  `S_Quantity` int(11) NOT NULL,
  `Doner_ID` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodrepository`
--

INSERT INTO `bloodrepository` (`B_Bag_ID`, `Blood_Type`, `Cost`, `S_Quantity`, `Doner_ID`) VALUES
(10001, 'O+', '500.00', 5, 4151451),
(10002, 'B+', '500.00', 6, 4151452),
(10003, 'AB+', '500.00', 3, 4151453),
(10004, 'O-', '700.00', 7, 4151454),
(10005, 'O+', '700.00', 5, 4151455),
(10006, 'A-', '700.00', 4, 4151456),
(10007, 'B-', '700.00', 3, 4151457),
(10008, 'O+', '500.00', 3, 4151458),
(10009, 'A+', '500.00', 5, 4151459);

-- --------------------------------------------------------

--
-- Table structure for table `breceipt`
--

CREATE TABLE `breceipt` (
  `Buyers_ID` int(7) NOT NULL,
  `Order_ID` int(7) NOT NULL,
  `Order_date` date NOT NULL,
  `Blood_Type` varchar(3) NOT NULL,
  `R_Quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breceipt`
--

INSERT INTO `breceipt` (`Buyers_ID`, `Order_ID`, `Order_date`, `Blood_Type`, `R_Quantity`) VALUES
(2190001, 1518001, '0000-00-00', 'B+', 3),
(2190002, 1518003, '0000-00-00', 'O+', 2),
(2190003, 1518002, '0000-00-00', 'A+', 3),
(2190004, 1518005, '0000-00-00', 'O-', 4),
(2190005, 1518003, '0000-00-00', 'O+', 3),
(2190006, 1518003, '0000-00-00', 'O+', 2),
(2190007, 1518007, '0000-00-00', 'O+', 3),
(2190001, 1518001, '0000-00-00', 'B+', 3),
(2190002, 1518003, '0000-00-00', 'O+', 2),
(2190003, 1518002, '0000-00-00', 'A+', 3),
(2190004, 1518005, '0000-00-00', 'O-', 4),
(2190005, 1518003, '0000-00-00', 'O+', 3),
(2190006, 1518003, '0000-00-00', 'O+', 2),
(2190007, 1518007, '0000-00-00', 'O+', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `Donar_ID` int(7) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Blood_Type` varchar(3) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(6) NOT NULL,
  `Last_Donate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Buyers_ID` int(7) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `Address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`Buyers_ID`, `Name`, `Branch`, `Phone`, `Address`) VALUES
(2138001, 'Ad-Din Women\'s Medic', 'Mogbazar', '02-9353391', '2 Bara Maghbazar, Ou'),
(2138002, 'Holy Family Red Cres', 'Eskaton', '02-48311721', '1 Eskaton Garden Rd,'),
(2138003, 'Rushmono Specialized', 'Mogbazar', '01918-378372', 'Mogbazar Plaza, 209 '),
(2138004, 'S.P.R.C & Neurology ', 'Eskaton', '02-9339089', '135 New Eskaton Road'),
(2138005, 'Monowara Hospital', 'Siddeswari', ' 02-48318135', '54 Siddheswari Rd, D');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `Buyers_ID` int(7) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Blood_Type` varchar(3) NOT NULL,
  `Phone` int(13) NOT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodrepository`
--
ALTER TABLE `bloodrepository`
  ADD UNIQUE KEY `B_Bag_ID` (`B_Bag_ID`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD UNIQUE KEY `Buyers_ID` (`Buyers_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
