
CREATE TABLE `admin_login_table` (
  `Admin_Login_id` varchar(11) NOT NULL,
  `Admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `admin_login_table` (`Admin_Login_id`, `Admin_password`) VALUES
('anant', 'anant'),
('rahul', 'rahul');

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `pri` double NOT NULL,
  `tot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `cart` (`cid`, `uid`, `pid`, `qty`, `pri`, `tot`) VALUES
(146, 'User Exit', '33', 1, 45999, 45999);


CREATE TABLE `categories_types` (
  `Category_id` int(11) NOT NULL,
  `Category_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `categories_types` (`Category_id`, `Category_Name`) VALUES
(1, 'smart watch'),
(2, 'Stel Belt Watch'),
(3, 'Premium Watch'),
(4, 'Leather Watch');


CREATE TABLE `contact_table` (
  `contact_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(15) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `contact_table` (`contact_id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(5, 'rahul sharma', 'rahulsharma@gmail.com', 'buying watch', ' nice watch');


CREATE TABLE `creditcard` (
  `creditcardid` int(11) NOT NULL,
  `cardnumber` varchar(19) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `expdate` varchar(11) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `debitcard` (
  `debitcardid` int(11) NOT NULL,
  `cardnumber` varchar(19) NOT NULL,
  `cvv` int(3) NOT NULL,
  `expdate` varchar(11) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `ordersummary` (
  `Order_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `PhoneNumber` varchar(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Total` int(11) NOT NULL,
  `Payment_method` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `payment` (
  `Payment_id` int(11) NOT NULL,
  `Bank_name` varchar(30) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Total_amout` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `Product_id` int(11) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Company_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`Product_id`, `Product_name`, `Category_id`, `image`, `Price`, `Quantity`, `Description`, `Company_name`) VALUES
(27, 'Rado Gold Diamonds W  ', 3, 'product-1.jpg', 72999, 100, 'causal watch', 'rado  '),
(28, 'Bip Smart Watch  ', 1, 'bip_smartwatch.jpg', 4999, 100, 'Amazfit Bip Smart Watch with heart Rate Moniter \r\nFEATURES : show Message notification , check Weather ,step counter , calaries burn checker , heart rate moniter ', 'Bip '),
(29, 'Samsung Gear S3 Fron', 1, 'product-2.jpg', 20999, 100, 'Brand New Samsung Gear S3 Frontier in black edition ,full touch screen smart watch ', 'samsung'),
(33, 'Apple Watch Series 5', 1, 'product-5.jpg', 45999, 100, 'Apple watch series 5 with GPS and Calling function ', 'apple'),
(34, 'Huami Amazfit GTR Samrt Watch', 1, 'amazfit_smartwatch.jpg', 14999, 100, 'Huami Amazfit gtr smart watch with calling function ,inbuilt GPS ,\r\n10 days battery life 3-4 hours charging time , Super AMOLED display ', 'Huami'),
(35, 'Honor Band 5', 1, 'product-7.jpg', 2299, 100, 'new Honor Fitness Band 5 With Heart Rate Moniter(black Strap),10 days battery life \r\n3-4 hours charging time , Super AMOLED display', 'Honor'),
(41, 'Fitbit Versa', 1, 'fitbit_smartwatch.jpg', 14999, 100, 'nice watch', 'fitbit'),
(42, 'Tic Watch 2', 1, 'ticwatch_smartwatch.jpg', 15999, 100, 'show Message notification , Calling Function , check Weather ,step counter , calaries burn checker , heart rate moniter ', 'Tic'),
(43, 'Fossil Smart watch gen 5', 1, 'fossil_smartwatch.jpg', 24999, 100, 'Fossil Brand New calling function smart watch with inbuilt GPS , smart tracker , Heart Rate moniter ', 'Fossil'),
(44, 'Fastrack Silver Steel Belt Watch', 2, 's1.jpg', 1799, 100, 'fastrack silver belt belt steel watch with Round dial', 'Fast track'),
(45, 'Fossil Gold Edition Watch', 2, 's2.jpg', 7999, 100, 'Fossil Gold Edition Watch with Round dial ', 'Fossil'),
(46, 'Titan Silver Watch With Date Function', 2, 's3.jpg', 3599, 100, 'Titan Silver Watch With Date Function', 'Titan'),
(47, 'Fossil Rose Gold Watch', 3, 'product-8.jpeg', 9999, 100, 'Fossil Brand New rose gold watch with round dial ,leather belt ', 'Fossil'),
(48, 'Rolex Diamond Watch', 3, 'product-6.jpg', 74999, 100, 'Brand New Rado Diamond Watch , gold steel belt watch with white diamonds ', 'Rolex'),
(49, 'Rado Black Leather Watch', 4, 'l1.jpg', 12999, 100, 'Rado Black Leather Watch with Premium Quality ', 'Rado'),
(50, 'Fossil Premium Leather Watch', 4, 'l3.jpg', 9999, 100, 'Fossil Premium Leather Watch ', 'Fossil'),
(51, 'Fastrack Black Leather Watch ', 4, 'l4.jpg', 3599, 100, 'Fastrack Black Leather Watch  Very Nice ', 'Fast track ');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `User_Id` int(13) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mobile_Number` varchar(13) NOT NULL,
  `Email_Id` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Birthdate` date NOT NULL,
  `Address` varchar(70) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`User_Id`, `Name`, `Mobile_Number`, `Email_Id`, `Password`, `Birthdate`, `Address`, `City`, `Pincode`) VALUES
(154, 'anantpatel', '8866651032', 'anantpatel@gmail.com', 'anantpatel', '2000-06-28', 'telephone exchange', 'Surat', '360007'),
(157, 'rahulsharma', '7405969261', 'rahulsharma@gmail.com', 'rahulsharma', '1998-02-18', 'gandhigram', 'Surat', '360007'),
(161, 'TERAIYA DHARMESH', '8849414419', 'cherryc612@gmail.com', 'rock7598', '1998-03-02', 'Chamunda nivas new mahavir nagar st 3E gandhigram Surat', 'Surat', '360007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_table`
--
ALTER TABLE `admin_login_table`
  ADD PRIMARY KEY (`Admin_Login_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `categories_types`
--
ALTER TABLE `categories_types`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`creditcardid`);

--
-- Indexes for table `debitcard`
--
ALTER TABLE `debitcard`
  ADD PRIMARY KEY (`debitcardid`);

--
-- Indexes for table `ordersummary`
--
ALTER TABLE `ordersummary`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_id`),
  ADD KEY `Order_id` (`Order_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`,`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `categories_types`
--
ALTER TABLE `categories_types`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `creditcard`
--
ALTER TABLE `creditcard`
  MODIFY `creditcardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `debitcard`
--
ALTER TABLE `debitcard`
  MODIFY `debitcardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ordersummary`
--
ALTER TABLE `ordersummary`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `User_Id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Order_id`) REFERENCES `order_table_master` (`Order_id`);


ALTER TABLE `product_table`
  ADD CONSTRAINT `product_table_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `categories_types` (`Category_id`);
COMMIT;