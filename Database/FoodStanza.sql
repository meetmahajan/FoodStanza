-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2017 at 12:19 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodstanza`
--
CREATE DATABASE IF NOT EXISTS `foodstanza` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `foodstanza`;

-- --------------------------------------------------------

--
-- Table structure for table `streetfood`
--

CREATE TABLE IF NOT EXISTS `streetfood` (
  `Code` varchar(11) NOT NULL,
  `StallName` varchar(40) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `PhoneNumber` bigint(10) NOT NULL,
  `Area` varchar(15) NOT NULL,
  `AreaCode` int(3) NOT NULL,
  `City` varchar(15) NOT NULL,
  `State` varchar(15) NOT NULL,
  `URL` varchar(50) NOT NULL,
  `FoodType` varchar(15) NOT NULL,
  `Available` varchar(50) NOT NULL,
  `OpenTime` time NOT NULL,
  `CloseTime` time NOT NULL,
  `URL2` varchar(20) NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `streetfood`
--

INSERT INTO `streetfood` (`Code`, `StallName`, `Address`, `PhoneNumber`, `Area`, `AreaCode`, `City`, `State`, `URL`, `FoodType`, `Available`, `OpenTime`, `CloseTime`, `URL2`) VALUES
('GUAHM01BHP', 'Bhairavnath Sev Puri Center', 'Rajendra Park Cross Road', 9865359263, 'Rajendra Park', 1, 'Ahmedabad', 'Gujarat', 'ahm01BHP.php', 'Veg', 'Available Whole Year except Party Order', '16:00:00', '20:00:00', 'uahm01BHP.php'),
('GUAHM01PMI', 'Prem Mevad Icecream and MilkShake', 'Rajendra Cross Road', 9584627586, 'Rajendra Park', 1, 'Ahmedabad', 'Gujarat', 'ahm01PMI.php', 'Veg', 'Available Whole Year except Party Order', '10:00:00', '22:30:00', 'uahm01PMI.php'),
('GUAHM01SOC', 'Star Omlet Center', 'opposite to Rangoli Snacks,Rajendra Cross Road ', 8795648596, 'Rajendra Park', 1, 'Ahmedabad', 'Gujarat', 'ahm01SOC.php', 'Egg', 'Available Whole Year except Party Order', '17:30:00', '23:45:00', 'uahm01SOC.php'),
('GUAHM02SRS', 'Shree Ram Snacks', 'Opposite to Vardhan Mobile Shop,Rabari Colony', 9897949596, 'Rabari Colony', 2, 'Ahmedabad', 'Gujarat', 'ahm02SRS.php', 'Veg', 'Unavailable after "Second half" on Sunday', '09:00:00', '22:00:00', 'uahm02SRS.php'),
('GUAHM03HOC', 'Hari-Om South Indian Center', 'Sureliya Chowkdi', 7586958465, 'Sureliya', 3, 'Ahmedabad', 'Gujarat', 'ahm03HOC.php', 'Veg', 'Available Whole Year except Party Order', '09:00:00', '13:00:00', 'uahm03HOC.php'),
('GUAHM04BHB', 'Bhairavnath Bhojanalay', 'CityPoint Complex,AjitMill ', 8653436253, 'Soni ni Chal', 4, 'Ahmedabad', 'Gujarat', 'ahm04BHB.php', 'Veg', 'Available Whole Year ', '18:30:00', '22:00:00', 'uahm04BHB.php'),
('GUAHM05GPC', 'Gajanan Pauva Centre', 'Wonder Point Char Rasta', 7849586845, 'WonderPoint', 5, 'Ahmedabad', 'Gujarat', 'ahm05GPC.php', 'Veg', 'Available Whole Year except Party Order', '07:00:00', '14:00:00', 'uahm05GPC.php'),
('GUAHM05SRM', 'Shree Ram Muskabun', 'Wonder Point Char Rasta', 7895869586, 'WonderPoint', 5, 'Ahmedabad', 'Gujarat', 'ahm05SRM.php', 'Veg', 'Available Whole Year except Party Order', '06:00:00', '09:00:00', 'uahm05SRM.php'),
('GUAHM05UCB', 'UP Chole Bhature', 'Wonder Point Char Rasta', 7895684859, 'WonderPoint', 5, 'Ahmedabad', 'Gujarat', 'ahm05UCB.php', 'Veg', 'Available Whole Year except Party Order', '08:30:00', '13:30:00', 'uahm05UCB.php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Password`) VALUES
('Meet Mahajan', 'm1@gmail.com', 'Meet1234'),
('Meet Mahajan', 'Meet@gmail.com', 'Meet');
--
-- Database: `sample`
--
CREATE DATABASE IF NOT EXISTS `sample` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sample`;

-- --------------------------------------------------------

--
-- Table structure for table `rform`
--
-- in use(#1146 - Table 'sample.rform' doesn't exist)
-- Error reading data: (#1146 - Table 'sample.rform' doesn't exist)

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--
-- in use(#1146 - Table 'sample.signup' doesn't exist)
-- Error reading data: (#1146 - Table 'sample.signup' doesn't exist)
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
