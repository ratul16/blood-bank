-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Nov 24, 2019 at 07:03 AM
=======
-- Generation Time: Nov 24, 2019 at 06:45 AM
>>>>>>> 0b4504590ac6765974f821a31ec91cd33dfc714b
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
<<<<<<< HEAD

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Buyers_ID` int(7) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Phone` int(13) NOT NULL,
  `Address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
=======
>>>>>>> 0b4504590ac6765974f821a31ec91cd33dfc714b

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