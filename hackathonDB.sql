-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2022 at 10:47 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL default '0000-00-00 00:00:00' on update CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2022-11-30 21:32:15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL auto_increment,
  `project_site` varchar(225) NOT NULL,
  `team_member` varchar(225) NOT NULL,
  `audit_element` varchar(225) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(225) NOT NULL,
  `year` varchar(11) NOT NULL,
  `quarter` int(11) NOT NULL,
  `facilitator` varchar(225) NOT NULL,
  `categories` varchar(225) NOT NULL,
  `close_date` varchar(225) NOT NULL,
  `td_exlt_member` varchar(225) NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `project_site`, `team_member`, `audit_element`, `date`, `status`, `year`, `quarter`, `facilitator`, `categories`, `close_date`, `td_exlt_member`, `remark`) VALUES
(1, 'MSC yard', 'James Okere', 'Ecavation', '2022-11-22 00:00:00', 'Closed', '2022', 1, 'James', 'level 1', '2022-11-30', 'James, Peter', 'Inspected'),
(2, 'Train 7 Project', 'Peter Onyeukwu, Amaechi LonfJohn', 'Ecavation', '2022-11-23 13:16:43', 'Closed', '2022', 4, 'James', 'level 2', '2022-11-30', 'James, Peter', 'completde'),
(3, 'JV Camp', 'Emeka', 'House Keeping', '2022-11-30 13:17:00', 'Open', '2022', 4, '', 'dark', '2022-11-26', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `preventative`
--

CREATE TABLE `preventative` (
  `id` int(11) NOT NULL auto_increment,
  `x` varchar(225) NOT NULL,
  `y` int(11) NOT NULL,
  `createdate` varchar(255) NOT NULL,
  `updateddate` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `preventative`
--

INSERT INTO `preventative` (`id`, `x`, `y`, `createdate`, `updateddate`) VALUES
(1, 'Jan', 120, '12-Nov-2022', '12-Nov-2022'),
(2, 'Feb', 100, '12-Nov-2022', '12-Nov-2022'),
(3, 'Mar', 230, '12-Nov-2022', '12-Nov-2022'),
(4, 'April', 198, '12-Nov-2022', '12-Nov-2022'),
(5, 'May', 200, '12-Nov-2022', '12-Nov-2022');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(225) NOT NULL,
  `sname` varchar(225) NOT NULL,
  `refid` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `createdate` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `sname`, `refid`, `email`, `password`, `createdate`, `gender`, `status`) VALUES
(1, 'James', 'Okere', 'PMI/31C', 'james.okere@gmail.com', 'james', '', '', '1'),
(2, 'ss', 'bb', 'bb', '', 'bb', '2022-11-30', 'Male', '1'),
(3, 'okey', 'Emma', 'PMT/31', 'okey.emma@gmail.com', '1234', '2022-11-30', 'Male', '1');
