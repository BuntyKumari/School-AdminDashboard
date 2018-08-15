-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 10:42 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `ClassName` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`ClassName`, `Description`) VALUES
('1', 'std 1'),
('2', 'std 2'),
('3', 'std 3'),
('4', 'std 4'),
('LKG', 'Lower Kid Garden'),
('UKG', 'Upper Kid Garden');

-- --------------------------------------------------------

--
-- Table structure for table `class1`
--

CREATE TABLE `class1` (
  `class` varchar(10) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `doa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class1`
--

INSERT INTO `class1` (`class`, `id`, `name`, `gender`, `dob`, `fname`, `mname`, `address`, `state`, `pin`, `country`, `phone`, `email`, `doa`) VALUES
('1', 1, 'Roshni', 'female', '2015-01-05', 'Ravi', 'Radhika Gupta', 'HSR Layout', 'Karnataka', 560102, 'India', '7411430674', 'roshni@gmail.com', '05-08-2018'),
('1', 2, 'Neha sharma', 'female', '2016-02-03', 'Naveen Sharma', 'Navya sharma', 'Uttarakhand                    		\r\n                    	', 'Karnataka', 560102, 'India', '7411430674', 'neha@gmail.com', '06-08-2018');

-- --------------------------------------------------------

--
-- Table structure for table `class2`
--

CREATE TABLE `class2` (
  `class` varchar(20) NOT NULL,
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` int(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `doa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class2`
--

INSERT INTO `class2` (`class`, `id`, `name`, `gender`, `dob`, `fname`, `mname`, `address`, `state`, `pin`, `country`, `phone`, `email`, `doa`) VALUES
('2', 1, 'Ranjna', 'female', '2018', 'Rishikesh Gupta', 'Janki Gupta', 'Bomanhalli', 'Karnataka', 560102, 'India', '2147483647', 'ranjna@gmail.com', '05-08-2018');

-- --------------------------------------------------------

--
-- Table structure for table `class3`
--

CREATE TABLE `class3` (
  `class` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` int(10) NOT NULL,
  `county` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `doa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class3`
--

INSERT INTO `class3` (`class`, `id`, `name`, `gender`, `dob`, `fname`, `mname`, `address`, `state`, `pin`, `county`, `phone`, `email`, `doa`) VALUES
('3', 1, 'Chikoo', 'male', '2013-09-23', 'Krishna Yogi', 'Sita Yogi', 'Patratu                  		\r\n                    	', 'Karnataka', 560102, 'India', '9881430674', 'chikoo@gmail.com', '05-08-2018'),
('3', 2, 'Kasis Raj', 'female', '2014-06-18', 'Kunal Raj', 'Rajshree Sharma', 'Kundanhalli                    		\r\n               ', 'Karnataka', 560102, 'India', '7410929393', 'kasis@gmail.com', '05-08-2018');

-- --------------------------------------------------------

--
-- Table structure for table `class4`
--

CREATE TABLE `class4` (
  `class` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` int(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `doa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class4`
--

INSERT INTO `class4` (`class`, `id`, `name`, `gender`, `dob`, `fname`, `mname`, `address`, `state`, `pin`, `country`, `phone`, `email`, `doa`) VALUES
('4', 1, 'Hanshika Rana', 'female', '2008-05-19', 'Gopal Rana', 'Sweta Rana', 'Gurgaon                  		\r\n                    	', 'Karnataka', 899007, 'India', '8728230674', 'hanshika@gmail.com', '05-08-2018');

-- --------------------------------------------------------

--
-- Table structure for table `lkg`
--

CREATE TABLE `lkg` (
  `classs` varchar(50) NOT NULL,
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(40) NOT NULL,
  `pin` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `doa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lkg`
--

INSERT INTO `lkg` (`classs`, `id`, `name`, `gender`, `dob`, `fname`, `mname`, `address`, `state`, `pin`, `country`, `phone`, `email`, `doa`) VALUES
('LKG', 1, 'Chiky Kumari', 'female', '2020-11-27', 'Chikoo', 'Dolly', 'Tarisilwai', 'Jharkhand', 835103, 'India', '7411430674', 'chiky@gmail.com', '05-08-2018'),
('LKG', 2, 'Manshi', 'female', '2017-10-25', 'Yudhister Rana', 'Anshika Rana', 'Marathalli                    		\r\n                ', 'Karnataka', 560102, 'India', '9839930674', 'manshi@gmail.com', '05-08-2018'),
('LKG', 3, 'Manshi', 'female', '2017-10-25', 'Yudhister Rana', 'Anshika Rana', 'Marathalli                    		\r\n                ', 'Karnataka', 560102, 'India', '9839930674', 'manshi@gmail.com', '05-08-2018'),
('4', 5, 'Roshan Agrwaal', 'male', '2008-01-01', 'Surendra Agrwaal', 'Monorama Agrwaal', 'Harmu, Ranchi', 'Jharkhand', 835103, 'India', '7411489222', 'roshan@gmail.com', '05-08-2018'),
('4', 6, 'Roshan Agrwaal', 'male', '2008-01-01', 'Surendra Agrwaal', 'Monorama Agrwaal', 'Harmu, Ranchi', 'Jharkhand', 835103, 'India', '7411489222', 'roshan@gmail.com', '05-08-2018');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('gloify', 'gloify');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ukg`
--

CREATE TABLE `ukg` (
  `class` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `doa` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukg`
--

INSERT INTO `ukg` (`class`, `id`, `name`, `gender`, `fname`, `mname`, `address`, `state`, `pin`, `country`, `phone`, `email`, `doa`, `dob`) VALUES
('UKG', 1, 'Janvi', 'female', '2016-06-22', 'Saurya Pandey', 'Soni Pandey', 'Aurangabad          ', 'Jharkhand', '835103', 'India', '9820202074', 'janvi@gmail.com', '05-08-2018'),
('UKG', 2, 'Tammana Singh', 'female', '2016-09-19', 'Harsh Singh', 'Hanshika Singh', 'HSR Layout          ', 'Karnataka', '560102', 'India', '8933330674', 'tammana@gmail.com', '05-08-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ClassName`);

--
-- Indexes for table `class1`
--
ALTER TABLE `class1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class2`
--
ALTER TABLE `class2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class3`
--
ALTER TABLE `class3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class4`
--
ALTER TABLE `class4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lkg`
--
ALTER TABLE `lkg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukg`
--
ALTER TABLE `ukg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class1`
--
ALTER TABLE `class1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class2`
--
ALTER TABLE `class2`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class3`
--
ALTER TABLE `class3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class4`
--
ALTER TABLE `class4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lkg`
--
ALTER TABLE `lkg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukg`
--
ALTER TABLE `ukg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
