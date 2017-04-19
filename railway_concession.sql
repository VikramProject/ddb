-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2017 at 03:17 PM
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
(1, 2014130047, 'Palasdari ', 'First', 'Monthly', '2017-04-06', '2017-04-29', 'requested'),
(2, 2014130048, 'Mira Rd ', 'First', 'Monthly', '1996-04-09', '2017-04-28', 'requested'),
(3, 2014130049, 'Goregaon ', 'Second', 'Quarterly', '2017-04-05', '2017-06-28', 'requested'),
(4, 2014130050, 'Kandivali ', 'Second', 'Quarterly', '2017-04-05', '2017-06-28', 'requested'),
(5, 2014130051, 'Borivali ', NULL, NULL, NULL, '0000-00-00', 'unlocked'),
(6, 2014130052, 'Vile Parle ', NULL, NULL, NULL, '0000-00-00', 'unlocked'),
(7, 2014130046, 'Kandivali ', 'Second', 'Monthly', '2017-04-05', '2017-04-28', 'requested');

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
  `Category` varchar(8) NOT NULL,
  `Period` varchar(15) NOT NULL,
  `From_stn` varchar(30) NOT NULL,
  `To_stn` varchar(30) NOT NULL DEFAULT 'Andheri',
  `Class` varchar(5) NOT NULL,
  `Issued_date` date NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_dtb`
--

INSERT INTO `report_dtb` (`Id`, `UID`, `Sr_no`, `Name`, `Age`, `Sex`, `Address`, `Category`, `Period`, `From_stn`, `To_stn`, `Class`, `Issued_date`, `DOB`) VALUES
(1, 2014130047, 1234566, 'Siddhey Sankhe', 'Y: 20  M: 7', 'M', 'B-201, Virar(W)', '', 'Monthly', 'Virar ', 'Andheri', 'First', '2017-04-06', '1996-08-27'),
(2, 2014130048, 12345, 'Zain Ahmed Sayed', 'Y: 20  M: 3', 'M', 'A-603, Beverly Park, Mira rd', '', 'Monthly', 'Mira Rd ', 'Andheri', 'First', '2017-04-05', '1996-12-12'),
(3, 2014130049, 12349, 'Harsh Vora', 'Y: 20  M: 3', 'M', 'A-12, Goregaon', '', 'Quarterly', 'Goregaon ', 'Andheri', 'Secon', '2017-04-05', '1996-03-16'),
(4, 2014130050, 123456, 'Rohan Sheth', 'Y: 20  M: 6', 'M', 'D-908, Kandivali', '', 'Quarterly', 'Kandivali ', 'Andheri', 'Secon', '2017-04-05', '1996-09-15'),
(5, 2014130048, 12346, 'Zain Ahmed Sayed', 'Y: 20  M: 3', 'M', 'A-603, Beverly Park, Mira rd', '', 'Monthly', 'Mira Rd ', 'Andheri', 'First', '2017-04-05', '1996-12-12'),
(6, 2014130049, 789456, 'Harsh Vora', 'Y: 20  M: 3', 'M', 'A-12, Goregaon', '', 'Quarterly', 'Goregaon ', 'Andheri', 'Secon', '2017-04-05', '1996-03-16'),
(7, 2014130050, 79852, 'Rohan Sheth', 'Y: 20  M: 3', 'M', 'D-908, Kandivali', '', 'Quarterly', 'Kandivali ', 'Andheri', 'Secon', '2017-04-05', '1996-09-15'),
(8, 2014130046, 582147, 'Rohan Sheth', 'Y: 20  M: 3', 'M', 'D201, Kandivali(w)', '', 'Monthly', 'Kandivali ', 'Andheri', 'Secon', '2017-04-05', '1996-04-15'),
(9, 2014130047, 963258, 'Siddhey Sankhe', 'Y: 20  M: 3', 'M', 'B-201, Virar(W)', '', 'Monthly', 'Virar ', 'Andheri', 'First', '2017-04-06', '1996-08-27'),
(10, 2014130048, 83, 'Zain Ahmed Sayed', 'Y: 20  M: 3', 'M', 'A-603, Beverly Park, Mira rd', '', 'Monthly', 'Mira Rd ', 'Andheri', 'First', '2017-04-05', '1996-12-12'),
(11, 2014130047, 84, 'Siddhey Sankhe', 'Y: 20  M: 3', 'M', 'B-201, Virar(W)', '', 'Monthly', 'Virar ', 'Andheri', 'First', '2017-04-06', '1996-08-27'),
(12, 2014130048, 85, 'Zain Ahmed Sayed', 'Y: 20  M: 3', 'M', 'A-603, Beverly Park, Mira rd', '', 'Monthly', 'Mira Rd ', 'Andheri', 'First', '2017-04-05', '1996-12-12'),
(13, 2014130049, 86, 'Harsh Vora', 'Y: 20  M: 3', 'M', 'A-12, Goregaon', '', 'Quarterly', 'Goregaon ', 'Andheri', 'Secon', '2017-04-05', '1996-03-16'),
(14, 2014130050, 87, 'Rohan Sheth', 'Y: 20  M: 3', 'M', 'D-908, Kandivali', '', 'Quarterly', 'Kandivali ', 'Andheri', 'Secon', '2017-04-05', '1996-09-15'),
(15, 2014130046, 88, 'Rohan Sheth', 'Y: 20  M: 3', 'M', 'D201, Kandivali(w)', '', 'Monthly', 'Kandivali ', 'Andheri', 'Secon', '2017-04-05', '1996-04-15'),
(16, 2014130047, 89, 'Siddhey Sankhe', 'Y: 20  M: 3', 'M', 'B-201, Virar(W)', '', 'Monthly', 'Virar ', 'Andheri', 'First', '2017-04-06', '1996-08-27'),
(17, 2014130047, 123478, 'Siddhey Sankhe', 'Y: 20  M: 6', 'M', 'B-201, Virar(W)', 'Open', 'Monthly', 'Virar ', 'Andheri', 'First', '2017-04-06', '1996-08-27'),
(18, 2014130047, 123479, 'Siddhey Sankhe', 'Y: 20  M: 3', 'M', 'B-201, Virar(W)', 'Open', 'Monthly', 'Virar ', 'Andheri', 'First', '2017-04-06', '1996-08-27'),
(19, 2014130048, 123480, 'Zain Ahmed Sayed', 'Y: 20  M: 3', 'M', 'A-603, Beverly Park, Mira rd', 'Open', 'Monthly', 'Mira Rd ', 'Andheri', 'First', '2017-04-05', '1996-12-12'),
(20, 2014130050, 123499, 'Rohan Sheth', 'Y: 20  M: 6', 'M', 'D-908, Kandivali', '', 'Quarterly', 'Kandivali ', 'Andheri', 'Secon', '2017-04-05', '1996-09-15'),
(21, 2014130048, 1234500, 'Zain Ahmed Sayed', 'Y: 20  M: 3', 'M', 'A-603, Beverly Park, Mira rd', 'Open', 'Monthly', 'Mira Rd ', 'Andheri', 'First', '2017-04-05', '1996-12-12'),
(22, 2014130049, 1237500, 'Harsh Vora', 'Y: 21  M: 0', 'M', 'A-12, Goregaon', 'SC/ST', 'Quarterly', 'Goregaon ', 'Andheri', 'Secon', '2017-04-05', '1996-03-16'),
(23, 2014130047, 1239500, 'Siddhey Sankhe', 'Y: 20  M: 7', 'M', 'B-201, Virar(W)', 'Open', 'Monthly', 'Virar ', 'Andheri', 'First', '2017-04-06', '1996-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `serial_no_storage`
--

CREATE TABLE `serial_no_storage` (
  `id` int(1) NOT NULL DEFAULT '1',
  `available` int(20) DEFAULT NULL,
  `last` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serial_no_storage`
--

INSERT INTO `serial_no_storage` (`id`, `available`, `last`) VALUES
(1, 123741, 123750);

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
(125, 'Vashi '),
(126,'Ram MANDIR');

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
  `DOB` date NOT NULL,
  `Category` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `UID`, `Password`, `Name`, `Email`, `Sex`, `Address`, `DOB`, `Category`) VALUES
(1, 2014130999, '$2y$12$hRUw56yGClBiePQy5D9lz.5rycKXrrDP7f7JlzUcjFVdJ6sRrw...', 'Admin', 'admin@gmail.com', NULL, NULL, '0000-00-00', ''),
(16, 2014130047, '$2y$12$O81HztJbN7iGE1/1qXeZ4eYDC2IOV/kXduN8tOvjdTEljDznUowWy', 'Siddhey Sankhe', 'siddhey@gmail.com', 'M', 'B-201, Virar(W)', '1996-08-27', 'Open'),
(17, 2014130048, '$2y$12$VERIYtTnNjwP9eS.5ISYquEg0sy/o4Myw.Sr.MKekvquT12oAPHDK', 'Zain Ahmed Sayed', 'zainahmeds123@gmail.com', 'M', 'A-603, Beverly Park, Mira rd', '1996-12-12', 'Open'),
(18, 2014130049, '$2y$12$rJswhbOffPrvlgpHOM8cOe9disLFZY83M5i3h7jFsWSRT32zhmjP.', 'Harsh Vora', 'harsh@gmail.com', 'M', 'A-12, Goregaon', '1996-03-16', 'SC/ST'),
(19, 2014130050, '$2y$12$III0FGnEv4Ecn4A4D4zx2.rjv3wPfH0ey5gwGnBC56SMs7YTP/Bq.', 'Rohan Sheth', 'rohansheth@gmail.com', 'M', 'D-908, Kandivali', '1996-09-15', ''),
(20, 2014130051, '$2y$12$dwkydjrFqHqh/6fPt213Le.pcVRfZfYs1TytAABSD66L5hmXTk88e', 'Nishanth Uchil', 'uchil@gmail.com', 'M', 'D-908, Kandivali', '1996-08-05', ''),
(21, 2014130052, '$2y$12$s.oiUMr5B.rKRwNIwAKZwO9UtPDOwVD5lOxOCkEkp1U9FIFQIpO0W', 'Darshan Shah', 'dvr@gmail.com', 'M', 'A-13, Vile Parle', '1996-09-05', ''),
(22, 2014130046, '$2y$12$DM1gljylctEiu49xz4pj.uv2g3yD3PiVH1/rTehxwZ1wBWW94YsJq', 'Rohan Sheth', 'rohansheth@gmail.com', 'M', 'D201, Kandivali(w)', '1996-04-15', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `conc_dtb`
--
ALTER TABLE `conc_dtb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `report_dtb`
--
ALTER TABLE `report_dtb`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
