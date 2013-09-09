-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2013 at 05:04 AM
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
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_date` date NOT NULL,
  `client_name` varchar(40) NOT NULL,
  `comp_name` varchar(70) NOT NULL,
  `c_add1` text NOT NULL,
  `c_add2` text NOT NULL,
  `c_city` varchar(25) NOT NULL,
  `c_pin` int(11) NOT NULL,
  `c_ph` bigint(11) NOT NULL,
  `c_mo` bigint(11) NOT NULL,
  `c_email` varchar(40) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_name` text NOT NULL,
  `u_pass` text NOT NULL,
  `u_email` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='user login' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `u_name`, `u_pass`, `u_email`, `date`) VALUES
(1, 'akhil', 'akhil123', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `log_history`
--

CREATE TABLE IF NOT EXISTS `log_history` (
  `l_id` int(20) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(15) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `log_history`
--

INSERT INTO `log_history` (`l_id`, `c_name`, `login_time`, `logout_time`) VALUES
(1, 'akhil', '2013-09-04 04:58:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE IF NOT EXISTS `po` (
  `po_id` int(30) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `work_date` date NOT NULL,
  `ds_th` varchar(200) NOT NULL,
  `total_quantity` float(15,2) NOT NULL,
  PRIMARY KEY (`po_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `p_code` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_size` varchar(50) NOT NULL,
  `p_wt` varchar(100) NOT NULL,
  `p_color` varchar(50) NOT NULL,
  `p_shape` varchar(50) NOT NULL,
  `p_quant` int(100) NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE IF NOT EXISTS `requirement` (
  `r_id` int(50) NOT NULL AUTO_INCREMENT,
  `po_num` varchar(50) NOT NULL,
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
  `r_date` date NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `st_id` int(15) NOT NULL AUTO_INCREMENT,
  `p_code` varchar(255) NOT NULL,
  `st_name` varchar(200) NOT NULL,
  `st_size` float(10,2) NOT NULL,
  `st_wt` float(10,2) NOT NULL,
  `st_color` varchar(50) NOT NULL,
  `shape` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `shift_type` varchar(50) NOT NULL,
  `st_quant` float(10,2) NOT NULL,
  `mc_no` varchar(255) NOT NULL,
  `per_code` varchar(255) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock_detail`
--

CREATE TABLE IF NOT EXISTS `stock_detail` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` int(11) NOT NULL,
  `st_date` date NOT NULL,
  `st_shift` varchar(25) NOT NULL,
  `st_qty` float(10,2) NOT NULL,
  `m_code` varchar(255) NOT NULL,
  `p_code` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_service`
--

CREATE TABLE IF NOT EXISTS `sub_service` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(20) NOT NULL,
  `po_id` int(20) NOT NULL,
  `serv_desc` varchar(50) NOT NULL,
  `qnt` float(10,2) NOT NULL,
  `box` text NOT NULL,
  `total` float(10,2) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_stock`
--

CREATE TABLE IF NOT EXISTS `sub_stock` (
  `s_id` int(255) NOT NULL AUTO_INCREMENT,
  `r_id` int(255) NOT NULL,
  `c_id` int(255) NOT NULL,
  `qty` float(10,2) NOT NULL,
  `qty_after_assign` float(10,2) NOT NULL,
  `qty_to_deliver` float(10,2) NOT NULL,
  `qty_after_deliver` float(10,2) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
