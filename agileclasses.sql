-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2013 at 10:46 AM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agileclasses`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `cost` varchar(45) DEFAULT NULL,
  `is_solved` tinyint(4) DEFAULT NULL,
  `is_paid` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_complaints_project1` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `cost`, `is_solved`, `is_paid`, `created_at`, `project_id`) VALUES
(1, 'Complaints 1 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 1),
(2, 'Complaints 2 for Project 1 for customer 1 for', '5000', 0, 0, '2013-06-14 00:00:00', 1),
(3, 'Complaints 3 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 1),
(4, 'Complaints 1 for Project 2 for customer 1 for', NULL, 1, 0, '2013-06-14 00:00:00', 2),
(5, 'Complaints 2 for Project 2 for customer 1 for', NULL, 1, 1, '2013-06-14 00:00:00', 2),
(6, 'Complaints 3 for Project 2 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 2),
(7, 'Complaints 1 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 1),
(8, 'Complaints 2 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 1),
(9, 'Complaints 3 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 1),
(10, 'Complaints 1 for Project 2 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 2),
(11, 'Complaints 2 for Project 2 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 2),
(12, 'Complaints 3 for Project 2 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 2),
(13, 'Complaints 1 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 3),
(14, 'Complaints 2 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 3),
(15, 'Complaints 3 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 3),
(16, 'Complaints 1 for Project 2 for customer 1 for', NULL, 1, 0, '2013-06-14 00:00:00', 4),
(17, 'Complaints 2 for Project 2 for customer 1 for', NULL, 1, 1, '2013-06-14 00:00:00', 4),
(18, 'Complaints 3 for Project 2 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 4),
(19, 'Complaints 1 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 5),
(20, 'Complaints 2 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 5),
(21, 'Complaints 3 for Project 1 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 5),
(22, 'Complaints 1 for Project 2 for customer 1 for', NULL, 1, 0, '2013-06-14 00:00:00', 6),
(23, 'Complaints 2 for Project 2 for customer 1 for', NULL, 1, 1, '2013-06-14 00:00:00', 6),
(24, 'Complaints 3 for Project 2 for customer 1 for', NULL, 0, 0, '2013-06-14 00:00:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `mobile`, `is_active`, `dob`, `email`) VALUES
(1, 'customer 1', NULL, NULL, 1, '2013-06-14 00:00:00', NULL),
(2, 'customer 2\n', NULL, NULL, 1, '2013-06-14 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE IF NOT EXISTS `follows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `complaints_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`complaints_id`),
  KEY `fk_follows_complaints1` (`complaints_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `name`, `created_at`, `complaints_id`) VALUES
(1, 'Follow up 1 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 1),
(2, 'Follow up 2 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 1),
(3, 'Follow up 3 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 1),
(4, 'Follow up 4 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 1),
(5, 'Follow up 1 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 2),
(6, 'Follow up 2 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 2),
(7, 'Follow up 3 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 2),
(8, 'Follow up 4 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 2),
(9, 'Follow up 1 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 3),
(10, 'Follow up 2 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 3),
(11, 'Follow up 3 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 3),
(12, 'Follow up 4 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 3),
(13, 'Follow up 1 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 4),
(14, 'Follow up 2 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 4),
(15, 'Follow up 3 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 4),
(16, 'Follow up 4 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 4),
(17, 'Follow up 1 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 5),
(18, 'Follow up 2 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 5),
(19, 'Follow up 3 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 5),
(20, 'Follow up 4 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 5),
(21, 'Follow up 1 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 6),
(22, 'Follow up 2 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 6),
(23, 'Follow up 3 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 6),
(24, 'Follow up 4 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 6),
(25, 'Follow up 1 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 1),
(26, 'Follow up 2 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 1),
(27, 'Follow up 3 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 1),
(28, 'Follow up 4 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 1),
(29, 'Follow up 1 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 2),
(30, 'Follow up 2 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 2),
(31, 'Follow up 3 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 2),
(32, 'Follow up 4 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 2),
(33, 'Follow up 1 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 3),
(34, 'Follow up 2 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 3),
(35, 'Follow up 3 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 3),
(36, 'Follow up 4 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 3),
(37, 'Follow up 1 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 4),
(38, 'Follow up 2 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 4),
(39, 'Follow up 3 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 4),
(40, 'Follow up 4 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 4),
(41, 'Follow up 1 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 5),
(42, 'Follow up 2 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 5),
(43, 'Follow up 3 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 5),
(44, 'Follow up 4 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 5),
(45, 'Follow up 1 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 6),
(46, 'Follow up 2 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 6),
(47, 'Follow up 3 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 6),
(48, 'Follow up 4 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 6),
(49, 'Follow up 1 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 7),
(50, 'Follow up 2 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 7),
(51, 'Follow up 3 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 7),
(52, 'Follow up 4 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 7),
(53, 'Follow up 1 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 8),
(54, 'Follow up 2 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 8),
(55, 'Follow up 3 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 8),
(56, 'Follow up 4 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 8),
(57, 'Follow up 1 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 9),
(58, 'Follow up 2 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 9),
(59, 'Follow up 3 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 9),
(60, 'Follow up 4 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 9),
(61, 'Follow up 1 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 10),
(62, 'Follow up 2 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 10),
(63, 'Follow up 3 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 10),
(64, 'Follow up 4 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 10),
(65, 'Follow up 1 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 11),
(66, 'Follow up 2 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 11),
(67, 'Follow up 3 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 11),
(68, 'Follow up 4 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 11),
(69, 'Follow up 1 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 12),
(70, 'Follow up 2 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 12),
(71, 'Follow up 3 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 12),
(72, 'Follow up 4 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 12),
(73, 'Follow up 1 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 13),
(74, 'Follow up 2 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 13),
(75, 'Follow up 3 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 13),
(76, 'Follow up 4 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 13),
(77, 'Follow up 1 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 14),
(78, 'Follow up 2 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 14),
(79, 'Follow up 3 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 14),
(80, 'Follow up 4 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 14),
(81, 'Follow up 1 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 15),
(82, 'Follow up 2 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 15),
(83, 'Follow up 3 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 15),
(84, 'Follow up 4 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 15),
(85, 'Follow up 1 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 16),
(86, 'Follow up 2 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 16),
(87, 'Follow up 3 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 16),
(88, 'Follow up 4 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 16),
(89, 'Follow up 1 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 17),
(90, 'Follow up 2 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 17),
(91, 'Follow up 3 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 17),
(92, 'Follow up 4 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 17),
(93, 'Follow up 1 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 18),
(94, 'Follow up 2 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 18),
(95, 'Follow up 3 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 18),
(96, 'Follow up 4 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 18),
(97, 'Follow up 1 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 19),
(98, 'Follow up 2 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 19),
(99, 'Follow up 3 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 19),
(100, 'Follow up 4 for Complaints 1 for Project 1 fo', '2013-06-14 00:00:00', 19),
(101, 'Follow up 1 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 20),
(102, 'Follow up 2 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 20),
(103, 'Follow up 3 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 20),
(104, 'Follow up 4 for Complaints 2 for Project 1 fo', '2013-06-14 00:00:00', 20),
(105, 'Follow up 1 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 21),
(106, 'Follow up 2 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 21),
(107, 'Follow up 3 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 21),
(108, 'Follow up 4 for Complaints 3 for Project 1 fo', '2013-06-14 00:00:00', 21),
(109, 'Follow up 1 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 22),
(110, 'Follow up 2 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 22),
(111, 'Follow up 3 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 22),
(112, 'Follow up 4 for Complaints 1 for Project 2 fo', '2013-06-14 00:00:00', 22),
(113, 'Follow up 1 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 23),
(114, 'Follow up 2 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 23),
(115, 'Follow up 3 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 23),
(116, 'Follow up 4 for Complaints 2 for Project 2 fo', '2013-06-14 00:00:00', 23),
(117, 'Follow up 1 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 24),
(118, 'Follow up 2 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 24),
(119, 'Follow up 3 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 24),
(120, 'Follow up 4 for Complaints 3 for Project 2 fo', '2013-06-14 00:00:00', 24);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `progress` varchar(45) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_project_customer` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `description`, `is_active`, `start_date`, `progress`, `customer_id`) VALUES
(1, 'Project 1 for customer 1', NULL, 1, '2013-06-14 00:00:00', NULL, 1),
(2, 'Project 2 for customer 1', NULL, 1, '2013-06-14 00:00:00', NULL, 1),
(3, 'Project 1 for customer 1', NULL, 1, '2013-06-14 00:00:00', NULL, 1),
(4, 'Project 2 for customer 1', NULL, 1, '2013-06-14 00:00:00', NULL, 1),
(5, 'Project 1 for customer 1', NULL, 1, '2013-06-14 00:00:00', NULL, 2),
(6, 'Project 2 for customer 1', NULL, 1, '2013-06-14 00:00:00', NULL, 2),
(11, 'Cemas Projects', 'asdf', 1, '2013-06-11 00:00:00', '27', 2),
(12, 'jshdfkjdhf', 'kjdshfkjsdfh', 1, '2013-06-17 00:00:00', '', 2),
(13, 'jshdfkjdhf', 'kjdshfkjsdfh', 1, '2013-06-18 00:00:00', '52', 2),
(14, 'Mnaoj ', 'kjdshfkjsdfh', 1, '2013-06-18 00:00:00', '79', 2),
(15, 'Mnaoj ', 'kjdshfkjsdfh', 1, '2013-06-18 00:00:00', '79', 2),
(16, 'Mnaoj ', 'kjdshfkjsdfh', 1, '2013-06-18 00:00:00', '79', 2),
(17, 'Mnaoj ', 'kjdshfkjsdfh', 1, '2013-06-18 00:00:00', '79', 2),
(18, 'Mnaoj ', 'kjdshfkjsdfh', 1, '2013-06-18 00:00:00', '79', 2),
(19, 'Mnaoj ', 'kjdshfkjsdfh', 1, '2013-06-18 00:00:00', '41', 2),
(20, 'Mnaoj ', 'kjdshfkjsdfh', 1, '2013-06-18 00:00:00', '41', 2),
(21, 'grgergerg', '654564', 1, '2013-06-17 00:00:00', '', 2),
(22, 'Mnaoj', 'jfhdjfh', 1, '2013-06-18 00:00:00', '41', 2),
(23, 'Rahul Vishnoi', 'Hellow', 1, '2013-06-17 00:00:00', '', 2),
(24, 'Ajax', 'CSS', 1, '2013-06-17 00:00:00', '34', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `filestore_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filestore_type_id` int(11) NOT NULL DEFAULT '0',
  `filestore_volume_id` int(11) NOT NULL DEFAULT '0',
  `filename` varchar(255) NOT NULL DEFAULT '',
  `original_filename` varchar(255) DEFAULT NULL,
  `filesize` int(11) NOT NULL DEFAULT '0',
  `filenum` int(11) NOT NULL DEFAULT '0',
  `deleted` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

CREATE TABLE IF NOT EXISTS `filestore_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `original_file_id` int(11) NOT NULL DEFAULT '0',
  `thumb_file_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

CREATE TABLE IF NOT EXISTS `filestore_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mime_type` varchar(64) NOT NULL DEFAULT '',
  `extension` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

CREATE TABLE IF NOT EXISTS `filestore_volume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `dirname` varchar(255) NOT NULL DEFAULT '',
  `total_space` bigint(20) NOT NULL DEFAULT '0',
  `used_space` bigint(20) NOT NULL DEFAULT '0',
  `stored_files_cnt` int(11) NOT NULL DEFAULT '0',
  `enabled` enum('Y','N') DEFAULT 'Y',
  `last_filenum` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
