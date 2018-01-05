-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 05:59 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_no` int(4) NOT NULL,
  `amount` float DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_no`, `amount`, `u_id`) VALUES
(55, 0, 93),
(54, 0, 92),
(53, 0, 91),
(52, 0, 90),
(56, 0, 94);

-- --------------------------------------------------------

--
-- Table structure for table `beverage`
--

CREATE TABLE `beverage` (
  `bev_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `photo` varchar(50) NOT NULL,
  `bev_desc` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `u_id` int(11) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`u_id`, `phone`, `c_id`) VALUES
(82, 9840010300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `collegeadmin`
--

CREATE TABLE `collegeadmin` (
  `u_id` int(11) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `clz_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegeadmin`
--

INSERT INTO `collegeadmin` (`u_id`, `phone`, `clz_id`) VALUES
(89, 61440866, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` float NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `food_desc` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `name`, `price`, `photo`, `food_desc`) VALUES
(8, 'parautha', 60, NULL, 'bwfbwuebfubwew'),
(9, 'new', 76, NULL, 'asdfasfasdfw'),
(10, 'buff momo', 70, NULL, 'it is a delicious food'),
(11, 'Kabab', 100, NULL, 'it is just a food'),
(12, 'erfwer', 434, NULL, 'sdfdfgdfgfgdfgd'),
(15, 'sdfs', 76, 'Screenshot  (11).png', 'sdfsd desc');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `o_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `u_id` int(11) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `account_no` int(4) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_id` bigint(20) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `photo` varchar(50) NOT NULL,
  `account_no` int(4) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_id`, `first_name`, `last_name`, `u_id`, `photo`, `account_no`, `phone`, `gender`) VALUES
(656565656, 'Talank', 'Baral', 83, '', 46, 7898789789, NULL),
(456123456, 'Madan', 'Poudel', 87, '', 50, 7755845586, NULL),
(55459898731, 'Prajwal', 'Adhikari', 88, '', 51, 9810256647, NULL),
(789, 'Madan', 'Poudel', 90, '', 52, 45654458789, 'male'),
(385, 'Talank', 'Baral', 91, '', 53, 9840010300, 'male'),
(6511223, 'Ashish', 'Shrestha', 92, '', 54, 9806627492, 'male'),
(478, 'Prajwal', 'Adhikari', 94, '', 56, 9804125595, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `u_id` int(11) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `account_no` int(4) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `forgot_pw_token` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`, `type`, `email`, `forgot_pw_token`) VALUES
(82, 'canteen123', 'canteen123', 4, 'canteen@gces.edu.np', NULL),
(92, 'elton_aasis', 'elton123', 0, 'aashishshrestha5532@gmail.com', 'osig08twfbuhr3n'),
(91, 'Talank123', 'talank123', 0, 'talank@gces.edu.np', NULL),
(89, 'college123', 'college123', 3, 'gces@gces.edu.np', NULL),
(90, 'Maddy123', 'maddy123', 0, 'madan@gces.edu.np', 'gf3yk016z8imdv5'),
(93, 'elton_aasis123', 'elton123', 0, 'aashishshrestha5532@gmail.com', 'osig08twfbuhr3n'),
(94, 'prajwal', 'prajwal123', 0, 'prajwal.ady@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_no`);

--
-- Indexes for table `beverage`
--
ALTER TABLE `beverage`
  ADD PRIMARY KEY (`bev_id`);

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `collegeadmin`
--
ALTER TABLE `collegeadmin`
  ADD PRIMARY KEY (`clz_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `beverage`
--
ALTER TABLE `beverage`
  MODIFY `bev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `canteen`
--
ALTER TABLE `canteen`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collegeadmin`
--
ALTER TABLE `collegeadmin`
  MODIFY `clz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
