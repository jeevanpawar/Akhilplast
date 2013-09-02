-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2013 at 05:46 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akhilplast`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `st_id` int(15) NOT NULL AUTO_INCREMENT,
  `avail_id` int(50) NOT NULL,
  `product_id` varchar(13) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `st_size` bigint(30) NOT NULL,
  `st_wt` varchar(30) NOT NULL,
  `st_color` varchar(50) NOT NULL,
  `quantity` float NOT NULL,
  `shape` varchar(100) NOT NULL,
  `shift_type` varchar(50) NOT NULL,
  `st_date` datetime NOT NULL,
  `st_avail` float(10,2) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`st_id`, `avail_id`, `product_id`, `product_name`, `st_size`, `st_wt`, `st_color`, `quantity`, `shape`, `shift_type`, `st_date`, `st_avail`) VALUES
(1, 0, 'drt', 'bottel9', 500, '250kg', 'red', 55, 'cylendrical', 'morrnig', '2013-08-16 06:53:32', 0.00),
(2, 0, 'a45', 'vvvv', 120, '250kg', 'red', 55, 'cylendrical', 'evening', '2013-08-16 07:00:28', 0.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
