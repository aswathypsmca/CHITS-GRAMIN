-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 07:45 AM
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
  `divisions` int(11) NOT NULL,
  `chitt_amount` varchar(55) NOT NULL,
  `s_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chittreg`
--

INSERT INTO `tbl_chittreg` (`c_id`, `chitt_name`, `installment`, `divisions`, `chitt_amount`, `s_date`, `status`) VALUES
(1, 'Muthoot', 30, 2, '60000', '2017-09-09', 0),
(4, 'GOLD', 25, 4, '100000', '2017-09-14', 0),
(5, 'SILVER', 10, 2, '10000', '2017-07-07', 0),
(6, 'platinum', 20, 2, '50000', '2017-09-07', 0);

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
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_custchitty`
--

INSERT INTO `tbl_custchitty` (`cust_ch_id`, `c_id`, `cust_id`, `status`) VALUES
(6, 1, 9, 0),
(11, 8, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cust_id` int(11) NOT NULL,
  `c_name` varchar(35) NOT NULL,
  `c_gender` varchar(35) NOT NULL,
  `c_address` varchar(40) NOT NULL,
  `c_mob` varchar(25) NOT NULL,
  `c_email` varchar(35) NOT NULL,
  `pan` varchar(25) NOT NULL,
  `log_id` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `c_name`, `c_gender`, `c_address`, `c_mob`, `c_email`, `pan`, `log_id`, `status`) VALUES
(6, 'Divya', 'female', 'Dillayil', '9946290860', 'divya@gmail.com', 'BMEPA9469A', 0, 1),
(8, 'Hari krishnan', 'male', 'valancheri', '9625864550', 'hari@gmail.com', 'BMEPA9469C', 1, 1),
(9, 'geethu', 'female', 'gokulam', '9946290860', 'geethu@gmail.com', 'BMEPB9498s', 0, 1),
(10, 'Angha mathew', 'female', 'vagayil', '9625864550', 'anagha@gmail.com', 'BMEPB9458S', 0, 1),
(11, 'Akhil joy', 'male', 'puthedathu', '9469854210', 'akhil@gmail.com', 'BMEPA9469E', 0, 2),
(15, 'linta', 'female', 'luluvil', '9946290860', 'linta@gmail.com', 'BMEPA1149A', 0, 1);

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
(1, 1, 'admin', 'admin', 1),
(3, 2, 'jibin@mca.ajce.in', 'd_a!ft$7', 1),
(4, 2, 'kunjumon@mca.ajce.in', '4Zw)(s3e', 0),
(6, 2, 'priya@gmail.com', 'cDBZC4Lq', 1),
(8, 2, 'sree@gmail.com', '$4,0yU(X', 1),
(9, 2, 'meenu@gmail.com', 'a%Kpb6j9', 0),
(10, 2, 'silla@mca.ajce.in', '#j+v)nW2', 1),
(11, 2, 'revathy@gmail.com', '123', 1),
(15, 2, 'aswathyps000@gmail.com', '@Rj7vdIT', 0),
(17, 2, 'aiswaryavs@mca.ajce.in', '123', 1),
(18, 3, 'aishu@gmail.com', 'aishu', 1),
(20, 2, 'nithya@gmail.com', 'mEb,zAUv', 1),
(33, 2, 'james@gmail.com', 'gGK7q8?m', 0),
(42, 2, 'anusree@gmail.com', '?2d8^XR;', 0),
(46, 2, 'mini@gmail.com', 'b?$Vc@!#', 1),
(47, 2, 'aryacn96@gmail.com', '1234', 1),
(48, 3, 'divya@gmail.com', 'IFDPpmah', 1),
(49, 2, 'binty@gmail.com', '=W#LRK?N', 0),
(50, 3, 'soumya@gmail.com', '$ih@9PAz', 0),
(51, 3, 'hari@gmail.com', 'd%4G.!ej', 1),
(52, 3, 'geethu@gmail.com', 'Npv&I)sM', 1),
(53, 3, 'anagha@gmail.com', 'l^:47Sx-', 0),
(54, 3, 'akhil@gmail.com', '@8e%o46F', 1),
(56, 2, 'sruthy@gmail.com', 'sruthy', 1),
(57, 3, 'abel@gmail.com', 'agHFG;^u', 1),
(58, 3, 'joslin@gmail.com', 'gT6S-7cO', 0),
(60, 3, 'linta@gmail.com', '#z,9hY)_', 1),
(61, 3, 'arun@gmail.com', '60*P-q9;', 0),
(62, 2, 'christina@gmail.com', '?OU(WRy6', 1),
(63, 2, 'bainu@gmail.com', '8cnui6s!', 1),
(64, 3, 'amruth@gmail.com', 'N;O.!rdW', 1),
(65, 3, 'anupama@gmail.com', '@Df(_4H-', 0);

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
  `s_name` varchar(45) NOT NULL,
  `s_gender` varchar(35) NOT NULL,
  `s_address` varchar(40) NOT NULL,
  `s_mob` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `s_email` varchar(25) NOT NULL,
  `doj` date NOT NULL,
  `log_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`s_id`, `s_name`, `s_gender`, `s_address`, `s_mob`, `dob`, `s_email`, `doj`, `log_id`) VALUES
(20, 'ammu', 'female', 'ambatu', '2147483647', '1990-02-01', 'ammu@gmail.com', '2017-01-09', 1),
(21, 'meenu', 'female', 'mannatu', '2147483647', '1985-11-20', 'meenu@gmail.com', '2017-09-01', 1),
(23, 'thushara', 'female', 'sreevilasam', '2147483647', '1989-02-07', 'thush000@gmail.com', '2017-08-16', 1),
(34, 'jibin', 'male', 'puthyaparampu', '2147483647', '1995-02-02', 'jibin@mca.ajce.in', '2017-08-03', 1),
(35, 'kunjumon', 'male', 'pallikunnel(h)vengathanam po,palapra', '2147483647', '1982-02-03', 'kunjumon@mca.ajce.in', '2017-08-03', 1),
(37, 'priya mol', 'female', 'palarivattom', '2147483647', '2017-09-06', 'priya@gmail.com', '2017-09-06', 1),
(38, 'sreeja', 'female', 'bbbbbbbb', '2147483647', '1951-02-07', 'sree@gmail.com', '2017-09-05', 1),
(39, 'silla', 'female', 'pulkunne', '2147483647', '1989-01-03', 'silla@mca.ajce.in', '2017-06-14', 1),
(42, 'Aishwarya vs', 'female', 'vellapallil', '2147483647', '1982-01-06', 'aiswaryavs@mca.ajce.in', '2017-02-08', 1),
(44, 'nithya', 'female', 'nirapara', '2147483647', '1995-02-01', 'nithya@gmail.com', '2017-09-26', 1),
(65, 'anusree ps', 'female', 'parackal', '2147483647', '1984-02-09', 'anusree@gmail.com', '2017-09-06', 1),
(67, 'devanad', 'male', 'nandanam', '9496588971', '1982-02-04', 'aswathyps000@gmail.com', '2017-09-08', 1),
(70, 'mini', 'female', 'mannatu', '9496588971', '1966-02-02', 'mini@gmail.com', '2017-09-06', 1),
(71, 'Arya cn', 'female', 'parayil', '9496080644', '1964-02-13', 'aryacn96@gmail.com', '2017-06-14', 1),
(72, 'Binty mol ', 'female', 'puthyaparampu', '9496070860', '1975-05-06', 'binty@gmail.com', '2017-07-07', 1),
(73, 'sruthy', 'female', 'neerackal', '9496070860', '1972-02-09', 'sruthy@gmail.com', '2017-09-21', 1),
(74, 'Christina alex', 'female', 'parasseril', '9496584512', '1977-02-11', 'christina@gmail.com', '2017-10-05', 1),
(75, 'Bainu', 'female', 'murikasery', '9496254812', '1979-01-12', 'bainu@gmail.com', '2017-10-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff1`
--

CREATE TABLE `tbl_staff1` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  `gender` varchar(35) NOT NULL,
  `S_address` varchar(65) NOT NULL,
  `s_mob` int(11) NOT NULL,
  `dob` date NOT NULL,
  `s_email` varchar(35) NOT NULL,
  `doj` date NOT NULL,
  `status` int(11) NOT NULL,
  `log_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_staff1`
--

INSERT INTO `tbl_staff1` (`s_id`, `s_name`, `gender`, `S_address`, `s_mob`, `dob`, `s_email`, `doj`, `status`, `log_id`) VALUES
(1, 'rwe', 'male', 'rter', 0, '2017-08-09', 'aswathyps000@gmail.com', '2017-08-14', 0, 0);

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
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `c_email` (`c_email`);

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
  ADD UNIQUE KEY `user_name` (`user_name`),
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
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_email` (`s_email`),
  ADD KEY `log_id` (`log_id`);

--
-- Indexes for table `tbl_staff1`
--
ALTER TABLE `tbl_staff1`
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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_chittypayment`
--
ALTER TABLE `tbl_chittypayment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_custchitty`
--
ALTER TABLE `tbl_custchitty`
  MODIFY `cust_ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
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
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `tbl_staff1`
--
ALTER TABLE `tbl_staff1`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_apayment`
--
ALTER TABLE `tbl_apayment`
  ADD CONSTRAINT `forignkey` FOREIGN KEY (`ap_id`) REFERENCES `tbl_staff1` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_auction`
--
ALTER TABLE `tbl_auction`
  ADD CONSTRAINT `tbl_auction_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `tbl_custchitty` (`cust_ch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_chittypayment`
--
ALTER TABLE `tbl_chittypayment`
  ADD CONSTRAINT `tbl_chittypayment_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_staff1` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `tbl_salary_ibfk_1` FOREIGN KEY (`sal_id`) REFERENCES `tbl_staff1` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD CONSTRAINT `tbl_staff_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `tbl_login` (`log_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
