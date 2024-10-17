-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 08:28 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profiler`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
`id` int(5) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `newpassword` varchar(250) DEFAULT NULL,
  `ProfileImage` varchar(200) NOT NULL,
  `Age` int(3) NOT NULL,
  `PerAddress` varchar(200) NOT NULL,
  `CorAddress` varchar(200) NOT NULL,
  `Qualifiaction` varchar(100) NOT NULL,
  `MaritalStatus` varchar(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `mobile`, `dob`, `gender`, `nationality`, `newpassword`, `ProfileImage`, `Age`, `PerAddress`, `CorAddress`, `Qualifiaction`, `MaritalStatus`, `status`, `created_on`) VALUES
(1, 'Amit ', 'amit@gamil.com', '9876543212', '1999-03-17', 'Male', 'Indian', 'QWRtaW5AMTIz', '', 0, '', '', '', '', '1', '2018-10-30 12:21:48'),
(6, 'Vivek Singh', 'vivek@gmail.com', '7855467464', '2018-10-10', 'Male', 'Indian', 'QWRtaW5AMTIz', '', 0, '', '', '', '', '1', '2018-10-30 12:24:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
