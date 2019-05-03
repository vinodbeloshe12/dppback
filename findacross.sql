-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 09:09 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findacross`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslevel`
--

CREATE TABLE `accesslevel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accesslevel`
--

INSERT INTO `accesslevel` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'Operator'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `emailer`
--

CREATE TABLE `emailer` (
  `username` varchar(555) NOT NULL,
  `password` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailer`
--

INSERT INTO `emailer` (`username`, `password`) VALUES
('vinodbeloshe12', 'Vinod@123');

-- --------------------------------------------------------

--
-- Table structure for table `fa_advertise`
--

CREATE TABLE `fa_advertise` (
  `id` int(11) NOT NULL,
  `lid` varchar(555) NOT NULL,
  `page` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fa_category`
--

CREATE TABLE `fa_category` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fa_category`
--

INSERT INTO `fa_category` (`id`, `name`, `image`, `icon`, `status`, `user`) VALUES
(1, 'Doctor', '6.jpg', 'fa-user-md', '1', ''),
(2, 'Restaurants', '1.jpg', 'fa-cutlery', '1', ''),
(3, 'Movies', '16.jpg', 'fa-film', '1', ''),
(4, 'Food', '8.jpg', 'icon-food', '1', ''),
(5, 'Bike Dealers', '14.jpg', 'fa-user-md', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `fa_images`
--

CREATE TABLE `fa_images` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `lid` varchar(555) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fa_images`
--

INSERT INTO `fa_images` (`id`, `image`, `lid`, `order`) VALUES
(1, '2.jpg', 'technfox', 2),
(2, '1.jpg', 'technfox', 2),
(3, '3.jpg', 'technfox', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fa_listing`
--

CREATE TABLE `fa_listing` (
  `id` int(11) NOT NULL,
  `bid` varchar(555) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `subcategory` int(11) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  `buisnessname` varchar(255) DEFAULT NULL,
  `cperson` text,
  `contact` varchar(255) DEFAULT NULL,
  `addline1` varchar(255) DEFAULT NULL,
  `addline2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `keywords` longtext,
  `about` longtext,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fa_listing`
--

INSERT INTO `fa_listing` (`id`, `bid`, `category`, `subcategory`, `regdate`, `buisnessname`, `cperson`, `contact`, `addline1`, `addline2`, `city`, `state`, `pin`, `country`, `keywords`, `about`, `email`, `facebook`, `twitter`, `google`, `linkedin`, `status`, `type`, `user`, `date`) VALUES
(1, 'technfox', 1, 2, '0000-00-00', 'Technfox IT Solutions', 'vinod', '8082495670', 'room no 4, ram bharose chawl', 'diamond sports club, tembipada', 'mumbai', 'maharashtra', '400078', 'india', 'website designing, web application developement', '<p>website designing, <strong>web <span style=\"color: #ff00ff;\">application</span> <span style=\"color: #ff0000;\">developement</span></strong></p>', 'technfox@gmail.com', '', '', '', '', '1', 1, '', '2018-01-17 17:06:26'),
(2, 'okirana', 2, 5, '0000-00-00', 'okirana', 'rajesh', '1234567890', 'test', 'test2', 'mumbai', 'maharashtra', '400078', 'India', 'shop, grocery shop,rajesh', 'okirana shop', 'emailid010@gmail.com', '', '', '', '', '1', 0, '', '2017-12-30 07:24:21'),
(3, 'technfox1', 1, 2, '0000-00-00', 'Technfox', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 0, '', '0000-00-00 00:00:00'),
(4, 'sparks', 5, 6, '0000-00-00', 'sparks design solutions', 'test', '1234567890', 'test', 'test2', 'mumbai', 'maharashtra', '400078', 'India', 'bike dealer', 'testing for sparks', '', '', '', '', '', '1', 1, '', '2018-01-17 17:06:31'),
(5, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 1, NULL, '2018-01-14 06:37:12'),
(9, 'hariom', NULL, NULL, NULL, 'Hari Om Logstics', NULL, '1234567890', 'test', 'maharashtra', 'mumbai', NULL, '400078', NULL, NULL, NULL, 'emailid010@gmail.com', NULL, NULL, NULL, NULL, '2', 1, NULL, '2018-01-14 06:41:05'),
(10, 'test', NULL, NULL, NULL, 'testing', NULL, '1234567890', 'room no 4, ram bharose chawl', 'maharashtra', 'mumbai', NULL, '400078', NULL, NULL, NULL, 'technfox@gmail.com', NULL, NULL, NULL, NULL, '2', 1, NULL, '2018-01-14 06:43:43'),
(28, 'asd', NULL, NULL, NULL, 'asdw', NULL, '1234567890', 'room no 4, ram bharose chawl', 'maharashtra', 'mumbai', NULL, '400078', NULL, NULL, NULL, 'technfox@gmail.com', NULL, NULL, NULL, NULL, '2', 1, NULL, '2018-01-15 18:54:21'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 1, NULL, '2018-01-17 16:21:20'),
(30, 'qgold', NULL, NULL, NULL, 'qgold', NULL, '2534444444', 'testing', 'landmark', 'Delhi', NULL, '555555', NULL, NULL, NULL, 'qgold@test.com', NULL, NULL, NULL, NULL, '2', 1, 'fa', '2018-01-17 16:37:24'),
(32, 'steckbeck', NULL, NULL, NULL, 'steckbeck', NULL, '1234567890', 'room no 4, ram bharose chawl', 'maharashtra', 'mumbai', NULL, '400078', NULL, NULL, NULL, 'technfox@gmail.com', NULL, NULL, NULL, NULL, '2', 1, 'fa', '2018-01-17 16:43:45'),
(34, 'xyz', NULL, NULL, NULL, 'abc', NULL, '1234567890', 'test', 'maharashtra', 'mumbai', NULL, '400078', NULL, NULL, NULL, 'technfox@gmail.com', NULL, NULL, NULL, NULL, '2', 1, 'fa', '2018-01-21 05:40:50'),
(36, 'testttm', NULL, NULL, NULL, 'sfk', NULL, '2222222222', 'room no 4, ram bharose chawl', 'maharashtra', 'mumbai', NULL, '400078', NULL, NULL, NULL, 'asd@test.co', NULL, NULL, NULL, NULL, '2', 1, 'fa', '2018-02-26 17:28:49'),
(38, 'asd', NULL, NULL, NULL, 'sa', NULL, '1212121212', 'sd', 'sd', 'dsdf', NULL, '222222', NULL, NULL, NULL, 'hasd@sd.co', NULL, NULL, NULL, NULL, '2', 1, 'fa', '2018-03-25 10:24:48'),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 1, 'fa', '2018-03-25 16:16:22'),
(40, 'testt', NULL, NULL, NULL, 'asd', NULL, '1111111111', '33333333333333333', '2222222222222', 'mumbai', NULL, '555555', NULL, NULL, NULL, 'sad@asd.com', NULL, NULL, NULL, NULL, '2', 1, 'fa', '2018-03-25 16:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `fa_rating`
--

CREATE TABLE `fa_rating` (
  `id` int(11) NOT NULL,
  `bid` varchar(555) NOT NULL,
  `name` varchar(555) DEFAULT NULL,
  `email` varchar(555) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` text,
  `status` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fa_rating`
--

INSERT INTO `fa_rating` (`id`, `bid`, `name`, `email`, `rating`, `review`, `status`, `date`) VALUES
(3, 'technfox', 'fa', 'technfox@gmail.com', 2, 'aaaaaaa', 1, '2018-01-21 11:09:33'),
(4, 'technfox', 'rajesh', 'emailid010@gmail.com', 4, 'good service', 1, '2018-01-21 11:09:33'),
(7, 'technfox', 'fa', 'emailid010@gmail.com', 1, 'test', 1, '2018-01-21 11:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `fa_slider`
--

CREATE TABLE `fa_slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fa_slider`
--

INSERT INTO `fa_slider` (`id`, `image`, `status`) VALUES
(1, '13.jpg', '1'),
(2, '21.jpg', '1'),
(3, '33.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fa_subcategory`
--

CREATE TABLE `fa_subcategory` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fa_subcategory`
--

INSERT INTO `fa_subcategory` (`id`, `name`, `category`, `order`, `image`, `icon`, `status`, `user`) VALUES
(1, 'Cardiologist', 1, 0, '11.jpg', 'fa-user-md', 1, ''),
(2, 'Pathologist', 1, 0, '2.jpg', 'fa-user-md', 1, ''),
(3, 'Parasitologist', 1, 0, '31.jpg', 'fa-user-md', 1, ''),
(4, 'Neurologist', 1, 0, '32.jpg', 'fa-user-md', 1, ''),
(5, 'Grocery Shop', 4, 0, '81.jpg', 'icon-food', 1, ''),
(6, 'Sports Bike', 5, 0, '15.jpg', 'fa-user-md', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `fieldvalidation`
--

CREATE TABLE `fieldvalidation` (
  `id` int(11) NOT NULL,
  `field` int(11) NOT NULL,
  `validation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fieldvalidation`
--

INSERT INTO `fieldvalidation` (`id`, `field`, `validation`) VALUES
(1, 1, 'required'),
(2, 2, 'trim'),
(4, 1, 'trim');

-- --------------------------------------------------------

--
-- Table structure for table `logintype`
--

CREATE TABLE `logintype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintype`
--

INSERT INTO `logintype` (`id`, `name`) VALUES
(1, 'Facebook'),
(2, 'Twitter'),
(3, 'Email'),
(4, 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `linktype` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `keyword`, `url`, `linktype`, `parent`, `isactive`, `order`, `icon`) VALUES
(1, 'Users', '', '', 'site/viewusers', 1, 0, 1, 1, 'icon-user'),
(2, 'Category', '', '', 'site/viewcategory', 1, 0, 1, 2, 'icon-dashboard'),
(3, 'Subcategory', '', '', 'site/viewsubcategory', 1, 0, 1, 3, 'icon-dashboard'),
(4, 'Dashboard', '', '', 'site/index', 1, 0, 1, 0, 'icon-dashboard'),
(5, 'Listing', '', '', 'site/viewlisting', 1, 0, 1, 4, 'icon-dashboard'),
(6, 'Slider', '', '', 'site/viewslider', 1, 0, 1, 5, 'icon-dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `menuaccess`
--

CREATE TABLE `menuaccess` (
  `menu` int(11) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuaccess`
--

INSERT INTO `menuaccess` (`menu`, `access`) VALUES
(1, 1),
(2, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sqltype`
--

CREATE TABLE `sqltype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sqltype`
--

INSERT INTO `sqltype` (`id`, `name`) VALUES
(1, 'int'),
(2, 'varchar'),
(3, 'double'),
(4, 'timestamp'),
(5, 'text'),
(6, 'date');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'inactive'),
(2, 'Active'),
(3, 'Waiting'),
(4, 'Active Waiting'),
(5, 'Blocked');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `name`, `logo`) VALUES
(1, 'FINDACROSS', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `accesslevel` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `socialid` varchar(255) NOT NULL,
  `logintype` varchar(255) NOT NULL,
  `json` text NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `billingaddress` text NOT NULL,
  `billingcity` varchar(255) NOT NULL,
  `billingstate` varchar(255) NOT NULL,
  `billingcountry` varchar(255) NOT NULL,
  `billingcontact` varchar(255) NOT NULL,
  `billingpincode` varchar(255) NOT NULL,
  `shippingaddress` text NOT NULL,
  `shippingcity` varchar(255) NOT NULL,
  `shippingcountry` varchar(255) NOT NULL,
  `shippingstate` varchar(255) NOT NULL,
  `shippingpincode` varchar(255) NOT NULL,
  `shippingname` varchar(255) NOT NULL,
  `shippingcontact` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `registrationno` varchar(255) NOT NULL,
  `vatnumber` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`, `firstname`, `lastname`, `phone`, `billingaddress`, `billingcity`, `billingstate`, `billingcountry`, `billingcontact`, `billingpincode`, `shippingaddress`, `shippingcity`, `shippingcountry`, `shippingstate`, `shippingpincode`, `shippingname`, `shippingcontact`, `currency`, `credit`, `companyname`, `registrationno`, `vatnumber`, `country`, `fax`, `gender`, `facebook`, `google`, `twitter`, `street`, `address`, `dob`, `city`, `state`, `pincode`) VALUES
(1, 'fa', '21232f297a57a5a743894a0e4a801fc3', 'admin@findacross.com', 1, '0000-00-00 00:00:00', 1, '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00', '', '', ''),
(2, 'rajesh', '3230f8d7fa346550c5455f4fdf5f658b', 'emailid010@gmail.com', 2, '2018-01-21 16:44:10', 1, '', '', '', '', '0', 'rajesh', 'shinde', '', 'test', 'mumbai', 'maharashtra', 'India', '', '400078', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `onuser` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `onuser`, `status`, `description`, `timestamp`) VALUES
(1, 1, 1, 'User Address Edited', '2014-05-12 06:50:21'),
(2, 1, 1, 'User Details Edited', '2014-05-12 06:51:43'),
(3, 1, 1, 'User Details Edited', '2014-05-12 06:51:53'),
(4, 4, 1, 'User Created', '2014-05-12 06:52:44'),
(5, 4, 1, 'User Address Edited', '2014-05-12 12:31:48'),
(6, 23, 2, 'User Created', '2014-10-07 06:46:55'),
(7, 24, 2, 'User Created', '2014-10-07 06:48:25'),
(8, 25, 2, 'User Created', '2014-10-07 06:49:04'),
(9, 26, 2, 'User Created', '2014-10-07 06:49:16'),
(10, 27, 2, 'User Created', '2014-10-07 06:52:18'),
(11, 28, 2, 'User Created', '2014-10-07 06:52:45'),
(12, 29, 2, 'User Created', '2014-10-07 06:53:10'),
(13, 30, 2, 'User Created', '2014-10-07 06:53:33'),
(14, 31, 2, 'User Created', '2014-10-07 06:55:03'),
(15, 32, 2, 'User Created', '2014-10-07 06:55:33'),
(16, 33, 2, 'User Created', '2014-10-07 06:59:32'),
(17, 34, 2, 'User Created', '2014-10-07 07:01:18'),
(18, 35, 2, 'User Created', '2014-10-07 07:01:50'),
(19, 34, 2, 'User Details Edited', '2014-10-07 07:04:34'),
(20, 18, 2, 'User Details Edited', '2014-10-07 07:05:11'),
(21, 18, 2, 'User Details Edited', '2014-10-07 07:05:45'),
(22, 18, 2, 'User Details Edited', '2014-10-07 07:06:03'),
(23, 7, 6, 'User Created', '2014-10-17 06:22:29'),
(24, 7, 6, 'User Details Edited', '2014-10-17 06:32:22'),
(25, 7, 6, 'User Details Edited', '2014-10-17 06:32:37'),
(26, 8, 6, 'User Created', '2014-11-15 12:05:52'),
(27, 9, 6, 'User Created', '2014-12-02 10:46:36'),
(28, 9, 6, 'User Details Edited', '2014-12-02 10:47:34'),
(29, 4, 6, 'User Details Edited', '2014-12-03 10:34:49'),
(30, 4, 6, 'User Details Edited', '2014-12-03 10:36:34'),
(31, 4, 6, 'User Details Edited', '2014-12-03 10:36:49'),
(32, 8, 6, 'User Details Edited', '2014-12-03 10:47:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslevel`
--
ALTER TABLE `accesslevel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `fa_advertise`
--
ALTER TABLE `fa_advertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fa_category`
--
ALTER TABLE `fa_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fa_images`
--
ALTER TABLE `fa_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fa_listing`
--
ALTER TABLE `fa_listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fa_rating`
--
ALTER TABLE `fa_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fa_slider`
--
ALTER TABLE `fa_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fa_subcategory`
--
ALTER TABLE `fa_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintype`
--
ALTER TABLE `logintype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslevel`
--
ALTER TABLE `accesslevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fa_advertise`
--
ALTER TABLE `fa_advertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fa_category`
--
ALTER TABLE `fa_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fa_images`
--
ALTER TABLE `fa_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fa_listing`
--
ALTER TABLE `fa_listing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `fa_rating`
--
ALTER TABLE `fa_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fa_slider`
--
ALTER TABLE `fa_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fa_subcategory`
--
ALTER TABLE `fa_subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logintype`
--
ALTER TABLE `logintype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
