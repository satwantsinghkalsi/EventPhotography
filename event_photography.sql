-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2016 at 11:08 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CUST_ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `auth_type` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUST_ID`, `email`, `password`, `firstname`, `lastname`, `gender`, `phone`, `address`, `auth_type`) VALUES
(1, 'rksindhu@gmail.com', 'rohit123', 'Rohit', 'Sindhu', 'Male', '4692688217', '2200 Waterview Parkway, richardson TX 75081', 1),
(2, 'rksindhu1@gmail.com', 'rahul123', 'Rahul', 'Singh', 'Male', '4692688870', '2200 Waterview Parkway', 0),
(3, 'sxs149531@utdallas.edu', 'sat123', 'Satwant', 'Singh', 'Male', '4692688217', '7710, McCallum Blvd, Dallas TX 75252', 0),
(5, 'johnsmith@gmail.com', '$2y$10$NT/konXL9KzQ8x3sufsnGuFthhBJj5CtLZFaVgMcHZuwYdi/X3ydG', 'John', 'Smith', 'M', '4692688217', '7720 McCallum Boulevard, Apartment 2041', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EMP_ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Auth_Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `EVENT_ID` int(11) NOT NULL,
  `Event_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EVENT_ID`, `Event_Name`) VALUES
(1, 'some event 1'),
(2, 'some event 2'),
(3, 'some event 3'),
(4, 'some event 4'),
(5, 'some event 5'),
(6, 'some event 6'),
(7, 'some event 7'),
(8, 'some event 8'),
(9, 'some event 9'),
(10, 'some event 10'),
(11, 'some event 11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ORDER_ID` int(11) NOT NULL,
  `CUST_ID` int(11) NOT NULL,
  `PAYMENT_ID` int(11) NOT NULL,
  `Event_Name` varchar(30) NOT NULL,
  `Order_Creation_Date` datetime NOT NULL,
  `Photo_ID` int(11) NOT NULL,
  `Cost` float NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Headline` varchar(100) NOT NULL,
  `Shipping_Address` varchar(200) NOT NULL,
  `Billing_Address` varchar(200) NOT NULL,
  `Start_Time` datetime NOT NULL,
  `End_Time` datetime NOT NULL,
  `Num_Photographers` int(11) NOT NULL,
  `Num_Photos` int(11) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Delivery_Type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ORDER_ID`, `CUST_ID`, `PAYMENT_ID`, `Event_Name`, `Order_Creation_Date`, `Photo_ID`, `Cost`, `Status`, `Headline`, `Shipping_Address`, `Billing_Address`, `Start_Time`, `End_Time`, `Num_Photographers`, `Num_Photos`, `Size`, `Delivery_Type`) VALUES
(1, 1, 1, 'Some Event name', '2016-10-19 19:00:00', 1, 1000, 'approved', 'Somebody''s Wedding', '7720 McCallum Blvd, Dallas, TX 75252', '7720 McCallum Blvd, Dallas, TX 75252', '2016-11-15 14:00:00', '2016-11-15 18:00:00', 1, 100, '800*800', 'Digital'),
(2, 2, 2, 'Some Event name', '2016-10-12 08:00:00', 2, 2000, 'rejected', 'Somebody''s Else''s Wedding', '7777 McCallum Blvd, Dallas, TX 75252', '7777 McCallum Blvd, Dallas, TX 75252', '2016-11-16 14:00:00', '2016-11-16 18:00:00', 1, 100, '800*800', 'Digital'),
(3, 1, 1, 'Some Event name', '2016-11-01 02:05:00', 3, 2000, 'processing', 'Somebody''s Birthday', '7720 McCallum Blvd, Dallas, TX 75252', '7720 McCallum Blvd, Dallas, TX 75252', '2016-11-17 14:00:00', '2016-11-17 18:00:00', 1, 100, '800*800', 'Digital'),
(4, 3, 3, 'Some Event name', '2016-10-02 05:00:00', 4, 1000, 'processing', 'Some Junk Event', '2200 Waterview Parkway, Dallas TX 75080', '2200 Waterview Parkway, Dallas TX 75080', '2016-11-17 05:00:00', '2016-11-17 10:00:00', 2, 500, '800*600', 'Print'),
(5, 3, 3, 'Some Event name', '2016-10-03 10:00:00', 5, 1000, 'processing', 'Some Junk Event', '2200 Waterview Parkway, Dallas TX 75080', '2200 Waterview Parkway, Dallas TX 75080', '2016-11-17 05:00:00', '2016-11-17 10:00:00', 2, 500, '800*600', 'Print'),
(6, 2, 2, 'Some Event name', '2016-10-04 10:00:00', 6, 1000, 'processing', 'Some Junk Event', '2200 Waterview Parkway, Dallas TX 75080', '2200 Waterview Parkway, Dallas TX 75080', '2016-11-17 05:00:00', '2016-11-17 10:00:00', 2, 500, '800*600', 'Print'),
(7, 1, 1, 'Some Event name', '2016-10-05 17:00:00', 7, 1000, 'processing', 'Some Junk Event', '2200 Waterview Parkway, Dallas TX 75080', '2200 Waterview Parkway, Dallas TX 75080', '2016-11-17 05:00:00', '2016-11-17 10:00:00', 2, 500, '800*600', 'Print'),
(8, 3, 3, 'Some Event name', '2016-12-01 08:00:00', 8, 1000, 'processing', 'Some Junk Event', '2200 Waterview Parkway, Dallas TX 75080', '2200 Waterview Parkway, Dallas TX 75080', '2016-11-17 05:00:00', '2016-11-17 10:00:00', 2, 500, '800*600', 'Print'),
(9, 2, 2, 'Some Event name', '2016-11-10 11:00:00', 9, 1000, 'processing', 'Some Junk Event', '2200 Waterview Parkway, Dallas TX 75080', '2200 Waterview Parkway, Dallas TX 75080', '2016-11-17 05:00:00', '2016-11-17 10:00:00', 2, 500, '800*600', 'Print'),
(10, 1, 1, 'Some Open Event2', '2016-11-02 06:14:00', 10, 1000, 'processing', 'Some Junk Event', '7720 McCallum Blvd, Dallas', '7720 McCallum Blvd, Dallas', '2016-11-17 05:00:00', '2016-11-17 10:00:00', 2, 500, '800*600', 'Print'),
(11, 3, 3, 'Some Event name', '2016-10-21 00:00:00', 11, 1000, 'processing', 'Some Junk Event', '2200 Waterview Parkway, Dallas TX 75080', '2200 Waterview Parkway, Dallas TX 75080', '2016-11-17 05:00:00', '2016-11-17 10:00:00', 2, 500, '800*600', 'Print'),
(12, 1, 0, 'Some Open Event1', '2016-10-06 08:00:00', 1, 1000, 'unsubmitted', 'Some wedding event', '7720 McCallum Blvd, Dallas', '7720 McCallum Blvd, Dallas', '2016-12-21 03:00:00', '2016-12-14 10:00:00', 1, 100, '300*400', 'digital'),
(16, 5, 3, 'Birthday', '2016-12-07 19:21:52', 1, 505, 'processing', 'Birthday', '7720', '7720', '2016-12-11 06:00:00', '2016-12-11 11:00:00', 1, 100, '5X7 in', 'Digital'),
(17, 5, 3, 'Birthday', '2016-12-07 19:45:25', 1, 505, 'approved', 'Birthday', '7720 McCallum Blvd', '7720 McCallum Blvd', '2016-12-11 06:00:00', '2016-12-11 11:00:00', 1, 100, '4X6 in', 'Print'),
(18, 5, 0, 'Birthday', '2016-12-07 21:47:04', 1, 1005, 'unsubmitted', 'Birthday', '7720 McCallum Boulevard, Apartment 2041', '7720 McCallum Boulevard, Apartment 2041', '2016-12-11 06:00:00', '2016-12-11 11:00:00', 1, 200, '5X7 in', 'Digital');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
  `PAYMENT_ID` int(11) NOT NULL,
  `CUST_ID` int(11) NOT NULL,
  `card_number` bigint(32) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `cvc_number` int(3) NOT NULL,
  `card_expiry` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`PAYMENT_ID`, `CUST_ID`, `card_number`, `card_name`, `cvc_number`, `card_expiry`) VALUES
(1, 1, 4321876512783456, 'rohit sindhu', 522, '2017-09-01'),
(2, 2, 9876543212345678, 'rahul singh', 456, '2017-02-01'),
(3, 5, 2299338844775561, 'john smith', 872, '2018-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `REVIEW_ID` int(11) NOT NULL,
  `CUST_ID` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Rating` float NOT NULL,
  `Anonymous` tinyint(1) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`REVIEW_ID`, `CUST_ID`, `Description`, `Rating`, `Anonymous`, `Status`) VALUES
(1, 2, 'Just a few short years ago, the web was full of dancing mice, spinning globes and animated construction workers ... things have now changed to where design principles are now actually put to good use ... amazing!\nThe problem that we find with many websites these days, is that the design is not flexible.\nWebsites constantly need change, so if you find that putting in a new navigation button is going to take a lot of work, you have to reconsider your design. ', 4, 0, 'submitted'),
(2, 3, 'These sites run the gamut from just a few tragic mistakes to the worst kind of Over-The-Top websites you see featured here in The Daily Sucker.', 0, 1, 'submitted'),
(3, 1, 'The one thing that gets on my nerves when I''m surfing the web, is when I come to a bad web page where I can''t figure out what the website is about. (Ok, maybe pop-up windows are worse, but this still ticks me off!)\nTypically, websites like these turn out to be what I would call ''artsy'' websites, where the design is pleasing to the eye, but I have to ''dig'' to get the point of the website. ', 2, 3, 'submitted'),
(4, 2, 'very good, very good, very good, very good!!', 3, 0, 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUST_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDER_ID`),
  ADD KEY `CUST_ID` (`CUST_ID`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`PAYMENT_ID`),
  ADD KEY `CUST_ID` (`CUST_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`REVIEW_ID`),
  ADD KEY `FK_REVIEW_CUST` (`CUST_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUST_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `PAYMENT_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `REVIEW_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_CUST_ID` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`CUST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `FK_PAY_CUST` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`CUST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_REVIEW_CUST_ID` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`CUST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
