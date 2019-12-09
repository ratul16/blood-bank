-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 11:32 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `uId` int(7) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`uId`, `fname`, `lname`, `age`, `sex`, `blood_group`, `phone`, `dob`, `city`, `state`, `about`) VALUES
(1, 'Hasibul Alam', 'Ratul', 25, 'Male', 'O-', 1730482775, '1994-09-16', 'Dhaka', 'Yes', 'Calm');

--
-- Triggers `donor`
--
DELIMITER $$
CREATE TRIGGER `donor_backup` BEFORE INSERT ON `donor` FOR EACH ROW INSERT INTO donor_backup VALUES (NEW.uId,NEW.fname,NEW.lname,NEW.age,NEW.sex,NEW.blood_group,NEW.phone,NEW.dob,NEW.city,NEW.state,NEW.about)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `donor_delete` BEFORE DELETE ON `donor` FOR EACH ROW BEGIN
INSERT INTO donor_delete 
VALUES (old.uId,old.fname,old.lname,old.age,old.sex,old.blood_group,old.phone,old.dob,old.city,old.state,old.about);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `uId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
