-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 04:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chitty`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apayment`
--

CREATE TABLE `tbl_apayment` (
  `ap_id` int(11) NOT NULL,
  `cust_ch_id` int(11) NOT NULL,
  `ap_date` date NOT NULL,
  `s_id` int(11) NOT NULL,
  `surety_name` varchar(40) NOT NULL,
  `surety_add` varchar(40) NOT NULL,
  `ap_amount` int(11) NOT NULL,
  `v_no` int(11) NOT NULL,
  `cheq_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auction`
--

CREATE TABLE `tbl_auction` (
  `a_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `cust_ch_id` int(11) NOT NULL,
  `a_winner` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chittreg`
--

CREATE TABLE `tbl_chittreg` (
  `c_id` int(11) NOT NULL,
  `chitt_name` varchar(35) NOT NULL,
  `installment` int(11) NOT NULL,
  `s_date` date NOT NULL,
  `divisions` int(11) NOT NULL,
  `chitt_amount` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chittypayment`
--

CREATE TABLE `tbl_chittypayment` (
  `p_id` int(11) NOT NULL,
  `cust_ch_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `install_no` int(11) NOT NULL,
  `chitt_amount` int(11) NOT NULL,
  `dividend` int(11) NOT NULL,
  `interest` int(11) NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_custchitty`
--

CREATE TABLE `tbl_custchitty` (
  `cust_ch_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cust_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `c_name` varchar(35) NOT NULL,
  `c_gender` varchar(35) NOT NULL,
  `c_address` varchar(40) NOT NULL,
  `c_mob` int(11) NOT NULL,
  `c_email` varchar(35) NOT NULL,
  `pan` varchar(25) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `feedback` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `log_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_name` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`log_id`, `role_id`, `user_name`, `password`, `status`) VALUES
(1, 1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lot`
--

CREATE TABLE `tbl_lot` (
  `lot_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `cust_ch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_month`
--

CREATE TABLE `tbl_month` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'staff'),
(3, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE `tbl_salary` (
  `sal_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `ta` int(11) NOT NULL,
  `commission` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `leave_cut` int(11) NOT NULL,
  `s_date` date NOT NULL,
  `salary` int(11) NOT NULL,
  `g_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  `gender` varchar(35) NOT NULL,
  `S_address` varchar(65) NOT NULL,
  `s_mob` int(11) NOT NULL,
  `dob` date NOT NULL,
  `s_email` varchar(35) NOT NULL,
  `doj` date NOT NULL,
  `log_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apayment`
--
ALTER TABLE `tbl_apayment`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `tbl_auction`
--
ALTER TABLE `tbl_auction`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_chittreg`
--
ALTER TABLE `tbl_chittreg`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_chittypayment`
--
ALTER TABLE `tbl_chittypayment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_custchitty`
--
ALTER TABLE `tbl_custchitty`
  ADD PRIMARY KEY (`cust_ch_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tbl_lot`
--
ALTER TABLE `tbl_lot`
  ADD PRIMARY KEY (`lot_id`);

--
-- Indexes for table `tbl_month`
--
ALTER TABLE `tbl_month`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD PRIMARY KEY (`sal_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apayment`
--
ALTER TABLE `tbl_apayment`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_auction`
--
ALTER TABLE `tbl_auction`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_chittreg`
--
ALTER TABLE `tbl_chittreg`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_chittypayment`
--
ALTER TABLE `tbl_chittypayment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_custchitty`
--
ALTER TABLE `tbl_custchitty`
  MODIFY `cust_ch_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_lot`
--
ALTER TABLE `tbl_lot`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_month`
--
ALTER TABLE `tbl_month`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  MODIFY `sal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_apayment`
--
ALTER TABLE `tbl_apayment`
  ADD CONSTRAINT `forignkey` FOREIGN KEY (`ap_id`) REFERENCES `tbl_staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_auction`
--
ALTER TABLE `tbl_auction`
  ADD CONSTRAINT `tbl_auction_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `tbl_custchitty` (`cust_ch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_chittypayment`
--
ALTER TABLE `tbl_chittypayment`
  ADD CONSTRAINT `tbl_chittypayment_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_custchitty`
--
ALTER TABLE `tbl_custchitty`
  ADD CONSTRAINT `forign` FOREIGN KEY (`cust_ch_id`) REFERENCES `tbl_customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`cust_id`) REFERENCES `tbl_login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `forign key` FOREIGN KEY (`f_id`) REFERENCES `tbl_customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `tbl_login_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`role_id`);

--
-- Constraints for table `tbl_lot`
--
ALTER TABLE `tbl_lot`
  ADD CONSTRAINT `tbl_lot_ibfk_1` FOREIGN KEY (`lot_id`) REFERENCES `tbl_custchitty` (`cust_ch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD CONSTRAINT `tbl_salary_ibfk_1` FOREIGN KEY (`sal_id`) REFERENCES `tbl_staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD CONSTRAINT `tbl_staff_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `tbl_login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
