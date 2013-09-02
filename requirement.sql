-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2013 at 06:05 AM
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
-- Table structure for table `requirement`
--

CREATE TABLE IF NOT EXISTS `requirement` (
  `r_id` int(50) NOT NULL AUTO_INCREMENT,
  `p_id` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `r_code` varchar(255) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_size` float(10,2) NOT NULL,
  `r_weight` float(10,2) NOT NULL,
  `r_color` varchar(255) NOT NULL,
  `r_shape` varchar(255) NOT NULL,
  `r_quantity` varchar(255) NOT NULL,
  `r_aquant` float(10,2) NOT NULL,
  `r_rquant` float(10,2) NOT NULL,
  `r_remark` varchar(255) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`r_id`, `p_id`, `c_id`, `r_code`, `r_name`, `r_size`, `r_weight`, `r_color`, `r_shape`, `r_quantity`, `r_aquant`, `r_rquant`, `r_remark`) VALUES
(5, 0, 2, 'ap6', 'bottle 5', 699.00, 0.00, 'green', 'hghghg', '200', 1000.00, 800.00, 'best'),
(6, 0, 3, 'ap6', 'bottle 5', 699.00, 0.00, 'green', 'hghghg', '50000', 1000000.00, 50000.00, 'best'),
(7, 0, 3, 'ap1', 'pesti bottel125', 750.00, 0.00, 'blue', 'we', '500', 1000.00, 600.00, 'best'),
(8, 0, 3, 'pppp', 'kkk', 0.00, 0.00, '0', 'ythhg', '500', 1000.00, 4500.00, 'ok'),
(9, 0, 3, 'ap1', 'pesti bottel125', 750.00, 0.00, 'blue', 'we', '5000', 10000.00, 5000.00, 'ok'),
(10, 0, 3, 'ap1', 'pesti bottel125', 750.00, 0.00, 'yellwo', 'dfgdf', '200', 1000.00, 800.00, 'test'),
(11, 0, 3, 'AP14', 'Round Shape', 300.00, 0.00, 'Blue', 'Round/Flip', '500', 1000.00, 500.00, 'ok'),
(12, 0, 0, 'AP10', 'Wide Mouth', 1000.00, 0.00, 'yellow', 'Round', '100000', 40000.00, 10000.00, 'ok');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
