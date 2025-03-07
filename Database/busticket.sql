-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 12:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phno` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `nrcno` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `email`, `address`, `phno`, `gender`, `nrcno`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'yangon', 9121212, 'male', 'as234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` varchar(20) NOT NULL,
  `bookingdate` date NOT NULL,
  `route` varchar(100) NOT NULL,
  `type` varchar(150) NOT NULL,
  `ddate` date NOT NULL,
  `dtime` time NOT NULL,
  `seats` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `carid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `bookingdate`, `route`, `type`, `ddate`, `dtime`, `seats`, `price`, `carid`) VALUES
('B-000001', '2020-11-27', ' Yangon ⇌ Sittway', 'VIP', '2020-12-02', '21:00:00', 1, 20000, '2'),
('B-000002', '2020-11-27', ' Yangon ⇌ Sittway', 'VIP', '2020-12-02', '21:00:00', 1, 20000, '2'),
('B-000003', '2020-11-28', ' Yangon ⇌ Mandalay', 'VIP', '2020-12-01', '21:00:00', 2, 22000, '2'),
('B-000004', '2020-11-28', ' Yangon ⇌ Mandalay', 'VIP', '2020-12-01', '21:00:00', 2, 22000, '2'),
('B-000005', '2020-11-28', ' Yangon ⇌ Mandalay', 'VIP', '2020-12-01', '21:00:00', 2, 22000, '2'),
('B-000006', '2020-11-29', ' Yangon ⇌ Mandalay', 'VIP', '2020-12-01', '21:00:00', 2, 22000, '2');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carid` varchar(30) NOT NULL,
  `carlisensec` varchar(100) NOT NULL,
  `carbrand` varchar(100) NOT NULL,
  `cartype` varchar(100) NOT NULL,
  `carimage` varchar(255) NOT NULL,
  `sideimage` varchar(200) NOT NULL,
  `insideimage` varchar(200) NOT NULL,
  `numberofsets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carid`, `carlisensec`, `carbrand`, `cartype`, `carimage`, `sideimage`, `insideimage`, `numberofsets`) VALUES
('2', 'aaaa', 'Toyota', 'VIP', 'Royals-Express-1.jpg', 'Royals-Express.jpg', 'jj_bus.jpg', 30),
('3', 'f', 'dddd', 'bussiness', 'OIP.jpg', 'cityexpress02_s.png', 'maxresdefault.jpg', 30),
('B-004', 'a23', 'a3', 'standard', '90170087_2565282643729731_426756080903651328_n.jpg', '90170087_2565282643729731_426756080903651328_n.jpg', '90170087_2565282643729731_426756080903651328_n.jpg', 30),
('B-005', '1', '1', 'bussiness', '18920581_262307714237982_257323360210093724_n.jpg', '22829350_319554305179989_1597984039609741846_o.jpg', '93837106_3724996640850674_4549858667121344512_n.jpg', 30),
('B-006', 'aa', 'Toyota', 'bussiness', '120825468_766911937491741_3878333292171157924_o.jpg', '120825468_766911937491741_3878333292171157924_o.jpg', '120825468_766911937491741_3878333292171157924_o.jpg', 40),
('B-007', 'a23', 'Toyota', 'bussiness', 'Royals-Express-1.jpg', 'Royals-Express-1.jpg', 'download.jpg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `nrcno` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `name`, `address`, `phoneno`, `nrcno`, `password`) VALUES
(1, 'user', 'Ygn', '12', '၁၁/မပန(ႏိုင္)၁၄၇၅၆၄', 'Kyawgyi007'),
(2, 'BHW', 'Ygn', '12', '12?', 'Bhw00001'),
(3, 'Kyaw', 'Yangon', '1234', '1234', 'Kyawthein1234');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `driverlisenseno` varchar(50) NOT NULL,
  `nrcno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `name`, `phoneno`, `address`, `driverlisenseno`, `nrcno`) VALUES
(1, 'mgmg', 99, 'Yangon', '11/afasd f', '1123412'),
(2, 'Aung ', 991238123, 'Ac', '11?afasf', '111'),
(3, 'min', 11, 'Ac', '11?afasf', '111'),
(4, 'user', 1, '111', '11?afasf', '111');

-- --------------------------------------------------------

--
-- Table structure for table `p`
--

CREATE TABLE `p` (
  `id` varchar(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `bookingid` varchar(11) NOT NULL,
  `bookingdate` date NOT NULL,
  `tpayment` int(11) NOT NULL,
  `route` varchar(100) NOT NULL,
  `seat` int(11) NOT NULL,
  `ddate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p`
--

INSERT INTO `p` (`id`, `customerid`, `bookingid`, `bookingdate`, `tpayment`, `route`, `seat`, `ddate`) VALUES
('p-000001', 1, ' B-000002', '2020-11-27', 20000, ' Yangon ⇌ Sittway', 1, ' 2020-12-02'),
('p-000002', 1, ' B-000004', '2020-11-28', 44000, ' Yangon ⇌ Mandalay', 2, ' 2020-12-01'),
('p-000003', 1, ' B-000005', '2020-11-28', 44000, ' Yangon ⇌ Mandalay', 2, ' 2020-12-01'),
('p-000004', 1, ' B-000006', '2020-11-29', 44000, ' Yangon ⇌ Mandalay', 2, ' 2020-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` varchar(20) NOT NULL,
  `paymentdate` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `bookingid` varchar(15) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registertownship`
--

CREATE TABLE `registertownship` (
  `townshipid` int(100) NOT NULL,
  `township` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registertownship`
--

INSERT INTO `registertownship` (`townshipid`, `township`) VALUES
(1, 'Yangon'),
(7, 'Mandalay'),
(10, 'Pyin Oo Lwin '),
(11, 'Sittway '),
(16, 'DC'),
(17, 'Nay Taw');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `routeid` varchar(15) NOT NULL,
  `fromgo` varchar(100) NOT NULL,
  `togo` varchar(100) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`routeid`, `fromgo`, `togo`, `name`) VALUES
('R-000001', 'Yangon', 'Mandalay', 'Yangon ⇌ Mandalay'),
('R-0002', 'Yangon', 'Sittway ', 'Yangon ⇌ Sittway'),
('R-0003', 'Yangon', 'Nay Pyi Taw', 'Yangon ⇌  Nay Pyi Taw'),
('R-0004', 'Yangon', 'Pyin Oo Lwin ', 'Yangon ⇌  Pyin oo Lwin ');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduleid` varchar(50) NOT NULL,
  `scheduledate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleid`, `scheduledate`) VALUES
('S-000001', '2020-11-27'),
('S-000002', '2020-11-27'),
('S-000003', '2020-11-29'),
('S-000004', '2020-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `scheduledetail`
--

CREATE TABLE `scheduledetail` (
  `scheduleid` varchar(15) NOT NULL,
  `routeid` varchar(11) NOT NULL,
  `fromdate` date NOT NULL,
  `arrival` time NOT NULL,
  `depature` time NOT NULL,
  `carid` varchar(11) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheduledetail`
--

INSERT INTO `scheduledetail` (`scheduleid`, `routeid`, `fromdate`, `arrival`, `depature`, `carid`, `driver`, `price`) VALUES
('S-000001', 'R-000001', '2020-12-01', '10:00:00', '21:00:00', '2', 'mgmg', 22000),
('S-000002', 'R-0002', '2020-12-02', '09:00:00', '21:00:00', '2', 'mgmg', 20000),
('S-000003', 'R-0004', '2020-12-03', '16:29:00', '04:29:00', 'B-006', 'mgmg', 20000),
('S-000004', 'R-000001', '2020-11-30', '03:49:00', '15:49:00', 'B-004', 'mgmg', 22000);

-- --------------------------------------------------------

--
-- Table structure for table `township`
--

CREATE TABLE `township` (
  `id` varchar(100) DEFAULT NULL,
  `township` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `township`
--

INSERT INTO `township` (`id`, `township`) VALUES
(NULL, NULL),
(NULL, NULL),
(NULL, NULL),
(NULL, NULL),
(NULL, NULL),
(NULL, NULL),
(NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `p`
--
ALTER TABLE `p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `registertownship`
--
ALTER TABLE `registertownship`
  ADD PRIMARY KEY (`townshipid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registertownship`
--
ALTER TABLE `registertownship`
  MODIFY `townshipid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
