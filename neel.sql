-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2018 at 12:03 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `neel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(100) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pwd`) VALUES
('manes', '12345'),
('aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE IF NOT EXISTS `attandance` (
  `sname` varchar(100) DEFAULT NULL,
  `pstatus` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `batch` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `tname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`sname`, `pstatus`, `subject`, `batch`, `date`, `tname`) VALUES
('manes', 'P', 'Maths', 'Batch-1', '2017-12-31 11:21:10', 'manes'),
('parth', 'A', 'Physics', 'Batch-1', '2018-01-08 22:15:14', 'manes');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `uname` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `enquiry` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `sid` int(100) NOT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `subject` varchar(30) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yy` int(4) NOT NULL,
  `mob` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pin` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `image_path` mediumtext,
  `tname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sid`, `uname`, `pwd`, `subject`, `fname`, `lname`, `gender`, `dd`, `mm`, `yy`, `mob`, `email`, `address`, `city`, `pin`, `state`, `country`, `image_path`, `tname`) VALUES
(1001, 'manes', '12345', 'Maths', 'manes', 'verma', 'Male', 26, 9, 1997, '7248368949', 'pramod@gmail.com', 'aa', 'Delhi', '2323', 'as', 'America', NULL, 'manes'),
(1002, 'parth', '12345', 'Physics', 'parth', 'dhoundiyal', 'Male', 16, 11, 1996, '7248368949', 'm@h.com', '', 'Select', '', '', 'Select', NULL, 'manes');

-- --------------------------------------------------------

--
-- Table structure for table `student_timetable`
--

CREATE TABLE IF NOT EXISTS `student_timetable` (
  `day` int(1) NOT NULL AUTO_INCREMENT,
  `10to11` varchar(30) NOT NULL DEFAULT '-',
  `11to12` varchar(30) NOT NULL DEFAULT '-',
  `12to1` varchar(30) NOT NULL DEFAULT '-',
  `1to2` varchar(30) NOT NULL DEFAULT '-',
  `2to3` varchar(30) NOT NULL DEFAULT '-',
  `3to4` varchar(30) NOT NULL DEFAULT '-',
  `4to5` varchar(30) NOT NULL DEFAULT '-',
  `5to6` varchar(30) NOT NULL DEFAULT '-',
  `6to7` varchar(30) NOT NULL DEFAULT '-',
  `7to8` varchar(30) NOT NULL DEFAULT '-',
  PRIMARY KEY (`day`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_timetable`
--

INSERT INTO `student_timetable` (`day`, `10to11`, `11to12`, `12to1`, `1to2`, `2to3`, `3to4`, `4to5`, `5to6`, `6to7`, `7to8`) VALUES
(1, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(2, 'Computer', '-', '-', '-', 'Physics', '-', '-', '-', 'Maths', '-'),
(3, '-', 'maths', 'physics', '-', '-', '-', 'Chemistry', 'Computer', '-', '-'),
(4, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(5, 'comp', '-', 'English', 'maths', '-', '-', '-', '-', '-', '-'),
(6, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `sid` int(100) NOT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yy` int(4) NOT NULL,
  `mob` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pin` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`sid`, `uname`, `pwd`, `fname`, `lname`, `gender`, `dd`, `mm`, `yy`, `mob`, `email`, `address`, `city`, `pin`, `state`, `country`) VALUES
(5001, 'manes', '12345', 'Manes', 'Verma', 'male', 26, 9, 1997, '344443343', 'pramod@gmail.com', '', 'Select', '', '', 'Select'),
(5003, 'Agneya', '12345', 'agneya', 'jaiswal', 'Male', 12, 7, 2000, '1234567890', '1@g.c', '', 'Select', '', '', 'Select');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_timetable`
--

CREATE TABLE IF NOT EXISTS `teacher_timetable` (
  `day` int(1) NOT NULL AUTO_INCREMENT,
  `10to11` varchar(30) NOT NULL DEFAULT '-',
  `11to12` varchar(30) NOT NULL DEFAULT '-',
  `12to1` varchar(30) NOT NULL DEFAULT '-',
  `1to2` varchar(30) NOT NULL DEFAULT '-',
  `2to3` varchar(30) NOT NULL DEFAULT '-',
  `3to4` varchar(30) NOT NULL DEFAULT '-',
  `4to5` varchar(30) NOT NULL DEFAULT '-',
  `5to6` varchar(30) NOT NULL DEFAULT '-',
  `6to7` varchar(30) NOT NULL DEFAULT '-',
  `7to8` varchar(30) NOT NULL DEFAULT '-',
  PRIMARY KEY (`day`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teacher_timetable`
--

INSERT INTO `teacher_timetable` (`day`, `10to11`, `11to12`, `12to1`, `1to2`, `2to3`, `3to4`, `4to5`, `5to6`, `6to7`, `7to8`) VALUES
(1, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(2, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(3, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(4, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(5, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(6, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
