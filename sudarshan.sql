-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2017 at 08:57 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sudarshan`
--
CREATE DATABASE IF NOT EXISTS `sudarshan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sudarshan`;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `race` varchar(255) NOT NULL,
  `ethinicity` varchar(255) NOT NULL,
  `hphone` int(11) NOT NULL,
  `wphone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `plang` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `add`, `city`, `state`, `zip`, `country`, `Gender`, `race`, `ethinicity`, `hphone`, `wphone`, `email`, `plang`) VALUES
(21, 'Amogh apt,flat no.4, kedari nagar,wanwadi', 'pune', 'Maharashtra', 411040, 'India', 'F', 'Asian,', 'A', 2147483647, 2147483647, 'vhatkarsa@gmail.com', 'Urdu'),
(22, 'Amogh apt,flat no.4, kedari n', 'pune', 'Maharashtra', 411040, 'India', 'M', 'Asian,', 'A', 9604647, 960847, 'qqrwrwtrwtr@dt', 'English'),
(23, 'wfffffapt,flat no.4, kedari nagar,wanwadi', 'pune', 'Maharashtra', 411040, 'India', 'M', 'Asian,', 'I', 960679847, 2147483647, 'sa@gmail.com', 'Urdu'),
(24, 't,flat no.4, kedari nagar,wanwadi', 'pune', 'Maharashtra', 411040, 'India', 'M', 'Asian,', 'A', 2147483647, 2147483647, 'vhatkarsa@gmail.com', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE IF NOT EXISTS `employer` (
  `Add line 1` varchar(255) NOT NULL,
  `Add line 2` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `ZipCode` int(10) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`Add line 1`, `Add line 2`, `City`, `State`, `ZipCode`, `Country`) VALUES
('sdf', '09604679847', 'pune', 'Maharashtra', 411040, 'India'),
('jggjjgjg', '09604679847', 'pune', 'Maharashtra', 411040, 'India'),
('Amogh apt,wanwadi', '09604679847', 'pune', 'Maharashtra', 411040, 'India'),
('wrwrwrfssedari nagar,wanwadi', '09604679847', 'pune', 'Maharashtra', 411040, 'India'),
('wfffffapt,flat no.4, kedari nagar,wanwadi', '09604679847', 'pune', 'Maharashtra', 411040, 'India'),
('t,flat no.4, kedari nagar,wanwadi', 'kjhkdefhkhjf', 'pune', 'Maharashtra', 564645, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE IF NOT EXISTS `medical` (
  `Mediacal History` varchar(255) NOT NULL,
  `Other Medical Condition` varchar(255) NOT NULL,
  `Parents Merital Status` varchar(255) NOT NULL,
  `Lives with` varchar(255) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `Pets` varchar(255) NOT NULL,
  `Smoking` varchar(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Bike helmet` varchar(255) NOT NULL,
  `seat bealts` varchar(255) NOT NULL,
  `sleeping location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`Mediacal History`, `Other Medical Condition`, `Parents Merital Status`, `Lives with`, `Occupation`, `Pets`, `Smoking`, `School`, `Bike helmet`, `seat bealts`, `sleeping location`) VALUES
('chk', '', '', '', '', '', '', '', '', '', ''),
('chk', '', '', '', '', '', '', '', '', '', ''),
('Head Injury,', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('ADHT,', '', '', '', '', '', '', '', '', '', ''),
('Alcohol d,', '', '', '', '', '', '', '', '', '', ''),
('Anxiety,', 'sdwdsfsf', 'Mother', 'Mother', '', '', '', '', '', '', ''),
('Alcohol,', 'oiuuywigmnfmbv', 'father', 'father', 'student', 'Dog', 'yes', 'Junior', 'yes', 'no', 'West'),
('COPD,', 'game', 'Mother', 'Mother', 'student', 'Cat', 'no', 'Senior', 'yes', 'no', 'West');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'root', 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
