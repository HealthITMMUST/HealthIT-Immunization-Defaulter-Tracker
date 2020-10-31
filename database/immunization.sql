-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2020 at 04:46 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `immunization`
--
CREATE DATABASE IF NOT EXISTS `immunization` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `immunization`;

-- --------------------------------------------------------

--
-- Table structure for table `drugstore`
--

CREATE TABLE IF NOT EXISTS `drugstore` (
  `drugname` varchar(50) NOT NULL,
  `drugcategory` varchar(50) NOT NULL,
  `drugformulation` varchar(30) NOT NULL,
  `drugquantity` int(20) NOT NULL,
  PRIMARY KEY (`drugname`,`drugcategory`,`drugformulation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expectedappointments`
--

CREATE TABLE IF NOT EXISTS `expectedappointments` (
  `date` date NOT NULL,
  `serialnumber` int(11) NOT NULL AUTO_INCREMENT,
  `childsnumber` int(8) NOT NULL,
  `childsnames` text NOT NULL,
  `sex` char(1) NOT NULL,
  `dob` date NOT NULL,
  `datefirstseen` date NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `village` varchar(40) NOT NULL,
  `telephone` text NOT NULL,
  `bcg` date NOT NULL,
  `revaccination` date NOT NULL,
  `poliobirthdose` date NOT NULL,
  `polio1` date NOT NULL,
  `polio2` date NOT NULL,
  `polio3` date NOT NULL,
  `dpt1` date NOT NULL,
  `dpt2` date NOT NULL,
  `dpt3` date NOT NULL,
  `pvc1` date NOT NULL,
  `pvc2` date NOT NULL,
  `pvc3` date NOT NULL,
  `rota1` date NOT NULL,
  `rota2` date NOT NULL,
  `rota3` date NOT NULL,
  `measles` date NOT NULL,
  `yellowfever` date NOT NULL,
  `vitamina` date NOT NULL,
  `fic` date NOT NULL,
  `llitn` char(1) NOT NULL,
  `referrals` int(1) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`childsnumber`),
  UNIQUE KEY `serialnumber` (`serialnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `moh510register`
--

CREATE TABLE IF NOT EXISTS `moh510register` (
  `date` date DEFAULT NULL,
  `serialnumber` int(11) DEFAULT NULL,
  `childsnumber` int(8) NOT NULL DEFAULT '0',
  `childsnames` text,
  `sex` char(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `datefirstseen` date DEFAULT NULL,
  `fname` text,
  `mname` text,
  `village` varchar(40) DEFAULT NULL,
  `telephone` text,
  `bcg` date DEFAULT NULL,
  `revaccination` date DEFAULT NULL,
  `poliobirthdose` date DEFAULT NULL,
  `polio1` date DEFAULT NULL,
  `polio2` date DEFAULT NULL,
  `polio3` date DEFAULT NULL,
  `dpt1` date DEFAULT NULL,
  `dpt2` date DEFAULT NULL,
  `dpt3` date DEFAULT NULL,
  `pvc1` date DEFAULT NULL,
  `pvc2` date DEFAULT NULL,
  `pvc3` date DEFAULT NULL,
  `rota1` date DEFAULT NULL,
  `rota2` date DEFAULT NULL,
  `rota3` date DEFAULT NULL,
  `measles` date DEFAULT NULL,
  `yellowfever` date DEFAULT NULL,
  `vitamina` date DEFAULT NULL,
  `fic` date DEFAULT NULL,
  `llitn` char(1) DEFAULT NULL,
  `referrals` int(1) DEFAULT NULL,
  `remarks` text,
  PRIMARY KEY (`childsnumber`),
  UNIQUE KEY `serialnumber` (`serialnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patientbasicinfo`
--

CREATE TABLE IF NOT EXISTS `patientbasicinfo` (
  `date` date NOT NULL,
  `serialnumber` int(11) NOT NULL AUTO_INCREMENT,
  `childsnumber` int(8) NOT NULL,
  `childsnames` text NOT NULL,
  `sex` char(1) NOT NULL,
  `dob` date NOT NULL,
  `datefirstseen` date NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `village` varchar(40) NOT NULL,
  `telephone` text NOT NULL,
  PRIMARY KEY (`childsnumber`),
  UNIQUE KEY `serialnumber` (`serialnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patientimmunizationprogress`
--

CREATE TABLE IF NOT EXISTS `patientimmunizationprogress` (
  `serialnumber` int(11) NOT NULL,
  `bcg` date NOT NULL DEFAULT '0000-00-00',
  `revaccination` date NOT NULL DEFAULT '0000-00-00',
  `poliobirthdose` date NOT NULL DEFAULT '0000-00-00',
  `polio1` date NOT NULL DEFAULT '0000-00-00',
  `polio2` date NOT NULL DEFAULT '0000-00-00',
  `polio3` date NOT NULL DEFAULT '0000-00-00',
  `dpt1` date NOT NULL DEFAULT '0000-00-00',
  `dpt2` date NOT NULL DEFAULT '0000-00-00',
  `dpt3` date NOT NULL DEFAULT '0000-00-00',
  `pvc1` date NOT NULL DEFAULT '0000-00-00',
  `pvc2` date NOT NULL DEFAULT '0000-00-00',
  `pvc3` date NOT NULL DEFAULT '0000-00-00',
  `rota1` date NOT NULL DEFAULT '0000-00-00',
  `rota2` date NOT NULL DEFAULT '0000-00-00',
  `rota3` date NOT NULL DEFAULT '0000-00-00',
  `measles` date NOT NULL DEFAULT '0000-00-00',
  `yellowfever` date NOT NULL DEFAULT '0000-00-00',
  `vitamina` date NOT NULL DEFAULT '0000-00-00',
  `fic` date NOT NULL DEFAULT '0000-00-00',
  `llitn` char(1) NOT NULL DEFAULT 'N',
  `referrals` int(1) NOT NULL DEFAULT '0',
  `remarks` text,
  PRIMARY KEY (`serialnumber`),
  UNIQUE KEY `serialnumber` (`serialnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '123',
  PRIMARY KEY (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
