-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 02:13 AM
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
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `USER_ID` int(7) NOT NULL,
  `F_NAME` varchar(20) NOT NULL,
  `L_NAME` varchar(20) NOT NULL,
  `BLOOD_TYPE` varchar(5) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `ADDRESS` varchar(25) NOT NULL,
  `NUMBER_OF_DONATION` int(11) DEFAULT NULL,
  `AVAILABILIT` varchar(100) NOT NULL,
  `ABOUT` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(5) NOT NULL,
  `USER_ID` int(7) NOT NULL,
  `EMAIL` varchar(10) NOT NULL,
  `PASSWORD` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `BLOOD_TYPE` varchar(5) NOT NULL,
  `STATE` varchar(10) NOT NULL,
  `POST_ID` int(7) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `LOCATION` varchar(255) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `URGENCY` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`,`USER_ID`,`PASSWORD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
