-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 07:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_one`
--

CREATE TABLE `customer_one` (
  `Id` int(100) NOT NULL,
  `status` varchar(150) NOT NULL,
  `m_status` varchar(150) NOT NULL,
  `M_report` varchar(150) NOT NULL,
  `one` varchar(150) NOT NULL,
  `two` varchar(150) NOT NULL,
  `three` varchar(150) NOT NULL,
  `four` varchar(150) NOT NULL,
  `five` varchar(150) NOT NULL,
  `six` varchar(150) NOT NULL,
  `seven` varchar(150) NOT NULL,
  `eight` varchar(150) NOT NULL,
  `nine` varchar(150) NOT NULL,
  `ten` varchar(150) NOT NULL,
  `eleven` varchar(150) NOT NULL,
  `twelve` varchar(150) NOT NULL,
  `thirteen` varchar(150) NOT NULL,
  `fourteen` varchar(150) NOT NULL,
  `fifteen` varchar(150) NOT NULL,
  `sixteen` varchar(150) NOT NULL,
  `seventeen` varchar(150) NOT NULL,
  `eighteen` varchar(150) NOT NULL,
  `nineteen` varchar(150) NOT NULL,
  `twenty` varchar(150) NOT NULL,
  `twenty_one` varchar(150) NOT NULL,
  `twenty_two` varchar(150) NOT NULL,
  `twenty_three` varchar(150) NOT NULL,
  `twenty_four` varchar(150) NOT NULL,
  `twenty_five` varchar(150) NOT NULL,
  `twenty_six` varchar(150) NOT NULL,
  `twenty_seven` varchar(150) NOT NULL,
  `twenty_eight` varchar(150) NOT NULL,
  `twenty_nine` varchar(150) NOT NULL,
  `thirty` varchar(150) NOT NULL,
  `thirty_one` varchar(150) NOT NULL,
  `thirty_two` varchar(150) NOT NULL,
  `thirty_three` varchar(150) NOT NULL,
  `thirty_four` varchar(150) NOT NULL,
  `thirty_five` varchar(150) NOT NULL,
  `thirty_six` varchar(150) NOT NULL,
  `thirty_seven` varchar(150) NOT NULL,
  `thirty_eight` varchar(150) NOT NULL,
  `thirty_nine` varchar(150) NOT NULL,
  `forty` varchar(150) NOT NULL,
  `forty_one` varchar(150) NOT NULL,
  `forty_two` varchar(150) NOT NULL,
  `forty_three` varchar(150) NOT NULL,
  `forty_four` varchar(150) NOT NULL,
  `forty_five` varchar(150) NOT NULL,
  `forty_six` varchar(150) NOT NULL,
  `forty_seven` varchar(150) NOT NULL,
  `forty_eight` varchar(150) NOT NULL,
  `forty_nine` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_one`
--

INSERT INTO `customer_one` (`Id`, `status`, `m_status`, `M_report`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `twenty_one`, `twenty_two`, `twenty_three`, `twenty_four`, `twenty_five`, `twenty_six`, `twenty_seven`, `twenty_eight`, `twenty_nine`, `thirty`, `thirty_one`, `thirty_two`, `thirty_three`, `thirty_four`, `thirty_five`, `thirty_six`, `thirty_seven`, `thirty_eight`, `thirty_nine`, `forty`, `forty_one`, `forty_two`, `forty_three`, `forty_four`, `forty_five`, `forty_six`, `forty_seven`, `forty_eight`, `forty_nine`) VALUES
(2, 'Accepted', 'Accepted', 'No', '546546', '7567', 'ertyrt', 'rtyrtuy', 'Abid Hasan', 'rtuyrt', 'urturt', 'dfgf', 'dfhg', 'dhdfh', 'dh', 'fghfd', 'dhrty', 'ryr', 'rtyry', 'asan@gmail.com', 'yhtryhtr', 'tyutyu', 'jhfg', 'dfhfg', 'fgujhfg', 'fgjg', 'uj', 'fgjhfg', 'futy', 'tryhfg', 'fghfg', 'dfghgf', 'fguuy', 'asan@gmail.com', 'fghfgh', 'dfghgfh', 'rtdutrfu', 'rtuh', 'dhtrtf', 'dxfhrft', 'dhrftg', 'dhytg', 'yhusy', 'dyh', 'dyd', 'dyrtf', 'asan@gmail.com', '', '', 'ABC Bank', 'Dhaka', '54654654564', '54545'),
(3, 'Pending', 'Pending', 'Account Invalid', '12-08-2023', 'Cash', '43543533', '4353453', 'MD Arafat Tk', 'Kamal', 'Rojina', '12-08-2021', 'Male', 'Bangladesh', 'Dhaka', '015545646556', '54454', 'Uttara', '5854564', 'arafat@gmail.com', 'Student', '545415', 'Hasan Ali', 'Abul mia', 'Sabina', '12-08-2022', 'Male', 'Bangladesh', 'Dhaka', '012567896486', '45644', 'Dhaka', '45654', 'asan@gmail.com', 'Teacher', '454564', 'Kawsar', 'Belayet', 'Rokeya', 'male', 'Bangladesh', 'Dhaka', '01855454644', '54645645', 'Uttara', '454654', 'asan@gmail.com', 'Student', '5769879678', 'Brack Bank', 'Abdullapur', '124546546', '4678954'),
(4, 'Pending', 'Accepted', 'No', '353245432', '543543243', '4365456', '4325', 'Asif Hossain', 'fgjhhg', 'hgjg', 'ytu', 'rtytr', 'yrt', 'uyrtu', 'ytutruty', 'tyujy', 'tutyu', 'ytuyt', 'asafsdafn@gmail.com', 'tyujty', 'tyujyt', 'tyjhuf', 'jhujhu', 'tfjuht', 'srthfgbv', 'dtgyhurtf', 'tdhyf', 'tgyhrtyhs', 'yhsy', 'dfgh', 'yrtsyh', 'tryhyhrt', 'asafsdafn@gmail.com', 'dfsrf', 'erftsdf', 'dsfdsgf', 'sagd', 'gsadgds', 'sdgfsd', 'gsddsf', 'gsdg', 'sdgewrtwe', 'ert', 'reytery', 'eryrt', 'asafsdafn@gmail.com', 'hdfyfd', 'hytryhrt', 'syh', 'sdyt', '12345687', '5234523');

-- --------------------------------------------------------

--
-- Table structure for table `customer_two`
--

CREATE TABLE `customer_two` (
  `Id` int(100) NOT NULL,
  `status` varchar(150) NOT NULL,
  `one` varchar(150) NOT NULL,
  `two` varchar(150) NOT NULL,
  `three` varchar(150) NOT NULL,
  `four` varchar(150) NOT NULL,
  `five` varchar(150) NOT NULL,
  `six` varchar(150) NOT NULL,
  `seven` varchar(150) NOT NULL,
  `eight` varchar(150) NOT NULL,
  `nine` varchar(150) NOT NULL,
  `ten` varchar(150) NOT NULL,
  `eleven` varchar(150) NOT NULL,
  `twelve` varchar(150) NOT NULL,
  `thirteen` varchar(150) NOT NULL,
  `fourteen` varchar(150) NOT NULL,
  `fifteen` varchar(150) NOT NULL,
  `sixteen` varchar(150) NOT NULL,
  `seventeen` varchar(150) NOT NULL,
  `eighteen` varchar(150) NOT NULL,
  `nineteen` varchar(150) NOT NULL,
  `twenty` varchar(150) NOT NULL,
  `twenty_one` varchar(150) NOT NULL,
  `twenty_two` varchar(150) NOT NULL,
  `twenty_three` varchar(150) NOT NULL,
  `twenty_four` varchar(150) NOT NULL,
  `twenty_five` varchar(150) NOT NULL,
  `twenty_six` varchar(150) NOT NULL,
  `twenty_seven` varchar(150) NOT NULL,
  `twenty_eight` varchar(150) NOT NULL,
  `twenty_nine` varchar(150) NOT NULL,
  `thirty` varchar(150) NOT NULL,
  `thirty_one` varchar(150) NOT NULL,
  `thirty_two` varchar(150) NOT NULL,
  `thirty_three` varchar(150) NOT NULL,
  `thirty_four` varchar(150) NOT NULL,
  `thirty_five` varchar(150) NOT NULL,
  `thirty_six` varchar(150) NOT NULL,
  `thirty_seven` varchar(150) NOT NULL,
  `thirty_eight` varchar(150) NOT NULL,
  `thirty_nine` varchar(150) NOT NULL,
  `Forty` varchar(150) NOT NULL,
  `Forty_one` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_two`
--

INSERT INTO `customer_two` (`Id`, `status`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `twenty_one`, `twenty_two`, `twenty_three`, `twenty_four`, `twenty_five`, `twenty_six`, `twenty_seven`, `twenty_eight`, `twenty_nine`, `thirty`, `thirty_one`, `thirty_two`, `thirty_three`, `thirty_four`, `thirty_five`, `thirty_six`, `thirty_seven`, `thirty_eight`, `thirty_nine`, `Forty`, `Forty_one`) VALUES
(7, 'Pending', 'Md Kamrul', '12-08-2022', '123456', '454655', '14-08-2022', 'Kamrul Hasan', 'Mr', 'Belayet', 'Male', 'Lecturer', 'Belayet Hossain', 'Rokeya Begum', 'Dhaka', 'Cumilla', '1245', 'Uttara', 'Bangladesh', '4555455445', '0163548854', '454545', 'kamrul12@gmail.com', '123415456465', 'Cumilla place', '05-25-2023', '05-25-2033', 'AB Bank', 'Kamarpara', '124546546', '565656', 'Yes', 'Yes', '78789', 'Bangladesh', '12-8-1997', 'Hasan', 'Micro company', '12-8-2022', '1234567', 'Md kamrul Hasan', 'Kamrul', 'Mr'),
(37, 'Pending', 'Shariful Islam', '5435433', '4354353', '4353453', '35324543', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'Pending', 'Shariful Islam', '5435433', '4354353', '435343', '35324543', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'Pending', 'Shariful Islamrty', 'tryhtryh', 'tyrt', 'ytryhtr', 'ytrdyhtrd', 'dfyt', 'rdytrdy', 'trdy', 'tryrt', 'trdfy', 'rtyt', 'ryrty', 'tdyrt', 'rtdyer', 'sytr', 'trytr', 'yr', 'tryrty', 'trdytr', 'trytr', 'kadrtrm@gmail.com', 'tryrt', 'yrty', 'rtdyt', 'rtry', 'try', 'trytr', 'rty', 'trd', '', '', 'ytrdyh', 'rty', 'trdy', 'tdry', 'ytrytr', 'trdytr', 'dtry', 'tryrt', 'yr5tyrt', 'yrtytr');

-- --------------------------------------------------------

--
-- Table structure for table `testcustomer`
--

CREATE TABLE `testcustomer` (
  `Idd` int(10) NOT NULL,
  `sid` int(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `scourse` varchar(200) NOT NULL,
  `sphone` varchar(200) NOT NULL,
  `sgender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testcustomer`
--

INSERT INTO `testcustomer` (`Idd`, `sid`, `sname`, `scourse`, `sphone`, `sgender`) VALUES
(1, 1233, 'kamrul', 'rrrr', '435443', 'mmmm'),
(2, 1233, 'kamrul', 'rrrr', '435443', 'mmmm'),
(3, 1233, 'Md kamrul Hasan', 'rrrr', '435443', 'mmmm'),
(4, 22222222, 'TAnzina', 'tewtre', '43656546', 'female'),
(5, 22222222, 'tokjal', 'tewtre', '33333333333333', 'ghfgh'),
(6, 4543, 'tokjal', 'wreew', '43656546', 'ewrew'),
(7, 35324543, '543543', '435435', '43534', '34534534');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`name`, `email`, `age`, `id`, `status`) VALUES
('sm. munna', 'munna@gmail.com', 23, 1, 'accepted'),
('Sm Munna', '20103019@iubat.edu', 22, 6, 'pending'),
('hmdkamrul TKs', 'mdkamrul2058@gmail.com', 12, 7, 'pending'),
('hmdkamrulddd', 'hosnarita77@gmail.com', 343, 8, 'pending'),
('hmdkamrulddd', 'hosnarita775555@gmail.com', 25, 9, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `roles` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `password`, `roles`) VALUES
(1, 'Munna', 'munna@gmail.com', '1234', 'User'),
(2, 'Munna', 'smmunna@gmail.com', '123456', 'Admin'),
(6, 'robighg', 'emrufghl@gmail.com', 'thfgjhfg', 'User'),
(7, 'hmdkamrul', 'emrulhhh@gmail.com', '5456456', 'User'),
(8, 'kamrul', 'kamrul@gmail.com', '2010', 'Manager'),
(9, 'customer', 'customer@gmail.com', '456789', 'Customer'),
(10, 'robi', 'robi@gmail.com', '1234', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_one`
--
ALTER TABLE `customer_one`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer_two`
--
ALTER TABLE `customer_two`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `testcustomer`
--
ALTER TABLE `testcustomer`
  ADD PRIMARY KEY (`Idd`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_one`
--
ALTER TABLE `customer_one`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_two`
--
ALTER TABLE `customer_two`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `testcustomer`
--
ALTER TABLE `testcustomer`
  MODIFY `Idd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
