-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 09:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
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
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name_marathi` varchar(555) CHARACTER SET utf8 NOT NULL,
  `name_english` varchar(555) NOT NULL,
  `description_marathi` longtext CHARACTER SET utf8 NOT NULL,
  `description_english` longtext NOT NULL,
  `event_date` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name_marathi`, `name_english`, `description_marathi`, `description_english`, `event_date`, `date`, `status`, `user`) VALUES
(1, 'वेब सॉकेट का परिचय', 'Introduction to WebSockets', 'एक द्वि-दिशात्मक, पूर्ण-द्वैध, वेब ब्राउज़र से सर्वर तक लगातार कनेक्शन है। एक बार WebSocket कनेक्शन स्थापित होने के बाद कनेक्शन तब तक खुला रहता है जब तक क्लाइंट या सर्वर इस कनेक्शन को बंद करने का निर्णय नहीं लेता। इस खुले कनेक्शन के साथ, क्लाइंट या सर्वर किसी भी समय दूसरे को संदेश भेज सकते हैं। यह वेब प्रोग्रामिंग को पूरी तरह से संचालित करता है, न कि (सिर्फ) उपयोगकर्ता द्वारा शुरू किया गया। यह स्टेटफुल है। साथ ही, इस समय, एक एकल रनिंग सर्वर एप्लिकेशन सभी कनेक्शनों के बारे में जानता है, जिससे आप किसी भी समय किसी भी खुले कनेक्शन के साथ संवाद कर सकते हैं।', 'WebSockets are a bi-directional, full-duplex, persistent connection from a web browser to a server. Once a WebSocket connection is established the connection stays open until the client or server decides to close this connection. With this open connection, the client or server can send a message at any given time to the other. This makes web programming entirely event driven, not (just) user initiated. It is stateful. As well, at this time, a single running server application is aware of all connections, allowing you to communicate with any number of open connections at any given time.', '2019-05-15', '2019-05-03 06:31:29', 1, 1);

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
(5, 'Event', '', '', 'site/viewevent', 1, 0, 1, 4, 'icon-dashboard'),
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
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(555) NOT NULL,
  `order` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `link`, `order`, `date`, `status`) VALUES
(1, 'https://ngodarpan.gov.in/assets/images/slider.jpg', '', 1, '2019-05-03 05:58:37', '1'),
(2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYGliHV4Uxin95MNrkxMwTRwP48CMm77FXOBeHxIAlnX9loDAetQ', '', 2, '2019-05-03 05:58:37', '1');

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
(1, '', '');

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
(1, 'dpccs', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 1, '0000-00-00 00:00:00', 1, '', '', '', 'Email', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '', '', '', '0000-00-00', '', '', '');

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
(1, 1, 1, 'User Address Edited', '2014-05-12 01:20:21'),
(2, 1, 1, 'User Details Edited', '2014-05-12 01:21:43'),
(3, 1, 1, 'User Details Edited', '2014-05-12 01:21:53'),
(4, 4, 1, 'User Created', '2014-05-12 01:22:44'),
(5, 4, 1, 'User Address Edited', '2014-05-12 07:01:48'),
(6, 23, 2, 'User Created', '2014-10-07 01:16:55'),
(7, 24, 2, 'User Created', '2014-10-07 01:18:25'),
(8, 25, 2, 'User Created', '2014-10-07 01:19:04'),
(9, 26, 2, 'User Created', '2014-10-07 01:19:16'),
(10, 27, 2, 'User Created', '2014-10-07 01:22:18'),
(11, 28, 2, 'User Created', '2014-10-07 01:22:45'),
(12, 29, 2, 'User Created', '2014-10-07 01:23:10'),
(13, 30, 2, 'User Created', '2014-10-07 01:23:33'),
(14, 31, 2, 'User Created', '2014-10-07 01:25:03'),
(15, 32, 2, 'User Created', '2014-10-07 01:25:33'),
(16, 33, 2, 'User Created', '2014-10-07 01:29:32'),
(17, 34, 2, 'User Created', '2014-10-07 01:31:18'),
(18, 35, 2, 'User Created', '2014-10-07 01:31:50'),
(19, 34, 2, 'User Details Edited', '2014-10-07 01:34:34'),
(20, 18, 2, 'User Details Edited', '2014-10-07 01:35:11'),
(21, 18, 2, 'User Details Edited', '2014-10-07 01:35:45'),
(22, 18, 2, 'User Details Edited', '2014-10-07 01:36:03'),
(23, 7, 6, 'User Created', '2014-10-17 00:52:29'),
(24, 7, 6, 'User Details Edited', '2014-10-17 01:02:22'),
(25, 7, 6, 'User Details Edited', '2014-10-17 01:02:37'),
(26, 8, 6, 'User Created', '2014-11-15 06:35:52'),
(27, 9, 6, 'User Created', '2014-12-02 05:16:36'),
(28, 9, 6, 'User Details Edited', '2014-12-02 05:17:34'),
(29, 4, 6, 'User Details Edited', '2014-12-03 05:04:49'),
(30, 4, 6, 'User Details Edited', '2014-12-03 05:06:34'),
(31, 4, 6, 'User Details Edited', '2014-12-03 05:06:49'),
(32, 8, 6, 'User Details Edited', '2014-12-03 05:17:16');

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
-- Indexes for table `event`
--
ALTER TABLE `event`
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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
