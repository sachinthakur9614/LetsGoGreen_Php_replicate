-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 06, 2019 at 06:57 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letsgogreen`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(12) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `usertype`) VALUES
(25, 'Adarsh', 'Thakur', 'adarsh@gmail.com', '123456', 1234567890, 'contributor'),
(26, 'Druv', 'Thakur', 'dhruv@gmail.com', '123456', 98789798, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tree_catalog`
--

DROP TABLE IF EXISTS `tree_catalog`;
CREATE TABLE IF NOT EXISTS `tree_catalog` (
  `tc_id` int(20) NOT NULL AUTO_INCREMENT,
  `tree_description` varchar(100) NOT NULL,
  `tree_image` longblob NOT NULL,
  `tree_name` varchar(200) NOT NULL,
  `life-time` varchar(200) NOT NULL,
  `user_id` int(20) NOT NULL,
  PRIMARY KEY (`tc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tree_catalog`
--

INSERT INTO `tree_catalog` (`tc_id`, `tree_description`, `tree_image`, `tree_name`, `life-time`, `user_id`) VALUES
(1, 'iuyuyiu', '', '', '', 25),
(2, '', '', '', '', 25),
(3, 'uyuyui', 0x494d475f32303139303931305f313334333031202831292e6a7067, 'yutuyiyiu', '5year', 25),
(4, '', '', '', '', 25),
(5, 'uyuyui', 0x494d475f32303139303931305f3133343330312e6a7067, 'uiyiyu', 'iiu', 25),
(6, 'uyuiyiuyoi', 0x53637265656e73686f74202836292e706e67, 'yuyuiyiu', '78', 1),
(7, '', '', 'yuyuiyiu', '78', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tree_planted`
--

DROP TABLE IF EXISTS `tree_planted`;
CREATE TABLE IF NOT EXISTS `tree_planted` (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT,
  `first` longblob NOT NULL,
  `second` longblob NOT NULL,
  `final` longblob NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`tp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tree_planted`
--

INSERT INTO `tree_planted` (`tp_id`, `first`, `second`, `final`, `user_id`) VALUES
(1, 0x53637265656e73686f7420283130292e706e67, 0x53637265656e73686f74202837292e706e67, 0x53637265656e73686f74202837292e706e67, 1),
(2, 0x53637265656e73686f74202836292e706e67, 0x53637265656e73686f7420283131292e706e67, 0x53637265656e73686f74202837292e706e67, 25),
(3, 0x53637265656e73686f74202836292e706e67, 0x53637265656e73686f7420283131292e706e67, 0x53637265656e73686f74202837292e706e67, 25),
(4, 0x53637265656e73686f74202836292e706e67, 0x53637265656e73686f7420283131292e706e67, 0x53637265656e73686f74202837292e706e67, 25),
(5, 0x53637265656e73686f74202836292e706e67, 0x53637265656e73686f74202837292e706e67, 0x53637265656e73686f74202838292e706e67, 25),
(6, 0x53637265656e73686f74202836292e706e67, 0x53637265656e73686f74202837292e706e67, 0x53637265656e73686f74202838292e706e67, 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
