-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 02:53 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sesamebus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`, `name`) VALUES
('admin', 'admin', 'admin'),
('niketraj45', '12345', 'Niket Raj');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bid` varchar(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `type_ac` char(3) NOT NULL,
  `type_sl` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bid`, `bname`, `type_ac`, `type_sl`) VALUES
('BB001', 'Ganga', 'yes', 'yes'),
('BB002', 'SRS Travels', 'no', 'yes'),
('BB003', 'VOLVO', 'yes', 'yes'),
('BB004', 'Sugama', 'no', 'yes'),
('BB005', 'KALYANA', 'no', 'yes'),
('BB006', 'Durgamba', 'no', 'yes'),
('BB007', 'SLV', 'no', 'yes'),
('BB008', 'KKB', 'no', 'yes'),
('BB009', 'TCS', 'no', 'yes'),
('BB010', 'Jain Travels', 'no', 'yes'),
('BB011', 'VRV', 'no', 'yes'),
('BB012', 'SRA', 'no', 'yes'),
('BB013', 'VRX', 'no', 'yes'),
('BB014', 'Gene', 'no', 'yes'),
('BB015', 'GT', 'yes', 'no'),
('BB016', 'Vani', 'no', 'yes'),
('BB017', 'GRS', 'no', 'yes'),
('BB018', 'VYT', 'yes', 'no'),
('BB019', 'RTT', 'yes', 'no'),
('BB020', 'BTE', 'yes', 'no'),
('BB021', 'Rose', 'yes', 'no'),
('BB022', 'VRDT', 'yes', 'no'),
('BB023', 'Vellore Travels', 'yes', 'no'),
('BB024', 'Vamanur Travels', 'yes', 'no'),
('BB025', 'Varada Travels', 'yes', 'no'),
('BB026', 'Narmada Travels', 'yes', 'no'),
('BB027', 'VYT', 'yes', 'no'),
('BB028', 'KKB Express', 'no', 'yes'),
('BB029', 'PK', 'no', 'yes'),
('BB030', 'Jain Travels', 'no', 'yes'),
('BB031', 'Vardhaman Travels', 'no', 'no'),
('BB032', 'Vaikunta Travels', 'no', 'no'),
('BB033', 'Tirupati Travels', 'no', 'no'),
('BB034', 'Jain Travels', 'no', 'no'),
('BB035', 'Vamanahalli Travels', 'no', 'no'),
('BB036', 'Janata  Travels', 'no', 'no'),
('BB037', 'Janata Express', 'no', 'no'),
('BB038', 'vadra Travels', 'no', 'no'),
('BB050', 'BASSEM', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `num` varchar(16) NOT NULL,
  `type` varchar(30) NOT NULL,
  `expdate` date NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`num`, `type`, `expdate`, `cvv`) VALUES
('1234567890123456', 'VISA', '2016-01-01', 333);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `pid` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`pid`, `name`, `email`, `mob`, `uname`, `password`) VALUES
('1111115', 'Niket', 'niketraj45@gmail.com', '8867159511', '', ''),
('1111116', 'Niket', 'admin@starbus.com', '1234567890', '', ''),
('1111117', 'Niket', 'niketraj45@gmail.com', '8867159511', '', ''),
('1111118', 'Niket', 'admin@starbus.com', '1234567890', '', ''),
('1111119', 'Niket', 'niketraj45@gmail.com', '8867159511', '', ''),
('1111120', 'Niket', 'niketraj45@gmail.com', '8867159511', '', ''),
('1111121', 'Niket', 'niketraj45@gmail.com', '0886715951', '', ''),
('1111144', 'amine', 'autokiller2@gmail.com', '50485473', 'a', 'a'),
('amine', 'amine', 'autokiller@hotmail.fr', '50485473', 'amine', 'amine');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `pnr` int(11) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `pid` varchar(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `DOT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`pnr`, `rid`, `pid`, `status`, `DOT`) VALUES
(22, 10001, '1111116', 'booked', '2015-05-19 09:29:09'),
(23, 10001, '1111116', 'booked', '2015-05-19 09:29:09'),
(24, 10000, '1111117', 'cancelled', '2015-05-19 09:37:25'),
(25, 10000, '1111117', 'cancelled', '2015-05-19 09:37:26'),
(26, 10001, '1111118', 'booked', '2015-05-25 06:07:19'),
(27, 10001, '1111118', 'booked', '2015-05-25 06:07:19'),
(28, 10001, '1111118', 'booked', '2015-05-25 06:07:19'),
(29, 10000, '1111120', 'cancelled', '2015-08-13 08:26:48'),
(30, 10000, '1111120', 'cancelled', '2015-08-13 08:26:48'),
(31, 10000, '1111120', 'cancelled', '2015-08-13 08:26:48'),
(32, 10000, '1111121', 'booked', '2015-09-30 12:40:21'),
(33, 10000, '1111121', 'booked', '2015-09-30 12:40:21'),
(34, 10000, '1111121', 'booked', '2015-09-30 12:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `rid` int(11) NOT NULL,
  `bid` varchar(11) DEFAULT NULL,
  `fromLoc` varchar(10) DEFAULT NULL,
  `toLoc` varchar(10) DEFAULT NULL,
  `fare` double DEFAULT NULL,
  `dep_date` date NOT NULL,
  `dep_time` time DEFAULT NULL,
  `arr_time` time DEFAULT NULL,
  `arr_date` date NOT NULL,
  `avalseats` int(10) NOT NULL DEFAULT '40',
  `maxseats` int(10) NOT NULL DEFAULT '40'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`rid`, `bid`, `fromLoc`, `toLoc`, `fare`, `dep_date`, `dep_time`, `arr_time`, `arr_date`, `avalseats`, `maxseats`) VALUES
(10000, 'BB001', 'Bangalore', 'Mumbai', 1000, '2015-12-29', '20:00:00', '22:00:00', '2015-08-22', 37, 40),
(10001, 'BB001', 'Bangalore', 'Mumbai', 1100, '2015-10-29', '21:00:00', '23:00:00', '2015-06-03', 35, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`pnr`),
  ADD KEY `rid` (`rid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`rid`,`dep_date`),
  ADD KEY `bid` (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `pnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `route` (`rid`),
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `passenger` (`pid`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bus` (`bid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
