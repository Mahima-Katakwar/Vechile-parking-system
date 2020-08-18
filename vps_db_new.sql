-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 02:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `masteradmin`
--

DROP TABLE IF EXISTS `masteradmin`;
CREATE TABLE IF NOT EXISTS `masteradmin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(200) NOT NULL,
  `aemail` varchar(200) NOT NULL,
  `apassword` varchar(200) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `masterlocation`
--

DROP TABLE IF EXISTS `masterlocation`;
CREATE TABLE IF NOT EXISTS `masterlocation` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `lcountry` varchar(200) NOT NULL,
  `lstate` varchar(200) NOT NULL,
  `lcity` varchar(200) NOT NULL,
  `larea` varchar(200) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `masterlocation`
--

INSERT INTO `masterlocation` (`lid`, `lcountry`, `lstate`, `lcity`, `larea`) VALUES
(7, 'India', 'Chhattisgarh', 'bilaspur', 'maharshi nagar'),
(8, 'India', 'Chhattisgarh', 'Bhilai', 'sector6'),
(9, 'India', 'Chhattisgarh', 'Durg', 'Indra market'),
(10, 'India', 'Chhattisgarh', 'Bhilai', 'Supela'),
(14, 'India', 'Chhattisgarh', 'Bhilai', 'bsp market');

-- --------------------------------------------------------

--
-- Table structure for table `masterparkings`
--

DROP TABLE IF EXISTS `masterparkings`;
CREATE TABLE IF NOT EXISTS `masterparkings` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `ptitle` varchar(200) NOT NULL,
  `pcity` varchar(200) NOT NULL,
  `parea` varchar(200) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

DROP TABLE IF EXISTS `masterusers`;
CREATE TABLE IF NOT EXISTS `masterusers` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(200) NOT NULL,
  `ucontact` varchar(200) NOT NULL,
  `uemail` varchar(200) NOT NULL,
  `upassword` varchar(200) NOT NULL,
  `uarea` varchar(200) NOT NULL,
  `upic` varchar(200) NOT NULL,
  `ugender` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `masterusers`
--

INSERT INTO `masterusers` (`uid`, `uname`, `ucontact`, `uemail`, `upassword`, `uarea`, `upic`, `ugender`) VALUES
(21, 'aaaa', '121212', 'aa@aa', 'aa', '8', '20140515_121006.jpg', 'male'),
(22, 'minakshi', '32326', 'mmm@mm', 'mm', '10', '20140515_115222.jpg', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `mastervehicle`
--

DROP TABLE IF EXISTS `mastervehicle`;
CREATE TABLE IF NOT EXISTS `mastervehicle` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `vtype` varchar(200) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mastervehicle`
--

INSERT INTO `mastervehicle` (`vid`, `vtype`) VALUES
(10, '3-wheeler'),
(11, '4-wheeler'),
(12, 'two-wheeler');

-- --------------------------------------------------------

--
-- Table structure for table `transbookings`
--

DROP TABLE IF EXISTS `transbookings`;
CREATE TABLE IF NOT EXISTS `transbookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(200) NOT NULL,
  `locationid` varchar(200) NOT NULL,
  `parkingid` varchar(20) NOT NULL,
  `bvtype` varchar(200) NOT NULL,
  `bvehicleno` varchar(200) NOT NULL,
  `bdate` date NOT NULL,
  `bintime` varchar(20) NOT NULL,
  `bouttime` varchar(20) NOT NULL,
  `breason` varchar(200) NOT NULL,
  `bstatus` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `transbookings`
--

INSERT INTO `transbookings` (`id`, `userid`, `locationid`, `parkingid`, `bvtype`, `bvehicleno`, `bdate`, `bintime`, `bouttime`, `breason`, `bstatus`) VALUES
(44, '21', '8', '3', '11', '1132', '2018-08-30', '01:01', '05:21', '		dwed				', 'booked'),
(45, '21', '8', '10', '11', '34326', '2018-09-01', '13:01', '03:01', '		assdx				', 'booked'),
(46, '21', '7', '3', '12', '3432', '2018-09-02', '12:01', '16:01', 'dccdc						', 'booked'),
(47, '22', '7', '8', '11', '3433', '2018-09-03', '12:01', '17:01', 'dfdfcd						', 'booked');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
