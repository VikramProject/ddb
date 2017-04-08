-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2017 at 12:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
  `Period` varchar(15) DEFAULT NULL,
  `Issue_date` date DEFAULT NULL,
  `Expiry_date` date NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'unlocked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conc_dtb`
--

INSERT INTO `conc_dtb` (`id`, `UID`, `Nearest_stn`, `Class`, `Period`, `Issue_date`, `Expiry_date`, `Status`) VALUES
(8, 2014130048, 'Mira Road', 'Second', 'Quarterly', '2017-04-07', '1969-12-25', 'locked'),
(9, 2014130047, 'Virar', 'first', '1', '2017-03-28', '2017-04-21', 'locked'),
(10, 2014130049, 'Virar', 'First', 'Monthly', '2017-04-05', '1969-12-25', 'locked'),
(11, 2147483647, 'Borivali ', NULL, NULL, NULL, '0000-00-00', 'unlocked'),
(12, 2014130053, 'Borivali ', 'first', '1', '2017-04-05', '2017-04-28', 'locked'),
(13, 2014130054, 'Kandivali ', 'Second', 'Quarterly', '2017-04-04', '1969-12-25', 'locked');

-- --------------------------------------------------------

--
-- Table structure for table `report_dtb`
--

CREATE TABLE `report_dtb` (
  `Id` int(10) NOT NULL,
  `UID` int(20) NOT NULL,
  `Sr_no` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `Sex` varchar(1) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Period` int(10) NOT NULL,
  `From_stn` varchar(30) NOT NULL,
  `To_stn` varchar(30) NOT NULL DEFAULT 'Andheri',
  `Class` varchar(5) NOT NULL,
  `Issued_date` date NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_dtb`
--

INSERT INTO `report_dtb` (`Id`, `UID`, `Sr_no`, `Name`, `Age`, `Sex`, `Address`, `Period`, `From_stn`, `To_stn`, `Class`, `Issued_date`, `DOB`) VALUES
(8, 2014130048, 0, 'Zain Ahmed Sayed', '0Y_0M', '', '', 1, 'Mira Road', 'Andheri', 'first', '2017-03-28', '0000-00-00'),
(11, 2014130048, 123344, 'Zain Ahmed Sayed', 'Years: 201', '', '', 1, 'Mira Road', 'Andheri', 'first', '2017-03-28', '0000-00-00'),
(15, 2014130048, 123, 'Zain Ahmed Sayed', 'Y: 2017  M', '', '', 0, 'Mira Road', 'Andheri', 'Secon', '2017-04-07', '0000-00-00'),
(16, 2014130054, 124, 'Divita Vora', 'Y: 2017  M', 'F', 'A-12, Borivali(E)', 0, 'Kandivali ', 'Andheri', 'Secon', '2017-04-04', '1996-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `station` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `station`) VALUES
(1, 'Ambernath'),
(2, 'Ambivili '),
(3, 'Asangaon'),
(4, 'Atgaon '),
(5, 'Badlapur '),
(6, 'Bhandup '),
(7, 'Bhivpuri'),
(8, 'Byculla '),
(9, 'Chinchpokli'),
(10, 'CurreyRoad '),
(11, 'Dadar'),
(12, 'Diva'),
(13, 'Dolavi'),
(14, 'Dombivili'),
(15, 'Ghatkopar'),
(16, 'Kalwa'),
(17, 'Kalyan'),
(18, 'Kanjurmarg'),
(19, 'Karjat'),
(20, 'Kasara'),
(21, 'Kelave '),
(22, 'Khadavli '),
(23, 'Khardi '),
(24, 'Khopoli '),
(25, 'Kopar '),
(26, 'Kurla '),
(27, 'Lowjee '),
(28, 'Masjid '),
(29, 'Matunga '),
(30, 'Mulund '),
(31, 'Mumbai_CST '),
(32, 'Mumbra '),
(33, 'Nahur '),
(34, 'Neral '),
(35, 'Palasdari '),
(36, 'Parel '),
(37, 'Sandurst Road '),
(38, 'Shahad '),
(39, 'Shelu '),
(40, 'Sion '),
(41, 'Thakurli '),
(42, 'Thane '),
(43, 'Titwala '),
(44, 'Ulhasnagar '),
(45, 'Vangani '),
(46, 'Vasind '),
(47, 'Vidhyavihar '),
(48, 'Vikhroli '),
(49, 'Vithalwadi '),
(50, 'Andheri '),
(51, 'Bandra '),
(52, 'Bhayander '),
(53, 'Borivali '),
(54, 'Charni Rd '),
(55, 'Churchgate '),
(56, 'Dadar '),
(57, 'Dahisar '),
(58, 'Elphinstone rd '),
(59, 'Goregaon '),
(60, 'Grant Rd '),
(61, 'Jogeshwari '),
(62, 'Kandivali '),
(63, 'Khar Rd '),
(64, 'Lower Parel '),
(65, 'Mahalakshmi '),
(66, 'Mahim '),
(67, 'Malad '),
(68, 'Marine Lines '),
(69, 'Matunga Rd '),
(70, 'Mira Rd '),
(71, 'Mumbai Central '),
(72, 'Naigaon '),
(73, 'Nalla Sopara '),
(74, 'Santa Cruz '),
(75, 'Vasai Rd '),
(76, 'Vile Parle '),
(77, 'Virar '),
(78, 'Andheri '),
(79, 'Bandra '),
(80, 'Belapur CBD '),
(81, 'Chembur '),
(82, 'Chunabhatti '),
(83, 'Cotton Green '),
(84, 'Dockyard Road '),
(85, 'Govandi '),
(86, 'GTB Nagar '),
(87, 'Juinagar '),
(88, 'Khandeshwar '),
(89, 'Khar Road '),
(90, 'Kharghar '),
(91, 'Kings Circle '),
(92, 'Kurla '),
(93, 'Mahim Jn '),
(94, 'Mankhurd '),
(95, 'Mansarovar '),
(96, 'Masjid '),
(97, 'Mumbai CST '),
(98, 'Nerul '),
(99, 'Panvel '),
(100, 'Reay Road '),
(101, 'Sandhurst Road '),
(102, 'Sanpada '),
(103, 'Santacruz '),
(104, 'Seawood Darave '),
(105, 'Sewri '),
(106, 'Tilaknagar '),
(107, 'Vashi '),
(108, 'Vile Parle '),
(109, 'Wadala Rd '),
(110, 'Airoli '),
(111, 'Belapur CBD '),
(112, 'Ghansoli '),
(113, 'Juinagar '),
(114, 'Khandeshwar '),
(115, 'Kharghar '),
(116, 'Koparkhairne '),
(117, 'Manasarovar '),
(118, 'Nerul '),
(119, 'Panvel '),
(120, 'Rabale '),
(121, 'Sanpada '),
(122, 'Seawood Darave '),
(123, 'Thane '),
(124, 'Turbhe '),
(125, 'Vashi ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `UID` int(10) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `UID`, `Password`, `Name`, `Email`, `Sex`, `Address`, `DOB`) VALUES
(1, 2014130999, '$2y$12$hRUw56yGClBiePQy5D9lz.5rycKXrrDP7f7JlzUcjFVdJ6sRrw...', 'Admin', 'admin@gmail.com', NULL, NULL, '0000-00-00'),
(9, 2014130048, '$2y$12$LqTqM/MBTBApYxp5pigHA.2mCSZ65uTFHQDTAf3Jd4jNVEniDiBSy', 'Zain Ahmed Sayed', 'zainahmeds123@gmail.com', NULL, NULL, '0000-00-00'),
(10, 2014130047, '$2y$12$mSqAYOkekLzPwWncmE6I3.36I.mXdlAH51dyD4ggfv0CZTNy/VntS', 'Siddhey Sankhe', 'siddhey@gmail.com', NULL, NULL, '0000-00-00'),
(11, 2014130049, '$2y$12$4y4GVIw1212X5Rm19gGn6eZkUn5JPTqg4/82cgbIDEf5KG4n2at7m', 'Darshan Shah', 'blah@blah.com', 'M', 'blah, blah(w)', '1997-01-01'),
(12, 2147483647, '$2y$12$Y5NAEA6Ritypzn/4WtT9QuOTW7avumAUtjSF8o2yIMuPeLekca6lq', 'Aashvi Vora', 'aashvi@gmail.com', 'f', 'A-12, Borivali(E)', '1996-03-15'),
(13, 2014130053, '$2y$12$U5SH0bliTrutLt4T2fOz1On8Qmw0c/WmkAF5DHqsUWAxc340IRFa6', 'Aashvi Vora', 'aashvi@gmail.com', 'f', 'A-12, Borivali(E)', '1996-12-15'),
(14, 2014130054, '$2y$12$riJyGoWZN5m6Z1aQlCIrwucJq2OXJ9SfmbhKxBYTFBjKxiJK2bdga', 'Divita Vora', 'divita@gmail.com', 'F', 'A-12, Borivali(E)', '1996-09-17');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `delete_of_std` (`UID`);

--
-- Indexes for table `report_dtb`
--
ALTER TABLE `report_dtb`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Sr_no` (`Sr_no`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UID` (`UID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `report_dtb`
--
ALTER TABLE `report_dtb`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `conc_dtb`
--
ALTER TABLE `conc_dtb`
  ADD CONSTRAINT `delete_of_std` FOREIGN KEY (`UID`) REFERENCES `student` (`UID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
