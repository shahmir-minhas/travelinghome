-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2021 at 02:17 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelinghome`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE IF NOT EXISTS `ads` (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserId` int(100) DEFAULT NULL,
  `UserName` text,
  `AdsImage` text,
  `Title` text NOT NULL,
  `Bath` int(20) DEFAULT NULL,
  `Bed` int(20) DEFAULT NULL,
  `Status` text,
  `Rent` int(100) DEFAULT NULL,
  `AreaSq` int(11) DEFAULT NULL,
  `AddDate` date DEFAULT NULL,
  `Address` text,
  `Category` text,
  `Review` text,
  `BookUserId` int(100) DEFAULT NULL,
  `Longitude` varchar(200) DEFAULT NULL,
  `Latitude` varchar(200) DEFAULT NULL,
  `Archive` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`UID`, `SystemDate`, `UserId`, `UserName`, `AdsImage`, `Title`, `Bath`, `Bed`, `Status`, `Rent`, `AreaSq`, `AddDate`, `Address`, `Category`, `Review`, `BookUserId`, `Longitude`, `Latitude`, `Archive`) VALUES
(1, '2021-07-05 13:25:10', NULL, NULL, NULL, 'Microsoft Solution Development', 2, 1, 'Booked', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, '2021-07-05 13:31:34', NULL, NULL, NULL, 'Wordpress - KPYEP', 3, 3, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, '2021-07-05 13:37:41', NULL, NULL, NULL, 'Advance Digital Skills - Microsoft Solution Developer', 3, 4, 'Booked', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, '2021-07-06 10:07:49', 12, NULL, NULL, 'Advance Digital Skills - Microsoft Solution Developer', 2, 2, '2', NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, NULL, 0),
(5, '2021-07-06 10:14:43', 212, NULL, NULL, 'C# .Net Framework - Connected Pakistan', 2, 2, 'Booked', 233, NULL, NULL, NULL, NULL, NULL, 22, NULL, NULL, 0),
(6, '2021-07-06 10:15:36', 222, NULL, NULL, 'Wordpress - KPYEP', 23, 23, '1', 2333, NULL, NULL, NULL, NULL, NULL, 1233, NULL, NULL, 0),
(7, '2021-07-06 17:02:37', 123, 'All Fields', 'ad', 'Microsoft Solution Development', 23, 123, '23', 23, 23, NULL, '', 'asd', 'asd', 123, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserName` text NOT NULL,
  `Email` varchar(200) NOT NULL,
  `AdId` varchar(200) NOT NULL,
  `Archive` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Name` text NOT NULL,
  `ContactNumber` varchar(200) NOT NULL,
  `Address` text,
  `Email` text,
  `Password` varchar(50) DEFAULT NULL,
  `AccountType` text,
  `RoomsBooked` int(10) DEFAULT NULL,
  `AdsPosted` int(10) NOT NULL,
  `Revenue` int(20) NOT NULL,
  `Archive` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `SystemDate`, `Name`, `ContactNumber`, `Address`, `Email`, `Password`, `AccountType`, `RoomsBooked`, `AdsPosted`, `Revenue`, `Archive`) VALUES
(1, '2021-07-05 10:52:26', 'ali', '0929292222', 'Abbottabad Havalian', 'asd@gmail.com', '123456', 'Seller', 3, 1, 5000, 0),
(2, '2021-07-05 11:10:48', 'Ali raza', '12343210000', '', 'info@orixest.com', NULL, 'Seller', NULL, 0, 0, 0),
(3, '2021-07-05 13:35:02', 'Yousaf ', '3343443434', NULL, 'abc@a.com', '123', 'Buyer', NULL, 0, 0, 0),
(4, '2021-07-06 05:48:51', 'Ali Hassan', '123221131', 'Haripur', 'ali@gmail.com', NULL, 'Buyer', NULL, 0, 0, 0),
(5, '2021-07-06 06:35:24', 'Yousaf ', '123331', 'Islamabad', 'info@orixestech.com', NULL, 'Seller', NULL, 0, 0, 0),
(6, '2021-07-06 06:35:46', 'room1 ', '123232', 'Abbottabad', 'abc@a.com', NULL, 'Buyer', NULL, 0, 0, 0),
(7, '2021-07-06 06:36:09', 'room 2', '42132', 'Abbottabad', 'abc@a.com', NULL, 'Buyer', NULL, 0, 0, 0),
(8, '2021-07-06 09:34:18', 'Home23', '2323123', 'Abbottabad isb', 'abc@asd.com', NULL, 'Seller', NULL, 0, 0, 0),
(9, '2021-07-06 09:50:34', 'Entry', '123123123', 'Refresh Islamabad', 'abc@gmail.com', '1234', 'Buyer', 2, 3, 54443, 0),
(10, '2021-07-06 18:51:50', 'asdas', '', '', 'abc@a.coms', '', 'Seller', 0, 0, 0, 0),
(11, '2021-07-06 20:30:44', 'Saad', '', NULL, 'sign@gmail.com', '123123', NULL, NULL, 0, 0, 0),
(12, '2021-07-06 20:35:49', 'Haris', '', NULL, 'haris@gmail.com', '2312312', NULL, NULL, 0, 0, 0),
(13, '2021-07-06 20:39:37', 'room1 ', '', NULL, 'assss@g.com', '123', NULL, NULL, 0, 0, 0),
(14, '2021-07-07 05:17:18', 'room1 ', '', NULL, 'uniqi@gmail.com', '12341234', NULL, NULL, 0, 0, 0),
(15, '2021-07-07 05:25:49', 'Up', '', NULL, 'up@gmail.com', '12341234', NULL, NULL, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
