-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2022 at 08:05 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `glintel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
`id` int(255) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `roal` int(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `userId`, `password`, `roal`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(1, 'glintel@123', '12345', 0, 0, '2022-12-16 10:02:57', 'admin', '2022-12-16 10:02:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
`id` int(255) NOT NULL,
  `clientName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `serviceName` varchar(200) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `clientName`, `email`, `mobile`, `address`, `serviceName`, `message`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(11, 'ms', 'ms@gmail.com', '46549654', 'ms add ', 'Website Maintenance', 'ms text ', 0, '0000-00-00 00:00:00', 'ms', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
`id` int(255) NOT NULL,
  `clientName` varchar(100) NOT NULL,
  `clientMoble` varchar(50) NOT NULL,
  `clientLogo` varchar(200) NOT NULL,
  `clientLogoTitle` varchar(100) NOT NULL,
  `clientUrl` varchar(255) NOT NULL,
  `clientComment` varchar(200) NOT NULL,
  `clientPhoto` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `clientName`, `clientMoble`, `clientLogo`, `clientLogoTitle`, `clientUrl`, `clientComment`, `clientPhoto`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(45, 'Lakshmisankar Patel', '8948281617', '', 'www.savingnatures.com', 'https://www.savingnatures.com/ui/index.php', 'Clint comments\r\n                    ', '', 1, '0000-00-00 00:00:00', 'Admin', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
