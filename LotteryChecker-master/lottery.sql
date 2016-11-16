-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2016 at 10:29 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lottery`
--

-- --------------------------------------------------------

--
-- Table structure for table `bundle`
--

CREATE TABLE IF NOT EXISTS `bundle` (
  `u_id` int(10) NOT NULL,
  `b_date` date NOT NULL,
  `b_no` int(30) NOT NULL AUTO_INCREMENT,
  `b_tickNum` text NOT NULL,
  `b_comName` text NOT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `bundle`
--

INSERT INTO `bundle` (`u_id`, `b_date`, `b_no`, `b_tickNum`, `b_comName`) VALUES
(4, '0000-00-00', 13, '123', '123'),
(4, '0000-00-00', 14, '234', '123'),
(4, '0000-00-00', 15, '345', '123'),
(4, '0000-00-00', 16, '456', '123'),
(4, '0000-00-00', 17, '12sd3', 'dsa'),
(4, '0000-00-00', 18, '231234', 'dsa'),
(4, '0000-00-00', 19, '123345', 'dsa'),
(4, '0000-00-00', 20, '45456', 'dsa'),
(5, '0000-00-00', 21, '12', 'xuz'),
(5, '0000-00-00', 22, '654', 'xuz'),
(5, '0000-00-00', 23, '651651', 'xuz'),
(5, '0000-00-00', 24, '651561', 'xuz'),
(5, '0000-00-00', 25, '6515123', 'xuz'),
(5, '0000-00-00', 26, '213', 'xuz'),
(5, '0000-00-00', 27, '212', 'asd'),
(5, '0000-00-00', 28, '6254', 'asd'),
(5, '0000-00-00', 29, '6531651', 'asd'),
(5, '0000-00-00', 30, '6541561', 'asd'),
(5, '0000-00-00', 31, '65155123', 'asd'),
(5, '0000-00-00', 32, '2163', 'asd'),
(7, '0000-00-00', 33, '123', 'babu'),
(7, '0000-00-00', 34, '6254', 'babu'),
(7, '0000-00-00', 35, '6531651', 'babu'),
(7, '0000-00-00', 36, '6541561', 'babu'),
(7, '0000-00-00', 37, '65155123', 'babu'),
(7, '0000-00-00', 38, '2163', 'babu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` text NOT NULL,
  `u_fullname` text NOT NULL,
  `u_password` text NOT NULL,
  `u_email` varchar(50) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_fullname`, `u_password`, `u_email`) VALUES
(4, 'ashraf', 'ashraf', '123', 'ashraf@dada.com'),
(5, 'mamun', 'mamun', '123', 'mamu@N.com'),
(6, 'niloy', 'Niloy', '123', 'niloy@gmail.com'),
(7, 'babu', 'raqib', '123', 'asd@babu.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
