-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 10:04 AM
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
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `uId` int(7) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`uId`, `fname`, `lname`, `age`, `sex`, `blood_group`, `phone`, `dob`, `city`, `state`, `about`) VALUES
(1, 'Hasibul Alam', 'Ratul', 25, 'Male', 'O-', '01730482775', '1994-09-16', 'Dhaka', 'Yes', 'Calm'),
(2, 'Ishrat', 'Diya', 24, 'Female', 'B+', '01686660052', '1995-04-16', 'Dhaka', 'No', 'Keep calm and donate blood'),
(3, 'Ramiza', 'Maliha', 24, 'Female', 'O+', '01837542987', '1996-10-14', 'Chittagong', 'Yes', 'Carpe Diem!'),
(4, 'Sadia', 'Sheikh', 23, 'Female', 'A+', '01554876254', '1997-06-14', 'Dhaka', 'No', 'Need blood? contact me'),
(5, 'Mahira', 'Jalisha', 22, 'Female', 'O+', '01843927943', '1998-02-28', 'Dhaka', 'Yes', 'wonderer who is Wondering about the wondering world'),
(6, 'Nahid', 'Ontu', 24, 'Male', 'B+', '01676800456', '1996-06-25', 'Dhaka', 'Yes', 'Life has so many stories to tell'),
(7, 'Faria', 'Islam', 24, 'Female', 'A+', '01554697826', '1995-09-22', 'Khulna', 'No', 'No Comments'),
(8, 'Tahmid', 'Abrar', 26, 'Male', 'AB+', '01478596235', '1993-12-06', 'Rajshahi', 'No', 'I had a dream');

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

-- --------------------------------------------------------

--
-- Table structure for table `donor_backup`
--

CREATE TABLE `donor_backup` (
  `uId` int(7) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_backup`
--

INSERT INTO `donor_backup` (`uId`, `fname`, `lname`, `age`, `sex`, `blood_group`, `phone`, `dob`, `city`, `state`, `about`) VALUES
(2, 'Ishrat', 'Diya', 24, 'Female', 'B+', '1686660052', '0000-00-00', 'Dhaka', 'No', 'Keep calm and donate blood'),
(3, 'Ramiza', 'Maliha', 24, 'Female', 'O+', '1837542987', '0000-00-00', 'Chittagong', 'Yes', 'Carpe Diem!'),
(4, 'Sadia', 'Sheikh', 23, 'Female', 'A+', '1554876254', '0000-00-00', 'Dhaka', 'No', 'Need blood? contact me'),
(5, 'Mahira', 'Jalisha', 22, 'Female', 'O+', '1843927943', '0000-00-00', 'Dhaka', 'Yes', 'wonderer who is Wondering about the wondering world'),
(6, 'Nahid', 'Ontu', 24, 'Male', 'B+', '1676800456', '0000-00-00', 'Dhaka', 'No', 'Life has so many stories to tell'),
(7, 'Faria', 'Islam', 24, 'Female', 'A+', '1554697826', '0000-00-00', 'Kushtia', 'No', 'No Comments'),
(8, 'Tahmid', 'Abrar', 26, 'Male', 'AB+', '1478596235', '0000-00-00', 'Joypurhat', 'No', 'I had a dream');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(7) NOT NULL,
  `uId` int(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `uId`, `email`, `password`) VALUES
(1, 1, 'hasib.ratul@nsu.edu', 'Calmhasib25'),
(2, 2, 'ishrat.diya94@nsu.edu', '#moradiya'),
(3, 3, 'ramiza.malihahehehehe@nsu.edu', '#ramizoro1423'),
(4, 4, 'sadia.sheikh@nsu.edu', 'armin7'),
(5, 5, 'mahira.jalishalol@nsu.edu', 'BakaNeko'),
(6, 6, 'nahid.ontu299nsu.edu', 'barishaillanahid'),
(7, 7, 'faria.punni@gmail.com', 'punni94'),
(8, 8, 'tahmid_tousif@gmail.com', 'fisout');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `P_id` int(5) NOT NULL,
  `Blood_G` varchar(20) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `urgency` varchar(100) NOT NULL,
  `S_Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`P_id`, `Blood_G`, `Name`, `Status`, `phone`, `city`, `urgency`, `S_Remark`) VALUES
(1, 'O+', 'Bomkesh Bokshi', 'Needed', '01975684264', 'Dhaka', 'ASAP', 'Needs in 2 days.'),
(2, 'A+', 'Robert Langdon', 'Needed', '01574598354', 'Dhaka', 'NO', 'Needed for an open heart surgery on. Due: 01/01/2020'),
(3, 'O-', 'Anondo Kor', 'Found', '01235489753', 'Khulna', 'NO', 'The patient is now ok.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`uId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `email` (`email`,`password`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`P_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `uId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `P_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
