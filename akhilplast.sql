-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2013 at 01:19 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `c_date`, `client_name`, `comp_name`, `c_add1`, `c_add2`, `c_city`, `c_pin`, `c_ph`, `c_mo`, `c_email`) VALUES
(5, '2013-08-14', 'Yogita', 'Wave', 'Nashik', 'Panchavati    ', 'Nashik', 422003, 928628686, 9286866860, 'yogita@gmail.com'),
(6, '2013-08-21', 'Geeta', 'Geeta Pvt Ltd', 'Jalgao', 'Nashik  ', 'Nashik', 4220003, 253231456, 9999999999, 'geeta@gmail.com');

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
(1, 'akhil', 'akhil', 'snehakame@gmail.com', '2013-08-13');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `log_history`
--

INSERT INTO `log_history` (`l_id`, `c_name`, `login_time`, `logout_time`) VALUES
(1, 'ap', '2013-08-14 13:15:11', '0000-00-00 00:00:00'),
(2, 'ap', '2013-08-14 14:51:28', '0000-00-00 00:00:00'),
(3, 'ap', '2013-08-14 16:06:50', '0000-00-00 00:00:00'),
(4, 'ap', '2013-08-14 16:50:15', '0000-00-00 00:00:00'),
(5, 'ap', '2013-08-14 17:55:43', '0000-00-00 00:00:00'),
(6, 'akhil', '2013-08-15 11:44:28', '0000-00-00 00:00:00'),
(7, 'akhil', '2013-08-15 13:01:25', '0000-00-00 00:00:00'),
(8, 'akhil', '2013-08-15 14:33:10', '0000-00-00 00:00:00'),
(9, 'akhil', '2013-08-15 15:29:01', '0000-00-00 00:00:00'),
(10, 'akhil', '2013-08-16 16:47:44', '0000-00-00 00:00:00'),
(11, 'akhil', '2013-08-16 18:22:18', '0000-00-00 00:00:00'),
(12, 'akhil', '2013-08-17 10:37:44', '0000-00-00 00:00:00'),
(13, 'akhil', '2013-08-17 10:48:43', '0000-00-00 00:00:00'),
(14, 'akhil', '2013-08-17 10:52:38', '0000-00-00 00:00:00'),
(15, 'akhil', '2013-08-17 11:01:32', '0000-00-00 00:00:00'),
(16, 'akhil', '2013-08-17 13:52:52', '2013-08-17 13:55:12'),
(17, 'akhil', '2013-08-17 13:55:39', '2013-08-17 13:55:56'),
(18, 'akhil', '2013-08-17 13:56:12', '0000-00-00 00:00:00'),
(19, 'akhil', '2013-08-17 16:44:44', '0000-00-00 00:00:00'),
(20, 'akhil', '2013-08-17 17:59:01', '0000-00-00 00:00:00'),
(21, 'akhil', '2013-08-19 10:26:50', '0000-00-00 00:00:00'),
(22, 'akhil', '2013-08-19 10:59:43', '0000-00-00 00:00:00'),
(23, 'akhil', '2013-08-19 11:06:54', '0000-00-00 00:00:00'),
(24, 'akhil', '2013-08-19 11:08:44', '2013-08-19 11:11:06'),
(25, 'akhil', '2013-08-19 11:11:12', '2013-08-19 11:13:24'),
(26, 'akhil', '2013-08-19 11:15:56', '2013-08-19 11:16:19'),
(27, 'akhil', '2013-08-19 11:16:25', '0000-00-00 00:00:00'),
(28, 'akhil', '2013-08-19 11:19:15', '0000-00-00 00:00:00'),
(29, 'akhil', '2013-08-19 11:19:46', '0000-00-00 00:00:00'),
(30, 'akhil', '2013-08-19 11:21:28', '0000-00-00 00:00:00'),
(31, 'akhil', '2013-08-19 11:25:13', '0000-00-00 00:00:00'),
(32, 'akhil', '2013-08-19 11:25:46', '2013-08-19 11:26:16'),
(33, 'akhil', '2013-08-19 11:26:28', '0000-00-00 00:00:00'),
(34, 'akhil', '2013-08-19 11:27:01', '2013-08-19 12:04:03'),
(35, 'akhil', '2013-08-19 12:43:28', '2013-08-19 12:44:36'),
(36, 'akhil', '2013-08-19 12:44:40', '2013-08-19 14:21:59'),
(37, 'akhil', '2013-08-19 14:26:21', '0000-00-00 00:00:00'),
(38, 'akhil', '2013-08-21 11:56:08', '2013-08-21 12:12:57'),
(39, 'akhil', '2013-08-21 12:13:09', '0000-00-00 00:00:00'),
(40, 'akhil', '2013-08-21 12:36:17', '2013-08-21 12:42:23'),
(41, 'akhil', '2013-08-21 12:43:08', '2013-08-21 12:44:36'),
(42, 'akhil', '2013-08-21 12:44:45', '0000-00-00 00:00:00'),
(43, 'akhil', '2013-08-21 13:40:35', '2013-08-21 13:43:14'),
(44, 'akhil', '2013-08-21 13:43:18', '0000-00-00 00:00:00'),
(45, 'akhil', '2013-08-21 13:47:05', '0000-00-00 00:00:00'),
(46, 'akhil', '2013-08-21 13:53:24', '2013-08-21 15:14:16'),
(47, 'akhil', '2013-08-21 15:14:26', '2013-08-21 18:47:26'),
(48, 'akhil', '2013-08-22 10:17:15', '0000-00-00 00:00:00'),
(49, 'akhil', '2013-08-22 10:17:55', '0000-00-00 00:00:00'),
(50, 'Akhil', '2013-08-22 10:18:30', '0000-00-00 00:00:00'),
(51, 'akhil', '2013-08-22 10:19:28', '0000-00-00 00:00:00'),
(52, 'akhil', '2013-08-22 10:19:52', '0000-00-00 00:00:00'),
(53, 'akhil', '2013-08-22 10:21:26', '0000-00-00 00:00:00'),
(54, 'Akhil', '2013-08-22 10:22:39', '0000-00-00 00:00:00'),
(55, 'akhil', '2013-08-22 10:23:13', '0000-00-00 00:00:00'),
(56, 'akhil', '2013-08-22 10:54:34', '0000-00-00 00:00:00'),
(57, 'akhil', '2013-08-22 10:55:33', '0000-00-00 00:00:00'),
(58, 'akhil', '2013-08-22 14:05:47', '0000-00-00 00:00:00'),
(59, 'akhil', '2013-08-22 14:40:09', '2013-08-22 15:04:03'),
(60, 'akhil', '2013-08-22 15:04:23', '0000-00-00 00:00:00'),
(61, 'akhil', '2013-08-22 15:08:25', '2013-08-22 18:55:09'),
(62, 'akhil', '2013-08-23 09:25:27', '0000-00-00 00:00:00'),
(63, 'akhil', '2013-08-23 10:57:25', '2013-08-23 10:57:43'),
(64, 'akhil', '2013-08-23 11:03:43', '0000-00-00 00:00:00'),
(65, 'akhil', '2013-08-23 11:03:46', '0000-00-00 00:00:00'),
(66, 'akhil', '2013-08-23 11:06:17', '2013-08-23 11:06:34'),
(67, 'akhil', '2013-08-23 11:06:49', '2013-08-23 11:14:13'),
(68, 'akhil', '2013-08-23 14:11:08', '0000-00-00 00:00:00'),
(69, 'akhil', '2013-08-23 16:46:22', '0000-00-00 00:00:00'),
(70, 'akhil', '2013-08-24 09:59:48', '2013-08-24 10:01:30'),
(71, 'akhil', '2013-08-24 10:20:01', '0000-00-00 00:00:00'),
(72, 'akhil', '2013-08-26 09:48:17', '0000-00-00 00:00:00'),
(73, 'akhil', '2013-08-26 13:43:13', '2013-08-26 18:44:20'),
(74, 'akhil', '2013-08-27 09:50:11', '0000-00-00 00:00:00'),
(75, 'akhil', '2013-08-27 12:14:26', '2013-08-27 12:17:26'),
(76, 'akhil', '2013-08-27 12:18:16', '2013-08-27 12:49:47'),
(77, 'akhil', '2013-08-27 14:57:13', '0000-00-00 00:00:00'),
(78, 'akhil', '2013-08-28 15:58:01', '0000-00-00 00:00:00'),
(79, 'akhil', '2013-08-29 15:19:41', '0000-00-00 00:00:00'),
(80, 'akhil', '2013-08-29 09:52:33', '0000-00-00 00:00:00'),
(81, 'akhil', '2013-08-29 10:55:53', '0000-00-00 00:00:00'),
(82, 'akhil', '2013-08-30 04:51:39', '0000-00-00 00:00:00'),
(83, 'akhil', '2013-08-30 08:31:28', '0000-00-00 00:00:00'),
(84, 'akhil', '2013-08-30 12:45:54', '0000-00-00 00:00:00'),
(85, 'akhil', '2013-08-31 05:46:50', '2013-08-31 05:53:22'),
(86, 'akhil', '2013-08-31 06:19:22', '2013-08-31 06:26:11'),
(87, 'akhil', '2013-08-31 06:28:59', '0000-00-00 00:00:00'),
(88, 'akhil', '2013-08-31 06:29:02', '2013-08-31 06:29:51'),
(89, 'akhil', '2013-08-31 06:31:59', '2013-08-31 06:33:31'),
(90, 'akhil', '2013-08-31 06:34:31', '2013-08-31 06:37:17'),
(91, 'akhil', '2013-08-31 06:39:18', '2013-08-31 07:07:53'),
(92, 'akhil', '2013-08-31 07:07:55', '0000-00-00 00:00:00'),
(93, 'akhil', '2013-08-31 09:43:07', '0000-00-00 00:00:00'),
(94, 'akhil', '2013-08-31 11:54:56', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`po_id`, `c_id`, `work_date`, `ds_th`, `total_quantity`) VALUES
(2, 6, '2013-08-26', '', 11000.00);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_code`, `p_name`, `p_size`, `p_wt`, `p_color`, `p_shape`, `p_quant`, `remark`) VALUES
(8, 'ap2', 'cap', '234', '200', 'natural', 'wild mouth', 0, 'good and try'),
(9, 'ap1', 'pesti bottel125', '750ml', '45', 'blue', 'we', 54000, '  test'),
(11, 'ap4', 'bottle 5', '699', '50000', 'green', 'Round', 190000, '    thanx'),
(12, 'ap4', 'Pepsi', '45', '45', 'Yellow', 'cylindrical', 150000, '    test'),
(13, 'A12', 'Bislary', '50', '500', 'White', 'Round', 50000, 'Done'),
(14, 'AP16', 'Bottle', '120', '400', 'Yellow', 'Round', 5550, 'Test'),
(15, 'AP1', 'B1', '1200', '500', 'Red', 'Square', 20000, '  ok'),
(16, 'AP6', 'Square', '30ml', '400', 'Blue', 'Square', 5000, 'ok'),
(17, 'AP1', 'a1', '500', '500', 'Red', 'Round', 0, 'ok');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`r_id`, `po_num`, `c_id`, `r_code`, `r_name`, `r_size`, `r_weight`, `r_color`, `r_shape`, `r_quantity`, `r_aquant`, `r_rquant`, `r_remark`, `r_date`) VALUES
(1, '123456', 6, 'ap1', 'B1', 750.00, 500.00, 'blue', 'Square', '10000', 500000.00, 490000.00, 'ok', '2013-08-26'),
(2, '12369', 6, 'ap2', 'cap', 234.00, 200.00, 'natural', 'wild mouth', '60000', 100000.00, 40000.00, 'ok', '2013-08-26'),
(3, '1234', 6, 'ap3', 'milky', 234.00, 40.00, 'red', 'cylindrical', '5000', 800000.00, 795000.00, 'ok', '2013-08-27'),
(4, '123456', 5, 'ap2', 'cap', 234.00, 200.00, 'natural', 'wild mouth', '12345', 100000.00, 87655.00, 'any', '2013-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `st_id` int(15) NOT NULL AUTO_INCREMENT,
  `p_code` varchar(255) NOT NULL,
  `st_name` varchar(200) NOT NULL,
  `st_size` bigint(30) NOT NULL,
  `st_wt` varchar(30) NOT NULL,
  `st_color` varchar(50) NOT NULL,
  `shape` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `shift_type` varchar(50) NOT NULL,
  `st_quant` float(10,2) NOT NULL,
  `mc_no` varchar(255) NOT NULL,
  `per_code` varchar(255) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`st_id`, `p_code`, `st_name`, `st_size`, `st_wt`, `st_color`, `shape`, `date`, `shift_type`, `st_quant`, `mc_no`, `per_code`) VALUES
(30, 'ap1', 'pesti bottel125', 750, '45', 'blue', 'we', '2013-12-31', 'Day Shift', 200.00, '123', '123'),
(31, 'AP16', 'Bottle', 120, '400', 'Yellow', 'Round', '2013-12-31', 'Day Shift', 300.00, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `stock_detail`
--

CREATE TABLE IF NOT EXISTS `stock_detail` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` int(11) NOT NULL,
  `st_date` date NOT NULL,
  `st_shift` varchar(25) NOT NULL,
  `st_qty` int(10) NOT NULL,
  `m_code` int(10) NOT NULL,
  `p_code` int(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `stock_detail`
--

INSERT INTO `stock_detail` (`s_id`, `st_id`, `st_date`, `st_shift`, `st_qty`, `m_code`, `p_code`) VALUES
(85, 31, '2013-12-31', 'Day Shift', 100, 123, 123),
(86, 31, '2013-12-31', 'Day Shift', 200, 100, 100);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sub_service`
--

INSERT INTO `sub_service` (`s_id`, `c_id`, `po_id`, `serv_desc`, `qnt`, `box`, `total`) VALUES
(4, 0, 2, 'a1', 10.00, '100', 1000.00),
(5, 0, 2, 'a2', 100.00, '100', 10000.00);

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
