-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2015 at 04:02 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icancook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
`comment_id` int(11) NOT NULL,
  `procedure_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(2555) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
`dish_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `id` varchar(2555) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `lga` varchar(255) DEFAULT NULL,
  `ingredients` longtext,
  `procedures` longtext,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `fullname` varchar(2555) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dish_id`, `name`, `id`, `state`, `lga`, `ingredients`, `procedures`, `email`, `gender`, `fullname`, `added`, `deleted`) VALUES
(1, 'Indomie', 'ds100001', 'BAYELSA', 'Nembe', 'Indomie,water', 'Put Indomie in water<br>', 'kesid@yahoo.com', '', 'Douglas', '2015-04-15 10:40:19', 0),
(2, 'Indomie', 'ds100002', 'BAYELSA', 'Nembe', 'Indomie,water', 'Put Indomie in water<br>', 'kesid@yahoo.com', '', 'Douglas', '2015-04-15 10:40:40', 0),
(3, 'Porridge beans', 'ds100007', 'RIVERS', 'Okrika', 'beans,onion,pepper,egg', 'Wash beans,fry beans<br>', 'jane@doe.com', 'Female', 'Jane Doe', '2015-04-15 18:12:40', 0),
(4, 'Fried Egg', 'ds100008', 'BAYELSA', '', 'Egg,GroudNut Oil,salt,pepper', '<ul><li>crack the egg open and put it in a plate</li><li>add a pinch of salt and pepper</li><li>stir properly</li><li>put in hot oil</li><li>don\\''t let it burn</li><li>you\\''re good to go<br></li></ul>', 'kesid@yahoo.com', 'Male', 'Douglas kesi', '2015-04-16 15:01:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
`email_id` int(11) NOT NULL,
  `email` varchar(2555) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email_id`, `email`, `gender`, `added`, `deleted`) VALUES
(1, 'jane@doe.com', 'Female', '2015-04-15 18:12:21', 0),
(2, 'kesid@yahoo.com', 'Male', '2015-04-16 15:01:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE `ids` (
`id` int(11) NOT NULL,
  `ids` varchar(255) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ids`
--

INSERT INTO `ids` (`id`, `ids`, `added`) VALUES
(1, '100000', '2015-04-14 21:11:27'),
(2, '100001', '2015-04-15 10:40:19'),
(3, '100002', '2015-04-15 10:40:40'),
(4, '100003', '2015-04-15 11:23:01'),
(5, '100004', '2015-04-15 11:23:27'),
(6, '100005', '2015-04-15 11:45:48'),
(7, '100006', '2015-04-15 18:12:21'),
(8, '100007', '2015-04-15 18:12:40'),
(9, '100008', '2015-04-16 15:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
`view_id` int(11) NOT NULL,
  `procedure_id` int(11) NOT NULL,
  `ip` varchar(2555) NOT NULL,
  `at` int(100) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`view_id`, `procedure_id`, `ip`, `at`, `added`, `deleted`) VALUES
(2, 1111, '::1', 1429035796, '2015-04-15 00:23:16', 0),
(3, 1111, '::1', 1429057808, '2015-04-15 00:30:08', 0),
(4, 1111, '::1', 1429082134, '2015-04-15 07:15:34', 0),
(5, 0, '::1', 1429119509, '2015-04-15 17:38:29', 0),
(6, 1111, '::1', 1429120592, '2015-04-15 17:56:32', 0),
(7, 0, '::1', 1429195139, '2015-04-16 14:38:59', 0),
(8, 1111, '::1', 1429196279, '2015-04-16 14:57:59', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
 ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
 ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `ids`
--
ALTER TABLE `ids`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
 ADD PRIMARY KEY (`view_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ids`
--
ALTER TABLE `ids`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
