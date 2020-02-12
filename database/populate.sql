
--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_no`, `amount`, `u_id`) VALUES
(69, 0, 107);

-- --------------------------------------------------------

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`u_id`, `phone`, `c_id`) VALUES
(82, 9840010300, 1);


-- --------------------------------------------------------

--
-- Dumping data for table `collegeadmin`
--

INSERT INTO `collegeadmin` (`u_id`, `phone`, `clz_id`) VALUES
(89, 61440866, 1);


-- --------------------------------------------------------

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
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_id`, `first_name`, `last_name`, `u_id`, `photo`, `account_no`, `phone`, `gender`) VALUES
(123, 'Zombie', 'Boie', 107, 'zombieboie.png', 69, 9800010111, 'male');


-- --------------------------------------------------------

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`, `type`, `email`, `forgot_pw_token`) VALUES
(82, 'canteen123', '5f4dcc3b5aa765d61d8327deb882cf99', 4, 'canteen@gces.edu.np', NULL),
(89, 'college123', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'gces@gces.edu.np', NULL),
(107, 'zombie123', '5f4dcc3b5aa765d61d8327deb882cf99', 0, 'zombie@gmail.com', NULL);

-- --------------------------------------------------------




-- --------------------------------------------------------




-- --------------------------------------------------------




-- --------------------------------------------------------




-- --------------------------------------------------------




-- --------------------------------------------------------





-- --------------------------------------------------------