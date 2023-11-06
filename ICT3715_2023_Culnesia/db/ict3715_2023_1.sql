-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 05:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict3715_2023_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminID` int(11) NOT NULL,
  `Initials` char(12) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminID`, `Initials`, `Surname`, `password`, `email`) VALUES
(1001, 'D', 'Nkosi', 'nkosi1', 'd.nkosi1@ihs.edu.za'),
(1002, 'K', 'Ramushu', 'kate1', 'k.ramushu@ihs.edu.za');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `applicationID` varchar(50) NOT NULL,
  `applicationStatus` varchar(100) NOT NULL,
  `learnerID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`applicationID`, `applicationStatus`, `learnerID`) VALUES
('appl162', 'Parent Application', 'lrn168'),
('appl198', 'Awaiting Payment', 'lrn71');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `Busnumber` int(11) NOT NULL,
  `BusLimit` int(11) NOT NULL,
  `busRouteName` varchar(100) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Busnumber`, `BusLimit`, `busRouteName`, `total`) VALUES
(1, 45, 'Rooihuiskraal / The Reeds', 1860.48),
(2, 20, 'Wierdapark/Amberfield', 2001.45),
(3, 30, 'Centurion', 1650.78);

-- --------------------------------------------------------

--
-- Table structure for table `busroute`
--

CREATE TABLE `busroute` (
  `BusRouteID` int(11) NOT NULL,
  `Busnumber` int(11) NOT NULL,
  `pickup_num` varchar(100) NOT NULL,
  `pickup_name` varchar(100) NOT NULL,
  `pickup_time` time NOT NULL,
  `dropoff_num` varchar(100) NOT NULL,
  `dropoff_name` varchar(100) NOT NULL,
  `dropoff_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busroute`
--

INSERT INTO `busroute` (`BusRouteID`, `Busnumber`, `pickup_num`, `pickup_name`, `pickup_time`, `dropoff_num`, `dropoff_name`, `dropoff_time`) VALUES
(1, 1, '1A', 'Corner of Panorama and Marabou Road', '06:22:45', '1A', 'Corner of Panorama and Marabou Road', '14:30:00'),
(2, 1, '1B', 'Corner of Kolgansstraat and\r\nSkimmerstraat', '06:30:00', '1B', 'Corner of Kolgansstraat and\r\nSkimmerstraat', '14:39:00'),
(3, 2, '2A', 'Corner of Reddersburg\r\nStreet and Mafeking Drive', '00:00:06', '2A', 'Corner of Reddersburg\r\nStreet and Mafeking Drive', '14:25:00'),
(4, 2, '2B', 'Corner of Theuns van\r\nNiekerkstraat and\r\nRoosmarynstraat', '06:35:00', '2B', 'Corner of Theuns van\r\nNiekerkstraat and\r\nRoosmarynstraat', '14:30:00'),
(5, 3, '3A', 'Corner of Jasper Drive and\r\nTieroog Street', '06:20:00', '3A', 'Corner of Jasper Drive and\r\nTieroog Street', '14:30:00'),
(6, 3, '3B', 'Corner of Louise Street and\r\nVon Willich Drive', '06:40:00', '3B', 'Corner of Louise Street and\r\nVon Willich Drive', '14:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `learnerinfo`
--

CREATE TABLE `learnerinfo` (
  `learnerID` varchar(20) NOT NULL,
  `fullname` text NOT NULL,
  `lrn_phone_no` varchar(100) NOT NULL,
  `gradePrev` int(2) NOT NULL,
  `gradeCurr` int(2) NOT NULL,
  `current_bus` varchar(50) NOT NULL,
  `new_bus` varchar(50) NOT NULL,
  `parPhoneNo` varchar(100) NOT NULL,
  `parentID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learnerinfo`
--

INSERT INTO `learnerinfo` (`learnerID`, `fullname`, `lrn_phone_no`, `gradePrev`, `gradeCurr`, `current_bus`, `new_bus`, `parPhoneNo`, `parentID`) VALUES
('lrn168', 'James Tambani', '0722021111', 8, 9, '2A', '1A', '0745021189', '1000'),
('lrn71', 'John Tambani', '0722021155', 9, 10, '2A', '2B', '0745021189', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `ParentID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `learnerID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`ParentID`, `name`, `surname`, `password`, `phone_no`, `email`, `learnerID`) VALUES
(1000, 'Mary', 'Tambani', 'mary1', '0745021189', 'mary1@gmail.com', 'lrn168'),
(1001, 'Tshidi', 'Madisha', 'tshidi1', '0789631212', 'tshidimadish@yahoo.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`applicationID`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`Busnumber`);

--
-- Indexes for table `busroute`
--
ALTER TABLE `busroute`
  ADD PRIMARY KEY (`BusRouteID`),
  ADD KEY `BusRoute_Busnumber_fk` (`Busnumber`);

--
-- Indexes for table `learnerinfo`
--
ALTER TABLE `learnerinfo`
  ADD PRIMARY KEY (`learnerID`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`ParentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `Busnumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `busroute`
--
ALTER TABLE `busroute`
  MODIFY `BusRouteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `ParentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `busroute`
--
ALTER TABLE `busroute`
  ADD CONSTRAINT `BusRoute_Busnumber_fk` FOREIGN KEY (`Busnumber`) REFERENCES `bus` (`Busnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
