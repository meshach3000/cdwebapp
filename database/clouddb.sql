-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 04:57 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clouddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `add_id` int(11) NOT NULL,
  `add_street` varchar(45) DEFAULT NULL,
  `add_city` varchar(45) DEFAULT NULL,
  `add_country` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(45) DEFAULT NULL,
  `sub_price` varchar(45) DEFAULT NULL,
  `sub_description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`sub_id`, `sub_name`, `sub_price`, `sub_description`) VALUES
(1, 'Freemium', '0', 'Free package for new users'),
(2, 'Basic', '187.63', 'Basic package with more sensors and API access'),
(3, 'Premium', '300.25', NULL),
(4, 'Enterprise', '5000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `use_id` int(11) NOT NULL,
  `use_username` varchar(45) NOT NULL,
  `use_firstname` varchar(45) DEFAULT NULL,
  `use_lastname` varchar(45) DEFAULT NULL,
  `use_password` varchar(45) DEFAULT NULL,
  `use_email` varchar(45) DEFAULT NULL,
  `use_created` timestamp NULL DEFAULT NULL,
  `use_billing_add` int(11) NOT NULL,
  `use_delivery_add` int(11) NOT NULL,
  `use_sex` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`use_id`, `use_username`, `use_firstname`, `use_lastname`, `use_password`, `use_email`, `use_created`, `use_billing_add`, `use_delivery_add`, `use_sex`) VALUES
(1, 'fsdfds', 'meshachgrffth7@gmail.com', 'fdsfsdfdsf', 'fdsfsdfsfsds', 'fdsfsdfsdfsd', '2018-11-13 04:00:00', 0, 0, ''),
(2, 'jack100', 'jack@test.com', 'Jack', 'Test', 'password', '2018-11-25 21:57:02', 0, 0, ''),
(3, 'Jack200', 'Jimmy', 'Lim', 'password', 'Tim@gmail.com', '2018-11-25 22:01:32', 0, 0, ''),
(4, 'Jack2003', 'Jimmy', 'Tim', 'password', 'Tim2@gmail.com', '2018-11-25 22:04:07', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `usu_id` int(11) NOT NULL,
  `usu_created` timestamp NULL DEFAULT NULL,
  `usu_active` tinyint(1) NOT NULL DEFAULT '0',
  `usu_use_id` int(11) NOT NULL,
  `usu_sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_subscriptions`
--

INSERT INTO `user_subscriptions` (`usu_id`, `usu_created`, `usu_active`, `usu_use_id`, `usu_sub_id`) VALUES
(1, '2018-11-26 07:19:18', 0, 4, 1),
(3, '2018-11-26 07:19:29', 0, 4, 1),
(4, '2018-11-26 07:35:04', 0, 4, 2),
(5, '2018-11-26 07:35:21', 1, 4, 3),
(6, '2018-11-26 07:38:53', 0, 3, 3),
(7, '2018-11-26 07:39:18', 0, 3, 3),
(8, '2018-11-26 07:39:20', 0, 3, 3),
(9, '2018-11-26 07:39:22', 0, 3, 3),
(10, '2018-11-26 07:59:47', 0, 3, 2),
(11, '2018-11-26 08:00:14', 0, 3, 1),
(12, '2018-11-26 08:00:20', 0, 3, 1),
(13, '2018-11-26 08:03:34', 0, 3, 4),
(14, '2018-11-26 08:03:39', 0, 3, 4),
(15, '2018-11-26 08:08:54', 0, 3, 3),
(16, '2018-11-26 08:08:55', 0, 3, 3),
(17, '2018-11-26 08:08:55', 0, 3, 3),
(18, '2018-11-26 08:08:56', 0, 3, 3),
(19, '2018-11-26 08:08:57', 0, 3, 3),
(20, '2018-11-26 08:08:57', 0, 3, 3),
(21, '2018-11-26 08:08:58', 0, 3, 3),
(22, '2018-11-26 08:08:58', 0, 3, 3),
(23, '2018-11-26 08:08:59', 0, 3, 3),
(24, '2018-11-26 08:09:00', 0, 3, 3),
(25, '2018-11-26 08:09:00', 0, 3, 3),
(26, '2018-11-26 08:09:01', 0, 3, 3),
(27, '2018-11-26 08:15:06', 0, 3, 4),
(28, '2018-11-26 08:15:12', 0, 3, 4),
(29, '2018-11-26 08:19:11', 0, 3, 4),
(30, '2018-11-26 08:19:16', 0, 3, 1),
(31, '2018-11-26 08:19:35', 0, 3, 1),
(32, '2018-11-26 08:20:09', 0, 3, 2),
(33, '2018-11-26 08:20:32', 0, 3, 2),
(34, '2018-11-26 08:20:37', 0, 3, 1),
(35, '2018-11-26 08:22:40', 0, 3, 3),
(36, '2018-11-26 08:22:45', 0, 3, 3),
(37, '2018-11-26 08:31:01', 0, 3, 3),
(38, '2018-11-26 08:33:38', 0, 3, 3),
(39, '2018-11-26 08:35:18', 0, 3, 3),
(40, '2018-11-26 08:35:57', 0, 3, 3),
(41, '2018-11-26 08:36:50', 0, 3, 3),
(42, '2018-11-26 08:36:58', 0, 3, 2),
(43, '2018-11-26 08:37:00', 1, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`use_id`);

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `use_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
