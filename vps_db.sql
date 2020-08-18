-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 01:35 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `masteradmin`
--

CREATE TABLE `masteradmin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `aemail` varchar(200) NOT NULL,
  `apassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masterlocation`
--

CREATE TABLE `masterlocation` (
  `lid` int(11) NOT NULL,
  `lcountry` varchar(200) NOT NULL,
  `lstate` varchar(200) NOT NULL,
  `lcity` varchar(200) NOT NULL,
  `larea` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterlocation`
--

INSERT INTO `masterlocation` (`lid`, `lcountry`, `lstate`, `lcity`, `larea`) VALUES
(1, 'india', 'chattisgargh', 'bhilai', 'nn'),
(2, 'India', 'Chhattisgarh', 'Raipur', 'Shanti Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `masterparkings`
--

CREATE TABLE `masterparkings` (
  `pid` int(11) NOT NULL,
  `ptitle` varchar(200) NOT NULL,
  `pcity` varchar(200) NOT NULL,
  `parea` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterparkings`
--

INSERT INTO `masterparkings` (`pid`, `ptitle`, `pcity`, `parea`) VALUES
(1, 'Parking 1', '1', '1'),
(2, 'Parking 2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `masterusers`
--

CREATE TABLE `masterusers` (
  `uid` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `ucontact` varchar(200) NOT NULL,
  `uemail` varchar(200) NOT NULL,
  `upassword` varchar(200) NOT NULL,
  `uvehicle` varchar(200) NOT NULL,
  `ucity` varchar(200) NOT NULL,
  `uarea` varchar(200) NOT NULL,
  `upic` varchar(200) NOT NULL,
  `ugender` varchar(200) NOT NULL,
  `uaddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterusers`
--

INSERT INTO `masterusers` (`uid`, `uname`, `ucontact`, `uemail`, `upassword`, `uvehicle`, `ucity`, `uarea`, `upic`, `ugender`, `uaddress`) VALUES
(4, 'pramod', '55667', 'fff@gg', 'ffff', '1', '1', '1', '', '', ''),
(5, 'mahima', '585858', 'aaa@aa', 'aaa', '2', '2', '2', '', '', ''),
(8, 'nishi', '12345', 'nnnn@nnnn', 'nnnn', '1', '1', '1', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mastervehicle`
--

CREATE TABLE `mastervehicle` (
  `vid` int(11) NOT NULL,
  `vtype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastervehicle`
--

INSERT INTO `mastervehicle` (`vid`, `vtype`) VALUES
(1, 'two-wheeler'),
(2, '4-wheeler');

-- --------------------------------------------------------

--
-- Table structure for table `transbookings`
--

CREATE TABLE `transbookings` (
  `bid` int(11) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `locationid` varchar(200) NOT NULL,
  `bvtype` varchar(200) NOT NULL,
  `bvehicleno` varchar(200) NOT NULL,
  `bindatetime` varchar(200) NOT NULL,
  `boutdatetime` varchar(200) NOT NULL,
  `breason` varchar(200) NOT NULL,
  `bstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transbookings`
--

INSERT INTO `transbookings` (`bid`, `userid`, `locationid`, `bvtype`, `bvehicleno`, `bindatetime`, `boutdatetime`, `breason`, `bstatus`) VALUES
(1, '5', '', '1', '1234', '2018-07-07T09:09', '2018-07-03T09:00', 'jjj', ''),
(2, '5', '', '1', '9999009', '2018-07-28T00:09', '2018-07-28T09:00', 'jjjjjjj						', ''),
(3, '5', '', '1', '9999009', '2018-07-28T00:09', '2018-07-28T09:00', 'jjjjjj', ''),
(6, '5', '', '2', '65565', '2018-07-07T09:59', '2018-07-04T08:09', 'pp			', ''),
(7, '', '2', '5', '2', 'mahima@gmail.com', '2018-07-20T09:08', '2018-07-10T08:09', ''),
(8, '5', '2', '1', 'mahima@gmail.com', '2018-07-07T09:00', '2018-07-12T09:00', 'maii			', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masteradmin`
--
ALTER TABLE `masteradmin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `masterlocation`
--
ALTER TABLE `masterlocation`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `masterparkings`
--
ALTER TABLE `masterparkings`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `masterusers`
--
ALTER TABLE `masterusers`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `mastervehicle`
--
ALTER TABLE `mastervehicle`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `transbookings`
--
ALTER TABLE `transbookings`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masteradmin`
--
ALTER TABLE `masteradmin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masterlocation`
--
ALTER TABLE `masterlocation`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `masterparkings`
--
ALTER TABLE `masterparkings`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `masterusers`
--
ALTER TABLE `masterusers`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mastervehicle`
--
ALTER TABLE `mastervehicle`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transbookings`
--
ALTER TABLE `transbookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
