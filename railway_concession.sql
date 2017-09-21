-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2017 at 09:40 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
(1, 145800, 145850);

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
(70, 'Mira Road '),
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
  `Address` varchar(256) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Category` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `UID`, `Password`, `Name`, `Email`, `Sex`, `Address`, `DOB`, `Category`) VALUES
(1, 2014130999, '$2a$04$ay/rkx9MQE3M7cn3.JwPL.H/NEbuRS8dwAoxGVeMBHc0Js4sN1hO2', 'Admin', 'admin@gmail.com', NULL, NULL, '0000-00-00', ''),
(385, 2014130001, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sanket Agrawal', 'sanket.navin@gmail.com', 'M', 'A4/303, Lokyamuna, Military Rd., Marol, Andheri (E), Mum-400059', '1996-08-28', 'OPEN'),
(386, 2014130002, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Yash Bafna', 'ybafna007@gmail.com', 'M', 'G/08, Addle Apt., Annie Addle Chsl, Geeta Nagar, Fatak Road, Bhayander(W), Thane-401101', '1996-12-18', 'OPEN'),
(387, 2014130003, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Siddharth Bagdi', 'sid.bagadi@yahoo.com', 'M', '301, A-Wing, Spring Leaf-5, Lokhandwala Township, Akurli Road, Kandivali (E), Mum-400101', '1996-12-06', 'OPEN'),
(388, 2014130004, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Kalyani Bhade', 'bhade.kalyani16@gmail.com', 'F', 'F-503, Krishna Gokul Garden, Thakur Complex, Kandivali (E), Mum-400101', '1996-09-16', 'NT2'),
(389, 2014130005, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rutuja Bhandare', 'rutujabhandare61@gmail.com', 'F', 'C-1/502,Progressive Bldg., Dattaram Lad Marg, Chinchpokli (E), Mum-400012', '1996-01-09', 'SBC'),
(390, 2014130006, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Jatin Bindal', 'jatinbindal023@gmail.com', 'M', 'B/208, Mehta Patel Shopping Centre, Modi Patel Road, Bhyander (W), Thane-401101', '1996-12-04', 'OPEN'),
(391, 2014130007, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Viplav Chaudhari', 'pramod.choudhari2657@gmail.com', 'M', '102, Darshan Apt., Mahatma Phule Road., Bhoirwadi, Dombivli (W)', '1997-01-04', 'OBC'),
(392, 2014130008, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Himanshu Chavan', 'chimanshu363@gmail.com', 'M', 'C-302, Shri Ganadhish Apt., Near Tele Exchg., Ganesh Temple Road, Manda Titwala (E), Tal-Kalyan, Dist.-Thane-421605', '1997-04-16', 'VJ'),
(393, 2014130009, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aditya Chichani', 'adityac9255@gmail.com', 'M', 'B-803, Osho Dhara Residency,Nr. Shani Mandir, Godrej Hill, Khadakpada, Kalyan (W) - 421301', '0000-00-00', 'OPEN'),
(394, 2014130010, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aditya Das', 'rajivdas1975@yahoo.co.in', 'M', '1801, E-Wing, Phase-I, Lake Florence, Lake Homes, Powai, Mum-400076', '1996-10-05', 'OPEN'),
(395, 2014130011, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Debjyoti Das', 'dasded@yahoo.com', 'M', 'D-902, Ekta Meadows, Siddharth Ngr., Opp-Western Express Highway, Borivali(E), Mum-400066', '0000-00-00', 'OPEN'),
(396, 2014130012, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Jainil Gada', 'jainilgada@gmail.com', 'M', 'A-201, Navsaidham Apt., Behind Naresh Steel Centre, S.V.Road, Navghar Rd., Bhyander (E), Mum-401105', '1996-02-07', 'OPEN'),
(397, 2014130013, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Amit Gaikwad', '1031996@gmail.com', 'M', '7, York Terrace, Cover Village, Wanwadi, Pune-411040', '1996-10-03', 'SC'),
(398, 2014130014, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Divye Gala', 'divyegala@gmail.com', 'M', 'D-702, Manish Ngr., Four Bunglows, Andheri (W), Mum-400053', '0000-00-00', 'OPEN'),
(399, 2014130016, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Abhishek Gawali', 'abhishek.gawali96@gmail.com', 'M', '2nd Shrikant Palekar, Cross Road, Bldg.No.20, Rm.No.12, Chira Bazar, Mum-400002', '1996-11-12', 'NT1'),
(400, 2014130017, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shantanu Gawde', 'shantanv.gawade@gmail.com', 'M', '303, Pooja Chs, Hoechst Quarters, Amar Nagar, Mulund(W)', '0000-00-00', 'OPEN'),
(401, 2014130018, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Juzer Golwala', 'john-capricorn19@hotmail.com', 'M', '54/56, Ravdat Tahera Street, Saria Bldg., 2nd Flr., Rm No.718, Near J.J.Hosp., Mum-400003', '0000-00-00', 'OPEN'),
(402, 2014130019, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mithil Gotarne', 'mithilgotarne@gmail.com', 'M', '302, Anand Smruti, Opp. Dharmaveer Apt., Dhobi Ali, Tembhi Naka, Thane (W)-400601', '0000-00-00', 'OBC'),
(403, 2014130020, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vedanti Gulalkari', 'paraggulakari@gmail.com', 'F', '302, Dwarika Palace, Near Ima Hall, Mangilal Plot, Camp, Amravati-444602', '1996-09-10', 'OBC'),
(404, 2014130021, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Tejas Gundecha', 'tejasjgundecha@gmail.com', 'M', 'Santaji Ngr., Behind Marathi School, Beed Road, Jamkhed-413201', '0000-00-00', 'OPEN'),
(405, 2014130022, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Nidhi Harwani', 'nidzz.h@gmail.com', 'F', 'Shri Vyankatesh Hosp., Daroga Plot, Behind Nanda Market, Rajapeth, Amravati-444606', '0000-00-00', 'OPEN'),
(406, 2014130023, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Anish Hedaoo', 'anishhedaoo@gmail.com', 'M', 'Arohi ,52-E1, Mata Mandir Rd., Gokulpeth, Nagpur-440010', '0000-00-00', 'SBC'),
(407, 2014130064, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Harsh Jadhav', 'sharadjadhav@akersolutions.com', 'M', 'Blue Hevan, Jn4-11-4, Sector-10, Vashi, Navi Mumbai-400703', '0000-00-00', 'SC'),
(408, 2014130024, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Dheeraj Jha', 'dhirajjha71@yahoo.in', 'M', 'Pramod Ragho Patil Chawl, Laxmi Nivas, 1st Floor, 2nd Room, Plot No.168, Vashi', '0000-00-00', 'OPEN'),
(409, 2014130025, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shaival Kacheria', 'shaiwal_kucheria@hotmail.com', 'M', 'B/1, Dhiraj Apts., 11 Pedder Road, Mum-400026', '1996-11-05', 'OPEN'),
(410, 2014130026, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Omkar Kadu', 'ajaykadu20@yahoo.co.in', 'M', '4-C, Kamet, Anushaktinagar, Mumbai-400094', '0000-00-00', 'OBC'),
(411, 2014130027, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Akshay Kale', 'akshaykale496@gmail.com', 'M', 'At-Sapane Khurd, Po.Varale, Tal.Wada, Dist-Thane-421303', '0000-00-00', 'ST'),
(412, 2014130028, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Anushka Kanawade', 'anushkakanawade@gmail.com', 'F', '503, Gurukrupa Chs., Near Link View Hotel, New Link Road, Borivali (W), Mum-091', '0000-00-00', 'OPEN'),
(413, 2014130029, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Kanishk Kaul', 'kaulkanishk@yahoo.co.in', 'M', 'Bldg. No.63, Flat No.1402, Sapphire Heights, Lokhandwala Complex, Kandivali (E), Mum-400101', '1996-08-12', 'OPEN'),
(414, 2014130030, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Umair Mujtaba Khan', 'Khanumair.79@gmail.com', 'M', 'Israr Ahmed Khan, Flat No.6, Hayat Pride, Altamash Colony, Jaswant Pura, Aurangabad-431001', '1997-08-04', 'OPEN'),
(415, 2014130031, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Huzaifa Kothari', 'Huzi.kothari@gmail.com', 'M', 'C-406, Maimoon Manzil, Saifee Park, Marol Church Road, Andheri (E), Mum-400059', '1996-10-03', 'OPEN'),
(416, 2014130032, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mehul Kothari', 'Mehulkothari1996@gmail.com', 'M', '501/A, Shankeshwar Tower, Lovelane, Byculla, Mum-10', '1996-08-10', 'OPEN'),
(417, 2014130077, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sanjana Krishna', 'sanjanak09@gmail.com', 'F', 'D-32, Symphony C.H.S., Chandivali Farm Road, Off Saki Vihar Road, Andheri(E), Mumbai-072', '0000-00-00', 'OPEN'),
(418, 2014130033, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aditya Kuchekar', 'adityakuchekar@gmail.com', 'M', 'C/8, Mulund Swapneel Chs., Tata Colony, Mulund (E), Mum-081', '0000-00-00', 'SC'),
(419, 2014130034, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Tanisha Kulkarni', 'tanisha1196@gmail.com', 'F', 'A/11, Mandhana Mandr, 18 House Lane, Mahim (W), Mum-016', '1996-11-11', 'OPEN'),
(420, 2014130035, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shubham Mahajan', 'shubh12197@gmail.com', 'M', 'Wing-B, 1201, Mahindra Splendor, Opp. Magnet Wall, Lbs Rd., Bhandup (W)', '1997-12-01', 'OBC'),
(421, 2014130036, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pratik Mane', 'ncscmahmm@rediffmail.com', 'M', 'Behind Pilley Niwas, Infront Gharkul Super Mkt., Vikram Ngr., Latur', '1996-03-12', 'SC'),
(422, 2014130037, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Deepkumar Mehta', 'deep.mehta0174@gmail.com', 'M', '21, A.C.H Soc., Jaishree, Flat No.-3, Ground Flr., V.P.Rd., Andheri (W), Mum-400058', '0000-00-00', 'OPEN'),
(423, 2014130038, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Krish Modi', 'krishm47@gmail.com', 'M', 'Flat No.26, 1st Flr., B-Wing, Juhu Gulmohar Soc., Near J.V.P.D Circle, Andheri (W), Mum-400049', '1996-04-10', 'OPEN'),
(424, 2012130038, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sahil Mukane', 'sahil-t9t@rocketmail.com', 'M', 'B/803, Twinkle Towers Chs, Dhokali, Thane (W), 400607', '0000-00-00', 'SC'),
(425, 2014130040, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rohit Nahata', 'rohit28.rn@gmail.com', 'M', '1101/02, Everest Heights, Lake Homes, Opp. Powai Vihar, Powai, Mum.-400076', '0000-00-00', 'OPEN'),
(426, 2014130041, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Maitri Parikh', 'maitriparikh7@gmail.com', 'F', '604/208, B-Wing, Anita Kutir, 90 Feet Rd., Ghatkopar (E), Mum-400075', '1996-07-02', 'OPEN'),
(427, 2014130042, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Niharika Parsone', '', 'F', '6/704, New Indraprastha Chs., Near Adharwad Junction, Off Mohindar Kabul Singh Road, Kalyan (W)-421301', '0000-00-00', 'OBC'),
(428, 2014130078, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sheryl Paul', 'sherylsudhakar@hotmail.com', 'F', '1501-Panch Leela Panch Srishti Complex, Powai, Mumbai-400072', '0000-00-00', 'OPEN'),
(429, 2014130044, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Prem Prabhu', 'premprabhs@gmail.com', 'M', '1, Parijatak, N.V.Nakhwa Road, Mazgaon, Mumbai-400010', '0000-00-00', 'OPEN'),
(430, 2014130045, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sagar Prabhu', 'sagarprabhu3@gmail.com', 'M', 'G-301, Panchvar Complex Chsl, B/H Mary Immaculate High School, Off L.M. Road, I.C Colony, Borivali (W), Mum-400103', '0000-00-00', 'OPEN'),
(431, 2014130046, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rucha Rangnekar', 'rpunam@gmail.com', 'F', '1007, B-Wing, Sunkersett Palace, Nana Chowk, Mumbai-400007', '0000-00-00', 'OPEN'),
(432, 2014130047, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Siddhey Sankhe', 'siddheysankhe1996@gmail.com', 'M', 'C/101, Yashwant Kasturi Co.Op.Hsg.Soc.Ltd., Near Viva College, Y.K. Ngr., , Virar (W), Vasai, Dist-Thane-401303', '0000-00-00', 'NT3'),
(433, 2014130048, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Zain Sayed', 'zainahmeds@yahoo.co.in', 'M', 'A/603, Gaurav Residency Phase-2, Beverly Park, Mira Road (E), Mum-401107', '1996-12-12', 'OPEN'),
(434, 2014130049, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Darshan Shah', 'dvrshah8@gmail.com', 'M', 'A/302, Juhu Grih Swapna, Gulmohar Cross Road No.4, Vile Parle (W), Mum-400049', '1996-08-07', 'OPEN'),
(435, 2014130050, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Niyam Shah', 'niyamshah2@gmail.com', 'M', '2/221, Suryalaya Bldg., Tamil Sangam Road, Sion (E), Mum-400022', '1996-12-11', 'OPEN'),
(436, 2014130051, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Yash Shah', 'yashdshah55@yahoo.in', 'M', 'B/304, Om Amar Deep Chs. Ltd., Sodawala Lane, Borivali (W), Mum-400092', '0000-00-00', 'OPEN'),
(437, 2014130052, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rohan Sheth', 'rohansheth17@gmail.com', 'M', 'A/202, Veera Sargam, Mahavir Ngr., Kandivali (W), Mum-400067', '0000-00-00', 'OPEN'),
(438, 2014130053, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Megha Shetty', 'maggi5430@gmail.com', 'F', '6d/204, Maitri Chs., Damodar Park, Lbs Marg, Ghatkopar (W), Mum-400086', '1996-09-10', 'OPEN'),
(439, 2014130054, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Khyati Suratwala', 'madhavis72@yahoo.co.in', 'F', '156/A, Mukundnagar, Sukhsagar Park, Opp. Daulataram Temple, Pune-411037', '0000-00-00', 'OPEN'),
(440, 2014130056, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Nishanth Uchil', 'uchilnishant@gmail.com', 'M', 'B/103, Gorai Manas Chs.Ltd., Plot No.87, Gorai-2, Borivali (W), Mum-400092', '1997-01-01', 'OPEN'),
(441, 2013130059, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sanket Uikey', 'sanketuikey1470@gmail.com', 'M', 'D-1/401, Kangra C.H.S., Lokdhara, Kalyan (East)', '1995-06-01', 'ST'),
(442, 2014130057, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mihir Varatha', 'mihir.varatha@gmail.com', 'M', 'Mhada Colony, Shivneri Soc., Plot No.118, Rm.No.D-8, Vasant Vihar, Thane (W)-400610', '1997-12-06', 'ST'),
(443, 2014130058, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Smruti Varvadekar', 'smruts1596@gmail.com', 'F', 'Manish Bldg.-1, Jeevan Chsl, Flat No.7, Bhausaheb Parab Marg, Kandarpada, Opp.Nanddham Chsl, Dahisar (W)-400068', '0000-00-00', 'OPEN'),
(444, 2014130059, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ankit Verma', 'ankitverma3103@gmail.com', 'M', '157/8, Sawant Sadan, M..N.Road, Bail Bazar, Kurla (W), Mum-400070', '0000-00-00', 'OPEN'),
(445, 2014130060, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aashvi Vora', 'aashvi1996@gmail.com', 'F', '403, Gopalpuri, S.V.Road, Daulat Ngr., Borivali (E), Mum-400066', '0000-00-00', 'OPEN'),
(446, 2014130061, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Divita Vora', 'divitavora@yahoo.in', 'F', '1, Vora Kunj, Shradhanand Road, Vile Parle (E), Mum-400057', '0000-00-00', 'OPEN'),
(447, 2014130062, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Harsh Vora', 'hvora34@gmail.com', 'M', '11/81, Motilal Nagar No.3, M.G.Road, Goregaon (W), Mum-104', '1996-06-10', 'OPEN'),
(448, 2014130063, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Gautam Worah', 'gautam_wire@yahoo.com', 'M', '1-A/004, Golders Green, Holy Cross Road, Ic Colony, Borivali (W), Mum-400103', '0000-00-00', 'OPEN'),
(449, 2015230066, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ira Durve', 'idurve@gmail.com', 'F', '5C,D Wing Siddhivinayak Tower, Narali pada, Near Runwal nagar, Thane(w), MAHARASHTRA, 400601', '0000-00-00', 'OPEN'),
(450, 2015230067, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Supriya Ghuge', 'supriyadghuge7@gmail.com', 'F', '02, ,GURUDATT CHHAYA CHS, , HIGHWAY ROAD, , NEAR - WAYALE NAGAR, OFF. - SARASWAT BANK, , KALYAN, MAHARASHTRA, 421301', '0000-00-00', 'NT3'),
(451, 2015230068, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Kalpana Jadhav', 'jadhavkalpana13@gmail.com', 'F', '29,JAI GANESH CHS LTD, V.N. PURAV MARG, RAHUL NAGAR NO-1,CHUNABHATTI, MUMBAI, MAHARASHTRA, 400022', '0000-00-00', 'OPEN'),
(452, 2015230069, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aasim Khan', 'aasimkhan30@gmail.com', 'M', '502,ASMITA PREMIUM,NAYA NAGAR,MIRA ROAD (E),MUMBAI,MAHARASHTRA,401107', '1996-09-11', 'OPEN'),
(453, 2015230070, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Swarali Mhatre', 'swarali57778@gmail.com', 'F', '-,bakti, m.g.road, mulgaon pondewadi, vasai, MAHARASHTRA, 401201', '1996-11-12', 'OBC'),
(454, 2015230071, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Priyanka Naik', 'priya.naik23.py@gmail.com', 'F', '26,BEHIND B.D.D CHAWL NO.15 KESHAV AALI, G.M.BHOSALE MARG, WORLI NAKA, MUMBAI, MAHARASHTRA, 400018', '0000-00-00', 'VJ'),
(455, 2015230074, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Raj Pawar', 'pawar.raj9907@gmail.com', 'M', 'KH1/11/304,VASTUVIHAR , VASTUVIHAR ROAD, SECTOR-16, KHARGHAR, NAVI MUMBAI, Maharashtra, 410210', '0000-00-00', 'SC'),
(456, 2015230073, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sairandhri Patil', 'patil.sairandhri@gmail.com', 'F', '19,DURGA, BEED BY PASS ROAD, SHRIKRISHNANAGR, AURANGABAD, MAHARASHTRA, 431202', '0000-00-00', 'OPEN'),
(457, 2015230075, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mahi Quadri', 'qadri.mahi@gmail.com', 'M', '101, B ,HALIMA APARTMENTS, 95 MORLAND ROAD, MUMBAI CENTRAL, MUMBAI, MAHARASHTRA, 400008', '0000-00-00', 'OPEN'),
(458, 2015230076, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Supriya Tak', 'supriyatak18@gmail.com', 'F', 'ROOM NO-412,SEC-6, -, KOPARKHAIRNE, NAVI MUMBAI, Maharashtra, 400709', '0000-00-00', 'OBC'),
(459, 2014140001, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Saurabh Adhau', 'saurabhadhau1@gmail.com', 'M', 'Pariwar Colony No.1, Round Rd., Near Jaonrkar Mangal Karyalaya, Akola', '0000-00-00', 'OBC'),
(460, 2014140002, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Miloy Ajmera', 'miloyaimera.12@gmail.com', 'M', 'A/401, Rajbhavan Apts., L.T.Road, Borivali (W), Mum-400092', '0000-00-00', 'OPEN'),
(461, 2014140003, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Grishma Alshi', 'grish96@gmail.com', 'F', 'B/302, Satguru Soc., Liberty Garden Road No.3, Malad (W), Mum-400064', '0000-00-00', 'OBC'),
(462, 2014140004, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Adnan Ahmed Ansari', 'adhan.ansari@rockmail.com', 'M', 'A/28, 2nd Floor, Bmc Colony, Glider Lane, Mumbai Central, Mumbai-400008.', '0000-00-00', 'OBC'),
(463, 2014140005, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Jaspreet Kaur Bhamra', 'jaspreetbhamra13@gmail.com', 'F', '403, Valeram Tower, Marve Road, Orlem, Malad(W)', '0000-00-00', 'OPEN'),
(464, 2014140006, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Karan Bheda', 'bhedakaran1@gmail.com', 'M', 'B-303, Swapnalok Dixit Rd., Vile Parle(E), Mum-400057', '0000-00-00', 'OPEN'),
(465, 2014140007, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Dnyaneshwari Bhirud', 'dobhirud96@gmail.com', 'F', 'Anant Plot No.-13, Opp.To Baimuktangan School, Vrin Dawar Ngr.,Kamatwada, Nashik-422008', '0000-00-00', 'OBC'),
(466, 2014140008, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mikhail Cazi', 'mikhailcazi@gmail.com', 'M', '10, Rajshree, Juhu Versova, Link Road, Andheri (W), Mum-400053', '0000-00-00', 'OPEN'),
(467, 2014140009, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Krushi Damania', 'krushidd@gmail.com', 'F', '113, Indrapuri Chs Ltd., Sodawala Lane, Borivali (W), Mum-400092', '0000-00-00', 'OBC'),
(468, 2014140010, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Karan Dayma', 'karanj297@gmail.com', 'M', 'F/301, Unique Vaibhav Hsg., Soc., Tirupati Ngr-1, Virar (W)', '0000-00-00', 'SC'),
(469, 2014140012, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Nishita Dutta', 'nishnikdutta@gmail.com', 'F', 'Gc-227/2, Sec-3, Saltlake, Kolkata-700106', '0000-00-00', 'OPEN'),
(470, 2014140013, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aditi Gavhane', 'aditipg96@rediffmail.com', 'F', '206, Omkar Ashish, Shivmandir,Kisan Nagar-3, Rd No.16, Wagale Estate, Thane-400604', '0000-00-00', 'OPEN'),
(471, 2014140015, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shraddha Holmukhe', 'shraddhaholmikhe96@gmail.com', 'F', 'C/301, Charkop Shree Gulmohar Chs. Ltd., Plot No.29, Rsc-22, Charkop Sec-8, Kandivali (W), Mum-400067', '0000-00-00', 'SC'),
(472, 2014140016, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Madhuri Jain', 'madhurijain97@gmail.com', 'F', 'T-7, Nutan Sandesh Bldg, 19-20, Garodia Nagar, Ghatkopar(E), Mumbai-400077', '0000-00-00', 'OPEN'),
(473, 2014140017, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Surmeet Kaur Jhajj', 'surmeetkaur.95@gmail.com', 'F', '302/C-6, Pawan Hans Hsg. Complex, Daulat Ngr., Santacruz (W), Mum-400054', '0000-00-00', 'OPEN'),
(474, 2014140018, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Purva Jhaveri', 'purvarocks@yahoo.co.in', 'F', '82/86, Raghavji Rd., 5/B, Botawala Bldg., Gowalia Tank, Grant Road (W), Mum-400036', '0000-00-00', 'OPEN'),
(475, 2014140019, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Farzeem Jivani', 'farzeemjivani@gmail.com', 'M', 'A/1302, Infinity Towers, S.C. Marg, Mumbai-400010', '0000-00-00', 'OPEN'),
(476, 2014140020, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Karthik ', 'mckarthik7@gmail.com', 'M', '20, Sadguru Nivas, Dr.Ambedkar Road, Mulund (W), Mum-400080', '0000-00-00', 'OPEN'),
(477, 2014140021, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ayesha Kazi', 'ayeshakazi1612@gmail.com', 'F', '101, Skyway Apt., Y.A.C Nagar, Kondivita Road, Marol, Andheri(E),Mum-400059', '0000-00-00', 'OPEN'),
(478, 2014140022, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Gouthami Kokkula', 'ganesh.kokkulal@gmail.com', 'F', 'Room No.4, Tulsiram Chawl, Opp. B.D.D Chawl No.118, S.S.Amruthwar Marg, Worli, Mumbai-400013', '0000-00-00', 'OPEN'),
(479, 2014140024, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Atul Lahade', 'atul.lahade2012@gmail.com', 'M', '510, Haridas Lahade, India Nagar, Jijamata Chowk, Latur-413512', '0000-00-00', 'NT2'),
(480, 2014140025, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ria Maheshwari', 'riamaheshwari2507@gmail.com', 'F', '201, Ananddham-3, Opp. Amboli Railway Crossing, Andheri (E), Mum-400069', '0000-00-00', 'OPEN'),
(481, 2014140026, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Manohar Malvankar', 'manoharm114@gmail.com', 'M', '2/4, Ram Adhar Shukla Chawl, Majas Wadi, Samartha Ngr., Jogeshwari (E), Mum-400060', '0000-00-00', 'OBC'),
(482, 2014140029, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Taufiq Monghal', 'tmon6102@gmail.com', 'M', '43, Chimbai Rd., 101, Sarkar Castle, Bandra (W), Mum-400050', '0000-00-00', 'OPEN'),
(483, 2014140030, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Anukul Moon', 'anukulm3496@gmail.com', 'M', 'Flat No.4, Radhagiri Apt., Rajiv Ngr., Near Sunraj Bldg., Nasik-422009', '0000-00-00', 'SC'),
(484, 2014140031, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Kartik Moudgil', '', 'M', 'Flat No.703, B-Wing, Bianca, Off Yari Road, Panch Marg, Versova, Andheri (W)', '0000-00-00', 'OPEN'),
(485, 2014140032, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Kumaresan Mudliar', 'srajkm@gmail.com', 'M', 'E/328, Sagar Park, Amrut Nagar, Ghatkopar (W), Mum-400086', '0000-00-00', 'OPEN'),
(486, 2014140033, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vishal Naidu', 'naiduvishal13@gmail.com', 'M', '403, Neelkanth Co.Op.Hsg. Soc., Fateh Ali Road, B/H Kdmc Office, Dombivli (E), Dist-Thane-421201.', '0000-00-00', 'OPEN'),
(487, 2014140034, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Abhishek Naik', 'abhisheknaik62@gmail.com', 'M', 'Room No.5, Kabir Ngr., Kasim Chawl, Chakala, Andheri (E), Mum-400099', '0000-00-00', 'OPEN'),
(488, 2014140035, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Dharmendra Nasit', 'dharmendrabuddy@gmail.com', 'M', '112/B, Abhay Apt., Narayan Nagar Road, Bhyander (W)', '0000-00-00', 'OPEN'),
(489, 2014140036, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Isha Pandya', 'pjayesh@in.ibm.com', 'F', 'A/801, Rajeshri Kunj, Iraniwadi Rd. No.3, Kandivali (W), Mum-400067', '0000-00-00', 'OPEN'),
(490, 2014140037, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mahavir Parmar', 'MAHAVIRPARMAR99@gmail.com', 'M', 'B-504, Shree Swapna Chs., Sec. No.2, Charkop, Kandivali (W), Mum-400063', '0000-00-00', 'OPEN'),
(491, 2014140038, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Atharva Patil', '', 'M', '8/5/13, Mount View Co-Op Hsg Society, Bhavani Nagar, Marol Maroshi Road, Andheri(E), Mumbai-400059', '0000-00-00', 'OBC'),
(492, 2014140039, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Prathviraj Patil', 'ppprathvi@gmail.com', 'M', 'Shantai, Anand Nagar, Nanded Road, Dist-Latur, Udgir-413517', '0000-00-00', 'OPEN'),
(493, 2014140040, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Tejas Patil', 'patiltejas24@gmail.com', 'M', '37, Sanjeevani , Mahavir Nagar, Near Mahavir School, Waghpur, Yavatmal', '0000-00-00', 'OPEN'),
(494, 2014140041, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Prem Raheja', 'raheja.prem1996@gmail.com', 'M', 'B-303, Arenja Towers, Sec-11, Cbd Belapur, Navi Mumbai-400614', '0000-00-00', 'OPEN'),
(495, 2014140042, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Nisha Rangnani', 'nisha_rangnani@yahoo.in', 'F', 'C/O, Roopsangam Garments, Opp. Hanuman Mandir, Vazirabad, Nanded-431601', '0000-00-00', 'OPEN'),
(496, 2014140043, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Akshay Rathod', 'Akshayrathod1324@gmail.com', 'M', 'A-204, Snehal Arcade, Belavali, Badlapur (W)', '0000-00-00', 'DT'),
(497, 2014140044, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Jainesh Rathod', 'jainesh1447@gmail.com', 'M', '403, Mandar Bldg., Near Nancy Colony, Borivali (E), Mum-400066', '0000-00-00', 'OPEN'),
(498, 2014140045, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Akshay Raul', 'raulakshay@gmail.com', 'M', 'B-204, (W) Avenue, Station Road, Nallasopara(W), Dist. Thane-401203', '0000-00-00', 'OBC'),
(499, 2014140046, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Anushka Ringshia', 'anushkaringshia@hotmail.com', 'F', '401, Basant Niwas, Malviya Road, Vile Parle (E)', '0000-00-00', 'OPEN'),
(500, 2014140048, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Apurva Saksena', 'saksena.apurva@gmail.com', 'M', '204, Oceanic-I, Juhu Versova Link Road, Near Nana Nani Park, Andheri (W), Mum-400061', '0000-00-00', 'OPEN'),
(501, 2014140049, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Akash Savaliya', 'akashsavaliya2710@gmail.com', 'M', 'A/4, Sai Niketan Chawl, Opp. Beliram Ind.Est., S.V.Road, Dahisar (E), Mum-400068', '0000-00-00', 'OPEN'),
(502, 2014140050, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shreya Sawleshwarkar', 'shreyasmiles180@gmail.com', 'F', '35, Suvarna Nagar, Jalna Road, Behind Hotel Yashodeep, Aurangabad-431001', '0000-00-00', 'OPEN'),
(503, 2014140051, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Arnnava Sharma', 'arnava31596@gmail.com', 'M', 'K-93, Badhwar Park, Wodehouse Road, Colaba, Mum-400005', '0000-00-00', 'OPEN'),
(504, 2014140052, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aishwarya Shete', 'shete.aishwarya@gmail.com', 'F', '301, Luis Villa, Mehta Manor Chs., Worli, Koliwada-400030', '0000-00-00', 'OBC'),
(505, 2014140053, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shubhangi Shinde', 'SHUBHANGIS345@gmail.com', 'F', '2/2,Chandrodaya Co-Hsg.Soc., C.S.T. Road, Swastik Park, Chembur, Mum-071', '0000-00-00', 'SC'),
(506, 2014140054, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Videet Shinghai', 'VideetSSinghai@gmail.com', 'M', '2nd Floor, Dadarkar Bldg., 5/7 V.P,Road, C.P. Tank, Mum-400004', '0000-00-00', 'OPEN'),
(507, 2014140055, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shwetha ', 'shwethakraman57@gmail.com', 'F', 'Bldg. 3/C, Flat No.503, Damodar Park, Ghatkopar (W), Mum-400086', '0000-00-00', 'OPEN'),
(508, 2014140056, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vikram Singh', 'viki95037@gmail.com', 'M', 'C/O Mr. Prakash Patil, Patil Galli, Charitian Pada, Madh Island, Mum-061.', '0000-00-00', 'OPEN'),
(509, 2014140057, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aniruddhsinh Sodha', 'sodhaaniruddh843@gmail.com', 'M', 'Janardan Chawl, Chawl No.2, Rm.No.14, Gartan Pada, Gavde Ngr., Dahisar (E), Mum-400068', '0000-00-00', 'OPEN'),
(510, 2014140058, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Prerna Sukhija', 'prernaasukhija@yahoo.co.in', 'F', 'C-6, Sukhdayak Chs Ltd., J.B.Nagar, Andheri (E), Mum-400059', '0000-00-00', 'OPEN'),
(511, 2014140059, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Nishita Upadhyay', 'nishita84@gmail.com', 'F', 'B-18/2, New Airport Colony, Parsiwada, Vile Parle (E), Mum-400099', '0000-00-00', 'OPEN'),
(512, 2014140060, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vishal Waghmode', 'Vishalking220@gmail.com', 'M', 'Room No.15, Jaldeep Niwas Chawl, Ganesh Nagar, Rawalpada, Dahisar (E),Mumbai-400068', '0000-00-00', 'NT2'),
(513, 2014140061, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Saurabh Yadav', 'SAURABH.JAN23@Gmail.com', 'M', 'Rm.No.8, Chawl No.2, Pansare Compound Sai Dutta Soc., Hanuman Ngr., P.N. Road, Bhandup (W), Mum-400078', '0000-00-00', 'OPEN'),
(514, 2014140062, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Kshitij Yerande', 'kshitijyerande@gmail.com', 'M', 'Flat No. 703, Mulund Vikas Prabha Chs Soc Ltd, Plot No.3, 386-Survey No., Mhada Colony, Mulund(E) Mumbai-400081', '0000-00-00', 'OPEN'),
(515, 2012140014, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mrigaj Goradia', 'DUDEMRIGAJ@GMAIL.COM', 'M', 'New Add. : 227/F, Narnrayan Mandir, Zaver Baulg. Room No. 22 Kalbadevi Road, Mumbai - 400002. ', '0000-00-00', 'OPEN'),
(516, 2013140003, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ameya Bhanushali', 'ameyabhanushali70@gmail.com', 'M', 'B-1203, Neel Tower, Devidas Lane, Borivali (W), Mumbai - 400092', '0000-00-00', 'OPEN'),
(517, 2013140029, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Arjun Mishra', 'CMJANGHAI@GMAIL.COM', 'M', 'Room No.01, Sai Sadan C.H.S 90 Feet Road, Khadi No.3, Sakinaka, Andheri (E), Mumbai-4000 72', '0000-00-00', 'OPEN'),
(518, 2015240063, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aarfah Ahmad', 'Aarfah786@yhaoo.com', 'F', '10,MS/RB/III, SIR J.J ROAD, BYCULLA, MUMBAI, MAHARASHTRA, 400008', '0000-00-00', 'OPEN'),
(519, 2015240064, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mansi Dandiwala', 'mansidandi@yahoo.co.in', 'F', '14,AHMED COTTAGE, 74C, PEDDAR ROAD, KEMPS CORNER, MUMBAI, MAHARASHTRA, 400036', '0000-00-00', 'SC'),
(520, 2015240065, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rohit Darekar', 'darekar.rohit7@gmail.com', 'M', '307-B,HAUSA APT, DATTU MHATRE, GODDEO GAON, BHAYANDAR(E), MAHARASHTRA, 401105', '0000-00-00', 'OPEN'),
(521, 2015240066, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Diptesh Dumada', 'dumada.diptesh007@gmail.com', 'M', '552,SAIRAJ,DON BOSCO ROAD,NIRMAL,NALLASOPARA,MAHARASHTRA,401203', '0000-00-00', 'ST'),
(522, 2015240067, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Jagruti Mahajan', 'siya86581@gmail.com', 'F', '302, Kiran Plaza, Amrutwani Satsang road, Vijay Home Complex, Bhayandar, MAHARASHTRA, 401101', '0000-00-00', 'OBC'),
(523, 2015240068, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pooja Ovhal', 'poooja.4.ovhal@gmail.com', 'F', '95,-, OPP.BUDDHAVIHAR, GOREGAON (W), Mumbai, MAHARASHTRA, 400062', '0000-00-00', 'SC'),
(524, 2015240069, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Urvi Paithankar', 'urvipaithankar@gmail.com', 'F', '302,Dheeraj Kaveri:3, Chincholi Bunder Road, Malad (West), Mumbai, Maharashtra, 400064', '0000-00-00', 'OPEN'),
(525, 2015240070, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rohan Parabh', 'rohanparabh@gmail.com', 'M', '128,SATPALE,SONARALI,VIRAR,MAHARASHTRA,401301', '0000-00-00', 'OBC'),
(526, 2015240071, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Harshal Parekh', 'harshalparekh@outlook.com', 'M', 'B/22,J-3, MAHAVIR NAGAR, KANDIVLI(WEST), MUMBAI, MAHARASHTRA, 400067', '0000-00-00', 'OPEN'),
(527, 2015240072, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Neeti Prabhupatkar', 'netzprabhupatkar@gmail.com', 'F', 'A/602,BHANUKANT COMPLEX, AAREY ROAD, GOREGAON(EAST), MUMBAI, MAHARASHTRA, 400063', '0000-00-00', 'OPEN'),
(528, 2015240073, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Siddhant Rai', 'siddhantraisgr@gmail.com', 'M', '404,A,KRISHNA PARK,ASHA NAGAR LANE,BHAYANDER (EAST),MUMBAI,MAHARASHTRA,401105', '0000-00-00', 'OPEN'),
(529, 2015240074, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Akshayanand Raut', 'akshay.raut0303@gmail.com', 'F', '664A,DINWADI,UMELE,VASAI,MAHARASHTRA,401202', '0000-00-00', 'OBC'),
(530, 2014120001, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sushmita Abhang', 'sushmitaabhang@gmail.com', 'F', 'D-3, H/17 Samarth Krupa, Charkop, Kandivali (W), Mum-400067', '0000-00-00', 'OBC'),
(531, 2014120002, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aishwarya Acharekar', 'vaishali.acharekar@gmail.com', 'F', '302, Ameya, Plot No.3, Res-6, Near Chandganta Complex, Gorai-I, Borivali (W), Mumbai', '0000-00-00', 'OPEN'),
(532, 2014120078, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shivani Baddar', 'abbaddar@yahoo.com', 'F', 'D-3, Indrayni Housing Soc., Near Eklavya Polytechnique College, Kothrud, Pune-411038', '0000-00-00', 'OPEN'),
(533, 2014120079, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Purvika Bevanur', 'Bevanures@hiranandani.net', 'F', 'Canna A-404 Cliff Avenue Hirananadani Gardens Powai Mumbai-400076', '0000-00-00', 'OPEN'),
(534, 2014120004, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Krishna Bhatu', 'Sureshhbhatu@gmail.com', 'M', '402, Vasant Vijay Chs. Ltd., M.G. X Road No.4, Kandivali (W), Mum-400067', '0000-00-00', 'OPEN'),
(535, 2014120005, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vipul Bhatu', 'vipulbhatu@yahoo.in', 'M', 'L-403,Ganpati Kutir, Near Divekar Hosp., Viva College Rd., Virar (W)', '0000-00-00', 'OPEN'),
(536, 2014120006, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sameeha Bhende', 'sameeha.bhende@gmail.com', 'F', 'G-301, Gokul Nagri-1, W.E.Highway, 90 Feet Rd., Kandivali (E), Mum-400101.', '0000-00-00', 'OPEN'),
(537, 2014120007, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Kautuk Bhosle', 'kmbhosle@yahoo.com', 'M', 'J-4, Rm.No.2, Municipal Colony, Bhatwadi, Ghatkopar (W), Mum-400084', '0000-00-00', 'SC'),
(538, 2014120008, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sandeep Bodkhe', 'sandeepbodkhe403@gmail.com', 'M', 'C/O Gorakh Dhonde, Vrundavan Niwas, Duttnagar Ashti, Tal-Ashti, Dist-Beed', '0000-00-00', 'NT3'),
(539, 2014120009, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Priyanka Chopade', 'priyanka.chopde30@gmail.com', 'F', 'Shalibhadra Ngr., 103/A, B.P.Rd., Bhyander (E), Mum-401105', '0000-00-00', 'OBC'),
(540, 2014120011, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Raghav Daga', 'awesomedaga@gmail.com', 'M', '602/B, Gardenia, Vasant Valley, Raghavji Tank Marg, Goregaon (E)', '0000-00-00', 'OPEN'),
(541, 2014120012, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sheen Dhar', 'amita_dhar@yahoo.co.in', 'F', '203-A, Goldenoak, Hiranandani Gardens, Powai, Mum-400076', '0000-00-00', 'OPEN'),
(542, 2014120013, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Luv Gadhvi', 'luvgadhvi@gmail.com', 'M', 'A-102, Paras-Darshan, S.V Rd., Opp. Bank Of Baroda, Borivali (E), Mum-400066', '0000-00-00', 'OPEN'),
(543, 2014120014, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Abhijeet Gaikwad', 'subhash.gaikwad1@gmail.com', 'M', 'Plot No.30, Bhosle Nagar, Behind Chota Tajbag, Near Sakkardara Lake, Nagpur-440024', '0000-00-00', 'SC'),
(544, 2014120015, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vinitkumar Gaikwad', 'gaikwadvinitkumar@gmail.com', 'M', 'Shreebaug No.2, Near Todkari Hosp., Alibag Dist Raigad-402201', '0000-00-00', 'SC'),
(545, 2014120016, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vikrant Gajare', 'vikrantgajre@gmail.com', 'M', 'Siddhesh Hosp., Near Khajmiya Dargah, Ganesh Colony Chowk, Jalgaon-425001', '0000-00-00', 'OBC'),
(546, 2014120017, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pratik Gawli', 'prattyzone@gmail.com', 'M', 'G-17, Rm No.4, Shahunagar, Mahim (E), Mum-400017', '0000-00-00', 'OBC'),
(547, 2014120019, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Harshal Jain', 'khushboo611@yahoo.co.in', 'F', 'A/103, Parshwa Giriraj, Opp. Madhuram Hall, H.J.Road, Dahisar (E), Mum-400068', '0000-00-00', 'OPEN'),
(548, 2014120020, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ananya Jalan', 'ajalan1@yahoo.com', 'F', '347, Raviwar Peth, Pune-411002', '0000-00-00', 'OPEN'),
(549, 2014120021, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Anuj Johri', 'ajcooLdnde24@gmail.com', 'M', 'A-604, Poornima Vasant Utsav, Thakur Village, Kandivali (E), Mum-400101', '0000-00-00', 'OPEN'),
(550, 2014120022, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mohit Joshi', 'mohit.idler@gmail.com', 'M', 'A-201, Morning Glory Chs., Thakkar Park, Aaram Soc. Road, Vakola, Sanracruz (E), Mum-400055', '0000-00-00', 'OPEN'),
(551, 2014120023, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Viraj Kamat', 'sakamat1978@gmail.com', 'M', 'A-12, Samadhan Chs Chakala, Andheri(E), Mumbai-400 099', '0000-00-00', 'OPEN'),
(552, 2014120024, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Raksha Kamath', 'raksha.kamath08@gmail.com', 'F', 'B-605, Raj Shivam Apts., Shiv Vallabh Cross Road, Ashokvan, Dahisar (E), Mum-400068', '0000-00-00', 'OPEN'),
(553, 2014120025, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shadab Khan', 'shadab.khan@yahoo.com', 'M', '07, Siddheshwar Ngr., Pandarkawda Road, Yavatmal-445001', '0000-00-00', 'OPEN'),
(554, 2014120026, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Hitensh Kharva', 'khitansh@gmail.com', 'M', '3/12, Dattatraya Bldg., Tukaram Javji Rd., Grant Road (W), Mum-400007', '0000-00-00', 'SBC'),
(555, 2014120028, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Harshal Mahajan', 'harshalmahajan@live.in', 'M', '4, Tukaram Kene Chawl, New Ayre Road, Near Diva-Vasai Bridge, Near Hodi Bunglow, Dombivli (E), Mum-421201', '0000-00-00', 'OBC'),
(556, 2014120029, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Faiz Maldar', 'maldarfaiz17@gmail.com', 'M', 'C-21, Raghukul, Near Lallubhai Park, Andheri(W), Mumbai-400058', '0000-00-00', 'OPEN'),
(557, 2014120030, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shubham Mangalvedhe', 'shubhamanita@yahoo.co.in', 'M', 'B-30, Arunkamal Chs., Indulkar Road, Vile Parle (E), Mum-400057', '0000-00-00', 'OPEN'),
(558, 2014120031, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Drushti Mewada', 'drushtim@yahoo.in', 'F', '603, Radha Krishna Tower, Siddharth Nagar, Borivali (E), Mum-400066', '0000-00-00', 'OPEN'),
(559, 2014120032, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ashwinkumar Mishra', 'ashwinn1995@gmail.com', 'M', '16/B, Suman Apt., Flat No.201, 2nd Flr., Grant Road (W), Mum-400007', '0000-00-00', 'OPEN'),
(560, 2014120033, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Manish Mishra', 'm.mishra9726@gmail.com', 'M', '301/A, Rekha Suman Residency, 150 Feet Road, Bhyander (W)', '0000-00-00', 'OPEN'),
(561, 2014120034, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rhutuja Mote', 'mote_shrikant@yahoo.co.in', 'F', 'Orchid 13-03-03, Bhavani Nagar, Marol Maroshi Road, Marol, Andheri(E) Mumbai-400059', '0000-00-00', 'OPEN'),
(562, 2014120035, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Monodeep Mukherjee', '', 'M', '402 C Rna Heights Opp. Fantasy Land, Jogeshwari, Vikhroli Link Road, Andheri (E), Mum-400093', '0000-00-00', 'OPEN'),
(563, 2014120036, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Abisha Nadar', 'nadarabisha2@gmail.com', 'F', '18/B, Ganesh Bhuvan, Daftary Road, Malad (E), Mum-400097', '0000-00-00', 'OPEN'),
(564, 2014120037, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Nivedita Naik', 'niveditanaik@yahoo.in', 'F', 'Rm.No.2, 4th Flr., Pratishtha Bhavan, 101, M.K.Road, New Marine Lines, Mum-400020', '0000-00-00', 'OPEN'),
(565, 2014120038, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Chetan Nehete', 'cmnehete123@gmail.com', 'M', '9a-404, Neelam Nagar, Phase-2, Gawanpada, Mulund (E), Mum-081', '0000-00-00', 'OBC'),
(566, 2014120039, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Archit Nigam', 'nigamarchit7@gmail.com', 'M', '103,Megh Towers, Yashodham, Goregaon (E), Mum-400063', '0000-00-00', 'OPEN'),
(567, 2014120040, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Siddhi Pardeshi', 'mansp@ymail.com', 'F', '304-A, Phase-1, Pam Gruh-1, Manvelpada Road, Virar (E), Dist-Thane-401305', '0000-00-00', 'VJ'),
(568, 2014120041, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Janit Parikh', 'janitj.parikh@gmail.com', 'M', 'B-17, Saibaba Enclave Tower Bldg No.3, Off.Sv Rd, Near Citi Center, Goregaon(W), Mumbai-400062', '0000-00-00', 'OPEN'),
(569, 2014120044, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Prachi Pedhambkar', 'prachisp20@gmail.com', 'F', 'A-34, Palash Towers, Veera Desai Road, Andheri (W), Mum.-400053', '0000-00-00', 'SC'),
(570, 2014120045, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Riya Rana', 'sweetriya51@yahoo.in', 'F', '1003, Solitaire Chs., B-Wing, Shimpoli Cross Road, Borivali (W), Mum-400092', '0000-00-00', 'NT1'),
(571, 2014120046, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Prajakta Rane', 'prajakta.rane96@gmail.com', 'F', 'Mahaveer Dham No.2 Chsl, B-106, Near Jain Soc., Kalyan (W), Mum-421301', '0000-00-00', 'OBC'),
(572, 2014120047, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Omkar Rawate', 'omkarravate@gmail.com', 'M', 'E-4/5, Post And Telegraph Colony, P.J Nehru Rd., Santacruz (E), Mum-400029', '0000-00-00', 'ST'),
(573, 2014120048, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Akhil Sardesai', 'akhilsardesai@hotmail.com', 'M', '14/401, Indradarshan Off New Link Road, Oshiwara, Andheri (W), Mum-400053', '0000-00-00', 'OPEN'),
(574, 2014120049, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Niket Shah', 's.niket28@gmail.com', 'M', 'E-33, Vikrant Bldg., R.B. Mehta Marg, Ghatkopar (E), Mum-400077', '0000-00-00', 'OPEN'),
(575, 2014120050, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Diptanshu Sharma', 'dipsimshan@yahoo.co.in', 'M', 'C/O Shantanu Sharma, 12 Farishta, Naval Park, Near Scindia Junction, Vishakhapattnam-530014', '0000-00-00', 'OPEN'),
(576, 2014120051, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mansi Sharma', 'harish214@rediffmail.com', 'F', '130/11, Railway Colony, Santacruz(W), Mumbai-400054', '0000-00-00', 'OPEN'),
(577, 2014120054, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shubham Sidhwa', 'shubhamsidhwa@gmail.com', 'M', '1304, Sejal Tower, Off Link Road, Near Oshiwara Depot, Goregaon (W)', '0000-00-00', 'OPEN'),
(578, 2014120055, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Krishna Singh', '96.krishnanasingh@gmail.com', 'M', 'A/503, Kremlin Bldg., Jagraj Ngr., Borivali (W), Mum-400091', '0000-00-00', 'OPEN'),
(579, 2014120056, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Dheerajkumar Solanki', 'Dheerajsolanki24@gmail.com', 'M', 'Room No.6, Naval Vihar Chs, Gosala Road, Mulund(W)', '0000-00-00', 'OPEN'),
(580, 2014120057, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ameya Thakur', 'mangesh.thakur@expressindia.com', 'M', 'A-101, Mohana Doordarshan Chs., Gokuldham, Goregaon (E), Mum-400063', '0000-00-00', 'OPEN'),
(581, 2014120058, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pratik Thorwe', 'pratikthowre@gmail.com', 'M', 'A-7-6-1, Millenium Towers, Sec-9, Sanpada, Navi Mum-400705', '0000-00-00', 'OPEN'),
(582, 2014120059, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pareshkumar Valiya', 'PARESHVALIYA07@gmail.com', 'M', 'A/101, Bhagyalaxmi Apt., Valiv Goan, Vasai East, Near Marathi School & Durga Dairy, Dist.Thane-401208', '0000-00-00', 'OPEN'),
(583, 2014120060, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Abhimitra Vemula', 'abhimitravemula@gmail.com', 'M', '902-17/C, Customs Colony, Saraswati, Mhada Complex, Powai-400076', '0000-00-00', 'OBC'),
(584, 2014120080, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Michelle Vetekar', 'michellevetekar@gmail.com', 'F', '1302, A-Wing, Deep Society, D.N. Nagar-1, Versova Road, Andheri(W), Mumbai-400053', '0000-00-00', 'OPEN'),
(585, 2014120061, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Madhav Wagh', 'wagh.madhav@gmail.com', 'M', 'E/301, Rna Regency Park, Co-Op. Hsg. Soc. Ltd., M.G. Road, Maharashtra Nagar, Kandivali (W), Mum-400067', '0000-00-00', 'OPEN'),
(586, 2014120062, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Laxmi Waghmore', 'tanajiwagh23@gmail.com', 'F', '1/3, Jai Maharashtra Society, Sujata Niwas, Pratap Nagar Rd., Bhandup (W), Mum-400078', '0000-00-00', 'NT2'),
(587, 2014120063, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rohan Yashwantrao', 'ryashwantrao@yahoo.com', 'M', 'Nav Vikas Society, Subhash Road, Vile Parle (E), Mum-400057', '0000-00-00', 'OPEN'),
(588, 2014120064, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Kailas Yedle', 'kailasyedle22@gmail.com', 'F', 'At Post, Z.P.C.P.S, Kasar Sirsi, Tq Nilanga, Dist-Latur-413607', '0000-00-00', 'OBC'),
(589, 2013120050, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Neelotpal Roy', 'sroysnroy@yahoo.co.in', 'M', '502, Abrol Windsor, Hanuman Mandir Lane, Upper Govind Nagar, Malad (East), Mumbai - 400097', '0000-00-00', 'ST'),
(590, 2013120051, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Nikhil Sangani', 'nikhilsangani24@gmail.com', 'M', 'Flat 10, Prasad Appt, Durga Chowk, Near Khandesh Dairy, Bhagwat Plots, Akola', '0000-00-00', 'OPEN'),
(591, 2015220065, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'PRIYANKA BERAD', 'priyanka.berad@gmail.com', 'F', 'B-12,GORAI SHREEJI C.H.S., L.T.ROAD, GORAI II, BORIWALI , MAHARASHTRA, 400092', '0000-00-00', 'Open'),
(592, 2015220066, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shreenath Bhosale', 'shreenathbhosale16@gmail.com', 'M', 'A/12,Sadhana CHSL, Road No. 22, Kisan Nagar No. 3, Wagale Estate, Thane, Maharashtra, 400604', '0000-00-00', 'OPEN'),
(593, 2015220067, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Diksha Chaudhari', 'chaudhari.diksha12@gmail.com', 'F', '979,BHANDAR ALI,VAROR,DAHANU,MAHARASHTRA,401503', '0000-00-00', 'OBC'),
(594, 2015220068, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mayur Chauhan', 'MAYURCHAUHAN1234@GMAIL.COM', 'M', '13,PREMJI PATEL CHAWL 5, ORLEM TANK ROAD, MALAD WEST, MUMBAI, MAHARASHTRA, 400064', '0000-00-00', 'OPEN'),
(595, 2015220069, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Akshata Gawas', 'akshatagawas95@gmail.com', 'F', '204,1, NEAR NIRON HOSPITAL, KOLE KALYAN POLICE CAMP, KALINA, MUMBAI, MAHARASHTRA, 400098', '0000-00-00', 'OPEN'),
(596, 2015220070, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rohan Hatekar', 'rohanisin5@gmail.com', 'M', 'C-303,YUDHISHTIR, ANAND NAGAR,DAHISAR(E), N.L. COMPLEX, MUMBAI, MAHARASHTRA, 400068', '0000-00-00', 'SC'),
(597, 2015220071, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Gauri Kamte', '1996gauri@gmail.com', 'F', 'E-101,OM GOKUL NAGARI 1,90 FEET RD,THAKUR COMPLEX ,KANDIVALI(E),MUMBAI,MAHARASHTRA,400101', '0000-00-00', 'OPEN'),
(598, 2015220072, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Chitra Mali', 'mali.chitra127@gmail.com', 'F', 'R. No.-05,Swami Samarth HSG. SOC., Hill road, Sion Chunabhatti, MUMBAI,400022', '0000-00-00', 'OBC'),
(599, 2015220073, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Apurva Patil', 'apoorvapatil444@gmail.com', 'F', 'C-12,NISARGA DATTA NIWAS,RAJA SHIVAJI VIDYALAYA ROAD,LOKMANYA NAGAR,THANE,400606', '0000-00-00', 'OPEN'),
(600, 2015220074, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shruti Pawar', 'shru.pawar2905@gmail.com', 'F', '105,Govind Co-operative Housing Society., Vireshwar road, Tambad Bhuvan, Mahad, Maharashtra, 402301', '0000-00-00', 'SC'),
(601, 2015220075, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Preksha Raut', 'preksharaut@gmail.com', 'F', '419,Mayuresh building, Dattaram Lad Marg, Kalachowki, Mumbai, Maharashtra, 400033', '0000-00-00', 'OPEN'),
(602, 2015220076, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pranjal Salgaonkar', 'ravindpra@gmail.com', 'F', '40,SHIVKRUPA CHS, NEW PRABHADEVI ROAD, PRABHADEVI, MUMBAI,400025', '0000-00-00', 'OBC');
INSERT INTO `student` (`id`, `UID`, `Password`, `Name`, `Email`, `Sex`, `Address`, `DOB`, `Category`) VALUES
(603, 2015220077, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pranali Sorte', 'pranalissorte@gmail.com', 'F', '101(A) RIDDHI COMPLEX-I,RIDDHI C.H.S., SECTOR-13, KHANDA COLONY, NEW PANVEL (W) 410206', '0000-00-00', 'SC'),
(604, 2014110002, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Alwin Eldhose ', 'alwin1996@gmail.com', 'M', 'Lt-4/31, Vijayanagar, Marol, Andheri(E), Mumbai-400059', '0000-00-00', 'OPEN'),
(605, 2014110003, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Neha Ashar', 'sunilashar@hotmail.com', 'F', 'A-4, Parvati Sadan, 41, Tilak Road, Ghatkopar(E),Mumbai-400077', '0000-00-00', 'OPEN'),
(606, 2014110005, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Akash Bangera', 'akash_bangera@yahoo.com', 'M', '1/13, M.H.B. Colony, Near Tata Power House, Borivali (E), Mum-400066', '0000-00-00', 'OBC'),
(607, 2014110007, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Devanshi Bhatt', 'devanshibhatt19@gmail.com', 'F', '23, Sharda Bhuvan, Azad Street, S.V. Road, Andheri (W), Mum-400058', '0000-00-00', 'OPEN'),
(608, 2014110008, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Utkarsha Bondre', 'ub.utkarshbondre@gmail.com', 'M', 'Plot No.12, Mire Layout, Behind Sneha Tution Classes, Near Dutta Mandir, Nandangaon Rd., Nagpur-440009', '0000-00-00', 'OBC'),
(609, 2014110010, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ninad Chitnis', 'nin0096@gmail.com', 'M', '501, Vidhi Residency, Shahaji Raje Marg, Vile Parle - E, Mum - 400057.', '0000-00-00', 'OPEN'),
(610, 2014110011, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Cristina Elsa ', 'cristinavarghese96@gmail.com', 'F', '805,Challenger Tower-Iii, Thakur Village, Kandivali (E), Mum-400101', '0000-00-00', 'OPEN'),
(611, 2014110012, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Saish Desai', 'srevolution23@gmail.com', 'M', 'A-704, Swapnalok Apartment, Gen Arunkumar Vaidya Marg, Gokuldham, Malad (E), Mum-400097', '0000-00-00', 'OPEN'),
(612, 2014110013, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vaibhavi Dichwalkar', 'vaibhavi.d210@gmail.com', 'F', '001/A Wing, Shri Chitrakut Co-Op Hsg Soc, Svc Road, Rawalpada, Dahisar(E) Mumbai-400068', '0000-00-00', 'OBC'),
(613, 2014110014, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Swastika Digha', 'swastikdigha31@gmail.com', 'F', 'Type-Ii 12/1, Taps Colony, Boisar, P.O.Tapp, Dist-Thane-401504', '0000-00-00', 'ST'),
(614, 2014110015, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shrinish Donde', 'shdonde@gmail.com', 'M', '1202, Vastu Riddhi- B Wing, Rajmata Jijabai Road, Pamphouse, Andheri (E), Mum-400093', '0000-00-00', 'OPEN'),
(615, 2014110016, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Zaid Ebrahim', 'techn720@gmail.com', 'M', 'B/310, Ganga Darshan Chs.,Off J.P Rd., Andheri (W), Mum-400061', '0000-00-00', 'OPEN'),
(616, 2014110017, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Abhishek Gaikwad', 'ag130796@gmail.com', 'M', 'Plot No.2, Kalmegh Ngr., Midc Area, Hingna Road, Nagpur-440016', '0000-00-00', 'SC'),
(617, 2014110018, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Amol Golwankar', 'amolgolwankar@gmail.com', 'M', '11, Dyandarshan Seva Singh, New Indira Nagar, Behind M.H.B Colony, Jogeshwari (E), Mum-400060', '0000-00-00', 'OBC'),
(618, 2014110020, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rishi Gupta', 'rishi_189@yahoo.com', 'M', '202, Jai Garden View, Guru Nanak Nagar, Navghar Road, Vasai(W), Thane-Maharashtra-401202', '0000-00-00', 'OPEN'),
(619, 2014110021, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Abhijit Haridas', 'abhijitharidas3107@gmail.com', 'M', '11-C, Annapurna, Anushaktinagar, Mum-400094', '0000-00-00', 'OPEN'),
(620, 2014110022, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sakshi Joshi', 'sakshijoshi320@gmail.com', 'F', 'A-102, Yamuna Bldg., Rani Sati Marg, Malad (E), Mum-400097', '0000-00-00', 'OPEN'),
(621, 2014110023, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Tanvi Joshi', 'tanvinj@gmail.com', 'F', '28, Narmada Niwas, Topiwala Wadi, Station Road, Goregaon (W), Mum-400062', '0000-00-00', 'OPEN'),
(622, 2014110024, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aditi Kajrekar', 'aditik2107@gmail.com', 'F', 'F5/702, Vijaynagar Society, Swami Nityanand Marg, Andheri(E), Mumbai-400069', '0000-00-00', 'OPEN'),
(623, 2014110025, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vaibhav Kanojia', 'Vaibhav.kanojia1996@gmail.com', 'M', '32/B, 3rd Flr.,New Ganjiwala Bldg.,Sane Guruji Marg, Tardeo, Mum-400034', '0000-00-00', 'OPEN'),
(624, 2014110026, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aarohi Karnik', 'akarnik.13@gmail.com', 'F', '201/6,Pratah-Pushpa, Next To Suraj Water Park, Ghodbunder Road, Thane (W)-400615', '0000-00-00', 'OPEN'),
(625, 2014110027, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ayesha Kesharia', 'jayesh.n.kesharia@live.com', 'F', 'Ram Niwas, 3rd Flr., Rm.No.27, Gazdar Street, Chira Bazar, Mum-400002', '0000-00-00', 'OPEN'),
(626, 2014110028, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Divya Khandkar', 'divyakhandkar.me@gmail.com', 'F', '802, Sankalp Chs., Rokadia Lane, Borivali (W)', '0000-00-00', 'OPEN'),
(627, 2014110029, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vipan Koul', 'vipankoul1410@gmail.com', 'M', 'Som Niwas, House No.85, Lane No.7, Gurah Barnai Road, Bantlab Jammu, J&K', '0000-00-00', 'OPEN'),
(628, 2014110030, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Tushar Kumar', 'tusharkumarrok@gmail.com', 'M', 'A-301, Vasanth Prakash, Opp. Amarnath Tower, Off Yari Rd., 7 Bunglows, Andheri (W), Mum-400061', '0000-00-00', 'OPEN'),
(629, 2014110032, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ashank More', 'ashankmore@gmail.com', 'M', '6/67, Shell Colony, Sahakar Nagar-1, Chembur, Mumbai-71', '0000-00-00', 'OPEN'),
(630, 2014110033, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Devashish More', 'devashishmore478@gmail.com', 'M', 'Charak, 2nd Flr., Flat No.5, Mbpt Hospital Campus, Wadala (E)', '0000-00-00', 'SC'),
(631, 2014110034, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pooja More', 'pooja9702.pm@gmail.com', 'F', 'B.D.D Chawl No.120, Rm.No.21, Worli, Mum-400018', '0000-00-00', 'SC'),
(632, 2014110037, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shreyas Padte', 'shreyas_padte@yahoo.co.in', 'M', 'A/3, New Indraprastha Chs., Mithagar Rd., C.B Marg, Salviwadi, Mulund (E), Mum-400081', '0000-00-00', 'OPEN'),
(633, 2014110038, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pranav Pailkar', 'Pranarpailkar144@gmail.com', 'M', '105, Bhalnath Bldg., Old Dombivli, Dombivli (W)', '0000-00-00', 'SC'),
(634, 2014110039, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shreyash Palande', 'shreyashpalande60@gmail.com', 'M', 'Room No.49, Bengali Chawl, Sahar Road, Koldongri Lane No.1, Andheri (E), Mum-400069', '0000-00-00', 'OPEN'),
(635, 2014110040, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Parth Panchal', 'panchalparth417@gmail.com', 'M', '38/40, Meena Mansion, 2nd Flr., Rm.No.9/10, 4th Marine Street, Dhobitalao, Mum-400002.', '0000-00-00', 'OBC'),
(636, 2014110041, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Soumyaa Passari', 'gunnu.passari@gmail.com', 'F', 'B-102, Ivy Tower, Vasant Valley, Alim Lity Rd. Goregaon(E), Mum-400097', '0000-00-00', 'OPEN'),
(637, 2014110042, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Meet Patel', 'meetpatel0543@gmail.com', 'M', 'B-4/612, Omkar Bldg., Quarry Road, Dhantiwadi, Malad (E), Mum-400097', '0000-00-00', 'OPEN'),
(638, 2014110044, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Chetan Patil', 'chetanrpatil1996@gmail.com', 'M', 'Vrindavan Nagar, Male-Gaon Road, Chalisgaon Dist Jalgaon, Maharashtra,424101', '0000-00-00', 'OBC'),
(639, 2014110047, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pranali Patil', 'pranalipatil31@yahoo.com', 'F', 'G-601, Kanti Park Soc., Abo Colony, Gorai Rd., Chikuwadi, Borivali (W), Mumbai', '0000-00-00', 'OPEN'),
(640, 2014110048, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Purvika Patil', 'purvikapatil@gmail.com', 'F', '434, Shanti Niketan, Near Tahasildar Office, Shahapur, Dist-Thane-421601', '0000-00-00', 'OBC'),
(641, 2014110049, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Siddhesh Patil', 'jamespatil1996@gmail.com', 'M', 'C/207, Vrindavan Chs. Ltd., Behind Deepak Hosp., Mira-Bhyander Road, Bhyander (E)', '0000-00-00', 'OPEN'),
(642, 2014110050, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sharvil Pradhan', 'shrvlpradhan@gmail.com', 'M', 'C/1005 Canosa, Hiranandani Estate, Ghodbandar Road, Thane (W)-400607', '0000-00-00', 'OPEN'),
(643, 2014110051, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aditya Prakash', 'adityaprakash41@gmail.com', 'M', '703/H-2, Harmony Chs., Pratiksha Ngr., Sion (E)', '0000-00-00', 'OPEN'),
(644, 2014110052, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Somyaa Rastogi', 'somyyar123@gmail.com', 'F', 'F1/701, Valley Tower Annex, Agrawal Estate, Chitalsar, Manpada, Thane (W)', '0000-00-00', 'OPEN'),
(645, 2014110053, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Suma Salian', 'sumasalian@rocketmail.com', 'F', '10, Kewlabai Mistry Chawl,Ambawadi, Dahisar (E), Mum-400068', '0000-00-00', 'OPEN'),
(646, 2014110054, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mayur Sanap', 'rajeshsanap67@gmail.com', 'M', 'D-401, Om Suryodaya C.H.S. Ltd. Rawalpada, Dahisar-E', '0000-00-00', 'NT3'),
(647, 2014110055, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Saniya ', 'sanjayasnair@gmail.com', 'F', '503, Tashkent, Opp. Country Club, Prathamesh Complex, Veera Desai Road, Andheri (W), Mum-400053', '0000-00-00', 'OPEN'),
(648, 2014110056, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Manas Sardar', 'manassardar4444122@gmail.com', 'M', 'B/401, Royal Garden, Opp.Poonam Chambers, Worli, Mum-400018', '0000-00-00', 'SC'),
(649, 2014110057, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vidur Shah', 'nipavidi@yahoo.co.in', 'M', '22/201,Sumitra Sadan, Ns Rd.No.1, Jvpd Scheme,Vile Parle (W),Mum-400056', '0000-00-00', 'OPEN'),
(650, 2014110058, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sachin Shingade', 'Sachinshingade27@gmail.com', 'M', '2/8, Ajinkya Niwas, Near Vitthal Mandir, Devipada, Borivali (E), Mum-400066', '0000-00-00', 'NT2'),
(651, 2014110059, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Chaitanya Shrivardhankar', 'chait96@gmail.com', 'M', '703, Parashara, Tifr Hsg. Complex, Navy Ngr., Colaba, Mum.-400005', '0000-00-00', 'SC'),
(652, 2014110060, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Somesh Shrivastav', 'shrivastavsomesh@gmail.com', 'M', 'B-3,001, N.G.Estate, Near Old Petrol Pump, Mira Bhyandar Road, Mira Road (E), Thane-401107', '0000-00-00', 'OPEN'),
(653, 2014110062, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shivam Tripathi', 'Shivamtripathi604@gmail.com', 'M', 'A-D, Singh Chawl, Gav Devi Rd., Poisar, Kandivali (E), Mum-400101', '0000-00-00', 'OPEN'),
(654, 2014110063, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Pinakin Vartak', 'vartak.pinu@gmail.com', 'M', '12, Oakshande, Deonar Baug, Deonar, Mum-400088', '0000-00-00', 'OPEN'),
(655, 2013110012, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ankit Ghotekar', 'arvindghotekar@rediffmail.com', 'M', 'C-513, Ravi Nagar, Nagpur 440001', '0000-00-00', 'SC'),
(656, 2013110014, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ravindra Gomase', 'ravindrasuperstar@gmail.com', 'M', 'B-402, Devki Prem C.H.S., Near Balagi Garden, New Ayre Road, Ayregaon, Dombivali (East), 421201', '0000-00-00', 'NT3'),
(657, 2013110055, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Aayush Sahib', 'sahibashok@gmail.com', 'M', 'H. No. : 1 J K Colony Paloura Top Jammu - 181124', '0000-00-00', 'OPEN'),
(658, 2013110058, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Karan Shah', 'karanshah6@yahoo.in', 'M', 'B-603, Dwarka Chsl, Jain Mandir Cr Road, Daulat Nagar, Borivali (E), Mumbai - 400066', '0000-00-00', 'OPEN'),
(659, 2015210065, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Varshada Bandiwadekar', 'varshada15@gmail.com', 'F', '119,LAXMI COTTAGE, DR.BABASAHEB AMDEDKAR ROAD, PAREL, MUMBAI, MAHARASHTRA, 400012', '0000-00-00', 'OPEN'),
(660, 2015210066, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sheetal Chaudhari', 'sheetalchaudhari2210@gmail.com', 'F', 'B -202,MANGALMURTI BLDG., M.G.ROAD, SUBHASH NAGAR, TEEN DONGARI, MUMBAI, MAHARASHTRA, 400090', '0000-00-00', 'OBC'),
(661, 2015210067, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ruchira Ghule', 'ruchi555.ghule@gmail.com', 'F', '17,M-12, L.B.S. ROAD, KASHISH PARK,MULUND CHEKNAKA, THANE, MAHARASHTRA, 400604', '0000-00-00', 'OPEN'),
(662, 2015210068, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Parimal Gosavi', 'parimalgosavi@gmail.com', 'M', '103,rosebud, amboli, andheri west , MUMBAI, MAHARASHTRA, 400053', '0000-00-00', 'NT1'),
(663, 2015210069, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Mehul Kharvi', 'mehulkharvi@yahoo.com', 'M', 'A-402,VINAYAK BLDG., C.S ROAD NO.4, DAHISAR, MUMBAI, MAHARASHTRA, 400068', '0000-00-00', 'ST'),
(664, 2015210070, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Meghana Loke', 'meghana.loke@yahoo.com', 'F', '95,B BLOCK ,RAILWAY POLICE QU.,, S.B.ROAD, DADAR, MUMBAI, MAHARASHTRA, 400014', '0000-00-00', 'OBC'),
(665, 2015210071, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ankur Mahadik', 'mahadikankur@gmail.com', 'M', 'ROOM NO.9,MAHATMA GANDHI CHAWL, VADARPADA, HANUMAN NAGAR, KANDIVALI, MUMBAI, MAHARASHTRA, 400101', '0000-00-00', 'OPEN'),
(666, 2015210072, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Kaushal Malaviya', 'kaushalmalaviya5@gmail.com', 'M', 'A/702,MAHAVIR KRUPA, NEAR FISH MARKET, MAHAVIR NAGAR, MUMBAI, MAHARASHTRA, 400067', '0000-00-00', 'OPEN'),
(667, 2015210073, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sukhadeo Mote', 'sukhmote1997@gmail.com', 'M', '246,,DIPALI NIVAS, LAXMI PETH, DAMANI NAGAR, SOLAPUR, MAHARASHTRA, 413001', '0000-00-00', 'NT2'),
(668, 2015210074, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Akshay Parekh', 'akshayparekh88@gmail.com', 'M', '305,VINAYAK PALACE,60 FEET ROAD,BHAYANDAR(W),THANE,MAHARASHTRA,401101', '0000-00-00', 'OPEN'),
(669, 2015210075, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Vaibhav Rajput', '', 'M', 'BACKSIDE OF MIT ROTEGOAN ,VAIJAPUR ,AURANGABAD', '0000-00-00', 'VJ'),
(670, 2015210076, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Rajashree Sawale', 'rajeshreesawale@gmail.com', 'F', '02,SHANI NAGAR,BADLAPUR (WEST),MAHARASHTRA,421503', '0000-00-00', 'SC'),
(671, 2015210077, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Sahil Sawant', 'sahil.sawant96@yahoo.in', 'M', '307/B,KADAMGIRI APARTMENT, HANUMAN ROAD, VILE PARLE EAST, MUMBAI, MAHARASHTRA, 400057', '0000-00-00', 'OPEN'),
(672, 2015210078, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shakila Shaikh', 'SHAKILA.SHAIKH1996@GMAIL.COM', 'F', 'BEHIND HIGH SCHOOL,-, KINHAVALI ROAD, KINHAVALI, Mumbai, MAHARASHTRA, 421403', '0000-00-00', 'OBC'),
(673, 2015210079, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Shroti Shinde', 'shrotishinde97@gmail.com', 'F', 'E-25,N.R.C.COLONY, NEAR N.R.C.SCHOOL, AMBIVLI, KALYAN, MAHARASHTRA, 421102', '0000-00-00', 'OPEN'),
(674, 2015210080, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ashwini Singh', 'ashwini.snsingh@gmail.com', 'F', '2,Matruchaya , -, Ektanagar Bhuneshwar, Roha, Maharashtra, 402109', '0000-00-00', 'OPEN'),
(675, 2015210082, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Nivesh Vaze', 'chaitalivartak07@gmail.com', 'M', '303,01,MANVEL PADA,VIRAR(EAST),MAHARASHTRA,401303', '0000-00-00', 'OPEN'),
(676, 2015210081, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Chaitali Vartak', 'niveshvaze@gmail.com', 'F', '-,OOM SAI, NAVALE RD,LUDRIK STOP, MARDES, NALLASOPARA(W),MUMBAI, MAHARASHTRA, 401304', '0000-00-00', 'OBC'),
(677, 2015210083, '$2y$12$izecLTEkArWYDd2ib8DeW.71bygx5Pv0fOBL8vEBee5hJPsZl.yoa', 'Ajinkya Yadav', 'ajinkyayadav1996@rediffmail.com', 'M', '403/B-3,TULSI PUJA APT.,, GANDHARI ROAD, WAYLE NAGAR, KALYAN, MAHARASHTRA, 421301', '0000-00-00', 'SC');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `report_dtb`
--
ALTER TABLE `report_dtb`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;
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
