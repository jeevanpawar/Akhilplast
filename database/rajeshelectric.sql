-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2013 at 03:02 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rajeshelectric`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_job`
--

CREATE TABLE IF NOT EXISTS `assign_job` (
  `assg_id` int(10) NOT NULL AUTO_INCREMENT,
  `job_id` int(10) NOT NULL,
  `stock_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `assg_val` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`assg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `assign_job`
--

INSERT INTO `assign_job` (`assg_id`, `job_id`, `stock_id`, `emp_id`, `assg_val`, `date`) VALUES
(1, 2, 6, 1, 2, '2013-07-08'),
(2, 2, 8, 2, 6, '2013-07-08'),
(3, 2, 7, 1, 2, '2013-07-08'),
(4, 2, 6, 1, 6, '2013-07-11'),
(5, 2, 6, 2, 56, '2013-05-14'),
(6, 2, 7, 2, 56, '2013-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `crt_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `addr` text NOT NULL,
  `ydc_no` int(10) NOT NULL,
  `ydc_date` date NOT NULL,
  `no` int(10) NOT NULL,
  `odc_no` int(10) NOT NULL,
  `odc_date` date NOT NULL,
  `vendor_cod` varchar(11) NOT NULL,
  `cnt_per` varchar(50) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `make1` varchar(30) NOT NULL,
  `hp1` double(20,2) NOT NULL,
  `kw1` double(20,2) NOT NULL,
  `volts1` varchar(10) NOT NULL,
  `loadamp1` varchar(30) NOT NULL,
  `capacitor_val` varchar(30) NOT NULL,
  `driv_cover1` varchar(30) NOT NULL,
  `non_driv1` varchar(30) NOT NULL,
  `cooling_fan1` varchar(35) NOT NULL,
  `sr_no1` varchar(30) NOT NULL,
  `phase1` int(10) NOT NULL,
  `rpm` int(10) NOT NULL,
  `insulatin1` varchar(10) NOT NULL,
  `resistnce` varchar(30) NOT NULL,
  `megar` varchar(30) NOT NULL,
  `bearing_n1` varchar(40) NOT NULL,
  `bearing_n2` varchar(38) NOT NULL,
  `termplat1` varchar(40) NOT NULL,
  `make2` varchar(30) NOT NULL,
  `hp2` decimal(20,2) NOT NULL,
  `kw2` decimal(20,2) NOT NULL,
  `volts2` varchar(30) NOT NULL,
  `load_amp2` varchar(30) NOT NULL,
  `brush` varchar(40) NOT NULL,
  `cooling_fan2` varchar(35) NOT NULL,
  `driv_end2` varchar(40) NOT NULL,
  `non_driv2` varchar(40) NOT NULL,
  `sr_no2` varchar(40) NOT NULL,
  `comut2` varchar(40) NOT NULL,
  `frame` varchar(20) NOT NULL,
  `clas_insult2` varchar(20) NOT NULL,
  `motor2` varchar(30) NOT NULL,
  `armature` varchar(20) NOT NULL,
  `bear_no1` varchar(30) NOT NULL,
  `bear_no2` varchar(30) NOT NULL,
  `terminal2` varchar(30) NOT NULL,
  `analysis_fail` text NOT NULL,
  `wrk_don` text NOT NULL,
  `remark` text NOT NULL,
  `frame_size` varchar(10) NOT NULL,
  `mount_type` varchar(20) NOT NULL,
  `appl_motor` text NOT NULL,
  `m_res` varchar(15) NOT NULL,
  `m_no_cur` varchar(20) NOT NULL,
  `m_inter1` varchar(20) NOT NULL,
  `m_inter2` varchar(25) NOT NULL,
  PRIMARY KEY (`crt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`crt_id`, `name`, `addr`, `ydc_no`, `ydc_date`, `no`, `odc_no`, `odc_date`, `vendor_cod`, `cnt_per`, `dept`, `make1`, `hp1`, `kw1`, `volts1`, `loadamp1`, `capacitor_val`, `driv_cover1`, `non_driv1`, `cooling_fan1`, `sr_no1`, `phase1`, `rpm`, `insulatin1`, `resistnce`, `megar`, `bearing_n1`, `bearing_n2`, `termplat1`, `make2`, `hp2`, `kw2`, `volts2`, `load_amp2`, `brush`, `cooling_fan2`, `driv_end2`, `non_driv2`, `sr_no2`, `comut2`, `frame`, `clas_insult2`, `motor2`, `armature`, `bear_no1`, `bear_no2`, `terminal2`, `analysis_fail`, `wrk_don`, `remark`, `frame_size`, `mount_type`, `appl_motor`, `m_res`, `m_no_cur`, `m_inter1`, `m_inter2`) VALUES
(1, 'sneha kumavat', 'dfgdfg ', 435, '2013-07-29', 123, 568, '2013-07-02', '34578', 'hitesh', 'mechanical', '12', 4.00, 1.00, '7', '7', '7', '7', '7', '7', '1', 5, 1, '', '7', '7', '7', '7', '7', '7', '8.00', '4.00', '5', '1', '7r', '7', '2', '25', '7', '8', 'sdfsdfdsf sdf', '5', '1', '5', '2r', '5r', '5r', '5', '5', '55', 'sdfsdfdsf ', '2', 'adsfdsf sdfds f', '5r', '5r', '5r', '5r'),
(2, 'sneha kumavat', 'dfgdfg ', 435, '2013-07-29', 123, 568, '2013-07-02', '34578', 'hitesh', 'mechanical', '12', 4.00, 1.00, '7', '7', '7', '7', '7', '7', '1', 5, 1, '', '7', '7', '7', '7', '7', '7', '8.00', '4.00', '5', '1', '7r', '7', '2', '25', '7', '8', 'sdfsdfdsf sdf', '5', '1', '5', '2r', '5r', '5r', '5', '5', '55', 'sdfsdfdsf ', '2', 'adsfdsf sdfds f', '5r', '5r', '5r', '5r');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `c_date`, `client_name`, `comp_name`, `c_add1`, `c_add2`, `c_city`, `c_pin`, `c_ph`, `c_mo`, `c_email`) VALUES
(3, '2013-02-05', 'pete walbort', 'DSW', 'us', 'v ', 'uk', 121212, 223232, 34343434, 'sneha@gmail.com'),
(5, '2013-07-02', 'reshma', 'wavetechline.com', 'nashik uttam nagar', 'vcbs road ', 'nashik', 422122, 123456, 5566787654, 'wavetechline@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_code` varchar(20) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_add` varchar(100) NOT NULL,
  `e_contact` bigint(11) NOT NULL,
  `e_doj` date NOT NULL,
  `e_desig` varchar(50) NOT NULL,
  `e_accno` varchar(50) NOT NULL,
  `e_bankname` varchar(50) NOT NULL,
  `e_panno` varchar(50) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`e_id`, `e_code`, `e_name`, `e_add`, `e_contact`, `e_doj`, `e_desig`, `e_accno`, `e_bankname`, `e_panno`) VALUES
(2, 'WT0002', 'Mohan', 'nashik jaibhavai road jachak mala trupti society', 9878675432, '2013-07-09', 'S/W Developer', '123456789', 'SBI', 'erdter4564565'),
(3, 'WT0001', 'Kishor', 'Nashik', 9999999999, '2011-06-06', 'Director', 'ic1232423423', 'ICICI', '1212dfdf'),
(4, '234234', 'dsfsdf', 'sdfs sdfsdf', 456456456, '2008-07-31', ' sdfdsf', '46456n', 'fghfgh fgh', '56456ertdrt'),
(5, 'w203', 'sneha', 'pune narayngoan', 5689895643, '2013-05-08', 'developer', '1245711000012', 'bank of maharashtra', '1212W4578454'),
(6, '100', 'kishor', 'nashik', 8888884083, '2010-07-31', 'Director', '123465789', 'HDFC', 'ABCD1345D');

-- --------------------------------------------------------

--
-- Table structure for table `emp_sal`
--

CREATE TABLE IF NOT EXISTS `emp_sal` (
  `es_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_code` varchar(50) NOT NULL,
  `es_name` varchar(50) NOT NULL,
  `es_add` varchar(255) NOT NULL,
  `es_contact` varchar(12) NOT NULL,
  `es_doj` date NOT NULL,
  `es_desig` varchar(50) NOT NULL,
  `es_accno` varchar(20) NOT NULL,
  `es_bankname` varchar(50) NOT NULL,
  `es_panno` varchar(20) NOT NULL,
  `es_no_of_days` int(20) NOT NULL,
  `es_days_present` int(20) NOT NULL,
  `es_days_paid` int(20) NOT NULL,
  `year` int(10) NOT NULL,
  `month` int(10) NOT NULL,
  `earning` int(50) NOT NULL,
  `deduction` int(50) NOT NULL,
  `net_pay` int(50) NOT NULL,
  PRIMARY KEY (`es_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `emp_sal`
--

INSERT INTO `emp_sal` (`es_id`, `es_code`, `es_name`, `es_add`, `es_contact`, `es_doj`, `es_desig`, `es_accno`, `es_bankname`, `es_panno`, `es_no_of_days`, `es_days_present`, `es_days_paid`, `year`, `month`, `earning`, `deduction`, `net_pay`) VALUES
(1, 'WT0001', 'Kishor', 'Nashik', '9999999999', '0000-00-00', '2011-06-06', 'ICICI', 'ic1232423423', 'cfggh102131', 30, 0, 0, 0, 0, 3500, 100, 3400),
(2, 'WT0001', 'Kishor', 'Nashik', '9999999999', '0000-00-00', '2011-06-06', 'ICICI', 'ic1232423423', 'cfggh102131', 30, 28, 28, 2013, 0, 1050, 1050, 0),
(9, 'WT0001', 'Kishor', 'Nashik', '9999999999', '2011-06-06', 'Director', 'ICICI', 'ic1232423423', '1212dfdf', 31, 23, 29, 2013, 7, 5678, 87, 5591),
(11, '100', 'kishor', 'nashik', '8888884083', '2010-07-31', 'Director', 'HDFC', '123465789', 'ABCD1345D', 31, 23, 28, 2013, 7, 6500, 200, 6300);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_date` date NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_mode` varchar(25) NOT NULL,
  `e_ch` varchar(25) NOT NULL,
  `e_amt` double NOT NULL,
  `e_rmark` text NOT NULL,
  `e_vendor` int(20) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`e_id`, `e_date`, `e_name`, `e_mode`, `e_ch`, `e_amt`, `e_rmark`, `e_vendor`) VALUES
(1, '2013-07-19', 'petrol', 'By Check', '', 1000, '', 0),
(2, '2013-07-19', 'emp', 'By Check', '123456', 5000, '', 0),
(3, '2013-07-19', 'personal', 'By Check', '12345646', 5000, '', 0),
(4, '2013-07-19', 'petrol', 'By Cash', '7878', 787, '', 0),
(5, '2013-07-30', 'pen', 'By Cash', '-', 678, 'test', 454545);

-- --------------------------------------------------------

--
-- Table structure for table `gatepass`
--

CREATE TABLE IF NOT EXISTS `gatepass` (
  `pass_id` int(10) NOT NULL AUTO_INCREMENT,
  `client_id` int(10) NOT NULL,
  `tin_no` varchar(30) NOT NULL,
  `cst_no` varchar(30) NOT NULL,
  `ex_ring` varchar(30) NOT NULL,
  `ex_no` varchar(30) NOT NULL,
  `ex_div` varchar(30) NOT NULL,
  `ex_com` varchar(30) NOT NULL,
  `g_no` varchar(25) NOT NULL,
  `g_date` date NOT NULL,
  `due_date` date NOT NULL,
  `req` char(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `t_ref_no` varchar(30) NOT NULL,
  `p_name` varchar(60) NOT NULL,
  `addr` text NOT NULL,
  `mode` char(25) NOT NULL,
  `time` time NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `v_no` varchar(35) NOT NULL,
  `issue` varchar(40) NOT NULL,
  `total_qnt` int(20) NOT NULL,
  `total_amt` float NOT NULL,
  `req_by` varchar(40) NOT NULL,
  `appr_nm` varchar(20) NOT NULL,
  `date_tim` datetime NOT NULL,
  PRIMARY KEY (`pass_id`),
  UNIQUE KEY `g_no` (`g_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `gatepass`
--

INSERT INTO `gatepass` (`pass_id`, `client_id`, `tin_no`, `cst_no`, `ex_ring`, `ex_no`, `ex_div`, `ex_com`, `g_no`, `g_date`, `due_date`, `req`, `dept`, `status`, `t_ref_no`, `p_name`, `addr`, `mode`, `time`, `t_name`, `v_no`, `issue`, `total_qnt`, `total_amt`, `req_by`, `appr_nm`, `date_tim`) VALUES
(10, 5, 'RT3451', '121', '456Y56U', '2335', 'civil', 'BH23', 'PI4567', '2013-06-28', '2013-06-28', 'poonam', 'instrument', 'complete', 'MH12-3443', 'rajesh', 'try', 'by vehical', '11:04:24', 'bagha', '34534', 'paresh', 0, 0, '', 'hitesh', '2013-06-28 11:04:24'),
(11, 5, 'P123', '', '456Y56U', '2335', 'civil', '', 'A123', '2013-06-28', '2013-06-28', 'poonam', '', 'complete', 'MH12-3443', 'rajesh', 'sdsd', 'test', '12:08:54', 'dipak', 'MH11-5678', 'parakh', 0, 0, '', 'soham', '2013-06-28 12:08:54'),
(12, 3, 'RT3451', '121', '', '6666TYU', '', 'BH23', 'HI4567', '2013-07-02', '2013-07-02', 'poonam', 'instrument', 'approved', 'MH12-3443', 'rajesh', 'A/P Mylayn lab Plot no. 2 phase -3 hari vaibhav industrie', 'by vehical', '03:25:20', 'dipak', 'MH11-5678', 'parakh', 0, 0, '', 'amit', '2013-07-02 03:25:20'),
(14, 5, 'RT3451', '121', '456Y56U', '6666TYU', 'civil', 'BH23', 'Q789', '2013-06-28', '2013-06-28', 'poonam', 'civil', 'complete', 'MH12-3443', 'rajesh', 'dfgdfgdfg', 'by vehical', '04:03:56', 'bagha', '34534', 'parakh', 13, 89, 'Ramdas sangale', 'soham', '2013-06-28 12:08:54'),
(15, 3, 'RT3451', '121', '456Y56U', '6666TYU', 'civil', 'BH23', 'MA2345', '2013-07-11', '2013-07-11', 'poonam', 'instrument', 'complete', 'MH12-3443', 'rajesh', 'nashik road', 'by vehical', '10:56:48', 'bagha', 'MH11-5678', 'paresh', 19, 0, 'Ramdas sangale', 'hitesh', '2013-07-11 10:56:48'),
(16, 3, 'P123', '27640370524C', '456Y56U', '6666TYU', 'civil', 'BH23', 'NTU56784', '2013-07-11', '2013-07-11', 'poonam', 'instrument', 'complete', 'MH-12-345', 'rajesh', 'Nashik pune highway road', 'by vehical', '11:14:30', 'baghas', 'MH11-5678', 'parakh', 31, 238, 'hanuman', 'jayesh', '2013-07-11 11:14:30'),
(21, 5, 'R0678', '27640370524C', '456Y56U', '67fhgfh', 'civil', 'BH23', 'TOKIyo', '2013-12-31', '2013-12-01', 'fhgfhgf', 'civil', 'complete', 'MH12-3443', 'rajesh', 'dfgdgfdfg dfgdfg dfg', 'by vehical', '09:00:31', 'bagha', '34534', 'parakh', 10, 58, 'snega', 'ashok', '1970-01-01 00:00:00'),
(22, 3, 'RT3451', '27640370524C', '456Y56U', '6666TYU', 'civil', 'BH23', 'Tron456', '2013-07-01', '2013-07-02', 'neha', 'computer', 'complete', '', '', '', '', '09:04:34', '', '', '', 40, 206, 'rohan', 'raman', '1970-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_date` date NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_mode` varchar(25) NOT NULL,
  `p_ch` varchar(25) NOT NULL,
  `p_amt` double NOT NULL,
  `p_rmark` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`p_id`, `p_date`, `p_name`, `p_mode`, `p_ch`, `p_amt`, `p_rmark`) VALUES
(1, '2013-07-19', 'etststdsds', 'By Cash', '', 6576767, '0'),
(2, '2013-03-15', 'priya', 'By Cash', '', 7890, 'testing data'),
(3, '2014-01-19', 'dida', 'By Cash', '-', 3456, 'get togethor'),
(4, '2013-07-01', 'total expence data working realy', 'By Cash', '-', 6789, 'testdfgdf dfdfg dfgdfg'),
(5, '2014-05-01', 'testing', 'By Cash', 'ASE454546', 1590, 'goods'),
(6, '2013-05-01', 'books', 'By Check', 'ASE454546', 1590, 'goods');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_date` date NOT NULL,
  `gatepass_no` varchar(20) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_comp` varchar(50) NOT NULL,
  `q_name` varchar(25) NOT NULL,
  `q_address` varchar(100) NOT NULL,
  `q_mo` bigint(11) NOT NULL,
  `po_no` int(20) NOT NULL,
  `rgp_no` int(20) NOT NULL,
  `dc_no` int(20) NOT NULL,
  `code_no` varchar(20) NOT NULL,
  `tin_no` int(20) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `given` int(2) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`i_id`, `q_date`, `gatepass_no`, `c_id`, `c_comp`, `q_name`, `q_address`, `q_mo`, `po_no`, `rgp_no`, `dc_no`, `code_no`, `tin_no`, `date1`, `date2`, `given`) VALUES
(1, '2013-07-29', '0', 1, '5', 'reshma', 'nashik uttam nagar', 5566787654, 1023, 456, 678, '0', 3443, '2013-07-09', '2013-07-09', 2),
(3, '0000-00-00', '0', 5, 'wavetechline.com', 'reshma', 'nashik uttam nagar', 5566787654, 45689, 5678, 4563, '23321', 23345, '2013-06-11', '2013-07-03', 0),
(4, '2013-07-29', 'HI4567', 4, '3', 'pete walbort', 'us', 34343434, 8960, 761254, 75462, '12456', 1254, '2013-07-15', '2013-07-15', 1),
(5, '2013-07-16', 'HI4567', 5, '3', 'pete walbort', 'us', 34343434, 8989, 75641, 4541, '56564', 12586, '2013-06-15', '2013-07-15', 0),
(6, '2013-07-29', 'HI4567', 6, '3', 'pete walbort', 'us', 34343434, 45689, 761254, 367, '0', 12586, '2013-07-16', '2013-07-16', 1),
(7, '2013-07-29', 'PI4567', 7, '5', 'reshma', 'nashik uttam nagar', 5566787654, 8989, 5678, 4563, '-', 0, '2013-07-16', '2013-07-16', 2),
(8, '2013-07-29', 'HI4567', 8, '3', 'pete walbort', 'us', 34343434, 435456, 4564564, 45612, '746465', 456456, '2013-07-29', '2013-07-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_worksheet`
--

CREATE TABLE IF NOT EXISTS `job_worksheet` (
  `job_id` int(25) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(80) NOT NULL,
  `make` varchar(30) NOT NULL,
  `phase` varchar(15) NOT NULL,
  `rpm` int(15) NOT NULL,
  `ampere` float NOT NULL,
  `hp` float NOT NULL,
  `kw` float NOT NULL,
  `frame` varchar(40) NOT NULL,
  `sr_no` varchar(15) NOT NULL,
  `addtional_details` longtext NOT NULL,
  `slots` int(10) NOT NULL,
  `colis` varchar(25) NOT NULL,
  `pich` varchar(25) NOT NULL,
  `turn` varchar(20) NOT NULL,
  `swg` varchar(20) NOT NULL,
  `weight_of_coil` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `slots1` int(12) NOT NULL,
  `coils1` varchar(20) NOT NULL,
  `pich1` varchar(20) NOT NULL,
  `turn1` varchar(20) NOT NULL,
  `swg1` int(20) NOT NULL,
  `weight_coil1` int(20) NOT NULL,
  `total1` int(20) NOT NULL,
  `analysis_of_failure` longtext NOT NULL,
  `n_l_ampere_d` float NOT NULL,
  `n_l_ampere_y` float NOT NULL,
  `resistance_d` float NOT NULL,
  `resistance_y` float NOT NULL,
  `rotor_lock_current` float NOT NULL,
  `each_phase_current` float NOT NULL,
  `air_fan` int(10) NOT NULL,
  `fan_cover` int(10) NOT NULL,
  `d_e_bearing` int(10) NOT NULL,
  `shaft_repair` int(10) NOT NULL,
  `terminal_plate` int(10) NOT NULL,
  `terminal_box` int(10) NOT NULL,
  `nde_bearing` int(10) NOT NULL,
  `cover_repair` int(10) NOT NULL,
  `oil_seal` varchar(30) NOT NULL,
  `water_seal` int(10) NOT NULL,
  `additonal` int(10) NOT NULL,
  `stator_core_repair` int(10) NOT NULL,
  `stator_core_length` int(10) NOT NULL,
  `rotor_core_length` int(10) NOT NULL,
  `rotor_od` int(10) NOT NULL,
  `slot_dia` int(10) NOT NULL,
  `stator_dia` int(10) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job_worksheet`
--

INSERT INTO `job_worksheet` (`job_id`, `client_name`, `make`, `phase`, `rpm`, `ampere`, `hp`, `kw`, `frame`, `sr_no`, `addtional_details`, `slots`, `colis`, `pich`, `turn`, `swg`, `weight_of_coil`, `total`, `slots1`, `coils1`, `pich1`, `turn1`, `swg1`, `weight_coil1`, `total1`, `analysis_of_failure`, `n_l_ampere_d`, `n_l_ampere_y`, `resistance_d`, `resistance_y`, `rotor_lock_current`, `each_phase_current`, `air_fan`, `fan_cover`, `d_e_bearing`, `shaft_repair`, `terminal_plate`, `terminal_box`, `nde_bearing`, `cover_repair`, `oil_seal`, `water_seal`, `additonal`, `stator_core_repair`, `stator_core_length`, `rotor_core_length`, `rotor_od`, `slot_dia`, `stator_dia`) VALUES
(2, 'krist velson', 'cromtans', '3', 1234, 3, 5, 7, '-', 'AD345', '  type   ', 24, '12 1+1', '1 to 6', '118', '27', '100', '1200', 24, '12 1+1', '1 to 6', '115', 23, 200, 1500, 'crash rote ', 0, 0, 24, -12, 45, 34, 1, 2, 3, 4, 5, 6, 7, 8, '8', 1, 11, 12, 121, 13, 14, 15, 456);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(25) NOT NULL,
  `u_pass` varchar(25) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `u_name`, `u_pass`) VALUES
(1, 'rajesh', 'admin'),
(2, 'ram', 'admin');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `log_history`
--

INSERT INTO `log_history` (`l_id`, `c_name`, `login_time`, `logout_time`) VALUES
(1, 'rajesh', '2013-07-30 05:07:55', '2013-07-30 05:07:49'),
(2, 'rajesh', '2013-07-30 05:07:38', '2013-07-30 05:07:49'),
(3, 'rajesh', '2013-07-30 05:07:47', '2013-07-30 06:07:15'),
(4, 'rajesh', '2013-07-30 11:07:40', '2013-07-30 11:07:16'),
(5, 'rajesh', '2013-07-30 11:44:03', '2013-07-30 11:44:16'),
(6, 'rajesh', '2013-07-30 11:44:28', '2013-07-30 11:52:46'),
(7, 'rajesh', '2013-07-30 11:52:48', '2013-07-30 11:53:39'),
(8, 'rajesh', '2013-07-30 11:53:40', '2013-07-30 11:53:51'),
(9, 'ram', '2013-07-30 11:53:57', '0000-00-00 00:00:00'),
(10, 'rajesh', '2013-07-30 15:23:50', '0000-00-00 00:00:00'),
(11, 'rajesh', '2013-07-30 16:34:15', '0000-00-00 00:00:00'),
(12, 'rajesh', '2013-07-31 11:04:59', '2013-07-31 11:05:18'),
(13, 'rajesh', '2013-07-31 11:05:23', '2013-07-31 12:46:55'),
(14, 'rajesh', '2013-07-31 12:47:01', '2013-07-31 12:49:27'),
(15, 'ram', '2013-07-31 12:49:34', '2013-07-31 17:07:05'),
(16, 'ram', '2013-07-31 17:07:21', '2013-07-31 17:07:40'),
(17, 'rajesh', '2013-08-01 11:36:24', '2013-08-01 11:36:47'),
(18, 'rajesh', '2013-08-01 12:16:01', '0000-00-00 00:00:00'),
(19, 'rajesh', '2013-08-02 16:45:00', '2013-08-02 16:49:37'),
(20, 'rajesh', '2013-08-03 12:16:07', '0000-00-00 00:00:00'),
(21, 'rajesh', '2013-08-07 10:05:56', '0000-00-00 00:00:00'),
(22, 'rajesh', '2013-08-07 10:08:27', '0000-00-00 00:00:00'),
(23, 'rajesh', '2013-08-08 12:17:58', '0000-00-00 00:00:00'),
(24, 'rajesh', '2013-08-08 16:42:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `material_desc`
--

CREATE TABLE IF NOT EXISTS `material_desc` (
  `mat_id` int(10) NOT NULL AUTO_INCREMENT,
  `gatpas_id` varchar(30) NOT NULL,
  `client_id` int(10) NOT NULL,
  `desc_mat` text NOT NULL,
  `appl` text NOT NULL,
  `remark` varchar(50) NOT NULL,
  `quant` int(10) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`mat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `material_desc`
--

INSERT INTO `material_desc` (`mat_id`, `gatpas_id`, `client_id`, `desc_mat`, `appl`, `remark`, `quant`, `unit`, `rate`, `amount`) VALUES
(20, 'PI4567', 10, 'durbin m/c', '', '', 12, '34', 12, 0),
(21, 'PI4567', 10, 'durbin m/c', '', '', 12, '34', 12, 0),
(22, 'PI4567', 10, 'durbin m/c', '', '', 12, '34', 12, 0),
(46, 'A123', 5, 'cruzy', '', '', 67, '67', 67, 0),
(47, 'A123', 5, 'TOMY', '', '', 8, '8', 8, 0),
(48, 'A123', 5, 'rotry', '', '', 12, '9', 15, 0),
(49, 'A123', 5, 'material maching', '', '', 7, '876', 67, 0),
(50, 'A123', 5, 'rachana', '', '', 3, '45', 12, 0),
(51, 'A123', 5, 'tn', '', '', 6, '8', 7, 0),
(52, 'HI4567', 3, 'durbin m/c', '', '', 12, '2', 2, 0),
(53, 'HI4567', 5, 'telescope rotator not work', '', '', 12, 'EA', 12, 0),
(54, 'HI4567', 5, 'rotry', '', '', 67, 'KG', 78, 0),
(55, 'MA2345', 3, 'telescope rotator not work', '', '', 0, '7', 56, 0),
(56, 'MA2345', 3, 'durbin m/c', '', '', 0, '8', 7, 0),
(57, 'MA2345', 3, 'rotry', '', '', 0, '8', 7, 0),
(76, 'NTU56784', 3, 'durbin m/c', '', '', 9, 'hj', 8, 72),
(77, 'NTU56784', 3, 'mototr rewinding charger', '', '', 9, 'gh', 8, 72),
(78, 'NTU56784', 3, 'test', '', '', 8, 'gh', 8, 64),
(79, 'NTU56784', 3, 'rotry', '', '', 5, 'gh', 6, 30),
(80, 'Q789', 5, 'cruzy', 'apl', 'rtr', 5, 'yu', 5, 25),
(81, 'Q789', 5, 'durbin m/c', 'erty', 'ty', 8, 'yu', 8, 64),
(82, 'Tron456', 3, 'test tube wire', 'arpita', 'test', 6, 'kg', 6, 36);

-- --------------------------------------------------------

--
-- Table structure for table `partial_payment`
--

CREATE TABLE IF NOT EXISTS `partial_payment` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `p_mode` varchar(25) NOT NULL,
  `c_no` varchar(25) NOT NULL,
  `p_date` date NOT NULL,
  `i_amt` double NOT NULL,
  `p_amt` double NOT NULL,
  `bank_nm` varchar(40) NOT NULL,
  `remark` varchar(45) NOT NULL,
  `refno` varchar(30) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `partial_payment`
--

INSERT INTO `partial_payment` (`p_id`, `i_id`, `c_id`, `c_name`, `p_mode`, `c_no`, `p_date`, `i_amt`, `p_amt`, `bank_nm`, `remark`, `refno`) VALUES
(1, 5, 3, 'pete walbort', 'By Check', 'BNH896742', '0000-00-00', 88, 0, '', '', ''),
(2, 5, 3, 'pete walbort', 'By Check', 'BNH896742', '0000-00-00', 88, 50, 'bank of maharashtra', 'OK bill no 789', ''),
(3, 5, 3, 'pete walbort', 'By Check', 'BNH896742', '0000-00-00', 88, 50, 'bank of maharashtra', 'OK bill no 789', ''),
(4, 4, 3, 'pete walbort', 'By Cash', 'gyt56453534', '0000-00-00', 112, 78, 'bank of india', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE IF NOT EXISTS `po` (
  `po_id` int(30) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `ph_no` int(16) NOT NULL,
  `vendor` int(20) NOT NULL,
  `work_no` int(20) NOT NULL,
  `work_date` date NOT NULL,
  `val_from` date NOT NULL,
  `val_to` date NOT NULL,
  `cost_center` varchar(40) NOT NULL,
  `tax` float(10,2) NOT NULL,
  `vat` float(10,2) NOT NULL,
  `total_purches` double(15,2) NOT NULL,
  PRIMARY KEY (`po_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`po_id`, `c_name`, `address`, `ph_no`, `vendor`, `work_no`, `work_date`, `val_from`, `val_to`, `cost_center`, `tax`, `vat`, `total_purches`) VALUES
(1, '0', ' us', 223232, 567567, 567655, '0000-00-00', '2013-07-18', '2013-07-02', 'fghfgh fhgfh', 56.00, 56.00, 173.00),
(2, 'DSW', ' us', 223232, 67543, 45345, '2013-07-03', '2013-07-04', '2013-07-17', 'rt543df', 56.00, 56.00, 361.00),
(3, 'wavetechline.com', ' nashik uttam nagar', 123456, 5643, 645, '2013-07-01', '2013-07-17', '2013-07-08', '564', 0.00, 0.00, 0.00),
(4, 'wavetechline.com', ' nashik uttam nagar', 123456, 568247, 54879, '2913-06-12', '2010-07-12', '1212-12-12', 'testing', 56.00, 56.00, 162.00),
(5, 'DSW', ' us', 223232, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '', 6.00, 6.00, 322.00),
(6, 'DSW', ' us', 223232, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '', 6.00, 6.00, 322.00),
(7, 'DSW', ' us', 223232, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '', 6.00, 6.00, 322.00),
(8, 'wavetechline.com', ' nashik uttam nagar', 123456, 67543, 45345, '2014-04-17', '2013-03-05', '2013-02-05', 'pune', 3.00, 4.00, 295.00);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE IF NOT EXISTS `quotation` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `q_ref_no` varchar(25) NOT NULL,
  `q_date` date NOT NULL,
  `q_name` varchar(100) NOT NULL,
  `q_address` varchar(100) NOT NULL,
  `q_pass` varchar(100) NOT NULL,
  `q_mo` bigint(11) NOT NULL,
  `q_mail` varchar(50) NOT NULL,
  `q_vendor_no` varchar(15) NOT NULL,
  `q_sub` text NOT NULL,
  `q_fax` varchar(20) NOT NULL,
  `q_trans` decimal(10,2) NOT NULL,
  `q_tax` int(1) NOT NULL DEFAULT '0',
  `a_total` decimal(30,0) NOT NULL,
  `a_failure` text NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`q_id`, `c_id`, `q_ref_no`, `q_date`, `q_name`, `q_address`, `q_pass`, `q_mo`, `q_mail`, `q_vendor_no`, `q_sub`, `q_fax`, `q_trans`, `q_tax`, `a_total`, `a_failure`) VALUES
(5, 5, 'AQR1234/WER', '0000-00-00', 'reshma', 'nashik uttam nagar', 'A123', 5566787654, 'wavetechline@gmail.com', '0', 'Quatation For AC MOTOR REwinding & repairing', '02132-2556677', '0.00', 0, '0', ''),
(8, 5, 'DTE56-UI78ASDRET', '0000-00-00', 'reshma', 'nashik uttam nagar', 'A123', 5566787654, 'purank@gmail.xom', '345632', 'port at won the leak', '03452-256789', '0.00', 0, '0', ''),
(21, 5, 'DTE56-UI78ASDRET', '0000-00-00', 'reshma', 'nashik uttam nagar', '0', 5566787654, '', '20005651', 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '0.00', 0, '0', ''),
(22, 5, 'DTE56-UI78ASDRET', '0000-00-00', 'reshma', 'nashik uttam nagar', 'A123', 5566787654, 'nashik uttam nagar', '20005651', 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '0.00', 0, '0', ''),
(23, 5, 'DTE56-UI78ASDRET', '0000-00-00', 'reshma', 'nashik uttam nagar', '0', 5566787654, 'nashik uttam nagar', '20005651', 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '0.00', 0, '0', ''),
(24, 5, 'DTE56-UI78ASDRET', '0000-00-00', 'reshma', 'nashik uttam nagar', '0', 5566787654, 'wavetechline@gmail.com', '20005651', 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '89.00', 0, '0', ''),
(25, 5, 'ABC56-UI78ASDRET', '0000-00-00', 'reshma', 'nashik uttam nagar', 'PI4567', 5566787654, 'wavetechline@gmail.com', '20898989', 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '19.00', 1, '0', ''),
(26, 5, 'OPE.SNR/45-14/MLL-67', '0000-00-00', 'reshma', 'nashik uttam nagar', 'A123', 5566787654, 'wavetechline@gmail.com', '457831', 'port at won the leak', '03452-256789', '56.00', 2, '0', ''),
(27, 5, 'OPE.SNR/45-14/MLL-67', '2013-03-04', 'reshma', 'nashik uttam nagar', '', 5566787654, 'wavetechline@gmail.com', '454545', 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '56.00', 1, '0', 'ertt ertert ert'),
(28, 3, 'REW.SNR/13-14/MLL-', '2013-07-10', 'pete walbort', 'us', '', 34343434, 'sneha@gmail.com', '78786', 'rtiu', '67676', '7876.00', 1, '0', 'testing data report');

-- --------------------------------------------------------

--
-- Table structure for table `reciept`
--

CREATE TABLE IF NOT EXISTS `reciept` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(10) NOT NULL,
  `r_date` date NOT NULL,
  `c_id` int(11) NOT NULL,
  `r_name` varchar(25) NOT NULL,
  `r_address` varchar(100) NOT NULL,
  `po_no` int(20) NOT NULL,
  `rgp_no` int(20) NOT NULL,
  `code_no` varchar(20) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `reciept`
--

INSERT INTO `reciept` (`r_id`, `i_id`, `r_date`, `c_id`, `r_name`, `r_address`, `po_no`, `rgp_no`, `code_no`, `date1`, `date2`) VALUES
(1, 3, '2013-07-17', 0, 'reshma', 'nashik uttam nagar', 45689, 5678, '454545', '2013-06-11', '2013-07-03'),
(2, 3, '2013-07-17', 0, 'reshma', 'nashik uttam nagar', 45689, 5678, '454545', '2013-06-11', '2013-07-03'),
(3, 4, '2013-07-17', 0, 'pete walbort', 'us', 8960, 761254, '56564', '2013-07-13', '2013-07-15'),
(4, 5, '2013-07-17', 5, 'pete walbort', 'us', 8989, 75641, '56564', '2013-06-15', '2013-07-15'),
(5, 7, '2013-07-17', 5, 'reshma', 'nashik uttam nagar', 8989, 5678, '-', '2013-07-16', '2013-07-16'),
(6, 6, '2013-07-17', 3, 'pete walbort', 'us', 45689, 761254, '454545', '2013-07-16', '2013-07-16'),
(7, 8, '1970-01-01', 8, 'pete walbort', 'us', 435456, 4564564, '', '1970-01-01', '2013-07-29'),
(8, 8, '1970-01-01', 8, 'pete walbort', 'us', 435456, 4564564, '', '2013-12-31', '2013-07-29'),
(9, 8, '2013-07-17', 8, 'pete walbort', 'us', 435456, 4564564, '457831', '2013-07-11', '2013-07-29'),
(10, 3, '1970-01-01', 5, 'reshma', 'nashik uttam nagar', 45689, 5678, '23321', '1970-01-01', '2013-07-03'),
(11, 3, '2013-07-30', 5, 'reshma', 'nashik uttam nagar', 45689, 5678, '23321', '2013-06-11', '2013-07-03'),
(12, 1, '2013-07-30', 1, 'reshma', 'nashik uttam nagar', 1023, 456, '0', '2013-07-09', '2013-07-09'),
(13, 3, '2013-07-30', 5, 'reshma', 'nashik uttam nagar', 45689, 5678, '23321', '2013-06-11', '2013-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `service_tax`
--

CREATE TABLE IF NOT EXISTS `service_tax` (
  `s_id` int(20) NOT NULL AUTO_INCREMENT,
  `s_id1` varchar(20) NOT NULL,
  `details` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `service_tax`
--

INSERT INTO `service_tax` (`s_id`, `s_id1`, `details`) VALUES
(1, '1', '70% COMPOSITION SCHEME OF SERVICE TAX UNDER ST NOTIFICATION NO. 24-2012 WEF.06 JUNE 2012'),
(2, '2', 'SERVICE TAX AGAINST REVERSE CHARGE MECHANISM UNDER ST NOTIFICATION NO. 30-2012 WEF.20 JUNE 2012'),
(3, 'A', 'VAT/TIN NUMBER:-27900789615 V,W.E.F 27.08.2010'),
(4, 'B', 'CST/TIN NUMBER:-27900789615 C,W.E.F 27.08.2010'),
(5, 'C', 'SERVICE TAX NUMBER:-AMEPM1485HSD001'),
(6, 'D', 'LBT NUMBER:-NSK101496'),
(7, 'E', 'PAN NUMBER:-AMEPM1485H');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `st_id` int(15) NOT NULL AUTO_INCREMENT,
  `avail_id` varchar(13) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `st_category` varchar(30) NOT NULL,
  `quantity` float NOT NULL,
  `suplier_name` varchar(30) NOT NULL,
  `st_date` datetime NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`st_id`, `avail_id`, `st_name`, `st_category`, `quantity`, `suplier_name`, `st_date`) VALUES
(6, '3', 'copper red wire ', 'electrics', 21, 'sunil', '2013-07-05 04:37:17'),
(7, 'PQR#$', 'silicon wire', 'electric', 21, 'gadha', '2013-07-08 03:16:40'),
(8, 'WE34', 'oil', 'liquids', 5667, 'pawan', '2013-07-26 10:08:19'),
(9, '', '', '', 0, '', '2013-07-27 10:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `sub_invoice`
--

CREATE TABLE IF NOT EXISTS `sub_invoice` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(11) NOT NULL,
  `des` text NOT NULL,
  `quantity` decimal(25,2) NOT NULL,
  `rate` decimal(25,2) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `sub_invoice`
--

INSERT INTO `sub_invoice` (`s_id`, `i_id`, `des`, `quantity`, `rate`, `total`) VALUES
(6, 3, 'telescope rotator not work', '34.00', '67.00', 2278),
(7, 3, 'mototr rewinding charger', '2.00', '78.00', 156),
(8, 3, 'rotor', '5.00', '67.00', 335),
(22, 5, 'durbin m/c', '5.00', '6.00', 30),
(23, 5, 'material maching', '2.00', '1.00', 2),
(24, 5, 'mototr rewinding charger', '7.00', '8.00', 56),
(28, 8, '', '0.00', '0.00', 0),
(29, 7, 'rotry', '6.00', '6.00', 36),
(30, 6, '', '0.00', '0.00', 0),
(31, 4, 'mototr rewinding charger', '4.00', '5.00', 20),
(32, 4, 'mototr rewinding charger', '6.00', '7.00', 42),
(33, 4, 'mototr rewinding charger', '4.00', '5.00', 20),
(34, 4, 'turbo electric wire', '5.00', '6.00', 30),
(35, 1, 'durbin m/c', '896.00', '12.00', 10752),
(36, 1, 'mototr rewinding charger', '765.00', '67.00', 51255);

-- --------------------------------------------------------

--
-- Table structure for table `sub_quotation`
--

CREATE TABLE IF NOT EXISTS `sub_quotation` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL,
  `less` int(2) NOT NULL DEFAULT '0',
  `des` text NOT NULL,
  `quantity` decimal(11,2) NOT NULL,
  `rate` decimal(11,2) NOT NULL,
  `Amount` decimal(11,2) NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `sub_quotation`
--

INSERT INTO `sub_quotation` (`s_id`, `q_id`, `less`, `des`, `quantity`, `rate`, `Amount`, `total`) VALUES
(68, 25, 1, 'less', '6.00', '6.00', '36.00', 0),
(69, 25, 0, 'turbo electric wire', '45.00', '2.00', '90.00', 0),
(70, 25, 0, 'jet king', '45.00', '1.00', '45.00', 0),
(81, 26, 0, 'material maching', '2.00', '23.00', '46.00', 0),
(82, 26, 0, 'rotry', '1.00', '45.00', '45.00', 0),
(96, 28, 0, 'rty try', '6.00', '6.00', '36.00', 0),
(97, 27, 0, 'mototr rewinding charger', '6.00', '5.00', '30.00', 0),
(98, 27, 0, 'material maching', '6.00', '7.00', '42.00', 0),
(99, 27, 0, 'ert', '5.00', '5.00', '25.00', 0),
(100, 27, 0, 'ert', '5.00', '5.00', '25.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_reciept`
--

CREATE TABLE IF NOT EXISTS `sub_reciept` (
  `rd_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_id` int(11) NOT NULL,
  `des` text NOT NULL,
  `quantity` decimal(25,2) NOT NULL,
  `rate` decimal(25,2) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`rd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `sub_reciept`
--

INSERT INTO `sub_reciept` (`rd_id`, `r_id`, `des`, `quantity`, `rate`, `total`) VALUES
(1, 2, 'telescope rotator not work', '34.00', '67.00', 2278),
(2, 2, 'mototr rewinding charger', '2.00', '78.00', 156),
(3, 2, 'rotor', '5.00', '67.00', 335),
(4, 3, 'mototr rewinding charger', '4.00', '5.00', 20),
(5, 3, 'mototr rewinding charger', '6.00', '7.00', 42),
(6, 3, 'mototr rewinding charger', '4.00', '5.00', 20),
(7, 3, 'turbo electric wire', '5.00', '6.00', 30),
(8, 4, 'durbin m/c', '5.00', '6.00', 30),
(9, 4, 'material maching', '2.00', '1.00', 2),
(10, 4, 'mototr rewinding charger', '7.00', '8.00', 56),
(11, 5, 'rotry', '6.00', '6.00', 36),
(12, 6, 'test', '22.00', '2.00', 44),
(13, 7, '', '0.00', '0.00', 0),
(14, 8, '', '0.00', '0.00', 0),
(15, 9, '', '0.00', '0.00', 0),
(16, 10, 'telescope rotator not work', '34.00', '67.00', 2278),
(17, 10, 'mototr rewinding charger', '2.00', '78.00', 156),
(18, 10, 'rotor', '5.00', '67.00', 335),
(19, 11, 'telescope rotator not work', '34.00', '67.00', 2278),
(20, 11, 'mototr rewinding charger', '2.00', '78.00', 156),
(21, 11, 'rotor', '5.00', '67.00', 335),
(22, 12, 'durbin m/c', '896.00', '12.00', 10752),
(23, 12, 'mototr rewinding charger', '765.00', '67.00', 51255),
(24, 13, 'telescope rotator not work', '34.00', '67.00', 2278),
(25, 13, 'mototr rewinding charger', '2.00', '78.00', 156),
(26, 13, 'rotor', '5.00', '67.00', 335);

-- --------------------------------------------------------

--
-- Table structure for table `sub_salary`
--

CREATE TABLE IF NOT EXISTS `sub_salary` (
  `sal_id` int(20) NOT NULL AUTO_INCREMENT,
  `sal_code` int(50) NOT NULL,
  `e_desc` text NOT NULL,
  `e_amt` float(20,2) NOT NULL,
  `d_desc` text NOT NULL,
  `d_amt` float(20,2) NOT NULL,
  PRIMARY KEY (`sal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sub_salary`
--

INSERT INTO `sub_salary` (`sal_id`, `sal_code`, `e_desc`, `e_amt`, `d_desc`, `d_amt`) VALUES
(4, 6, 'basic', 6500.00, 'tax', 200.00),
(5, 6, 'HRA', 1000.00, '', 0.00),
(6, 6, 'Travel Allowance', 500.00, '', 0.00),
(11, 9, 'basic', 5678.00, 'tax', 87.00),
(15, 11, 'basic', 6500.00, 'tax', 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `sub_service`
--

CREATE TABLE IF NOT EXISTS `sub_service` (
  `sr_no` int(30) NOT NULL AUTO_INCREMENT,
  `po_id` int(20) NOT NULL,
  `serv_no` int(30) NOT NULL,
  `serv_desc` varchar(50) NOT NULL,
  `uom` varchar(60) NOT NULL,
  `qnt` float(10,2) NOT NULL,
  `rate` float(10,2) NOT NULL,
  `val` float(10,2) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sub_service`
--

INSERT INTO `sub_service` (`sr_no`, `po_id`, `serv_no`, `serv_desc`, `uom`, `qnt`, `rate`, `val`) VALUES
(1, 1, 56, 'ghffhfh', 'rty', 5.00, 5.00, 25.00),
(2, 1, 89, 'dfg dfg', '456', 6.00, 6.00, 36.00),
(3, 2, 456456, 'ryr rtyr', 'rfgh', 5.00, 55.00, 275.00),
(4, 2, 456456, ' rtyrty', 'fgh', 5.00, 5.00, 25.00),
(5, 3, 0, '', '', 0.00, 0.00, 0.00),
(6, 4, 0, 'test record', 'kg', 5.00, 5.00, 25.00),
(7, 4, 0, 'test rec2', 'km', 5.00, 5.00, 25.00),
(8, 7, 8989, 'yu fgh', 'ty', 56.00, 5.00, 280.00),
(9, 8, 123, 'testing data voltanatly', 'test', 12.00, 12.00, 144.00),
(10, 8, 124, 'renaming data', 'tot', 12.00, 12.00, 144.00);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id1` varchar(10) NOT NULL,
  `t_term` varchar(200) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`t_id`, `t_id1`, `t_term`) VALUES
(1, 'A', 'payment Terms: with in 30days from the dateof our supply.'),
(2, 'B', '<b>Guaranty</b> : Gurrranty period 06 monts on rewinding items from  the date of delivery'),
(3, 'C', 'Service Tax  :- Service Tax 12.00% On 70% of the SUB TOTAL'),
(4, 'D', 'VAT/Sales Tax:-VAT 5% on Raw Material of the SUB TOTAL'),
(5, 'E', 'TDS :-As per rule'),
(6, 'F', 'Scrap:-The above prices are consider with scrap copper value'),
(7, 'G', 'Spare Parts:-The additional cost for spares will quote after opening the motor'),
(8, 'H', 'Mechanical:-The additional cost for mechanical ,Machining Job work a qoute will provide after opening the motor'),
(9, 'I', 'Additional:-Other than these a quotation will provide seperatly as per actual condition of the motor'),
(10, 'J', 'Transportation:-By us on payable basis'),
(11, 'K', 'No Guaranty On Overhaul Items,Spare Parts & Portable Hand Tools Eg...Hand Drill,Hand Grinder,Cutter Machine etc.'),
(12, 'L', 'Test Certificate of the each repaired motor will be provided at the time of delivery'),
(13, 'M', 'Actual Prices will quote after dismentling the Motor'),
(14, 'N', 'Repairing time of the motor will depends on spare parts availability.min 12 days and max 28 days '),
(15, 'O', 'We are not Responsible for any damages for winding related items.Which is sent by you for only Overhauling, Varnishing, Bearing replacement etc job work');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `v_id` int(10) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(40) NOT NULL,
  `v_contact` bigint(20) NOT NULL,
  `v_code` int(20) NOT NULL,
  `v_addr` text NOT NULL,
  `v_mail` varchar(35) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`v_id`, `v_name`, `v_contact`, `v_code`, `v_addr`, `v_mail`) VALUES
(1, 'rupali', 754528963, 454545, 'pune maniya road pimpri', 'gatar@gmail.com'),
(3, 'rahol', 8842517441, 457831, 'Pune hawada highway bridge', 'gata.mulr@gmail.com'),
(4, 'sneha', 9960235815, 56564, 'Narayangoan Warulwadi tal junnar dist pune', 'sneha@wavetechline.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
