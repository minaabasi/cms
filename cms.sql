-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 02:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_cat_tbl`
--

CREATE TABLE `blog_cat_tbl` (
  `blog_cat_id` int(8) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `sort` int(5) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_cat_tbl`
--

INSERT INTO `blog_cat_tbl` (`blog_cat_id`, `title`, `sort`, `status`) VALUES
(2, 'php', 1, '1'),
(3, 'html', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`blog_id`, `title`, `writer`, `date`, `text`) VALUES
(4, 'php', 'مینا عباسی', '2022-07-13 00:00:00', '<tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr>');

-- --------------------------------------------------------

--
-- Table structure for table `menu_tbl`
--

CREATE TABLE `menu_tbl` (
  `menu_id` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `url` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `sort` int(10) NOT NULL,
  `chid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_tbl`
--

INSERT INTO `menu_tbl` (`menu_id`, `title`, `url`, `status`, `sort`, `chid`) VALUES
(20, 'صفحه اصلی', 'http://localhost/cms', '1', 1, 0),
(21, 'بلاگ', 'http://localhost/cms', '1', 2, 0),
(22, 'درباره ما', 'http://localhost/cms', '1', 3, 0),
(23, 'اخبار', '#', '1', 5, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` mediumint(8) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `pic` varchar(100) NOT NULL,
  `register_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `fullname`, `email`, `password`, `phone_number`, `pic`, `register_time`) VALUES
(5, 'مینا عباسی', 'mina.abbasi1995@gmail.com', '12345', 2147483647, '', NULL),
(8, 'مینا عباسی', 'Mina.abbasi1995@gmail.com', '12345', 2147483647, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_cat_tbl`
--
ALTER TABLE `blog_cat_tbl`
  ADD PRIMARY KEY (`blog_cat_id`);

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `menu_tbl`
--
ALTER TABLE `menu_tbl`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_cat_tbl`
--
ALTER TABLE `blog_cat_tbl`
  MODIFY `blog_cat_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_tbl`
--
ALTER TABLE `menu_tbl`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
