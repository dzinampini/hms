-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 01:34 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `zita` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `bg1` varchar(50) NOT NULL,
  `bg2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `observations`
--

CREATE TABLE `observations` (
  `entry_id` int(11) NOT NULL,
  `zuva` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hn` varchar(30) NOT NULL,
  `obs` text NOT NULL,
  `made_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `observations`
--

INSERT INTO `observations` (`entry_id`, `zuva`, `hn`, `obs`, `made_by`) VALUES
(1, '2017-10-09 22:22:47', '', 'ndhjdjdj djdjdjdj jdjdjd', 'C1234S'),
(2, '2017-10-09 22:22:47', '1', 'hddjdjdjdj', 'C1234S'),
(3, '2018-09-26 16:10:01', '3', 'hdhjdhndhdhd', 'c1234S'),
(4, '2018-10-05 12:34:46', '5', 'jahjahaghsfgsfsfsfsfs', 'c1234S');

-- --------------------------------------------------------

--
-- Table structure for table `opd_patients`
--

CREATE TABLE `opd_patients` (
  `opd_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `pmethod` varchar(50) NOT NULL,
  `rec_receipt` varchar(50) NOT NULL,
  `zuva` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `temp` varchar(10) NOT NULL,
  `bp` varchar(10) NOT NULL,
  `hiv` varchar(20) NOT NULL,
  `weight` double NOT NULL,
  `imp` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `outcome` varchar(20) NOT NULL,
  `outcome_date` date NOT NULL,
  `outcome_notes` text NOT NULL,
  `bill` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opd_patients`
--

INSERT INTO `opd_patients` (`opd_id`, `fname`, `surname`, `age`, `sex`, `pmethod`, `rec_receipt`, `zuva`, `temp`, `bp`, `hiv`, `weight`, `imp`, `action`, `outcome`, `outcome_date`, `outcome_notes`, `bill`) VALUES
(1, 'jsjsjsj', 'jwjsjsjs', '23', 'female', 'pp', 'trtr65', '2017-10-01 11:48:08', '35', '34/23', 'Code O Valid', 0, 'imp gums problem', 'csw', 'discharged', '2017-10-11', 'Home on Amoxyl', '324'),
(2, 'Kyla', 'Bandason', '19', 'female', 'pp', '233', '2017-10-19 21:06:41', '57.6', '190/47', 'Code O Valid', 0, 'severe pneumonia', 'csw', 'discharged', '2017-10-23', 'home on Amoxyln', '18'),
(3, 'gdsdhshs', 'hhdfdhdfhdf', '5', 'male', 'pp', '4hhhh', '2018-09-22 08:31:23', '37', '120/80', 'Code 0', 0, 'doctor to see', 'csw', 'discharged', '2018-09-26', 'hhvhhvhvhvh', '18'),
(4, 'gffgggf', 'ghhgh', '3', 'male', 'pp', 'fdffdf', '2018-09-16 15:42:52', '45', '120/80', 'Code 0', 0, 'dysentry', 'csw', 'transfered', '2018-09-26', 'to Mpilo', '108'),
(5, 'Dzinaishe ', 'Mpini', '8', 'male', 'pp', 'hhdhdhdhd', '2018-10-01 12:25:15', '24', '120/80', 'Code 0', 0, 'hgsghshs', 'csw', 'discharged', '2018-10-05', 'hdhdhdhdh', '72'),
(6, 'hjdjdj16161jjdj', 'hsjsjsj', '6', 'male', 'npp', 'hddhdhd', '2018-10-08 12:23:17', '29.9', '120/80', 'Code 1', 0.06, 'gdgdgdgdteehe', 'csw', '', '0000-00-00', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `entry_id` int(11) NOT NULL,
  `hn` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `orderr` varchar(30) NOT NULL,
  `made_by` varchar(20) NOT NULL,
  `proceduree` varchar(50) NOT NULL,
  `closed_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`entry_id`, `hn`, `department`, `orderr`, `made_by`, `proceduree`, `closed_by`) VALUES
(18, '4', 'Dental', 'remove tooth', 'O1234D', '', ''),
(19, '3', 'Dental', 'remove molar', 'c1234S', '', ''),
(20, '4', 'X-RAY', 'gfffggfgfgfgfg', 'c1234S', 'renal test', 'X1234Y'),
(21, '4', 'X-RAY', 'hjadsdhjsdhjds', 'c1234S', 'renal test', 'X1234Y'),
(22, '5', 'X-RAY', 'renal test', 'O1234D', 'renal test', 'X1234Y'),
(23, '1', 'Laboratory', 'fbc test', 'c1234S', '', ''),
(24, '6', 'Dental', 'remove tooth', 'c1234S', '', ''),
(25, '1', 'Pharmarcy', 'give me this drug', 'c1234S', '', ''),
(26, '1', 'Laboratory', 'fbc test', 'c1234S', '', ''),
(27, '6', 'Pharmarcy', 'give me this drug', 'c1234S', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `zuva` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hn` varchar(50) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `receipt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`zuva`, `hn`, `amount`, `receipt`) VALUES
('2017-10-10 00:00:00', '1', '35', 1),
('2017-10-11 00:00:00', '1', '55', 2),
('2017-10-11 21:43:47', '1', '45', 3),
('2018-09-26 16:31:22', '4', '59', 4),
('2018-10-05 12:42:21', '5', '50', 5);

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
  `entry_id` int(11) NOT NULL,
  `zita` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `cost` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`entry_id`, `zita`, `dept`, `cost`) VALUES
(1, 'hepatomia tests', 'Laboratory', '45'),
(2, 'renal test', 'X-RAY', '54'),
(3, 'nghhgh', 'X-RAY', '0');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `entry_id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `date_joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contact` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`entry_id`, `staff_id`, `fname`, `surname`, `role`, `dept`, `date_joined`, `contact`, `username`, `password`) VALUES
(1, 'H1234R', 'Jephias', 'Mazo', 'admin', 'hr', '2017-09-26 15:11:41', 'address', '', '12341234'),
(3, 'O1234D', 'Josephat', 'Munamo', 'nurse', 'OPD', '2017-10-09 10:39:13', 'hshshshshsh', '', '611182'),
(4, 'C1234K', 'Fidelis', 'Gamba', '', 'Clerk', '2017-10-09 11:16:42', 'ysyyusysys', '', '633665'),
(5, 'X1234Y', 'Renal', 'Mudzi', 'technician', 'X-RAY', '2017-10-09 14:27:52', 'hshshsh', '', '675925'),
(6, 'L1234B', 'Dumis', 'Tapira', 'technician', 'Laboratory', '2017-10-09 14:29:25', 'hdhshsh', '', '618524'),
(7, 'C1234S', 'Suzan', 'Kambo', 'nurse', 'CSW', '2017-10-09 20:01:51', 'ghghjh', '', '397178'),
(8, 'tte54546', 'Dhhshs', 'hffhhfh', 'nurse', '', '2018-10-08 13:11:34', '0776338480', '', '952922');

-- --------------------------------------------------------

--
-- Table structure for table `temp_observations`
--

CREATE TABLE `temp_observations` (
  `id` int(11) NOT NULL,
  `hn` int(11) NOT NULL,
  `temp` double NOT NULL,
  `bp` varchar(10) NOT NULL,
  `made_by` varchar(15) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_observations`
--

INSERT INTO `temp_observations` (`id`, `hn`, `temp`, `bp`, `made_by`, `date_time`) VALUES
(1, 1, 1012, '120/80', 'c1234S', '2018-10-08 10:53:54'),
(2, 6, 10, '120/80', 'c1234S', '2018-10-08 11:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `zita` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `zita`, `category`) VALUES
(1, 'Birch Maternity', 'Ward'),
(2, 'CMW', 'Ward'),
(3, 'CSW', 'Ward'),
(4, 'FMW', 'Ward'),
(5, 'FSW', 'Ward'),
(6, 'Gynae', 'Ward'),
(7, 'ICU', 'Ward'),
(8, 'Maternity', 'Ward'),
(9, 'MMW', 'Ward'),
(10, 'MSW', 'Ward'),
(11, 'PNW', 'Ward'),
(12, 'Psych', 'Ward'),
(13, 'Private', 'Ward'),
(14, 'SCBU', 'Ward'),
(15, 'Casualty', 'Department'),
(16, 'VFU', 'Department'),
(17, 'OPD', 'Department'),
(18, 'Clerk', 'Department'),
(19, 'Credit Control', 'Department'),
(20, 'Stores', 'Department'),
(21, 'Admin', 'Department'),
(22, 'HR', 'Department'),
(23, 'Registry', 'Department'),
(24, 'Health Information', 'Department'),
(25, 'Dental', 'Department'),
(26, 'Rehab', 'Department'),
(27, 'Theatre', 'Department'),
(28, 'Renal', 'Department'),
(29, 'Eye', 'Department'),
(30, 'ANC', 'Department'),
(31, 'Mortuary', 'Department'),
(32, 'Pharmarcy', 'Department'),
(33, 'X-RAY', 'Department'),
(34, 'Laboratory', 'Department');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `observations`
--
ALTER TABLE `observations`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `opd_patients`
--
ALTER TABLE `opd_patients`
  ADD PRIMARY KEY (`opd_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`receipt`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `temp_observations`
--
ALTER TABLE `temp_observations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `observations`
--
ALTER TABLE `observations`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `opd_patients`
--
ALTER TABLE `opd_patients`
  MODIFY `opd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `receipt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `temp_observations`
--
ALTER TABLE `temp_observations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
