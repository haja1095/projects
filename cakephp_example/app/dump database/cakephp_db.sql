-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2015 at 06:26 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakephp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `demomovies`
--

CREATE TABLE IF NOT EXISTS `demomovies` (
  `id` char(36) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL,
  `rating` varchar(45) DEFAULT NULL,
  `format` varchar(45) DEFAULT NULL,
  `length` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demomovies`
--

INSERT INTO `demomovies` (`id`, `title`, `genre`, `rating`, `format`, `length`, `created`, `modified`) VALUES
('54d9874c-ae74-4451-b54a-14f01bafaffa', 'secondtest', 'sdfsd', '4.5', 'sdf', 'sdf', '2015-02-10 05:21:32', '2015-02-10 06:21:50'),
('54d98aa7-d65c-40cd-8b7f-14f01bafaffa', 'second', 'firest', '5.4', 'dsf', 'sadf', '2015-02-10 05:35:51', '2015-02-10 05:35:51'),
('54d99419-46c0-4ed2-a1cc-14f01bafaffa', 'test1', 'test23', '5.6', 'test', '10', '2015-02-10 06:16:09', '2015-02-10 06:16:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
