CREATE DATABASE casdb;

use mydb;

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
(69, 0, 107);

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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item_id` int(6) NOT NULL,
  `u_id` int(10) NOT NULL,
  `food_id` int(10) NOT NULL,
  `quantity` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` time NOT NULL,
  `clock` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `food_desc` varchar(250) DEFAULT NULL,
  `type` varchar(8) NOT NULL,
  `featured` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `name`, `price`, `photo`, `food_desc`, `type`, `featured`) VALUES
(8, 'parautha', 60, 'parautha.jpg', 'bwfbwuebfubwew', 'food', 0),
(9, 'Pakauda', 50, 'pakauda.jpg', 'asdfasfasdfw', 'food', 0),
(10, 'Momo', 100, 'momo.jpg', 'it is a delicious food', 'food', 1),
(11, 'Wings', 200, 'wings.jpg', 'it is just a food', 'food', 0),
(12, 'Samosa', 50, 'samosa.jpg', 'sdfdfgdfgfgdfgd', 'food', 1),
(15, 'Veg Nepali Thali', 150, 'veg_nepalithali.jpg', 'sdfsd desc', 'food', 0),
(16, 'Chaat', 50, 'chaat.jpg', 'this is chaat', 'food', 1),
(17, 'Fries', 80, 'fries.jpg', 'this is fries', 'food', 0),
(18, 'Nepali Thali', 100, 'nepalithali.jpg', 'this is Nepali Thali', 'food', 1);

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
(123, 'Zombie', 'Boie', 107, 'zombieboie.png', 69, 9800010111, 'male');

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
(82, 'canteen123', '5f4dcc3b5aa765d61d8327deb882cf99', 4, 'canteen@gces.edu.np', NULL),
(89, 'college123', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'gces@gces.edu.np', NULL),
(107, 'zombie123', '5f4dcc3b5aa765d61d8327deb882cf99', 0, 'zombie@gmail.com', NULL);

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`item_id`);

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
  MODIFY `account_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `item_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `collegeadmin`
--
ALTER TABLE `collegeadmin`
  MODIFY `clz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
