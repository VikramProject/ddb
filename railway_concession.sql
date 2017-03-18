-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 05:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway concession`
--

-- --------------------------------------------------------

--
-- Table structure for table `clg_dtb`
--

CREATE TABLE `clg_dtb` (
  `id` int(11) NOT NULL,
  `UID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_dtb`
--

INSERT INTO `clg_dtb` (`id`, `UID`, `Name`, `DOB`, `Address`, `Phone`, `Class`, `Age`) VALUES
(1, 2014130047, 'Siddhey Sankhe', '1996-08-27', 'C/101,Yashwant Kasturi Virar(W)', 814928350, 'Computer', 20),
(2, 2014130048, 'Zain Ahmed Sayed', '1996-12-12', 'A-142, Mira Road', 9876543210, 'Computer', 21),
(3, 2014130049, 'Darshan Shah', '1996-05-06', 'B/12, Vile Parle', 8794569312, 'Computer', 21),
(4, 2014130050, 'Niyam Shah', '1996-08-12', 'A-903, Sion', 7845123690, 'Computer', 21),
(5, 2014130051, 'Yash Shah', '1996-02-16', 'D-212, Kandivali', 9856321470, 'Computer', 21),
(6, 2014130052, 'Rohan  Sheth', '1996-11-02', 'F-123, Kandivali', 5847691230, 'Computer', 21),
(7, 2014130053, 'Nishanth Uchil', '1996-08-07', 'A-304, Borivali', 7485961230, 'Computer', 21),
(8, 2014130054, 'Harsh Vora', '1996-12-24', '12, Goregaon', 8529637410, 'Computer', 21);

-- --------------------------------------------------------

--
-- Table structure for table `conc_dtb`
--

CREATE TABLE `conc_dtb` (
  `id` int(11) NOT NULL,
  `UID` int(50) NOT NULL,
  `Nearest_stn` varchar(50) NOT NULL,
  `Class` varchar(10) DEFAULT NULL,
  `Period` int(10) DEFAULT NULL,
  `Issue_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `UID` int(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clg_dtb`
--
ALTER TABLE `clg_dtb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UID` (`UID`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `conc_dtb`
--
ALTER TABLE `conc_dtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clg_dtb`
--
ALTER TABLE `clg_dtb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `conc_dtb`
--
ALTER TABLE `conc_dtb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
