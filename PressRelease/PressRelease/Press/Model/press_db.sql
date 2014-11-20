-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2014 at 11:44 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `press`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `city`, `state`, `country`, `admin`) VALUES
('Sonali', 'sonali', 'ca', 'ca', 'usa', 1),
('sonali', 'zdsd', 'sdsd', 'd', 'sd', 1),
('', '', 'santa clar', 'ca', 'USA', 1),
('', 'fdg', 'fg', 'dfg', 'dgf', 1),
('', '12345', 'CA', 'CA', 'usa', 1),
('abc@gmail', '1234', 'sadr', 'ca', 'usa', 2),
('abc@gmial.', 'ds', 'ca', 'ss', 'india', 1),
('sonali', 'as', 'sdsd', 'ca', 'sd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `release`
--

CREATE TABLE IF NOT EXISTS `release` (
  `headline` varchar(50) NOT NULL,
  `summery` varchar(70) NOT NULL,
  `newsbody` varchar(100) NOT NULL,
  `companyname` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `releasedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `release`
--

INSERT INTO `release` (`headline`, `summery`, `newsbody`, `companyname`, `email`, `releasedate`) VALUES
('HeadLines ', 'news 1 headlines', 'news body is added', 'intel ', 'intel@gmail.com', '2014-03-17'),
('headline 2', 'headline 2 ', 'headline 2', 'intel', 'intel@gmail.com', '2014-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `emailAddress`, `password`, `firstName`, `lastName`, `city`, `state`, `country`, `isAdmin`) VALUES
(1, 'admin@yahoo.com', 'abcd', 'admin', 'admin', '', '', '', 1),
(2, 'peter@yahoo.com', 'abc', 'Peter', 'Lee', '', '', '', 0),
(6, 'sonali@gmail', '1234', 'sonali', 'phatak', 'santa clara ', 'CA', 'usa', 2),
(7, 'sonali.phatak@gmail.com', '1234', 'sonali1', 'phatak1', 'santa clara ', 'CA', 'usa', 1);



