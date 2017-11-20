-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 09:49 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tierra2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(5) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `username`, `firstname`, `lastname`, `password`) VALUES
(00001, 'daryl', 'Daryl Kate', 'Good', '7k2SpyORq0otUC/FSRtUolwjdIli5s5yEO11Uy9cu2w='),
(00002, 'merra', 'Merra Elaiza', 'Espinosa', 'Onts3DPyT9ceLGI7h0Rr1uQYk0YN8rZacNnZW2+/uzw='),
(00003, 'aira', 'Aira', 'Lamberte', 'ZZnPGID8eP3A6qu/NJxXPEAuqt32ypJGHFV3fDVwg/g='),
(00004, 'shenny', 'Shenny Maree', 'Ormo', 'lFQGfC4tKgB4S6p2Wx4IGoaj/oi1rJ1znbG8YQRpyMA='),
(00005, 'dummy', 'none', 'none', 'WJPBlmMPeuW+mFWWDSS3wkazn5Yox94LAWs0sLFgn18=');

-- --------------------------------------------------------

--
-- Stand-in structure for view `adminreserve`
-- (See below for the actual view)
--
CREATE TABLE `adminreserve` (
`id` int(20)
,`code` varchar(100)
,`check_in` date
,`check_out` date
,`roomType` varchar(20)
,`rooms` int(11)
,`guests` bigint(12)
,`email_add` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(20) NOT NULL,
  `r_code` varchar(100) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `rooms` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `r_code`, `check_in`, `check_out`, `rooms`, `adults`, `children`) VALUES
(1, 'PY3VIG35', '2017-11-15', '2017-11-17', 1, 1, 0),
(2, 'HFZDYOB6', '2017-11-06', '2017-11-09', 3, 2, 2),
(5, 'GS4TAHOD', '2017-11-15', '2017-11-21', 1, 2, 0),
(8, 'TLJYQWU3', '2017-11-16', '2017-11-18', 2, 1, 2),
(12, 'QRI0B5BH', '2017-11-14', '2017-11-15', 6, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE `card_info` (
  `book_id` int(20) NOT NULL,
  `cardholder` varchar(50) NOT NULL,
  `card_num` varchar(100) NOT NULL,
  `card_type` varchar(15) NOT NULL,
  `valid_month` int(2) UNSIGNED ZEROFILL NOT NULL,
  `valid_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`book_id`, `cardholder`, `card_num`, `card_type`, `valid_month`, `valid_year`) VALUES
(1, 'Daryl Kate Good', '76539281030', 'Visa', 08, 2022),
(2, 'Cary Kim Good', '96538752100', 'MasterCard', 02, 2025),
(5, 'Bad Daryl', '6456345432', 'Visa', 01, 2017),
(8, 'Michelle Anne Good', '67823564901', 'Visa', 05, 2025),
(12, 'Allen Walker', '63748592012', 'MasterCard', 04, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `book_id` int(20) NOT NULL,
  `title` varchar(7) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `confirm_email` varchar(50) NOT NULL,
  `phone_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`book_id`, `title`, `last_name`, `first_name`, `email_add`, `confirm_email`, `phone_num`) VALUES
(1, 'Ms.', 'Good', 'Daryl Kate', 'darylkategood@gmail.com', 'darylkategood@gmail.com', '09106359481'),
(2, 'Mr.', 'Good', 'Cary Kim', 'kimgood@yahoo.com', 'kimgood@yahoo.com', '09183802700'),
(5, 'Mr.', 'Daryl', 'Bad', 'self025@yahoo.com', 'self025@yahoo.com', '09421231429'),
(8, 'Ms.', 'Good', 'Michelle Anne', 'michelle@yahoo.com', 'michelle@yahoo.com', '09480668094'),
(12, 'Mr.', 'Walker', 'Allen', 'walker01@gmail.com', 'walker@gmail.com', '09106359481');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_rate` double NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_type`, `room_rate`, `count`) VALUES
(1, 'Single', 500, 7),
(2, 'Double', 1000, 7),
(3, 'Twin Double', 1500, 7),
(4, 'Duplex', 2000, 2),
(5, 'Presidential Suite', 3500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `select_room`
--

CREATE TABLE `select_room` (
  `book_id` int(20) NOT NULL,
  `roomSize` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `select_room`
--

INSERT INTO `select_room` (`book_id`, `roomSize`, `rate`) VALUES
(1, 'Double', 1000),
(2, 'Duplex', 5000),
(5, 'Presidential Suite', 5000),
(8, 'Presidential Suite', 3500),
(12, 'Double', 1000);

-- --------------------------------------------------------

--
-- Structure for view `adminreserve`
--
DROP TABLE IF EXISTS `adminreserve`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `adminreserve`  AS  select `b`.`book_id` AS `id`,`b`.`r_code` AS `code`,`b`.`check_in` AS `check_in`,`b`.`check_out` AS `check_out`,`s`.`roomSize` AS `roomType`,`b`.`rooms` AS `rooms`,(`b`.`adults` + `b`.`children`) AS `guests`,`c`.`email_add` AS `email_add` from ((`book` `b` join `select_room` `s` on((`b`.`book_id` = `s`.`book_id`))) join `customer_info` `c` on((`s`.`book_id` = `c`.`book_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `card_info`
--
ALTER TABLE `card_info`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `cusInfo_id` (`book_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `select_room`
--
ALTER TABLE `select_room`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `sRoom_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userid` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `card_info`
--
ALTER TABLE `card_info`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `select_room`
--
ALTER TABLE `select_room`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
